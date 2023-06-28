<?php
/**
 * @Name: Shopnhac.com - Version 1.0
 * @Author: Mr.Phin <mh.phin@gmail.com>
 * @Link: https://www.facebook.com/hoaphin
 * @Copyright: &copy; 2021 Shopnhac.com
 */
defined('_ROOT') or die(__FILE__);

class ClassModel extends Model{
	function __construct(){
		parent::__construct();
	}
	
	function view($type=0,$catid = -1,$q = NULL,$where = 1,$start = 0,$limit = 0,$sorted_by = "hd.mahoadon desc"){
		if($sorted_by && $sorted_order) $order = ",$sorted_by $sorted_order";
		return $this->db->query("SELECT * FROM ".$this->prefix."member mb,".$this->prefix."hoadon hd,".$this->prefix."tinhtranghoadon tt WHERE  $where AND mb.id = hd.manguoidung AND hd.matinhtrang=tt.matinhtrang ORDER BY $sorted_by".($limit?" LIMIT $start,$limit":""));
	}
	function view_tinhtrang(){
	
		return $this->db->query("SELECT * FROM ".$this->prefix."tinhtranghoadon");
	}
	
	function get($id = 0){
		return $this->db->query("SELECT * FROM ".$this->prefix."member_content WHERE id = ".intval($id));
	}
	function getmember($cond = 1){
		$result = $this->db->query("SELECT mb.hoten,mb.diachi,mb.didong,mb.email,hd.ngaydathang FROM ".$this->prefix."hoadon hd,".$this->prefix."member mb  WHERE $cond ");
		$data =  $result->fetch();
		return $data;
	}
	function getnguoinhan($cond = 1){
		$result = $this->db->query("SELECT * FROM ".$this->prefix."hoadon WHERE $cond ");
		$data =  $result->fetch();
		return $data;
	}
	function getchitiet($cond = 1){
		return $this->db->query("SELECT * FROM ".$this->prefix."hoadon hd, ".$this->prefix."chitiethoadon ct WHERE $cond ");
	}
	
	function insert($data){
		$result = $this->db->insert($this->prefix.'content',$data);
		$insert_id = $this->db->insert_id();
		if($insert_id) $this->db->query("UPDATE ".$this->prefix."content SET order_id = order_id + 1 WHERE catid = ".intval($data['catid'])." AND `type` = ".intval($data['type'])." AND `id` < ".intval($insert_id));
		return $insert_id;
		
	}
	function update_ln($id,$ln,$data){
		$data['id'] = intval($id);
		$data['ln'] = $ln;
		return $this->db->replace($this->prefix.'content_ln',$data);
	}
	function update($id,$data){
		return $this->db->update($this->prefix.'content',$data," id = ".intval($id));
	}
	
	function update_dh($id,$data){
		return $this->db->update($this->prefix.'hoadon',$data," mahoadon = ".intval($id));
	}
	
	function active($id,$val = -1){
		if($val==0) $v = ' 0';
		elseif($val==1) $v = '1';
		else $v = ' ABS(`active` - 1)';
		return $this->db->query("UPDATE ".$this->prefix."hoadon SET active = $v WHERE mahoadon = ".intval($id));
	}
	
	function statusfield($field,$id){
	
		return $this->db->query("UPDATE ".$this->prefix."content SET `$field` = ABS(`$field` - 1) WHERE id = ".intval($id));
	}
	

	function delete($id){
		$this->db->delete($this->prefix."hoadon"," mahoadon = ".intval($id));
		/*$content = $result->fetch();
		if($content){
			@unlink("../template/Default/upload/".$content['image']);
			}
			$this->db->delete($this->prefix."member_content","id = ".intval($id));	
		}*/
}
	function delete2($id){
			$this->db->delete($this->prefix."chitiethoadon"," mahoadon = ".intval($id));
			/*$content = $result->fetch();
			if($content){
				@unlink("../template/Default/upload/".$content['image']);
				}
				$this->db->delete($this->prefix."member_content","id = ".intval($id));	
			}*/
	}
}
?>
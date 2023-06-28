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
	function viewComments($start=0,$limit){
		return $this->db->query("SELECT * FROM ".$this->prefix."comment WHERE 1 ORDER BY `timestamp` DESC LIMIT $start,$limit");
	}
	
	function view_all_cmt($cond = 1){
		return $this->db->query("SELECT * FROM ".$this->prefix."comment WHERE $cond ORDER BY `timestamp` DESC");
	}
	

	function check_active($id){
		return $this->db->query("SELECT * FROM php_comment WHERE id = '$id' LIMIT 1");
	}
	function hot_active($id){
		return $this->db->query("UPDATE php_comment SET active = '1' WHERE id = '$id' AND active = '0' LIMIT 1");
	}
	function hot_unactive($id){
		return $this->db->query("UPDATE php_comment SET active = '0' WHERE id = '$id' AND active = '1' LIMIT 1");
	}
	
	function delete($id){
		$this->db->delete($this->prefix."comment","id = ".intval($id));
	}
	
}
?>
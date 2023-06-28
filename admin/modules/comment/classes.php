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
	
	function active($id){
		return $this->db->query("UPDATE ".$this->prefix."comment SET active = ABS(active - 1) WHERE id =".intval($id));
	}
	
	function delete($id){
		$this->db->delete($this->prefix."comment","id = ".intval($id));
	}
}
?>
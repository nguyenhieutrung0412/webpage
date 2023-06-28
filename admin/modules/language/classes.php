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
	
	function active($ln){
		return $this->db->query("UPDATE ".$this->prefix."language SET active = ABS(active - 1) WHERE ln ='".addslashes($ln)."'");
	}
	
	function set_default($ln){
		$this->db->query("UPDATE ".$this->prefix."language SET is_default = 0");
		return $this->db->query("UPDATE ".$this->prefix."language SET is_default = 1 WHERE ln ='".addslashes($ln)."'");
	}
	
	function update($ln,$data){
		return $this->db->update($this->prefix."language",$data," ln = '".addslashes($ln)."'");
	}
}
?>
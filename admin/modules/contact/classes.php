<?php
defined('_ROOT') or die(__FILE__);
class ClassModel extends Model{
	function __construct(){
		parent::__construct();
	}
	function getBooking(){
		return $this->db->query("SELECT * FROM ".$this->prefix."contact ORDER BY timestamp desc");
	}
	function viewBooking($start=0,$limit){
		return $this->db->query("SELECT * FROM ".$this->prefix."contact WHERE 1 ORDER BY timestamp desc LIMIT $start, $limit");
	}
	function delete($id){
		return $this->db->delete($this->prefix."contact","id = '".intval($id)."' LIMIT 1");
	}
	
	function check_active($id){
		return $this->db->query("SELECT * FROM php_contact WHERE id = '$id' LIMIT 1");
	}
	function hot_active($id){
		return $this->db->query("UPDATE php_contact SET status = '1' WHERE id = '$id' AND status = '0' LIMIT 1");
	}
	function hot_unactive($id){
		return $this->db->query("UPDATE php_contact SET status = '0' WHERE id = '$id' AND status = '1' LIMIT 1");
	}
	
	function getHtml($id){
		return $this->db->query("SELECT * FROM ".$this->prefix."html_ln WHERE id = '".$id."'");
	}
}
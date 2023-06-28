<?php
/**
 * @Name: Shopnhac.com - Version 1.0
 * @Author: Mr.Phin <mh.phin@gmail.com>
 * @Link: https://www.facebook.com/hoaphin
 * @Copyright: &copy; 2021 Shopnhac.com
 */
defined('_ROOT') or die(__FILE__);

class ClassModel extends MasterModel{
	function __construct(){
		parent::__construct();
	}
	function update_view($table,$cond){
		if($view == 0 || $view == ''){
			$view = 1;
		}
		$lang = $this->lang;
		return $this->db->query("UPDATE $table SET view = view + 1 WHERE ln = '".$lang."' AND $cond LIMIT 1");
	}
}
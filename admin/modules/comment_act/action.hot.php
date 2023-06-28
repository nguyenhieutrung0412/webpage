<?php
/**
 * @Name: Shopnhac.com - Version 1.0
 * @Author: Mr.Phin <mh.phin@gmail.com>
 * @Link: https://www.facebook.com/hoaphin
 * @Copyright: &copy; 2021 Shopnhac.com
 */
defined('_ROOT') or die(__FILE__);
if(isset($_POST["id"])){
	$id = addslashes($_REQUEST['id']);
	$check_active = $oClass->check_active($id);
	$total = $check_active->num_rows();
	if($total == 1){
		$oClass->hot_active($id);
		die('1');
	}else{
		die('0');
	}
}
exit();
?>
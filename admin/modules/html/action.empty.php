<?php
/**
 * @Name: Shopnhac.com - Version 1.0
 * @Author: Mr.Phin <mh.phin@gmail.com>
 * @Link: https://www.facebook.com/hoaphin
 * @Copyright: &copy; 2021 Shopnhac.com
 */
 
defined('_ROOT') or die(__FILE__);
$tpl->reset();
if($request['c']){
	$oClass->delete($request['id']);
	clear_sql_cache();
}
$hook->redirect('?mod=configure');
?>
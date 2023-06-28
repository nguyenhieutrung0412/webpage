<?php

/**
 * @Name: Shopnhac.com - Version 1.0
 * @Author: Mr.Phin <mh.phin@gmail.com>
 * @Link: https://www.facebook.com/hoaphin
 * @Copyright: &copy; 2021 Shopnhac.com
 */
defined('_ROOT') or die(__FILE__);
$tpl->reset();
if($_POST){
	$url = str_replace('[]','data[]',$_POST['data']);
	parse_str($url,$result);
	if($result['data']) foreach($result['data'] as $ordid=>$id) $oClass->update($id,array('order_id'=>$ordid));
	clear_sql_cache();
}

?>
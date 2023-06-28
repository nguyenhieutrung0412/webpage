<?php
/**
 * @Name: Shopnhac.com - Version 1.0
 * @Author: Mr.Phin <mh.phin@gmail.com>
 * @Link: https://www.facebook.com/hoaphin
 * @Copyright: &copy; 2021 Shopnhac.com
 */
defined('_ROOT') or die(__FILE__);

if($_REQUEST['act'] =='delete'){
	$oClass->delete($_REQUEST['id']);
	$oClass->delete2($_REQUEST['id']);
	clear_sql_cache();
	// refresh
	if($request['ajax']) die('1');
	$query_string = $_SERVER['QUERY_STRING'];
	parse_str($query_string,$result);
	$mod = $result['p'];
	unset($result['act'],$result['id'],$result['c']);
	$hook->redirect('?'.http_build_query($result,NULL,'&'));
}else{

	
	$tpl->setfile(array(
		'body'=>'category.delete.tpl',
	));
	
	
	
	$request['breadcrumb'] = $breadcrumb->parse();
	
	
	$tpl->assign($request);
}	
?>
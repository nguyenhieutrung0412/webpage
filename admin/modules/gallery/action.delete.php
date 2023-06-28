<?php
/**
 * @Name: Shopnhac.com - Version 1.0
 * @Author: Mr.Phin <mh.phin@gmail.com>
 * @Link: https://www.facebook.com/hoaphin
 * @Copyright: &copy; 2021 Shopnhac.com
 */
defined('_ROOT') or die(__FILE__);


if($request['c']){
	$oGallery->delete($request['id']);
	clear_sql_cache();
	if($request['echo']) die('1');
	// refresh
	$query_string = $_SERVER['QUERY_STRING'];
	parse_str($query_string,$result);
	if($request['pid']){
		unset($result['mod'],$result['act'],$result['id'],$result['pid'],$result['c'],$result['p']);
		$hook->redirect('?mod='.$p.'&act=update&id='.$pid.'&'.http_build_query($result,NULL,'&'));
	}else{
		unset($result['act'],$result['id'],$result['c']);
		$hook->redirect('?'.http_build_query($result,NULL,'&'));
	}
}else{

	
	$tpl->setfile(array(
		'body'=>'category.delete.tpl',
	));
	$breadcrumb->reset();
	$breadcrumb->assign("","Products");
	$breadcrumb->assign("./?mod=product","Manage Products");
	
	
	$request['breadcrumb'] = $breadcrumb->parse();
	
	
	$tpl->assign($request);
}	
?>
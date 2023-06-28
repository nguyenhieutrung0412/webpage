<?php
/**
 * @Name: Shopnhac.com - Version 1.0
 * @Author: Mr.Phin <mh.phin@gmail.com>
 * @Link: https://www.facebook.com/hoaphin
 * @Copyright: &copy; 2021 Shopnhac.com
 */
defined('_ROOT') or die(__FILE__);


	$oGallery->active($request['id']);
	clear_sql_cache();
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
?>
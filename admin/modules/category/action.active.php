<?php
/**
 * @Name: Shopnhac.com - Version 1.0
 * @Author: Mr.Phin <mh.phin@gmail.com>
 * @Link: https://www.facebook.com/hoaphin
 * @Copyright: &copy; 2021 Shopnhac.com
 */
defined('_ROOT') or die(__FILE__);

	$oClass->active($request['id']);
	clear_sql_cache();
	// refresh
	$query_string = $_SERVER['QUERY_STRING'];
	parse_str($query_string,$result);
	unset($result['mod'],$result['act'],$result['id'],$result['p']);
	$hook->redirect('?mod='.$request['p'].'&'.http_build_query($result,NULL,'&'));
?>
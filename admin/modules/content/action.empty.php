<?php
/**
 * @Name: Shopnhac.com - Version 1.0
 * @Author: Mr.Phin <mh.phin@gmail.com>
 * @Link: https://www.facebook.com/hoaphin
 * @Copyright: &copy; 2021 Shopnhac.com
 */
 
defined('_ROOT') or die(__FILE__);

$tpl->reset();
$tpl->setfile(array(
	'body'=>'content.empty.tpl',
));
$total = 0;
$result = $oCategory->view($request['type'],'c.parentid = 0');
$total += $result->num_rows();
while($rs = $result->fetch()){
	$tpl->assign($rs,'category');
}

$result = $oClass->view($request['type'],'c.catid = 0');
$total += $result->num_rows();
while($rs = $result->fetch()){
	$tpl->assign($rs,'product');
}
if(!$total) $request['empty_data'] = '<tr><td>This module are already empty data.</td></tr>';
$tpl->assign($request);
?>
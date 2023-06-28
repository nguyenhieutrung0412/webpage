<?php
/**
 * @Name: Shopnhac.com - Version 1.0
 * @Author: Mr.Phin <mh.phin@gmail.com>
 * @Link: https://www.facebook.com/hoaphin
 * @Copyright: &copy; 2021 Shopnhac.com
 */
defined('_ROOT') or die(__FILE__);
extract($_GET);
$request = $_GET;
$request['type'] = intval($type);
$request['parentid'] = intval($parentid);
$request['query_string'] = '?'.$_SERVER['QUERY_STRING'];
$request['http_referer'] = $_SERVER['HTTP_REFERER'];

if($_POST){
	// update main
	$arr = array($_GET['code']=>$_POST['value']);
	$oClass->update($arr);
	//clear_cache_configure();
	$oMaster->user_log('Updated value: '.$_POST['value'].' for configure: '.$_GET['code']);
	clear_sql_cache();
	$hook->redirect('?mod=configure&gid='.$_GET['gid']);
}


$tpl->setfile(array(
	'body'=>'configure.update.tpl',
));


$result = $oConfigure->view(" code = '".stripslashes($_GET['code'])."'");
$data = $result->fetch();
$set_function = $data['set_function'];
if($set_function){
	eval('$value = '.$set_function."'".$data['value']."');");
}else{
	$value  = textfield('value',$data['value']);
}
$data['value'] = $value;
$tpl->assign($data);
$breadcrumb->assign("","Edit");


$request['breadcrumb'] = $breadcrumb->parse();
$tpl->assign($request);



?>
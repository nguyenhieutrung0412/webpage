<?php
/**
 * @Name: Shopnhac.com - Version 1.0
 * @Author: Mr.Phin <mh.phin@gmail.com>
 * @Link: https://www.facebook.com/hoaphin
 * @Copyright: &copy; 2021 Shopnhac.com
 */
defined('_ROOT') or die(__FILE__);
$tpl->setfile(array(
	'body'=>'comment_act.tpl',
));
$result = $oClass->view_all_cmt();

$total = $result->num_rows();

$limit = 50;
$start = $limit * intval($_GET['page']);
$url = "?mod=comment_act";
$dp = new paging($url,$total,$limit);
$dp->current='<a class="active_page">%d</a>';
$tpl->assign(array('divpage'=>$dp->simple(10),));


$stt=1;
$cat = $oClass->viewComments($start,$limit);


while($rs = $cat->fetch()){
	$rs['stt'] = $stt++;
	$tpl->assign($rs,'comment');
}


$url = $_SERVER['HTTP_REFERER'];
if($_GET['c']){
	$id = $_REQUEST['id'];
	$lastid = $oClass->delete($id);
	header("Location: $url");
}
?>
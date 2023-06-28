<?php
defined('_ROOT') or die(__FILE__);
$tpl->setfile(array(
	'body'=>'contact.tpl',
));


$result = $oClass->getBooking();
$total = $result->num_rows();
$stt = 1;
$limit = 50;
$start = $limit * intval($_GET['page']);
$url = "?mod=contact";
$dp = new paging($url,$total,$limit);
$dp->current='<a class="active_page">%d</a>';
$tpl->assign(array('divpage'=>$dp->simple(10),));
$total_pages = ($start+$limit.'/'.$total);
$tpl->assign($total_pages,'total_pages');

if($total > $limit){
	$tpl->box('box_paging');
}

if($total > 0){
	$msg = '<p class="p-msg">Hiện tại có '.$total.' Contact.</p>';
	$tpl->assign($msg,'msg');
	$tpl->assign('show-btn','btn_status');
}else{
	$msg = '<p class="p-msg">Hiện tại không có Contact nào.</p>';
	$tpl->assign($msg,'msg');
	$tpl->assign('hide-btn','btn_status');
}

$result_re = $oClass->viewBooking($start,$limit);
while($rs = $result_re->fetch()){
	$rs['stt'] = $stt++;
	$tpl->assign($rs,'booking');
}

if($_GET['c']){
	$url = $_SERVER['HTTP_REFERER'];
	$id = $_REQUEST['id'];
	$oClass->delete($id);
	header("Location: $url");
}

//Delete Comment(s)
if($_REQUEST['c']==1){
	$url = $_SERVER['HTTP_REFERER'];
	$delete_id = $_REQUEST['id'];

	$oClass->delete($delete_id);

	header("Location: $url");
}
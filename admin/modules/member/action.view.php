<?php
defined('_ROOT') or die(__FILE__);
$tpl->setfile(array(
	'body'=>'member.tpl',
));
$html = array();

$kt= $oContent->view_table("php_member");
$total = $kt->num_rows();
$stt=1;

while($rs = $kt->fetch()){
	$rs['stt'] = $stt++;
	$code = base64url_encode($rs['id'].'_____'.$rs['email'].'_____'.$rs['active']);
	$rs['code'] = $code;
	$rs['code_act'] = "'".$code."'";
	
	//code quà tặng
	$code2 = base64url_encode($rs['id'].'_____'.$rs['email'].'_____'.$rs['active'].'_____'.$rs['active_gift'].'_____'.$rs['active_quatang']);
	$rs['code2'] = $code2;
	$rs['code_act2'] = "'".$code2."'";
	
	$tpl->assign($rs,'ds');
	
}

$html['total'] = number_format($total);
$tpl->merge($html,'detail');
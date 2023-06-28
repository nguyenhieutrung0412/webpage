<?php
/**
 * @Name: Shopnhac.com - Version 1.0
 * @Author: Mr.Phin <mh.phin@gmail.com>
 * @Link: https://www.facebook.com/hoaphin
 * @Copyright: &copy; 2021 Shopnhac.com
 */
defined('_ROOT') or die(__FILE__);

$master = $oHtml->get(1);
$master = $hook->format($master);
$domain = $master['domain'];
$hotline = $master['hotline'];
$master_email = $master['email'];
$master['canonical'] = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$tpl->merge($master,'master');
//dịch vụ
$ktdv = $oContent->view(1);
while($rs = $ktdv->fetch()){

	$tpl->assign($rs,'dv');
}

$tin_tuc_footer = $oContent->view(3);
$stt = 1;
while($rs = $tin_tuc_footer->fetch()){

	
	if($stt == 4){
		return 0;
	}
	$tpl->assign($rs,'tin_tuc_footer');
	$stt++;
}





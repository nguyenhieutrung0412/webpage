<?php
/**
 * @Name: Shopnhac.com - Version 1.0
 * @Author: Mr.Phin <mh.phin@gmail.com>
 * @Link: https://www.facebook.com/hoaphin
 * @Copyright: &copy; 2021 Shopnhac.com
 */
defined('_ROOT') or die(__FILE__);
$tpl->setfile(array(
	'tpl_meta'=>'tpl_meta.tpl',
	'tpl_header'=>'tpl_header.tpl',
	'tpl_body'=>'home.tpl',
	'tpl_slide'=>'slide.tpl',
	'tpl_footer'=>'tpl_footer.tpl'
));

$banner = $oContent->view(2);
while($rs = $banner->fetch()){

	$tpl->assign($rs,'banner');
}

$slider = $oContent->view(4);
while($rs = $slider->fetch()){

	$tpl->assign($rs,'slider');
}


$meta = array();
$meta['title'] = $master['mtitle'];
$meta['desc'] = $master['mdesc'];
$meta['icon'] = 'data/upload/cover.jpg';
$tpl->merge($meta,'meta');


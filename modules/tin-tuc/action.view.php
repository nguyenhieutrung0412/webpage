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
	'tpl_body'=>'news.tpl',
	
	'tpl_footer'=>'tpl_footer.tpl'
));

//Phân trang
$tin_tuc = $oContent->view(3);
//lấy tổng số phần tử tin 
$total = $tin_tuc->num_rows();

$limit = 8;
$start = $limit*intval($_GET['page']);
$url = $system->root_dir.'tin-tuc';
$dp = new paging($url,$total,$limit);
$dp->current = '<a class="active_page">%d</a>';
$tpl->assign(array('divpage'=>$dp->simple(10)));


 $tin_tuc = $oContent->view(3,1,$start,$limit);

 
 //xử lý tin tức ở vị trí thứ 4
 $stt=1;
 while($rs = $tin_tuc->fetch()){
	if($stt%4==0){
		$rs['fix'] = ' class="li4"';
	}
	$tpl->assign($rs,'tin_tuc');
	$stt++;
 }

$meta = array();
$meta['title'] = 'Tin tức';
$meta['desc'] = $master['mdesc'];
$meta['icon'] = 'data/upload/cover.jpg';
$tpl->merge($meta,'meta');


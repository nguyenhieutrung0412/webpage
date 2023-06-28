<?php
/**
 * @Name: Shopnhac.com - Version 1.0
 * @Author: Mr.Phin <mh.phin@gmail.com>
 * @Link: https://www.facebook.com/hoaphin
 * @Copyright: &copy; 2021 Shopnhac.com
 */

use function PHPSTORM_META\type;

defined('_ROOT') or die(__FILE__);
if($system->params[0]){
	
	//lấy category
	// $rs_cat = $oCategory->view(-1,-1,'ln.name_seo = "'.addslashes($system->params[0]).'"',0,1);
	// $total_cat = $rs_cat->num_rows();
	// $detail_cat = $rs_cat->fetch();
	
	//lấy cấp content khác type: 1,2,3,8
	$rs_content = $oContent->view(-1,"ln.name_seo = '".addslashes($system->params[0])."'",0,1);
	//print_r($rs_content);
	$total_content = $rs_content->num_rows();
	$detail = $rs_content->fetch();
	//print_r($detail);
	
	if($total_content==0){
		header("Location: ".$domain,true,301);
		exit();
	}
	

	//dịch vụ
	if($detail['type']==1){
		$tpl->setfile(array(
			'tpl_meta'=>'tpl_meta.tpl',
			'tpl_header'=>'tpl_header.tpl',
			'tpl_body'=>'dichvu-detail.tpl',
			'tpl_footer'=>'tpl_footer.tpl'
		));
		$tpl->merge($detail,'detail');
		
		//dịch vụ khác
		$ktdvk = $oContent->view(1,"c.id != '".$detail['id']."'");
		 //print_r($ktdvk);
		while($rs = $ktdvk->fetch()){
			//print_r($rs);
			$tpl->assign($rs,'dvk');

		}
	}
	//END.dịch vụ

	//Tin tức
	if($detail['type']== 3){
		$tpl->setfile(array(
			'tpl_meta' => 'tpl_meta.tpl',
			'tpl_header' => 'tpl_header.tpl',
			'tpl_body'=>'news-detail.tpl',
			'tpl_footer'=>'tpl_footer.tpl'
		));
		$tpl->merge($detail,'detail');
		
		//Các tin tức khác
		$tin_tuc_khac = $oContent->View(3,"c.id != '".$detail['id']."'");
		

		$stt=1;
		while($rs = $tin_tuc_khac->fetch()){
			if($stt%4==0)
			{
				$rs['fix']=' class="li4"';
			}
			if($stt == 5)
			{
				return 0;
			}
			$tpl->assign($rs,'tin_tuc_khac');
			$stt++;
		}
	}
	//End.Tin tức
	//Library
	if($detail['type']==5){
		$tpl->setfile(array(
			'tpl_meta'=>'tpl_meta.tpl',
			'tpl_header'=>'tpl_header.tpl',
			'tpl_body'=>'library.tpl',
			'tpl_footer'=>'tpl_footer.tpl'
		));

		//Phân trang
		$gl = $oGallery->view("content",$detail['id']);
		//lấy tổng số phần tử tin 
		$total = $gl->num_rows();
		
		$limit = 25;
		$start = $limit*intval($_GET['page']);
		$url = $system->root_dir.'gallery';
		$dp = new paging($url,$total,$limit);
		$dp->current = '<a class="active_page">%d</a>';
		$tpl->assign(array('divpage'=>$dp->simple(10)));

		$gl = $oGallery->view("content",$detail['id'],$start,$limit);

		
		$stt=1;
		while($rs_gl = $gl->fetch()){
			if($stt%5==0)
			{
				$rs_gl['fix']=' class="fix"';
			}
			$tpl->assign($rs_gl,'gl');
			$stt++;
		}
	}
	//END library
	
}
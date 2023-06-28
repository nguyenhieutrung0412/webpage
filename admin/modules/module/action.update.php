<?php
/**
 * @Name: Shopnhac.com - Version 1.0
 * @Author: Mr.Phin <mh.phin@gmail.com>
 * @Link: https://www.facebook.com/hoaphin
 * @Copyright: &copy; 2021 Shopnhac.com
 */
defined('_ROOT') or die(__FILE__);


if($_POST){
	// update main
	//print_r($cfg_type);exit();
	$error = NULL;
	if(!$error){	
		$arr = array(
			'module'=>$_POST['module'],
		);
		if($request['do']=='new'){
			$lastid = $oClass->insert($arr);
		}else{
			$oClass->update($request['id'],$arr);
			$lastid = $request['id'];
		}
		// update _ln
		$ln_req = $cfg_type['required_fields']?explode(',',$cfg_type['required_fields']):array('name');
		
		if(!$cfg_type['required_fields'] || $_POST[$ln_req[0]]) foreach($_POST[$ln_req[0]] as $ln=>$val){
			if(!$cfg_type['required_fields'] || $val){
				$arr_ln  = array(
					'name'=>$_POST['name'][$ln],
					'module_name'=>$_POST['module_name'][$ln],
					'web_title'=>$_POST['web_title'][$ln],
					'web_keyword'=>$_POST['web_keyword'][$ln],
					'web_desc'=>$_POST['web_desc'][$ln],
					'meta_extra'=>$_POST['meta_extra'][$ln],
				);
				
				
				$oClass->update_ln($lastid,$ln,$arr_ln);
			}
		}
		
	
		// gallery 
		
		clear_sql_cache();
		// refresh
		$query_string = $_SERVER['QUERY_STRING'];
		parse_str($query_string,$result);
	
		if($_POST['back']){
			unset($result['act'],$result['id'],$result['do']);
		}else{
			$_SESSION['updated'] = true;
		}
		$hook->redirect('?'.http_build_query($result,NULL,'&'));

	}
}


$tpl->setfile(array(
	'body'=>'module.update.tpl',
));

$request['error'] = $error;
if($_SESSION['updated']){
	$request['back_list_0'] = 'selected';
	$request['msg'] = $languages['data_updated'];
	unset($_SESSION['updated']);
}
$content = array();
if($request['do']=='new'){
	$cat_ln = array();
	$breadcrumb->assign("","New");
	$request['access_action'] = 'access_new';
}else{
	$cat_ln = $oClass->get_ln($_GET['id']);
	$result = $oClass->get($request['id']);
	$content = $result->fetch();
	$tpl->assign($hook->format($content));
	$breadcrumb->assign("","Edit",$request['bread']);
	$request['display_update'] = 'style="display: block;"';
	$request['access_action'] = 'access_edit';
}

$lang_cond = "active = 1";
$lang_cond .= $cfg_type['languages']?" AND is_default=1":"";
$lang = $oLanguage->view($lang_cond);
if(!$lang->num_rows()){
	$request['msg'] = $languages['require_least_language_enable'];
	$request['hide_no_language'] = 'hide';
}
while($rs = $lang->fetch()){
	$arr = array_merge($rs,$cat_ln[$rs['ln']]?$cat_ln[$rs['ln']]:array());
	$arr = $hook->format($arr);
	$arr['default_ln'] = $cfg['language_tab'] == 'tab'?($arr['is_default']?'active':'hide'):'';
	$arr['tab_default'] = $rs['is_default']?'class="active"':'';
	$tpl->assign($arr,'language');
}

$request['breadcrumb'] = $breadcrumb->parse();
$request['size_icon'] = demension_size($cfg_type['main_icon']['w'],$cfg_type['main_icon']['h']);
$request['size_image'] = demension_size($cfg_type['main_img']['w'],$cfg_type['main_img']['h']);
$request['size_ln_icon'] = demension_size($cfg_type['ln_main_icon']['w'],$cfg_type['ln_main_icon']['h']);
$request['size_ln_image'] = demension_size($cfg_type['ln_main_img']['w'],$cfg_type['ln_main_img']['h']);
$request['size_gallery'] = demension_size($cfg_type['gallery_img']['w'],$cfg_type['gallery_img']['h']);
$request['required_fields'] = $cfg_type['required_fields']?"'".str_replace(',',"','",$cfg_type['required_fields'])."'":'';
$tpl->assign($request);
$show = array();
if($show_fields) foreach($show_fields as $field){
	$a = explode(':',$field);
	$show['display_'.$a[0]] = 'style="display: '.($a[1]?$a[1]:$table_row).';"';
	$show['is_'.$a[0]] = 1;
}
$tpl->assign($show);


?>
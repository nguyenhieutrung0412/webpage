<?php
/**
 * @Name: Shopnhac.com - Version 1.0
 * @Author: Mr.Phin <mh.phin@gmail.com>
 * @Link: https://www.facebook.com/hoaphin
 * @Copyright: &copy; 2021 Shopnhac.com
 */
defined('_ROOT') or die(__FILE__);

$oClass = new ClassModel;
$breadcrumb = new breadcrumb;

extract($_GET);
$request = $_GET;
$request['type'] = intval($request['type']);
$request['query_string'] = '?'.$_SERVER['QUERY_STRING'];
$request['http_referer'] = $_SERVER['HTTP_REFERER'];
$table_row = ie()?'block':'table-row';

$cfg_type = array();
$result = $oConfigure->getMod(" `module`='".$system->module."' AND typeid='".intval($request['id'])."'");
$tmp = $result->fetch();
$request['module_description'] = nl2br($tmp['content']);
if($tmp['data']) $cfg_type = unserialize($tmp['data']);
$show_actions = $cfg_type['act']?$cfg_type['act']:array();
if(!$cfg_type['act']) $cfg_type['act'] = array();
$show_fields = array();
if(in_array('image',$cfg_type['act'])&&$cfg_type['main_icon']['chose']) $show_fields[] = 'icon';
if(in_array('image',$cfg_type['act'])&&$cfg_type['main_img']['chose']) $show_fields[] = 'image';
if(in_array('ln_image',$show_actions)&&$cfg_type['ln_main_icon']['chose']) $show_fields[] = 'ln_icon';
if(in_array('ln_image',$show_actions)&&$cfg_type['ln_main_img']['chose']) $show_fields[] = 'ln_image';
if(in_array('gallery',$cfg_type['act'])) $show_fields[] = 'gallery';
if(in_array('enable_date',$show_actions)) $show_fields[] = 'enable_date';

$tmp = $cfg_type['gallery_fields']?explode(',',$cfg_type['gallery_fields']):array();
if(in_array('gallery',$cfg_type['act']) && $cfg_type['gallery_icon']['chose']) $tmp[] = 'icon';
foreach($tmp as $v) $show_fields[] = 'gallery_'.$v;//.':block';

$required_fields =  $cfg_type['required_fields']?explode(',',$cfg_type['required_fields']):array();


?>
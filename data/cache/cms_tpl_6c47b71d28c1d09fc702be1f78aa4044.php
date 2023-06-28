<?php defined('_ROOT') or die('Not Allowed');
$merge_block = 6;
$_tpl = '﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!--
	Website generated by CMS v02
	URL: http://demo.phpbasic.com
	Email: w2ajax@gmail.com
-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="../template/Default/style/font-awesome.css" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="../template/Default/style/font-awesome-animation.min.css" media="all"/>

<link rel="stylesheet" type="text/css" href="template/css/common.css" />
<link rel="icon" href="../favicon.ico" type="image/x-icon" />
<title>CMS - '.(isset($this->_data["."][0]['web_client'])?$this->_data["."][0]['web_client']:'').'</title>       
<script>var token  = \''.(isset($this->_data["."][0]['token'])?$this->_data["."][0]['token']:'').'\';</script>
<!--<script type="text/javascript" src="../plugins/jquery-1.11.1.min.js"></script>-->
<script type="text/javascript" src="../plugins/jquery-1.3.2.min.js"></script>

<script type="text/javascript" src="../template/Default/js/jquery.form.min.js"></script>



<script>var plugins_dir = \'../\';var root_dir = \''.(isset($this->_data["."][0]['root_dir'])?$this->_data["."][0]['root_dir']:'').'\'; var lang = \''.(isset($this->merge['system']['lang'])?$this->merge['system']['lang']:'').'\';</script>
<script type="text/javascript" src="../plugins/tableorder/jquery.tableorder.js"></script>
<script type="text/javascript" src="template/js/common.js"></script>
<script type="text/javascript" src="template/js/module.configure.js"></script>

<script type="text/javascript" src="../plugins/tinymce/tiny_mce.js"></script>
<script type="text/javascript" src="template/js/editor.js"></script>

<script type="text/javascript" src="../plugins/ckeditor/ckeditor.js"></script>

<script type="text/javascript" src="../plugins/divbox/divbox.js"></script>
<link rel="stylesheet" href="../plugins/divbox/css/frontend.css" type="text/css" media="screen" />
<script type="text/javascript">
var access_new = \''.(isset($this->merge['access']['new'])?$this->merge['access']['new']:'').'\';
var access_edit = \''.(isset($this->merge['access']['edit'])?$this->merge['access']['edit']:'').'\';
var access_delete = \''.(isset($this->merge['access']['delete'])?$this->merge['access']['delete']:'').'\';
</script>
<script type="text/javascript" src="../plugins/validate/validate.js"></script>
<link rel="stylesheet" href="../plugins/validate/css/validate.css" type="text/css" media="screen" />
<script type="text/javascript" src="../plugins/dateinput/dateinput.js"></script>
<!--<script type="text/javascript" src="../plugins/jquery.slug.js"></script>-->
<script type="text/javascript">
$(document).ready(function(){
	$.each($(\'form input[type=text]\'),function(i,val){
		var id = $(val).attr(\'name\');	
		id = id.replace("[","_");
		id = id.replace("]","");
		if($(val).attr(\'id\') == "" || $(val).attr(\'id\')  == undefined){
			$(val).attr(\'id\',id);
			$(val).addClass(id);
		}
	});
	//$("#name_vn").slug();
	
});
</script>

<script type="text/javascript">
$(document).ready(function(){
	$(".mtitle_vn").attr(\'maxlength\',\'60\');
	$(".mdesc_vn").attr(\'maxlength\',\'300\');
	$(\'.view_vn\').css({backgroundColor:"#fcebac"});
	$(\'.name_seo_vn\').css({backgroundColor:"#dadada"});	
});
</script>
<script type="text/javascript" src="template/skins/default/js/common.js"></script>
<link rel="stylesheet" type="text/css" href="template/skins/default/css/style.css" />
<!--[if IE]>
<style type="text/css">
tr.show{ display: block; }
</style>
<![endif]--> 

</head>
<body>

<div class="wrapper">
	<div class="container">
		<div class="hd">
			<p class="hd-r">
				Welcome <span class="hd-username">'.(isset($this->merge['login_user']['fullname'])?$this->merge['login_user']['fullname']:'').'</span>, 
				<a href="?mod=user&act=update" class="hd-profile">'.(isset($this->merge['lang']['update_profile'])?$this->merge['lang']['update_profile']:'').'</a> or 
				<a href="?mod=user&act=reset" class="hd-resetPass">'.(isset($this->merge['lang']['reset_password'])?$this->merge['lang']['reset_password']:'').'</a> <span class="hd-divider">|</span> 
				<a href="?mod=user&act=logout" class="hd-logout">'.(isset($this->merge['lang']['logout'])?$this->merge['lang']['logout']:'').'</a>
			</p>
			<a class="hd-logo" href="./">'.(isset($this->_data["."][0]['web_client'])?$this->_data["."][0]['web_client']:'').'</a>
		</div>
		
		<div class="ct">
			<div class="side">
				<!--<p class="menu-des">Menu</p>
				<p class="menu-desSub">
					Manage the site by this menu.<br />
					Click to collapse the menu.
				</p>-->
				';if(isset($this->_data['leftmenu.'])){for($i=0;$i< count($this->_data['leftmenu.']);$i++){$_tpl .= '
				<div class="menu '.(isset($this->_data["leftmenu."][$i]["cls_cms"])?$this->_data["leftmenu."][$i]["cls_cms"]:'').'">
					<h2 id="'.(isset($this->_data["leftmenu."][$i]["id"])?$this->_data["leftmenu."][$i]["id"]:'').'menu">'.(isset($this->_data["leftmenu."][$i]["name"])?$this->_data["leftmenu."][$i]["name"]:'').'</h2>
					'.(isset($this->_data["leftmenu."][$i]["links"])?$this->_data["leftmenu."][$i]["links"]:'').'
				</div>
				';}}$_tpl .= '
			</div>
			
			<div class="main">
				<div class="mainInner">
					<div class="breadcrumb">'.(isset($this->_data["."][0]['breadcrumb'])?$this->_data["."][0]['breadcrumb']:'').'</div>
					<div class="module_description">'.(isset($this->_data["."][0]['module_description'])?$this->_data["."][0]['module_description']:'').'</div>				
					<div class="table_list toolbar"></div>
<div class="form">
	<form action="" method="post" enctype="multipart/form-data" name="form1" id="fcontent">
	
		'; if(isset($this->box['language_tab'])){ $_tpl.= '
		<div class="language_tab '.(isset($this->_data["."][0]['hide_no_html_record'])?$this->_data["."][0]['hide_no_html_record']:'').'">
			';if(isset($this->_data['language.'])){for($i=0;$i< count($this->_data['language.']);$i++){$_tpl .= '
			<a href="#" onclick="showLangTab(\''.(isset($this->_data["language."][$i]["ln"])?$this->_data["language."][$i]["ln"]:'').'\',this);" '.(isset($this->_data["language."][$i]["tab_default"])?$this->_data["language."][$i]["tab_default"]:'').'>'.(isset($this->_data["language."][$i]["ln_name"])?$this->_data["language."][$i]["ln_name"]:'').'</a>
			';}}$_tpl .= '
		</div>
		';}$_tpl .= '
		<div class="error">'.(isset($this->_data["."][0]['msg'])?$this->_data["."][0]['msg']:'').'</div>
		
		
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table-Form1 '.(isset($this->_data["."][0]['hide_no_html_record'])?$this->_data["."][0]['hide_no_html_record']:'').'">
			';if(isset($this->_data['language.'])){for($i=0;$i< count($this->_data['language.']);$i++){$_tpl .= '
			<tbody class="'.(isset($this->_data["language."][$i]["default_ln"])?$this->_data["language."][$i]["default_ln"]:'').' tab_language" id="tab_'.(isset($this->_data["language."][$i]["ln"])?$this->_data["language."][$i]["ln"]:'').'">
				<tr>
				  <td class="t1">&nbsp;</td>
				  <td class="t2">&nbsp;</td>
			 	</tr>
				'.(isset($this->_data["language."][$i]["ln_fields"])?$this->_data["language."][$i]["ln_fields"]:'').'
				'.(isset($this->_data["language."][$i]["ln_fields_extra"])?$this->_data["language."][$i]["ln_fields_extra"]:'').'
				
				<tr class="hide '.(isset($this->_data["."][0]['display_ln_icon'])?$this->_data["."][0]['display_ln_icon']:'').'" >
					<td class="textLabel"><label>'.(isset($this->_data["."][0]['ln_field_icon'])?$this->_data["."][0]['ln_field_icon']:'').' '.(isset($this->_data["language."][$i]["ln_alias"])?$this->_data["language."][$i]["ln_alias"]:'').'</label></td>
					<td>						
						<input name="ln_icon['.(isset($this->_data["language."][$i]["ln"])?$this->_data["language."][$i]["ln"]:'').']" type="file" id="ln_icon" class="no_width" /> '.(isset($this->_data["."][0]['size_ln_icon'])?$this->_data["."][0]['size_ln_icon']:'').'
						<p class="hide">
							<a href="'.(isset($this->_data["."][0]['_UPLOAD'])?$this->_data["."][0]['_UPLOAD']:'').''.(isset($this->_data["language."][$i]["ln_icon"])?$this->_data["language."][$i]["ln_icon"]:'').'" class="mb">'.(isset($this->_data["language."][$i]["ln_icon"])?$this->_data["language."][$i]["ln_icon"]:'').'</a>
							<input type="checkbox" name="delete_ln_icon['.(isset($this->_data["language."][$i]["ln"])?$this->_data["language."][$i]["ln"]:'').']" class="no_width" value="1" />
							<input name="current_ln_icon['.(isset($this->_data["language."][$i]["ln"])?$this->_data["language."][$i]["ln"]:'').']" type="hidden" value="'.(isset($this->_data["language."][$i]["ln_icon"])?$this->_data["language."][$i]["ln_icon"]:'').'" title="'.(isset($this->_data["language."][$i]["ln_icon"])?$this->_data["language."][$i]["ln_icon"]:'').'"  class="no_width box_delete_file" />
							'.(isset($this->merge['lang']['delete'])?$this->merge['lang']['delete']:'').'					  	</p>					</td>
				</tr>
				<tr class="hide '.(isset($this->_data["."][0]['display_ln_image'])?$this->_data["."][0]['display_ln_image']:'').'" >
					<td class="textLabel"><label>'.(isset($this->_data["."][0]['ln_field_image'])?$this->_data["."][0]['ln_field_image']:'').' '.(isset($this->_data["language."][$i]["ln_alias"])?$this->_data["language."][$i]["ln_alias"]:'').'</label></td>
					<td>						
						
							
						<input name="ln_image['.(isset($this->_data["language."][$i]["ln"])?$this->_data["language."][$i]["ln"]:'').']" type="file" id="ln_image" class="no_width" /> '.(isset($this->_data["."][0]['size_ln_image'])?$this->_data["."][0]['size_ln_image']:'').'
						<p class="hide">
							<a href="'.(isset($this->_data["."][0]['_UPLOAD'])?$this->_data["."][0]['_UPLOAD']:'').''.(isset($this->_data["language."][$i]["ln_image"])?$this->_data["language."][$i]["ln_image"]:'').'" class="mb">'.(isset($this->_data["language."][$i]["ln_image"])?$this->_data["language."][$i]["ln_image"]:'').'</a>
							
							<input type="checkbox" name="delete_ln_image['.(isset($this->_data["language."][$i]["ln"])?$this->_data["language."][$i]["ln"]:'').']" class="no_width" value="1" />
							<input name="current_ln_image['.(isset($this->_data["language."][$i]["ln"])?$this->_data["language."][$i]["ln"]:'').']" type="hidden" value="'.(isset($this->_data["language."][$i]["ln_image"])?$this->_data["language."][$i]["ln_image"]:'').'" title="'.(isset($this->_data["language."][$i]["ln_image"])?$this->_data["language."][$i]["ln_image"]:'').'" class="no_width box_delete_file" />
							'.(isset($this->merge['lang']['delete'])?$this->merge['lang']['delete']:'').'					  </p>					</td>
				</tr>
				<tr class="sep">
					<td colspan="2"><p></p></td>
				</tr>
			</tbody>
			';}}$_tpl .= '
		</table>
		
		
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table-Form1 '.(isset($this->_data["."][0]['hide_no_languages'])?$this->_data["."][0]['hide_no_languages']:'').' '.(isset($this->_data["."][0]['hide_no_html_record'])?$this->_data["."][0]['hide_no_html_record']:'').'">
			<tr >
			  <td class="t1">&nbsp;</td>
			  <td class="t2">&nbsp;</td>
		  </tr>
		  '.(isset($this->_data["."][0]['main_fields'])?$this->_data["."][0]['main_fields']:'').'
			<tr class="hide '.(isset($this->_data["."][0]['display_enable_date'])?$this->_data["."][0]['display_enable_date']:'').'" >
				<td class="textLabel"><label>'.(isset($this->merge['lang']['date'])?$this->merge['lang']['date']:'').'</label></td>
				<td class="input_date"><script type="text/javascript">DateInput(\'date\', true, \'YYYY-MM-DD\',\''.(isset($this->_data["."][0]['date'])?$this->_data["."][0]['date']:'').'\');</script></td>
			</tr>
			<tr class="hide '.(isset($this->_data["."][0]['display_icon'])?$this->_data["."][0]['display_icon']:'').'" >
				<td class="textLabel"><label>'.(isset($this->_data["."][0]['field_icon'])?$this->_data["."][0]['field_icon']:'').'</label></td>
				<td>
					
					<input name="icon" type="file" id="icon" class="no_width"> '.(isset($this->_data["."][0]['size_icon'])?$this->_data["."][0]['size_icon']:'').'
					<p class="hide">
						<a href="'.(isset($this->_data["."][0]['_UPLOAD'])?$this->_data["."][0]['_UPLOAD']:'').''.(isset($this->_data["."][0]['icon'])?$this->_data["."][0]['icon']:'').'" class="mb">'.(isset($this->_data["."][0]['icon'])?$this->_data["."][0]['icon']:'').'</a>
						<input type="checkbox" name="delete_icon" class="no_width" value="1" /> 
						<input name="current_icon" type="hidden" title="'.(isset($this->_data["."][0]['icon'])?$this->_data["."][0]['icon']:'').'" value="'.(isset($this->_data["."][0]['icon'])?$this->_data["."][0]['icon']:'').'" class="box_delete_file" />
						'.(isset($this->merge['lang']['delete'])?$this->merge['lang']['delete']:'').'				  	</p>				</td>
			</tr>
			<tr class="hide '.(isset($this->_data["."][0]['display_image'])?$this->_data["."][0]['display_image']:'').'" >
				<td class="textLabel"><label>'.(isset($this->_data["."][0]['field_image'])?$this->_data["."][0]['field_image']:'').'</label></td>
				<td>
				  
					<input name="image" type="file" id="image" class="no_width">
					
					'.(isset($this->_data["."][0]['size_image'])?$this->_data["."][0]['size_image']:'').' 
					<p class="hide">
						<a href="'.(isset($this->_data["."][0]['_UPLOAD'])?$this->_data["."][0]['_UPLOAD']:'').''.(isset($this->_data["."][0]['image'])?$this->_data["."][0]['image']:'').'" class="mb">'.(isset($this->_data["."][0]['image'])?$this->_data["."][0]['image']:'').'</a>
					
					<input type="checkbox" name="delete_image" class="no_width" value="1" />
						'.(isset($this->merge['lang']['delete'])?$this->merge['lang']['delete']:'').'
					<input name="current_image" type="hidden" title="'.(isset($this->_data["."][0]['image'])?$this->_data["."][0]['image']:'').'" value="'.(isset($this->_data["."][0]['image'])?$this->_data["."][0]['image']:'').'" class="box_delete_file" />
					</p>				</td>
			</tr>
			';if(isset($this->_data['file_extra.'])){for($i=0;$i< count($this->_data['file_extra.']);$i++){$_tpl .= '
			<tr>
				<td class="textLabel"><label>'.(isset($this->_data["file_extra."][$i]["name"])?$this->_data["file_extra."][$i]["name"]:'').'</label></td>
				<td>
				  
					<input name="file_extra'.(isset($this->_data["file_extra."][$i]["stt"])?$this->_data["file_extra."][$i]["stt"]:'').'" type="file" id="image" class="no_width">
					<input name="file_extra_type['.(isset($this->_data["file_extra."][$i]["stt"])?$this->_data["file_extra."][$i]["stt"]:'').']" type="hidden" value="'.(isset($this->_data["file_extra."][$i]["type"])?$this->_data["file_extra."][$i]["type"]:'').'" />
					<input name="file_extra_code['.(isset($this->_data["file_extra."][$i]["stt"])?$this->_data["file_extra."][$i]["stt"]:'').']" type="hidden" value="'.(isset($this->_data["file_extra."][$i]["code"])?$this->_data["file_extra."][$i]["code"]:'').'" />
					'.(isset($this->_data["file_extra."][$i]["note"])?$this->_data["file_extra."][$i]["note"]:'').'
					<p class="hide">
						<a href="'.(isset($this->_data["."][0]['_UPLOAD'])?$this->_data["."][0]['_UPLOAD']:'').''.(isset($this->_data["file_extra."][$i]["file"])?$this->_data["file_extra."][$i]["file"]:'').'" class="mb">'.(isset($this->_data["file_extra."][$i]["file"])?$this->_data["file_extra."][$i]["file"]:'').'</a>
						<input type="checkbox" name="delete_file_extra'.(isset($this->_data["file_extra."][$i]["stt"])?$this->_data["file_extra."][$i]["stt"]:'').'" class="no_width" value="1" />
						<input name="current_file_extra'.(isset($this->_data["file_extra."][$i]["stt"])?$this->_data["file_extra."][$i]["stt"]:'').'" type="hidden" title="'.(isset($this->_data["file_extra."][$i]["file"])?$this->_data["file_extra."][$i]["file"]:'').'" value="'.(isset($this->_data["file_extra."][$i]["file"])?$this->_data["file_extra."][$i]["file"]:'').'" class="box_delete_file" />
						'.(isset($this->merge['lang']['delete'])?$this->merge['lang']['delete']:'').'					</p>				</td>
			</tr>';}}$_tpl .= '
			<tr class="hide '.(isset($this->_data["."][0]['action_seo'])?$this->_data["."][0]['action_seo']:'').'" >
				<td class="textLabel"><label>Meta Keywords</label></td>
				<td><textarea name="web_keyword" rows="5" id="web_keyword">'.(isset($this->_data["."][0]['web_keyword'])?$this->_data["."][0]['web_keyword']:'').'</textarea></td>
			</tr>
			<tr class="hide '.(isset($this->_data["."][0]['action_seo'])?$this->_data["."][0]['action_seo']:'').'" >
				<td class="textLabel"><label>Meta Description</label></td>
				<td><textarea name="web_desc" rows="5" id="web_desc">'.(isset($this->_data["."][0]['web_desc'])?$this->_data["."][0]['web_desc']:'').'</textarea></td>
			</tr>
	';if(isset($this->_data['fields_extra.'])){for($i=0;$i< count($this->_data['fields_extra.']);$i++){$_tpl .= '
	<tr>
		<td class="textLabel"><label>'.(isset($this->_data["fields_extra."][$i]["name"])?$this->_data["fields_extra."][$i]["name"]:'').'</label></td>
		<td>'.(isset($this->_data["fields_extra."][$i]["value"])?$this->_data["fields_extra."][$i]["value"]:'').'</td>
	</tr>';}}$_tpl .= '
			
			<tr class="hide '.(isset($this->_data["."][0]['display_gallery'])?$this->_data["."][0]['display_gallery']:'').'" >
				<td class="textLabel">
					<label>'.(isset($this->_data["."][0]['field_gallery_name'])?$this->_data["."][0]['field_gallery_name']:'').'</label>
					<p class="label-description">'.(isset($this->_data["."][0]['size_gallery'])?$this->_data["."][0]['size_gallery']:'').'</p>				</td>
				<td>
					
					<table width="75%" border="0" cellspacing="2" id="table-gallery" cellpadding="2" class="table_list list marginTop5">
	   <tr>
	     <th width="4%"   class="th-checkbox firstColumn"><input title="Select all" type="checkbox" name="checkbox" onclick="checkAll(\'tbody.gallery\',this,\'del_gallery\');" value="checkbox" /></th>
          <th width="76%"   class="th-name">'.(isset($this->merge['lang']['name'])?$this->merge['lang']['name']:'').'</th>
          <th width="9%" align="center" class="th-status">'.(isset($this->merge['lang']['status'])?$this->merge['lang']['status']:'').'</th>
          <th width="11%" align="center" class="th-status lastColumn">'.(isset($this->merge['lang']['actions'])?$this->merge['lang']['actions']:'').'</th>
        </tr>
	  <tbody class="gallery">
	 
       
		 ';if(isset($this->_data['gallery.'])){for($i=0;$i< count($this->_data['gallery.']);$i++){$_tpl .= '
        <tr id="'.(isset($this->_data["gallery."][$i]["id"])?$this->_data["gallery."][$i]["id"]:'').'">
          <td class="th-checkbox"><input type="checkbox" name="del_gallery[]" value="'.(isset($this->_data["gallery."][$i]["id"])?$this->_data["gallery."][$i]["id"]:'').'" /></td>
          <td> '.(isset($this->_data["gallery."][$i]["name"])?$this->_data["gallery."][$i]["name"]:'').'<a href="'.(isset($this->_data["."][0]['_UPLOAD'])?$this->_data["."][0]['_UPLOAD']:'').''.(isset($this->_data["gallery."][$i]["image"])?$this->_data["gallery."][$i]["image"]:'').'" class="mb">'.(isset($this->_data["gallery."][$i]["image"])?$this->_data["gallery."][$i]["image"]:'').'</a></td>
          <td  align="center"><a title="'.(isset($this->merge['lang']['update_status'])?$this->merge['lang']['update_status']:'').'" href="?mod=gallery&act=active&p='.(isset($this->_data["."][0]['module'])?$this->_data["."][0]['module']:'').'&pid='.(isset($this->_data["."][0]['id'])?$this->_data["."][0]['id']:'').'&parentid='.(isset($this->_data["."][0]['parentid'])?$this->_data["."][0]['parentid']:'').'&type='.(isset($this->_data["."][0]['type'])?$this->_data["."][0]['type']:'').'&id='.(isset($this->_data["gallery."][$i]["id"])?$this->_data["gallery."][$i]["id"]:'').'"><img src="template/images/icons_default/status'.(isset($this->_data["gallery."][$i]["active"])?$this->_data["gallery."][$i]["active"]:'').'.gif" alt="Status"  /></a></td>
          <td align="center"><a title="'.(isset($this->merge['lang']['edit'])?$this->merge['lang']['edit']:'').'" href="?mod=gallery&act=update&p='.(isset($this->_data["."][0]['module'])?$this->_data["."][0]['module']:'').'&pid='.(isset($this->_data["."][0]['id'])?$this->_data["."][0]['id']:'').'&parentid='.(isset($this->_data["."][0]['parentid'])?$this->_data["."][0]['parentid']:'').'&type='.(isset($this->_data["."][0]['type'])?$this->_data["."][0]['type']:'').'&id='.(isset($this->_data["gallery."][$i]["id"])?$this->_data["gallery."][$i]["id"]:'').'"><img src="template/images/icons_default/edit'.(isset($this->merge['ucp']['new'])?$this->merge['ucp']['new']:'').'.png" border="0" /></a> <a title="'.(isset($this->merge['lang']['delete'])?$this->merge['lang']['delete']:'').'" href="?mod=gallery&act=delete&p='.(isset($this->_data["."][0]['module'])?$this->_data["."][0]['module']:'').'&pid='.(isset($this->_data["."][0]['id'])?$this->_data["."][0]['id']:'').'&parentid='.(isset($this->_data["."][0]['parentid'])?$this->_data["."][0]['parentid']:'').'&type='.(isset($this->_data["."][0]['type'])?$this->_data["."][0]['type']:'').'&id='.(isset($this->_data["gallery."][$i]["id"])?$this->_data["gallery."][$i]["id"]:'').'" onclick="deleteConfirm(this); return false;"><img src="template/images/icons_default/delete'.(isset($this->merge['ucp']['delete'])?$this->merge['ucp']['delete']:'').'.png" border="0" /></a></td>
        </tr>
		';}}$_tpl .= '
	</tbody>
      </table>
 <div>
  <input type="button" name="Submit2" value="'.(isset($this->merge['lang']['delete_selected_image'])?$this->merge['lang']['delete_selected_image']:'').'" class="btn" onclick="deleteGallery(\'#table-gallery\','.(isset($this->_data["."][0]['type'])?$this->_data["."][0]['type']:'').')" />
</div>
<p>&nbsp;</p>
					
					
					<div class="gallery-inputFile">
						<p class="hide '.(isset($this->_data["."][0]['display_gallery_name'])?$this->_data["."][0]['display_gallery_name']:'').'" >
							<label>Title</label>
							<input name="name_gallery0" type="text" value="" title="" />						
						</p>
						<p class="hide '.(isset($this->_data["."][0]['display_gallery_icon'])?$this->_data["."][0]['display_gallery_icon']:'').'" >
							<label>Upload Icon</label>
							<input type="file" name="icon_gallery0" size="25" />
						</p>
						<p>
							<label>Upload Image</label>
							<input type="file" name="image_gallery0" size="25" />
						</p>
					</div>
					<p id="add_gallery"></p>
					<p class="link-addMore"><a href="#" onclick="add_gallery(\'#add_gallery\',\''.(isset($this->_data["."][0]['is_gallery_name'])?$this->_data["."][0]['is_gallery_name']:'').'\',\''.(isset($this->_data["."][0]['is_gallery_icon'])?$this->_data["."][0]['is_gallery_icon']:'').'\');return false">Insert more</a></p>				</td>
			</tr>
		</table>
		
		
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="'.(isset($this->_data["."][0]['hide_no_languages'])?$this->_data["."][0]['hide_no_languages']:'').' '.(isset($this->_data["."][0]['hide_no_html_record'])?$this->_data["."][0]['hide_no_html_record']:'').' table-Form1">
				<tr>
					<td class="textLabel"><label>&nbsp;</label></td>
				  <td><input type="submit" class="btn" name="Submit" value="Save"></td>
				</tr>
		</table>
	</form>
</div>
'; if(isset($this->box['drapdrop_gallery'])){ $_tpl.= '
<script type="text/javascript">
	var begin = null;
	$(\'#table-gallery tbody.gallery\').tableDnD({
		onDragClass: "ondrag-list",
		onDragStart: function(table, row) {
			begin = $.tableDnD.serialize();
		},
		onDrop: function(table, row) {
			var after = $.tableDnD.serialize();
			if(begin != after){
				$.post(\'?mod=gallery&act=order&p=html\',{\'data\': after});
			}
		}
    });
</script>
';}$_tpl .= '
<script type="text/javascript">
	var opt = {
		required: ['.(isset($this->_data["."][0]['required_fields'])?$this->_data["."][0]['required_fields']:'').'],
		required_lang: ['.(isset($this->_data["."][0]['required_ln_fields'])?$this->_data["."][0]['required_ln_fields']:'').'],
		lang: \''.(isset($this->_data["."][0]['language'])?$this->_data["."][0]['language']:'').'\'
	};
	if(access_edit == \'\') opt[\'disabled\'] = \''.(isset($this->merge['lang']['user_no_access'])?$this->merge['lang']['user_no_access']:'').'\';
	$(\'form#fcontent\').validate(opt);

</script>

				</div>			
			</div>
		</div>
		
		<div class="ft">
			&copy; Copyright '.(isset($this->_data["."][0]['system_year'])?$this->_data["."][0]['system_year']:'').' '.(isset($this->_data["."][0]['web_client'])?$this->_data["."][0]['web_client']:'').'.
		</div>
	</div>
</div>

<table width="5" height="100%" cellpadding="0" cellspacing="0" border="0" class="btn_expandMenu"><tr><td>&nbsp;</td></tr></table>

<div class="cms_overlay"></div>
<noscript>
	<style type="text/css">
		.wrapper{ display: none; }
	</style>
	<div class="noscript">JavaScript must be enabled in order for you to use '.(isset($this->_data["."][0]['web_client'])?$this->_data["."][0]['web_client']:'').' CMS. Please enable JavaScript by changing your browser options, then press <strong>F5</strong> to load page</div>
</noscript>


</body>
</html>'; ?>
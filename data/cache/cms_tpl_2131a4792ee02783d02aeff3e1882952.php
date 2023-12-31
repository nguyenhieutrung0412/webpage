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
					<div class="table_list toolbar"><a href="'.(isset($this->_data["."][0]['http_referer'])?$this->_data["."][0]['http_referer']:'').'">Back</a></div>
<div class="form"><form action="" id="fcontent" method="post" enctype="multipart/form-data" name="form1">
<div class="error">'.(isset($this->_data["."][0]['msg'])?$this->_data["."][0]['msg']:'').'</div>
  <table width="100%" border="0" cellspacing="0" cellpadding="1" class="table-Form1">
    <tr class="hide '.(isset($this->_data["."][0]['display_name'])?$this->_data["."][0]['display_name']:'').'">
      <td>'.(isset($this->merge['lang']['title'])?$this->merge['lang']['title']:'').'</td>
      <td><input name="name" type="text" id="title" value="'.(isset($this->_data["."][0]['name'])?$this->_data["."][0]['name']:'').'">&nbsp;</td>
    </tr>
    <tr class="hide '.(isset($this->_data["."][0]['display_content'])?$this->_data["."][0]['display_content']:'').'">
      <td>'.(isset($this->merge['lang']['content'])?$this->merge['lang']['content']:'').'</td>
      <td><textarea name="content" rows="5" class="tinymce">'.(isset($this->_data["."][0]['content'])?$this->_data["."][0]['content']:'').'</textarea></td>
    </tr>
    <tr class="hide '.(isset($this->_data["."][0]['display_icon'])?$this->_data["."][0]['display_icon']:'').'">
      <td width="16%">'.(isset($this->merge['lang']['icon'])?$this->merge['lang']['icon']:'').'</td>
      <td width="84%"><input name="icon" type="file" id="icon" class="no_width">
        
        '.(isset($this->_data["."][0]['size_icon'])?$this->_data["."][0]['size_icon']:'').'
		<p class="hide"><a href="'.(isset($this->_data["."][0]['_UPLOAD'])?$this->_data["."][0]['_UPLOAD']:'').''.(isset($this->_data["."][0]['icon'])?$this->_data["."][0]['icon']:'').'" class="mb">'.(isset($this->_data["."][0]['icon'])?$this->_data["."][0]['icon']:'').'</a> 
	    <input type="checkbox" name="delete_icon" class="no_width" value="1"   /> 
		<input name="current_icon" type="hidden" title="'.(isset($this->_data["."][0]['icon'])?$this->_data["."][0]['icon']:'').'" value="'.(isset($this->_data["."][0]['icon'])?$this->_data["."][0]['icon']:'').'" class="box_delete_file" />
	    '.(isset($this->merge['lang']['delete'])?$this->merge['lang']['delete']:'').'		</p></td>
    </tr>
    <tr>
      <td>'.(isset($this->merge['lang']['image'])?$this->merge['lang']['image']:'').'</td>
      <td><input name="image" type="file" id="image" class="no_width">
        '.(isset($this->_data["."][0]['size_image'])?$this->_data["."][0]['size_image']:'').'
		<p class="hide"><a href="'.(isset($this->_data["."][0]['_UPLOAD'])?$this->_data["."][0]['_UPLOAD']:'').''.(isset($this->_data["."][0]['image'])?$this->_data["."][0]['image']:'').'" class="mb">'.(isset($this->_data["."][0]['image'])?$this->_data["."][0]['image']:'').'</a> 
		<!--<input type="checkbox" name="delete_image" class="no_width" value="1"  /> '.(isset($this->merge['lang']['delete'])?$this->merge['lang']['delete']:'').'-->
		<input name="current_image" type="hidden" title="'.(isset($this->_data["."][0]['image'])?$this->_data["."][0]['image']:'').'" value="'.(isset($this->_data["."][0]['image'])?$this->_data["."][0]['image']:'').'" class="box_delete_file" />
		 </p></td>
    </tr>
  </table>
  <div class="table_list" align="right">
    <input type="submit" class="btn" name="Submit" value="'.(isset($this->merge['lang']['save'])?$this->merge['lang']['save']:'').'">
    <input type="button" class="btn btn_cancel" name="Button" value="'.(isset($this->merge['lang']['cancel'])?$this->merge['lang']['cancel']:'').'" onclick="location.href=\''.(isset($this->_data["."][0]['http_referer'])?$this->_data["."][0]['http_referer']:'').'\';">
  </div>
</form></div>
<script type="text/javascript">
	var opt = {
		required: ['.(isset($this->_data["."][0]['required_fields'])?$this->_data["."][0]['required_fields']:'').'],
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
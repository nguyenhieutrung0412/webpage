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
					<h1 class="booking-title">Contact</h1>
'.(isset($this->_data["."][0]['msg'])?$this->_data["."][0]['msg']:'').'
<form name="frm_Cmt" action="" method="post">
<input type="submit" name="delete_cmt" id="delete_cmt" value="Delete" class="btn '.(isset($this->_data["."][0]['btn_status'])?$this->_data["."][0]['btn_status']:'').'" onclick="onDelete(this);return false;">

<table width="100%" border="0" cellspacing="0" cellpadding="2" class="table" id="table-list">
  <thead>
  <tr>
    <th width="2%" style="text-align:center"><input type="checkbox" name="checkall" value="1" onclick="checkAll(\'#table-list\',this,\'pro\')" /></th>
    <th class="thfirst">#</th>
    <th>Date</th>
    <th>Họ Tên</th>
    <th>Email</th>
    <th>Điện thoại</th>
    <th>Message</th>
    <th class="thlast">Actions</th>
  </tr>
  </thead>
 <tbody class="pro">
  ';if(isset($this->_data['booking.'])){for($i=0;$i< count($this->_data['booking.']);$i++){$_tpl .= '
  <tr>
  	<td align="center"><input type="checkbox" name="pro[]" value="'.(isset($this->_data["booking."][$i]["id"])?$this->_data["booking."][$i]["id"]:'').'"/></td>
    <td class="bkstt">'.(isset($this->_data["booking."][$i]["stt"])?$this->_data["booking."][$i]["stt"]:'').'</td>
    <td>'.(isset($this->_data["booking."][$i]["timestamp"])?$this->_data["booking."][$i]["timestamp"]:'').'</td>
    <td>'.(isset($this->_data["booking."][$i]["name"])?$this->_data["booking."][$i]["name"]:'').'</td>
    <td>'.(isset($this->_data["booking."][$i]["email"])?$this->_data["booking."][$i]["email"]:'').'</td>
    <td>'.(isset($this->_data["booking."][$i]["phone"])?$this->_data["booking."][$i]["phone"]:'').'</td>
    <td width="40%">'.(isset($this->_data["booking."][$i]["message"])?$this->_data["booking."][$i]["message"]:'').'</td>
      
    <td>
    <a href="?mod=contact&amp;id='.(isset($this->_data["booking."][$i]["id"])?$this->_data["booking."][$i]["id"]:'').'" onClick="deleteConfirm(this); return false;" title="Xóa Booking"><img src="template/images/icons_default/delete.png" width="16" height="16" /></a>
    </td>
  </tr>
  ';}}$_tpl .= '
  </tbody>
</table>
  '; if(isset($this->box['box_paging'])){ $_tpl.= '
  <div class="p-paging">'.(isset($this->_data["."][0]['divpage'])?$this->_data["."][0]['divpage']:'').'</div>
   ';}$_tpl .= '
</form>
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
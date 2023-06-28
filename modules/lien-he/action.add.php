<?php

use LDAP\Result;
require_once ('./libraries/smtp_gmail/mail.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$data = array(
		'name'=>trim($_REQUEST['txt_name']),
		'phone'=>trim($_REQUEST['txt_phone']),
		'email'=>trim($_REQUEST['txt_email']),
		'message'=>trim($_REQUEST['txt_message'])
	);
	$tieude="Thông tin liên hệ";
	$noidung = "<p>hello</p>";
	
	$frommail= 'nguyenhieutrung0412@gmail.com';
	$mailHost = 'trungxk0@gmail.com';
	$tomail = array();
	$subject = 'Thông tin liên hệ ';
	$fromname='Website LogisViet';
	$body ='
	<p>Họ và tên: '. $_REQUEST['txt_name'].'</p> <br>
	<p>Số điện thoại: '. $_REQUEST['txt_phone'].'</p> <br>
	<p>Email: '. $_REQUEST['txt_email'].'</p> <br>
	<p>Ghi chú: '. $_REQUEST['txt_message'].'</p> <br>
	';
	SendGMail($frommail,$mailHost,$tomail,$fromname,$subject,$body);
	
	
	$oClass->insert("php_contact",$data);
	die(json_encode(
		
		array(
		'name'=>trim($_REQUEST['txt_name']),
		'phone'=>trim($_REQUEST['txt_phone']),
		'email'=>trim($_REQUEST['txt_email']),
		'message'=>trim($_REQUEST['txt_message']),
		'status'=>1,
		'msg'=>'Thành công! Chúng tôi sẽ liên hệ cho bạn sớm nhất có thể.',
	

	)));

	


}else{
	die(json_encode(array(
		'status'=>0,
		'msg'=>'(0) Lỗi. Không thể thực hiện thao tác này!'

	)));
}
exit;
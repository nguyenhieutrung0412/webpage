<?php
if($_REQUEST['code'] != ''){
	$arr = explode('_____',base64url_decode($_REQUEST['code']));
	$id = $arr[0];
	$email = $arr[1];
	$active  = $arr[2];
	$flag = $_REQUEST['flag'];
	
	$sql = "id = '".intval($id)."' AND email = '".$email."' AND active = '".$active."' LIMIT 1";
	$kt = $oContent->view_table("php_member",$sql);
	$total = $kt->num_rows();
	
	if($total==1){
		
		$oClass->delete("php_member",$sql);
		die(json_encode(array(
			'status'=>1,
			'str'=>''
		)));
	}else{
		die(json_encode(array(
			'status'=>1,
			'str'=>'Lỗi... Thông tin không tồn tại.'
		)));
	}
}else{
	die(json_encode(array(
		'status'=>2,
		'str'=>'Lỗi... vui lòng thử lại!'
	)));
}
exit;
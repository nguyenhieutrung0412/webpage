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
	
	$flag_arr = array(
		'0'=>1,
		'1'=>0
	);
	if($total==1){
		$data = array(
			'active'=>$flag_arr[$flag]
		);
		$oClass->update("php_member",$data,$sql);
		die(json_encode(array(
			'status'=>1,
			'str'=>''
		)));
	}else{
		die(json_encode(array(
			'status'=>0,
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
<?php
if($_REQUEST['code'] != ''){
	$arr = explode('_____',base64url_decode($_REQUEST['code']));
	$id = $arr[0];
	$email = $arr[1];
	$active  = $arr[2];
	$active_gift = $arr[3];
	$active_quatang  = $arr[4];
	
	$flag = $_REQUEST['flag'];
	
	$sql = "id = '".intval($id)."' AND email = '".$email."' AND active = 1 AND active_gift = 1 AND active_quatang = $active_quatang LIMIT 1";
	$kt = $oContent->view_table("php_member",$sql);
	$total = $kt->num_rows();
	
	$flag_arr = array(
		'0'=>1,
		'1'=>0
	);
	if($total==1){
		$data = array(
			'active_quatang'=>$flag_arr[$flag]
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
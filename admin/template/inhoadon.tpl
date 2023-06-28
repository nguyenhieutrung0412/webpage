<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>In hóa đơn</title>
<style>
body{
	margin-left:auto;
	margin-right:auto;
	width:960px;
	height:700px;
}
table{
	border:1px solid #3CC;
}
tr,td{
	border:1px solid #3CC;
}
.bd{
	border:0px;
}
a img{
	border:0px;
}
</style>
</head>

<body>
<div style="float:left; margin-top:10px; width:100%">
<table style="border:0px;" width="700" align="center" border="0" cellspacing="0" cellpadding="3">
  <tr style="border:0px;">
    <td class="bd" width="52">&nbsp;</td>
    <td class="bd" width="115">&nbsp;</td>
    <td class="bd" width="455">&nbsp;</td>
    <td class="bd"  width="52"><a href="#" onClick="window.print();"><img src="images/in.png" width="23" height="19" /></a></td>
  </tr>
  <tr>
    <td class="bd" >&nbsp;</td>
    <td class="bd"  rowspan="4"><img src="images/logo.png" width="167" height="94" /></td>
    <td class="bd"  rowspan="4">
    	<div style="text-align:left;">{lh.content}</div>
    </td>
    <td class="bd" >&nbsp;</td>
  </tr>
  <tr>
    <td class="bd" >&nbsp;</td>
    <td class="bd" >&nbsp;</td>
  </tr>
  <tr>
    <td class="bd" >&nbsp;</td>
    <td class="bd" >&nbsp;</td>
  </tr>
  <tr>
    <td class="bd" >&nbsp;</td>
    <td class="bd" >&nbsp;</td>
  </tr>
  <tr>
    <td class="bd" >&nbsp;</td>
    <td class="bd" >&nbsp;</td>
    <td class="bd" >&nbsp;</td>
    <td class="bd" >&nbsp;</td>
  </tr>
  <tr>
    <td class="bd"  colspan="4"><div style="text-align:center; font-size:30px;">ĐƠN HÀNG</div></td>
    </tr>
  <tr>
    <td class="bd"  colspan="2">Mã đơn hàng: {nguoinhan.mahoadon}</td>
    <td class="bd"  align="right">
    	<script type="text/javascript">
			<!--
			var currentTime = new Date()
			var month = currentTime.getMonth() + 1
			var day = currentTime.getDate()
			var year = currentTime.getFullYear()
			document.write(day + "/" + month + "/" + year)
			//-->
		</script>
    </td>
    <td class="bd" >&nbsp;</td>
  </tr>
</table>

</div>
<div style="float:left; margin-top:10px; width:100%">
<table align="center" width="700" cellspacing="0" cellpadding="5" bgcolor="#FFFFFF">
  <tr>
    <td colspan="4" bgcolor="#DDF7EB">Thông tin người đặt hàng</td>
    </tr>
  <tr>
    <td width="18%">Họ tên:</td>
    <td width="27%">{member.hoten}</td>
    <td width="18%">Địa chỉ:</td>
    <td width="37%">{member.diachi}</td>
    </tr>
  <tr>
    <td>Điện thoại:</td>
    <td>{member.didong}</td>
    <td>Ngày đặt:</td>
    <td>{member.ngaydathang}</td>
    </tr>
  <tr>
    <td>Email:</td>
    <td>{member.email}</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td bgcolor="#DDF7EB">&nbsp;</td>
    <td bgcolor="#DDF7EB">&nbsp;</td>
    <td bgcolor="#DDF7EB">&nbsp;</td>
    <td bgcolor="#DDF7EB">&nbsp;</td>
  </tr>
</table>
</div>
<div style="float:left; margin-top:10px; width:100%">
<table  align="center" width="700" border="0" cellspacing="0" cellpadding="5" bgcolor="#FFFFFF">
  <tr>
    <td colspan="4" bgcolor="#DDF7EB">Thông tin người nhận hàng</td>
    </tr>
  <tr>
    <td width="18%">Họ tên:</td>
    <td width="27%">{nguoinhan.tennguoinhan}</td>
    <td width="18%">Địa chỉ:</td>
    <td width="37%">{nguoinhan.diachi}</td>
    </tr>
  <tr>
    <td>Điện thoại:</td>
    <td>{nguoinhan.dienthoai}</td>
    <td>Ngày nhận:</td>
    <td>{nguoinhan.ngaynhan}</td>
    </tr>
  <tr>
    <td>Email:</td>
    <td>{nguoinhan.email}</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>Ghi chú:</td>
    <td colspan="3">{nguoinhan.ghichuhoadon}</td>
    </tr>
  <tr>
    <td bgcolor="#DDF7EB">&nbsp;</td>
    <td bgcolor="#DDF7EB">&nbsp;</td>
    <td bgcolor="#DDF7EB">&nbsp;</td>
    <td bgcolor="#DDF7EB">&nbsp;</td>
  </tr>
</table>
</div>
<div style="float:left; margin-top:10px; width:100%">
<table class="bder" align="center" width="700" border="0" cellspacing="0" cellpadding="8" bgcolor="#FFFFFF">
  <tr  bgcolor="#DDF7EB">
    <td><b>Số thứ tự</b></td>
    <td><b>Tên sản phẩm</b></td>
    <td><b>Số lượng</b></td>
    <td><b>Đơn giá</b></td>
    <td><b>Thành tiền</b></td>
    <td><strong>Ghi chú</strong></td>
  </tr>
  <!--BASIC donhang2-->
  <tr>
    <td>{donhang2.i}</td>
    <td>{donhang2.tensanpham}</td>
    <td>{donhang2.soluong}</td>
    <td>{donhang2.giaban} VNĐ</td>
    <td>{donhang2.thanhtien} VNĐ</td>
    <td>&nbsp;</td>
  </tr>
  <!--BASIC donhang2-->
  <tr>
    <td colspan="2"><b>Tổng cộng</b></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><b>{tong} VNĐ</b></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><strong>Tiền vận chuyển: </strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><strong>{vanchuyen} VNĐ</strong></td>
     <td>&nbsp;</td>
    </tr>
  <tr>
    <td colspan="2"><div style="font-size:16px;"><strong>Tổng số tiền thanh toán</strong></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div style="font-size:16px; color:red;"><b>{tongcong} VNĐ</b></div></td>
     <td>&nbsp;</td>
    </tr>
   
  <tr>
    <td bgcolor="#DDF7EB">&nbsp;</td>
    <td bgcolor="#DDF7EB">&nbsp;</td>
    <td bgcolor="#DDF7EB">&nbsp;</td>
    <td bgcolor="#DDF7EB">&nbsp;</td>
    <td bgcolor="#DDF7EB">&nbsp;</td>
     <td bgcolor="#DDF7EB">&nbsp;</td>
  </tr>
</table>
</div>
<div style="float:left; margin-top:10px; width:100%">
<table style="border:0px;" width="700" align="center" border="0" cellspacing="0" cellpadding="3">
  <tr style="border:0px;">
    <td colspan="2" rowspan="2" class="bd"><p>Người nhận hàng<br />Ký tên(Ghi rõ họ tên)</p></td>
    <td class="bd" width="358">&nbsp;</td>
    <td  width="149" rowspan="2" class="bd">Người giao hàng<br />
      Ký tên(Ghi rõ họ tên)</td>
  </tr>
  <tr>
    <td class="bd" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" rowspan="3" class="bd" >&nbsp;</td>
    <td class="bd" >&nbsp;</td>
    <td rowspan="3" class="bd" >&nbsp;</td>
  </tr>
  <tr>
    <td class="bd" >&nbsp;</td>
    </tr>
  <tr>
    <td class="bd" >&nbsp;</td>
    </tr>
</table>

</div>
</body>
</html>

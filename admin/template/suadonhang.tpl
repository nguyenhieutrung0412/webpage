
<div style="margin-top:-65px;" class="hide breadcrumb_cat">{xpath}<a href="./?mod=member_content&amp;type=4" charset="btn">&laquo; Back</a></div>
<style type="text/css">
body,td,td {
	color: #333;
}
table, tr,th, td{border:1px solid #09F;}
</style>
<div style="float:left; margin-top:10px; width:100%">
<table width="100%" cellspacing="0" cellpadding="8" bgcolor="#FFFFFF">
  <tr>
    <td colspan="3" bgcolor="#DDF7EB"><p>&nbsp;</p>
      <p align="center"><b>THÔNG TIN NGƯỜI ĐẶT</b></p>
      <p>&nbsp;</p></td>
    </tr>
  <tr>
    <td width="11%">&nbsp;</td>
    <td width="21%">Họ tên:</td>
    <td width="68%">{member.hoten}</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Điện thoại:</td>
    <td>{member.didong}</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Địa chỉ:</td>
    <td>{member.diachi}</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Email:</td>
    <td>{member.email}</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Ngày đặt:</td>
    <td>{member.ngaydathang}</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td bgcolor="#DDF7EB">&nbsp;</td>
    <td bgcolor="#DDF7EB">&nbsp;</td>
    <td bgcolor="#DDF7EB">&nbsp;</td>
    </tr>
</table>
</div>
<div style="float:left; margin-top:10px; width:100%">
<form name="frm2" method="post" action="">
<table width="100%" border="0" cellspacing="0" cellpadding="8" bgcolor="#FFFFFF">
  <tr>
    <td colspan="3" bgcolor="#DDF7EB"><p>&nbsp;</p>
      <p align="center"><b>THÔNG TIN NGƯỜI NHẬN</b></p>
      <p>&nbsp;</p></td>
    </tr>
  <tr>
    <td width="11%">&nbsp;</td>
    <td width="21%">Họ tên:</td>
    <td width="68%">{nguoinhan.tennguoinhan}</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Điện thoại:</td>
    <td>{nguoinhan.dienthoai}</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Địa chỉ:</td>
    <td>{nguoinhan.diachi}</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Email:</td>
    <td>{nguoinhan.email}</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Ngày nhận:</td>
    <td>{nguoinhan.ngaynhan}</td>
    </tr>
   <tr>
    <td>&nbsp;</td>
    <td>Ghi chú:</td>
    <td>{nguoinhan.ghichu}</td>
    </tr>
  <tr>
    <td bgcolor="#DDF7EB">&nbsp;</td>
    <td bgcolor="#DDF7EB">&nbsp;</td>
    <td bgcolor="#DDF7EB">&nbsp;</td>
    </tr>
</table>
</form>
</div>
<div style="float:left; margin-top:10px; width:100%">
  <script>
					function Search(obj){ 
						window.location= './?mod={module}&act=update&id={id}&parentid={parentid}&type={type}&page={page}&matinhtrang='+ obj;
					}
					</script>
<form name="frm1" action="" method="post">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table-Form1">
              <tr>
                <td>		
                    <div class="l">
                        <span class="">
                          Thay đổi tình trạng đơn hàng: <select  onchange="Search(this.value)"  name="locdonhang" id="locdonhang">
                            <!--BASIC tinhtrang-->
                                <option {tinhtrang.select} value="{tinhtrang.matinhtrang}">{tinhtrang.tentinhtrang}</option>
                             <!--BASIC tinhtrang-->
                            </select>
                        </span>
                    </div>
                </td>
              </tr>
            </table>
          </form>
</div>
<div style="float:left; margin-top:10px; width:100%">
<table width="100%" border="0" cellspacing="0" cellpadding="8" bgcolor="#FFFFFF">
  <tr>
    <td bgcolor="#DDF7EB">&nbsp;</td>
    <th colspan="3" nowrap="nowrap" bgcolor="#DDF7EB"><p>&nbsp;</p>
      <p><b>THÔNG TIN ĐƠN HÀNG GỐC</b></p>
      <p>&nbsp;</p></th>
    <td bgcolor="#DDF7EB">&nbsp;</td>
    <td bgcolor="#DDF7EB">&nbsp;</td>
  </tr>
  <tr>
    <td><b>Số thứ tự</b></td>
    <td><b>Tên sản phẩm</b></td>
    <td><b>Số lượng</b></td>
    <td><b>Đơn giá</b></td>
    <td><b>Thành tiền</b></td>
    <td><strong>Ghi chú</strong></td>
  </tr>
  <!--BASIC donhang2-->
  <tr>
    <td><i>{donhang2.in}</i></td>
    <td><i>{donhang2.tensanpham}</i></td>
    <td><i>{donhang2.soluong}</i></td>
    <td><i>{donhang2.giaban} vnđ</i></td>
    <td><i>{donhang2.thanhtien} vnđ</i></td>
    <td>&nbsp;</td>
  </tr>
  <!--BASIC donhang2-->
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><b>Tổng cộng</b></td>
    <td></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><b>{tong} vnđ</b></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
     <td>&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#DDF7EB">&nbsp;</td>
    <td bgcolor="#DDF7EB">&nbsp;</td>
    <td bgcolor="#DDF7EB"><a href="./?mod=member_content&type=4" charset="btn"></a></td>
    <td bgcolor="#DDF7EB">&nbsp;</td>
    <td bgcolor="#DDF7EB">&nbsp;</td>
     <td bgcolor="#DDF7EB">&nbsp;</td>
  </tr>
</table>
</div>
<div style="float:left; margin-top:10px; width:100%">
<table width="100%" border="0" cellspacing="0" cellpadding="8" bgcolor="#FFFFFF">
  <tr>
    <td bgcolor="#DDF7EB">&nbsp;</td>
    <th colspan="3" nowrap="nowrap" bgcolor="#DDF7EB"><p>&nbsp;</p>
      <p><b>THÔNG TIN ĐƠN HÀNG CHỈNH SỬA</b></p>
      <p>&nbsp;</p></th>
    <td bgcolor="#DDF7EB">&nbsp;</td>
    <td bgcolor="#DDF7EB">&nbsp;</td>
  </tr>
  <tr>
    <td><b>Số thứ tự</b></td>
    <td><b>Tên sản phẩm</b></td>
    <td><b>Số lượng</b></td>
    <td><b>Đơn giá</b></td>
    <td><b>Thành tiền</b></td>
    <td><strong>Ghi chú</strong></td>
  </tr>
  <!--BASIC donhang2-->
  <tr>
    <td><i>{donhang2.in}</i></td>
    <td><i>{donhang2.tensanpham}</i></td>
    <td><i>{donhang2.soluong}</i></td>
    <td><i>{donhang2.giaban} vnđ</i></td>
    <td><i>{donhang2.thanhtien} vnđ</i></td>
    <td>&nbsp;</td>
  </tr>
<!--BASIC donhang2--> 
  <tr>
    <td colspan="4"><b>Tổng cộng:</b></td>
    <td><b>{tong} vnđ</b></td>
    <td rowspan="3"><i>{nguoinhan.ghichuhoadon}</i></td>
  </tr>
  <tr>
    <td colspan="4"><strong>Tiền vận chuyển: </strong></td>
    <td><strong><i>{vanchuyen}</i> vnđ</strong></td>
    </tr>
  <tr>
    <td colspan="4"><div style="font-size:16px;"><strong>Tổng số tiền thanh toán</strong>:</div></td>
    <td><div style="font-size:16px; color:red;"><b>{tongcong} VNĐ</b></div></td>
    </tr>
    
  <tr>
    <td bgcolor="#DDF7EB">In hóa đơn <a href="#" onClick="openWin();"><img src="images/in.png" width="29" height="25" /></a></td>
    <td bgcolor="#DDF7EB">&nbsp;</td>
    <td bgcolor="#DDF7EB">&nbsp;</td>
    <td bgcolor="#DDF7EB">&nbsp;</td>
    <td bgcolor="#DDF7EB">&nbsp;</td>
     <td bgcolor="#DDF7EB">&nbsp;</td>
  </tr>
</table>
</div>
<div style="float:left; margin-top:10px; width:100%">
	<script type="text/javascript">
        function openWin()
        {
        myWindow=window.open('./?mod=print&id={id}','','width=980,height=700');
        myWindow.focus();
        }
    </script>
  <script>
	function Search(obj){ 
	window.location= './?mod={module}&act=update&id={id}&parentid={parentid}&type={type}&page={page}&matinhtrang='+ obj;
}
</script>
 <form name="frm1" action="" method="post">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table-Form1">
          <tr>
              <td width="16%" valign="middle">Tiền vận chuyển: </td>
                <td width="84%">		
                    <div class="l">
                        <span class="">
                        <input type="text" value="{nguoinhan.tienvanchuyen}" name="txtTienVanChuyen" style="width:278px; height:22px;" />
                        </span>
                    </div>
                </td>
</tr>
              <tr>
              <td width="16%" valign="middle">Ghi chú hóa đơn: </td>
                <td width="84%">		
                    <div class="l">
                        <span class="">
                         <textarea name="txtGhiChu" value=""  style="width:280px; height:60px;">{nguoinhan.ghichuhoadon}</textarea>
                        </span>
                    </div>
                </td>
              </tr>
              <tr>
              <td><a href="./?mod=member_content&type=4" charset="btn">&laquo; Back</a></td>
              <td><input type="submit" class="btn" value="Save" name="btnSubmit" /></td>
</tr>
            </table>
  </form>  
</div>

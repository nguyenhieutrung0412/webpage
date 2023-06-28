<h1 style="color:#555;text-align:center;padding:10px 0 4px 0;text-transform:uppercase">THÔNG TIN KÝ GỬI</h1>
<a href="?mod=kygui" title="Back">Back</a>
<table style="width:100%;border-collapse:collapse" border="1" cellpadding="5" cellspacing="5">
	<tr>
    	<td colspan="2"><h3>Thông tin người gửi:</h3></td>
    </tr>
    <tr>
    	<td width="12%">Họ tên</td>
        <td>{detail.hoten}</td>
    </tr>
    <tr>
    	<td>Email</td>
        <td>{detail.email}</td>
    </tr>
    <tr>
    	<td>Điện thoại</td>
        <td>{detail.dienthoai}</td>
    </tr>
    <tr>
    	<td>Địa chỉ</td>
        <td>{detail.diachi}</td>
    </tr>
    
    <tr>
    	<td colspan="2"><h3>Thông tin cho thuê:</h3></td>
    </tr>
    <tr>
    	<td>Loại ký gửi</td>
        <td>{detail.loaikygui}</td>
    </tr>
    <tr>
    	<td>Giá cho thuê</td>
        <td>{detail.giathue}</td>
    </tr>
    <tr>
    	<td>Địa chỉ thuê</td>
        <td>{detail.diachichothue}</td>
    </tr>
    <tr>
    	<td>Nội dung</td>
        <td>{detail.noidung}</td>
    </tr>
    <tr>
    	<td>IP</td>
        <td>{detail.ip}</td>
    </tr>
    <tr>
    	<td>Ngày gửi</td>
        <td>{detail.timestamp}</td>
    </tr>
</table>
<h3 style="clear:both;padding:20px 0 10px 0">Hình ảnh:</h3>
<ul>
<!--BASIC gallery-->
<li style="float:left">
    <a href="../data/asset/{gallery.icon}" class="mb" style="display:inline-block;position:relative;float:left;margin:0 4px 4px 0">
    <img src="../data/asset/{gallery.icon}" style="width:94px;height:70px;display:block">
    </a>
    <a href="?mod=kygui&act=v&id={gallery.id}" onClick="deleteConfirm(this);return false;" style="display:inline-block;clear:both;float:left">Xóa</a>
</li>
<!--BASIC gallery-->
</ul>
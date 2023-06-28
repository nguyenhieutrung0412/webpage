<h1 style="color:#555;text-align:center;padding:10px 0 4px 0;text-transform:uppercase">THÔNG TIN KÝ GỬI</h1>
<table width="100%" border="0" cellspacing="0" cellpadding="2" class="tb-booking" id="table-list">
  <tr align="left">
    <th width="3%"><strong>STT</strong></th>
    <th><strong>Họ tên</strong></th>
    <th><strong>Email</strong></th>
    <th><strong>Điện thoại</strong></th>
    <th><strong>Địa chỉ</strong></th>
    <th><strong>Loại ký gửi</strong></th>
    <th><strong>Giá thuê</strong></th>
    <th><strong>Địa chỉ thuê</strong></th>
    <th width="20%"><strong>Nội dung</strong></th>
    <th><strong>Actions</strong></th>
  </tr>
 <tbody class="pro">
  <!--BASIC chat-->
  <tr>
    <td>{chat.stt}</td>
    <td><a href="?mod=kygui&act=v&id={chat.id}" title="Chi tiết">{chat.hoten}</a></td>
    <td>{chat.email}</td>
    <td>{chat.dienthoai}</td>
    <td>{chat.diachi}</td>
    <td>{chat.loaikygui}</td>
    <td>{chat.giathue}</td>
    <td>{chat.diachichothue}</td>
    <td>{chat.noidung}</td>
    <td>
    <a href="?mod=kygui&id={chat.id}" onClick="deleteConfirm(this);return false;" title="Xóa"><img src="images/icons_default/delete.png" width="16" height="16" /></a>
    <a href="javascript:void(0)" title="Bật/tắt" onClick="return activeKyGui{chat.active}('{chat.id}')">
    <img src="template/images/icons_default/status{chat.active}.gif">
    </a>
    </td>
  </tr>
  <!--BASIC chat-->
  </tbody>
</table>
<div class="p-paging">{divpage}</div>
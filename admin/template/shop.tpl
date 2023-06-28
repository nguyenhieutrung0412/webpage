<h1 class="mtitle">Danh sách đặt hàng USB</h1>
<div class="tools_box">
<form>
<input type="hidden" name="mod" value="shop" />

<input type="text" name="name" placeholder="Tên, phone"/>
<select name="active">
	<option value="">[Tình trạng thanh toán]</option>
  <option value="1">Đã thanh toán</option>
  <option value="0">Chưa thanh toán</option>
</select>
<button type="submit"><i class="fa fa-search"></i> Tìm kiếm</button>
</form>
</div>

<table style="width:100%;margin:0" border="0" cellspacing="0" cellpadding="2" class="table" id="table-list">
  <thead>
  <tr align="left">
    <th width="2%" align="center"><input type="checkbox" name="checkall" value="1" onclick="checkAll('#table-list',this,'pro')" /></th>
    <th width="2%" align="center">Code</th>
    <th>Date</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th width="12%">Message</th>
    <th>Số lượng</th>
    <th>Tổng tiền</th>
    <th>Ngày nhận hàng</th>
    <th align="center">Thanh toán</th>
    <th>Actions</th>
  </tr>
  </thead>
 <tbody class="pro">
  <!--BASIC ds-->
  <tr>
  	<td align="center"><input type="checkbox" name="pro[]" value="{ds.id}"/> {ds.stt}</td>
    <td align="center">{ds.id}</td>
    <td>{ds.timestamp}</td>
    <td><a href="javascript:void(0)" onclick="return showBooking('shop','show','{ds.id}')">{ds.hoten}</a></td>
    <td>{ds.email}</td>
    <td>{ds.phone}</td>
    <td>{ds.msg}</td>
    <td>{ds.soluong}</td>
    <td class="red">{ds.tongtien}</td>
    <td class="red">{ds.ngaynhanhang}</td>
    <td align="center">
    <a href="javascript:void(0)" onclick="return active('shop','active',{ds.code_act},{ds.active})"><img src="images/icons_default/status{ds.active}.gif"></a>
    </td>
    <td>
    <a href="?mod=shop&id={ds.id}" onClick="deleteConfirm(this); return false;" title="Xóa">
    <img src="images/icons_default/delete.png" width="16" height="16" /></a>
    </td>
  </tr>
  <!--BASIC ds-->
  </tbody>
</table>
  <div class="p-paging">{divpage}</div>
</form>
<script type="text/javascript">
$(document).ready(function(e) {
  $('.breadcrumb,.module_description').remove();
});
</script>
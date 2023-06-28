<h1 class="booking-title">Contact</h1>
{msg}
<form name="frm_Cmt" action="" method="post">
<input type="submit" name="delete_cmt" id="delete_cmt" value="Delete" class="btn {btn_status}" onclick="onDelete(this);return false;">

<table width="100%" border="0" cellspacing="0" cellpadding="2" class="table" id="table-list">
  <thead>
  <tr>
    <th width="2%" style="text-align:center"><input type="checkbox" name="checkall" value="1" onclick="checkAll('#table-list',this,'pro')" /></th>
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
  <!--BASIC booking-->
  <tr>
  	<td align="center"><input type="checkbox" name="pro[]" value="{booking.id}"/></td>
    <td class="bkstt">{booking.stt}</td>
    <td>{booking.timestamp}</td>
    <td>{booking.name}</td>
    <td>{booking.email}</td>
    <td>{booking.phone}</td>
    <td width="40%">{booking.message}</td>
      
    <td>
    <a href="?mod=contact&amp;id={booking.id}" onClick="deleteConfirm(this); return false;" title="Xóa Booking"><img src="images/icons_default/delete.png" width="16" height="16" /></a>
    </td>
  </tr>
  <!--BASIC booking-->
  </tbody>
</table>
  <!--BOX box_paging-->
  <div class="p-paging">{divpage}</div>
   <!--BOX box_paging-->
</form>
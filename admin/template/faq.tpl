<h1 class="booking-title">Thông tin hỏi đáp</h1>
<form name="frm_Cmt" action="" method="post">
<input type="submit" name="delete_cmt" id="delete_cmt" value="Delete" class="btn {btn_status}" onclick="onDelete(this);return false;">
<input type="submit" name="active_cmt" id="active_cmt" value="Active" class="btn {btn_status}" style="margin:5px 0 0 5px">
{msg}
<table width="100%" border="0" cellspacing="0" cellpadding="2" class="table" id="table-list">
  <thead>
  <tr>
    <th width="2%" style="text-align:center"><input type="checkbox" name="checkall" value="1" onclick="checkAll('#table-list',this,'pro')" /></th>
    <th class="thfirst">#</th>
    <th>Date</th>
    <th>Họ Tên</th>
    <th>Email</th>
    <th>Message</th>
    <th width="2%">##</th>
    <th class="thlast">Actions</th>
  </tr>
  </thead>
 <tbody class="pro">
  <!--BASIC booking-->
  <tr>
  	<td align="center"><input type="checkbox" name="pro[]" value="{booking.id}"/></td>
    <td class="bkstt">{booking.stt}</td>
    <td>{booking.timestamp}</td>
    <td>{booking.name}{booking.phone_user}</td>
    <td>{booking.email}</td>
    <td width="40%">{booking.content}</td>
    <td>
    <span data-id="{booking.id}" class="tick" onclick="ct_Active{booking.status}({booking.id})" style="cursor:pointer"><img src="images/icons_default/status{booking.status}.gif" width="10" height="10" border="0"></span>
    </td>
    <td>
    <span onClick="window.open('../{booking.link}.html','_blank')" class="alink"><img src="images/icons_default/view_detail.png" width="16" height="16"/></span>
    <a href="?mod=faq&amp;id={booking.id}" onClick="deleteConfirm(this); return false;" title="Xóa Booking"><img src="images/icons_default/delete.png" width="16" height="16" /></a>
    </td>
  </tr>
  <!--BASIC booking-->
  </tbody>
</table>
  <!--BOX box_paging-->
  <div class="p-paging">{divpage}</div>
   <!--BOX box_paging-->
</form>
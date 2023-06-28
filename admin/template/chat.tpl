{str}
<h1 class="mtitle">Live Chat</h1>
<p class="msg">Total: <u>{detail.total}</u> - Lưu ý: Icon tròn màu đỏ là khách mới, màu xanh khách đã xử lý</p>
<form name="frm_Cmt" action="" method="post">
<input type="submit" name="delete_cmt" id="delete_cmt" value="Delete" class="btn {btn_status}" onclick="onDelete(this);return false;" style="margin:0 0 10px 0">
<!--<input type="submit" name="emptyFile" id="emptyFile" value="Empty File" class="btn" onclick="emptyFile()" style="margin:0 0 10px 0">-->
{msg}
<table width="100%" border="0" cellspacing="0" cellpadding="2" class="table" id="table-list">
  <thead>
  <tr align="left">
    <th width="2%"><input type="checkbox" name="checkall" value="1" onclick="checkAll('#table-list',this,'pro')" /></th>
    <th class="thfirst">#</th>
    <th>Date</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Content</th>
    <th class="thlast">Actions</th>
  </tr>
  </thead>
 <tbody class="pro">
  <!--BASIC chat-->
  <tr>
  	<td align="center"><input type="checkbox" name="pro[]" value="{chat.id}"/></td>
    <td class="bkstt">{chat.stt}</td>
    <td>{chat.timestamp}</td>
    <td><a href="javascript:void(0)" title="Trả lời" {chat.link}>{chat.name}</a></td>
    <td>{chat.email}</td>
    <td>{chat.phone}</td>
    <td>{chat.content}</td>
    <td>
    <span data-id="{chat.id}" class="tick" onclick="chat_Active{chat.status}({chat.id})" style="cursor:pointer"><img src="images/icons_default/status{chat.status}.gif" width="10" height="10" border="0"></span>
    
    <a href="?mod=chat&amp;id={chat.id}" onClick="deleteConfirm(this); return false;" title="Xóa"><img src="images/icons_default/delete.png" width="16" height="16" /></a>
    </td>
  </tr>
  <!--BASIC chat-->
  </tbody>
</table>
  <div class="p-paging">{divpage}</div>
</form>
<script type="text/javascript">

function NhanThongBao(){
	$('.wpkirim').remove();
	  var sounds = document.getElementsByTagName('audio');
	  for(i=0; i<sounds.length; i++) sounds[i].pause();
}
</script>
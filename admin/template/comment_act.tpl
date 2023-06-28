<form name="frm_Cmt" action="" method="post">
<div class="top_callFunc">
<h1 style="text-align:center;font-weight:400">DANH SÁCH BÌNH LUẬN</h1>
<!--<input type="submit" name="delete_cmt" id="delete_cmt" value="Delete" class="btn {btn_status}" onclick="onDelete(this);return false;">-->
<a class="btn r" href="{BACK}"> &lt; {lang.back}</a>
{msg}
</div>

<table width="100%" border="0" cellspacing="0" cellpadding="2" class="table_list table-Form1 {btn_status}" id="table-list">
  <tr>
  	<!--<th width="2%"><input type="checkbox" name="checkall" value="1" onclick="checkAll('#table-list',this,'pro')" /></th>-->
    <th width="2%">STT</th>
    <th width="12%">Name</th>
    <th width="12%">Email</th>
	<th>{lang.comment}</th>
    <th width="5%">IP</th>
    <th width="15%">{lang.date}</th>
    <th width="5%">Vote</th>
	<th width="5%">{lang.status}</th>
    <th width="5%">{lang.actions}</th>
  </tr>
  <!--BASIC comment-->
  <tr>
  	<!--<td align="center"><input type="checkbox" name="pro[]" value="{comment.id}"/></td>-->
  	<td>{comment.stt}</td>
    <td>{comment.name}</td>
    <td>{comment.email}</td>
    <td>{comment.content}</td>
    <td>{comment.ip}</td>
    <td>{comment.timestamp}</td>
    <td align="center">{comment.vote}</td>
	<td align="center">
    <span data-id="{comment.id}" title="Duyệt bình luân" class="tick" onclick="hotActive{comment.active}({comment.id})" style="cursor:pointer"><img src="images/icons_default/status{comment.active}.gif" width="10" height="10" border="0"></span>
    </td>
    
    <td align="center"><a href="?mod=comment_act&amp;id={comment.id}" onClick="deleteConfirm(this); return false;"><img src="template/images/icons_default/delete.png" width="16" height="16"/></a>
    <img src="template/images/icons_default/link_add.png" width="16" height="16" onclick="window.open('{comment.link}','_blank')" style="cursor:pointer" title="Xem link bình luận"/>
    
    </td>
  </tr>
  <!--BASIC comment-->
</table>

</form>
<div class="p-paging">{divpage}</p></div>
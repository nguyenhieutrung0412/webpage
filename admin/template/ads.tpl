<h1 style="color:#555;text-align:center;padding:10px 0 4px 0;text-transform:uppercase">Google Adwords</h1>
<div style="float:right">
<form name="frm" method="get" action="https://www.officesaigon.vn/cms/?mod=adwords/">
<input type="text" name="date" id="date" value="" style="height:20px">
<input type="submit" name="s" id="s" value="Search" class="btn"/>
</form>
</div>

<form name="frm_Cmt" action="" method="post">
<input type="submit" name="delete_cmt" id="delete_cmt" value="Delete" class="btn {btn_status}" onclick="onDelete(this);return false;" style="margin:0 0 10px 0">
<table width="100%" border="0" cellspacing="0" cellpadding="2" class="tb-booking" id="table-list">
  <thead>
  <tr align="left">
    <th width="2%"><input type="checkbox" name="checkall" value="1" onclick="checkAll('#table-list',this,'pro')" /></th>
    <th class="thfirst"><strong>#</strong></th>
    <th><strong>Chiến dịch</strong></th>
    <th><strong>Keyword</strong></th>
    <th><strong>Đối sánh</strong></th>
    <th><strong>Network</strong></th>
    <th><strong>Thiết bị</strong></th>
    <th><strong>Vị trí</strong></th>
    <th><strong>IP</strong></th>
    <th><strong>Link</strong></th>
    <th><strong>Timestamp</strong></th>
    <th class="thlast"><strong>Actions</strong></th>
  </tr>
  </thead>
 <tbody class="pro">
  <!--BASIC ga-->
  <tr>
  	<td align="center"><input type="checkbox" name="pro[]" value="{ga.id}"/></td>
    <td>{ga.stt}</td>
    <td>{ga.campaign}</td>
    <td>{ga.keyword}</td>
    <td>{ga.matchtype}</td>
    <td>{ga.network}</td>
    <td>{ga.device}</td>
    <td>{ga.adposition}</td>
    <td>{ga.ip}</td>
    <td>{ga.name_seo}</td>
    <td>{ga.timestamp}</td>
    <td>
    <a href="?mod=adwords&amp;id={ga.id}" onClick="deleteConfirm(this); return false;" title="Xóa">
    <img src="images/icons_default/delete.png" width="16" height="16" /></a>
    </td>
  </tr>
  <!--BASIC ga-->
  </tbody>
</table>
  <div class="p-paging">{divpage}</div>
</form>
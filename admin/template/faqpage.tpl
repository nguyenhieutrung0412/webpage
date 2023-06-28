<h1 style="color:#555;text-align:center;padding:10px 0 4px 0;text-transform:uppercase">Link Search ({total})</h1>
{msg}
<div style="margin:10px 0;width:100%;clear:both">
<form name="frm_url" id="frm_url" action="" method="get" enctype="multipart/form-data">
<input type="hidden" name="mod" value="links"/>
<input type="text" name="name_seo" placeholder="Tìm URL..." style="width:50%;height:24px"/>
</form>
</div>
<table width="100%" border="0" cellspacing="0" cellpadding="2" class="table_list" id="table-list">
  <tr>
    <th>STT</th>
    <th>Title</th>
    <th>IP</th>
    <th>Timestamp</th>
    <th width="6%">Actions</th>
  </tr>
  <!--BASIC link-->
  <tr>
  	<td>{link.stt}</td>
    <td><a href="javascript:void(0)" title="{link.h1}" onClick="window.open('https://www.officesaigon.vn/{link.name_seo}.html','_blank')">{link.h1}</a></td>
    <td>{link.ip}</td>
    <td>{link.timestamp}</td>
    <td>
    <a href="?mod=links&amp;id={link.id}" onClick="deleteConfirm(this); return false;"><img src="template/images/icons_default/delete.png" width="16" height="16"/></a>
    <a href="?mod=links&act=edit&id={link.id}" title="Edit"><img src="template/images/icons_default/edit.png" width="16" height="16" border="0"></a></td>
  </tr>
  <!--BASIC link-->
</table>

<div class="p-paging">{divpage}</div>
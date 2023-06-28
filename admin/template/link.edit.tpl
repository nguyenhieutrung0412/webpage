<h1 style="color:#555;text-align:center;padding:10px 0 4px 0;text-transform:uppercase">Link Search ({total})</h1>
{msg}
<form action="?mod=links&act=edit&id={detail.id}" method="post">
<table width="100%" border="0" cellspacing="0" cellpadding="2">
<tr>
	<td width="15%">Meta title</td>
  <td><input type="text" name="ds[mtitle]" value="{detail.mtitle}" style="width:80%;height:22px" required="required"/></td>
</tr>
<tr>
	<td>Meta keywords</td>
  <td><input type="text" name="ds[mkey]" value="{detail.mkey}" style="width:80%;height:22px" required="required"/></td>
</tr>
<tr>
	<td>Meta description</td>
  <td><input type="text" name="ds[mdesc]" value="{detail.mdesc}" style="width:80%;height:22px" required="required"/></td>
</tr>
<tr>
	<td>Meta intro</td>
  <td><textarea name="ds[intro]" required="required" style="width:80%;height:22px" class="tinymce">{detail.intro}</textarea></td>
</tr>
<tr>
	<td>Meta h1</td>
  <td><input type="text" name="ds[h1]" value="{detail.h1}" required="required" style="width:80%;height:22px" /></td>
</tr>
<tr>
	<td>Meta h2</td>
  <td><input type="text" name="ds[h2]" value="{detail.h2}" required="required" style="width:80%;height:22px" /></td>
</tr>
<tr>
	<td colspan="2"><button type="submit">Cập nhật</button></td>
</tr>

</table>
</form>
<div class="p-paging">{divpage}</div>

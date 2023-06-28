<h1 style="color:#555;text-align:center;padding:10px 0 4px 0;text-transform:uppercase">Lấy tin tức tự động</h1>
<p style="color:#390;width:100%;display:block;padding:0;margin:0 0 10px 0;text-align:center">Lưu ý: Chọn lọc từ các trang web được chỉ định sẵn</p>
<form name="frm_getNewsAuto" id="frm_getNewsAuto" method="post" enctype="multipart/form-data" onsubmit="return getNewsAuto()">
<table class="table-Form1">
	<tr>
    	<td width="100">Nguồn tin</td>
        <td>
        <select name="site" style="width:232px" required="required">
            <option value="">Chọn trang nguồn</option>
            <option value="Cafeland">cafeland.vn</option>
        </select>
    </td>
    </tr>
    <tr>
    	<td>Mục cần lưu</td>
        <td>
        <select name="id" style="width:232px" required="required">
            <option value="">Chọn mục tin</option>
            <!--BASiC source_news-->
            {source_news.option}
            <!--BASiC source_news-->
        </select>
    </td>
    </tr>
     <tr>
    	<td>Đường link</td>
        <td><input type="text" name="link" required="required" style="width:220px" placeholder="Đường link"></td>
    </tr>
     <tr>
    	<td colspan="2"><button type="submit">Lấy tin</button></td>
    </tr>
</table>
</form>
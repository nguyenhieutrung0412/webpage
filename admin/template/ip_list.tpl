<h1 style="color:#555;text-align:center;padding:10px 0 4px 0;text-transform:uppercase">Theo dõi truy cập</h1>
<p style="color:#390;width:100%;display:block;padding:0;margin:0 0 10px 0;text-align:center">Danh sách IP truy cập</p>
<form name="frm_Cmt" action="" method="post">
    <input type="submit" name="delete_cmt" id="delete_cmt" value="Delete" class="btn {btn_status}" onclick="onDelete(this);return false;" style="margin:0 0 10px 0">
    <table width="100%" border="0" cellspacing="0" cellpadding="2" class="tb-booking" id="table-list">
        <thead>
            <tr align="left">
                <th width="2%"><input type="checkbox" name="checkall" value="1" onclick="checkAll('#table-list',this,'pro')" /></th>
                <th class="thfirst">#</th>
                <th>Date</th>
                <th><a href="?mod=ip_online&sort={order_by}">IP</a></th>
                <th>Country</th>
                <th>LINK</th>
                <th class="thlast">Actions</th>
            </tr>
        </thead>
        <tbody class="pro">
            
            <!--BASIC chat-->
            <tr>
                <td align="center"><input type="checkbox" name="pro[]" value="{chat.ip}"/></td>
                <td class="bkstt">{chat.stt}</td>
                <td>{chat.timestamp}</td>
                <td>{chat.ip}</td>
                <td>{chat.country}</td>
                <td>{chat.local}</td>
                <td>
                <a href="?mod=ip_online&id={chat.ip}" onClick="deleteConfirm(this); return false;" title="Xóa"><img src="images/icons_default/delete.png" width="16" height="16"/></a>
                <a href="?mod=ip_online&ip={chat.ip}&s=1" title="Khóa IP này?">Block</a>
                </td>
            </tr>
            
            <!--BASIC chat-->
            
        </tbody>
    </table>
    <div class="p-paging">{divpage}</div>
</form>
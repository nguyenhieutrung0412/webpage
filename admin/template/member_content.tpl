<div class="top_callFunc">
	
</div>
	
<div class="hide breadcrumb_cat">{xpath}</div>

<table width="100%" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td width="200" class="hide"><img src="images/icons_default/folder.gif" alt="" width="16" height="16" />&nbsp;Root
		<div class="folder">
			<img src="images/icons_default/folder.gif" alt="" width="16" height="16" />&nbsp;Root<br />
				<div class="folder">
					<img src="images/icons_default/folder.gif" alt="" width="16" height="16" />&nbsp;Root<br />
					<img src="images/icons_default/folder.gif" alt="" width="16" height="16" />&nbsp;Root
				</div>
			<img src="images/icons_default/folder.gif" alt="" width="16" height="16" />&nbsp;Root
		</div>
		</td>
  				 <script>
					function Search(obj){ 
						window.location= './?mod={module}&parentid={parentid}&type={type}&page={page}&locdonhang='+ obj;
					}
					</script>
        <form name="frm1" action="./?mod={module}&amp;parentid={parentid}&type={type}&amp;page={page}" method="post">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table-Form1">
              <tr>
                <td>		
                    <div class="l">
                        <span class="">
                            <select  onchange="Search(this.value)"  name="locdonhang" id="locdonhang">
                            <option value="0" selected="selected">----Hiển thị tất cả----</option>
                            <!--BASIC tinhtrang-->
                                <option {tinhtrang.select} value="{tinhtrang.matinhtrang}">{tinhtrang.tentinhtrang}</option>
                             <!--BASIC tinhtrang-->
                            </select>
                        </span>
                    </div>
                </td>
              </tr>
            </table>
          </form>  
  
<div class="pagination paging-top">
	<span class="r"><a href="./?mod={module}&amp;parentid={parentid}&type={type}&amp;page={page}">{lang.sorted_default}</a></span>{divpage}
</div>
<div class="form">
	<!--<form id="fSubmit" name="fSubmit" method="post" action="" onsubmit="return checkSubmitAction(this)">-->
		<div class="error">{msg}</div>
		<table width="100%" border="0" cellspacing="0" cellpadding="2" class="table_list list marginTop5" id="table-list">
			<tr>
					<th width="4%" class="th-checkbox firstColumn">
					<input type="checkbox" class="no_width" style="{display_checkall}" name="checkall" value="1" onclick="checkAll('#table-list',this,'pro')" />					</th>
                    <th width="12%" class="th-date"><a href="./?mod={module}&amp;parentid={parentid}&type={type}&amp;page={page}&amp;by=madonhang&amp;order={switchorder}">Mã đơn hàng</a> {orderby.mahoadon}</th>
                    <th width="20%" class="th-name"><a href="./?mod={module}&amp;parentid={parentid}&type={type}&amp;page={page}&amp;by=tendangnhap&amp;order={switchorder}">Tên đăng nhập</a> {orderby.tendangnhap}</th>
					<th width="20%" class="th-name"><a href="./?mod={module}&amp;parentid={parentid}&type={type}&amp;page={page}&amp;by=tentinhtrang&amp;order={switchorder}">Tình trạng đơn hàng</a> {orderby.tentinhtrang}</th>
					<th width="20%" class="th-date"><a href="./?mod={module}&amp;parentid={parentid}&type={type}&amp;page={page}&amp;by=ngaydat&amp;order={switchorder}">Ngày đặt</a> {orderby.ngaydat}</th>
					<th width="16%" class="th-action {class_status_fields}" >{status_fields} </th>
					<th width="5%" class="th-order"><a href="./?mod={module}&amp;parentid={parentid}&type={type}&amp;page={page}&amp;by=id&amp;order={switchorder}">{button.header_order}</a> {orderby.order_id}</th>
					<th width="3%" class="th-status"><!--<a href="./?mod={module}&amp;parentid={parentid}&type={type}&amp;page={page}&amp;by=active&amp;order={switchorder}">{button.header_status}</a> {orderby.active}--></th>
					<th width="12%" class="th-status lastColumn">{button.header_actions}</th>
					<!--<th class="th-actions">Actions</th>-->
			</tr>
			<tbody class="cat">
				<!--BASIC category-->
				<!--BASIC category-->
			</tbody>
			<tbody class="pro">
				<!--BASIC product-->
				<tr id="{product.id}pro" class="tr_content{product.row}">
					<td class="th-checkbox firstColumn"><input type="checkbox" name="pro[]" value="{product.id}" class="no_width" /></td>
					<td class="th-date">{product.mahoadon}</td>
                    <td class="th-date"><a href="?mod={module}&amp;act=update&amp;id={product.mahoadon}&amp;parentid={parentid}&amp;type={type}&amp;matinhtrang={product.matinhtrang}" title="" class="action-edit">{product.tendangnhap}</a></td>
					<td class="th-date"><a href="?mod={module}&amp;act=update&amp;id={product.mahoadon}&amp;parentid={parentid}&amp;type={type}&amp;matinhtrang={product.matinhtrang}" title="" class="action-edit">{product.tentinhtrang}</a></td>
                    <td class="th-name">
						<a class="hide {subcontent_show}" title="{subcontent_name}" href="?mod=member_contentsub&amp;p={module}&amp;pid={product.mahoadon}&amp;parentid={parentid}&amp;type={type}"><img src="images/icons_default/file.gif" align="File" /></a>
						<a href="?mod={module}&amp;act=update&amp;id={product.mahoadon}&amp;parentid={parentid}&amp;type={type}" title="" class="action-edit">{product.ngaydathang}</a>
						
				  </td>
                  
					<td class="th-action {class_status_fields}" >{product.}
						<!--<a href="?mod={module}&amp;act=top&amp;id={product.id}&amp;parentid={parentid}&amp;type={type}" title="Add to top"><img src="images/tick{product.top}.png" /></a>--></td>					
					<td class="th-order"><span class="hide {icon_updown}"><a class="{product.classup}" href="?mod={module}&amp;act=orderbtn&amp;do=up&amp;id={product.mahoadon}&amp;page={page}&amp;parentid={parentid}&amp;type={type}"><img src="images/icons_default/up.png" /></a> <a class="{product.classdown}" href="?mod={module}&amp;act=orderbtn&amp;do=down&amp;id={product.id}&amp;page={page}&amp;parentid={parentid}&amp;type={type}"><img src="images/icons_default/down.png" /></a></span><span class="order_id">{product.mahoadon}</span></td>
					<td class="th-status"><!--<a href="?mod={module}&amp;act=active&amp;id={product.mahoadon}&amp;parentid={parentid}&amp;type={type}" title="{button.status_hover_item}"><img src="images/icons_default/status{product.active}.gif" /></a>--></td>
					
					<td class="th-status lastColumn">
						<span class="hide {action_featuredon}">
							<a href="?mod={module}&amp;act=featureon&amp;id={product.mahoadon}&amp;parentid={parentid}&amp;type={type}" title="{featuredon_name}"><img src="images/icons_default/link_{product.featureon}.png" width="16" height="16" border="0" /></a></span>
						<span class="hide {action_comment}">
							<a href="?mod=comment&amp;p={module}&amp;pid={product.mahoadon}&amp;parentid={parentid}&amp;type={type}" title="{comment_name}"><img src="images/icons_default/msg.png" width="16" height="16" border="0" /></a></span>
						<span class="hide {action_move}">
							<a href="?mod={module}&amp;act=move&amp;id={product.mahoadon}&amp;parentid={parentid}&amp;type={type}" title="{button.move_item}"><img src="images/icons_default/move.png" width="16" height="16" border="0" /></a></span>
						<span class="hide {action_update}">
							<a href="?mod={module}&amp;act=update&amp;id={product.mahoadon}&amp;parentid={parentid}&amp;type={type}" title="{button.edit_item}"><img src="images/icons_default/edit{ucp.edit}.png" width="16" height="16" border="0" /></a></span>
						<span class="">
							<a href="?mod={module}&amp;act=delete&amp;id={product.mahoadon}&amp;parentid={parentid}&amp;type={type}" onclick="deleteConfirm(this); return false;" title="{button.delete_item}"><img src="images/icons_default/delete{ucp.delete}.png" width="16" height="16" /></a></span>
					</td>
				</tr>
				<!--BASIC product-->
			</tbody>
		</table>
		<!--</form>-->
        </div>
		<div class="pagination paging-bottom">
			{divpage}
		</div>
</td></tr></table>

<!--BOX drapdrop_cat-->
<script type="text/javascript">
	var begin = null;
	$('#table-list tbody.cat').tableDnD({
		onDragClass: "ondrag-cat",
		onDragStart: function(table, row) {
			begin = $.tableDnD.serialize();
		},
		onDrop: function(table, row) {
			var after = $.tableDnD.serialize();
			if(begin != after){
				$.post('?mod=category&act=order&token='+token,{'data': after,'start': 0},function(data){
					var rows = after.replace(/\[\]=/ig,'').split('&');
					for(var i in rows) $('tr#'+rows[i]+' td.th-order').html(i);
				});
			}
		}
    });
</script>
<!--BOX drapdrop_cat-->	

<!--BOX drapdrop_content-->	
<script type="text/javascript">
	var begin = null;
	$('#table-list tbody.pro').tableDnD({
		onDragClass: "ondrag-list",
		onDragStart: function(table, row) {
			begin = $.tableDnD.serialize();
		},
		onDrop: function(table, row) {
			var after = $.tableDnD.serialize();
			if(begin != after){
				$.post('?mod={module}&act=order&token='+token, {'data':after,'start': {start}},function(data){
					var rows = after.replace(/\[\]=/ig,'').split('&');
					for(var i in rows) $('tr#'+rows[i]+' td.th-order span.order_id').html(parseInt(i) + parseInt({start}));

				})
			}
		}
    });
</script>
<!--BOX drapdrop_content-->	

<!--BOX breadcrumb_cat-->
<script>
$('div.breadcrumb_cat').show();
</script>
<!--BOX breadcrumb_cat-->

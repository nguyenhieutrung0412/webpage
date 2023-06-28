<div class="top_callFunc"> 
    <!--BOX search_function-->
    <div class="searchForm table-Form1">
        <form id="form1" name="form1" method="get" action="">
            <input name="mod" type="hidden" id="mod" value="content" />
            <input name="type" type="hidden" id="type" value="{type}" />
            <input name="parentid" type="hidden" id="parentid" value="{parentid}" />
            <input name="q" type="text" class="txf-normal" id="q" value="{q}" onfocus="if(this.value==this.defaultValue) this.value='';" onblur="if(this.value=='') this.value = this.defaultValue;" />
            <input name="cmd" type="submit" class="btn" id="cmd" value="{lang.search}" />
            {search_result}
        </form>
    </div>
    <!--BOX search_function-->
    
    <div class="hide l {action_newrecord}" > <a href="?mod={module}&amp;act=update&amp;parentid={parentid}&amp;type={type}&amp;do=new" title="" class="addNew btn">{button.new_item}</a> 
        <!--style="background-image:url(../images/new_record{ucp.new}.png)" --> 
    </div>
    <div class="hide l {action_newcategory}" > <a href="?mod=category&amp;p={module}&amp;act=update&amp;parentid={parentid}&amp;type={type}&amp;do=new" title="" class="addNewCat btn">{button.new_category}</a> 
        <!--style="background-image:url(images/new{ucp.new}.gif)" --> 
    </div>
    {link_auto} </div>
<div class="hide breadcrumb_cat">{xpath}</div>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td width="200" class="hide"><img src="images/icons_default/folder.gif" alt="" width="16" height="16" />&nbsp;Root
            <div class="folder"> <img src="images/icons_default/folder.gif" alt="" width="16" height="16" />&nbsp;Root<br />
                <div class="folder"> <img src="images/icons_default/folder.gif" alt="" width="16" height="16" />&nbsp;Root<br />
                    <img src="images/icons_default/folder.gif" alt="" width="16" height="16" />&nbsp;Root </div>
                <img src="images/icons_default/folder.gif" alt="" width="16" height="16" />&nbsp;Root </div></td>
        <td><div class="pagination paging-top"> <span class="r"><a href="./?mod={module}&amp;parentid={parentid}&type={type}&amp;page={page}">{lang.sorted_default}</a></span>{divpage} </div>
            <div class="form">
                <form id="fSubmit" name="fSubmit" method="post" action="" onsubmit="return checkSubmitAction(this)">
                    <div class="error">{msg}</div>
                    <table width="100%" border="0" cellspacing="0" cellpadding="2" class="table_list list marginTop5" id="table-list">
                        <tr>
                            <th width="4%" class="th-checkbox firstColumn"> <input type="checkbox" class="no_width" name="checkall" value="1" onclick="checkAll('#table-list',this,'pro')" />
                            </th>
                            <th width="48%" class="th-name"><a href="./?mod={module}&amp;parentid={parentid}&type={type}&amp;page={page}&amp;by=name&amp;order={switchorder}">{button.header_name}</a> {orderby.name}</th>
                            <th width="12%" class="th-date"><a href="./?mod={module}&amp;parentid={parentid}&type={type}&amp;page={page}&amp;by=date&amp;order={switchorder}">{button.header_date}</a> {orderby.date}</th>
                            <th width="16%" class="th-action {class_status_fields}" >{status_fields}</th>
                            <th width="5%" class="th-order"><a href="./?mod={module}&amp;parentid={parentid}&type={type}&amp;page={page}&amp;by=order_id&amp;order={switchorder}">{button.header_order}</a> {orderby.order_id}</th>
                            <th width="3%" class="th-status"><a href="./?mod={module}&amp;parentid={parentid}&type={type}&amp;page={page}&amp;by=active&amp;order={switchorder}">{button.header_status}</a> {orderby.active}</th>
                            <th width="12%" class="th-status lastColumn">{button.header_actions}</th>
                            <!--<th class="th-actions">Actions</th>--> 
                        </tr>
                        <tbody class="cat">
                            <!--BASIC category-->
                            <tr id="{category.id}cat" class="tr_cat{category.row}">
                                <td class="th-checkbox firstColumn"><a href="./?mod={module}&parentid={category.id}&type={type}" title="{lang.category_detail}"><img src="images/icons_default/folder.gif" width="16" height="16" border="0" align="absmiddle" /></a></td>
                                <td class="th-name"><span class="hide  {action_viewcat}"></span> <a href="./?mod={module}&amp;parentid={category.id}&type={type}&level_id={category.parentid}" title="View list detail">{category.list_field}</a></td>
                                <td class="th-date">{category.date}</td>
                                <td class="th-action {class_status_fields}">{category.status_fields}</td>
                                <td class="th-order">{category.order_id}</td>
                                <td class="th-status"><a href="?mod=category&amp;p={module}&amp;act=active&amp;id={category.id}&amp;parentid={parentid}&amp;type={type}" title="{button.status_hover_cat}"><img src="images/icons_default/status{category.active}.gif"/></a></td>
                                <td class="th-status lastColumn"><span class="hide {action_updatecat}" > <a href="?mod=category&amp;p={module}&amp;act=update&amp;id={category.id}&amp;parentid={parentid}&amp;type={type}&level_id={category.parentid}" title="{button.edit_category}" class="action-edit"><img src="images/icons_default/edit{ucp.edit}.png" width="16" height="16" border="0" /></a></span> <span class="hide {category.delcat}"> <a href="?mod=category&amp;p={module}&amp;act=delete&amp;id={category.id}&amp;parentid={parentid}&amp;type={type}&level_id={category.parentid}" title="{button.delete_category}" onclick="deleteConfirm(this); return false;" class="action-delete"><img src="images/icons_default/delete{ucp.delete}.png" width="16" height="16"/></a> </span> 
                                    
                                    <!--BOX box_faq--> 
                                    <a href="?mod=mp3&catid={category.id}&type={category.type}&parentid={category.parentid}" title="Thêm danh sách bài nhạc" style="position:relative"><img src="images/icons_default/plus.jpg"/>{category.flag_1}</a>
                                    <a href="javascript:void(0)" id="catid_{category.id}" onclick="return frmForm('detail','frm','{category.id}')" title="Thêm thể loại" style="position:relative"><img src="images/icons_default/new.gif"/>{category.flag_2}</a> 
                                    <!--BOX box_faq--></td>
                            </tr>
                            <!--BASIC category-->
                        </tbody>
                        <tbody class="pro">
                            <!--BASIC product-->
                            <tr id="{product.id}pro" class="tr_content{product.row}">
                                <td class="th-checkbox firstColumn"><input type="checkbox" name="pro[]" value="{product.id}" class="no_width" /></td>
                                <td class="th-name"><a class="hide {subcontent_show}" title="{subcontent_name}" href="?mod=contentsub&amp;p={module}&amp;pid={product.id}&amp;parentid={parentid}&amp;type={type}"><img src="images/icons_default/file.gif" align="File" /></a> {product.thumb_field} <a href="?mod={module}&amp;act=update&amp;id={product.id}&amp;parentid={parentid}&amp;type={type}{levelid}" title="" class="action-edit">{product.list_field}</a></td>
                                <td class="th-date">{product.date}</td>
                                <td class="th-action {class_status_fields}" >{product.status_fields} 
                                    <!--<a href="?mod={module}&amp;act=top&amp;id={product.id}&amp;parentid={parentid}&amp;type={type}" title="Add to top"><img src="images/tick{product.top}.png" /></a>--></td>
                                <td class="th-order"><span class="hide {icon_updown}"><a class="{product.classup}" href="?mod={module}&amp;act=orderbtn&amp;do=up&amp;id={product.id}&amp;page={page}&amp;parentid={parentid}&amp;type={type}"><img src="images/icons_default/up.png" /></a> <a class="{product.classdown}" href="?mod={module}&amp;act=orderbtn&amp;do=down&amp;id={product.id}&amp;page={page}&amp;parentid={parentid}&amp;type={type}"><img src="images/icons_default/down.png" /></a></span><span class="order_id">{product.order_id}</span></td>
                                <td class="th-status"><a href="?mod={module}&amp;act=active&amp;id={product.id}&amp;parentid={parentid}&amp;type={type}" title="{button.status_hover_item}"><img src="images/icons_default/status{product.active}.gif" /></a></td>
                                <td class="th-status lastColumn"><span class="hide {action_featuredon}"><a href="?mod={module}&amp;act=featureon&amp;id={product.id}&amp;parentid={parentid}&amp;type={type}" title="{featuredon_name}"><img src="images/icons_default/link_{product.featureon}.png" width="16" height="16" border="0" /></a></span> <span class="hide {action_comment}"> <a href="?mod=comment&amp;p={module}&amp;pid={product.id}&amp;parentid={parentid}&amp;type={type}" title="{comment_name}"><img src="images/icons_default/msg.png" width="16" height="16" border="0" /></a></span> <span class="hide {action_move}"> <a href="?mod={module}&amp;act=move&amp;id={product.id}&amp;parentid={parentid}&amp;type={type}" title="{button.move_item}"><img src="images/icons_default/move.png" width="16" height="16" border="0" /></a></span> <span class="hide {action_update}"> <a href="?mod={module}&amp;act=update&amp;id={product.id}&amp;parentid={parentid}&amp;type={type}{levelid}" title="{button.edit_item}"><img src="images/icons_default/edit{ucp.edit}.png" width="16" height="16" border="0" /></a></span> <span class="hide {product.delrecord}"> <a href="?mod={module}&amp;act=delete&amp;id={product.id}&amp;parentid={parentid}&amp;type={type}" onclick="deleteConfirm(this); return false;" title="{button.delete_item}"><img src="images/icons_default/delete{ucp.delete}.png" width="16" height="16" /></a></span> 
                                    
                                    <!--BOX box_faq--> 
                                    <a href="?mod=faqpage&act=add&id={product.id}&ln=content" title="Thêm hỏi đáp" style="position:relative"><img src="images/icons_default/plus.jpg"/>{product.flag_1}</a> <a href="?mod=event&act=add&id={product.id}&ln=content" title="Thêm events" style="position:relative"><img src="images/icons_default/new.gif"/>{product.flag_2}</a> 
                                    <!--BOX box_faq--></td>
                            </tr>
                            <!--BASIC product-->
                        </tbody>
                    </table>
                    <div class="pagination paging-bottom"> {divpage} </div>
                    <div class="bottom_callAction"> <strong>{button.tools_copy}:</strong><br />
                        <select name="content_action">
                            <option value="">{lang.choose_action}</option>
                            <option value="delete">{button.delete_item}</option>
                            <option value="move">{button.move_item}</option>
                            <option value="active">{button.active_item}</option>
                            <option value="inactive">{button.inactive_item}</option>
                        </select>
                        <input name="cmd" type="submit" class="btn" id="cmd" value="{lang.go}" />
                    </div>
                </form>
            </div></td>
    </tr>
</table>
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

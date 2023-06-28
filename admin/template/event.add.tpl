<h1 style="color:#555;text-align:center;padding:10px 0 4px 0;text-transform:uppercase">Thêm Events</h1>
<form name="frm_event" id="frm_event" method="post" data-id="{detail.id}" enctype="multipart/form-data" onsubmit="return AddEvents()">
<input type="hidden" name="ln" value="{detail.ln}"/>
<table width="100%" border="0" cellspacing="0" cellpadding="2">
    <tr>
        <td>
        <div class="rows_dv rows_evt">
          <div class="rows_faq">
            <p><strong>Event (0)</strong></p>
            <input type="text" name="ds[0][startdate]" placeholder="startdate"/>
            <input type="text" name="ds[0][enddate]" placeholder="enddate"/>
            <input type="text" name="ds[0][validfrom]" placeholder="validfrom"/>
            <input type="text" name="ds[0][event_name]" placeholder="event_name"/>
            <input type="text" name="ds[0][event_desc]" placeholder="event_desc"/>
            <input type="text" name="ds[0][event_url]" placeholder="event_url"/>
            <input type="text" name="ds[0][event_img]" placeholder="event_img"/>
            <input type="text" name="ds[0][price]" placeholder="price"/>
            <input type="text" name="ds[0][performer]" placeholder="performer"/>
          </div>
        </div>
        </td>
    </tr>
    <tr>
        <td>
        <p><a href="#" title="Thêm dòng" id="add_dv" style="display:inline-block"><img src="images/icons_default/plus.jpg" style="float:left;margin:0 4px 0 0"/> Thêm dòng</a></p>
        <button type="submit" style="float:left;margin:10px 0 0 0;clear:left">Cập nhật</button>
        </td>
    </tr>
</table>
</form>

<script type="text/javascript">
//-----Add rows dich vu
$(function(){
	var $i = 1;

	var $container = $('.rows_dv');
	$('#add_dv').live('click', function(){
	
		var $str = '<div class="rows_faq" style="width:100%;float:left;clear:both">'+
		'<p style="margin:15px 0 0 0"><strong>Event ('+$i+')</strong></p>'+
		'<input type="text" name="ds['+$i+'][startdate]" placeholder="startdate"/>'+
		'<input type="text" name="ds['+$i+'][enddate]" placeholder="enddate"/>'+
		'<input type="text" name="ds['+$i+'][validfrom]" placeholder="validfrom"/>'+
		'<input type="text" name="ds['+$i+'][event_name]" placeholder="event_name"/>'+
		'<input type="text" name="ds['+$i+'][event_desc]" placeholder="event_desc"/>'+
		'<input type="text" name="ds['+$i+'][event_url]" placeholder="event_url"/>'+
		'<input type="text" name="ds['+$i+'][event_img]" placeholder="event_img"/>'+
		'<input type="text" name="ds['+$i+'][price]" placeholder="price"/>'+
		'<input type="text" name="ds['+$i+'][performer]" placeholder="performer"/>'+
		'<a href="#" title="Xóa dòng" class="remove_faq" style="display:block;line-height:27px;margin:0 0 0 5px;float:left">Xóa</a></div>';
		
		$($str).appendTo($container);
		
		$i++;
		return false;
	});
	
	$('.remove_faq').live('click', function() { 
		if($i > 1){
			$(this).parents('.rows_faq').remove();
			$i--;
		}
		return false;
	});
	
});
</script>

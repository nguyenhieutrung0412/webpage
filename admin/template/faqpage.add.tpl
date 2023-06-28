<h1 style="color:#555;text-align:center;padding:10px 0 4px 0;text-transform:uppercase">Thêm hỏi đáp</h1>
<form name="frm_faqpage" id="frm_faqpage" method="post" data-id="{detail.id}" enctype="multipart/form-data" onsubmit="return AddFaq()">
<input type="hidden" name="ln" value="{detail.ln}"/>
<table width="100%" border="0" cellspacing="0" cellpadding="2">
    <tr>
        <td>
        <div class="rows_dv">
          <div class="rows_faq">
            <p><strong>Question (0)</strong></p>
            <p><input type="text" name="ds[0][question]" style="width:50%;height:22px" maxlength="100"/></p>
            <p>&nbsp;</p><input type="hidden" name="ds[0][answer_id]" value="{detail.answer_id}">
            <p><strong>Answer (0)</strong></p>
            <p><textarea class="tinymce" name="ds[0][answer]" style="width:100%;height:80px"></textarea></p>
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
	var $answer_id = {detail.answer_id}+$i;
	
		var $str = '<div class="rows_faq" style="width:100%;float:left;clear:both">'+
		'<p>&nbsp;</p><input type="hidden" name="ds['+$i+'][answer_id]" value="'+$answer_id+'">'+
		'<p><strong>Question ('+$i+')</strong></p>'+
		'<p><input type="text" name="ds['+$i+'][question]" style="width:50%;height:22px" maxlength="100"/></p>'+
		'<p>&nbsp;</p>'+
		'<p><strong>Answer ('+$i+')</strong></p>'+
		'<p><textarea name="ds['+$i+'][answer]" style="width:100%;height:80px"></textarea></p>'+
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

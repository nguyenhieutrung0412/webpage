<div class="top_callFunc">
<!--BOX breadcrumb_cat-->
	<div class="hide breadcrumb_cat">{xpath}</div><!--BOX breadcrumb_cat-->
	<a href="{http_referer}" class="btn btn_back r">&lt; {lang.back}</a>
</div>
<div class="form"><form action="" method="post" enctype="multipart/form-data" name="form1" id="fcontent">
<!--BOX language_tab-->
<div class="language_tab"><!--BASIC language-->
<a href="#" onclick="showLangTab('{language.ln}',this);" {language.tab_default}>{language.ln_name}</a> <!--BASIC language--></div>
<!--BOX language_tab-->
<div class="error">{msg}</div>
  <table width="100%" border="0" cellspacing="0" cellpadding="1" class="table-Form1">
  <!--BASIC language-->
<tbody class="{language.default_ln} tab_language" id="tab_{language.ln}">
    <tr>
		<td class="td1">&nbsp;</td>
		<td class="td2">&nbsp;</td>
	</tr>
	{language.ln_fields}
    <tr class="hide {display_ln_icon}">
      <td width="16%">Icon {language.ln_alias} </td>
      <td width="84%"><input name="ln_icon[{language.ln}]" type="file" id="ln_icon[{language.ln}]" class="no_width">        {size_ln_icon}<br />
		<span class="hide"><a href="{_UPLOAD}{language.ln_icon}" class="mb">{language.ln_icon}</a> 
	    <input type="checkbox" name="delete_ln_icon[{language.ln}]" class="no_width" value="1" /> 
		<input name="current_ln_icon[{language.ln}]" type="hidden" title="{language.ln_icon}" value="{language.ln_icon}" class="box_delete_file" />
	    {lang.delete}		</span></td>
    </tr>
    <tr class="hide {display_ln_image}">
      <td width="16%">Image {language.ln_alias}</td>
      <td width="84%"><input name="ln_image[{language.ln}]" type="file" id="ln_image[{language.ln}]" class="no_width">
       
        {size_ln_image}<br />
		<span class="hide"><a href="{_UPLOAD}{language.ln_image}" class="mb">{language.ln_image}</a> 
		<input name="current_ln_image[{language.ln}]" type="hidden" title="{language.ln_image}" value="{language.ln_image}"  class="box_delete_file" />
	    <input type="checkbox" name="delete_ln_image[{language.ln}]" class="no_width" value="1" /> 
	    {lang.delete}		</span></td>
    </tr>
   <tr class="sep">
      <td></td>
      <td></td>
    </tr>
	</tbody>
<!--BASIC language-->
  </table>
  <table width="100%" border="0" cellspacing="0" cellpadding="1" class="table-Form1 {hide_no_languages}">
    <tr>
		<td class="td1">&nbsp;</td>
		<td class="td2">&nbsp;</td>
	</tr>
	{main_catfields}
    <tr class="hide {display_icon}">
      <td>{lang.icon}{size_name}</td>
      <td><input name="icon" type="file" id="icon" class="no_width">
        {size_icon}
		<br />
		<span class="hide"><a href="{_UPLOAD}{icon}" class="mb">{icon}</a> 
		<input name="current_icon" type="hidden" title="{icon}" value="{icon}" class="box_delete_file" />
	    <input type="checkbox" name="delete_icon" class="no_width" value="1" /> 
	    {lang.delete}		
		</span></td>
    </tr>
    <tr class="hide {display_image}">
      <td>{lang.image}</td>
      <td><input name="image" type="file" id="image" class="no_width">
        {size_image}
		<br /><span class="hide"><a href="{_UPLOAD}{image}" class="mb">{image}</a> 
		  <input type="checkbox" name="delete_image" class="no_width" value="1" /> 
		  <input name="current_image" type="hidden" title="{image}" value="{image}" class="box_delete_file" />
		  {lang.delete} </span></td>
    </tr>
    <tr class="hide {display_enable_catdate}">
      <td>{lang.date}</td>
      <td><script type="text/javascript">DateInput('date', true, 'YYYY-MM-DD','{date}');</script></td>
    </tr>
  </table>
  <div class="table_list {hide_no_languages}" align="right">
	<input type="submit" class="btn" name="Submit" value="Save">
	<input type="button" class="btn btn_cancel" name="" value="Cancel" onclick="location.href='{http_referer}';">
  </div>
</form></div>
<script type="text/javascript">
	var opt = {
		required: [{required_catfields}],
		required_lang: [{required_ln_catfields}],
		lang: '{language}'
	};
	if({access_action} == '') opt['disabled'] = '{lang.user_no_access}';
	$('form#fcontent').validate(opt);

</script>

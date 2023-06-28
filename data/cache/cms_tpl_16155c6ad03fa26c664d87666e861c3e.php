<?php defined('_ROOT') or die('Not Allowed');
$merge_block = 6;
$_tpl = '<div class="content_empty" style="background: #fff;">
  <div style="height: 200px; overflow:auto;">
	<table width="100%" border="0" cellspacing="1" cellpadding="1" class="table_list list marginTop5">
	';if(isset($this->_data['category.'])){for($i=0;$i< count($this->_data['category.']);$i++){$_tpl .= '
          <tr class="clear_category tr_cat2" id="'.(isset($this->_data["category."][$i]["id"])?$this->_data["category."][$i]["id"]:'').'cat">
            <td width="3%"><img src="template/images/icons_default/folder.gif" alt="" width="16" height="16" /></td>
            <td width="97%">'.(isset($this->_data["category."][$i]["name"])?$this->_data["category."][$i]["name"]:'').'</td>
          </tr> ';}}$_tpl .= '
		   ';if(isset($this->_data['product.'])){for($i=0;$i< count($this->_data['product.']);$i++){$_tpl .= '
          <tr class="clear_product tr_content2" id="'.(isset($this->_data["product."][$i]["id"])?$this->_data["product."][$i]["id"]:'').'pro">
            <td><img src="template/images/icons_default/file.gif" alt="" width="16" height="16" /></td>
            <td>'.(isset($this->_data["product."][$i]["name"])?$this->_data["product."][$i]["name"]:'').'</td>
          </tr>';}}$_tpl .= '
         '.(isset($this->_data["."][0]['empty_data'])?$this->_data["."][0]['empty_data']:'').'
        </table>
	</div>
	<p align="center">Are you sure you want empty all data for this module?<br />
	<input type="button" value="Yes" onclick="content_empty('.(isset($this->_data["."][0]['type'])?$this->_data["."][0]['type']:'').');" />&nbsp;
	<input type="button" value="No" class="btn_closed" />
	</p>
</div>'; ?>
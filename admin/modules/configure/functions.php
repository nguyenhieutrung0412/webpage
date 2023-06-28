<?php
/**
 * @Name: Shopnhac.com - Version 1.0
 * @Author: Mr.Phin <mh.phin@gmail.com>
 * @Link: https://www.facebook.com/hoaphin
 * @Copyright: &copy; 2021 Shopnhac.com
 */
defined('_ROOT') or die(__FILE__);

function textfield($name = 'textfield',$value=''){
	$str = '<input type="text" name="'.$name.'" value="'.$value.'"';
	$str .= ' />';
	return $str;
}
function textarea($value = ''){
	$str .= '<textarea name="value" rows="5">';
	$str .= htmlentities($value,ENT_QUOTES,'utf-8');
	$str .= '</textarea>';
	return $str;
}

function radiobox($array = array(),$value=''){
	$str .= '';
	foreach($array as $k=>$v){
		$str .= '<input type="radio" name="value" class="no_width" id="radio_'.$k.'"  value="'.$v.'"';
		if($v==$value) $str .= ' checked="checked"';
		$str .=' /> <label for="radio_'.$k.'">'.$v.'</label><br />';
	}
	return $str;
}

function skin_login($value = ''){
	$skins = '<select name="value">';
	$dir = dir("template/skins/");
	while ($rs = $dir->read()) {
		if($rs != '.' && $rs != '..'){
			if(filetype($dir->path.$rs) == 'dir'){
				$skins .= '<option value="'.$rs.'" '.($rs == $value?'selected':'').'>'. ucfirst($rs).'</option>';
			}
		}
	}
	$skins .= '</select>';
	return $skins;
}
function templates($value = ''){
	$skins = '<select name="value">';
	$dir = dir("../template/");
	while ($rs = $dir->read()) {
		if($rs != '.' && $rs != '..'){
			if(filetype($dir->path.$rs) == 'dir'){
				$skins .= '<option value="'.$rs.'" '.($rs == $value?'selected':'').'>'. ucfirst($rs).'</option>';
			}
		}
	}
	$skins .= '</select>';
	return $skins;
}
?>
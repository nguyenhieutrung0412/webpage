<?php
/**
 * @Name: Shopnhac.com - Version 1.0
 * @Author: Mr.Phin <mh.phin@gmail.com>
 * @Link: https://www.facebook.com/hoaphin
 * @Copyright: &copy; 2021 Shopnhac.com
 */
defined('_ROOT') or die(__FILE__);
//ob_start("ob_html_compress");
$tpl->setfile(array(
	'tpl_meta'=>'tpl_meta.tpl',
	'tpl_header'=>'tpl_header.tpl',
	'tpl_body'=>'about.tpl',
	'tpl_footer'=>'tpl_footer.tpl'
));


 $html = $oHtml->get(2);
 $html = $hook->format($html);



 $meta = array();
 $meta['title'] = $html['mtitle'];
 $meta['desc'] = $html['mdesc'];
 $meta['icon'] = 'data/upload/cover.jpg';
 $tpl->merge($meta,'meta');

 $tpl->merge($html,'detail');

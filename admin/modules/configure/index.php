<?php
/**
 * @Name: Shopnhac.com - Version 1.0
 * @Author: Mr.Phin <mh.phin@gmail.com>
 * @Link: https://www.facebook.com/hoaphin
 * @Copyright: &copy; 2021 Shopnhac.com
 */
defined('_ROOT') or die(__FILE__);
if($access!='ALL') $hook->redirect('./');

$oClass = new ClassModel;
$breadcrumb = new breadcrumb;
extract($_GET);

if($cfg['root_admin']) $tpl->box('root_admin');
?>
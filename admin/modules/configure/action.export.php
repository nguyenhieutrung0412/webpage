<?php
/**
 * @Name: Shopnhac.com - Version 1.0
 * @Author: Mr.Phin <mh.phin@gmail.com>
 * @Link: https://www.facebook.com/hoaphin
 * @Copyright: &copy; 2021 Shopnhac.com
 */
 
defined('_ROOT') or die(__FILE__);
$tpl->reset();
$tpl->setfile(array(
	'body'=>'configure.export.tpl',
));
$cond = 1;
if($request['module'] && intval($request['typeid'])) $cond .= " AND  `module`='".$request['module']."' AND typeid=".intval($request['typeid']);
$result = $oConfigure->getMod($cond);
$request['sqlreplace'] = '';
$request['sqlupdate'] = '';
while($cfgmod = $result->fetch()){
	$module = $cfgmod['module'];
	$typeid = $cfgmod['typeid'];
	$data = addslashes($cfgmod['data']);
	$name = addslashes($cfgmod['name']);
	$request['sqlreplace'] .= "REPLACE INTO ".$oClass->prefix."configure_mod(`module`,`typeid`,`name`,`data`) VALUES('$module','$typeid','$name','$data');\n";
	$request['sqlupdate']  .= "UPDATE ".$oClass->prefix."configure_mod SET `data` = '$data' WHERE `module` = '$module' AND `typeid` = '$typeid';\n";
}
$tpl->assign($request);
?>
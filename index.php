<?php
//define
require_once 'include/include.php';

$smarty = new Smarty;


$tpl = $smarty->createTemplate('./pages/tpl/index.htm');
$tpl->assign('tpl_path','./pages/');
$smarty->display($tpl);



?>

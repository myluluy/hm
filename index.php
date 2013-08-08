<?php
//define
require_once dirname(__FILE__).DIRECTORY_SEPARATOR.'include'.DIRECTORY_SEPARATOR.'include.php';

$smarty = new Smarty();

$smarty->caching = true;

$tplFile = '' ;

if(empty($_SESSION['userinfo']['uid']) && $_COOKIE['userinfo_uid']) {

    $tplFile = 'login';

} else {

    $tplFile = 'index';

}

$tpl = $smarty->createTemplate(TPLDIR.$tplFile.'.htm');

$titleobj = $db->ExecuteSQL('select * from hm_users');

$tpl->assign('tpl_path','http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'pages');

$tpl->assign('title',$titleobj['uname']);

$tpl->assign('userinfo',$_SESSION['userinfo']);

$smarty->display($tpl);

?>

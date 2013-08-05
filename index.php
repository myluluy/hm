<?php
//define
define('DS',DIRECTORY_SEPARATOR);
define('BASEDIR',dirname(__FILE__).DS);
define('LIBSDIR',BASEDIR.'libs'.DS);
define('INCDIR',BASEDIR.'include'.DS);
define('CLASSDIR',BASEDIR.'class'.DS);
define('CONFDIR',BASEDIR.'conf'.DS);
define('TPLDIR',BASEDIR.'pages'.DS.'tpl'.DS);
include_once LIBSDIR.'smarty'.DS.'Smarty.class.php';
include_once LIBSDIR.'database'.DS.'class.MySQL.php';
include_once CONFDIR.'mysql.conf.php';
include_once CONFDIR.'common.php';

$smarty = new Smarty();

$smarty->caching = true;

$tpl = $smarty->createTemplate(TPLDIR.'index.htm');

$titleobj = $db->ExecuteSQL('select * from hm_users');

$tpl->assign('title',$titleobj['uname']);

$smarty->display($tpl);

?>

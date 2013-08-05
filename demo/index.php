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

$smarty = new Smarty();
$tpl = $smarty->createTemplate(TPLDIR.'index.tpl');
$titleobj = $db->ExecuteSQL('select * from table1');
$tpl->assign('title',$titleobj['haha']);
$smarty->display($tpl);

?>

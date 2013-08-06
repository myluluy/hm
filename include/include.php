<?php
define('DS',DIRECTORY_SEPARATOR);
define('BASEDIR',$_SERVER['DOCUMENT_ROOT'].DS);
define('LIBSDIR',BASEDIR.'libs'.DS);
define('INCDIR',BASEDIR.'include'.DS);
define('CLASSDIR',BASEDIR.'class'.DS);
define('CONFDIR',BASEDIR.'conf'.DS);
define('PLUGIN',BASEDIR.'plugin'.DS);
define('TPLDIR',BASEDIR.'pages'.DS.'tpl'.DS);
require_once LIBSDIR.'smarty'.DS.'Smarty.class.php';
require_once LIBSDIR.'database'.DS.'class.MySQL.php';
require_once CONFDIR.'mysql.conf.php';
require_once CONFDIR.'common.php';
require_once PLUGIN.'functions.php';

$db->ExecuteSQL('SET NAMES"'.$cfg['charset'].'"');
?>

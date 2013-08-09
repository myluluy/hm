<?php
define('DS',DIRECTORY_SEPARATOR);
define('BASEDIR',dirname(__FILE__).DS.'..'.DS);
define('LIBSDIR',BASEDIR.'libs'.DS);
define('INCDIR',BASEDIR.'include'.DS);
define('CLASSDIR',BASEDIR.'class'.DS);
define('CONFDIR',BASEDIR.'conf'.DS);
define('PLUGIN',BASEDIR.'plugin'.DS);
define('TPLDIR',BASEDIR.'pages'.DS.'tpl'.DS);
require_once LIBSDIR.'smarty'.DS.'Smarty.class.php';
require_once LIBSDIR.'database'.DS.'class.MySQL.php';
require_once CONFDIR.'config.inc.php';
require_once 'common.inc.php'
?>

<?php
if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}
global $smarty,$db;
$smarty = new Smarty;

global $cfg;

$db = new MySQL($cfg['mysql_database'], $cfg['mysql_user'], $cfg['mysql_password'],$cfg['mysql_host'].':'.$cfg['mysql_port']);

?>

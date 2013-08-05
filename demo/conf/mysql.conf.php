<?php
define('MYSQL_NAME','fortest');
define('MYSQL_USER','root');
define('MYSQL_PASS','123456');
define('MYSQL_HOST','localhost');
global $db;
$db = new MySQL(MYSQL_NAME, MYSQL_USER, MYSQL_PASS,MYSQL_HOST);
?>

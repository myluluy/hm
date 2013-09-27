<?php
/*
 *config.inc.php
 *author : liulyliu
 *
 * */  

global $cfg;
$cfg = array();

//system config
$cfg['debug'] = 1;
$cfg['admin_email'] ='@';
$cfg['web_close'] = 0;
//$cfg['regexp'] = array(
//    'mobile'=>'//',
//    'chinese'=>'//',
//    'telephone'=>'//',
//    'email'=>'//',
//    'passowrd'=>'//',
//    'username'=>'//'
//
//);

//mysql config
$cfg['mysql_database'] = 'fm_project';
$cfg['mysql_user'] = 'root';
$cfg['mysql_password'] = '123456';
$cfg['mysql_host'] = '127.0.0.1';
$cfg['mysql_port'] = '3306';
$cfg['mysql_charset']='utf-8';

//smarty config
$cfg['smarty_cfg'] = array(
    'template_dir' => TPLDIR,
    'compile_dir' => '',
    'plugins_dir' =>PLUGIN,
    'config_dir' => '',
    'cache_dir' => BASEDIR.'cache',
    'caching' =>true,
    'cache_lifetime'=>600
);
//default config

?>

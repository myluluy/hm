<?php

preg_match('/\s/','ab');
require_once '../include/include.php';
require_once '../plugin/functions.php';

/*
 *
 * user table type = -2: not active,  -1: freeze,  1 : active
 *
 *
 */

$args = array(
    'username'=>'',
    'password'=>'',
    'nickname'=>'',
    'email' =>'',
    'pubtime'=> strtotime('now'),
    'type'=>'-2'
);

$post = filter_check($_POST);

$post = filter_check(array(
    'username'=>'myluluy',
    'password'=>'1234567',
    'nickname'=>'悲劇さん',
    'email'=>'myluluy@gmail.com',
));


$username_chk = validate(trim($post['username']),array('notnull'=>true,'regexp'=>'/^[0-9a-zA-Z\_]{4,20}$/'));


if(!$username_chk) {
    

}


?>

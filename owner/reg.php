<?php

preg_match('/\s/','ab');
require_once '../include/include.php';

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


if(validate(trim($post['username']),array('minlength'=>4,'maxlength'=>20,'regexp'=>'/^[0-9a-zA-Z\_]+$/'))) {
    $args['username'] = trim($post['username']); 
} else {
   die('fail') ;
}

function validate($str,$arr = array()) {
    if(isset($arr['notnull']) && $arr['notnull'] && $str == '') {
        return false;
    }
    
    if(isset($arr['maxlength']) && strlen($str) >= $arr['maxlength']) {
        return false ;
    }

    if(isset($arr['maxlength']) && strlen($str) <= $arr['minlength']) {
        return false ;
    }

    if(isset($arr['regexp'])  && !preg_match($arr['regexp'],$str)) {
        return false;
    }

    return true;

}

function filter_check($array) {

    if(!@get_magic_quotes_gpc()){
        
        if(is_array ($array)) {

            foreach($array as $k => $v) {

                $array[$k] = filter_check($v);

            }

        } else if(is_string($array)) {

            $array = addslashes($array);

        } else if(is_numeric($array)) {

            $array = intval($array);

        }
        
    }
    
    return $array;
}
?>

<?php
require_once 'include/include.php';

$contr = '';
$act = '';

if(!isset($_GET['mod']) || !preg_match('/^[a-z]+$/',$_GET['mod'])){
    $contr = 'index';
} else {
    $contr = $_GET['mod'];
    unset($_GET['mod']);
}

if(!isset($_GET['act']) || !preg_match('/^[a-z]+$/',$_GET['act'])){
    $act = 'index';
} else {
    $act = $_GET['act'];
    unset($_GET['act']);
}

if($act == $contr) {
    $act = '_'.$act;
}

$allow_contr =array('index','reg','login','admin');

if(!in_array($contr,$allow_contr)) {
exit();
}

if(@file_exists(BASEDIR.'mod'.DS.$contr.'.php')) {
    require_once 'mod'.DS.$contr.'.php';
} else {
    die( BASEDIR.'mod'.DS.$contr.'.php not found');
}

if(class_exists($contr)) {
    $ins = new $contr;
    if(method_exists($ins,$act)) {
        $ins->$act($_GET);
        unset($ins);
    } else {
        die($contr.'->'.$ins.' not found');
    }
} else {
    die($contr.' not found');
}




?>

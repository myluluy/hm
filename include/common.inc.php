<?php
session_start();

if($cfg['debug'] == 1) {
   error_reporting(E_ALL); 
} else {
   error_reporting(0); 
}

if($cfg['web_close'] == '1') {
    //TODO
    exit('web is closed') ;
}



?>

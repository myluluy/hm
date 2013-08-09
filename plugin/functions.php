<?php
/*
*functions libs
*
*/

/*
 * filter_check 
 *
 * */


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

/*
 *base validate
 *
 * */
function validate($str,$arr = array()) {
    if(isset($arr['notnull']) && $arr['notnull'] && $str == '') {
        return false;
    }
    
    if($str != '') {
        if(isset($arr['length']) && strlen($str) != $arr['length']) {
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

    }

    
    return true;

}


function md5_mutation($str,$seed='') {
    $m16 = md5($str,true);
    $m32 = md5($str);
    return md5(substr($m16,3).' '.substr($m32,20).$seed);
}


?>

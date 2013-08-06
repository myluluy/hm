<?php
/*
 * login.php
 *
 * login action 
 *g
 * jsonp support
 *
 * author:liulyliu
 *
 * 2013.08.01
 * 
 *
 */

require_once '..'.DIRECTORY_SEPARATOR.'include'.DIRECTORY_SEPARATOR.'include.php';


$bru = '';

$username = '';

$password = '';

$remember = '';

$post = array();

$post = filter_check($_POST);

$username = $post['username'];

$password = $post['password'];

$username = 'root1';

$password = '123456';

$md5pwd = md5_mutation($password);

$sql1 = "SELECT uid,upassword,nickname,rank,email FROM hm_users WHERE uname = '$username'";

$userData = $db->ExecuteSQL($sql1);

if(is_array($userData)) {
    
    if($md5pwd === $userData['upassword']) {
        unset($userData['upassword']);
        $_SESSION['userinfo'] = array('username'=>$username,
            'uid'=>$userData['uid'],
            'nickname'=>$userData['nickname'],
            'email'=>$userData['email'],
            'rank'=>$userData['rank']
        );
        var_dump($_SESSION['userinfo']);
        setcookie('userinfo__uid',$_SESSION['userinfo']['uid'],time()+$cfg['cookie_timer'],'/');
        setcookie('userinfo__username',$_SESSION['userinfo']['username'],time()+$cfg['cookie_timer'],'/');
        setcookie('userinfo__rank',$_SESSION['userinfo']['rank'],time()+$cfg['cookie_timer'],'/');
        setcookie('userinfo__email',$_SESSION['userinfo']['email'],time()+$cfg['cookie_timer'],'/');
        setcookie('userinfo__nickname',$_SESSION['userinfo']['nickname'],time()+$cfg['cookie_timer'],'/');
    } else {
        
        die('password error');
    
    }

} else {

    die('username is not found!');

}


?>

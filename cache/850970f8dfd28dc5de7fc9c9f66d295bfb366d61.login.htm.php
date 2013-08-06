<?php /*%%SmartyHeaderCode:517131492520088267a7953-39432951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '850970f8dfd28dc5de7fc9c9f66d295bfb366d61' => 
    array (
      0 => '/home/liulyliu/web/httpd/pages/tpl/login.htm',
      1 => 1375772652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '517131492520088267a7953-39432951',
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5200b4610e31a4_73162174',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5200b4610e31a4_73162174')) {function content_5200b4610e31a4_73162174($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<title>root1</title>
<!-- Bootstrap -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/pages/skin/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="/pages/skin/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
<link href="/pages/skin/css/index.css" rel="stylesheet" media="screen">
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="/pages/skin/bootstrap/js/bootstrap.min.js"></script>
<script src="/pages/js/jquery-1.9.1.js"></script>
</head>
<body>

<div class="navbar navbar-fixed-top inner">
    <div class="brand">
        this is navbar inner
    </div>
</div>

<div class="container login-box">
    <div class="box inner span8">
        <form method="POST" name="login" id="loginForm" action="/owner/login.php">
            <fieldset>
                <legend>Login</legend>
                <label>Username</label>
                <input type="text" placeholder="your username or email" name="username">
                <label>Password</label>
                <input type="password" placeholder="your password" name="password">
                <label class="checkbox">
                    <input type="checkbox" name="isremeber"> remember me. <a href="#">forget password?</a>
                </label> 
                <button type="submit" class="btn">Submit</button>
            </fieldset>
        </form> 
    </div> 
</div>
</body>
<script>
//$('body').delegate('[type="submit"]','click.submit',function(e){
//            e.preventDefault();
//
//        });

</script>
</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.13, created on 2013-08-06 17:24:33
         compiled from "/home/liulyliu/web/httpd/pages/tpl/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:42073448951ff23a836ee18-34851051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cdcb02859e34ce719f3e6422a830e3e68ff03bd' => 
    array (
      0 => '/home/liulyliu/web/httpd/pages/tpl/index.htm',
      1 => 1375781073,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42073448951ff23a836ee18-34851051',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51ff23a83c6161_94991999',
  'variables' => 
  array (
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ff23a83c6161_94991999')) {function content_51ff23a83c6161_94991999($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['nickname'];?>
</title>
<!-- Bootstrap -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/pages/skin/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="/pages/skin/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
<link href="/pages/skin/css/index.css" rel="stylesheet" media="screen">
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="/pages/skin/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        this ist navbar inner
    </div>
</div>

<div class="container-fluid">
    <div class="row-fluid">
        <div class="span2">
            <!--Sidebar content-->
            <ul class="span2 nav box nav-list unstyled affix navbar-inner">
                <li class="menu"><a href="#"><i class="icon-chevron-right"></i>菜单１</a></li>
                <li class="menu"><a href="#"><i class="icon-chevron-right"></i>菜单１</a></li>
                <li class="menu"><a href="#"><i class="icon-chevron-right"></i>菜单１</a></li>
                <li class="menu"><a href="#"><i class="icon-chevron-right"></i>菜单１</a></li>
                <li class="menu"><a href="#"><i class="icon-chevron-right"></i>菜单１</a></li>
                <li class="menu"><a href="#"><i class="icon-chevron-right"></i>菜单１</a></li>
                <li class="menu"><a href="#"><i class="icon-chevron-right"></i>菜单１</a></li>
                <li class="menu"><a href="#"><i class="icon-chevron-right"></i>菜单１</a></li>
            </ul>
        </div>
        <div class="span10 box navbar-inner">
            <!--Body content-->
        </div>
    </div>
</div>
</body>
</html>
<?php }} ?>
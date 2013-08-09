<?php /* Smarty version Smarty-3.1.13, created on 2013-08-09 17:34:42
         compiled from "/home/liulyliu/web/httpd/huamei/pages/tpl/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:7611551695204b7b2dd9d23-26710970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4da4451474b81aeab6c9234b5f7d71b90a91cb05' => 
    array (
      0 => '/home/liulyliu/web/httpd/huamei/pages/tpl/index.htm',
      1 => 1375867725,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7611551695204b7b2dd9d23-26710970',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userinfo' => 0,
    'tpl_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5204b7b2e12c98_75198082',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5204b7b2e12c98_75198082')) {function content_5204b7b2e12c98_75198082($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['nickname'];?>
</title>
<!-- Bootstrap -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
/skin/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
/skin/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
/skin/css/index.css" rel="stylesheet" media="screen">
<!--<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
/skin/bootstrap/js/bootstrap.min.js"></script>-->
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
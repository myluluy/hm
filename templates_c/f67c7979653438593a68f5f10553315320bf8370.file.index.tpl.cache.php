<?php /* Smarty version Smarty-3.1.13, created on 2013-08-05 11:29:39
         compiled from "/home/liulyliu/web/httpd/pages/tpl/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141044328451ff1bbf54fe28-35206085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f67c7979653438593a68f5f10553315320bf8370' => 
    array (
      0 => '/home/liulyliu/web/httpd/pages/tpl/index.tpl',
      1 => 1375673377,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141044328451ff1bbf54fe28-35206085',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51ff1bbf6eb5f7_66414097',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ff1bbf6eb5f7_66414097')) {function content_51ff1bbf6eb5f7_66414097($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<!-- Bootstrap -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/pages/skin/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="/pages/skin/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
<link href="/pages/skin/css/index.css" rel="stylesheet" media="screen">
</head>
<body>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="/pages/skin/bootstrap/js/bootstrap.min.js"></script>
<div class="navbar navbar-fixed-top">
<div class="navbar-inner">
    this ist navbar inner
</div>
</div>
<div class="container box">
    <div class="row-fluid">
        <div class="span3 left">
            <!--Sidebar content-->
            span3 left 
        </div>
        <div class="span9 right">
            <!--Body content-->
            span9 right
        </div>
    </div>
    
    <abbr title="HyperText Markup Language" class="initialism">HTML</abbr>
    
    <address>
    <strong>Twitter, Inc.</strong><br>
    795 Folsom Ave, Suite 600<br>
    San Francisco, CA 94107<br>
    <abbr title="Phone">P:</abbr> (123) 456-7890
    </address>
     
    <address>
    <strong>Full Name</strong><br>
    <a href="mailto:#">first.last@example.com</a>
    </address>
    
    <form>
    <fieldset>
    <legend>Legend</legend>
    <label>Label name</label>
    <input type="text" placeholder="Type something...">
    <span class="help-block">Example block-level help text here.</span>
    <label class="checkbox">
    <input type="checkbox"> Check me out
    </label>
    <button type="submit" class="btn">Submit</button>
    </fieldset>
    </form>

    <blockquote>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
    </blockquote>

    <pre>
    &lt;p&gt;Sample text here...&lt;/p&gt;
    </pre>

    <form class="form-inline">
    <input type="text" class="input-small" placeholder="Email">
    <input type="password" class="input-small" placeholder="Password">
    <label class="checkbox">
    <input type="checkbox"> Remember me
    </label>
    <button type="submit" class="btn">Sign in</button>
    </form>
</div>
</body>
</html>
<?php }} ?>
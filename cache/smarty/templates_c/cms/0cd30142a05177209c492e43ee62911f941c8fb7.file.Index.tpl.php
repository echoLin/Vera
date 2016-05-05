<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-05 14:12:43
         compiled from "/Applications/MAMP/htdocs/Vera/templates/cms/Index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:270444752572ae45bae4533-69335581%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cd30142a05177209c492e43ee62911f941c8fb7' => 
    array (
      0 => '/Applications/MAMP/htdocs/Vera/templates/cms/Index.tpl',
      1 => 1462425095,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '270444752572ae45bae4533-69335581',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_572ae45bb30bc9_19516979',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_572ae45bb30bc9_19516979')) {function content_572ae45bb30bc9_19516979($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
      <meta charset="utf-8">
      <title>Vera Dashboard</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!-- Loading Bootstrap -->
      <link href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">

      <!-- Loading Flat UI -->
      <link href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
cms/css/flat-ui.min.css" rel="stylesheet">

      <!-- Loading Index CSS -->
      <link href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
cms/css/index.css" rel="stylesheet">

      <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
      <!--[if lt IE 9]>
        <?php echo '<script'; ?>
 src="http://cdn.bootcss.com/html5shiv/3.6.2/html5shiv.js"><?php echo '</script'; ?>
>
      <![endif]-->
    </head>
  <body>
    <div class="container">
      <div class="page-header">
        <h1>Vera<small data-toggle="modal" data-target="#Login" style="padding-left: 30px;"> Dashboard</small></h1>
      </div>

      <div class="row text-center">
        <h1>Hello World!</h1>
      </div>

      <?php echo $_smarty_tpl->getSubTemplate ("cms/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    </div>

    <!-- 登录框 -->
    <div class="modal fade" id="Login" tabindex="-1" role="dialog" aria-labelledby="LoginLabel" aria-hidden="false">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="LoginLabel">Login</h4>
          </div>
          <div class="modal-body">
            <form class="form-inline" id="loginForm">
              <div class="form-group">
                <label class="sr-only" for="username">User</label>
                <input type="text" class="form-control" id="username" placeholder="User">
              </div>
              <div class="form-group">
                <label class="sr-only" for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password">
              </div>
              <button type="button" id="loginButton" data-loading-text="Loading..." data-success-text="登录成功" class="btn btn-primary index-btn" style="float: right;" autocomplete="off">
                Login
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
cms/js/vendor/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
cms/js/flat-ui.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
cms/js/index.js"><?php echo '</script'; ?>
>

  </body>
</html>
<?php }} ?>

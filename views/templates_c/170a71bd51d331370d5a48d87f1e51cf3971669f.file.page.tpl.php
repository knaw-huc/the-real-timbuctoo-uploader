<?php /* Smarty version Smarty-3.1.14, created on 2020-08-05 13:54:54
         compiled from "/Library/WebServer/Documents/timbuctoo_uploader/views/templates/page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13213272125f295a0bc18668-33529217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '170a71bd51d331370d5a48d87f1e51cf3971669f' => 
    array (
      0 => '/Library/WebServer/Documents/timbuctoo_uploader/views/templates/page.tpl',
      1 => 1596628187,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13213272125f295a0bc18668-33529217',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5f295a0bc46b65_13732523',
  'variables' => 
  array (
    'home_path' => 0,
    'logged_in' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f295a0bc46b65_13732523')) {function content_5f295a0bc46b65_13732523($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Timbuctoo Dataset Uploader</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
css/tu.css" type="text/css" />
    <script src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
js/jquery-3.5.1.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
js/tu.js"></script>
    <?php if ($_smarty_tpl->tpl_vars['logged_in']->value){?>
        <script>
            $('document').ready(function(){
                init();
                });
        </script>
    <?php }?>
</head>
<body>
<div id="header"><img id="logo" alt="logo huygens ING" src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
img/huygens.png">
<div id="login"><?php if (!$_smarty_tpl->tpl_vars['logged_in']->value){?><div id="loginBtn" onclick="login()">Login</div><?php }?></div>
</div>
<div id="content">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div>
<div id="uploadMetadata" class="noView">
    <div class="mdRow">
        <div class="mdLabel">Status</div>
        <div class="mdValue">Logged in</div>
    </div>
</div>
</div>
<div id="powered"><img alt="Powered by Timbuctoo" src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
img/powered.png"></div>
</body>
</html><?php }} ?>
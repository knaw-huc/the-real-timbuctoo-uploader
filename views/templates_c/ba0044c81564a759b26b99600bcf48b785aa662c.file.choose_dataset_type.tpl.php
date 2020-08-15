<?php /* Smarty version Smarty-3.1.14, created on 2020-08-14 16:15:47
         compiled from "/Library/WebServer/Documents/timbuctoo_uploader/views/templates/choose_dataset_type.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5172390565f29a8d1aed575-76862374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba0044c81564a759b26b99600bcf48b785aa662c' => 
    array (
      0 => '/Library/WebServer/Documents/timbuctoo_uploader/views/templates/choose_dataset_type.tpl',
      1 => 1597414499,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5172390565f29a8d1aed575-76862374',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5f29a8d1b39c91_58694793',
  'variables' => 
  array (
    'home_path' => 0,
    'hsid' => 0,
    'repo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f29a8d1b39c91_58694793')) {function content_5f29a8d1b39c91_58694793($_smarty_tpl) {?><div id="welcome">
    <form id="upload_form" method="get" action="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
index.php">
        <label>Step 2: Choose action</label>
        <div id="radioDiv">
        <input type="radio" checked value="new" name="actiontype" id="new"><span class="radioSpan"> Upload data to a new dataset</span><br/>
        <input type="radio" value="existing" name="actiontype" id="existing"><span class="radioSpan"> Upload data to an existing dataset</span><br/>
        </div>
        <input type="button" value="Back" onclick="history.back()">&nbsp;
        <input id="submitBtn" type="submit" value="Next">
        <input type="hidden" name="hsid" id="hsid" value="<?php echo $_smarty_tpl->tpl_vars['hsid']->value;?>
">
        <input type="hidden" name="repo" id="repo" value="<?php echo $_smarty_tpl->tpl_vars['repo']->value;?>
">
    </form>
</div><?php }} ?>
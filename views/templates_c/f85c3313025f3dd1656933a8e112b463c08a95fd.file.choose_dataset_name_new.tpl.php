<?php /* Smarty version Smarty-3.1.14, created on 2020-08-14 16:15:57
         compiled from "/Library/WebServer/Documents/timbuctoo_uploader/views/templates/choose_dataset_name_new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18560453255f29b313c608f4-44067919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f85c3313025f3dd1656933a8e112b463c08a95fd' => 
    array (
      0 => '/Library/WebServer/Documents/timbuctoo_uploader/views/templates/choose_dataset_name_new.tpl',
      1 => 1597414516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18560453255f29b313c608f4-44067919',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5f29b313c7bb91_10638348',
  'variables' => 
  array (
    'home_path' => 0,
    'hsid' => 0,
    'repo' => 0,
    'actiontype' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f29b313c7bb91_10638348')) {function content_5f29b313c7bb91_10638348($_smarty_tpl) {?><div id="welcome">
    <form id="upload_form" method="get" action="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
index.php">
        <label>Step 3: Create new dataset</label>
        <input type="text" id="ds_name" name="ds" size="40"  placeholder="Only lowercase, digits and underscores allowed">
        <div id="nameError" class="errorMsg"></div>
        <input type="button" value="Back" onclick="history.back()">&nbsp;
        <input id="submitBtn" type="button" value="Next" onclick="validateName()">
        <input type="hidden" id="hsid" name="hsid" value="<?php echo $_smarty_tpl->tpl_vars['hsid']->value;?>
">
        <input type="hidden" id="repo" name="repo" value="<?php echo $_smarty_tpl->tpl_vars['repo']->value;?>
">
        <input type="hidden" id="actiontype" name="actiontype" value="<?php echo $_smarty_tpl->tpl_vars['actiontype']->value;?>
">
    </form>
</div><?php }} ?>
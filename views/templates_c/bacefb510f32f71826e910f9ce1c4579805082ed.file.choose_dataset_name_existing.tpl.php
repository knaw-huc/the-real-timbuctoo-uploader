<?php /* Smarty version Smarty-3.1.14, created on 2020-08-15 13:57:07
         compiled from "/Library/WebServer/Documents/timbuctoo_uploader/views/templates/choose_dataset_name_existing.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13719205125f29b4066b7a47-53613176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bacefb510f32f71826e910f9ce1c4579805082ed' => 
    array (
      0 => '/Library/WebServer/Documents/timbuctoo_uploader/views/templates/choose_dataset_name_existing.tpl',
      1 => 1597414532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13719205125f29b4066b7a47-53613176',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5f29b4066d10d0_44189964',
  'variables' => 
  array (
    'home_path' => 0,
    'hsid' => 0,
    'repo' => 0,
    'actiontype' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f29b4066d10d0_44189964')) {function content_5f29b4066d10d0_44189964($_smarty_tpl) {?><div id="welcome">
    <form id="upload_form" method="get" action="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
index.php">
        <label>Step 3: Select dataset</label>
        <select id="ds_select" name="ds">

        </select>
<br/>
        <input type="button" value="Back" onclick="history.back()">&nbsp;
        <input id="submitBtn" type="submit" value="Next">
        <input type="hidden" id="hsid" name="hsid" value="<?php echo $_smarty_tpl->tpl_vars['hsid']->value;?>
">
        <input type="hidden" id="repo" name="repo" value="<?php echo $_smarty_tpl->tpl_vars['repo']->value;?>
">
        <input type="hidden" id="actiontype" name="actiontype" value="<?php echo $_smarty_tpl->tpl_vars['actiontype']->value;?>
">
    </form>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.14, created on 2020-08-04 21:16:59
         compiled from "/Library/WebServer/Documents/timbuctoo_uploader/views/templates/choose_dataset_name_existing.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13719205125f29b4066b7a47-53613176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bacefb510f32f71826e910f9ce1c4579805082ed' => 
    array (
      0 => '/Library/WebServer/Documents/timbuctoo_uploader/views/templates/choose_dataset_name_existing.tpl',
      1 => 1596568607,
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
    'hsid' => 0,
    'repo' => 0,
    'actiontype' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f29b4066d10d0_44189964')) {function content_5f29b4066d10d0_44189964($_smarty_tpl) {?><div id="welcome">
    <form id="upload_form">
        <label>Step 3: Select dataset</label>
        <select id="ds">

        </select>
<br/>
        <input id="submitBtn" type="button" value="Next" onclick="validate()">
        <input type="hidden" id="hsid" value="<?php echo $_smarty_tpl->tpl_vars['hsid']->value;?>
">
        <input type="hidden" id="repo" value="<?php echo $_smarty_tpl->tpl_vars['repo']->value;?>
">
        <input type="hidden" id="actiontype" value="<?php echo $_smarty_tpl->tpl_vars['actiontype']->value;?>
">
    </form>
</div><?php }} ?>
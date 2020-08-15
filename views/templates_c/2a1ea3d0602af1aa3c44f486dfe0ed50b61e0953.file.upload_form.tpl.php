<?php /* Smarty version Smarty-3.1.14, created on 2020-08-15 14:46:10
         compiled from "/Library/WebServer/Documents/timbuctoo_uploader/views/templates/upload_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4070127805f29816ecab112-24279646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a1ea3d0602af1aa3c44f486dfe0ed50b61e0953' => 
    array (
      0 => '/Library/WebServer/Documents/timbuctoo_uploader/views/templates/upload_form.tpl',
      1 => 1597495359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4070127805f29816ecab112-24279646',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5f29816ecdbc72_69201472',
  'variables' => 
  array (
    'hsid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f29816ecdbc72_69201472')) {function content_5f29816ecdbc72_69201472($_smarty_tpl) {?><div id="welcome">
    <form id="upload_form">
        <label>Step 1: Select repository</label>
        <select id="resource">
            <option value="loc">Local Timbuctoo</option>
            <option value="tim">Huygens Timbuctoo</option>
            <option value="gol">Golden Agents</option>
        </select>
        <br/>
        <input id="submitBtn" type="button" value="Next" onclick="process_repo()">
        <input type="hidden" id="hsid" value="<?php echo $_smarty_tpl->tpl_vars['hsid']->value;?>
">
    </form>
</div><?php }} ?>
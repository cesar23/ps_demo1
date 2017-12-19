<?php /* Smarty version Smarty-3.1.19, created on 2017-12-19 23:12:02
         compiled from "C:\xampp\htdocs\cms\ps_demo1\admin060perwcu\themes\default\template\controllers\modules\warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:84975a398eb2697a32-16892204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49438e919b1e5efb9fc3d5a23f752f7fa69ae564' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cms\\ps_demo1\\admin060perwcu\\themes\\default\\template\\controllers\\modules\\warning_module.tpl',
      1 => 1501601138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84975a398eb2697a32-16892204',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a398eb26a2297_26568088',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a398eb26a2297_26568088')) {function content_5a398eb26a2297_26568088($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>

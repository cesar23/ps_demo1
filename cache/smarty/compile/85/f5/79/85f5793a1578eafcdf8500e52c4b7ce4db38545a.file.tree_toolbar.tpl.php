<?php /* Smarty version Smarty-3.1.19, created on 2017-12-19 22:44:05
         compiled from "C:\xampp\htdocs\cms\ps_demo1\admin\themes\default\template\helpers\tree\tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:302785a39882547fad4-54209195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85f5793a1578eafcdf8500e52c4b7ce4db38545a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cms\\ps_demo1\\admin\\themes\\default\\template\\helpers\\tree\\tree_toolbar.tpl',
      1 => 1501601138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '302785a39882547fad4-54209195',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a3988254a4007_10076737',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3988254a4007_10076737')) {function content_5a3988254a4007_10076737($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div><?php }} ?>

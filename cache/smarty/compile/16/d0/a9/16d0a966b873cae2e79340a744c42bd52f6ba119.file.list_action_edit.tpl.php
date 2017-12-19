<?php /* Smarty version Smarty-3.1.19, created on 2017-12-19 22:44:03
         compiled from "C:\xampp\htdocs\cms\ps_demo1\admin\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:256595a398823a70650-01752659%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16d0a966b873cae2e79340a744c42bd52f6ba119' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cms\\ps_demo1\\admin\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1501601138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '256595a398823a70650-01752659',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a398823a7cfd5_74590487',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a398823a7cfd5_74590487')) {function content_5a398823a7cfd5_74590487($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>

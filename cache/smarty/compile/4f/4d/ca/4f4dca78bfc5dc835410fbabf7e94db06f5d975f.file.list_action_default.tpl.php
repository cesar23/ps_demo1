<?php /* Smarty version Smarty-3.1.19, created on 2017-12-19 22:44:03
         compiled from "C:\xampp\htdocs\cms\ps_demo1\admin\themes\default\template\helpers\list\list_action_default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54075a39882396d6f2-65523577%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f4dca78bfc5dc835410fbabf7e94db06f5d975f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cms\\ps_demo1\\admin\\themes\\default\\template\\helpers\\list\\list_action_default.tpl',
      1 => 1501601138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54075a39882396d6f2-65523577',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a398823979b37_28657493',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a398823979b37_28657493')) {function content_5a398823979b37_28657493($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['name']->value)) {?> name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> class="default">
	<i class="icon-asterisk"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>

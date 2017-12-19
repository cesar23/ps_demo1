<?php /* Smarty version Smarty-3.1.19, created on 2017-12-19 22:44:01
         compiled from "C:\xampp\htdocs\cms\ps_demo1\admin\themes\default\template\controllers\tax_rules\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:255445a3988219c7922-85584258%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c116e2480f56e02359c5273d040a23e9895c145' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cms\\ps_demo1\\admin\\themes\\default\\template\\controllers\\tax_rules\\helpers\\list\\list_action_edit.tpl',
      1 => 1501601138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '255445a3988219c7922-85584258',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a398821a235d9_68914310',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a398821a235d9_68914310')) {function content_5a398821a235d9_68914310($_smarty_tpl) {?>
<a onclick="loadTaxRule('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
'); return false;" href="#" class="btn btn-default">
	<i class="icon-pencil"></i> 
	<?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>

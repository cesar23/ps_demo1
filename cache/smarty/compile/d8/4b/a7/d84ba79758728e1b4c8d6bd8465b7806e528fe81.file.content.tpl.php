<?php /* Smarty version Smarty-3.1.19, created on 2017-12-19 23:14:17
         compiled from "C:\xampp\htdocs\cms\ps_demo1\admin060perwcu\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:154655a398f3915b033-78583360%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd84ba79758728e1b4c8d6bd8465b7806e528fe81' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cms\\ps_demo1\\admin060perwcu\\themes\\default\\template\\content.tpl',
      1 => 1501601138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154655a398f3915b033-78583360',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a398f39161f96_26918459',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a398f39161f96_26918459')) {function content_5a398f39161f96_26918459($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>

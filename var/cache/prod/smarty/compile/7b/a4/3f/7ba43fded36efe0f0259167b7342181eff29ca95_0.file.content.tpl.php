<?php
/* Smarty version 3.1.48, created on 2024-05-18 01:26:52
  from 'C:\wamp64\www\cosmy\Cosmy\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6647f5cc8dbe11_80149972',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ba43fded36efe0f0259167b7342181eff29ca95' => 
    array (
      0 => 'C:\\wamp64\\www\\cosmy\\Cosmy\\themes\\default\\template\\content.tpl',
      1 => 1715980013,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6647f5cc8dbe11_80149972 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}

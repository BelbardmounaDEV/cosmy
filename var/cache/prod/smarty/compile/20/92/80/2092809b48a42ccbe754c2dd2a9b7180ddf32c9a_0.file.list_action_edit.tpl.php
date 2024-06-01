<?php
/* Smarty version 3.1.48, created on 2024-05-18 01:26:49
  from 'C:\wamp64\www\cosmy\Cosmy\themes\default\template\helpers\list\list_action_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6647f5c97396f4_44483184',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2092809b48a42ccbe754c2dd2a9b7180ddf32c9a' => 
    array (
      0 => 'C:\\wamp64\\www\\cosmy\\Cosmy\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1715980076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6647f5c97396f4_44483184 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>

</a>
<?php }
}

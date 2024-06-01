<?php
/* Smarty version 3.1.48, created on 2024-05-18 10:27:31
  from 'C:\wamp64\www\cosmy\Cosmy\themes\default\template\controllers\tax_rules\helpers\list\list_action_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6648748321e0b1_37310466',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '078fbaac4e1024cb42743b4867793a818081dd97' => 
    array (
      0 => 'C:\\wamp64\\www\\cosmy\\Cosmy\\themes\\default\\template\\controllers\\tax_rules\\helpers\\list\\list_action_edit.tpl',
      1 => 1715980024,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6648748321e0b1_37310466 (Smarty_Internal_Template $_smarty_tpl) {
?><a onclick="loadTaxRule('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
'); return false;" href="#" class="btn btn-default">
	<i class="icon-pencil"></i>
	<?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }
}

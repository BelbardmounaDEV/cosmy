<?php
/* Smarty version 3.1.48, created on 2024-05-19 21:37:32
  from 'C:\wamp64\www\cosmy\modules\ps_wirepayment\views\templates\hook\infos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_664a630ca2a587_79870829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c07e8d341d489d29076b1e95558b0f36d26b3474' => 
    array (
      0 => 'C:\\wamp64\\www\\cosmy\\modules\\ps_wirepayment\\views\\templates\\hook\\infos.tpl',
      1 => 1715980187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664a630ca2a587_79870829 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="alert alert-info">
  <img src="../modules/ps_wirepayment/logo.png" style="float:left; margin-right:15px;" height="60">
  <p><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"This module allows you to accept secure payments by bank wire.",'d'=>'Modules.Wirepayment.Admin'),$_smarty_tpl ) );?>
</strong></p>
  <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"If the client chooses to pay by bank wire, the order status will change to 'Waiting for Payment'.",'d'=>'Modules.Wirepayment.Admin'),$_smarty_tpl ) );?>
</p>
  <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"That said, you must manually confirm the order upon receiving the bank wire.",'d'=>'Modules.Wirepayment.Admin'),$_smarty_tpl ) );?>
</p>
</div>
<?php }
}

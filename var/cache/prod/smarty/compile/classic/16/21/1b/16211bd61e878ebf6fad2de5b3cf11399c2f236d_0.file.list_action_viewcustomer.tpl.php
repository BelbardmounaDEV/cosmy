<?php
/* Smarty version 3.1.48, created on 2024-05-18 00:58:48
  from 'C:\wamp64\www\cosmy\modules\ps_emailsubscription\views\templates\admin\list_action_viewcustomer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6647ef3814be99_62190741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16211bd61e878ebf6fad2de5b3cf11399c2f236d' => 
    array (
      0 => 'C:\\wamp64\\www\\cosmy\\modules\\ps_emailsubscription\\views\\templates\\admin\\list_action_viewcustomer.tpl',
      1 => 1715980498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6647ef3814be99_62190741 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" class="edit btn btn-default <?php if ($_smarty_tpl->tpl_vars['disable']->value) {?>disabled<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<i class="icon-search-plus"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }
}

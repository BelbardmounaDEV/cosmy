<?php
/* Smarty version 3.1.48, created on 2024-05-18 00:19:33
  from 'module:blockwishlistviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6647e605432e81_39048324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3bea152bc88d6ad4c16c87750962bcaf4f57aa3' => 
    array (
      0 => 'module:blockwishlistviewstemplat',
      1 => 1715980226,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6647e605432e81_39048324 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['customer']->value['is_logged']) {?>
  <li>
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlistsTitlePage']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
      <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blockwishlist']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

    </a>
  </li>
<?php }
}
}

<?php
/* Smarty version 3.1.48, created on 2024-05-18 00:26:22
  from 'C:\wamp64\www\cosmy\themes\classic\templates\catalog\_partials\product-flags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6647e79ed6dec2_57956430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '172729771ec618f2f701637d9c26fd4b651895fd' => 
    array (
      0 => 'C:\\wamp64\\www\\cosmy\\themes\\classic\\templates\\catalog\\_partials\\product-flags.tpl',
      1 => 1715980590,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6647e79ed6dec2_57956430 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '4888010466647e79ed60507_25695503';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5345595616647e79ed63815_34680463', 'product_flags');
?>

<?php }
/* {block 'product_flags'} */
class Block_5345595616647e79ed63815_34680463 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_5345595616647e79ed63815_34680463',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="product-flags js-product-flags">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
            <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php
}
}
/* {/block 'product_flags'} */
}

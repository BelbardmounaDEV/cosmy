<?php
/* Smarty version 3.1.48, created on 2024-05-18 00:26:24
  from 'C:\wamp64\www\cosmy\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6647e7a05cb874_34217028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88ee1eac0165185b4f5bdd8cc25992dff5a573ce' => 
    array (
      0 => 'C:\\wamp64\\www\\cosmy\\themes\\classic\\templates\\index.tpl',
      1 => 1715980588,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6647e7a05cb874_34217028 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20969979046647e7a05bfc18_92365383', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_13627988316647e7a05c1703_94686062 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_20251607166647e7a05c59e6_33207351 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_10048497266647e7a05c3fb0_64808788 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20251607166647e7a05c59e6_33207351', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_20969979046647e7a05bfc18_92365383 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_20969979046647e7a05bfc18_92365383',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_13627988316647e7a05c1703_94686062',
  ),
  'page_content' => 
  array (
    0 => 'Block_10048497266647e7a05c3fb0_64808788',
  ),
  'hook_home' => 
  array (
    0 => 'Block_20251607166647e7a05c59e6_33207351',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13627988316647e7a05c1703_94686062', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10048497266647e7a05c3fb0_64808788', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}

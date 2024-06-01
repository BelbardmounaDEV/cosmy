<?php
/* Smarty version 3.1.48, created on 2024-05-18 00:19:22
  from 'C:\wamp64\www\cosmy\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6647e5fa0f9f98_78809260',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0db61f8361d716fb54052b8529daccbbb1ed497a' => 
    array (
      0 => 'C:\\wamp64\\www\\cosmy\\themes\\classic\\templates\\page.tpl',
      1 => 1715980588,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6647e5fa0f9f98_78809260 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2141289236647e5fa0d36b2_55401314', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_13003438326647e5fa0d6a52_40104884 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_14229749766647e5fa0d4e64_65613585 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13003438326647e5fa0d6a52_40104884', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_10008545996647e5fa0eb4c3_97112928 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_8575712386647e5fa0f0d63_22216419 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_8931840206647e5fa0dc346_00513678 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10008545996647e5fa0eb4c3_97112928', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8575712386647e5fa0f0d63_22216419', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_19082880656647e5fa0f5e34_49274297 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_18177107686647e5fa0f4620_69809345 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19082880656647e5fa0f5e34_49274297', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_2141289236647e5fa0d36b2_55401314 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2141289236647e5fa0d36b2_55401314',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_14229749766647e5fa0d4e64_65613585',
  ),
  'page_title' => 
  array (
    0 => 'Block_13003438326647e5fa0d6a52_40104884',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_8931840206647e5fa0dc346_00513678',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_10008545996647e5fa0eb4c3_97112928',
  ),
  'page_content' => 
  array (
    0 => 'Block_8575712386647e5fa0f0d63_22216419',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_18177107686647e5fa0f4620_69809345',
  ),
  'page_footer' => 
  array (
    0 => 'Block_19082880656647e5fa0f5e34_49274297',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14229749766647e5fa0d4e64_65613585', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8931840206647e5fa0dc346_00513678', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18177107686647e5fa0f4620_69809345', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}

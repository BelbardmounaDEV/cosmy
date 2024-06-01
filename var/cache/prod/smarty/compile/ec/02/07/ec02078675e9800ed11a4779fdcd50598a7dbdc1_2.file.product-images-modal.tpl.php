<?php
/* Smarty version 3.1.48, created on 2024-05-18 10:59:48
  from 'C:\wamp64\www\cosmy\themes\classic\templates\catalog\_partials\product-images-modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66487c14a30993_40950598',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec02078675e9800ed11a4779fdcd50598a7dbdc1' => 
    array (
      0 => 'C:\\wamp64\\www\\cosmy\\themes\\classic\\templates\\catalog\\_partials\\product-images-modal.tpl',
      1 => 1715980591,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66487c14a30993_40950598 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="modal fade js-product-images-modal" id="product-modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <?php $_smarty_tpl->_assignInScope('imagesCount', count($_smarty_tpl->tpl_vars['product']->value['images']));?>
        <figure>
          <?php if ($_smarty_tpl->tpl_vars['product']->value['default_image']) {?>
            <img
              class="js-modal-product-cover product-cover-modal img-fluid"
              width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['width'], ENT_QUOTES, 'UTF-8');?>
"
              src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
              <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['default_image']['legend'])) {?>
                alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['default_image']['legend'], ENT_QUOTES, 'UTF-8');?>
"
                title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['default_image']['legend'], ENT_QUOTES, 'UTF-8');?>
"
              <?php } else { ?>
                alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
              <?php }?>
              height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['height'], ENT_QUOTES, 'UTF-8');?>
"
            >
          <?php } else { ?>
            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['height'], ENT_QUOTES, 'UTF-8');?>
" />
          <?php }?>
          <figcaption class="image-caption">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189016048666487c149f6b45_44039252', 'product_description_short');
?>

        </figcaption>
        </figure>
        <aside id="thumbnails" class="thumbnails js-thumbnails text-sm-center">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_118783072866487c149fd8e5_98403747', 'product_images');
?>

          <?php if ($_smarty_tpl->tpl_vars['imagesCount']->value > 5) {?>
            <div class="arrows js-modal-arrows">
              <i class="material-icons arrow-up js-modal-arrow-up">&#xE5C7;</i>
              <i class="material-icons arrow-down js-modal-arrow-down">&#xE5C5;</i>
            </div>
          <?php }?>
        </aside>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php }
/* {block 'product_description_short'} */
class Block_189016048666487c149f6b45_44039252 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description_short' => 
  array (
    0 => 'Block_189016048666487c149f6b45_44039252',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="product-description-short"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
          <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_images'} */
class Block_118783072866487c149fd8e5_98403747 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_images' => 
  array (
    0 => 'Block_118783072866487c149fd8e5_98403747',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="js-modal-mask mask <?php if ($_smarty_tpl->tpl_vars['imagesCount']->value <= 5) {?> nomargin <?php }?>">
              <ul class="product-images js-modal-product-images">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
                  <li class="thumb-container js-thumb-container">
                    <img
                      data-image-large-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
                      class="thumb js-modal-thumb"
                      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['medium']['url'], ENT_QUOTES, 'UTF-8');?>
"
                      <?php if (!empty($_smarty_tpl->tpl_vars['image']->value['legend'])) {?>
                        alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
                        title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
                      <?php } else { ?>
                        alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
                      <?php }?>
                      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['medium']['width'], ENT_QUOTES, 'UTF-8');?>
"
                      height="148"
                    >
                  </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ul>
            </div>
          <?php
}
}
/* {/block 'product_images'} */
}

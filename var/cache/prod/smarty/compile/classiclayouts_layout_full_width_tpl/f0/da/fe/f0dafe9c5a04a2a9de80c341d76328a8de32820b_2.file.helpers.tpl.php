<?php
/* Smarty version 3.1.48, created on 2024-05-18 00:19:23
  from 'C:\wamp64\www\cosmy\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6647e5fb1c8187_23647834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0dafe9c5a04a2a9de80c341d76328a8de32820b' => 
    array (
      0 => 'C:\\wamp64\\www\\cosmy\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1715980601,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6647e5fb1c8187_23647834 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\wamp64\\www\\cosmy\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\f0\\da\\fe\\f0dafe9c5a04a2a9de80c341d76328a8de32820b_2.file.helpers.tpl.php',
    'uid' => 'f0dafe9c5a04a2a9de80c341d76328a8de32820b',
    'call_name' => 'smarty_template_function_renderLogo_5214565196647e5fb19d0c4_79990737',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_5214565196647e5fb19d0c4_79990737 */
if (!function_exists('smarty_template_function_renderLogo_5214565196647e5fb19d0c4_79990737')) {
function smarty_template_function_renderLogo_5214565196647e5fb19d0c4_79990737(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_5214565196647e5fb19d0c4_79990737 */
}

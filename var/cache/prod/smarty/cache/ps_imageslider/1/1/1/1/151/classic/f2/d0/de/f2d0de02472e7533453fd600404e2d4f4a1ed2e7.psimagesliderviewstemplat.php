<?php
/* Smarty version 3.1.48, created on 2024-05-22 09:06:23
  from 'module:psimagesliderviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_664da77fa62248_97361286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:psimagesliderviewstemplat',
      1 => 1715980622,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_664da77fa62248_97361286 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="5000" data-wrap="true" data-pause="hover" data-touch="true">
    <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
          </ol>
    <ul class="carousel-inner" role="listbox" aria-label="Conteneur carrousel">
              <li class="carousel-item active" role="option" aria-hidden="false">
          <a href="https://www.prestashop-project.org?utm_source=back-office&amp;utm_medium=v17_homeslider&amp;utm_campaign=back-office-FR&amp;utm_content=download">
            <figure>
              <img src="http://localhost/cosmy/modules/ps_imageslider/images/f8a09014ec4b88c4cce81befd69e81ee1e8db821_Cosmy beauty (1) (1).jpg" alt="" loading="lazy" width="1110" height="340">
                          </figure>
          </a>
        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="https://www.prestashop-project.org?utm_source=back-office&amp;utm_medium=v17_homeslider&amp;utm_campaign=back-office-FR&amp;utm_content=download">
            <figure>
              <img src="http://localhost/cosmy/modules/ps_imageslider/images/bdc91a817b2efa293b770ff0e8cc053e584c1a6a_Cosmy beauty.jpg" alt="" loading="lazy" width="1110" height="340">
                          </figure>
          </a>
        </li>
          </ul>
    <div class="direction" aria-label="Boutons du carrousel">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev" aria-label="Précédent">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next" aria-label="Suivant">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
      </a>
    </div>
  </div>
<?php }
}

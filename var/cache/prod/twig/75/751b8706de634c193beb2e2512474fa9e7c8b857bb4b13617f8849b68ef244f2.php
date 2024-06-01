<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__8cc14751041fc159e7964f29e0efc8e0804a68f0b01ef5f260843ac2c89fc655 */
class __TwigTemplate_a66d705d020be4dc63c69cf7aaa3aec25a4bd77b4e7f7716d42aa5e21211f655 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/cosmy/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/cosmy/img/app_icon.png\" />

<title>Pages • Lueur Sublime</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminCmsContent';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'MA';
    var _PS_VERSION_ = '1.7.8.11';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = 'f6e527bc8c66b14fa85973e40962fd57';
    var token_admin_orders = tokenAdminOrders = '000f6d2490d7a374a1394ec4466e21c4';
    var token_admin_customers = '8c812b189f8cdbf89cffc7ea708eb4f8';
    var token_admin_customer_threads = tokenAdminCustomerThreads = '9193fbfa385490fcb95a748ab2a8a65b';
    var currentIndex = 'index.php?controller=AdminCmsContent';
    var employee_token = '282166ecbffab88790ab6fdafdc5700f';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '1';
    var admin_modules_link = '/cosmy/Cosmy/index.php/improve/modules/catalog/recommended?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg';
    var admin_notification_get_link = '/cosmy/Cosmy/index.php/common/notifications?_token=slzxe";
        // line 42
        echo "XbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg';
    var admin_notification_push_link = adminNotificationPushLink = '/cosmy/Cosmy/index.php/common/notifications/ack?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg';
    var tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var errorLogin = 'PrestaShop n\\'a pas pu se connecter à Addons. Veuillez vérifier vos identifiants et votre connexion Internet.';
    var search_product_msg = 'Rechercher un produit';
  </script>

      <link href=\"/cosmy/Cosmy/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/cosmy/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/cosmy/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/cosmy/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/cosmy/Cosmy/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/cosmy/modules/ps_mbo/views/css/catalog.css?v=3.1.2\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/cosmy/modules/ps_mbo/views/css/recommended-modules-since-1.7.8.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/cosmy/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/cosmy/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/cosmy/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/cosmy\\/Cosmy\\/\";
var baseDir = \"\\/cosmy\\/\";
var changeFormLanguageUrl = \"\\/cosmy\\/Cosmy\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\";
var currency = {\"iso_code\":\"MAD\",\"sign\":\"MAD\",\"name\":\"Dirham marocain\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",";
        // line 66
        echo "\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"MAD\",\"currencySymbol\":\"MAD\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/cosmy/Cosmy/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/cosmy/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/cosmy/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/cosmy/js/admin.js?v=1.7.8.11\"></script>
<script type=\"text/javascript\" src=\"/cosmy/Cosmy/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/cosmy/js/tools.js?v=1.7.8.11\"></script>
<script type=\"text/javascript\" src=\"/cosmy/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/cosmy/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/cosmy/Cosmy/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/cosmy/modules/ps_mbo/views/js/recommended-modules.js?v=3.1.2\"></script>
<script type=\"text/javascript\" src=\"/cosmy/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/cosmy/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"><";
        // line 85
        echo "/script>
<script type=\"text/javascript\" src=\"/cosmy/modules/welcome/public/module.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/cosmy/Cosmy/index.php/common/notifications?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 103
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-fr admincmscontent\"
  data-base-url=\"/cosmy/Cosmy/index.php\"  data-token=\"slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/cosmy/Cosmy/index.php?controller=AdminDashboard&amp;token=ddeae2bd3d5675067a87d7d415d0dd1f\"></a>
      <span id=\"shop_version\">1.7.8.11</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/cosmy/Cosmy/index.php?controller=AdminOrders&amp;token=000f6d2490d7a374a1394ec4466e21c4\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/cosmy/Cosmy/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=57bcc014033d0718adf4e3e1631590f7\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/cosmy/Cosmy/index.php/improve/modules/manage?token=0d07a79f2df7da936f3c94d8732c1ef6\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/cosmy/Cosmy/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=79e9df8c2391477376e3ec03e33fa361\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item";
        // line 140
        echo " quick-row-link\"
         href=\"http://localhost/cosmy/Cosmy/index.php/sell/catalog/products/new?token=0d07a79f2df7da936f3c94d8732c1ef6\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/cosmy/Cosmy/index.php/sell/catalog/categories/new?token=0d07a79f2df7da936f3c94d8732c1ef6\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"179\"
        data-icon=\"icon-AdminParentThemes\"
        data-method=\"add\"
        data-url=\"index.php/improve/design/cms-pages/?-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\"
        data-post-link=\"http://localhost/cosmy/Cosmy/index.php?controller=AdminQuickAccesses&token=1d0e06e10fd2b3942ef3d3f8b87859ef\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Pages - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter la page actuelle à l'accès rapide
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/cosmy/Cosmy/index.php?controller=AdminQuickAccesses&token=1d0e06e10fd2b3942ef3d3f8b87859ef\">
      <i class=\"material-icons\">settings</i>
      Gérez vos accès rapides
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/cosmy/Cosmy/index.php?controller=AdminSearch&amp;token=a26bea8fedd03443740b8f16b19b6130\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du c";
        // line 178
        echo "lient, etc.)\" aria-label=\"Barre de recherche\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, référence, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"Nom\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"b";
        // line 194
        echo "tn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

      
      
              <div class=\"component\" id=\"header-shop-list-container\">
            <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/cosmy/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Voir ma boutique</span>
    </a>
  </div>
        </div>
                    <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                 ";
        // line 251
        echo "   <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté vos <strong><a href=\"http://localhost/cosmy/Cosmy/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=166e6a0631d642ed78de954e39b1e75a\">paniers abandonnés</a></strong> ?<br> Votre prochaine commande s'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              On dirait que vos clients sont satisfaits :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"fl";
        // line 297
        echo "oat-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">

      <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/cosmy/img/pr/default.jpg\" /></span>
      <span class=\"employee_profile\">Ravi de vous revoir Mouna</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/cosmy/Cosmy/index.php/configure/advanced/employees/1/edit?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\">
      <i class=\"material-icons\">edit</i>
      <span>Votre profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/ressources/documentation?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">book</i> Documentation</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/formation?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i cl";
        // line 335
        echo "ass=\"material-icons\">school</i> Formation</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">person_pin_circle</i> Trouver un expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com/fr/?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">extension</i> PrestaShop Marketplace</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">help</i> Centre d'assistance</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/cosmy/Cosmy/index.php?controller=AdminLogin&amp;logout=1&amp;token=d657dac579a380612dc715c39b1cb393\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/cosmy/Cosmy/index.php/configure/advanced/employees/toggle-navigation?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/cosmy/Cosmy/index.php?controller=AdminDashboard&amp;token=ddeae2bd3d5675067a87d7d415d0dd1f\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i";
        // line 364
        echo "> <span>Tableau de bord</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/cosmy/Cosmy/index.php/sell/orders/?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Commandes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/cosmy/Cosmy/index.php/sell/orders/?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
    ";
        // line 404
        echo "                            <a href=\"/cosmy/Cosmy/index.php/sell/orders/invoices/?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/cosmy/Cosmy/index.php/sell/orders/credit-slips/?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\"> Avoirs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/cosmy/Cosmy/index.php/sell/orders/delivery-slips/?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/cosmy/Cosmy/index.php?controller=AdminCarts&amp;token=166e6a0631d642ed78de954e39b1e75a\" class=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                      ";
        // line 436
        echo "                                
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/cosmy/Cosmy/index.php/sell/catalog/products?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogue
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/cosmy/Cosmy/index.php/sell/catalog/products?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/cosmy/Cosmy/index.php/sell/catalog/categories?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\"> Catégories
                                </a>
                              </li>

                                                                                  
                              
                                          ";
        // line 467
        echo "                  
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/cosmy/Cosmy/index.php/sell/catalog/monitoring/?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\"> Suivi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/cosmy/Cosmy/index.php?controller=AdminAttributesGroups&amp;token=9e33cc9f7cb871def172a0cd417d04f5\" class=\"link\"> Attributs &amp; caractéristiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/cosmy/Cosmy/index.php/sell/catalog/brands/?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/cosmy/Cosmy/index.php/sell/attachments/?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\"> Fichiers
                                </a>
                              </li>

                              ";
        // line 497
        echo "                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/cosmy/Cosmy/index.php?controller=AdminCartRules&amp;token=79e9df8c2391477376e3ec03e33fa361\" class=\"link\"> Réductions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/cosmy/Cosmy/index.php/sell/stocks/?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/cosmy/Cosmy/index.php/sell/customers/?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clients
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
          ";
        // line 529
        echo "                                    <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/cosmy/Cosmy/index.php/sell/customers/?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/cosmy/Cosmy/index.php/sell/addresses/?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\"> Adresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/cosmy/Cosmy/index.php?controller=AdminCustomerThreads&amp;token=9193fbfa385490fcb95a748ab2a8a65b\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      SAV
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
";
        // line 560
        echo "                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/cosmy/Cosmy/index.php?controller=AdminCustomerThreads&amp;token=9193fbfa385490fcb95a748ab2a8a65b\" class=\"link\"> SAV
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/cosmy/Cosmy/index.php/sell/customer-service/order-messages/?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/cosmy/Cosmy/index.php?controller=AdminReturn&amp;token=4481d35ab47302213f7395bdaa8213fb\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                  ";
        // line 591
        echo "                                    
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/cosmy/Cosmy/index.php/modules/metrics/legacy/stats?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiques
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"142\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/cosmy/Cosmy/index.php/modules/metrics/legacy/stats?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\"> Statistiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"143\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/cosmy/Cosmy/index.php/modules/metrics?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
         ";
        // line 621
        echo "                               </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/cosmy/Cosmy/index.php/modules/addons/modules/catalog?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/cosmy/Cosmy/index.php/modules/addons/modules/catalog?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li clas";
        // line 658
        echo "s=\"link-leveltwo\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/cosmy/Cosmy/index.php/improve/modules/manage?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/cosmy/Cosmy/index.php/modules/addons/themes/catalog?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"139\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/cosmy/Cosmy/index.php/modules/addons/themes/catalog?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\"> Catalogue de t";
        // line 684
        echo "hèmes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/cosmy/Cosmy/index.php/improve/design/themes/?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\"> Thème et logo
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/cosmy/Cosmy/index.php/improve/design/mail_theme/?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\"> Thème d&#039;e-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/cosmy/Cosmy/index.php/improve/design/cms-pages/?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions";
        // line 715
        echo "\">
                                <a href=\"/cosmy/Cosmy/index.php/improve/design/modules/positions/?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/cosmy/Cosmy/index.php?controller=AdminImages&amp;token=fa7d102298353b0348b78738c1a327d1\" class=\"link\"> Images
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/cosmy/Cosmy/index.php/modules/link-widget/list?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\"> Liste de liens
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/cosmy/Cosmy/index.php?controller=AdminCarriers&amp;token=b14ab23dbf057d950ebd9cc51d88bfc0\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Livraison
                      </span>
      ";
        // line 748
        echo "                                              <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/cosmy/Cosmy/index.php?controller=AdminCarriers&amp;token=b14ab23dbf057d950ebd9cc51d88bfc0\" class=\"link\"> Transporteurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/cosmy/Cosmy/index.php/improve/shipping/preferences/?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/cosmy/Cosmy/index.php/improve/payment/payment_methods?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\">
                      <i class=\"material-icons mi-payment\">pay";
        // line 777
        echo "ment</i>
                      <span>
                      Paiement
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/cosmy/Cosmy/index.php/improve/payment/payment_methods?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\"> Moyens de paiement
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/cosmy/Cosmy/index.php/improve/payment/preferences?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/cosmy/Cosmy/index.php/improve/international/localization/?_token=s";
        // line 809
        echo "lzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/cosmy/Cosmy/index.php/improve/international/localization/?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\"> Localisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/cosmy/Cosmy/index.php/improve/international/zones/?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\"> Zones géographiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/cosmy/Cosm";
        // line 839
        echo "y/index.php/improve/international/taxes/?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/cosmy/Cosmy/index.php/improve/international/translations/settings?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\"> Traductions
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"144\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/cosmy/Cosmy/index.php?controller=AdminPsfacebookModule&amp;token=4a268ae5b8db4a61796e5be8f9b5323b\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-144\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class";
        // line 871
        echo "=\"link-leveltwo\" data-submenu=\"145\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/cosmy/Cosmy/index.php?controller=AdminPsfacebookModule&amp;token=4a268ae5b8db4a61796e5be8f9b5323b\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"147\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/cosmy/Cosmy/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=a76276f3282af29acfaa6b76fda0b40a\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/cosmy/Cosmy/index.php/configure/shop/preferences/preferences?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                              ";
        // line 907
        echo "                                      keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/cosmy/Cosmy/index.php/configure/shop/preferences/preferences?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\"> Paramètres généraux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/cosmy/Cosmy/index.php/configure/shop/order-preferences/?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/cosmy/Cosmy/index.php/configure/shop/product-preferences/?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                         ";
        // line 937
        echo "                                   
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/cosmy/Cosmy/index.php/configure/shop/customer-preferences/?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/cosmy/Cosmy/index.php/configure/shop/contacts/?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/cosmy/Cosmy/index.php/configure/shop/seo-urls/?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\"> Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/cosmy/Cosmy/index.php?controller=AdminSearchConf&amp;token=be271e08d2d3fdda8bec0169814d22b7\" class=\"link\"> Rechercher
                                </a>
                              </li>

                        ";
        // line 967
        echo "                                                      </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/cosmy/Cosmy/index.php/configure/advanced/system-information/?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Paramètres avancés
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/cosmy/Cosmy/index.php/configure/advanced/system-information/?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/cosmy/Cosmy/index.php/configure/advanced/performance/?_tok";
        // line 996
        echo "en=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/cosmy/Cosmy/index.php/configure/advanced/administration/?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/cosmy/Cosmy/index.php/configure/advanced/emails/?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/cosmy/Cosmy/index.php/configure/advanced/import/?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\"> Importer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
";
        // line 1028
        echo "                                <a href=\"/cosmy/Cosmy/index.php/configure/advanced/employees/?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\"> Équipe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/cosmy/Cosmy/index.php/configure/advanced/sql-requests/?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\"> Base de données
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/cosmy/Cosmy/index.php/configure/advanced/logs/?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/cosmy/Cosmy/index.php/configure/advanced/webservice-keys/?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                      ";
        // line 1056
        echo "        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"120\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/cosmy/Cosmy/index.php/configure/advanced/feature-flags/?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" class=\"link\"> Fonctionnalités expérimentales
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  <div class=\"onboarding-navbar bootstrap\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      Lancez votre boutique !
    </div>
    <div class=\"col-md-4 text-right text-md-right\">9%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:9.0909090909091%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Reprendre</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Quitter le tutoriel</a>
  </div>
</div>

</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Apparence</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/cosmy/Cosmy/index.php/improve/design/cms-pages/?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\" aria-current=\"page\">Pages</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Pages          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  ";
        // line 1118
        echo "class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add_cms_category\"
                  href=\"/cosmy/Cosmy/index.php/improve/design/cms-pages/category/new?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\"                  title=\"Ajouter une nouvelle catégorie de page\"                >
                  <i class=\"material-icons\">add_circle_outline</i>                  Ajouter une nouvelle catégorie de page
                </a>
                                                                        <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add_cms_page\"
                  href=\"/cosmy/Cosmy/index.php/improve/design/cms-pages/new?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\"                  title=\"Ajouter une page\"                >
                  <i class=\"material-icons\">add_circle_outline</i>                  Ajouter une page
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/cosmy/Cosmy/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Ffr%252Fdoc%252FAdminCmsContent%253Fversion%253D1.7.8.11%2526country%253Dfr/Aide?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
         ";
        // line 1154
        echo "                     <a
              class=\"btn btn-floating-item  pointer\"              id=\"page-header-desc-floating-configuration-add_cms_category\"
              href=\"/cosmy/Cosmy/index.php/improve/design/cms-pages/category/new?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\"              title=\"Ajouter une nouvelle catégorie de page\"            >
              Ajouter une nouvelle catégorie de page
              <i class=\"material-icons\">add_circle_outline</i>            </a>
                                        <a
              class=\"btn btn-floating-item  pointer\"              id=\"page-header-desc-floating-configuration-add_cms_page\"
              href=\"/cosmy/Cosmy/index.php/improve/design/cms-pages/new?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\"              title=\"Ajouter une page\"            >
              Ajouter une page
              <i class=\"material-icons\">add_circle_outline</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Aide\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/cosmy/Cosmy/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Ffr%252Fdoc%252FAdminCmsContent%253Fversion%253D1.7.8.11%2526country%253Dfr/Aide?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\"
            >
              Aide
            </a>
                        </div>
    </div>
  </div>
  <script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Personnaliser les pages',
        'description': \"Personnalisez les pages de votre boutique et mettez en avant vos offres spéciales.<br>\\n                Voici une sélection de modules, <\\strong>compatibles avec votre boutique<\\/strong>, pour vous aider à atteindre vos objectifs.\",
        'Close': 'Fermer',
      },
      recommendedModulesUrl: '/cosmy/Cosmy/inde";
        // line 1184
        echo "x.php/modules/addons/modules/recommended?tabClassName=AdminCmsContent&_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 1,
      shouldUseLegacyTheme: 0,
    });
  }
</script>


</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" style=\"width: 9.0909090909091%;\">
        <div class=\"advancement\" style=\"width: 9.0909090909091%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 45.454545454545%;\">
        <div class=\"advancement\" style=\"width: 9.0909090909091%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 18.181818181818%;\">
        <div class=\"advancement\" style=\"width: 9.0909090909091%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group group-3\" style=\"width: 9.0909090909091%;\">
        <div class=\"advancement\" style=\"width: 9.0909090909091%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 18.181818181818%;\">
        <div class=\"advancement\" style=\"width: 9.0909090909091%;\"></div>
        <div class=\"id\">5</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Continuer</button>
  <a class=\"onboarding-button-shut-down\">Passer le tutoriel</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){
    onBoarding = new OnBoarding(1, {\"groups\":[{\"name\":\"dashboard\",\"steps\":[{\"type\":\"popup\",\"text\":\"<div class=\\\"onboarding-welcome\\\">\\n  <i class=\\\"material-icons onboarding-button-shut-down\\\">close<\\/i>\\n  ";
        // line 1237
        echo "<p class=\\\"welcome\\\">Bienvenue chez vous !<\\/p>\\n  <div class=\\\"content\\\">\\n    <p>Bonjour ! Je m'appelle Preston et je suis l\\u00e0 pour vous pr\\u00e9senter l'interface.<\\/p>\\n    <p>Vous d\\u00e9couvrirez les quelques \\u00e9tapes essentielles avant de lancer votre boutique :\\n    ajouter votre premier produit, personnaliser votre boutique, param\\u00e9trer vos transporteurs et modes de paiement...<\\/p>\\n  <\\/div>\\n  <div class=\\\"started\\\">\\n    <p>C'est parti !<\\/p>\\n  <\\/div>\\n  <div class=\\\"buttons\\\">\\n    <button class=\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\">Plus tard<\\/button>\\n    <button class=\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\">D\\u00e9marrer<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"http:\\/\\/localhost\\/cosmy\\/Cosmy\\/index.php?controller=AdminDashboard&token=ddeae2bd3d5675067a87d7d415d0dd1f\"}]},{\"name\":\"product\",\"title\":\"Cr\\u00e9ons votre premier produit\",\"subtitle\":{\"1\":\"Que souhaitez-vous en dire ? Pensez \\u00e0 ce que vos clients aimeraient savoir \\u00e0 propos de ce produit.\",\"2\":\"Ajoutez un contenu clair et attrayant. Pas d'inqui\\u00e9tude, vous pourrez toujours le modifier apr\\u00e8s !\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Donnez un nom accrocheur \\u00e0 votre produit.\",\"options\":[\"savepoint\"],\"page\":[\"\\/cosmy\\/Cosmy\\/index.php\\/sell\\/catalog\\/products\\/new?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\",\"index.php\\/sell\\/catalog\\/products\\/.+\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Renseignez les informations essentielles dans cet onglet. Les autres onglets vous permettront de g\\u00e9rer les options plus avanc\\u00e9es.\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Ajoutez une ou plusieurs images pour montrer votre produit sous son meilleur jour !\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#product-images-dropzone\",\"position";
        echo "\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Combien voulez-vous le vendre ?\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"Bravo ! Vous venez de cr\\u00e9er votre premier produit. Pas mal, non ?\",\"page\":\"index.php\\/sell\\/catalog\\/products\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"name\":\"theme\",\"title\":\"Donnez \\u00e0 votre boutique sa touche personnelle\",\"subtitle\":{\"1\":\"Qu'est-ce qui rend votre boutique si unique ? Comment voudriez-vous qu'elle soit ?\",\"2\":\"Personnalisez votre th\\u00e8me ou choisissez parmi les nombreux mod\\u00e8les de notre catalogue de th\\u00e8mes.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Commencez par ajouter votre propre logo ici !\",\"options\":[\"savepoint\"],\"page\":\"\\/cosmy\\/Cosmy\\/index.php\\/improve\\/design\\/themes\\/?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\",\"selector\":\"#form_shop_logos_header_logo, #form_header_logo\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Si vous cherchez quelque chose de vraiment unique, consultez notre catalogue de th\\u00e8mes.\",\"page\":\"\\/cosmy\\/Cosmy\\/index.php\\/improve\\/design\\/themes-catalog\\/?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"name\":\"payment\",\"title\":\"Soyez pr\\u00eat \\u00e0 recevoir des paiements\",\"subtitle\":{\"1\":\"Comment souhaitez-vous \\u00eatre pay\\u00e9 par vos clients ?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Ces moyens de paiement sont d\\u00e9j\\u00e0 disponibles sur votre boutique.\",\"options\":[\"savepoint\"],\"page\":\"\\/cosmy\\/Cosmy\\/index.php\\/improve\\/payment\\/payment_methods?_token=slzxeXbHJk-9p_vvGR5o9g12iiEN1lIyFWDfUyKFgyg\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted, .card:eq(0) .text-muted:eq(0)\",\"position\":\"";
        echo "right\"}]},{\"name\":\"shipping\",\"title\":\"Choisissez vos transporteurs\",\"subtitle\":{\"1\":\"Comment souhaitez-vous livrer vos produits ?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Voici les m\\u00e9thodes de livraisons disponibles sur votre boutique aujourd'hui.\",\"options\":[\"savepoint\"],\"page\":\"http:\\/\\/localhost\\/cosmy\\/Cosmy\\/index.php?controller=AdminCarriers&token=b14ab23dbf057d950ebd9cc51d88bfc0\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"<div id=\\\"onboarding-welcome\\\" class=\\\"modal-body\\\">\\n    <div class=\\\"col-12\\\">\\n        <button class=\\\"onboarding-button-next pull-right close\\\" type=\\\"button\\\">&times;<\\/button>\\n        <h2 class=\\\"text-center text-md-center\\\">\\u00c0 vous de jouer !<\\/h2>\\n    <\\/div>\\n    <div class=\\\"col-12\\\">\\n        <p class=\\\"text-center text-md-center\\\">\\n          Vous avez vu l'essentiel, mais il y en a bien plus \\u00e0 d\\u00e9couvrir.<br \\/>\\n          Ces ressources vous aideront \\u00e0 aller plus loin :\\n        <\\/p>\\n        <div class=\\\"container-fluid\\\">\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6  justify-content-center text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"http:\\/\\/doc.prestashop.com\\/display\\/PS17\\/Getting+Started\\\" target=\\\"_blank\\\">\\n                <div class=\\\"starter-guide\\\"><\\/div>\\n                <span class=\\\"link\\\">Guide de d\\u00e9marrage<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/forums\\/\\\" target=\\\"_blank\\\">\\n                <div class=\\\"forum\\\"><\\/div>\\n                <span class=\\\"link\\\">Forum<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop";
        echo ".com\\/en\\/training-prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"training\\\"><\\/div>\\n                <span class=\\\"link\\\">Formation<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.youtube.com\\/user\\/prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"video-tutorial\\\"><\\/div>\\n                <span class=\\\"link\\\">Tutoriels Vid\\u00e9o<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n        <\\/div>\\n    <\\/div>\\n    <div class=\\\"modal-footer\\\">\\n        <div class=\\\"col-12\\\">\\n            <div class=\\\"text-center text-md-center\\\">\\n                <button class=\\\"btn btn-primary onboarding-button-next\\\">Je suis pr\\u00eat<\\/button>\\n            <\\/div>\\n        <\\/div>\\n    <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"http:\\/\\/localhost\\/cosmy\\/Cosmy\\/index.php?controller=AdminDashboard&token=ddeae2bd3d5675067a87d7d415d0dd1f\"}]}]}, 1, \"http://localhost/cosmy/Cosmy/index.php?controller=AdminWelcome&token=ddb8a887bb4f94dfa95c32173e86fb9a\", baseAdminDir);

          onBoarding.addTemplate('lost', '<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>Vous êtes perdu ?</p>    <p>Pour continuer, cliquez ici :</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Continuer</button>    </div>    <p>Pour quitter le tutoriel de façon définitive, cliquez ici :</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Quitter le tutoriel de bienvenue</button>    </div>  </div></div>');
          onBoarding.addTemplate('popup', '<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>');
          onBoarding.addTemplate('tooltip', '<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"tot";
        // line 1241
        echo "al\">Étape <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Suivant</button></div>');
    
    onBoarding.showCurrentStep();

    var body = \$(\"body\");

    body.delegate(\".onboarding-button-next\", \"click\", function(){
      if (\$(this).is('.with-spinner')) {
        if (!\$(this).is('.animated')) {
          \$(this).addClass('animated');
          onBoarding.gotoNextStep();
        }
      } else {
        onBoarding.gotoNextStep();
      }
    }).delegate(\".onboarding-button-shut-down\", \"click\", function(){
      onBoarding.setShutDown(true);
    }).delegate(\".onboarding-button-resume\", \"click\", function(){
      onBoarding.setShutDown(false);
    }).delegate(\".onboarding-button-goto-current\", \"click\", function(){
      onBoarding.gotoLastSavePoint();
    }).delegate(\".onboarding-button-stop\", \"click\", function(){
      onBoarding.stop();
    });

  });

</script>


                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1277
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    En attendant que cette page soit adaptée au mobile, vous êtes invité à la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"http://localhost/cosmy/Cosmy/index.php?controller=AdminDashboard&amp;token=ddeae2bd3d5675067a87d7d415d0dd1f\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=mounabelbard%40gmail.com&amp;firstname=Mouna&amp;lastname=Belbard&amp;website=http%3A%2F%2Flocalhost%2Fcosmy%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/cosmy/Cosmy/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">";
        // line 1326
        echo "
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=mounabelbard%40gmail.com&amp;firstname=Mouna&amp;lastname=Belbard&amp;website=http%3A%2F%2Flocalhost%2Fcosmy%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"";
        // line 1365
        echo "btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1385
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 103
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1277
    public function block_content_header($context, array $blocks = [])
    {
    }

    public function block_content($context, array $blocks = [])
    {
    }

    public function block_content_footer($context, array $blocks = [])
    {
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1385
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__8cc14751041fc159e7964f29e0efc8e0804a68f0b01ef5f260843ac2c89fc655";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1552 => 1385,  1535 => 1277,  1526 => 103,  1517 => 1385,  1495 => 1365,  1454 => 1326,  1399 => 1277,  1361 => 1241,  1352 => 1237,  1297 => 1184,  1265 => 1154,  1227 => 1118,  1163 => 1056,  1133 => 1028,  1099 => 996,  1068 => 967,  1036 => 937,  1004 => 907,  966 => 871,  932 => 839,  900 => 809,  866 => 777,  835 => 748,  800 => 715,  767 => 684,  739 => 658,  700 => 621,  668 => 591,  635 => 560,  602 => 529,  568 => 497,  536 => 467,  503 => 436,  469 => 404,  427 => 364,  396 => 335,  356 => 297,  308 => 251,  249 => 194,  231 => 178,  191 => 140,  149 => 103,  129 => 85,  108 => 66,  82 => 42,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__8cc14751041fc159e7964f29e0efc8e0804a68f0b01ef5f260843ac2c89fc655", "");
    }
}

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

/* @PrestaShop/Admin/Improve/International/Tax/index.html.twig */
class __TwigTemplate_dafd1828c5e0a6d6d936dc90ab5dde0c4abfa8a9b923644c88d3bc68f04d246b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 34
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 26
        $context["layoutHeaderToolbarBtn"] = ["add" => ["href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_taxes_create"), "desc" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add new tax", [], "Admin.International.Feature"), "icon" => "add_circle_outline"]];
        // line 34
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/International/Tax/index.html.twig", 34);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 38
    public function block_content($context, array $blocks = [])
    {
        // line 39
        echo "  <div class=\"row justify-content-center\">
    <div class=\"col-lg-12\">
      ";
        // line 41
        $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Improve/International/Tax/index.html.twig", 41)->display(twig_array_merge($context, ["grid" => ($context["taxGrid"] ?? null)]));
        // line 42
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Improve/International/Tax/Blocks/tax_options.html.twig", "@PrestaShop/Admin/Improve/International/Tax/index.html.twig", 42)->display($context);
        // line 43
        echo "    </div>
  </div>
";
    }

    // line 47
    public function block_javascripts($context, array $blocks = [])
    {
        // line 48
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/tax.bundle.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Tax/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 51,  70 => 50,  64 => 48,  61 => 47,  55 => 43,  52 => 42,  50 => 41,  46 => 39,  43 => 38,  38 => 34,  36 => 26,  30 => 34,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/International/Tax/index.html.twig", "C:\\wamp64\\www\\cosmy\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\International\\Tax\\index.html.twig");
    }
}

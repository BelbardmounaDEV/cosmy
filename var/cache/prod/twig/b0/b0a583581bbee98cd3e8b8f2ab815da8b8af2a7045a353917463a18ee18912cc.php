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

/* @PrestaShop/Admin/Sell/Catalog/Suppliers/index.html.twig */
class __TwigTemplate_ac863a498bca708b475b0e739ca96b9887f094d5e9d346d0b1e145d6ce0b19d1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'supplier_grid' => [$this, 'block_supplier_grid'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 28
        $context["layoutHeaderToolbarBtn"] = ["add" => ["href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_suppliers_create"), "desc" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add new supplier", [], "Admin.Catalog.Feature"), "icon" => "add_circle_outline"]];
        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Sell/Catalog/Suppliers/index.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 37
    public function block_content($context, array $blocks = [])
    {
        // line 38
        echo "  ";
        $this->displayBlock('supplier_grid', $context, $blocks);
    }

    public function block_supplier_grid($context, array $blocks = [])
    {
        // line 39
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "infotip", [0 => ($context["settingsTipMessage"] ?? null), 1 => true], "method"), "html", null, true);
        echo "
    <div class=\"row\">
      <div class=\"col\">
        ";
        // line 42
        $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Sell/Catalog/Suppliers/index.html.twig", 42)->display(twig_array_merge($context, ["grid" => ($context["supplierGrid"] ?? null)]));
        // line 43
        echo "      </div>
    </div>
  ";
    }

    // line 48
    public function block_javascripts($context, array $blocks = [])
    {
        // line 49
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/supplier.bundle.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Suppliers/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 52,  78 => 51,  72 => 49,  69 => 48,  63 => 43,  61 => 42,  54 => 39,  47 => 38,  44 => 37,  39 => 26,  37 => 28,  31 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Suppliers/index.html.twig", "C:\\wamp64\\www\\cosmy\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Suppliers\\index.html.twig");
    }
}

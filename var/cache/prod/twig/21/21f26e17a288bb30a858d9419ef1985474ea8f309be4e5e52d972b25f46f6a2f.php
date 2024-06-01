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

/* @PrestaShop/Admin/Sell/Catalog/Manufacturer/Address/Blocks/form.html.twig */
class __TwigTemplate_1d6fcd64e8d77fb4032f0288c34d801d73dfbd27ea3d0fd72f542903566538a2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 26
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["addressForm"] ?? null), [0 => "PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig"], true);
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["addressForm"] ?? null), 'form_start');
        echo "
<div class=\"card\">
  <div class=\"card-header\">
    ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Addresses", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
  </div>
  <div class=\"card-block row\">
    <div class=\"card-text\">
      ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addressForm"] ?? null), "id_manufacturer", []), 'row');
        echo "
      ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addressForm"] ?? null), "last_name", []), 'row');
        echo "
      ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addressForm"] ?? null), "first_name", []), 'row');
        echo "
      ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addressForm"] ?? null), "address", []), 'row');
        echo "
      ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addressForm"] ?? null), "address2", []), 'row');
        echo "
      ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addressForm"] ?? null), "post_code", []), 'row');
        echo "
      ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addressForm"] ?? null), "city", []), 'row');
        echo "
      ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addressForm"] ?? null), "id_country", []), 'row');
        echo "
      <div class=\"js-manufacturer-address-state";
        // line 43
        if (twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute(($context["addressForm"] ?? null), "id_state", []), "vars", []), "choices", []))) {
            echo " d-none";
        }
        echo "\">
        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addressForm"] ?? null), "id_state", []), 'row');
        echo "
      </div>

      ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["addressForm"] ?? null), 'widget');
        echo "
    </div>
  </div>

  <div class=\"card-footer\">
    <div class=\"d-inline-flex\">
      <a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_manufacturers_index");
        echo "\" class=\"btn btn-outline-secondary\">
        ";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
      </a>
    </div>
    <div class=\"d-inline-flex float-right\">
      <button class=\"btn btn-primary\">";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
    </div>
  </div>

</div>
";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["addressForm"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Address/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 63,  115 => 58,  108 => 54,  104 => 53,  95 => 47,  89 => 44,  83 => 43,  79 => 42,  75 => 41,  71 => 40,  67 => 39,  63 => 38,  59 => 37,  55 => 36,  51 => 35,  44 => 31,  38 => 28,  35 => 27,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Address/Blocks/form.html.twig", "C:\\wamp64\\www\\cosmy\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Manufacturer\\Address\\Blocks\\form.html.twig");
    }
}

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

/* @PrestaShop/Admin/Sell/Catalog/Suppliers/Blocks/form.html.twig */
class __TwigTemplate_2d2c0a58f0e82782e5d86569378d4e96b19b79125595cb5335ea27ec190e83c7 extends \Twig\Template
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
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["supplierForm"] ?? null), [0 => "PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig"], true);
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["supplierForm"] ?? null), 'form_start');
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">local_shipping</i>
    ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Suppliers", [], "Admin.Global"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-block row\">
    <div class=\"card-text\">

      ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["supplierForm"] ?? null), "name", []), 'row');
        echo "
      ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["supplierForm"] ?? null), "description", []), 'row');
        echo "
      ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["supplierForm"] ?? null), "phone", []), 'row');
        echo "
      ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["supplierForm"] ?? null), "mobile_phone", []), 'row');
        echo "
      ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["supplierForm"] ?? null), "address", []), 'row');
        echo "
      ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["supplierForm"] ?? null), "address2", []), 'row');
        echo "
      ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["supplierForm"] ?? null), "post_code", []), 'row');
        echo "
      ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["supplierForm"] ?? null), "city", []), 'row');
        echo "
      ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["supplierForm"] ?? null), "id_country", []), 'row');
        echo "
        <div class=\"js-supplier-state";
        // line 46
        if (twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute(($context["supplierForm"] ?? null), "id_state", []), "vars", []), "choices", []))) {
            echo " d-none";
        }
        echo "\">
          ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["supplierForm"] ?? null), "id_state", []), 'row');
        echo "
        </div>
      ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["supplierForm"] ?? null), "dni", []), 'row');
        echo "
      ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["supplierForm"] ?? null), "logo", []), 'row');
        echo "

      ";
        // line 52
        if ((array_key_exists("logoImage", $context) &&  !(null === ($context["logoImage"] ?? null)))) {
            // line 53
            echo "        <div class=\"form-group row\">
          <label class=\"form-control-label\"></label>
          <div class=\"col-sm\">
            ";
            // line 56
            $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Suppliers/logo_image.html.twig", "@PrestaShop/Admin/Sell/Catalog/Suppliers/Blocks/form.html.twig", 56)->display($context);
            // line 57
            echo "          </div>
        </div>
      ";
        }
        // line 60
        echo "      ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["supplierForm"] ?? null), 'widget');
        echo "

    </div>
  </div>
  <div class=\"card-footer\">
    <a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_suppliers_index");
        echo "\" class=\"btn btn-outline-secondary\">
      ";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
    </a>
    <button class=\"btn btn-primary float-right\">
      ";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
    </button>
  </div>
</div>
";
        // line 73
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["supplierForm"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Suppliers/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 73,  142 => 69,  136 => 66,  132 => 65,  123 => 60,  118 => 57,  116 => 56,  111 => 53,  109 => 52,  104 => 50,  100 => 49,  95 => 47,  89 => 46,  85 => 45,  81 => 44,  77 => 43,  73 => 42,  69 => 41,  65 => 40,  61 => 39,  57 => 38,  53 => 37,  45 => 32,  38 => 28,  35 => 27,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Suppliers/Blocks/form.html.twig", "C:\\wamp64\\www\\cosmy\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Suppliers\\Blocks\\form.html.twig");
    }
}

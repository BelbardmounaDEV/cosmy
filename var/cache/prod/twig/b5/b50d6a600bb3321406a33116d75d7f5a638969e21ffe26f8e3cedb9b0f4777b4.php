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

/* @PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/form.html.twig */
class __TwigTemplate_1bea21a682d10cd1a645674ca45405d49726bdc940cc84b1d5ae72758e5023a0 extends \Twig\Template
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
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["manufacturerForm"] ?? null), [0 => "PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig"], true);
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["manufacturerForm"] ?? null), 'form_start');
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">star</i>
    ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Brands", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-block row\">
    <div class=\"card-text\">
      ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["manufacturerForm"] ?? null), "name", []), 'row');
        echo "
      ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["manufacturerForm"] ?? null), "short_description", []), 'row');
        echo "
      ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["manufacturerForm"] ?? null), "description", []), 'row');
        echo "
      ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["manufacturerForm"] ?? null), "logo", []), 'row');
        echo "
      ";
        // line 40
        if ((array_key_exists("logoImage", $context) &&  !(null === ($context["logoImage"] ?? null)))) {
            // line 41
            echo "        <div class=\"form-group row\">
          <label for=\"\" class=\"form-control-label\"></label>
          <div class=\"col-sm\">
            ";
            // line 44
            $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Manufacturer/logo_image.html.twig", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/form.html.twig", 44)->display($context);
            // line 45
            echo "          </div>
        </div>
      ";
        }
        // line 48
        echo "
      ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["manufacturerForm"] ?? null), 'widget');
        echo "
    </div>
  </div>
  <div class=\"card-footer\">
    <a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_manufacturers_index");
        echo "\" class=\"btn btn-outline-secondary\">
      ";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
    </a>
    <button class=\"btn btn-primary float-right\">
      ";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
    </button>
  </div>
</div>
";
        // line 61
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["manufacturerForm"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 61,  102 => 57,  96 => 54,  92 => 53,  85 => 49,  82 => 48,  77 => 45,  75 => 44,  70 => 41,  68 => 40,  64 => 39,  60 => 38,  56 => 37,  52 => 36,  45 => 32,  38 => 28,  35 => 27,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/form.html.twig", "C:\\wamp64\\www\\cosmy\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Manufacturer\\Blocks\\form.html.twig");
    }
}

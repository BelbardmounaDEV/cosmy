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

/* @PrestaShop/Admin/Improve/International/Tax/Blocks/tax_options.html.twig */
class __TwigTemplate_ad636086441229f27a731516ecb0c0918a6a43f42d174470d5ecaae5ade2af54 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'tax_options_form_widget' => [$this, 'block_tax_options_form_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 26
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["taxOptionsForm"] ?? null), [0 => "PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig"], true);
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["taxOptionsForm"] ?? null), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_taxes_save_options")]);
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tax options", [], "Admin.International.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-block row\">
    <div class=\"card-text\">
      ";
        // line 35
        $this->displayBlock('tax_options_form_widget', $context, $blocks);
        // line 38
        echo "    </div>
  </div>
  <div class=\"card-footer\">
    <div class=\"d-flex justify-content-end\">
      <button class=\"btn btn-primary\" id=\"form-tax-options-save-button\">
        ";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
      </button>
    </div>
  </div>
</div>
";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["taxOptionsForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 35
    public function block_tax_options_form_widget($context, array $blocks = [])
    {
        // line 36
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["taxOptionsForm"] ?? null), 'widget');
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Tax/Blocks/tax_options.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 36,  75 => 35,  69 => 48,  61 => 43,  54 => 38,  52 => 35,  45 => 31,  39 => 28,  36 => 27,  34 => 26,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/International/Tax/Blocks/tax_options.html.twig", "C:\\wamp64\\www\\cosmy\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\International\\Tax\\Blocks\\tax_options.html.twig");
    }
}

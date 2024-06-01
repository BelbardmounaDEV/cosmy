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

/* @PrestaShop/Admin/Improve/International/Tax/Blocks/form.html.twig */
class __TwigTemplate_f956d42ffe738fff2ec1764d26acbead49b1d40e82524f5aace6a58854fe037b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'tax_form_widget' => [$this, 'block_tax_form_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 26
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["taxForm"] ?? null), [0 => "PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig"], true);
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["taxForm"] ?? null), 'form_start');
        echo "
<div class=\"card\">
  <div class=\"card-header\">
    ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Taxes", [], "Admin.Global"), "html", null, true);
        echo "
  </div>

  <div class=\"card-block row\">
    <div class=\"card-text\">
      ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["taxForm"] ?? null), 'errors');
        echo "
      ";
        // line 37
        $this->displayBlock('tax_form_widget', $context, $blocks);
        // line 40
        echo "    </div>
  </div>

  <div class=\"card-footer\">
    <div class=\"d-inline-flex\">
      <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_taxes_index");
        echo "\" class=\"btn btn-outline-secondary\">
        ";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
      </a>
    </div>
    <div class=\"d-inline-flex float-right\">
      <button class=\"btn btn-primary\" id=\"save-button\">";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
    </div>
  </div>

</div>
";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["taxForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 37
    public function block_tax_form_widget($context, array $blocks = [])
    {
        // line 38
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["taxForm"] ?? null), 'widget');
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Tax/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 38,  91 => 37,  85 => 55,  77 => 50,  70 => 46,  66 => 45,  59 => 40,  57 => 37,  53 => 36,  45 => 31,  39 => 28,  36 => 27,  34 => 26,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/International/Tax/Blocks/form.html.twig", "C:\\wamp64\\www\\cosmy\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\International\\Tax\\Blocks\\form.html.twig");
    }
}

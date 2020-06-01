<?php

/* /var/www/app/app/Modules/Admin/views/Financeiro/Fornecedores/edit.twig */
class __TwigTemplate_179aed724574af4721704910fdb046e2de2323de1fbdf89ba9fa370df958f31b extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::layout", "/var/www/app/app/Modules/Admin/views/Financeiro/Fornecedores/edit.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Admin::layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["form"] = $this->loadTemplate("Admin::helpers.form_financeiro", "/var/www/app/app/Modules/Admin/views/Financeiro/Fornecedores/edit.twig", 3);
        // line 5
        $context["title"] = "Editar Fornecedor";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"right_col\" role=\"main\">
\t<div class=\"\">
    <div class=\"row\">

        ";
        // line 12
        echo $context["form"]->geteditar_fornecedor(($context["fornecedor"] ?? null), ($context["midias"] ?? null));
        echo "

        <div class=\"clearfix\"></div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/app/app/Modules/Admin/views/Financeiro/Fornecedores/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 12,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/Financeiro/Fornecedores/edit.twig", "");
    }
}

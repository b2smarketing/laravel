<?php

/* /var/www/app/app/Modules/Admin/views/Financeiro/Midias/edit.twig */
class __TwigTemplate_96148a1d43f523e3fcd863e7e5c277be6657f69b726a57ca8c37ad8f886919f1 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::layout", "/var/www/app/app/Modules/Admin/views/Financeiro/Midias/edit.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Admin::layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["form"] = $this->loadTemplate("Admin::helpers.form_financeiro", "/var/www/app/app/Modules/Admin/views/Financeiro/Midias/edit.twig", 3);
        // line 5
        $context["title"] = "Tipos de Mídia";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"right_col\" role=\"main\">
\t<div class=\"\">
\t\t<div class=\"row\">

      ";
        // line 12
        echo $context["form"]->geteditar_midia(($context["midia"] ?? null), ($context["midias"] ?? null));
        echo "

      <div class=\"clearfix\"></div>
    </div>
  </div>
</div>
";
    }

    // line 20
    public function block_scripts($context, array $blocks = array())
    {
        // line 21
        echo "<!-- FullCalendar -->
<script>
  \$(window).load(function() {

    \$('#tabela_locais').DataTable( {
      responsive: true,
      order: [[2, 'asc'],[1, 'asc']] // Ordenar por categoria e nome
    });
  });
</script>
<!-- /FullCalendar -->
";
    }

    public function getTemplateName()
    {
        return "/var/www/app/app/Modules/Admin/views/Financeiro/Midias/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 21,  54 => 20,  43 => 12,  37 => 8,  34 => 7,  30 => 1,  28 => 5,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/Financeiro/Midias/edit.twig", "");
    }
}

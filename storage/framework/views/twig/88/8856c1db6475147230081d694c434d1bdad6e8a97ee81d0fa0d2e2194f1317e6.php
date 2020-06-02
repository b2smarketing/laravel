<?php

/* /var/www/app/app/Modules/Admin/views/Financeiro/Notas/index.twig */
class __TwigTemplate_1ae22782250d546ad1e720e8179e6c93b613223f1b633a26801d561de754cea5 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::layout", "/var/www/app/app/Modules/Admin/views/Financeiro/Notas/index.twig", 1);
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
        $context["form"] = $this->loadTemplate("Admin::helpers.form_financeiro", "/var/www/app/app/Modules/Admin/views/Financeiro/Notas/index.twig", 3);
        // line 4
        $context["tabela"] = $this->loadTemplate("Admin::helpers.tabela_financeiro", "/var/www/app/app/Modules/Admin/views/Financeiro/Notas/index.twig", 4);
        // line 6
        $context["title"] = "Notas Fiscais";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"right_col\" role=\"main\">
\t<div class=\"\">
\t\t<div class=\"row\">
          <div class=\"col-md-6 col-sm-12 col-xs-12\">
              <div class=\"x_panel\">
                <div class=\"x_title\">
                  <h2>Notas Fiscais: Mês Anterior</h2>
                  <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">

\t\t\t\t";
        // line 20
        echo $context["tabela"]->getlistar_notas_mes_anterior(($context["notasMesAnterior"] ?? null));
        echo "

                </div>
              </div>
            </div>
          <div class=\"col-md-6 col-sm-12 col-xs-12\">
              <div class=\"x_panel\">
                <div class=\"x_title\">
                  <h2>Notas Fiscais: Este Mês</h2>
                  <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">

\t\t\t\t";
        // line 33
        echo $context["tabela"]->getlistar_notas_mes(($context["notasMes"] ?? null));
        echo "

                </div>
              </div>
            </div>

            <div class=\"clearfix\"></div>
        </div>
        
          <div class=\"col-md-12 col-sm-12 col-xs-12\">
              <div class=\"x_panel\">
                <div class=\"x_title\">
                  <h2>Notas Fiscais: Todas</h2>
                  <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">

\t\t\t\t";
        // line 50
        echo $context["tabela"]->getlistar_notas(($context["notas"] ?? null));
        echo "

                </div>
              </div>
            </div>

            <div class=\"clearfix\"></div>
        </div>

\t    ";
        // line 59
        echo $context["form"]->geteditar_nota(null, ($context["notas"] ?? null), ($context["campanhas"] ?? null), ($context["fornecedores"] ?? null));
        echo "

    </div>
</div>
";
    }

    // line 65
    public function block_scripts($context, array $blocks = array())
    {
        // line 66
        echo "<!-- FullCalendar -->
<script>
  \$(window).load(function() {

    \$('#tabela_locais').DataTable( {
      responsive: true
    });
  });
</script>
<!-- /FullCalendar -->

<style>
.dataTables_filter {
  width: auto;
}
</style>
";
    }

    public function getTemplateName()
    {
        return "/var/www/app/app/Modules/Admin/views/Financeiro/Notas/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 66,  109 => 65,  100 => 59,  88 => 50,  68 => 33,  52 => 20,  39 => 9,  36 => 8,  32 => 1,  30 => 6,  28 => 4,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/Financeiro/Notas/index.twig", "");
    }
}

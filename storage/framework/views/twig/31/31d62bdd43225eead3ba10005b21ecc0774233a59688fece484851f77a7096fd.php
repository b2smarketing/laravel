<?php

/* /var/www/app/app/Modules/Admin/views/Campanhas/index.twig */
class __TwigTemplate_7fec975e35cda1294114c40696a5e36ce6b62061ae5b47155b67dd7dd98ba9b2 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::layout", "/var/www/app/app/Modules/Admin/views/Campanhas/index.twig", 1);
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
        $context["form"] = $this->loadTemplate("Admin::helpers.form_campanha", "/var/www/app/app/Modules/Admin/views/Campanhas/index.twig", 3);
        // line 5
        $context["title"] = "Campanhas";
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
          <div class=\"col-md-12 col-sm-12 col-xs-12\">
              <div class=\"x_panel\">
                <div class=\"x_title\">
                  <h2>Campanhas</h2>

                  <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">

                  <table class=\"table table-striped\">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Campanha</th>
                        <th>Início</th>
                        <th>Fim</th>
                        <th class=\"all\">Status</th>
                        <th class=\"min-tablet\">Leads</th>
                        <th class=\"min-tablet\">Inscritos</th>
                        <th class=\"min-tablet\">Matriculados</th>
                        <th>Budget</th>
                        <th>Consumido</th>
                        ";
        // line 34
        echo "                        <th class=\"all\"></th>
                      </tr>
                    </thead>
                    <tbody>
                  ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["campanhas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["campanha"]) {
            // line 39
            echo "                      <tr>
                        <th scope=\"row\">";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["campanha"], "id", array()), "html", null, true);
            echo "</th>
                        <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["campanha"], "nome", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["campanha"], "inicio", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                        <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["campanha"], "fim", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                        <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["campanha"], "status", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["campanha"], "leads", array()), "count", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["campanha"], "inscritos", array()), "count", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["campanha"], "matriculados", array()), "count", array()), "html", null, true);
            echo "</td>
                        <td>R\$ ";
            // line 48
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["campanha"], "budget", array()), 2, ",", "."), "html", null, true);
            echo "</td>
                        <td>R\$ ";
            // line 49
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["campanha"], "budget_consumido", array()), 2, ",", "."), "html", null, true);
            echo "</td>
                        ";
            // line 51
            echo "                        <td>
                          <a href=\"/campanhas/";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["campanha"], "id", array()), "html", null, true);
            echo "/\" title=\"Visualizar\"><i class=\"fa fa-eye\"></i></a>
                        \t<a target=\"_blank\" href=\"/dashboard/";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["campanha"], "id", array()), "html", null, true);
            echo "/\" title=\"Visualizar no Dashboard\"><i class=\"fa fa-dashboard\"></i></a>
                          <a href=\"/campanhas/";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["campanha"], "id", array()), "html", null, true);
            echo "/edit\" title=\"Editar\"><i class=\"fa fa-edit\"></i></a>
                        \t";
            // line 55
            if (($this->getAttribute($this->getAttribute($context["campanha"], "leads_total", array(), "method"), "count", array(), "method") > 0)) {
                echo "<a href=\"/campanhas/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["campanha"], "id", array()), "html", null, true);
                echo "/leads/csv\" title=\"Exportar como CSV\"><i class=\"fa fa-download\"></i></a>";
            }
            // line 56
            echo "                        \t";
            if (($this->getAttribute($this->getAttribute($context["campanha"], "leads_total", array(), "method"), "count", array(), "method") > 0)) {
                echo "<a href=\"/campanhas/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["campanha"], "id", array()), "html", null, true);
                echo "/leads/zipzop\" title=\"Exportar como Contatos do WhatsApp\"><i class=\"fa fa-whatsapp\"></i></a>";
            }
            // line 57
            echo "                        </td>
                      </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['campanha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                    </tbody>
                  </table>
        
                  <div>
                    <em>* Valores baseados em matrículas realizadas nesta campanha, em pagamentos mensais, nos próximos 6 meses.</em>
                  </div>

                </div>
              </div>
            </div>

            <div class=\"clearfix\"></div>
        </div>

\t\t<div class=\"row\">
          <div class=\"col-md-12 col-sm-12 col-xs-12\">
              <div class=\"x_panel\">
                <div class=\"x_title\">
                  <h2>Projeções <small>Período de 6 meses, em pagamentos mensais</small></h2>
                  <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">

                  <table class=\"table table-striped\">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th class=\"all\">Campanha</th>
                        <th class=\"all\">Status</th>
                        <th class=\"min-tablet\">Proj. Leads</th>
                        <th class=\"min-tablet\">Proj. Inscritos</th>
                        <th class=\"min-tablet\">Proj. Matrículas</th>
                        <th class=\"min-tablet\">Proj. Cursos</th>
                        <th>R\$/lead</th>
                        <th>R\$/inscrito</th>
                        <th>R\$/matrícula</th>
                      </tr>
                    </thead>
                    <tbody>
                  ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["campanhas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["campanha"]) {
            // line 100
            echo "                      <tr>
                        <th scope=\"row\">";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["campanha"], "id", array()), "html", null, true);
            echo "</th>
                        <td>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["campanha"], "nome", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["campanha"], "status", array()), "html", null, true);
            echo "</td>
                        <td>R\$ ";
            // line 104
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["campanha"], "projecoes", array()), "leads", array()), 2, ",", "."), "html", null, true);
            echo "</td>
                        <td>R\$ ";
            // line 105
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["campanha"], "projecoes", array()), "inscritos", array()), 2, ",", "."), "html", null, true);
            echo "</td>
                        <td>R\$ ";
            // line 106
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["campanha"], "projecoes", array()), "matriculados", array()), 2, ",", "."), "html", null, true);
            echo "</td>
                        <td>R\$ ";
            // line 107
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["campanha"], "projecoes", array()), "cursos", array()), 2, ",", "."), "html", null, true);
            echo "</td>
                        <td>R\$ ";
            // line 108
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["campanha"], "custo", array()), "lead", array()), 2, ",", "."), "html", null, true);
            echo "</td>
                        <td>R\$ ";
            // line 109
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["campanha"], "custo", array()), "inscrito", array()), 2, ",", "."), "html", null, true);
            echo "</td>
                        <td>R\$ ";
            // line 110
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["campanha"], "custo", array()), "matricula", array()), 2, ",", "."), "html", null, true);
            echo "</td>
                      </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['campanha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "                    </tbody>
                  </table>

                </div>
              </div>
            </div>

            <div class=\"clearfix\"></div>
        </div>

        ";
        // line 123
        echo $context["form"]->geteditar_campanha(null, ($context["cursos"] ?? null));
        echo "

    </div>
</div>

";
    }

    // line 130
    public function block_scripts($context, array $blocks = array())
    {
        // line 131
        echo "<script>

\$('table').DataTable({
  title: '";
        // line 134
        echo twig_escape_filter($this->env, $this->getAttribute(($context["campanha"] ?? null), "nome", array()), "html", null, true);
        echo "',
  dom: \"Bfrtip\",
  buttons: [
    {
      extend: \"copy\",
      className: \"btn-sm\"
    },
    {
      extend: \"csv\",
      className: \"btn-sm\"
    },
    {
      extend: \"excel\",
      className: \"btn-sm\"
    },
    {
      extend: \"pdfHtml5\",
      className: \"btn-sm\"
    },
    {
      extend: \"print\",
      className: \"btn-sm\"
    },
  ],
  responsive: true
});

</script>
";
    }

    public function getTemplateName()
    {
        return "/var/www/app/app/Modules/Admin/views/Campanhas/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 134,  271 => 131,  268 => 130,  258 => 123,  246 => 113,  237 => 110,  233 => 109,  229 => 108,  225 => 107,  221 => 106,  217 => 105,  213 => 104,  209 => 103,  205 => 102,  201 => 101,  198 => 100,  194 => 99,  153 => 60,  145 => 57,  138 => 56,  132 => 55,  128 => 54,  124 => 53,  120 => 52,  117 => 51,  113 => 49,  109 => 48,  105 => 47,  101 => 46,  97 => 45,  93 => 44,  89 => 43,  85 => 42,  81 => 41,  77 => 40,  74 => 39,  70 => 38,  64 => 34,  37 => 8,  34 => 7,  30 => 1,  28 => 5,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/Campanhas/index.twig", "");
    }
}

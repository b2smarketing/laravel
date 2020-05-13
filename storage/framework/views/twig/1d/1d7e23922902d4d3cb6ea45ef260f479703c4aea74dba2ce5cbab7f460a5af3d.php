<?php

/* /var/www/app/app/Modules/Admin/views/Campanhas/view.twig */
class __TwigTemplate_1ecceb520ea7769918b7420fe53c857ee0c093410cdf97b090d9978fb52f8da1 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::layout", "/var/www/app/app/Modules/Admin/views/Campanhas/view.twig", 1);
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
        $context["form"] = $this->loadTemplate("Admin::helpers.form_campanha", "/var/www/app/app/Modules/Admin/views/Campanhas/view.twig", 3);
        // line 5
        $context["title"] = $this->getAttribute(($context["campanha"] ?? null), "nome", array());
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
      <div class=\"col-md-12 col-sm-12 col-xs-12\">
        <div style=\"padding: 1em 0em\">
          <a href=\"/campanhas/";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["campanha"] ?? null), "id", array()), "html", null, true);
        echo "/edit\"><i class=\"fa fa-edit\"></i> Editar</a>
        </div>
      </div>
    </div>

    <div class=\"row\">
      
      <!-- Editar Campanha -->
      <div class=\"col-md-12 col-sm-12 col-xs-12\">
        <div class=\"x_panel\">
          <div class=\"x_title\">
            <h2>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["campanha"] ?? null), "nome", array()), "html", null, true);
        echo "</h2>
            <div class=\"clearfix\"></div>
          </div>
          <div class=\"x_content\">
            <div class=\"row\">
              <div class=\"col-md-6 col-sm-12 com-xs-12\">
                <label for=\"id\">ID :</label>
                <div>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["campanha"] ?? null), "id", array()), "html", null, true);
        echo "</div>
                <br />
              </div>
              <div class=\"col-md-6 col-sm-12 com-xs-12\">
                <label for=\"id\">Campanha Principal :</label>
                <div>";
        // line 37
        if ($this->getAttribute(($context["campanha"] ?? null), "parent", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["campanha"] ?? null), "parent", array()), "nome", array()), "html", null, true);
        }
        echo "</div>
                <br />
              </div>
              <div class=\"col-md-12 col-sm-12 com-xs-12\">
                <label for=\"nome\">Nome :</label>
                <div>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["campanha"] ?? null), "nome", array()), "html", null, true);
        echo "</div>
                <br />
              </div>

              <div class=\"col-md-3 col-sm-12 com-xs-12\">
                <label for=\"budget\">Budget :</label>
                <div>R\$ ";
        // line 48
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["campanha"] ?? null), "budget", array()), 2, ",", "."), "html", null, true);
        echo "</div>
              </div>

              <div class=\"col-md-3 col-sm-12 com-xs-12\">
                <label for=\"budget\">Budget Consumido :</label>
                <div>R\$ ";
        // line 53
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["campanha"] ?? null), "budget_consumido", array()), 2, ",", "."), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((100 * $this->getAttribute(($context["campanha"] ?? null), "budget_consumido", array())) / $this->getAttribute(($context["campanha"] ?? null), "budget", array())), 2, ",", "."), "html", null, true);
        echo "%)</div>
              </div>

              <div class=\"col-md-2 col-sm-12 com-xs-12\">
                <label for=\"data_inicio\">Data de Início :</label>
                <div>";
        // line 58
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["campanha"] ?? null), "inicio", array()), "d/m/Y"), "html", null, true);
        echo "</div>
              </div>

              <div class=\"col-md-2 col-sm-12 com-xs-12\">
                <label for=\"data_fim\">Data de Término :</label>
                <div>";
        // line 63
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["campanha"] ?? null), "fim", array()), "d/m/Y"), "html", null, true);
        echo "</div>
              </div>

              <div class=\"col-md-2 col-sm-12 com-xs-12\">
                <label>Status:</label>
                <div>";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute(($context["campanha"] ?? null), "status", array()), "html", null, true);
        echo "</div>
              </div>
            </div>
            <br />


            <div class=\"row\">
              <div class=\"col-md-6 col-sm-6 com-xs-6\">
                <div class=\"progress\" title=\"Budget: ";
        // line 76
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((100 * $this->getAttribute(($context["campanha"] ?? null), "budget_consumido", array())) / $this->getAttribute(($context["campanha"] ?? null), "budget", array())), 2, ",", "."), "html", null, true);
        echo "%\">
                  <div class=\"progress-bar progress-bar-info\" data-transitiongoal=\"";
        // line 77
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((100 * $this->getAttribute(($context["campanha"] ?? null), "budget_consumido", array())) / $this->getAttribute(($context["campanha"] ?? null), "budget", array())), 0), "html", null, true);
        echo "\"></div>
                </div>
              </div>
              <div class=\"col-md-6 col-sm-6 com-xs-6\">
                <div class=\"progress\" title=\"Progresso da Campanha: ";
        // line 81
        echo twig_escape_filter($this->env, ($context["campanha_progresso"] ?? null), "html", null, true);
        echo "%\">
                  <div class=\"progress-bar progress-bar-success\" data-transitiongoal=\"";
        // line 82
        echo twig_escape_filter($this->env, ($context["campanha_progresso"] ?? null), "html", null, true);
        echo "\"></div>
                </div>
              </div>
            </div>

            <br />
            <a class=\"btn btn-primary\" href=\"/campanhas/";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute(($context["campanha"] ?? null), "id", array()), "html", null, true);
        echo "/edit\">Editar</a>
          </div>
        </div>
      </div>
    </div>
    <div class=\"row\">
      
      <!-- Editar Cursos -->
      <div class=\"col-md-12 col-sm-12 col-xs-12\">
        <div class=\"x_panel\">
          <div class=\"x_title\">
            <h2>Cursos</h2>
            <div class=\"clearfix\"></div>
          </div>
          <div class=\"x_content\">
            
            <table class=\"table table-striped\">
              <thead>
                <tr>
                  <th>Cód.</th>
                  <th>Nome</th>
                  <th>Vagas</th>
                  <th>Leads</th>
                  <th>Inscritos</th>
                  <th>Matriculados</th>
                  <th>Tx. Conv.</th>
                  <th>Tx. Aprov.</th>
                </tr>
              </thead>
              <tbody>
              ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["campanha"] ?? null), "cursos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
            // line 119
            echo "              ";
            $context["total_leads"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["campanha"] ?? null), "leads_total", array(), "method"), "porCurso", array(0 => $this->getAttribute($context["curso"], "id", array())), "method"), "get", array(), "method"), "count", array(), "method");
            // line 120
            echo "              ";
            $context["total_inscritos"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["campanha"] ?? null), "inscritos_total_unique", array(), "method"), "porCurso", array(0 => $this->getAttribute($context["curso"], "id", array())), "method"), "get", array(), "method"), "count", array(), "method");
            // line 121
            echo "              ";
            $context["total_matriculados"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["campanha"] ?? null), "matriculados_total_unique", array(), "method"), "porCurso", array(0 => $this->getAttribute($context["curso"], "id", array())), "method"), "get", array(), "method"), "count", array(), "method");
            // line 122
            echo "                <tr>
                  <th scope=\"row\">";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "codigo", array()), "html", null, true);
            echo "</th>
                  <td>";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "nome", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "vagas", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 126
            echo twig_escape_filter($this->env, ($context["total_leads"] ?? null), "html", null, true);
            echo "</td>
                  <td>";
            // line 127
            echo twig_escape_filter($this->env, ($context["total_inscritos"] ?? null), "html", null, true);
            echo "</td>
                  <td>";
            // line 128
            echo twig_escape_filter($this->env, ($context["total_matriculados"] ?? null), "html", null, true);
            echo "</td>
                  <td>";
            // line 129
            if ((($context["total_leads"] ?? null) > 0)) {
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((100 * ($context["total_inscritos"] ?? null)) / ($context["total_leads"] ?? null)), 2, ",", "."), "html", null, true);
                echo "%";
            } else {
                echo "-";
            }
            echo "</td>
                  <td>";
            // line 130
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((100 * ($context["total_matriculados"] ?? null)) / $this->getAttribute($context["curso"], "vagas", array())), 2, ",", "."), "html", null, true);
            echo "%</td>
                </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "              </tbody>
            </table>
            
          </div>
        </div>
      </div>

      <div class=\"clearfix\"></div>
    </div>

  </div>
</div>

";
    }

    // line 148
    public function block_scripts($context, array $blocks = array())
    {
        // line 149
        echo "<script>

\$('table').DataTable({
  title: '";
        // line 152
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
        return "/var/www/app/app/Modules/Admin/views/Campanhas/view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 152,  276 => 149,  273 => 148,  256 => 133,  247 => 130,  238 => 129,  234 => 128,  230 => 127,  226 => 126,  222 => 125,  218 => 124,  214 => 123,  211 => 122,  208 => 121,  205 => 120,  202 => 119,  198 => 118,  165 => 88,  156 => 82,  152 => 81,  145 => 77,  141 => 76,  130 => 68,  122 => 63,  114 => 58,  104 => 53,  96 => 48,  87 => 42,  77 => 37,  69 => 32,  59 => 25,  45 => 14,  37 => 8,  34 => 7,  30 => 1,  28 => 5,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/Campanhas/view.twig", "");
    }
}

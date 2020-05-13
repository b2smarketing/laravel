<?php

/* C:\xampp\htdocs\vestibularfam\app\Modules\Admin\views/Campanhas/index.twig */
class __TwigTemplate_4cdd043a5005a87c8e1310f587b9a741ac576420fcc91acc27baa93b5a3cf9de extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::layout", "C:\\xampp\\htdocs\\vestibularfam\\app\\Modules\\Admin\\views/Campanhas/index.twig", 1);
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
        $context["form"] = $this->loadTemplate("Admin::helpers.form_campanha", "C:\\xampp\\htdocs\\vestibularfam\\app\\Modules\\Admin\\views/Campanhas/index.twig", 3);
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
                  ";
        // line 30
        echo "                  <div class=\"clearfix\"></div>
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
        // line 48
        echo "                        <th class=\"all\"></th>
                      </tr>
                    </thead>
                    <tbody>
                  ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["campanhas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["campanha"]) {
            // line 53
            echo "                      <tr>
                        <th scope=\"row\">";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["campanha"], "id", array()), "html", null, true);
            echo "</th>
                        <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["campanha"], "nome", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["campanha"], "inicio", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                        <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["campanha"], "fim", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                        <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["campanha"], "status", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["campanha"], "leads", array()), "count", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["campanha"], "inscritos", array()), "count", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["campanha"], "matriculados", array()), "count", array()), "html", null, true);
            echo "</td>
                        <td>R\$ ";
            // line 62
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["campanha"], "budget", array()), 2, ",", "."), "html", null, true);
            echo "</td>
                        <td>R\$ ";
            // line 63
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["campanha"], "budget_consumido", array()), 2, ",", "."), "html", null, true);
            echo "</td>
                        ";
            // line 65
            echo "                        <td>
                          <a href=\"/campanhas/";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["campanha"], "id", array()), "html", null, true);
            echo "/\" title=\"Visualizar\"><i class=\"fa fa-eye\"></i></a>
                        \t<a target=\"_blank\" href=\"/dashboard/";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["campanha"], "id", array()), "html", null, true);
            echo "/\" title=\"Visualizar no Dashboard\"><i class=\"fa fa-dashboard\"></i></a>
                          <a href=\"/campanhas/";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["campanha"], "id", array()), "html", null, true);
            echo "/edit\" title=\"Editar\"><i class=\"fa fa-edit\"></i></a>
                        \t";
            // line 69
            if (($this->getAttribute($this->getAttribute($context["campanha"], "leads_total", array(), "method"), "count", array(), "method") > 0)) {
                echo "<a href=\"/campanhas/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["campanha"], "id", array()), "html", null, true);
                echo "/leads/csv\" title=\"Exportar como CSV\"><i class=\"fa fa-download\"></i></a>";
            }
            // line 70
            echo "                        \t";
            if (($this->getAttribute($this->getAttribute($context["campanha"], "leads_total", array(), "method"), "count", array(), "method") > 0)) {
                echo "<a href=\"/campanhas/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["campanha"], "id", array()), "html", null, true);
                echo "/leads/zipzop\" title=\"Exportar como Contatos do WhatsApp\"><i class=\"fa fa-whatsapp\"></i></a>";
            }
            // line 71
            echo "                        </td>
                      </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['campanha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
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
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["campanhas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["campanha"]) {
            // line 114
            echo "                      <tr>
                        <th scope=\"row\">";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($context["campanha"], "id", array()), "html", null, true);
            echo "</th>
                        <td>";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($context["campanha"], "nome", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["campanha"], "status", array()), "html", null, true);
            echo "</td>
                        <td>R\$ ";
            // line 118
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["campanha"], "projecoes", array()), "leads", array()), 2, ",", "."), "html", null, true);
            echo "</td>
                        <td>R\$ ";
            // line 119
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["campanha"], "projecoes", array()), "inscritos", array()), 2, ",", "."), "html", null, true);
            echo "</td>
                        <td>R\$ ";
            // line 120
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["campanha"], "projecoes", array()), "matriculados", array()), 2, ",", "."), "html", null, true);
            echo "</td>
                        <td>R\$ ";
            // line 121
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["campanha"], "projecoes", array()), "cursos", array()), 2, ",", "."), "html", null, true);
            echo "</td>
                        <td>R\$ ";
            // line 122
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["campanha"], "custo", array()), "lead", array()), 2, ",", "."), "html", null, true);
            echo "</td>
                        <td>R\$ ";
            // line 123
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["campanha"], "custo", array()), "inscrito", array()), 2, ",", "."), "html", null, true);
            echo "</td>
                        <td>R\$ ";
            // line 124
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["campanha"], "custo", array()), "matricula", array()), 2, ",", "."), "html", null, true);
            echo "</td>
                      </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['campanha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "                    </tbody>
                  </table>

                </div>
              </div>
            </div>

            <div class=\"clearfix\"></div>
        </div>

        ";
        // line 137
        echo $context["form"]->geteditar_campanha(null, ($context["cursos"] ?? null));
        echo "

    </div>
</div>

";
    }

    // line 144
    public function block_scripts($context, array $blocks = array())
    {
        // line 145
        echo "<script>

\$('table').DataTable({
  title: '";
        // line 148
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
        return "C:\\xampp\\htdocs\\vestibularfam\\app\\Modules\\Admin\\views/Campanhas/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 148,  272 => 145,  269 => 144,  259 => 137,  247 => 127,  238 => 124,  234 => 123,  230 => 122,  226 => 121,  222 => 120,  218 => 119,  214 => 118,  210 => 117,  206 => 116,  202 => 115,  199 => 114,  195 => 113,  154 => 74,  146 => 71,  139 => 70,  133 => 69,  129 => 68,  125 => 67,  121 => 66,  118 => 65,  114 => 63,  110 => 62,  106 => 61,  102 => 60,  98 => 59,  94 => 58,  90 => 57,  86 => 56,  82 => 55,  78 => 54,  75 => 53,  71 => 52,  65 => 48,  46 => 30,  37 => 8,  34 => 7,  30 => 1,  28 => 5,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends ('Admin::layout') %}

{% import 'Admin::helpers.form_campanha' as form %}

{% set title = 'Campanhas' %}

{% block content %}
<div class=\"right_col\" role=\"main\">
\t<div class=\"\">
\t\t<div class=\"row\">
          <div class=\"col-md-12 col-sm-12 col-xs-12\">
              <div class=\"x_panel\">
                <div class=\"x_title\">
                  <h2>Campanhas</h2>
                  {#<ul class=\"nav navbar-right panel_toolbox\">
                    <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                    </li>
                    <li class=\"dropdown\">
                      <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-wrench\"></i></a>
                      <ul class=\"dropdown-menu\" role=\"menu\">
                        <li><a href=\"#\">Settings 1</a>
                        </li>
                        <li><a href=\"#\">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                    </li>
                  </ul>#}
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
                        {# <th>Proj. Retorno*</th> #}
                        <th class=\"all\"></th>
                      </tr>
                    </thead>
                    <tbody>
                  {% for campanha in campanhas %}
                      <tr>
                        <th scope=\"row\">{{ campanha.id }}</th>
                        <td>{{ campanha.nome }}</td>
                        <td>{{ campanha.inicio|date('d/m/Y') }}</td>
                        <td>{{ campanha.fim|date('d/m/Y') }}</td>
                        <td>{{ campanha.status }}</td>
                        <td>{{ campanha.leads.count }}</td>
                        <td>{{ campanha.inscritos.count }}</td>
                        <td>{{ campanha.matriculados.count }}</td>
                        <td>R\$ {{ campanha.budget|number_format(2, ',', '.') }}</td>
                        <td>R\$ {{ campanha.budget_consumido|number_format(2, ',', '.') }}</td>
                        {# <td>R\$ {{ campanha.projecoes.matriculados|number_format(2, ',', '.') }}</td> #}
                        <td>
                          <a href=\"/campanhas/{{ campanha.id }}/\" title=\"Visualizar\"><i class=\"fa fa-eye\"></i></a>
                        \t<a target=\"_blank\" href=\"/dashboard/{{ campanha.id }}/\" title=\"Visualizar no Dashboard\"><i class=\"fa fa-dashboard\"></i></a>
                          <a href=\"/campanhas/{{ campanha.id }}/edit\" title=\"Editar\"><i class=\"fa fa-edit\"></i></a>
                        \t{% if campanha.leads_total().count() > 0 %}<a href=\"/campanhas/{{ campanha.id }}/leads/csv\" title=\"Exportar como CSV\"><i class=\"fa fa-download\"></i></a>{% endif %}
                        \t{% if campanha.leads_total().count() > 0 %}<a href=\"/campanhas/{{ campanha.id }}/leads/zipzop\" title=\"Exportar como Contatos do WhatsApp\"><i class=\"fa fa-whatsapp\"></i></a>{% endif %}
                        </td>
                      </tr>
                  {% endfor %}
                    </tbody>
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
                  {% for campanha in campanhas %}
                      <tr>
                        <th scope=\"row\">{{ campanha.id }}</th>
                        <td>{{ campanha.nome }}</td>
                        <td>{{ campanha.status }}</td>
                        <td>R\$ {{ campanha.projecoes.leads|number_format(2, ',', '.') }}</td>
                        <td>R\$ {{ campanha.projecoes.inscritos|number_format(2, ',', '.') }}</td>
                        <td>R\$ {{ campanha.projecoes.matriculados|number_format(2, ',', '.') }}</td>
                        <td>R\$ {{ campanha.projecoes.cursos|number_format(2, ',', '.') }}</td>
                        <td>R\$ {{ campanha.custo.lead|number_format(2, ',', '.') }}</td>
                        <td>R\$ {{ campanha.custo.inscrito|number_format(2, ',', '.') }}</td>
                        <td>R\$ {{ campanha.custo.matricula|number_format(2, ',', '.') }}</td>
                      </tr>
                  {% endfor %}
                    </tbody>
                  </table>

                </div>
              </div>
            </div>

            <div class=\"clearfix\"></div>
        </div>

        {{ form.editar_campanha (null, cursos) }}

    </div>
</div>

{% endblock %}

{% block scripts %}
<script>

\$('table').DataTable({
  title: '{{ campanha.nome }}',
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
{% endblock %}", "C:\\xampp\\htdocs\\vestibularfam\\app\\Modules\\Admin\\views/Campanhas/index.twig", "");
    }
}

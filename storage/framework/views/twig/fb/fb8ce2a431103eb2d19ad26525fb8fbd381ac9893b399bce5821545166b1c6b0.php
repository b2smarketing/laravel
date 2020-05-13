<?php

/* /var/www/app/app/Modules/Admin/views/Provas/Datas/index.twig */
class __TwigTemplate_cf1177770a9253d8ab8367ba63288602137720be49fbedabb97c3681079594cf extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::layout", "/var/www/app/app/Modules/Admin/views/Provas/Datas/index.twig", 1);
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
        $context["form"] = $this->loadTemplate("Admin::helpers.form_prova", "/var/www/app/app/Modules/Admin/views/Provas/Datas/index.twig", 3);
        // line 5
        $context["title"] = "Datas de Prova";
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
        echo $context["form"]->getcalendario_provas();
        echo "

        ";
        // line 14
        echo $context["form"]->geteditar_datas_provas(null, ($context["unidades"] ?? null));
        echo "
      </div>
      
\t\t<div class=\"row\">
          <div class=\"col-md-12 col-sm-12 col-xs-12\">
              <div class=\"x_panel\">
                <div class=\"x_title\">
                  <h2>Datas de Prova</h2>
                  <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">

                  <table class=\"table table-striped\" id=\"tabela_datas\">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Data</th>
                        <th>Local</th>
                        <th>Unidade</th>
                        <th>Provas</th>
                        <th>Limite</th>
                        <th>Restantes</th>
                        <th>Aproveitamento</th>
                        <th>Status</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                  ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["datas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 43
            echo "                      <tr class=\"";
            if ($this->getAttribute($context["data"], "lotado", array())) {
                echo "info";
            } else {
                if (($this->getAttribute($context["data"], "vagas_ocupadas", array()) < ($this->getAttribute($context["data"], "maximo", array()) / 10))) {
                    echo "warning";
                } else {
                    echo "success";
                }
            }
            echo "\">
                        <th scope=\"row\">";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "</th>
                        <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "hora", array()), "d/m/Y H:i"), "html", null, true);
            if ($this->getAttribute($context["data"], "hora_final", array())) {
                echo " - ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "hora_final", array()), "H:i"), "html", null, true);
            }
            echo "</td>
                        <td><a target=\"_blank\" href=\"/provas/locais/";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "local", array()), "id", array()), "html", null, true);
            echo "/\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "local", array()), "local", array()), "html", null, true);
            echo "</a></td>
                        <td><a target=\"_blank\" href=\"/unidades/";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["data"], "local", array()), "unidade", array()), "id", array()), "html", null, true);
            echo "/\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["data"], "local", array()), "unidade", array()), "nome", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "vagas_ocupadas", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "maximo", array()), "html", null, true);
            if ($this->getAttribute($context["data"], "tem_vagas", array())) {
            }
            echo "</td>
                        <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "vagas", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "aproveitamento", array()), "html", null, true);
            echo "%</td>
                        <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "status", array()), "html", null, true);
            echo "</td>
                        <td>
                        \t<a href=\"/provas/datas/";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "/\" title=\"Visualizar\"><i class=\"fa fa-eye\"></i></a>
                        \t<a href=\"/provas/datas/";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "/edit\" title=\"Editar\"><i class=\"fa fa-edit\"></i></a>
                        </td>
                      </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                    </tbody>
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

    // line 73
    public function block_scripts($context, array $blocks = array())
    {
        // line 74
        echo "<!-- FullCalendar -->
<script>
  \$(window).load(function() {
    var date = new Date(),
        d = date.getDate(),
        m = date.getMonth(),
        y = date.getFullYear(),
        started,
        categoryClass;

    var data_fix = function (Y, m, d, H, i) {
    \tm--;
    \treturn new Date(Y,m,d,H,i);
    }

    var calendar = \$('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      selectable: true,
      selectHelper: true,
      select: function(start, end, allDay) {
        \$('#fc_create').click();

        started = start;
        ended = end;

        \$(\".antosubmit\").on(\"click\", function() {
          var title = \$(\"#title\").val();
          if (end) {
            ended = end;
          }

          categoryClass = \$(\"#event_type\").val();

          if (title) {
            calendar.fullCalendar('renderEvent', {
                title: title,
                start: started,
                end: end,
                allDay: allDay
              },
              true // make the event \"stick\"
            );
          }

          \$('#title').val('');

          calendar.fullCalendar('unselect');

          \$('.antoclose').click();

          return false;
        });
      },
      eventClick: function(calEvent, jsEvent, view) {
        document.location.href = '/provas/datas/' + calEvent.dados.id + '/';
      },
      events: [
      ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["datas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 136
            echo "      {
      \ttitle: '";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "local", array()), "local", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "status", array()), "html", null, true);
            echo "',
      \tstart: data_fix(";
            // line 138
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "hora", array()), "Y,m,d,H,i"), "html", null, true);
            echo "),
      \tend: data_fix(";
            // line 139
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "hora", array()), "Y,m,d"), "html", null, true);
            echo ", ";
            if ($this->getAttribute($context["data"], "hora_final", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "hora_final", array()), "H"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, $this->getAttribute($context["data"], "hora", array()), "H") + 1), "html", null, true);
            }
            echo ", ";
            if ($this->getAttribute($context["data"], "hora_final", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "hora_final", array()), "i"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "hora", array()), "i"), "html", null, true);
            }
            echo "),
      \tdados: ";
            // line 140
            echo twig_jsonencode_filter($context["data"]);
            echo ",
      \t";
            // line 141
            if ($this->getAttribute($context["data"], "lotado", array())) {
                echo "color: '#ff0000'";
            }
            // line 142
            echo "      },
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "      ]
    });
  });

  \$('#tabela_datas').DataTable( {
    responsive: true
  });
</script>
<!-- /FullCalendar -->
";
    }

    public function getTemplateName()
    {
        return "/var/www/app/app/Modules/Admin/views/Provas/Datas/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 144,  280 => 142,  276 => 141,  272 => 140,  256 => 139,  252 => 138,  246 => 137,  243 => 136,  239 => 135,  176 => 74,  173 => 73,  157 => 59,  147 => 55,  143 => 54,  138 => 52,  134 => 51,  130 => 50,  124 => 49,  120 => 48,  114 => 47,  108 => 46,  100 => 45,  96 => 44,  83 => 43,  79 => 42,  48 => 14,  43 => 12,  37 => 8,  34 => 7,  30 => 1,  28 => 5,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/Provas/Datas/index.twig", "");
    }
}

<?php

/* C:\xampp\htdocs\laravel\app\Modules\Admin\views/dashboard.twig */
class __TwigTemplate_c72645f05fcdcf24408767900decef566ca45482a8a7a984c05dd4a90bb56dc7 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::layout", "C:\\xampp\\htdocs\\laravel\\app\\Modules\\Admin\\views/dashboard.twig", 1);
        $this->blocks = array(
            'scripts' => array($this, 'block_scripts'),
            'top_bar' => array($this, 'block_top_bar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Admin::layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_scripts($context, array $blocks = array())
    {
        // line 4
        echo "    <!-- jQuery Sparklines -->
    <script>
      \$(document).ready(function() {

      \tvar tipos_spark = {
      \t\tbar: {
\t          type: 'bar',
\t          height: '40',
\t          barWidth: 9,
\t          colorMap: {
\t            '7': '#a1a1a1'
\t          },
\t          barSpacing: 2,
\t          barColor: '#26B99A'
\t        },
\t        line: {
          \t  type: 'line',
\t          width: '200',
\t          height: '40',
\t          lineColor: '#26B99A',
\t          fillColor: 'rgba(223, 223, 223, 0.57)',
\t          lineWidth: 2,
\t          spotColor: '#26B99A',
\t          minSpotColor: '#26B99A'
\t        }
      \t}

      \t\$('.grafico_spark').each(function () {
      \t\tvar dados = \$(this).data('dados');
      \t\tvar tipo = \$(this).data('tipo');
          var color = \$(this).data('color');

          var grf = tipos_spark[tipo];

          if (color) {
            grf.barColor = grf.lineColor = grf.spotColor = grf.minSpotColor = color;
          }

      \t\t\$(this).sparkline(dados, grf);
      \t});
      });
    </script>
    <!-- /jQuery Sparklines -->
    <!-- bootstrap-daterangepicker -->
    <script type=\"text/javascript\">
      \$(document).ready(function() {

        var cb = function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
          \$('#reportrange span').html(start.format('DD/MM/YYYY') + ' - ' + end.format('DD/MM/YYYY'));
        };

        var optionSet1 = {
          startDate: moment().subtract(29, 'days'),
          endDate: moment(),
          minDate: moment('";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dados"] ?? null), "data_min", array()), "html", null, true);
        echo "', 'YYYY-MM-DD'),
          maxDate: moment('";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dados"] ?? null), "data_max", array()), "html", null, true);
        echo "', 'YYYY-MM-DD'),
          dateLimit: {
            days: 60
          },
          showDropdowns: true,
          showWeekNumbers: true,
          timePicker: false,
          timePickerIncrement: 1,
          timePicker12Hour: false,
          ranges: {
            'Campanha': [moment('";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dados"] ?? null), "data_min", array()), "html", null, true);
        echo "', 'YYYY-MM-DD'), moment('";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dados"] ?? null), "data_max", array()), "html", null, true);
        echo "', 'YYYY-MM-DD')],
            'Esta Semana': [moment().startOf('week'), moment().endOf('week')],
            'Ultimos 7 Dias': [moment().subtract(6, 'days'), moment()],
            'Ultimos 30 Dias': [moment().subtract(29, 'days'), moment()],
            'Este Mes': [moment().startOf('month'), moment().endOf('month')],
            'Ultimo Mes': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          opens: 'left',
          buttonClasses: ['btn btn-default'],
          applyClass: 'btn-small btn-primary',
          cancelClass: 'btn-small',
          format: 'DD/MM/YYYY',
          separator: ' to ',
          locale: {
            applyLabel: 'Submit',
            cancelLabel: 'Clear',
            fromLabel: 'From',
            toLabel: 'To',
            customRangeLabel: 'Custom',
            daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            firstDay: 1
          }
        };
        \$('#reportrange span').html(moment().subtract(29, 'days').format('DD/MM/YYYY') + ' - ' + moment().format('DD/MM/YYYY'));
        var picker = \$('#reportrange').daterangepicker(optionSet1, cb);
        \$('#reportrange').on('show.daterangepicker', function() {
          console.log(\"show event fired\");
        });
        \$('#reportrange').on('hide.daterangepicker', function() {
          console.log(\"hide event fired\");
        });
        \$('#reportrange').on('apply.daterangepicker', function(ev, picker) {
          console.log(picker.startDate);
          console.log(picker.endDate);

          var update = {
            time: {
              start: picker.startDate,
              end: picker.endDate
            }
          };
          charts_update (update);

          console.log(\"apply event fired, start/end dates are \" + picker.startDate.format('MMMM D, YYYY') + \" to \" + picker.endDate.format('MMMM D, YYYY'));
        });
        \$('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
          console.log(\"cancel event fired\");
        });
        \$('#options1').click(function() {
          \$('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
        });
        \$('#options2').click(function() {
          \$('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
        });
        \$('#destroy').click(function() {
          \$('#reportrange').data('daterangepicker').remove();
        });

        var update = {
          time: {
            start: moment().subtract(29, 'days'),
            end: moment()
          }
        };
        charts_update (update);
      });
    </script>
    <!-- /bootstrap-daterangepicker -->
";
    }

    // line 141
    public function block_top_bar($context, array $blocks = array())
    {
        // line 142
        echo "                <li role=\"presentation\" class=\"dropdown\">
                  <a href=\"javascript:;\" class=\"dropdown-toggle info-text\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                    ";
        // line 145
        echo "                    <span class=\"badge bg-red\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["dados"] ?? null), "campanha_atual", array()), "nome", array()), "html", null, true);
        echo "</span>
                  </a>
                  <ul id=\"menu1\" class=\"dropdown-menu list-unstyled msg_list\" role=\"menu\">
                ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["dados"] ?? null), "campanhas", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["campanha"]) {
            // line 149
            echo "                ";
            if ($this->getAttribute($context["campanha"], "is_ativa", array())) {
                // line 150
                echo "                    <li>
                      <a href=\"/dashboard/";
                // line 151
                echo twig_escape_filter($this->env, $this->getAttribute($context["campanha"], "id", array()), "html", null, true);
                echo "\">
                        <span>
                          <span>";
                // line 153
                echo twig_escape_filter($this->env, $this->getAttribute($context["campanha"], "nome", array()), "html", null, true);
                echo "</span>
                          <span class=\"time\">";
                // line 154
                echo twig_escape_filter($this->env, $this->getAttribute($context["campanha"], "status", array()), "html", null, true);
                echo "</span>
                        </span>
                        ";
                // line 166
                echo "                      </a>
                    </li>
                ";
            }
            // line 169
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['campanha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "                    <li>
                      <div class=\"text-center\">
                        <a href=\"/campanhas/\">
                          <strong>Ver Todas Campanhas</strong>
                          <i class=\"fa fa-angle-right\"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>

                <li role=\"presentation\">
                  <div id=\"reportrange\" class=\"pull-right\" style=\"background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc;margin:1em 0em;\">
                    <i class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i>
                    <span>Carregando...</span> <b class=\"caret\"></b>
                  </div>
                </li>
";
    }

    // line 189
    public function block_content($context, array $blocks = array())
    {
        // line 190
        echo "        <div class=\"right_col\" role=\"main\">
          <div class=\"\">
            <div class=\"row top_tiles\" style=\"margin: 10px 0;\">
              <div class=\"col-md-3 col-sm-3 col-xs-6 tile\">
                <span>Leads</span>
                <h2>";
        // line 195
        echo twig_escape_filter($this->env, $this->getAttribute(($context["total"] ?? null), "leads", array()), "html", null, true);
        echo "</h2>
              </div>
              <div class=\"col-md-3 col-sm-3 col-xs-6 tile\">
                <span>Provas Pendentes</span>
                <h2>";
        // line 199
        echo twig_escape_filter($this->env, $this->getAttribute(($context["total"] ?? null), "provas", array()), "html", null, true);
        echo "</h2>
              </div>
              <div class=\"col-md-3 col-sm-3 col-xs-6 tile\">
                <span>Aprovados Não-Matriculados</span>
                <h2>";
        // line 203
        echo twig_escape_filter($this->env, $this->getAttribute(($context["total"] ?? null), "aprovados", array()), "html", null, true);
        echo "</h2>
              </div>
              <div class=\"col-md-3 col-sm-3 col-xs-6 tile\">
                <span>Ausentes</span>
                <h2>";
        // line 207
        echo twig_escape_filter($this->env, $this->getAttribute(($context["total"] ?? null), "ausentes", array()), "html", null, true);
        echo "</h2>
              </div>
            </div>
            <br />
            <div class=\"row top_tiles\" style=\"margin: 10px 0;\">
              <div class=\"col-md-3 col-sm-3 col-xs-6 tile\">
                <span>Total de Candidatos</span>
                <h2>";
        // line 214
        echo twig_escape_filter($this->env, $this->getAttribute(($context["total"] ?? null), "candidatos", array()), "html", null, true);
        echo "</h2>
                <span class=\"sparkline_one grafico_spark\" style=\"height: 160px;\" data-tipo=\"bar\" data-dados=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('App\TwigExtended')->array2js($this->getAttribute(($context["recentes"] ?? null), "leads", array())), "html", null, true);
        echo "\" data-color=\"#9b59b6\">
                      <canvas width=\"200\" height=\"60\" style=\"display: inline-block; vertical-align: top; width: 94px; height: 30px;\"></canvas>
                  </span>
              </div>
              <div class=\"col-md-3 col-sm-3 col-xs-6 tile\">
                <span>Total de Inscritos</span>
                <h2>";
        // line 221
        echo twig_escape_filter($this->env, $this->getAttribute(($context["total"] ?? null), "inscritos", array()), "html", null, true);
        echo "</h2>
                <span class=\"sparkline_one grafico_spark\" style=\"height: 160px;\" data-tipo=\"bar\" data-dados=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('App\TwigExtended')->array2js($this->getAttribute(($context["recentes"] ?? null), "inscritos", array())), "html", null, true);
        echo "\" data-color=\"#26B99A\">
                      <canvas width=\"200\" height=\"60\" style=\"display: inline-block; vertical-align: top; width: 94px; height: 30px;\"></canvas>
                  </span>
              </div>
              <div class=\"col-md-3 col-sm-3 col-xs-6 tile\">
                <span>Total de Matriculados</span>
                <h2>";
        // line 228
        echo twig_escape_filter($this->env, $this->getAttribute(($context["total"] ?? null), "matriculados", array()), "html", null, true);
        echo "</h2>
                <span class=\"sparkline_one grafico_spark\" style=\"height: 160px;\" data-tipo=\"bar\" data-dados=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('App\TwigExtended')->array2js($this->getAttribute(($context["recentes"] ?? null), "matriculados", array())), "html", null, true);
        echo "\" data-color=\"#0b2f7f\">
                      <canvas width=\"200\" height=\"60\" style=\"display: inline-block; vertical-align: top; width: 94px; height: 30px;\"></canvas>
                  </span>
              </div>
              <div class=\"col-md-3 col-sm-3 col-xs-6 tile\">
                <span>Taxa de Convers&atilde;o</span>
                <h2>";
        // line 235
        echo twig_escape_filter($this->env, $this->getAttribute(($context["total"] ?? null), "conversao", array()), "html", null, true);
        echo "%</h2>
                <span class=\"sparkline_two grafico_spark\" style=\"height: 160px;\" data-tipo=\"line\" data-dados=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('App\TwigExtended')->array2js($this->getAttribute(($context["recentes"] ?? null), "conversao", array())), "html", null, true);
        echo "\">
                      <canvas width=\"200\" height=\"60\" style=\"display: inline-block; vertical-align: top; width: 94px; height: 30px;\"></canvas>
                  </span>
              </div>
            </div>
            <br />
            
            <div class=\"row\">
              <div class=\"col-md-12\">
                ";
        // line 245
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["graficos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["grafico"]) {
            // line 246
            echo "                ";
            echo $this->getAttribute($context["grafico"], "render", array());
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grafico'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 248
        echo "              </div>
            </div>

            ";
        // line 267
        echo "

            ";
        // line 768
        echo "          </div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\laravel\\app\\Modules\\Admin\\views/dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  371 => 768,  367 => 267,  362 => 248,  353 => 246,  349 => 245,  337 => 236,  333 => 235,  324 => 229,  320 => 228,  311 => 222,  307 => 221,  298 => 215,  294 => 214,  284 => 207,  277 => 203,  270 => 199,  263 => 195,  256 => 190,  253 => 189,  232 => 170,  226 => 169,  221 => 166,  216 => 154,  212 => 153,  207 => 151,  204 => 150,  201 => 149,  197 => 148,  190 => 145,  186 => 142,  183 => 141,  107 => 70,  94 => 60,  90 => 59,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Admin::layout' %}

{% block scripts %}
    <!-- jQuery Sparklines -->
    <script>
      \$(document).ready(function() {

      \tvar tipos_spark = {
      \t\tbar: {
\t          type: 'bar',
\t          height: '40',
\t          barWidth: 9,
\t          colorMap: {
\t            '7': '#a1a1a1'
\t          },
\t          barSpacing: 2,
\t          barColor: '#26B99A'
\t        },
\t        line: {
          \t  type: 'line',
\t          width: '200',
\t          height: '40',
\t          lineColor: '#26B99A',
\t          fillColor: 'rgba(223, 223, 223, 0.57)',
\t          lineWidth: 2,
\t          spotColor: '#26B99A',
\t          minSpotColor: '#26B99A'
\t        }
      \t}

      \t\$('.grafico_spark').each(function () {
      \t\tvar dados = \$(this).data('dados');
      \t\tvar tipo = \$(this).data('tipo');
          var color = \$(this).data('color');

          var grf = tipos_spark[tipo];

          if (color) {
            grf.barColor = grf.lineColor = grf.spotColor = grf.minSpotColor = color;
          }

      \t\t\$(this).sparkline(dados, grf);
      \t});
      });
    </script>
    <!-- /jQuery Sparklines -->
    <!-- bootstrap-daterangepicker -->
    <script type=\"text/javascript\">
      \$(document).ready(function() {

        var cb = function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
          \$('#reportrange span').html(start.format('DD/MM/YYYY') + ' - ' + end.format('DD/MM/YYYY'));
        };

        var optionSet1 = {
          startDate: moment().subtract(29, 'days'),
          endDate: moment(),
          minDate: moment('{{ dados.data_min }}', 'YYYY-MM-DD'),
          maxDate: moment('{{ dados.data_max }}', 'YYYY-MM-DD'),
          dateLimit: {
            days: 60
          },
          showDropdowns: true,
          showWeekNumbers: true,
          timePicker: false,
          timePickerIncrement: 1,
          timePicker12Hour: false,
          ranges: {
            'Campanha': [moment('{{ dados.data_min }}', 'YYYY-MM-DD'), moment('{{ dados.data_max }}', 'YYYY-MM-DD')],
            'Esta Semana': [moment().startOf('week'), moment().endOf('week')],
            'Ultimos 7 Dias': [moment().subtract(6, 'days'), moment()],
            'Ultimos 30 Dias': [moment().subtract(29, 'days'), moment()],
            'Este Mes': [moment().startOf('month'), moment().endOf('month')],
            'Ultimo Mes': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          opens: 'left',
          buttonClasses: ['btn btn-default'],
          applyClass: 'btn-small btn-primary',
          cancelClass: 'btn-small',
          format: 'DD/MM/YYYY',
          separator: ' to ',
          locale: {
            applyLabel: 'Submit',
            cancelLabel: 'Clear',
            fromLabel: 'From',
            toLabel: 'To',
            customRangeLabel: 'Custom',
            daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            firstDay: 1
          }
        };
        \$('#reportrange span').html(moment().subtract(29, 'days').format('DD/MM/YYYY') + ' - ' + moment().format('DD/MM/YYYY'));
        var picker = \$('#reportrange').daterangepicker(optionSet1, cb);
        \$('#reportrange').on('show.daterangepicker', function() {
          console.log(\"show event fired\");
        });
        \$('#reportrange').on('hide.daterangepicker', function() {
          console.log(\"hide event fired\");
        });
        \$('#reportrange').on('apply.daterangepicker', function(ev, picker) {
          console.log(picker.startDate);
          console.log(picker.endDate);

          var update = {
            time: {
              start: picker.startDate,
              end: picker.endDate
            }
          };
          charts_update (update);

          console.log(\"apply event fired, start/end dates are \" + picker.startDate.format('MMMM D, YYYY') + \" to \" + picker.endDate.format('MMMM D, YYYY'));
        });
        \$('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
          console.log(\"cancel event fired\");
        });
        \$('#options1').click(function() {
          \$('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
        });
        \$('#options2').click(function() {
          \$('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
        });
        \$('#destroy').click(function() {
          \$('#reportrange').data('daterangepicker').remove();
        });

        var update = {
          time: {
            start: moment().subtract(29, 'days'),
            end: moment()
          }
        };
        charts_update (update);
      });
    </script>
    <!-- /bootstrap-daterangepicker -->
{% endblock %}

{% block top_bar %}
                <li role=\"presentation\" class=\"dropdown\">
                  <a href=\"javascript:;\" class=\"dropdown-toggle info-text\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                    {# <i class=\"fa fa-circle-o-notch\"></i> #}
                    <span class=\"badge bg-red\">{{ dados.campanha_atual.nome }}</span>
                  </a>
                  <ul id=\"menu1\" class=\"dropdown-menu list-unstyled msg_list\" role=\"menu\">
                {% for campanha in dados.campanhas %}
                {% if campanha.is_ativa %}
                    <li>
                      <a href=\"/dashboard/{{ campanha.id }}\">
                        <span>
                          <span>{{ campanha.nome }}</span>
                          <span class=\"time\">{{ campanha.status }}</span>
                        </span>
                        {#<span class=\"message\">
                          <div>
                            <strong>Leads:</strong>
                            <span>{{ campanha.leads_total.count }}</span>
                          </div>
                          <div>
                            <strong>Inscritos:</strong>
                            <span>{{ campanha.inscritos.count + campanha.matriculados.count }}</span>
                          </div>
                        </span>#}
                      </a>
                    </li>
                {% endif %}
                {% endfor %}
                    <li>
                      <div class=\"text-center\">
                        <a href=\"/campanhas/\">
                          <strong>Ver Todas Campanhas</strong>
                          <i class=\"fa fa-angle-right\"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>

                <li role=\"presentation\">
                  <div id=\"reportrange\" class=\"pull-right\" style=\"background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc;margin:1em 0em;\">
                    <i class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i>
                    <span>Carregando...</span> <b class=\"caret\"></b>
                  </div>
                </li>
{% endblock %}

{% block content %}
        <div class=\"right_col\" role=\"main\">
          <div class=\"\">
            <div class=\"row top_tiles\" style=\"margin: 10px 0;\">
              <div class=\"col-md-3 col-sm-3 col-xs-6 tile\">
                <span>Leads</span>
                <h2>{{ total.leads }}</h2>
              </div>
              <div class=\"col-md-3 col-sm-3 col-xs-6 tile\">
                <span>Provas Pendentes</span>
                <h2>{{ total.provas }}</h2>
              </div>
              <div class=\"col-md-3 col-sm-3 col-xs-6 tile\">
                <span>Aprovados Não-Matriculados</span>
                <h2>{{ total.aprovados }}</h2>
              </div>
              <div class=\"col-md-3 col-sm-3 col-xs-6 tile\">
                <span>Ausentes</span>
                <h2>{{ total.ausentes }}</h2>
              </div>
            </div>
            <br />
            <div class=\"row top_tiles\" style=\"margin: 10px 0;\">
              <div class=\"col-md-3 col-sm-3 col-xs-6 tile\">
                <span>Total de Candidatos</span>
                <h2>{{ total.candidatos }}</h2>
                <span class=\"sparkline_one grafico_spark\" style=\"height: 160px;\" data-tipo=\"bar\" data-dados=\"{{ recentes.leads|array2js }}\" data-color=\"#9b59b6\">
                      <canvas width=\"200\" height=\"60\" style=\"display: inline-block; vertical-align: top; width: 94px; height: 30px;\"></canvas>
                  </span>
              </div>
              <div class=\"col-md-3 col-sm-3 col-xs-6 tile\">
                <span>Total de Inscritos</span>
                <h2>{{ total.inscritos }}</h2>
                <span class=\"sparkline_one grafico_spark\" style=\"height: 160px;\" data-tipo=\"bar\" data-dados=\"{{ recentes.inscritos|array2js }}\" data-color=\"#26B99A\">
                      <canvas width=\"200\" height=\"60\" style=\"display: inline-block; vertical-align: top; width: 94px; height: 30px;\"></canvas>
                  </span>
              </div>
              <div class=\"col-md-3 col-sm-3 col-xs-6 tile\">
                <span>Total de Matriculados</span>
                <h2>{{ total.matriculados }}</h2>
                <span class=\"sparkline_one grafico_spark\" style=\"height: 160px;\" data-tipo=\"bar\" data-dados=\"{{ recentes.matriculados|array2js }}\" data-color=\"#0b2f7f\">
                      <canvas width=\"200\" height=\"60\" style=\"display: inline-block; vertical-align: top; width: 94px; height: 30px;\"></canvas>
                  </span>
              </div>
              <div class=\"col-md-3 col-sm-3 col-xs-6 tile\">
                <span>Taxa de Convers&atilde;o</span>
                <h2>{{ total.conversao }}%</h2>
                <span class=\"sparkline_two grafico_spark\" style=\"height: 160px;\" data-tipo=\"line\" data-dados=\"{{ recentes.conversao|array2js }}\">
                      <canvas width=\"200\" height=\"60\" style=\"display: inline-block; vertical-align: top; width: 94px; height: 30px;\"></canvas>
                  </span>
              </div>
            </div>
            <br />
            
            <div class=\"row\">
              <div class=\"col-md-12\">
                {% for grafico in graficos %}
                {{ grafico.render|raw }}
                {% endfor %}
              </div>
            </div>

            {#<div class=\"row\">
              <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"dashboard_graph x_panel\">
                  <div class=\"row x_title\">
                    <div class=\"col-md-6\">
                      <h3>Network Activities <small>Graph title sub-title</small></h3>
                    </div>
                  </div>
                  <div class=\"x_content\">
                    <div class=\"demo-container\" style=\"height:250px\">
                      <div id=\"placeholder3xx3\" class=\"demo-placeholder\" style=\"width: 100%; height:250px;\"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>#}


            {# <div class=\"row\">
              <div class=\"col-md-4 col-sm-6 col-xs-12\">
                <div class=\"x_panel fixed_height_320\">
                  <div class=\"x_title\">
                    <h2>App Devices <small>Sessions</small></h2>
                    <ul class=\"nav navbar-right panel_toolbox\">
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
                    </ul>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">
                    <h4>App Versions</h4>
                    <div class=\"widget_summary\">
                      <div class=\"w_left w_25\">
                        <span>1.5.2</span>
                      </div>
                      <div class=\"w_center w_55\">
                        <div class=\"progress\">
                          <div class=\"progress-bar bg-green\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 66%;\">
                            <span class=\"sr-only\">60% Complete</span>
                          </div>
                        </div>
                      </div>
                      <div class=\"w_right w_20\">
                        <span>123k</span>
                      </div>
                      <div class=\"clearfix\"></div>
                    </div>

                    <div class=\"widget_summary\">
                      <div class=\"w_left w_25\">
                        <span>1.5.3</span>
                      </div>
                      <div class=\"w_center w_55\">
                        <div class=\"progress\">
                          <div class=\"progress-bar bg-green\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 45%;\">
                            <span class=\"sr-only\">60% Complete</span>
                          </div>
                        </div>
                      </div>
                      <div class=\"w_right w_20\">
                        <span>53k</span>
                      </div>
                      <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"widget_summary\">
                      <div class=\"w_left w_25\">
                        <span>1.5.4</span>
                      </div>
                      <div class=\"w_center w_55\">
                        <div class=\"progress\">
                          <div class=\"progress-bar bg-green\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 25%;\">
                            <span class=\"sr-only\">60% Complete</span>
                          </div>
                        </div>
                      </div>
                      <div class=\"w_right w_20\">
                        <span>23k</span>
                      </div>
                      <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"widget_summary\">
                      <div class=\"w_left w_25\">
                        <span>1.5.5</span>
                      </div>
                      <div class=\"w_center w_55\">
                        <div class=\"progress\">
                          <div class=\"progress-bar bg-green\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 5%;\">
                            <span class=\"sr-only\">60% Complete</span>
                          </div>
                        </div>
                      </div>
                      <div class=\"w_right w_20\">
                        <span>3k</span>
                      </div>
                      <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"widget_summary\">
                      <div class=\"w_left w_25\">
                        <span>0.1.5.6</span>
                      </div>
                      <div class=\"w_center w_55\">
                        <div class=\"progress\">
                          <div class=\"progress-bar bg-green\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 2%;\">
                            <span class=\"sr-only\">60% Complete</span>
                          </div>
                        </div>
                      </div>
                      <div class=\"w_right w_20\">
                        <span>1k</span>
                      </div>
                      <div class=\"clearfix\"></div>
                    </div>

                  </div>
                </div>
              </div>

              <div class=\"col-md-4 col-sm-6 col-xs-12\">
                <div class=\"x_panel fixed_height_320\">
                  <div class=\"x_title\">
                    <h2>Daily users <small>Sessions</small></h2>
                    <ul class=\"nav navbar-right panel_toolbox\">
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
                    </ul>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">
                  <table class=\"\" style=\"width:100%\">
                    <tr>
                      <th style=\"width:37%;\">
                        <p>Top 5</p>
                      </th>
                      <th>
                        <div class=\"col-lg-7 col-md-7 col-sm-7 col-xs-7\">
                          <p class=\"\">Device</p>
                        </div>
                        <div class=\"col-lg-5 col-md-5 col-sm-5 col-xs-5\">
                          <p class=\"\">Progress</p>
                        </div>
                      </th>
                    </tr>
                    <tr>
                      <td>
                        <canvas id=\"canvas1\" height=\"140\" width=\"140\" style=\"margin: 15px 10px 10px 0\"></canvas>
                      </td>
                      <td>
                        <table class=\"tile_info\">
                          <tr>
                            <td>
                              <p><i class=\"fa fa-square blue\"></i>IOS </p>
                            </td>
                            <td>30%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class=\"fa fa-square green\"></i>Android </p>
                            </td>
                            <td>10%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class=\"fa fa-square purple\"></i>Blackberry </p>
                            </td>
                            <td>20%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class=\"fa fa-square aero\"></i>Symbian </p>
                            </td>
                            <td>15%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class=\"fa fa-square red\"></i>Others </p>
                            </td>
                            <td>30%</td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                  </div>
                </div>
              </div>

              <div class=\"col-md-4 col-sm-6 col-xs-12\">
                <div class=\"x_panel fixed_height_320\">
                  <div class=\"x_title\">
                    <h2>Profile Settings <small>Sessions</small></h2>
                    <ul class=\"nav navbar-right panel_toolbox\">
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
                    </ul>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">
                    <div class=\"dashboard-widget-content\">
                      <ul class=\"quick-list\">
                        <li><i class=\"fa fa-line-chart\"></i><a href=\"#\">Achievements</a></li>
                        <li><i class=\"fa fa-thumbs-up\"></i><a href=\"#\">Favorites</a></li>
                        <li><i class=\"fa fa-calendar-o\"></i><a href=\"#\">Activities</a></li>
                        <li><i class=\"fa fa-cog\"></i><a href=\"#\">Settings</a></li>
                        <li><i class=\"fa fa-area-chart\"></i><a href=\"#\">Logout</a></li>
                      </ul>

                      <div class=\"sidebar-widget\">
                        <h4>Profile Completion</h4>
                        <canvas width=\"150\" height=\"80\" id=\"foo\" class=\"\" style=\"width: 160px; height: 100px;\"></canvas>
                        <div class=\"goal-wrapper\">
                          <span id=\"gauge-text\" class=\"gauge-value pull-left\">0</span>
                          <span class=\"gauge-value pull-left\">%</span>
                          <span id=\"goal-text\" class=\"goal-value pull-right\">100%</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class=\"col-md-4 col-sm-6 col-xs-12 widget_tally_box\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>User Uptake</h2>
                    <ul class=\"nav navbar-right panel_toolbox\">
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
                    </ul>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">

                    <div id=\"graph_bar\" style=\"width:100%; height:200px;\"></div>

                    <div class=\"col-xs-12 bg-white progress_summary\">

                      <div class=\"row\">
                        <div class=\"progress_title\">
                          <span class=\"left\">Escudor Wireless 1.0</span>
                          <span class=\"right\">This sis</span>
                          <div class=\"clearfix\"></div>
                        </div>

                        <div class=\"col-xs-2\">
                          <span>SSD</span>
                        </div>
                        <div class=\"col-xs-8\">
                          <div class=\"progress progress_sm\">
                            <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"89\"></div>
                          </div>
                        </div>
                        <div class=\"col-xs-2 more_info\">
                          <span>89%</span>
                        </div>
                      </div>
                      <div class=\"row\">
                        <div class=\"progress_title\">
                          <span class=\"left\">Mobile Access</span>
                          <span class=\"right\">Smart Phone</span>
                          <div class=\"clearfix\"></div>
                        </div>

                        <div class=\"col-xs-2\">
                          <span>App</span>
                        </div>
                        <div class=\"col-xs-8\">
                          <div class=\"progress progress_sm\">
                            <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"79\"></div>
                          </div>
                        </div>
                        <div class=\"col-xs-2 more_info\">
                          <span>79%</span>
                        </div>
                      </div>
                      <div class=\"row\">
                        <div class=\"progress_title\">
                          <span class=\"left\">WAN access users</span>
                          <span class=\"right\">Total 69%</span>
                          <div class=\"clearfix\"></div>
                        </div>

                        <div class=\"col-xs-2\">
                          <span>Usr</span>
                        </div>
                        <div class=\"col-xs-8\">
                          <div class=\"progress progress_sm\">
                            <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"69\"></div>
                          </div>
                        </div>
                        <div class=\"col-xs-2 more_info\">
                          <span>69%</span>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>

              <!-- start of weather widget -->
              <div class=\"col-md-4 col-sm-6 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Today's Weather <small>Sessions</small></h2>
                    <ul class=\"nav navbar-right panel_toolbox\">
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
                    </ul>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">
                    <div class=\"row\">
                      <div class=\"col-sm-12\">
                        <div class=\"temperature\"><b>Monday</b>, 07:30 AM
                          <span>F</span>
                          <span><b>C</b>
                                          </span>
                        </div>
                      </div>
                    </div>
                    <div class=\"row\">
                      <div class=\"col-sm-4\">
                        <div class=\"weather-icon\">
                          <span>
                                              <canvas height=\"84\" width=\"84\" id=\"partly-cloudy-day\"></canvas>
                                          </span>

                        </div>
                      </div>
                      <div class=\"col-sm-8\">
                        <div class=\"weather-text\">
                          <h2>Texas
                                              <br><i>Partly Cloudy Day</i>
                                          </h2>
                        </div>
                      </div>
                    </div>
                    <div class=\"col-sm-12\">
                      <div class=\"weather-text pull-right\">
                        <h3 class=\"degrees\">23</h3>
                      </div>
                    </div>
                    <div class=\"clearfix\"></div>


                    <div class=\"row weather-days\">
                      <div class=\"col-sm-2\">
                        <div class=\"daily-weather\">
                          <h2 class=\"day\">Mon</h2>
                          <h3 class=\"degrees\">25</h3>
                          <span>
                                                  <canvas id=\"clear-day\" width=\"32\" height=\"32\">
                                                  </canvas>

                                          </span>
                          <h5>15
                                              <i>km/h</i>
                                          </h5>
                        </div>
                      </div>
                      <div class=\"col-sm-2\">
                        <div class=\"daily-weather\">
                          <h2 class=\"day\">Tue</h2>
                          <h3 class=\"degrees\">25</h3>
                          <canvas height=\"32\" width=\"32\" id=\"rain\"></canvas>
                          <h5>12
                                              <i>km/h</i>
                                          </h5>
                        </div>
                      </div>
                      <div class=\"col-sm-2\">
                        <div class=\"daily-weather\">
                          <h2 class=\"day\">Wed</h2>
                          <h3 class=\"degrees\">27</h3>
                          <canvas height=\"32\" width=\"32\" id=\"snow\"></canvas>
                          <h5>14
                                              <i>km/h</i>
                                          </h5>
                        </div>
                      </div>
                      <div class=\"col-sm-2\">
                        <div class=\"daily-weather\">
                          <h2 class=\"day\">Thu</h2>
                          <h3 class=\"degrees\">28</h3>
                          <canvas height=\"32\" width=\"32\" id=\"sleet\"></canvas>
                          <h5>15
                                              <i>km/h</i>
                                          </h5>
                        </div>
                      </div>
                      <div class=\"col-sm-2\">
                        <div class=\"daily-weather\">
                          <h2 class=\"day\">Fri</h2>
                          <h3 class=\"degrees\">28</h3>
                          <canvas height=\"32\" width=\"32\" id=\"wind\"></canvas>
                          <h5>11
                                              <i>km/h</i>
                                          </h5>
                        </div>
                      </div>
                      <div class=\"col-sm-2\">
                        <div class=\"daily-weather\">
                          <h2 class=\"day\">Sat</h2>
                          <h3 class=\"degrees\">26</h3>
                          <canvas height=\"32\" width=\"32\" id=\"cloudy\"></canvas>
                          <h5>10
                                              <i>km/h</i>
                                          </h5>
                        </div>
                      </div>
                      <div class=\"clearfix\"></div>
                    </div>
                  </div>
                </div>

              </div>
              <!-- end of weather widget -->

              <div class=\"col-md-4 col-sm-6 col-xs-12\">
                <div class=\"x_panel fixed_height_320\">
                  <div class=\"x_title\">
                    <h2>Incomes <small>Sessions</small></h2>
                    <ul class=\"nav navbar-right panel_toolbox\">
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
                    </ul>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">
                    <div class=\"dashboard-widget-content\">
                      <ul class=\"quick-list\">
                        <li><i class=\"fa fa-bars\"></i><a href=\"#\">Subscription</a></li>
                        <li><i class=\"fa fa-bar-chart\"></i><a href=\"#\">Auto Renewal</a> </li>
                        <li><i class=\"fa fa-support\"></i><a href=\"#\">Help Desk</a> </li>
                        <li><i class=\"fa fa-heart\"></i><a href=\"#\">Donations</a> </li>
                      </ul>

                      <div class=\"sidebar-widget\">
                        <h4>Goal</h4>
                        <canvas width=\"150\" height=\"80\" id=\"foo2\" class=\"\" style=\"width: 160px; height: 100px;\"></canvas>
                        <div class=\"goal-wrapper\">
                          <span class=\"gauge-value pull-left\">\$</span>
                          <span id=\"gauge-text2\" class=\"gauge-value pull-left\">3,200</span>
                          <span id=\"goal-text2\" class=\"goal-value pull-right\">\$5,000</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> #}
          </div>
        </div>
{% endblock %}", "C:\\xampp\\htdocs\\laravel\\app\\Modules\\Admin\\views/dashboard.twig", "");
    }
}

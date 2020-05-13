<?php

/* /var/www/app/app/Modules/Admin/views/dashboard.twig */
class __TwigTemplate_7fa4008bff3af80a5c76f4cd186da72e84942d26119fd94e3af49be869bc3c2d extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::layout", "/var/www/app/app/Modules/Admin/views/dashboard.twig", 1);
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
        return "/var/www/app/app/Modules/Admin/views/dashboard.twig";
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
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/dashboard.twig", "");
    }
}

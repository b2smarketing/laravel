<?php

/* /var/www/app/app/Modules/Admin/views/Graficos/GraficoRosca.twig */
class __TwigTemplate_902d644f12822c139185fd6e85a28c6fdb50740753473c3841dae9762b52b561 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"col-md-6 col-sm-6 col-xs-12\">
  <div class=\"x_panel fixed_height_320\">
    <div class=\"x_title\">
      <h2>";
        // line 4
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h2>
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
    <div class=\"x_content\" style=\"text-align:center;height:210px;\">
      <div style=\"width:100%; height:100%;/* margin: 15px 10px 10px 0*/\">
        <canvas width=\"100%\" id=\"grafico_";
        // line 24
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\"></canvas>
      </div>
    <!--<table class=\"\" style=\"width:100%\">
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
          <canvas id=\"grafico_";
        // line 42
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" height=\"140\" width=\"140\" style=\"margin: 15px 10px 10px 0\"></canvas>
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
    </table>-->
    </div>
  </div>
</div>

<!-- Doughnut Chart -->
<script>
  \$(document).ready(function() {
    var options = {
      legend: false,
      responsive: false
    };

    function decimalToHexString(number) {
        if (number < 0)
        {
            number = 0xFFFFFFFF + number + 1;
        }

        return number.toString(16).toUpperCase();
    }

    var hex2color = function (hex) {
      if (~hex.indexOf('#'))
        var hex = hex.substr(hex.indexOf('#') + 1);

      var color = {};

      color.R = parseInt(hex.substr(0, 2), 16);
      color.G = parseInt(hex.substr(2, 2), 16);
      color.B = parseInt(hex.substr(4, 2), 16);

      return color;
    }

    var color2hex = function (color) {
      return 'rgb(' + Math.floor(color.R) + ', ' + Math.floor(color.G) + ', ' + Math.floor(color.B) + ')';
      // return '#' + decimalToHexString(color.R) + decimalToHexString(color.G) + decimalToHexString(color.B);
    }

    var mk_light = function (amount, color) {
      var color = hex2color(color);

      color.R = Math.min(255, color.R + amount);
      color.G = Math.min(255, color.G + amount);
      color.B = Math.min(255, color.B + amount);

      return color2hex(color);
    }

    var mk_grad = function (steps, color) {
      // var perStep = 256 / steps;
      var arr = [];
      var color = hex2color(color);

      for (var i = 0; i < steps; i++) {
        var rt = 1 - (i / steps);
        color.R *= rt;
        color.G *= rt;
        color.B *= rt;
        arr.push(color2hex(color));
      }

      return arr;
    }

    var base = '#FF6600';

    // console.log(mk_grad(12, base));

    // Echart

    var chart = \$('#grafico_";
        // line 151
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "');
    var parent = chart.parent();

    chart.attr('height', parent.height());

    var theme = window.echarts_theme;

    var raw = ";
        // line 158
        echo $this->env->getExtension('App\TwigExtended')->array2json(($context["data"] ?? null));
        echo ";
    var labels = [];
    var values = [];

    var total = 0;
    for (var label in raw) {
      var value = raw[label];
      total += value;
    }

    for (var label in raw) {
      var value = raw[label];
      var percent = (100 * (value / total)).toFixed(0);
      if (percent == 0) continue;
      
      labels.push(label);
      values.push({
        value: value,
        name: label + ' - ' + percent + '%'
      });
    }

    var init = () => {
      chart.attr('width', parent.width());

      if (echartDonut)
        echartDonut.clear();

      var echartDonut = echarts.init(chart[0], theme);

      echartDonut.setOption({
        tooltip: {
          trigger: 'item',
          formatter: \"{a} <br/>{b} : {c} ({d}%)\"
        },
        calculable: true,
        legend: {
          x: 'center',
          y: 'bottom',
          data: labels
        },
        toolbox: {
          show: true,
          feature: {
            magicType: {
              show: true,
              type: ['pie', 'funnel'],
              option: {
                funnel: {
                  x: '25%',
                  width: '50%',
                  funnelAlign: 'center',
                  max: 1548
                }
              }
            },
            restore: {
              show: true,
              title: \"Restaurar\"
            },
            saveAsImage: {
              show: true,
              title: \"Salvar Imagem\"
            }
          }
        },
        series: [{
          name: '";
        // line 225
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "',
          type: 'pie',
          radius: ['25%', '35%'],
          itemStyle: {
            normal: {
              label: {
                show: true
              },
              labelLine: {
                show: true
              }
            },
            emphasis: {
              label: {
                show: true,
                position: 'center',
                textStyle: {
                  fontSize: '14',
                  fontWeight: 'normal'
                }
              }
            }
          },
          data: values
        }]
      });
    }

    // var resize = () => {
    //   echartDonut.resize(\$('#grafico_";
        // line 254
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "').width(), \$('#grafico_";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "').height(), true);
    // };

    \$(window).on('resize', init);

    init();

    return;

    // Chart

    new Chart(document.getElementById(\"grafico_";
        // line 265
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\"), {
      type: 'doughnut',
      tooltipFillColor: \"rgba(51, 51, 51, 0.55)\",
      data: {
        labels: ";
        // line 269
        echo $this->env->getExtension('App\TwigExtended')->array2json($this->env->getExtension('App\TwigExtended')->array2keys(($context["data"] ?? null)));
        echo ",
        datasets: [{
          data: ";
        // line 271
        echo $this->env->getExtension('App\TwigExtended')->array2json($this->env->getExtension('App\TwigExtended')->array2values(($context["data"] ?? null)));
        echo ",
          backgroundColor: mk_grad(48, base),
          hoverBackgroundColor: mk_grad(48, mk_light(6, base)),
          backgroundColor: [
            \"#9B59B6\",
            \"#E74C3C\",
            \"#26B99A\",
            \"#3498DB\",

            \"#9B59B6\",
            \"#E74C3C\",
            \"#26B99A\",
            \"#3498DB\",
            \"#9B59B6\",
            \"#E74C3C\",
            \"#26B99A\",
            \"#3498DB\",
            \"#9B59B6\",
            \"#E74C3C\",
            \"#26B99A\",
            \"#3498DB\",
            \"#9B59B6\",
            \"#E74C3C\",
            \"#26B99A\",
            \"#3498DB\"
          ],
          hoverBackgroundColor: [
            \"#B370CF\",
            \"#E95E4F\",
            \"#36CAAB\",
            \"#49A9EA\",

            \"#B370CF\",
            \"#E95E4F\",
            \"#36CAAB\",
            \"#49A9EA\",
            \"#B370CF\",
            \"#E95E4F\",
            \"#36CAAB\",
            \"#49A9EA\",
            \"#B370CF\",
            \"#E95E4F\",
            \"#36CAAB\",
            \"#49A9EA\",
            \"#B370CF\",
            \"#E95E4F\",
            \"#36CAAB\",
            \"#49A9EA\"
          ]
        }]
      },
      maxTicksLimit: 5,
      options: options
    });
  });
</script>
<!-- /Doughnut Chart -->";
    }

    public function getTemplateName()
    {
        return "/var/www/app/app/Modules/Admin/views/Graficos/GraficoRosca.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 271,  315 => 269,  308 => 265,  292 => 254,  260 => 225,  190 => 158,  180 => 151,  68 => 42,  47 => 24,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/Graficos/GraficoRosca.twig", "");
    }
}

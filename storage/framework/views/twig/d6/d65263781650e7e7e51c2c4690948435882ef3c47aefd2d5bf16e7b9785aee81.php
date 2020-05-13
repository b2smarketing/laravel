<?php

/* C:\xampp\htdocs\laravel\app\Modules\Admin\views/Graficos/GraficoTempo.twig */
class __TwigTemplate_45e79b8c48e03383efd31a5d61cb67711ae9073b5e938bd758ab4640934ca533 extends TwigBridge\Twig\Template
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
        echo "<div class=\"row\">
  <div class=\"col-md-12 col-sm-12 col-xs-12\">
    <div class=\"dashboard_graph x_panel\">
      <div class=\"row x_title\">
        <div class=\"col-md-6\">
          <h3>";
        // line 6
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h3>
        </div>
      </div>
      <div class=\"x_content\">
        <div class=\"demo-container\" style=\"height:250px\">
          <div id=\"grafico_";
        // line 11
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"demo-placeholder\" style=\"width: 100%; height:250px;\"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
\$(document).ready(function() {

  ";
        // line 20
        if (($context["charts"] ?? null)) {
            // line 21
            echo "  var data = [];

  ";
            // line 24
            echo "  ";
            $context["charts"] = $this->env->getExtension('App\TwigExtended')->array_order(($context["charts"] ?? null), array(0 => "LEAD", 1 => "INSC", 2 => "MATR"));
            // line 25
            echo "
  ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["charts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["chart"]) {
                // line 27
                echo "  data.push({
    // stack: true,
    data: ";
                // line 29
                echo $this->env->getExtension('App\TwigExtended')->array2js($this->env->getExtension('App\TwigExtended')->array_reverse($this->getAttribute($context["chart"], "data", array())), true);
                echo ",
    label: '";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["chart"], "title", array()), "html", null, true);
                echo "',
    lines: {
      // fillColor: \"rgba(150, 202, 89, 0.12)\",
      fill: true
    }, //#96CA59 rgba(150, 202, 89, 0.42)
    points: {
      fillColor: \"#fff\"
    }
  });
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chart'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "
  ";
        } else {
            // line 42
            echo "
  ";
        }
        // line 44
        echo "
  for (var i = 0; i < data.length; i++) {
    var chart = data[i];
    for (var r = 0; r < chart.data.length; r++) {
      var row = chart.data[r];
      row[0] = new Date(row[0]);
    }
    chart.data.sort(function(x, y) {
      if(x[0] == y[0]) return 0;
      else return (x[0] > y[0]) ? 1 : -1;
    });
  }

  console.log(data);

  var d1 = [
    [0, 1],
    [1, 9],
    [2, 6],
    [3, 10],
    [4, 5],
    [5, 17],
    [6, 6],
    [7, 10],
    [8, 7],
    [9, 11],
    [10, 35],
    [11, 9],
    [12, 12],
    [13, 5],
    [14, 3],
    [15, 4],
    [16, 9]
  ];

  //flot options
  var options = {
    xaxis: {
      mode: 'time',
      timeformat: \"%d/%m/%Y\"
    },
    series: {
      // stack: true,
      curvedLines: {
        apply: true,
        active: true,
        monotonicFit: true
      }
    },
    // colors: ['#0b2f7f', '#26B99A', '#9b59b6'],
    colors: ['#9b59b6', '#26B99A', '#0b2f7f', '#4D5D7F', '#EACA15', '#D36C13', '#fff', '#03BA00', '#fff', '#910D0D'],
    grid: {
      hoverable: true,
      borderWidth: {
        top: 0,
        right: 0,
        bottom: 1,
        left: 1
      },
      borderColor: {
        bottom: \"#7F8790\",
        left: \"#7F8790\"
      }
    },
    tooltip: {
      show: true,
      content: '%s - %x: %y'
    }
  };

  if (charts_settings.time) {
      options.xaxis.min = charts_settings.time.min;
      options.xaxis.max = charts_settings.time.max;
  }

  var plot = \$.plot(\$(\"#grafico_";
        // line 119
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\"), data, options);

  on_charts_update(function (change) {
    if (change.time)
      var time = change.time;
    else return;

    plot.getOptions().xaxes[0].min = time.start;
    plot.getOptions().xaxes[0].max = time.end;
    plot.setupGrid();
    plot.draw();

    \$('#grafico_";
        // line 131
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo " .legend > *').css({
      right: 'auto',
      left: '32px'
    });
  });
});
</script>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\laravel\\app\\Modules\\Admin\\views/Graficos/GraficoTempo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 131,  171 => 119,  94 => 44,  90 => 42,  86 => 40,  70 => 30,  66 => 29,  62 => 27,  58 => 26,  55 => 25,  52 => 24,  48 => 21,  46 => 20,  34 => 11,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
  <div class=\"col-md-12 col-sm-12 col-xs-12\">
    <div class=\"dashboard_graph x_panel\">
      <div class=\"row x_title\">
        <div class=\"col-md-6\">
          <h3>{{ title }}</h3>
        </div>
      </div>
      <div class=\"x_content\">
        <div class=\"demo-container\" style=\"height:250px\">
          <div id=\"grafico_{{ id }}\" class=\"demo-placeholder\" style=\"width: 100%; height:250px;\"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
\$(document).ready(function() {

  {% if charts %}
  var data = [];

  {#{% set charts = charts|array_order(['MATR', 'INSC', 'LEAD']) %}#}
  {% set charts = charts|array_order(['LEAD', 'INSC', 'MATR']) %}

  {% for chart in charts %}
  data.push({
    // stack: true,
    data: {{ chart.data|array_reverse|array2js(true)|raw }},
    label: '{{ chart.title }}',
    lines: {
      // fillColor: \"rgba(150, 202, 89, 0.12)\",
      fill: true
    }, //#96CA59 rgba(150, 202, 89, 0.42)
    points: {
      fillColor: \"#fff\"
    }
  });
  {% endfor %}

  {% else %}

  {% endif %}

  for (var i = 0; i < data.length; i++) {
    var chart = data[i];
    for (var r = 0; r < chart.data.length; r++) {
      var row = chart.data[r];
      row[0] = new Date(row[0]);
    }
    chart.data.sort(function(x, y) {
      if(x[0] == y[0]) return 0;
      else return (x[0] > y[0]) ? 1 : -1;
    });
  }

  console.log(data);

  var d1 = [
    [0, 1],
    [1, 9],
    [2, 6],
    [3, 10],
    [4, 5],
    [5, 17],
    [6, 6],
    [7, 10],
    [8, 7],
    [9, 11],
    [10, 35],
    [11, 9],
    [12, 12],
    [13, 5],
    [14, 3],
    [15, 4],
    [16, 9]
  ];

  //flot options
  var options = {
    xaxis: {
      mode: 'time',
      timeformat: \"%d/%m/%Y\"
    },
    series: {
      // stack: true,
      curvedLines: {
        apply: true,
        active: true,
        monotonicFit: true
      }
    },
    // colors: ['#0b2f7f', '#26B99A', '#9b59b6'],
    colors: ['#9b59b6', '#26B99A', '#0b2f7f', '#4D5D7F', '#EACA15', '#D36C13', '#fff', '#03BA00', '#fff', '#910D0D'],
    grid: {
      hoverable: true,
      borderWidth: {
        top: 0,
        right: 0,
        bottom: 1,
        left: 1
      },
      borderColor: {
        bottom: \"#7F8790\",
        left: \"#7F8790\"
      }
    },
    tooltip: {
      show: true,
      content: '%s - %x: %y'
    }
  };

  if (charts_settings.time) {
      options.xaxis.min = charts_settings.time.min;
      options.xaxis.max = charts_settings.time.max;
  }

  var plot = \$.plot(\$(\"#grafico_{{ id }}\"), data, options);

  on_charts_update(function (change) {
    if (change.time)
      var time = change.time;
    else return;

    plot.getOptions().xaxes[0].min = time.start;
    plot.getOptions().xaxes[0].max = time.end;
    plot.setupGrid();
    plot.draw();

    \$('#grafico_{{ id }} .legend > *').css({
      right: 'auto',
      left: '32px'
    });
  });
});
</script>", "C:\\xampp\\htdocs\\laravel\\app\\Modules\\Admin\\views/Graficos/GraficoTempo.twig", "");
    }
}

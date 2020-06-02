<?php

/* /var/www/app/app/Modules/Admin/views/Graficos/GraficoLinha.twig */
class __TwigTemplate_3d9031b091987c6951de31aa735cf45973a1e02197cf0bc562530044fdca75c6 extends TwigBridge\Twig\Template
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
        // line 2
        echo "  <div class=\"col-md-8 col-sm-12 col-xs-12\">
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
";
        // line 17
        echo "<script>
\$(document).ready(function() {


  ";
        // line 21
        if (($context["charts"] ?? null)) {
            // line 22
            echo "  var data = [];

  ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["charts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["chart"]) {
                // line 25
                echo "  data.push({
    data: ";
                // line 26
                echo $this->env->getExtension('App\TwigExtended')->array2js($this->getAttribute($context["chart"], "data", array()), true);
                echo ",
    label: '";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["chart"], "title", array()), "html", null, true);
                echo "',
    lines: {
      // fillColor: \"rgba(150, 202, 89, 0.12)\"
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
            // line 37
            echo "  ";
        } else {
            // line 38
            echo "  
  var data = [];
  
  ";
        }
        // line 42
        echo "
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
    xaxis: { tickSize: 1, tickDecimals: 0 },
    series: {
      curvedLines: {
        apply: true,
        active: true,
        monotonicFit: true
      }
    },
    colors: [\"#0b2f7f\", \"#9b59b6\",\"#26B99A\"],
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
      content: '%x: %y'
    }
  };

  if (charts_settings.time) {
      options.xaxis.min = charts_settings.time.min;
      options.xaxis.max = charts_settings.time.max;
  }

  for (var i = 0; i < data.length; i++) {
    var array = data[i].data;
    array.sort(function(x, y) {
      if(x[0] == y[0]) return 0;
      else return (x[0] > y[0]) ? 1 : -1;
    });
    console.log(array);
  }

  var plot = \$.plot(\$(\"#grafico_";
        // line 107
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\"), data, options);
});
</script>";
    }

    public function getTemplateName()
    {
        return "/var/www/app/app/Modules/Admin/views/Graficos/GraficoLinha.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 107,  89 => 42,  83 => 38,  80 => 37,  64 => 27,  60 => 26,  57 => 25,  53 => 24,  49 => 22,  47 => 21,  41 => 17,  33 => 11,  25 => 6,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/Graficos/GraficoLinha.twig", "");
    }
}

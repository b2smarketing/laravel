<?php

/* C:\xampp\htdocs\laravel\app\Modules\Admin\views/Graficos/GraficoGenero.twig */
class __TwigTemplate_a201f3d588e7e42ec94ed9e1cb45fd737641f3a2936f8d6740b2875b38af29fd extends TwigBridge\Twig\Template
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
        echo "<div class=\"col-md-4 col-sm-6 col-xs-12\">
  <div class=\"x_panel fixed_height_320\">
    <div class=\"x_title\">
      <h2>";
        // line 4
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h2>
      <ul class=\"nav navbar-right panel_toolbox\">
        <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
        </li>
      </ul>
      <div class=\"clearfix\"></div>
    </div>
    <div class=\"x_content\" style=\"text-align:center;\">
      <div id=\"grafico_";
        // line 12
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"chart_man_woman\">
        <div class=\"man\"><span class=\"bar\"></span><span class=\"label\">0%</span></div>
        <div class=\"woman\"><span class=\"bar\"></span><span class=\"label\">0%</span></div>
      </div>
    </div>
  </div>
</div>
<style type=\"text/css\" media=\"screen\">
.chart_man_woman { font-size: 0px; }
.chart_man_woman > div {
  display: inline-block;
  position: relative;
  width: 50%;
  z-index: 1;
  background-size: contain;
  background-repeat: repeat;
  background-position: center;
}
.chart_man_woman > div:before {
  content: ' ';
  display: block;
  padding-bottom: 100%;
}
.chart_man_woman > div:after {
  content: ' ';
  display: block;
  position: absolute;
  top: 0px;
  left: 0px;
  width: 100%;
  height: 100%;
  background: inherit;
}
.chart_man_woman > div .bar {
  position: absolute;
  display: block;
  left: 0px;
  bottom: 0px;
  width: 100%;
  z-index: -1;
  height: 0px;
  background-color: #9b59b6;
  transition: height 2s cubic-bezier(.58,.01,.21,.96);
  box-shadow: inset 0px 1px 8px rgba(255, 255, 255, 0.35);
}
.chart_man_woman > div .label {
  position: absolute;
  display: block;
  bottom: 0%;
  font-size: 1.2rem;
  z-index: 2;
  left: 50%;
  color: #9b59b6;
  opacity: 0;
  transform: translate(-50%, 0%);
  transition: bottom 2s cubic-bezier(.58,.01,.21,.96), opacity 4s ease;
}
.chart_man_woman > div.man { background-image: url('/images/o-man.png'); }
.chart_man_woman > div.woman { background-image: url('/images/o-woman.png'); }
</style>
<script>
  \$(document).ready(function() {

    var labels = ";
        // line 75
        echo $this->env->getExtension('App\TwigExtended')->array2json($this->env->getExtension('App\TwigExtended')->array2keys(($context["data"] ?? null)));
        echo ";
    var data = ";
        // line 76
        echo $this->env->getExtension('App\TwigExtended')->array2json($this->env->getExtension('App\TwigExtended')->array2values(($context["data"] ?? null)));
        echo ";

    var total = 0;
    var cats = {};

    for (var i = 0; i < labels.length; i++) {
      var c = labels[i].toLowerCase();
      var d = data[i];

      total += d;
      cats[c] = d;
    }

    var graph = \$('#grafico_";
        // line 89
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "');

    var man = 100 * cats.masculino / total;
    var fem = 100 * cats.feminino / total;

    graph.find('.man .bar').css('height', man + '%');
    graph.find('.woman .bar').css('height', fem + '%');

    graph.find('.man .label').html(Math.round(man) + '%').css('bottom', man + '%').css('opacity', 1);
    graph.find('.woman .label').html(Math.round(fem) + '%').css('bottom', fem + '%').css('opacity', 1);
  });
</script>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\laravel\\app\\Modules\\Admin\\views/Graficos/GraficoGenero.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 89,  105 => 76,  101 => 75,  35 => 12,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-md-4 col-sm-6 col-xs-12\">
  <div class=\"x_panel fixed_height_320\">
    <div class=\"x_title\">
      <h2>{{ title }}</h2>
      <ul class=\"nav navbar-right panel_toolbox\">
        <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
        </li>
      </ul>
      <div class=\"clearfix\"></div>
    </div>
    <div class=\"x_content\" style=\"text-align:center;\">
      <div id=\"grafico_{{ id }}\" class=\"chart_man_woman\">
        <div class=\"man\"><span class=\"bar\"></span><span class=\"label\">0%</span></div>
        <div class=\"woman\"><span class=\"bar\"></span><span class=\"label\">0%</span></div>
      </div>
    </div>
  </div>
</div>
<style type=\"text/css\" media=\"screen\">
.chart_man_woman { font-size: 0px; }
.chart_man_woman > div {
  display: inline-block;
  position: relative;
  width: 50%;
  z-index: 1;
  background-size: contain;
  background-repeat: repeat;
  background-position: center;
}
.chart_man_woman > div:before {
  content: ' ';
  display: block;
  padding-bottom: 100%;
}
.chart_man_woman > div:after {
  content: ' ';
  display: block;
  position: absolute;
  top: 0px;
  left: 0px;
  width: 100%;
  height: 100%;
  background: inherit;
}
.chart_man_woman > div .bar {
  position: absolute;
  display: block;
  left: 0px;
  bottom: 0px;
  width: 100%;
  z-index: -1;
  height: 0px;
  background-color: #9b59b6;
  transition: height 2s cubic-bezier(.58,.01,.21,.96);
  box-shadow: inset 0px 1px 8px rgba(255, 255, 255, 0.35);
}
.chart_man_woman > div .label {
  position: absolute;
  display: block;
  bottom: 0%;
  font-size: 1.2rem;
  z-index: 2;
  left: 50%;
  color: #9b59b6;
  opacity: 0;
  transform: translate(-50%, 0%);
  transition: bottom 2s cubic-bezier(.58,.01,.21,.96), opacity 4s ease;
}
.chart_man_woman > div.man { background-image: url('/images/o-man.png'); }
.chart_man_woman > div.woman { background-image: url('/images/o-woman.png'); }
</style>
<script>
  \$(document).ready(function() {

    var labels = {{ data|array2keys|array2json|raw }};
    var data = {{ data|array2values|array2json|raw }};

    var total = 0;
    var cats = {};

    for (var i = 0; i < labels.length; i++) {
      var c = labels[i].toLowerCase();
      var d = data[i];

      total += d;
      cats[c] = d;
    }

    var graph = \$('#grafico_{{ id }}');

    var man = 100 * cats.masculino / total;
    var fem = 100 * cats.feminino / total;

    graph.find('.man .bar').css('height', man + '%');
    graph.find('.woman .bar').css('height', fem + '%');

    graph.find('.man .label').html(Math.round(man) + '%').css('bottom', man + '%').css('opacity', 1);
    graph.find('.woman .label').html(Math.round(fem) + '%').css('bottom', fem + '%').css('opacity', 1);
  });
</script>
", "C:\\xampp\\htdocs\\laravel\\app\\Modules\\Admin\\views/Graficos/GraficoGenero.twig", "");
    }
}

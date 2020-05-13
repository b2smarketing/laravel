<?php

/* C:\xampp\htdocs\laravel\app\Modules\Admin\views/Graficos/GraficoCursos.twig */
class __TwigTemplate_0eaf1dba20567c708280b8992af1c79f6528f9409c9984c79c496b5254bacda7 extends TwigBridge\Twig\Template
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
        <div>
          <div id=\"grafico_";
        // line 11
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" style=\"width: 100%;\">
            <table class=\"panorama_cursos table-striped\">
              <thead>
                <tr>
                  <th>Código</th>
                  <th>Curso</th>
                  <th>Inscritos</th>
                  <th>Matriculados</th>
                  <th>Aproveitamento</th>
                  <th>Conversão</th>
                </tr>
              </thead>
              <tbody>
            ";
        // line 24
        $context["last"] = "";
        // line 25
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["id"] => $context["total"]) {
            // line 26
            echo "            ";
            $context["linha"] = $this->getAttribute($this->getAttribute(($context["helpers"] ?? null), "cursos", array()), $context["id"], array(), "array");
            // line 27
            echo "                <tr>
                  <td class=\"codigo\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["linha"] ?? null), "curso", array()), "codigo", array()), "html", null, true);
            echo "</td>
                  <td class=\"nome\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["linha"] ?? null), "curso", array()), "nome", array()), "html", null, true);
            echo "</td>
                  <td class=\"valor inscritos\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute(($context["linha"] ?? null), "inscritos", array()), "html", null, true);
            echo "</td>
                  <td class=\"valor matriculados\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute(($context["linha"] ?? null), "matriculados", array()), "html", null, true);
            echo "</td>
                  <td class=\"valor aproveitamento\">";
            // line 32
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["linha"] ?? null), "aproveitamento", array()), 2), "html", null, true);
            echo "%</td>
                  <td class=\"valor conversao\">";
            // line 33
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["linha"] ?? null), "conversao", array()), 2), "html", null, true);
            echo "%</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<style type=\"text/css\" media=\"screen\">

.panorama_cursos { width: 100%; }
.panorama_cursos td,
.panorama_cursos th {
  padding: 1em;
  text-align: center;
}
.panorama_cursos td.valor {
  position: relative;
  z-index: 1;
}
.panorama_cursos td.valor:before {
  content: ' ';
  display: block;
  position: absolute;
  top: 50%;
  left: 50%;
  width: calc(100% - 1em);
  height: calc(100% - 1em);
  z-index: -1;
  border: 1px solid;
  border-radius: 0.8em;
  transform: translate(-50%, -50%);
}
</style>

<script defer type=\"text/javascript\">
(() => {
  \$(document).ready(() => {
    \$('.panorama_cursos').dataTable({
      'paging': false,
      'columnDefs': [
        { 'type' : 'html-num-fmt', 'targets': [2, 3] }
      ],
      'order': [[ 2, 'desc' ]]
    });
  });
})();
</script>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\laravel\\app\\Modules\\Admin\\views/Graficos/GraficoCursos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 36,  83 => 33,  79 => 32,  75 => 31,  71 => 30,  67 => 29,  63 => 28,  60 => 27,  57 => 26,  52 => 25,  50 => 24,  34 => 11,  26 => 6,  19 => 1,);
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
        <div>
          <div id=\"grafico_{{ id }}\" style=\"width: 100%;\">
            <table class=\"panorama_cursos table-striped\">
              <thead>
                <tr>
                  <th>Código</th>
                  <th>Curso</th>
                  <th>Inscritos</th>
                  <th>Matriculados</th>
                  <th>Aproveitamento</th>
                  <th>Conversão</th>
                </tr>
              </thead>
              <tbody>
            {% set last = '' %}
            {% for id, total in data %}
            {% set linha = helpers.cursos[id] %}
                <tr>
                  <td class=\"codigo\">{{ linha.curso.codigo }}</td>
                  <td class=\"nome\">{{ linha.curso.nome }}</td>
                  <td class=\"valor inscritos\">{{ linha.inscritos }}</td>
                  <td class=\"valor matriculados\">{{ linha.matriculados }}</td>
                  <td class=\"valor aproveitamento\">{{ linha.aproveitamento|number_format(2) }}%</td>
                  <td class=\"valor conversao\">{{ linha.conversao|number_format(2) }}%</td>
                </tr>
            {% endfor %}
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<style type=\"text/css\" media=\"screen\">

.panorama_cursos { width: 100%; }
.panorama_cursos td,
.panorama_cursos th {
  padding: 1em;
  text-align: center;
}
.panorama_cursos td.valor {
  position: relative;
  z-index: 1;
}
.panorama_cursos td.valor:before {
  content: ' ';
  display: block;
  position: absolute;
  top: 50%;
  left: 50%;
  width: calc(100% - 1em);
  height: calc(100% - 1em);
  z-index: -1;
  border: 1px solid;
  border-radius: 0.8em;
  transform: translate(-50%, -50%);
}
</style>

<script defer type=\"text/javascript\">
(() => {
  \$(document).ready(() => {
    \$('.panorama_cursos').dataTable({
      'paging': false,
      'columnDefs': [
        { 'type' : 'html-num-fmt', 'targets': [2, 3] }
      ],
      'order': [[ 2, 'desc' ]]
    });
  });
})();
</script>", "C:\\xampp\\htdocs\\laravel\\app\\Modules\\Admin\\views/Graficos/GraficoCursos.twig", "");
    }
}

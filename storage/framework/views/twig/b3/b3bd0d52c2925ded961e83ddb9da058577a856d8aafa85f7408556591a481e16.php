<?php

/* C:\xampp\htdocs\laravel\app\Modules\Admin\views/Cursos/index.twig */
class __TwigTemplate_89d46ce7dffcdc149434c07270046fedac787af18e75d59f243ab4ed276348d7 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::layout", "C:\\xampp\\htdocs\\laravel\\app\\Modules\\Admin\\views/Cursos/index.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Admin::layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["exibir"] = $this->loadTemplate("Admin::helpers.link_display", "C:\\xampp\\htdocs\\laravel\\app\\Modules\\Admin\\views/Cursos/index.twig", 3);
        // line 5
        $context["title"] = "Cursos";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"right_col\" role=\"main\">
\t<div class=\"\">

    <form method=\"get\" action=\"/cursos/new\">
      ";
        // line 12
        echo csrf_field();
        echo "
          
      <div class=\"row\">
        <div class=\"col-md-12\" style=\"padding-top: 1em; padding-bottom: 1em\">
            <input type=\"submit\" class=\"btn btn-primary\" value=\"Novo Curso\" />
        </div>
      </div>
      
      <div class=\"row\">
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
                          <th>ID</th>
                          <th>Código</th>
                          <th>Nome</th>
                          <th>Vagas</th>
                          <th>Semestres</th>
                          <th>Mensalidade</th>
                        </tr>
                      </thead>
                      <tbody>
                    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cursos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
            // line 42
            echo "                        <tr>
                          <th scope=\"row\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "id", array()), "html", null, true);
            echo "</th>
                          <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "codigo", array()), "html", null, true);
            echo "</td>
                          <td><a href=\"/cursos/";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "nome", array()), "html", null, true);
            echo "</a></td>
                          <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "vagas", array()), "html", null, true);
            echo "</td>
                          <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "duracao", array()), "html", null, true);
            echo "</td>
                          <td>";
            // line 48
            echo $context["exibir"]->getreais($this->getAttribute($context["curso"], "valor", array()));
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class=\"clearfix\"></div>
          </div>

      </form>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\laravel\\app\\Modules\\Admin\\views/Cursos/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 51,  103 => 48,  99 => 47,  95 => 46,  89 => 45,  85 => 44,  81 => 43,  78 => 42,  74 => 41,  42 => 12,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
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

{% import 'Admin::helpers.link_display' as exibir %}

{% set title = 'Cursos' %}

{% block content %}
<div class=\"right_col\" role=\"main\">
\t<div class=\"\">

    <form method=\"get\" action=\"/cursos/new\">
      {{ csrf_field() }}
          
      <div class=\"row\">
        <div class=\"col-md-12\" style=\"padding-top: 1em; padding-bottom: 1em\">
            <input type=\"submit\" class=\"btn btn-primary\" value=\"Novo Curso\" />
        </div>
      </div>
      
      <div class=\"row\">
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
                          <th>ID</th>
                          <th>Código</th>
                          <th>Nome</th>
                          <th>Vagas</th>
                          <th>Semestres</th>
                          <th>Mensalidade</th>
                        </tr>
                      </thead>
                      <tbody>
                    {% for curso in cursos %}
                        <tr>
                          <th scope=\"row\">{{ curso.id }}</th>
                          <td>{{ curso.codigo }}</td>
                          <td><a href=\"/cursos/{{ curso.id }}\">{{ curso.nome }}</a></td>
                          <td>{{ curso.vagas }}</td>
                          <td>{{ curso.duracao }}</td>
                          <td>{{ exibir.reais(curso.valor) }}</td>
                        </tr>
                    {% endfor %}
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class=\"clearfix\"></div>
          </div>

      </form>
    </div>
</div>

{% endblock %}", "C:\\xampp\\htdocs\\laravel\\app\\Modules\\Admin\\views/Cursos/index.twig", "");
    }
}

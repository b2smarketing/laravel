<?php

/* C:\xampp\htdocs\laravel\app\Modules\Admin\views/Modulos/edit.twig */
class __TwigTemplate_58f148859088d1a3ae27d3de57923826161830f9e4cfcb1ab80ede2e0fdd8ddc extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::layout", "C:\\xampp\\htdocs\\laravel\\app\\Modules\\Admin\\views/Modulos/edit.twig", 1);
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
        $context["form"] = $this->loadTemplate("Admin::helpers.form_modulo", "C:\\xampp\\htdocs\\laravel\\app\\Modules\\Admin\\views/Modulos/edit.twig", 3);
        // line 5
        $context["title"] = ("Editando: " . $this->getAttribute(($context["module"] ?? null), "full_name", array()));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"right_col\" role=\"main\">
\t<div class=\"\">
\t\t";
        // line 53
        echo "
    \t";
        // line 54
        echo $context["form"]->geteditar_modulo(($context["module"] ?? null), ($context["modulos_disponivel"] ?? null));
        echo "

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\laravel\\app\\Modules\\Admin\\views/Modulos/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 54,  40 => 53,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
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

{% import 'Admin::helpers.form_modulo' as form %}

{% set title = 'Editando: ' ~ module.full_name %}

{% block content %}
<div class=\"right_col\" role=\"main\">
\t<div class=\"\">
\t\t{#<div class=\"row\">
          <div class=\"col-md-12 col-sm-12 col-xs-12\">
              <div class=\"x_panel\">
                <div class=\"x_title\">
                  <h2>Editando Módulo</h2>
                  <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">

                  <table class=\"table table-striped\">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Domínio</th>
                        <th>Usar WWW?</th>
                        <th>Diretório</th>
                        <th>Módulo</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                  {% for module in modulos %}
                      <tr>
                        <th scope=\"row\">{{ module.id }}</th>
                        <td><a href=\"http://{{ module.domain }}{{ module.root }}\" target=\"_blank\">{{ module.domain }}</a></td>
                        <td>{% if module.www %}Sim{% else %}Não{% endif %}</td>
                        <td>{{ module.root }}</td>
                        <td>{{ module.namespace }}</td>
                        <td>
                        \t<a href=\"/campanhas/{{ campanha.id }}/\" title=\"Visualizar\"><i class=\"fa fa-eye\"></i></a>
                        \t<a href=\"/campanhas/{{ campanha.id }}/edit\" title=\"Editar\"><i class=\"fa fa-edit\"></i></a>
                        </td>
                      </tr>
                  {% endfor %}
                    </tbody>
                  </table>

                </div>
              </div>
            </div>

            <div class=\"clearfix\"></div>
        </div>#}

    \t{{ form.editar_modulo (module, modulos_disponivel) }}

    </div>
</div>
{% endblock %}", "C:\\xampp\\htdocs\\laravel\\app\\Modules\\Admin\\views/Modulos/edit.twig", "");
    }
}

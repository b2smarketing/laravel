<?php

/* /var/www/app/app/Modules/Admin/views/Escolas/index.twig */
class __TwigTemplate_29582a25f12d7cbda3d77a14261f8996bcd03c6741389ebfb9dad61f17c48718 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::layout", "/var/www/app/app/Modules/Admin/views/Escolas/index.twig", 1);
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
        $context["exibir"] = $this->loadTemplate("Admin::helpers.link_display", "/var/www/app/app/Modules/Admin/views/Escolas/index.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t<div
\t\tclass=\"right_col\" role=\"main\">

\t\t<!-- WYSWYG -->
\t\t<link rel=\"stylesheet\" href=\"/wysiwyg/bootstrap3-wysihtml5.min.css\"/>
    <style>
    table{
      display:block;
      position:relative;
      margin: 0 auto !important;
      width:100%;
    }
\tth,td{
\t\twidth: 180px;
\t}
\t.id{
\t\twidth:30px;
\t}
    .x_panel{
      width:125%;
      left: -25%;
    }
    </style>
\t\t<script src=\"/wysiwyg/wysihtml5x-toolbar.min.js\"></script>
\t\t<script src=\"/wysiwyg/handlebars.runtime.min.js\"></script>
\t\t<script src=\"/wysiwyg/bootstrap3-wysihtml5.min.js\"></script>

\t\t<!-- Aplicar WYSWYG -->

\t\t<script type=\"text/javascript\">
\t\t\t\$('textarea').wysihtml5({
locale: 'pt-BR',
toolbar: {
'color': false,
'image': false,
'blockquote': false,
'ident-left': false,
'Outdent': false,
'small': false
}
});
\t\t</script>

\t\t<!-- page content -->
\t\t<div class=\"right_col\" role=\"main\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-18 col-sm-12 col-xs-12\">
\t\t\t\t\t<div class=\"x_panel\">
\t\t\t\t\t\t<div class=\"x_title\">
\t\t\t\t\t\t\t<h2>Escolas</h2>
\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"x_content\">
\t\t\t\t\t\t\t<table id=\"tabela_alunos\" class=\"table table-striped\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th class=\"id\">ID</th>
\t\t\t\t\t\t\t\t\t\t<th>Nome</th>
\t\t\t\t\t\t\t\t\t\t<th>Cidade</th>
\t\t\t\t\t\t\t\t\t\t<th>Responsavel</th>
\t\t\t\t\t\t\t\t\t\t<th>E-Mail</th>
\t\t\t\t\t\t\t\t\t\t<th>Telefone</th>
\t\t\t\t\t\t\t\t\t\t<th>Data</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
        // line 72
        if ((twig_length_filter($this->env, ($context["escolas"] ?? null)) > 0)) {
            // line 73
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["escolas"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["escola"]) {
                // line 74
                echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"id\">";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($context["escola"], "id", array()));
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($context["escola"], "nome", array()));
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["escola"], "cidade", array()));
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($context["escola"], "responsavel", array()));
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($context["escola"], "responsavel_email", array()));
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($context["escola"], "responsavel_telefone", array()));
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($context["escola"], "data", array()));
                echo "</td>

\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['escola'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "\t\t\t\t\t\t\t\t\t";
        }
        // line 86
        echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
    </div>


\t\t";
    }

    public function getTemplateName()
    {
        return "/var/www/app/app/Modules/Admin/views/Escolas/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 86,  146 => 85,  136 => 81,  132 => 80,  128 => 79,  124 => 78,  120 => 77,  116 => 76,  112 => 75,  109 => 74,  104 => 73,  102 => 72,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/Escolas/index.twig", "");
    }
}

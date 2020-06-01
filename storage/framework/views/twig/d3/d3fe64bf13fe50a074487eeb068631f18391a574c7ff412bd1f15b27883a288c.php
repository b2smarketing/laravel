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
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Admin::layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["form"] = $this->loadTemplate("Admin::helpers.form_campanha", "/var/www/app/app/Modules/Admin/views/Escolas/index.twig", 3);
        // line 5
        $context["title"] = "Escolas";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "\t<div class=\"right_col\" role=\"main\">
\t\t<div class=\"\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t\t<div class=\"x_panel\">
\t\t\t\t\t\t<div class=\"x_title\">
\t\t\t\t\t\t\t<h2>Escolas</h2>

\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"x_content\">

\t\t\t\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<!--<th class=\"id\">ID</th>-->
\t\t\t\t\t\t\t\t\t\t <th class=\"all\">Nome</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"min-tablet\">Cidade</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"min-tablet\">Responsavel</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"min-tablet\">E-Mail</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"min-tablet\">Telefone</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"min-tablet\">Data</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
        // line 33
        if ((twig_length_filter($this->env, ($context["escolas"] ?? null)) > 0)) {
            // line 34
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["escolas"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["escola"]) {
                // line 35
                echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<!--<td class=\"id\">";
                // line 36
                echo "</td>-->
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["escola"], "nome", array()));
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["escola"], "cidade", array()));
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["escola"], "responsavel", array()));
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["escola"], "responsavel_email", array()));
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["escola"], "responsavel_telefone", array()));
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["escola"], "data", array()));
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['escola'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "\t\t\t\t\t\t\t\t\t";
        }
        // line 46
        echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div>

\t\t</div>
\t</div>

";
    }

    // line 61
    public function block_scripts($context, array $blocks = array())
    {
        // line 62
        echo "\t<script>

\t\t\$('table').DataTable({
title: '";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute(($context["escola"] ?? null), "nome", array()), "html", null, true);
        echo "',
dom: \"Bfrtip\",
buttons: [
{
extend: \"copy\",
className: \"btn-sm\"
},
{
extend: \"csv\",
className: \"btn-sm\"
},
{
extend: \"excel\",
className: \"btn-sm\"
},
{
extend: \"pdfHtml5\",
className: \"btn-sm\"
}, {
extend: \"print\",
className: \"btn-sm\"
},
],
responsive: true
});
\t</script>
";
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
        return array (  134 => 65,  129 => 62,  126 => 61,  109 => 46,  106 => 45,  97 => 42,  93 => 41,  89 => 40,  85 => 39,  81 => 38,  77 => 37,  74 => 36,  71 => 35,  66 => 34,  64 => 33,  37 => 8,  34 => 7,  30 => 1,  28 => 5,  26 => 3,  11 => 1,);
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

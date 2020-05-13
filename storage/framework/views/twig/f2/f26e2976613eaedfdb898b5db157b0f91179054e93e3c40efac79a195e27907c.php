<?php

/* C:\xampp\htdocs\laravel\app\Modules\Admin\views/Alunos/edit.twig */
class __TwigTemplate_2508d966c426bdbaaf914b3d6a47d813dfe6091bcd987b044490f458c6defc69 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::layout", "C:\\xampp\\htdocs\\laravel\\app\\Modules\\Admin\\views/Alunos/edit.twig", 1);
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
        $context["title"] = ("Alunos: " . $this->getAttribute(($context["aluno"] ?? null), "nome", array()));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"right_col\" role=\"main\">
\t<div class=\"\">

\t\t<form method=\"post\" action=\"/alunos/";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "id", array()), "html", null, true);
        echo "/edit\">
\t\t\t";
        // line 10
        echo csrf_field();
        echo "
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-8 col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t\t<div class=\"x_panel\">
\t\t\t\t\t\t<div class=\"x_title\">
\t\t\t\t\t\t\t<h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "nome", array()), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"x_content\">

\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-2 col-sm-2 col-xs-3\">
\t\t\t\t\t\t\t\t\t<label>ID :</label>
\t\t\t\t\t\t\t\t\t<div><input readonly type=\"text\" class=\"form-control\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "id", array()), "html", null, true);
        echo "\" /></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-5 col-sm-5 col-xs-9\">
\t\t\t\t\t\t\t\t\t<label>Nome :</label>
\t\t\t\t\t\t\t\t\t<div><input name=\"nome_oficial\" type=\"text\" class=\"form-control\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "nome_oficial", array()), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-5 col-sm-5 col-xs-12\">
\t\t\t\t\t\t\t\t\t<label>Nome Social :</label>
\t\t\t\t\t\t\t\t\t<div><input name=\"nome_social\" type=\"text\" class=\"form-control\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "nome_social", array()), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br />

\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4 col-xs-4\">
\t\t\t\t\t\t\t\t\t<label>CPF :</label>
\t\t\t\t\t\t\t\t\t<div><input readonly type=\"text\" class=\"form-control\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "cpf", array()), "html", null, true);
        echo "\" /></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4 col-xs-4\">
\t\t\t\t\t\t\t\t\t<label>RG :</label>
\t\t\t\t\t\t\t\t\t<div><input name=\"rg\" type=\"text\" class=\"form-control\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "rg", array()), "html", null, true);
        echo "\" /></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4 col-xs-4\">
\t\t\t\t\t\t\t\t\t<label>Nascimento :</label>
\t\t\t\t\t\t\t\t\t<div><input name=\"datanascimento\" type=\"date\" class=\"form-control\"
\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "datanascimento", array()), "Y-m-d"), "html", null, true);
        echo "\" /></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br />

\t\t\t\t\t\t\t<div class=\"clearfix\"></div>

\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4 col-xs-4\">
\t\t\t\t\t\t\t\t\t<label>E-mail :</label>
\t\t\t\t\t\t\t\t\t<div><input name=\"email\" type=\"email\" class=\"form-control\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "email", array()), "html", null, true);
        echo "\" /></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4 col-xs-4\">
\t\t\t\t\t\t\t\t\t<label>Telefone :</label>
\t\t\t\t\t\t\t\t\t<div><input name=\"telefone\" type=\"text\" class=\"form-control\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "telefone", array()), "html", null, true);
        echo "\" /></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4 col-xs-4\">
\t\t\t\t\t\t\t\t\t<label>Celular :</label>
\t\t\t\t\t\t\t\t\t<div><input name=\"celular\" type=\"text\" class=\"form-control\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "celular", array()), "html", null, true);
        echo "\" /></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br />

\t\t\t\t\t\t\t<div class=\"clearfix\"></div>

\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-3 col-xs-7\">
\t\t\t\t\t\t\t\t\t<label>Endereço :</label>
\t\t\t\t\t\t\t\t\t<div><input name=\"endereco\" type=\"text\" class=\"form-control\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "endereco", array()), "html", null, true);
        echo "\" /></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-1 col-sm-1 col-xs-1\">
\t\t\t\t\t\t\t\t\t<label>Nº :</label>
\t\t\t\t\t\t\t\t\t<div><input name=\"numero\" type=\"text\" class=\"form-control\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "numero", array()), "html", null, true);
        echo "\" /></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-2 col-sm-2 col-xs-4\">
\t\t\t\t\t\t\t\t\t<label>Compl. :</label>
\t\t\t\t\t\t\t\t\t<div><input name=\"complemento\" type=\"text\" class=\"form-control\" value=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "complemento", array()), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-3 col-xs-8\">
\t\t\t\t\t\t\t\t\t<label>Bairro :</label>
\t\t\t\t\t\t\t\t\t<div><input name=\"bairro\" type=\"text\" class=\"form-control\" value=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "bairro", array()), "html", null, true);
        echo "\" /></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-3 col-xs-4\">
\t\t\t\t\t\t\t\t\t<label>Cidade :</label>
\t\t\t\t\t\t\t\t\t<div><input readonly type=\"text\" class=\"form-control\" value=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["aluno"] ?? null), "cidade", array()), "nome", array()), "html", null, true);
        echo "\" /></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br />

\t\t\t\t\t\t\t<div class=\"clearfix\"></div>

\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-success\" value=\"Salvar\" />
\t\t\t\t\t\t\t\t\t<input type=\"reset\" class=\"btn btn-warning\" value=\"Reverter\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br />


\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-lg-4 col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t\t<div class=\"x_panel\">
\t\t\t\t\t\t<div class=\"x_title\">
\t\t\t\t\t\t\t<h2>Dados do ENEM</h2>
\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"x_content\">

\t\t\t\t\t\t\t<table class=\"table striped\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th style=\"text-align:right;width:60%\">Descritivo</th>
\t\t\t\t\t\t\t\t\t\t<th>Nota</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["aluno"] ?? null), "getCamposEnem", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["campo"]) {
            // line 133
            echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td style=\"text-align:right;\"><strong>";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($context["campo"], "label", array()), "html", null, true);
            echo "</strong></td>
\t\t\t\t\t\t\t\t\t\t<td><input class=\"form-control\" type=\"number\" min=\"0\" max=\"1000\" step=\".1\"
\t\t\t\t\t\t\t\t\t\t\t\tname=\"enem[";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($context["campo"], "name", array()), "html", null, true);
            echo "]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["aluno"] ?? null), "enem", array()), $this->getAttribute($context["campo"], "name", array()), array(), "array"), "html", null, true);
            echo "\" /></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['campo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t<br />

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div>

\t\t</form>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\laravel\\app\\Modules\\Admin\\views/Alunos/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 139,  225 => 136,  220 => 134,  217 => 133,  213 => 132,  174 => 96,  167 => 92,  159 => 87,  152 => 83,  145 => 79,  132 => 69,  125 => 65,  118 => 61,  105 => 51,  97 => 46,  90 => 42,  78 => 33,  70 => 28,  63 => 24,  52 => 16,  43 => 10,  39 => 9,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
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

{% set title = 'Alunos: ' ~ aluno.nome %}

{% block content %}
<div class=\"right_col\" role=\"main\">
\t<div class=\"\">

\t\t<form method=\"post\" action=\"/alunos/{{ aluno.id }}/edit\">
\t\t\t{{ csrf_field() }}
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-8 col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t\t<div class=\"x_panel\">
\t\t\t\t\t\t<div class=\"x_title\">
\t\t\t\t\t\t\t<h2>{{ aluno.nome }}</h2>
\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"x_content\">

\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-2 col-sm-2 col-xs-3\">
\t\t\t\t\t\t\t\t\t<label>ID :</label>
\t\t\t\t\t\t\t\t\t<div><input readonly type=\"text\" class=\"form-control\" value=\"{{ aluno.id }}\" /></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-5 col-sm-5 col-xs-9\">
\t\t\t\t\t\t\t\t\t<label>Nome :</label>
\t\t\t\t\t\t\t\t\t<div><input name=\"nome_oficial\" type=\"text\" class=\"form-control\" value=\"{{ aluno.nome_oficial }}\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-5 col-sm-5 col-xs-12\">
\t\t\t\t\t\t\t\t\t<label>Nome Social :</label>
\t\t\t\t\t\t\t\t\t<div><input name=\"nome_social\" type=\"text\" class=\"form-control\" value=\"{{ aluno.nome_social }}\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br />

\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4 col-xs-4\">
\t\t\t\t\t\t\t\t\t<label>CPF :</label>
\t\t\t\t\t\t\t\t\t<div><input readonly type=\"text\" class=\"form-control\" value=\"{{ aluno.cpf }}\" /></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4 col-xs-4\">
\t\t\t\t\t\t\t\t\t<label>RG :</label>
\t\t\t\t\t\t\t\t\t<div><input name=\"rg\" type=\"text\" class=\"form-control\" value=\"{{ aluno.rg }}\" /></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4 col-xs-4\">
\t\t\t\t\t\t\t\t\t<label>Nascimento :</label>
\t\t\t\t\t\t\t\t\t<div><input name=\"datanascimento\" type=\"date\" class=\"form-control\"
\t\t\t\t\t\t\t\t\t\t\tvalue=\"{{ aluno.datanascimento|date('Y-m-d') }}\" /></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br />

\t\t\t\t\t\t\t<div class=\"clearfix\"></div>

\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4 col-xs-4\">
\t\t\t\t\t\t\t\t\t<label>E-mail :</label>
\t\t\t\t\t\t\t\t\t<div><input name=\"email\" type=\"email\" class=\"form-control\" value=\"{{ aluno.email }}\" /></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4 col-xs-4\">
\t\t\t\t\t\t\t\t\t<label>Telefone :</label>
\t\t\t\t\t\t\t\t\t<div><input name=\"telefone\" type=\"text\" class=\"form-control\" value=\"{{ aluno.telefone }}\" /></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4 col-xs-4\">
\t\t\t\t\t\t\t\t\t<label>Celular :</label>
\t\t\t\t\t\t\t\t\t<div><input name=\"celular\" type=\"text\" class=\"form-control\" value=\"{{ aluno.celular }}\" /></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br />

\t\t\t\t\t\t\t<div class=\"clearfix\"></div>

\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-3 col-xs-7\">
\t\t\t\t\t\t\t\t\t<label>Endereço :</label>
\t\t\t\t\t\t\t\t\t<div><input name=\"endereco\" type=\"text\" class=\"form-control\" value=\"{{ aluno.endereco }}\" /></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-1 col-sm-1 col-xs-1\">
\t\t\t\t\t\t\t\t\t<label>Nº :</label>
\t\t\t\t\t\t\t\t\t<div><input name=\"numero\" type=\"text\" class=\"form-control\" value=\"{{ aluno.numero }}\" /></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-2 col-sm-2 col-xs-4\">
\t\t\t\t\t\t\t\t\t<label>Compl. :</label>
\t\t\t\t\t\t\t\t\t<div><input name=\"complemento\" type=\"text\" class=\"form-control\" value=\"{{ aluno.complemento }}\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-3 col-xs-8\">
\t\t\t\t\t\t\t\t\t<label>Bairro :</label>
\t\t\t\t\t\t\t\t\t<div><input name=\"bairro\" type=\"text\" class=\"form-control\" value=\"{{ aluno.bairro }}\" /></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-3 col-xs-4\">
\t\t\t\t\t\t\t\t\t<label>Cidade :</label>
\t\t\t\t\t\t\t\t\t<div><input readonly type=\"text\" class=\"form-control\" value=\"{{ aluno.cidade.nome }}\" /></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br />

\t\t\t\t\t\t\t<div class=\"clearfix\"></div>

\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-success\" value=\"Salvar\" />
\t\t\t\t\t\t\t\t\t<input type=\"reset\" class=\"btn btn-warning\" value=\"Reverter\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br />


\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-lg-4 col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t\t<div class=\"x_panel\">
\t\t\t\t\t\t<div class=\"x_title\">
\t\t\t\t\t\t\t<h2>Dados do ENEM</h2>
\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"x_content\">

\t\t\t\t\t\t\t<table class=\"table striped\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th style=\"text-align:right;width:60%\">Descritivo</th>
\t\t\t\t\t\t\t\t\t\t<th>Nota</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t{% for campo in aluno.getCamposEnem() %}
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td style=\"text-align:right;\"><strong>{{ campo.label }}</strong></td>
\t\t\t\t\t\t\t\t\t\t<td><input class=\"form-control\" type=\"number\" min=\"0\" max=\"1000\" step=\".1\"
\t\t\t\t\t\t\t\t\t\t\t\tname=\"enem[{{campo.name}}]\" value=\"{{ aluno.enem[campo.name] }}\" /></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t<br />

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div>

\t\t</form>
\t</div>
</div>
{% endblock %}", "C:\\xampp\\htdocs\\laravel\\app\\Modules\\Admin\\views/Alunos/edit.twig", "");
    }
}

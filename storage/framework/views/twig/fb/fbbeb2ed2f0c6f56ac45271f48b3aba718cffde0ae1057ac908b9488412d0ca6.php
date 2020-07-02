<?php

/* /var/www/app/app/Modules/Admin/views/Alunos/view.twig */
class __TwigTemplate_321db8f096f65cfffe1c75536556ade303cde275e738e9abdf90ed2d4f1c4cf6 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::layout", "/var/www/app/app/Modules/Admin/views/Alunos/view.twig", 1);
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
        // line 4
        $context["lead_color"] = array("LEAD" => "danger", "INSC" => "warning", "MATR" => "success", "APROVADO" => "info", "PREMATR" => "primary", "AUSENTE" => "warning", "REPROVADO" => "warning", "BOLETOVENC" => "warning", "EVADIDO" => "danger", "PROSPECT" => "info");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        echo "<div class=\"right_col\" role=\"main\">
\t<div class=\"\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-8 col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t<div class=\"x_panel\">
\t\t\t\t\t<div class=\"x_title\">
\t\t\t\t\t\t<h2>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "nome", array()), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"x_content\">

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-2 col-sm-2 col-xs-3\">
\t\t\t\t\t\t\t\t<label>ID :</label>
\t\t\t\t\t\t\t\t<div>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "id", array()), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-5 col-sm-5 col-xs-9\">
\t\t\t\t\t\t\t\t<label>Nome :</label>
\t\t\t\t\t\t\t\t<div>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "nome", array()), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-5 col-sm-5 col-xs-12\">
\t\t\t\t\t\t\t\t<label>Nome Social :</label>
\t\t\t\t\t\t\t\t<div>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "nome_social", array()), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br />

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4 col-xs-4\">
\t\t\t\t\t\t\t\t<label>CPF :</label>
\t\t\t\t\t\t\t\t<div>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "cpf", array()), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4 col-xs-4\">
\t\t\t\t\t\t\t\t<label>RG :</label>
\t\t\t\t\t\t\t\t<div>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "rg", array()), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4 col-xs-4\">
\t\t\t\t\t\t\t\t<label>Nascimento :</label>
\t\t\t\t\t\t\t\t";
        // line 58
        if ($this->getAttribute(($context["aluno"] ?? null), "datanascimento", array())) {
            // line 59
            echo "\t\t\t\t\t\t\t\t<div>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "datanascimento", array()), "d/m/Y"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 61
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br />

\t\t\t\t\t\t<div class=\"clearfix\"></div>

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4 col-xs-4\">
\t\t\t\t\t\t\t\t<label>E-mail :</label>
\t\t\t\t\t\t\t\t<div>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "email", array()), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4 col-xs-4\">
\t\t\t\t\t\t\t\t<label>Telefone :</label>
\t\t\t\t\t\t\t\t<div>";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "telefone", array()), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4 col-xs-4\">
\t\t\t\t\t\t\t\t<label>Celular :</label>
\t\t\t\t\t\t\t\t<div>";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "celular", array()), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br />

\t\t\t\t\t\t<div class=\"clearfix\"></div>

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4 col-xs-8\">
\t\t\t\t\t\t\t\t<label>Endereço :</label>
\t\t\t\t\t\t\t\t<div>";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "endereco", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "numero", array()), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-2 col-sm-2 col-xs-4\">
\t\t\t\t\t\t\t\t<label>Compl. :</label>
\t\t\t\t\t\t\t\t<div>";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "complemento", array()), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-3 col-xs-8\">
\t\t\t\t\t\t\t\t<label>Bairro :</label>
\t\t\t\t\t\t\t\t<div>";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "bairro", array()), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-3 col-xs-4\">
\t\t\t\t\t\t\t\t<label>Cidade :</label>
\t\t\t\t\t\t\t\t<div>";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["aluno"] ?? null), "cidade", array()), "nome", array()), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br><hr>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div style=\"margin-left:15px;\">
\t\t\t\t\t\t\t\t<label>Aceite:</label>
\t\t\t\t\t\t\t\t<div>";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "aceite", array()), "html", null, true);
        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br><hr>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-warning\" href=\"/alunos/";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "id", array()), "html", null, true);
        echo "/edit\">Editar</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t";
        // line 121
        if ($this->getAttribute(($context["aluno"] ?? null), "enem", array())) {
            // line 122
            echo "\t\t\t<div class=\"col-lg-4 col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t<div class=\"x_panel\">
\t\t\t\t\t<div class=\"x_title\">
\t\t\t\t\t\t<h2>Dados do ENEM</h2>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"x_content\">

\t\t\t\t\t\t<table class=\"table striped\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th style=\"text-align:right;width:75%\">Descritivo</th>
\t\t\t\t\t\t\t\t\t<th>Nota</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
            // line 138
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["aluno"] ?? null), "getCamposEnem", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["campo"]) {
                // line 139
                echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td style=\"text-align:right;\"><strong>";
                // line 140
                echo twig_escape_filter($this->env, $this->getAttribute($context["campo"], "label", array()), "html", null, true);
                echo "</strong></td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 141
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["aluno"] ?? null), "enem", array()), $this->getAttribute($context["campo"], "name", array()), array(), "array"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['campo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<br />

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 152
        echo "
\t\t\t";
        // line 153
        if (($this->getAttribute(($context["aluno"] ?? null), "dados_adicionais", array()) && $this->getAttribute($this->getAttribute(($context["aluno"] ?? null), "dados_adicionais", array()), "responsavel_cpf", array()))) {
            // line 154
            echo "\t\t\t<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t<div class=\"x_panel\">
\t\t\t\t\t<div class=\"x_title\">
\t\t\t\t\t\t<h2>Dados do Responsável</h2>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"x_content\">

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t\t\t\t\t<label>Nome do Responsável :</label>
\t\t\t\t\t\t\t\t<div>";
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["aluno"] ?? null), "dados_adicionais", array()), "responsavel_nome", array()), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br />

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t\t\t\t\t<label>CPF do Responsável :</label>
\t\t\t\t\t\t\t\t<div>";
            // line 173
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["aluno"] ?? null), "dados_adicionais", array()), "responsavel_cpf", array()), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br />

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t\t\t\t\t<label>Telefone do Responsável :</label>
\t\t\t\t\t\t\t\t<div>";
            // line 181
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["aluno"] ?? null), "dados_adicionais", array()), "responsavel_telefone", array()), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br />

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t\t\t\t\t<label>Data de Nascimento do Responsável :</label>
\t\t\t\t\t\t\t\t<div>";
            // line 189
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["aluno"] ?? null), "dados_adicionais", array()), "responsavel_nascimento", array()), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br />

\t\t\t\t\t\t<div class=\"clearfix\"></div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 200
        echo "
\t\t\t<div class=\"clearfix\"></div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t<div class=\"x_panel\">
\t\t\t\t\t<div class=\"x_title\">
\t\t\t\t\t\t<h2>Histórico do Aluno</h2>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"x_content\">

\t\t\t\t\t\t<div class=\"dashboard-widget-content\">
\t\t\t\t\t\t\t<ul class=\"list-unstyled timeline widget\">
\t\t\t\t\t\t\t\t<table class=\"table striped\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-md-2\">Data/Hora</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-md-6\">Evento/Curso</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-md-2\">Status Atual/Antigo</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-md-1\">Controles</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"col-md-1\">LeadID</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
        // line 226
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["leads"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lead"]) {
            // line 227
            echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<div>";
            // line 229
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["lead"], "at", array(0 => "-3"), "method"), "d/m/Y"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div>";
            // line 230
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["lead"], "at", array(0 => "-3"), "method"), "H:i:s"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<div><strong>";
            // line 233
            echo twig_escape_filter($this->env, $this->getAttribute($context["lead"], "title", array()), "html", null, true);
            echo "</strong></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div><small>";
            // line 234
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["lead"], "curso", array()), "nome", array()), "html", null, true);
            echo "</small></div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"text-align: center; color: #000; text-shadow: 0px 1px 2px #FFF;\"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"alert-";
            // line 238
            echo twig_escape_filter($this->env, $this->getAttribute(($context["lead_color"] ?? null), $this->getAttribute($context["lead"], "status_new", array()), array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lead"], "status_new", array()), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"text-align: center; color: #000; text-shadow: 0px 1px 2px #FFF;\"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"alert-";
            // line 240
            echo twig_escape_filter($this->env, $this->getAttribute(($context["lead_color"] ?? null), $this->getAttribute($context["lead"], "status_was", array()), array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lead"], "status_was", array()), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"Editar Lead\" href=\"/alunos/";
            // line 243
            echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "id", array()), "html", null, true);
            echo "/lead/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lead"], "lead_id", array()), "html", null, true);
            echo "\"><i
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<div>#";
            // line 247
            echo twig_escape_filter($this->env, $this->getAttribute($context["lead"], "lead_id", array()), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lead'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 251
        echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 292
        echo "
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/app/app/Modules/Admin/views/Alunos/view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  406 => 292,  399 => 251,  389 => 247,  380 => 243,  372 => 240,  365 => 238,  358 => 234,  354 => 233,  348 => 230,  344 => 229,  340 => 227,  336 => 226,  308 => 200,  294 => 189,  283 => 181,  272 => 173,  261 => 165,  248 => 154,  246 => 153,  243 => 152,  233 => 144,  224 => 141,  220 => 140,  217 => 139,  213 => 138,  195 => 122,  193 => 121,  182 => 113,  173 => 107,  163 => 100,  156 => 96,  149 => 92,  140 => 88,  127 => 78,  120 => 74,  113 => 70,  102 => 61,  96 => 59,  94 => 58,  87 => 54,  80 => 50,  69 => 42,  62 => 38,  55 => 34,  44 => 26,  36 => 20,  33 => 19,  29 => 1,  27 => 4,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/Alunos/view.twig", "");
    }
}

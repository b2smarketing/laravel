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
\t\t\t\t\t\t<br />

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-warning\" href=\"/alunos/";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "id", array()), "html", null, true);
        echo "/edit\">Editar</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t";
        // line 115
        if ($this->getAttribute(($context["aluno"] ?? null), "enem", array())) {
            // line 116
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
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["aluno"] ?? null), "getCamposEnem", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["campo"]) {
                // line 133
                echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td style=\"text-align:right;\"><strong>";
                // line 134
                echo twig_escape_filter($this->env, $this->getAttribute($context["campo"], "label", array()), "html", null, true);
                echo "</strong></td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 135
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["aluno"] ?? null), "enem", array()), $this->getAttribute($context["campo"], "name", array()), array(), "array"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['campo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<br />

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 146
        echo "
\t\t\t";
        // line 147
        if (($this->getAttribute(($context["aluno"] ?? null), "dados_adicionais", array()) && $this->getAttribute($this->getAttribute(($context["aluno"] ?? null), "dados_adicionais", array()), "responsavel_cpf", array()))) {
            // line 148
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
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["aluno"] ?? null), "dados_adicionais", array()), "responsavel_nome", array()), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br />

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t\t\t\t\t<label>CPF do Responsável :</label>
\t\t\t\t\t\t\t\t<div>";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["aluno"] ?? null), "dados_adicionais", array()), "responsavel_cpf", array()), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br />

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t\t\t\t\t<label>Telefone do Responsável :</label>
\t\t\t\t\t\t\t\t<div>";
            // line 175
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["aluno"] ?? null), "dados_adicionais", array()), "responsavel_telefone", array()), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br />

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t\t\t\t\t<label>Data de Nascimento do Responsável :</label>
\t\t\t\t\t\t\t\t<div>";
            // line 183
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
        // line 194
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
        // line 220
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["leads"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lead"]) {
            // line 221
            echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<div>";
            // line 223
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["lead"], "at", array(0 => "-3"), "method"), "d/m/Y"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div>";
            // line 224
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["lead"], "at", array(0 => "-3"), "method"), "H:i:s"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<div><strong>";
            // line 227
            echo twig_escape_filter($this->env, $this->getAttribute($context["lead"], "title", array()), "html", null, true);
            echo "</strong></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div><small>";
            // line 228
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["lead"], "curso", array()), "nome", array()), "html", null, true);
            echo "</small></div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"text-align: center; color: #000; text-shadow: 0px 1px 2px #FFF;\"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"alert-";
            // line 232
            echo twig_escape_filter($this->env, $this->getAttribute(($context["lead_color"] ?? null), $this->getAttribute($context["lead"], "status_new", array()), array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lead"], "status_new", array()), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"text-align: center; color: #000; text-shadow: 0px 1px 2px #FFF;\"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"alert-";
            // line 234
            echo twig_escape_filter($this->env, $this->getAttribute(($context["lead_color"] ?? null), $this->getAttribute($context["lead"], "status_was", array()), array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lead"], "status_was", array()), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"Editar Lead\" href=\"/alunos/";
            // line 237
            echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "id", array()), "html", null, true);
            echo "/lead/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lead"], "lead_id", array()), "html", null, true);
            echo "\"><i
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<div>#";
            // line 241
            echo twig_escape_filter($this->env, $this->getAttribute($context["lead"], "lead_id", array()), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lead'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 245
        echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 286
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
        return array (  397 => 286,  390 => 245,  380 => 241,  371 => 237,  363 => 234,  356 => 232,  349 => 228,  345 => 227,  339 => 224,  335 => 223,  331 => 221,  327 => 220,  299 => 194,  285 => 183,  274 => 175,  263 => 167,  252 => 159,  239 => 148,  237 => 147,  234 => 146,  224 => 138,  215 => 135,  211 => 134,  208 => 133,  204 => 132,  186 => 116,  184 => 115,  173 => 107,  163 => 100,  156 => 96,  149 => 92,  140 => 88,  127 => 78,  120 => 74,  113 => 70,  102 => 61,  96 => 59,  94 => 58,  87 => 54,  80 => 50,  69 => 42,  62 => 38,  55 => 34,  44 => 26,  36 => 20,  33 => 19,  29 => 1,  27 => 4,  25 => 3,  11 => 1,);
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

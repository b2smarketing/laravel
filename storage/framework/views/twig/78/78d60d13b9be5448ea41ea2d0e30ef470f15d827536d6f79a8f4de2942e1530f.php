<?php

/* /var/www/app/ambiente_conversao/tecfam2019.1sem-new/views//adicionais.twig */
class __TwigTemplate_d77ce40a923c3a14fcb9b5828d55a666acdfc01ba9cc7a1f654f25cf200231d3 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AmbienteConversao::layout", "/var/www/app/ambiente_conversao/tecfam2019.1sem-new/views//adicionais.twig", 3);
        $this->blocks = array(
            'pagina' => array($this, 'block_pagina'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AmbienteConversao::layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["class"] = "inscricao";
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_pagina($context, array $blocks = array())
    {
        // line 5
        echo "<!-- <header class=\"banner-inscricao\">
\t<div class=\"layout\">
\t\t<h2 id=\"vc-no-topo\">Você no <span>topo!</span></h2>
\t\t<h2 id=\"nome-curso\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["inscricao"] ?? null), "nome", array(), "array"), "html", null, true);
        echo "</h2>
\t</div>
\t<h2 id=\"nome-curso-mobile\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["inscricao"] ?? null), "nome", array(), "array"), "html", null, true);
        echo "</h2>
</header> -->

<style type=\"text/css\">
#inscricao-dados { font-size: 0px; }
</style>

<main>
\t<div class=\"layout\">
\t\t<div class=\"center\">
\t\t\t<h1 style=\"padding-top:2em\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["inscricao"] ?? null), "nome", array(), "array"), "html", null, true);
        echo "</h1>
\t\t\t<h4>Completar Cadastro</h4>
\t\t\t<h5 class=\"center\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "nome", array()), "html", null, true);
        echo "</h5>
\t\t\t<form action=\"/inscricao/adicionais\" method=\"post\">
\t\t\t\t";
        // line 24
        echo csrf_field();
        echo "
\t\t\t\t<input type=\"hidden\" name=\"cpf\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "cpf", array()), "html", null, true);
        echo "\" />
\t\t\t\t<div id=\"inscricao-dados\">
\t\t\t\t\t<div class=\"input responsive-full\">
\t\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t\t<select name=\"dados_adicionais[ensino_medio]\">
\t\t\t\t\t\t\t\t<option value=\"\">Onde conclu&iacute;u o ensino m&eacute;dio?</option>
\t\t\t\t\t\t\t\t<option value=\"publica\" ";
        // line 31
        if (($this->getAttribute($this->getAttribute(($context["aluno"] ?? null), "dados_adicionais", array()), "ensino_medio", array()) == "publica")) {
            echo " selected=\"selected\" ";
        }
        echo ">P&uacute;blica</option>
\t\t\t\t\t\t\t\t<option value=\"particular\" ";
        // line 32
        if (($this->getAttribute($this->getAttribute(($context["aluno"] ?? null), "dados_adicionais", array()), "ensino_medio", array()) == "particular")) {
            echo " selected=\"selected\" ";
        }
        echo ">Particular</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input half responsive-full\">
\t\t\t\t\t\t<input placeholder=\"Ano de conclus&atilde;o do Ensino M&eacute;dio:\" type=\"text\" name=\"dados_adicionais[ano_conclusao]\" value=\"";
        // line 37
        if (($this->getAttribute($this->getAttribute(($context["aluno"] ?? null), "dados_adicionais", array()), "ano_conclusao", array()) == 0)) {
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["aluno"] ?? null), "dados_adicionais", array()), "ano_conclusao", array()), "html", null, true);
        }
        echo "\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input half responsive-full\">
\t\t\t\t\t\t<input placeholder=\"Nome completo do Pai:\" type=\"text\" name=\"dados_adicionais[nome_pai]\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["aluno"] ?? null), "dados_adicionais", array()), "nome_pai", array()), "html", null, true);
        echo "\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input half responsive-full\">
\t\t\t\t\t\t<input placeholder=\"Nome completo da M&atilde;e:\" type=\"text\" name=\"dados_adicionais[nome_mae]\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["aluno"] ?? null), "dados_adicionais", array()), "nome_mae", array()), "html", null, true);
        echo "\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input fourth fill\">
\t\t\t\t\t\t<input placeholder=\"Endere&ccedil;o:\" type=\"text\" name=\"endereco\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "endereco", array()), "html", null, true);
        echo "\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input fourth\">
\t\t\t\t\t\t<input placeholder=\"N&ordm;:\" type=\"text\" name=\"numero\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "numero", array()), "html", null, true);
        echo "\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input half responsive-full\">
\t\t\t\t\t\t<input placeholder=\"Complemento:\" type=\"text\" name=\"complemento\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "complemento", array()), "html", null, true);
        echo "\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input half responsive-full\">
\t\t\t\t\t\t<input placeholder=\"Bairro:\" type=\"text\" name=\"bairro\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "bairro", array()), "html", null, true);
        echo "\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input half responsive-full\">
\t\t\t\t\t\t<input placeholder=\"CEP:\" type=\"text\" name=\"dados_adicionais[cep]\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["aluno"] ?? null), "dados_adicionais", array()), "cep", array()), "html", null, true);
        echo "\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input half responsive-full\">
\t\t\t\t\t\t<input placeholder=\"Cidade/UF\" type=\"text\" name=\"cidade\" readonly=\"readonly\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["aluno"] ?? null), "cidade", array()), "nome", array()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["aluno"] ?? null), "cidade", array()), "estado", array()), "uf", array()), "html", null, true);
        echo "\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input full\">
\t\t\t\t\t\t<p>Atendendo &agrave; Portaria Normativa n&ordm; 21, de 28 de agosto de 2013, com rela&ccedil;&atilde;o &agrave; ra&ccedil;a/cor, o candidato se autodeclara:</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input responsive-full\">
\t\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t\t<select name=\"dados_adicionais[raca]\" required=\"required\">
\t\t\t\t\t\t\t\t<option value=\"\">Autodeclara&ccedil;&atilde;o ra&ccedil;a/cor:</option>
\t\t\t\t\t\t\t\t";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["racas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["raca"]) {
            echo " 
\t\t\t\t\t\t\t\t<option value=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["raca"], "codigo", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute(($context["aluno"] ?? null), "dados_adicionais", array()), "raca", array()) == $this->getAttribute($context["raca"], "codigo", array()))) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["raca"], "raca", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['raca'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input responsive-full\" id=\"deficiencia-container\">
\t\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t\t<select name=\"dados_adicionais[deficiencia]\" id=\"deficiencia\" required=\"required\">
\t\t\t\t\t\t\t\t<option value=\"\">Possui alguma defici&ecirc;ncia?</option>
\t\t\t\t\t\t\t\t<option value=\"sim\" ";
        // line 80
        if (($this->getAttribute($this->getAttribute(($context["aluno"] ?? null), "dados_adicionais", array()), "deficiencia", array()) == "sim")) {
            echo " selected=\"selected\" ";
        }
        echo ">Sim</option>
\t\t\t\t\t\t\t\t<option value=\"nao\" ";
        // line 81
        if (($this->getAttribute($this->getAttribute(($context["aluno"] ?? null), "dados_adicionais", array()), "deficiencia", array()) == "nao")) {
            echo " selected=\"selected\" ";
        }
        echo ">N&atilde;o</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input responsive-full\" id=\"deficiencia-qual\">
\t\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t\t<select name=\"dados_adicionais[deficiencia_qual]\">
\t\t\t\t\t\t\t\t<option value=\"\">Qual?</option>
\t\t\t\t\t\t\t\t";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["deficiencias"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["deficiencia"]) {
            // line 90
            echo "\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["deficiencia"], "codigo", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["deficiencia"], "codigo", array()) == $this->getAttribute($this->getAttribute(($context["aluno"] ?? null), "dados_adicionais", array()), "deficiencia_qual", array()))) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["deficiencia"], "deficiencia", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['deficiencia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input responsive-full\" id=\"deficiencia-condicoes\">
\t\t\t\t\t\t<input placeholder=\"Condi&ccedil;&otilde;es especiais para a realiza&ccedil;&atilde;o da prova:\" type=\"text\" name=\"dados_adicionais[deficiencia_condicoes]\" value=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["aluno"] ?? null), "dados_adicionais", array()), "deficiencia_condicoes", array()), "html", null, true);
        echo "\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input responsive-full\">
\t\t\t\t\t\t<input type=\"submit\" class=\"button-cta\" value=\"Concluir Inscri&ccedil;&atilde;o\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</main>

";
    }

    public function getTemplateName()
    {
        return "/var/www/app/ambiente_conversao/tecfam2019.1sem-new/views//adicionais.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 96,  228 => 92,  213 => 90,  209 => 89,  196 => 81,  190 => 80,  181 => 73,  167 => 71,  161 => 70,  147 => 61,  141 => 58,  135 => 55,  129 => 52,  123 => 49,  117 => 46,  111 => 43,  105 => 40,  96 => 37,  86 => 32,  80 => 31,  71 => 25,  67 => 24,  62 => 22,  57 => 20,  44 => 10,  39 => 8,  34 => 5,  31 => 4,  27 => 3,  25 => 1,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/ambiente_conversao/tecfam2019.1sem-new/views//adicionais.twig", "");
    }
}

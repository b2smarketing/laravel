<?php

/* /var/www/app/ambiente_conversao/tecfam2019.1sem/views//inscricao.twig */
class __TwigTemplate_740b0f487576d69791ca9f56308febb0f2bbb3746f30fed701b6dbff8b99c6f8 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AmbienteConversao::layout", "/var/www/app/ambiente_conversao/tecfam2019.1sem/views//inscricao.twig", 3);
        $this->blocks = array(
            'pagina' => array($this, 'block_pagina'),
            'scripts' => array($this, 'block_scripts'),
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
        echo "<header class=\"banner-inscricao\">
\t<div class=\"layout\">
\t\t<h2 id=\"vc-no-topo\">Você no <span>topo!</span></h2>
\t\t<h2 id=\"nome-curso\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["curso"] ?? null), "nome", array()), "html", null, true);
        echo "</h2>
\t</div>
\t<h2 id=\"nome-curso-mobile\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["curso"] ?? null), "nome", array()), "html", null, true);
        echo "</h2>
</header>
<main>
\t<div class=\"layout\">
\t\t<div class=\"center\">
\t\t\t<div id=\"info-curso\">
\t\t\t\t<div>
\t\t\t\t\t<span><span class=\"icon modalidade\"></span><span class=\"title\">Modalidade</span></span>
\t\t\t\t\t<span>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["curso"] ?? null), "dados_adicionais", array()), "modalidade", array()), "html", null, true);
        echo "</span>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<span><span class=\"icon duracao\"></span><span class=\"title\">Dura&ccedil;&atilde;o</span></span>
\t\t\t\t\t<span>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["curso"] ?? null), "duracao", array()), "html", null, true);
        echo " semestres</span>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<span><span class=\"icon campus\"></span><span class=\"title\">Campus</span></span>
\t\t\t\t\t<span>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["unidade"] ?? null), "nome", array()), "html", null, true);
        echo "<br /></span>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<span><span class=\"icon taxa\"></span><span class=\"title\">Taxa de Inscrição</span></span>
\t\t\t\t\t<span>";
        // line 30
        if ($this->getAttribute(($context["curso"] ?? null), "taxa", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["curso"] ?? null), "taxa", array()), "html", null, true);
        } else {
            echo "Grátis!";
        }
        echo "</span>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<span><span class=\"icon periodo\"></span><span class=\"title\">";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["curso"] ?? null), "dados_adicionais", array()), "periodo", array()), "html", null, true);
        echo "</span></span>
\t\t\t\t\t<span>R\$ ";
        // line 34
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["curso"] ?? null), "valor", array()), 2, ",", "."), "html", null, true);
        echo "</span>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<span><span class=\"icon modo\"></span><span class=\"title\">";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["curso"] ?? null), "dados_adicionais", array()), "modo", array()), "html", null, true);
        echo "</span></span>
\t\t\t\t\t<span>FAM-Americana</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<h3 id=\"inicio-aulas\">";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["campanha"] ?? null), "textos", array()), "inicio_aulas", array()), "html", null, true);
        echo "</h3>
\t\t";
        // line 52
        echo "\t\t<div id=\"detalhes-curso\">
\t\t\t<div class=\"tab-container\">
\t\t\t\t<section class=\"tab active\" title=\"Introdução\">
\t\t\t\t\t<div class=\"video-container full-width\">
\t\t\t\t\t\t<div class=\"youtube video\" data-video=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["curso"] ?? null), "dados_adicionais", array()), "video", array()), "html", null, true);
        echo "\"></div>
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t\t<section class=\"tab\" title=\"Sobre o Curso\">
\t\t\t\t\t<h3>Sobre o Curso</h3>
\t\t\t\t\t<p>";
        // line 61
        echo $this->getAttribute($this->getAttribute(($context["curso"] ?? null), "dados_adicionais", array()), "descricao", array());
        echo "</p>
\t\t\t\t</section>
\t\t\t\t<section class=\"tab\" title=\"Mercado de Trabalho\">
\t\t\t\t\t<h3>Mercado de Trabalho</h3>
\t\t\t\t\t<p>";
        // line 65
        echo $this->getAttribute($this->getAttribute(($context["curso"] ?? null), "dados_adicionais", array()), "mercado", array());
        echo "</p>
\t\t\t\t</section>
\t\t\t\t<section class=\"tab\" title=\"Grade Curricular\">
\t\t\t\t\t<h3>Grade Curricular</h3>
\t\t\t\t\t<p>";
        // line 69
        echo $this->getAttribute($this->getAttribute(($context["curso"] ?? null), "dados_adicionais", array()), "grade", array());
        echo "</p>
\t\t\t\t</section>
\t\t\t\t<section class=\"tab\" title=\"Coordenador do Curso\">
\t\t\t\t\t<h3>Coordenador do Curso</h3>
\t\t\t\t\t<p>";
        // line 73
        echo $this->getAttribute($this->getAttribute(($context["curso"] ?? null), "dados_adicionais", array()), "coordenador", array());
        echo "</p>
\t\t\t\t</section>
\t\t\t</div>
\t\t\t<div class=\"center\">
\t\t\t\t<h2 id=\"inscricao-continuar\">Preencher dados adicionais</h2>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"inscricao-dados\">
\t\t\t<h4>Voc&ecirc; escolheu:</h4>
\t\t\t<h5 class=\"center\">";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute(($context["curso"] ?? null), "nome", array()), "html", null, true);
        echo "</h5>
\t\t\t<form action=\"/inscricao/finaliza\" method=\"post\">
\t\t\t\t";
        // line 84
        echo csrf_field();
        echo "
\t\t\t\t<div class=\"input half\">
\t\t\t\t\t<input required=\"required\" type=\"text\" name=\"aluno[nome_oficial]\" value=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "nome_oficial", array()), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t\t<div class=\"input half\">
\t\t\t\t\t<input placeholder=\"Nome Social*\" type=\"text\" name=\"aluno[nome_social]\" value=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "nome_social", array()), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t\t<div class=\"input third responsive-full\">
\t\t\t\t\t<input required=\"required\" placeholder=\"Data de Nasc.\" type=\"text\" name=\"aluno[datanascimento]\" data-mask=\"99/99/9999\" value=\"";
        // line 92
        if ($this->getAttribute(($context["aluno"] ?? null), "datanascimento", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "datanascimento", array()), "d/m/Y"), "html", null, true);
        }
        echo "\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"input third\">
\t\t\t\t\t<input placeholder=\"Telefone\" type=\"text\" name=\"aluno[telefone]\" data-mask=\"(99) 9999-9999\" value=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "telefone", array()), "html", null, true);
        echo "\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"input third\">
\t\t\t\t\t<input required=\"required\" placeholder=\"Celular\" type=\"text\" name=\"aluno[celular]\" data-mask=\"(99) 99999-9999\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "celular", array()), "html", null, true);
        echo "\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"input fourth responsive-full\">
\t\t\t\t\t<!-- <input required=\"required\" placeholder=\"UF\" type=\"text\" name=\"uf\" value=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "uf", array()), "html", null, true);
        echo "\" /> -->
\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t<select id=\"uf\" required=\"required\" name=\"uf\">
\t\t\t\t\t\t\t<option value=\"\">UF</option>
\t\t\t\t\t\t\t";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["estados"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["estado"]) {
            // line 106
            echo "\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["estado"], "uf", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["estado"], "nome", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['estado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"input fourth fill responsive-full\">
\t\t\t\t\t<!-- <input required=\"required\" placeholder=\"Cidade\" type=\"text\" name=\"cidade\" value=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "cidade", array()), "html", null, true);
        echo "\" /> -->
\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t<select id=\"cidade\" required=\"required\" name=\"cidade\">
\t\t\t\t\t\t\t<option value=\"\">Selecione um estado...</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"input half responsive-full\">
\t\t\t\t\t<input required=\"required\" placeholder=\"CPF\" type=\"text\" readonly=\"readonly\" value=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "cpf", array()), "html", null, true);
        echo "\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"input half responsive-full\">
\t\t\t\t\t<input placeholder=\"RG\" type=\"text\" name=\"aluno[rg]\" data-mask=\"99.999.999-*\" value=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "rg", array()), "html", null, true);
        echo "\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"input responsive-full\">
\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t<select required=\"required\" name=\"conheceu\">
\t\t\t\t\t\t\t<option value=\"\">Como nos conheceu?</option>
\t\t\t\t\t\t";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["campanha"] ?? null), "midias", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["midia"]) {
            // line 130
            echo "\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["midia"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute(($context["lead"] ?? null), "midia", array()), "id", array()) == $this->getAttribute($context["midia"], "id", array()))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["midia"], "nome", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['midia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"input responsive-full\">
\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t<select required=\"required\" name=\"aluno[sexo]\">
\t\t\t\t\t\t\t<option value=\"\">Sexo:</option>
\t\t\t\t\t\t\t<option value=\"Masculino\" ";
        // line 139
        if (($this->getAttribute(($context["aluno"] ?? null), "sexo", array()) == "Masculino")) {
            echo " selected=\"selected\" ";
        }
        echo ">Masculino</option>
\t\t\t\t\t\t\t<option value=\"Feminino\" ";
        // line 140
        if (($this->getAttribute(($context["aluno"] ?? null), "sexo", array()) == "Feminino")) {
            echo " selected=\"selected\" ";
        }
        echo ">Feminino</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 145
        echo "\t\t\t\t";
        // line 154
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["campanha"] ?? null), "campos_personalizados", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["campo"]) {
            // line 155
            echo "\t\t\t\t<div class=\"input responsive-full\">
\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t<select required=\"required\" name=\"dados_adicionais[";
            // line 157
            echo twig_escape_filter($this->env, $this->getAttribute($context["campo"], "nome", array()), "html", null, true);
            echo "]\">
\t\t\t\t\t\t\t<option value=\"\">";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute($context["campo"], "label", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t";
            // line 159
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["campo"], "valores", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 160
                echo "\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "valor", array()), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($this->getAttribute(($context["lead"] ?? null), "dados_adicionais", array()), $this->getAttribute($context["campo"], "nome", array()), array(), "array") == $this->getAttribute($context["option"], "valor", array()))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "label", array()), "html", null, true);
                echo "</option>}
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['campo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "\t\t\t\t<div class=\"input full\">
\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t<select required=\"required\" name=\"dados_adicionais[newsletter]\">
\t\t\t\t\t\t\t<option value=\"\">Receber novidades e informações de cursos por e-mail e Whatsapp?</option>
\t\t\t\t\t\t\t<option value=\"sim\" ";
        // line 170
        if (($this->getAttribute($this->getAttribute(($context["lead"] ?? null), "dados_adicionais", array()), "newsletter", array(), "array") == "sim")) {
            echo "selected";
        }
        echo ">Sim, quero receber novidades e informa&ccedil;&otilde;es de cursos por e-mail e Whatsapp.</option>
\t\t\t\t\t\t\t<option value=\"nao\" ";
        // line 171
        if (($this->getAttribute($this->getAttribute(($context["lead"] ?? null), "dados_adicionais", array()), "newsletter", array(), "array") == "nao")) {
            echo "selected";
        }
        echo ">N&atilde;o gostaria de receber novidades e informa&ccedil;&otilde;es de cursos por e-mail e Whatsapp.</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        // line 175
        if (($this->getAttribute(($context["lead"] ?? null), "prova", array()) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["lead"] ?? null), "prova", array()), "data", array()), "exibir", array()))) {
            // line 176
            echo "\t\t\t\t<div id=\"current_place\">
\t\t\t\t\t<div class=\"input fourth fill responsive-full\">
\t\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t\t<select readonly required=\"required\" name=\"data\">
\t\t\t\t\t\t\t\t<option value=\"";
            // line 180
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["lead"] ?? null), "prova", array()), "data", array()), "id", array()), "html", null, true);
            echo "\">Agendamento Realizado: ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["lead"] ?? null), "prova", array()), "data", array()), "hora", array()), "d/m/Y"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["lead"] ?? null), "prova", array()), "local", array()), "local", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input fourth\">
\t\t\t\t\t\t<input class=\"button-cta\" type=\"button\" value=\"Alterar\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"change_place\" style=\"display:none\">
\t\t\t\t\t<div class=\"input fourth fill responsive-full\">
\t\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t\t<select disabled required=\"required\" name=\"data\">
\t\t\t\t\t\t\t\t<option value=\"\">Escolher novo local e data da matrícula:</option>
\t\t\t\t\t\t\t";
            // line 193
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locais_prova"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["local"]) {
                // line 194
                echo "\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["local"], "datas_provas_disponiveis", array())) {
                    // line 195
                    echo "\t\t\t\t\t\t\t\t<optgroup label=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "local", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 196
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["local"], "datas_provas_disponiveis", array()), "splice", array(0 => 0, 1 => 10), "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                        // line 197
                        echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "hora", array()), "d/m/Y"), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('App\TwigExtended')->dia_semana(twig_date_format_filter($this->env, $this->getAttribute($context["data"], "hora", array()), "w")), "html", null, true);
                        echo "</option>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 199
                    echo "\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t";
                }
                // line 201
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['local'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 202
            echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input fourth responsive-full\">
\t\t\t\t\t\t<input class=\"button-cta\" type=\"button\" value=\"Manter Atual\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        } else {
            // line 210
            echo "\t\t\t\t<div class=\"input full\">
\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t<select required=\"required\" name=\"data\">
\t\t\t\t\t\t\t<option value=\"\">Escolher local e data da matrícula:</option>
\t\t\t\t\t\t";
            // line 214
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locais_prova"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["local"]) {
                // line 215
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute($context["local"], "datas_provas_disponiveis", array())) {
                    // line 216
                    echo "\t\t\t\t\t\t\t<optgroup label=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "local", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t";
                    // line 217
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["local"], "datas_provas_disponiveis", array()), "splice", array(0 => 0, 1 => 10), "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                        // line 218
                        echo "\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "hora", array()), "d/m/Y"), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('App\TwigExtended')->dia_semana(twig_date_format_filter($this->env, $this->getAttribute($context["data"], "hora", array()), "w")), "html", null, true);
                        echo "</option>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 220
                    echo "\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t";
                }
                // line 222
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['local'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 223
            echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 227
        echo "\t\t\t\t<br />
\t\t\t\t<p class=\"center\" style=\"font-size:1rem;\"><strong>Atendimento das 13 às 21 horas</strong></p>
\t\t\t\t<br />
\t\t\t\t";
        // line 230
        if (($context["erro"] ?? null)) {
            // line 231
            echo "\t\t\t\t<div id=\"error_msg\" class=\"input full\">
\t\t\t\t\t<div class=\"center\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
            // line 234
            if ((($context["erro"] ?? null) == "data")) {
                // line 235
                echo "\t\t\t\t\t\t\tPor favor, selecione uma data para a prova!
\t\t\t\t\t\t\t";
            } elseif ((            // line 236
($context["erro"] ?? null) == "dados")) {
                // line 237
                echo "\t\t\t\t\t\t\tPor favor, preencha todos os dados!
\t\t\t\t\t\t\t";
            }
            // line 239
            echo "\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 243
        echo "\t\t\t\t<div class=\"input responsive-full\">
\t\t\t\t\t<input type=\"submit\" class=\"button-cta\" value=\"Concluir Inscri&ccedil;&atilde;o\" />
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</main>
";
    }

    // line 251
    public function block_scripts($context, array $blocks = array())
    {
        // line 252
        echo "<script src=\"https://unpkg.com/vue\"></script>
<script type=\"text/javascript\">
var app = window.app = new Vue({
\tel: 'main',
\tdata: {
\t\t'aluno': ";
        // line 257
        echo twig_jsonencode_filter(($context["aluno"] ?? null));
        echo ",
\t\t'nome_social': false
\t}
});

app.nome_social = (app.aluno.nome_social.length > 0) || false;
</script>
<script type=\"text/javascript\">
var cidades = ";
        // line 265
        echo twig_jsonencode_filter(($context["cidades"] ?? null));
        echo ";
var sel_uf = '";
        // line 266
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["aluno"] ?? null), "cidade", array()), "estado", array()), "uf", array()), "html", null, true);
        echo "';
var sel_cidade = '";
        // line 267
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["aluno"] ?? null), "cidade", array()), "nome", array()), "html", null, true);
        echo "';

var seleciona_uf = function (uf) {
\tvar estado_id = uf;
\tvar cidade_wrapper = \$('#cidade');
\tvar def = \$('<option value=\"\">Selecione um estado...</option>');

\tcidade_wrapper.html('');

\tif (cidades[estado_id]) {
\t\tvar def = \$('<option value=\"\">Selecione uma cidade...</option>');
\t\tvar estado = cidades[estado_id];
\t\tfor (var i = 0; i < estado.length; i++) {
\t\t\tvar cidade = estado[i];
\t\t\tvar cidade = \$('<option></option>').val(cidade.nome).html(cidade.nome);
\t\t\tcidade_wrapper.append(cidade);
\t\t}
\t\t
\t\tif (estado_id == 'SP')
\t\t\t\$('#cidade').val('Americana');
\t}
\tcidade_wrapper.prepend(def);
}

if (sel_uf.length > 0) {
\t\$('#uf').val(sel_uf);
\tseleciona_uf(sel_uf);
\tif (sel_cidade.length > 0)
\t\t\$('#cidade').val(sel_cidade);
}

\$('#uf').on('change', function () {
\tseleciona_uf(\$(this).val());
});

// Botão Mudar Local Prova

\$('#current_place input[type=\"button\"]').click(() => {
\t\$('#change_place')
\t\t.show()
\t\t.find('select')
\t\t\t.prop('disabled', false);

\t\$('#current_place')
\t\t.hide()
\t\t.find('select')
\t\t\t.prop('disabled', true);
});

// Botão Local Prova Atual

\$('#change_place input[type=\"button\"]').click(() => {
\t\$('#current_place')
\t\t.show()
\t\t.find('select')
\t\t\t.prop('disabled', false);

\t\$('#change_place')
\t\t.hide()
\t\t.find('select')
\t\t\t.prop('disabled', true);
});
</script>
";
    }

    public function getTemplateName()
    {
        return "/var/www/app/ambiente_conversao/tecfam2019.1sem/views//inscricao.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  560 => 267,  556 => 266,  552 => 265,  541 => 257,  534 => 252,  531 => 251,  520 => 243,  514 => 239,  510 => 237,  508 => 236,  505 => 235,  503 => 234,  498 => 231,  496 => 230,  491 => 227,  485 => 223,  479 => 222,  475 => 220,  462 => 218,  458 => 217,  453 => 216,  450 => 215,  446 => 214,  440 => 210,  430 => 202,  424 => 201,  420 => 199,  407 => 197,  403 => 196,  398 => 195,  395 => 194,  391 => 193,  371 => 180,  365 => 176,  363 => 175,  354 => 171,  348 => 170,  342 => 166,  333 => 162,  318 => 160,  314 => 159,  310 => 158,  306 => 157,  302 => 155,  297 => 154,  295 => 145,  286 => 140,  280 => 139,  271 => 132,  256 => 130,  252 => 129,  243 => 123,  237 => 120,  226 => 112,  220 => 108,  209 => 106,  205 => 105,  198 => 101,  192 => 98,  186 => 95,  178 => 92,  172 => 89,  166 => 86,  161 => 84,  156 => 82,  144 => 73,  137 => 69,  130 => 65,  123 => 61,  115 => 56,  109 => 52,  105 => 42,  97 => 37,  91 => 34,  87 => 33,  77 => 30,  70 => 26,  63 => 22,  56 => 18,  45 => 10,  40 => 8,  35 => 5,  32 => 4,  28 => 3,  26 => 1,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/ambiente_conversao/tecfam2019.1sem/views//inscricao.twig", "");
    }
}

<?php

/* /var/www/app/ambiente_conversao/fam-digital-2019.1/views//inscricao.twig */
class __TwigTemplate_f5704bc372afec76da4175c246da15c01457f9b0b700bffe0f98f27ca9ee14e0 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AmbienteConversao::layout", "/var/www/app/ambiente_conversao/fam-digital-2019.1/views//inscricao.twig", 3);
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
\t\t\t\t\t<span><span class=\"icon taxa\"></span><span class=\"title\">Parcelas</span></span>
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
\t\t<div id=\"desconto-regressivo\" class=\"center\">
\t\t\t";
        // line 45
        echo "\t\t\t<img src=\"";
        echo twig_escape_filter($this->env, ($context["url_root"] ?? null), "html", null, true);
        echo "/img/desconto-regressivo.png\" />
\t\t\t";
        // line 47
        echo "\t\t\t";
        // line 49
        echo "\t\t\t<p>&nbsp;</p>
\t\t</div>
\t\t<div id=\"detalhes-curso\">
\t\t\t<div class=\"tab-container\">
\t\t\t\t<section class=\"tab active\" title=\"Introdução\">
\t\t\t\t\t<div class=\"video-container full-width\">
\t\t\t\t\t\t<div class=\"youtube video\" data-video=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["curso"] ?? null), "dados_adicionais", array()), "video", array()), "html", null, true);
        echo "\"></div>
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t\t<section class=\"tab\" title=\"Sobre o Curso\">
\t\t\t\t\t<h3>Sobre o Curso</h3>
\t\t\t\t\t";
        // line 60
        echo $this->getAttribute($this->getAttribute(($context["curso"] ?? null), "dados_adicionais", array()), "descricao", array());
        echo "
\t\t\t\t</section>
\t\t\t\t<section class=\"tab\" title=\"Mercado de Trabalho\">
\t\t\t\t\t<h3>Mercado de Trabalho</h3>
\t\t\t\t\t<p>";
        // line 64
        echo $this->getAttribute($this->getAttribute(($context["curso"] ?? null), "dados_adicionais", array()), "mercado", array());
        echo "</p>
\t\t\t\t</section>
\t\t\t\t<section class=\"tab\" title=\"Grade Curricular\">
\t\t\t\t\t<h3>Grade Curricular</h3>
\t\t\t\t\t<p>";
        // line 68
        echo $this->getAttribute($this->getAttribute(($context["curso"] ?? null), "dados_adicionais", array()), "grade", array());
        echo "</p>
\t\t\t\t</section>
\t\t\t\t<section class=\"tab\" title=\"Coordenador do Curso\">
\t\t\t\t\t<h3>Coordenador do Curso</h3>
\t\t\t\t\t<p>";
        // line 72
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
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute(($context["curso"] ?? null), "nome", array()), "html", null, true);
        echo "</h5>
\t\t\t<form action=\"/inscricao/finaliza\" method=\"post\">
\t\t\t\t";
        // line 83
        echo csrf_field();
        echo "
\t\t\t\t<div class=\"input half\">
\t\t\t\t\t<input required=\"required\" type=\"text\" name=\"aluno[nome_oficial]\" value=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "nome_oficial", array()), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t\t<div class=\"input half\">
\t\t\t\t\t<input placeholder=\"Nome Social*\" type=\"text\" name=\"aluno[nome_social]\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "nome_social", array()), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t\t<div class=\"input full\">
\t\t\t\t\t<p>* De acordo com o Decreto nº 8.727, de 28 de abril de 2016, que \"Dispõe sobre o uso do NOME SOCIAL e o reconhecimento da identidade de gênero de pessoas travestis e transexuais no âmbito da administração pública federal direta, autárquica e fundacional\".</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"input half responsive-full\">
\t\t\t\t\t<input required=\"required\" placeholder=\"CPF\" type=\"text\" readonly=\"readonly\" value=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "cpf", array()), "html", null, true);
        echo "\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"input half responsive-full\">
\t\t\t\t\t<input placeholder=\"RG\" type=\"text\" name=\"aluno[rg]\" data-mask=\"99.999.999-*\" value=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "rg", array()), "html", null, true);
        echo "\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"input third responsive-full\">
\t\t\t\t\t<input required=\"required\" placeholder=\"Data de Nasc.\" type=\"text\" name=\"aluno[datanascimento]\" data-mask=\"99/99/9999\" value=\"";
        // line 100
        if ($this->getAttribute(($context["aluno"] ?? null), "datanascimento", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "datanascimento", array()), "d/m/Y"), "html", null, true);
        }
        echo "\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"input third\">
\t\t\t\t\t<input placeholder=\"Telefone\" type=\"text\" name=\"aluno[telefone]\" data-mask=\"(99) 9999-9999\" value=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "telefone", array()), "html", null, true);
        echo "\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"input third\">
\t\t\t\t\t<input required=\"required\" placeholder=\"Celular\" type=\"text\" name=\"aluno[celular]\" data-mask=\"(99) 99999-9999\" value=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "celular", array()), "html", null, true);
        echo "\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"input fourth responsive-full\">
\t\t\t\t\t<!-- <input required=\"required\" placeholder=\"UF\" type=\"text\" name=\"uf\" value=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "uf", array()), "html", null, true);
        echo "\" /> -->
\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t<select id=\"uf\" required=\"required\" name=\"uf\">
\t\t\t\t\t\t\t<option value=\"\">UF</option>
\t\t\t\t\t\t\t";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["estados"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["estado"]) {
            // line 114
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
        // line 116
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"input fourth fill responsive-full\">
\t\t\t\t\t<!-- <input required=\"required\" placeholder=\"Cidade\" type=\"text\" name=\"cidade\" value=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "cidade", array()), "html", null, true);
        echo "\" /> -->
\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t<select id=\"cidade\" required=\"required\" name=\"cidade\">
\t\t\t\t\t\t\t<option value=\"\">Selecione um estado...</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"input responsive-full\">
\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t<select required=\"required\" name=\"conheceu\">
\t\t\t\t\t\t\t<option value=\"\">Como nos conheceu?</option>
\t\t\t\t\t\t";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["campanha"] ?? null), "midias", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["midia"]) {
            // line 132
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
        // line 134
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"input responsive-full\">
\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t<select required=\"required\" name=\"aluno[sexo]\">
\t\t\t\t\t\t\t<option value=\"\">Sexo:</option>
\t\t\t\t\t\t\t<option value=\"Masculino\" ";
        // line 141
        if (($this->getAttribute(($context["aluno"] ?? null), "sexo", array()) == "Masculino")) {
            echo " selected=\"selected\" ";
        }
        echo ">Masculino</option>
\t\t\t\t\t\t\t<option value=\"Feminino\" ";
        // line 142
        if (($this->getAttribute(($context["aluno"] ?? null), "sexo", array()) == "Feminino")) {
            echo " selected=\"selected\" ";
        }
        echo ">Feminino</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 147
        echo "\t\t\t\t";
        // line 156
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["campanha"] ?? null), "campos_personalizados", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["campo"]) {
            // line 157
            echo "\t\t\t\t<div class=\"input responsive-full\">
\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t<select required=\"required\" name=\"dados_adicionais[";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute($context["campo"], "nome", array()), "html", null, true);
            echo "]\">
\t\t\t\t\t\t\t<option value=\"\">";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute($context["campo"], "label", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t";
            // line 161
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["campo"], "valores", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 162
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
            // line 164
            echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['campo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo "\t\t\t\t<div class=\"input full\">
\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t<select required=\"required\" name=\"dados_adicionais[newsletter]\">
\t\t\t\t\t\t\t<option value=\"\">Receber novidades e informações de cursos por e-mail e Whatsapp?</option>
\t\t\t\t\t\t\t<option value=\"sim\" ";
        // line 172
        if (($this->getAttribute($this->getAttribute(($context["lead"] ?? null), "dados_adicionais", array()), "newsletter", array(), "array") == "sim")) {
            echo "selected";
        }
        echo ">Sim, quero receber novidades e informa&ccedil;&otilde;es de cursos por e-mail e Whatsapp.</option>
\t\t\t\t\t\t\t<option value=\"nao\" ";
        // line 173
        if (($this->getAttribute($this->getAttribute(($context["lead"] ?? null), "dados_adicionais", array()), "newsletter", array(), "array") == "nao")) {
            echo "selected";
        }
        echo ">N&atilde;o gostaria de receber novidades e informa&ccedil;&otilde;es de cursos por e-mail e Whatsapp.</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"input full\">
\t\t\t\t\t<p>Candidatos com boletim do ENEM (realizados ap&oacute;s 2010) com nota de reda&ccedil;&atilde;o superior a 400 pontos n&atilde;o necessitam prestar vestibular, por&eacute;m &eacute; necess&aacute;rio selecionar uma data para apresenta&ccedil;&atilde;o do boletim (exceto notas do ENEM realizadas como treineiro).</p>
\t\t\t\t</div>
\t\t\t";
        // line 180
        if (($this->getAttribute(($context["lead"] ?? null), "prova", array()) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["lead"] ?? null), "prova", array()), "data", array()), "exibir", array()))) {
            // line 181
            echo "\t\t\t\t<div id=\"current_place\">
\t\t\t\t\t<div class=\"input fourth fill responsive-full\">
\t\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t\t<select readonly required=\"required\" name=\"data\">
\t\t\t\t\t\t\t\t<option value=\"";
            // line 185
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["lead"] ?? null), "prova", array()), "data", array()), "id", array()), "html", null, true);
            echo "\">Agendamento Realizado: ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["lead"] ?? null), "prova", array()), "data", array()), "hora", array()), "d/m/Y"), "html", null, true);
            echo " às ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["lead"] ?? null), "prova", array()), "data", array()), "hora", array()), "H:i"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["lead"] ?? null), "prova", array()), "local", array()), "local", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input fourth responsive-full\">
\t\t\t\t\t\t<input class=\"button-cta\" type=\"button\" value=\"Alterar\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"change_place\" style=\"display:none\">
\t\t\t\t\t<div class=\"input fourth fill responsive-full\">
\t\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t\t<select disabled required=\"required\" name=\"data\">
\t\t\t\t\t\t\t\t<option value=\"\">Escolher novo local e data da prova:</option>
\t\t\t\t\t\t\t";
            // line 198
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locais_prova"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["local"]) {
                // line 199
                echo "\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["local"], "datas_provas_disponiveis", array())) {
                    // line 200
                    echo "\t\t\t\t\t\t\t\t<optgroup label=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "local", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 201
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["local"], "datas_provas_disponiveis", array()), "splice", array(0 => 0, 1 => 10), "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                        // line 202
                        echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "hora", array()), "d/m/Y"), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "hora", array()), "H:i"), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('App\TwigExtended')->dia_semana(twig_date_format_filter($this->env, $this->getAttribute($context["data"], "hora", array()), "w")), "html", null, true);
                        echo "</option>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 204
                    echo "\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t";
                }
                // line 206
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['local'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 207
            echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input fourth responsive-full\">
\t\t\t\t\t\t<input class=\"button-cta\" type=\"button\" value=\"Manter Atual\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        } else {
            // line 215
            echo "\t\t\t\t<div class=\"input full\">
\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t<select required=\"required\" name=\"data\">
\t\t\t\t\t\t\t<option value=\"\">Escolher local e data da prova:</option>
\t\t\t\t\t\t";
            // line 219
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locais_prova"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["local"]) {
                // line 220
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute($context["local"], "datas_provas_disponiveis", array())) {
                    // line 221
                    echo "\t\t\t\t\t\t\t<optgroup label=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "local", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t";
                    // line 222
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["local"], "datas_provas_disponiveis", array()), "splice", array(0 => 0, 1 => 10), "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                        // line 223
                        echo "\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "hora", array()), "d/m/Y"), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "hora", array()), "H:i"), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('App\TwigExtended')->dia_semana(twig_date_format_filter($this->env, $this->getAttribute($context["data"], "hora", array()), "w")), "html", null, true);
                        echo "</option>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 225
                    echo "\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t";
                }
                // line 227
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['local'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 228
            echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 232
        echo "\t\t\t\t";
        if (($context["erro"] ?? null)) {
            // line 233
            echo "\t\t\t\t<div id=\"error_msg\" class=\"input full\">
\t\t\t\t\t<div class=\"center\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
            // line 236
            if ((($context["erro"] ?? null) == "data")) {
                // line 237
                echo "\t\t\t\t\t\t\tPor favor, selecione uma data para a prova!
\t\t\t\t\t\t\t";
            } elseif ((            // line 238
($context["erro"] ?? null) == "dados")) {
                // line 239
                echo "\t\t\t\t\t\t\tPor favor, preencha todos os dados!
\t\t\t\t\t\t\t";
            }
            // line 241
            echo "\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 245
        echo "\t\t\t\t<div class=\"input full\">
\t\t\t\t\t<p><strong>ATENÇÃO CANDIDATOS ENEM ou JÁ GRADUADOS: </strong><br/>O horário de atendimento é das 9 às 21 horas.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"input responsive-full\">
\t\t\t\t\t<input type=\"submit\" class=\"button-cta\" value=\"Concluir Inscri&ccedil;&atilde;o\" />
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</main>
";
    }

    // line 256
    public function block_scripts($context, array $blocks = array())
    {
        // line 257
        echo "<script src=\"https://unpkg.com/vue\"></script>
<script type=\"text/javascript\">
var app = window.app = new Vue({
\tel: 'main',
\tdata: {
\t\t'aluno': ";
        // line 262
        echo twig_jsonencode_filter(($context["aluno"] ?? null));
        echo ",
\t\t'nome_social': false
\t}
});

app.nome_social = (app.aluno.nome_social.length > 0) || false;
</script>
<script type=\"text/javascript\">
var cidades = ";
        // line 270
        echo twig_jsonencode_filter(($context["cidades"] ?? null));
        echo ";
var sel_uf = '";
        // line 271
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["aluno"] ?? null), "cidade", array()), "estado", array()), "uf", array()), "html", null, true);
        echo "';
var sel_cidade = '";
        // line 272
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
        return "/var/www/app/ambiente_conversao/fam-digital-2019.1/views//inscricao.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  578 => 272,  574 => 271,  570 => 270,  559 => 262,  552 => 257,  549 => 256,  535 => 245,  529 => 241,  525 => 239,  523 => 238,  520 => 237,  518 => 236,  513 => 233,  510 => 232,  504 => 228,  498 => 227,  494 => 225,  479 => 223,  475 => 222,  470 => 221,  467 => 220,  463 => 219,  457 => 215,  447 => 207,  441 => 206,  437 => 204,  422 => 202,  418 => 201,  413 => 200,  410 => 199,  406 => 198,  384 => 185,  378 => 181,  376 => 180,  364 => 173,  358 => 172,  352 => 168,  343 => 164,  328 => 162,  324 => 161,  320 => 160,  316 => 159,  312 => 157,  307 => 156,  305 => 147,  296 => 142,  290 => 141,  281 => 134,  266 => 132,  262 => 131,  248 => 120,  242 => 116,  231 => 114,  227 => 113,  220 => 109,  214 => 106,  208 => 103,  200 => 100,  194 => 97,  188 => 94,  179 => 88,  173 => 85,  168 => 83,  163 => 81,  151 => 72,  144 => 68,  137 => 64,  130 => 60,  122 => 55,  114 => 49,  112 => 47,  107 => 45,  102 => 42,  94 => 37,  88 => 34,  77 => 30,  70 => 26,  63 => 22,  56 => 18,  45 => 10,  40 => 8,  35 => 5,  32 => 4,  28 => 3,  26 => 1,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/ambiente_conversao/fam-digital-2019.1/views//inscricao.twig", "");
    }
}

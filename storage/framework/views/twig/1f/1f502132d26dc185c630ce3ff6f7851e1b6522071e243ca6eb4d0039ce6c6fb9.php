<?php

/* /var/www/app/ambiente_conversao/vestibularfam2020.1/views//inscricao.twig */
class __TwigTemplate_7d82412b96cd4dcdd2c4bc70d9cd41ada05ace640983ee67f74fbc5e9bcd2242 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AmbienteConversao::layout", "/var/www/app/ambiente_conversao/vestibularfam2020.1/views//inscricao.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AmbienteConversao::layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["page_id"] = "page-inscricao";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
\t<div
\t\tid=\"pageinscricao\">
\t\t<!-- Principal -->
\t\t<img class=\"imginscricao\" src=\"/assets/images/fam2020.png\">
\t\t<form method=\"post\" action=\"/inscricao/finaliza\" class=\"js-form\" enctype=\"multipart/form-data\">
\t\t\t";
        // line 13
        echo csrf_field();
        echo "
\t\t\t";
        // line 292
        echo "
\t\t\t\t<main
\t\t\t\t\tid=\"page-inscricao\">
\t\t\t\t\t<!-- Cabeçalho -->
\t\t\t\t\t<header class=\"fit-height\">
\t\t\t\t\t\t<div class=\"container fit fit-height\">
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"fit align-items-end\">
\t\t\t\t\t\t\t\t<!-- Tela: Opções de Curso -->
\t\t\t\t\t\t\t\t<div id=\"acfam-inscricao-opcoes-curso\" class=\"col-md-12 mb-2\">
\t\t\t\t\t\t\t\t\t<h2>Opções de Curso</h2>
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"row\">
\t\t\t\t\t\t\t\t\t\t<!-- Primeira Opção -->
\t\t\t\t\t\t\t\t\t\t<div class=\"opcao-curso col-xs-12 col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"acfam-inscricao-opcoes-curso-1\">Primeira Opção *:</label>

\t\t\t\t\t\t\t\t\t\t\t<!-- Listagem de Cursos -->
\t\t\t\t\t\t\t\t\t\t\t<select required name=\"opcoes_curso[]\" v-model=\"opcao1\" v-on:change=\"opcao2 = opcao3 = null\" class=\"form-control\" id=\"acfam-inscricao-opcoes-curso-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<option selected :value=\"null\">Selecione um curso...</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option v-for=\"curso in cursos_sort\" :value=\"curso.id\">{{ curso.nome }}</option>
\t\t\t\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t\t\t\t<!-- Detalhes do Curso -->
\t\t\t\t\t\t\t\t\t\t\t<transition name=\"fade_resize\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"curso-info\" id=\"acfam-inscricao-opcoes-curso-1-details\" v-if=\"opcao1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Mensalidade</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>R\$
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ cursos[opcao1].valor|currency }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Modalidade</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ cursos[opcao1].dados_adicionais
.modalidade }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Duração</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ cursos[opcao1].duracao }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\tsemestres</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Modo/Período</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ cursos[opcao1].dados_adicionais
.modo }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ cursos[opcao1].dados_adicionais
.periodo }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</transition>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<!-- Segunda Opção -->
\t\t\t\t\t\t\t\t\t\t<transition name=\"fade\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"opcao-curso col-xs-12 col-md-4\" v-if=\"opcao1\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"acfam-inscricao-opcoes-curso-1\">Segunda Opção:</label>

\t\t\t\t\t\t\t\t\t\t\t\t<!-- Listagem de Cursos -->
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"opcoes_curso[]\" v-model=\"opcao2\" v-on:change=\"opcao3 = null\" class=\"form-control\" id=\"acfam-inscricao-opcoes-curso-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option></option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option v-for=\"curso in cursos2\" :value=\"curso.id\">{{ curso.nome }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t\t\t\t\t<!-- Detalhes do Curso -->
\t\t\t\t\t\t\t\t\t\t\t\t<transition name=\"fade_resize\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"curso-info\" id=\"acfam-inscricao-opcoes-curso-1-details\" v-if=\"opcao2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Mensalidade</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>R\$
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ cursos[opcao2].valor|currency }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Modalidade</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ cursos[opcao2].dados_adicionais
.modalidade }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Duração</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ cursos[opcao2].duracao }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsemestres</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Modo/Período</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ cursos[opcao2].dados_adicionais
.modo }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ cursos[opcao2].dados_adicionais
.periodo }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</transition>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</transition>

\t\t\t\t\t\t\t\t\t\t<!-- Terceira Opção -->
\t\t\t\t\t\t\t\t\t\t<transition name=\"fade\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"opcao-curso col-xs-12 col-md-4\" v-if=\"opcao2\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"acfam-inscricao-opcoes-curso-1\">Terceira Opção:</label>

\t\t\t\t\t\t\t\t\t\t\t\t<!-- Listagem de Cursos -->
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"opcoes_curso[]\" v-model=\"opcao3\" class=\"form-control\" id=\"acfam-inscricao-opcoes-curso-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option></option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option v-for=\"curso in cursos3\" :value=\"curso.id\">{{ curso.nome }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t\t\t\t\t<!-- Detalhes do Curso -->
\t\t\t\t\t\t\t\t\t\t\t\t<transition name=\"fade_resize\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"curso-info\" id=\"acfam-inscricao-opcoes-curso-1-details\" v-if=\"opcao3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Mensalidade</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>R\$
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ cursos[opcao3].valor|currency }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Modalidade</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ cursos[opcao3].dados_adicionais
.modalidade }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Duração</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ cursos[opcao3].duracao }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsemestres</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Modo/Período</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ cursos[opcao3].dados_adicionais
.modo }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ cursos[opcao3].dados_adicionais
.periodo }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</transition>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</transition>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</header>

\t\t\t\t\t<!-- Informações da Campanha -->
\t\t\t\t\t<!--<section id=\"acfam-inscricao-infos\" class=\"container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"inicio-aulas\">Início das Aulas Agosto 2018</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong class=\"desconto-regressivo\">Desconto Regressivo</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"./assets/images/inscricao-desconto-regressivo.png\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Aproveite os Descontos na Matrícula</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tO desconto regressivo refere-se ao pagamento da matrícula (1ª mensalidade) realizada dentro do mês indicado na figura.<br />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t** Exceto para cursos de Tecnologia e Letras.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</section>-->

\t\t\t\t\t<!-- Formulário de Inscrição -->
\t\t\t\t\t\t<section id=\"acfam-inscricao-form\" class=\"container\"> <div
\t\t\t\t\t\t\tclass=\"row\">
\t\t\t\t\t\t\t<!-- Nome -->
\t\t\t\t\t\t\t<div class=\"col-xs-12 col-md-6 v-spacing\">
\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"candidato[nome]\" type=\"text\" placeholder=\"Nome\" required v-model=\"aluno.nome\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Sobrenome -->
\t\t\t\t\t\t\t<div class=\"col-xs-12 col-md-6 v-spacing\">
\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"candidato[sobrenome]\" type=\"text\" placeholder=\"Sobrenome\" required v-model=\"aluno.sobrenome\"/>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Estado -->
\t\t\t\t\t\t\t<div class=\"col-xs-12 col-md-4 v-spacing\">
\t\t\t\t\t\t\t\t<select size required class=\"form-control\" name=\"candidato[estado]\" v-model=\"estado\">
\t\t\t\t\t\t\t\t\t<option selected :value=\"null\">Selecione um estado...</option>
\t\t\t\t\t\t\t\t\t<option value=\"AC\">Acre</option>
\t\t\t\t\t\t\t\t\t<option value=\"AL\">Alagoas</option>
\t\t\t\t\t\t\t\t\t<option value=\"AM\">Amazonas</option>
\t\t\t\t\t\t\t\t\t<option value=\"AP\">Amapá</option>
\t\t\t\t\t\t\t\t\t<option value=\"BA\">Bahia</option>
\t\t\t\t\t\t\t\t\t<option value=\"CE\">Ceará</option>
\t\t\t\t\t\t\t\t\t<option value=\"DF\">Distrito Federal</option>
\t\t\t\t\t\t\t\t\t<option value=\"ES\">Espírito Santo</option>
\t\t\t\t\t\t\t\t\t<option value=\"GO\">Goiás</option>
\t\t\t\t\t\t\t\t\t<option value=\"MA\">Maranhão</option>
\t\t\t\t\t\t\t\t\t<option value=\"MG\">Minas Gerais</option>
\t\t\t\t\t\t\t\t\t<option value=\"MS\">Mato Grosso do Sul</option>
\t\t\t\t\t\t\t\t\t<option value=\"MT\">Mato Grosso</option>
\t\t\t\t\t\t\t\t\t<option value=\"PA\">Pará</option>
\t\t\t\t\t\t\t\t\t<option value=\"PB\">Paraíba</option>
\t\t\t\t\t\t\t\t\t<option value=\"PE\">Pernambuco</option>
\t\t\t\t\t\t\t\t\t<option value=\"PI\">Piauí</option>
\t\t\t\t\t\t\t\t\t<option value=\"PR\">Paraná</option>
\t\t\t\t\t\t\t\t\t<option value=\"RJ\">Rio de Janeiro</option>
\t\t\t\t\t\t\t\t\t<option value=\"RN\">Rio Grande do Norte</option>
\t\t\t\t\t\t\t\t\t<option value=\"RO\">Rondônia</option>
\t\t\t\t\t\t\t\t\t<option value=\"RR\">Roraima</option>
\t\t\t\t\t\t\t\t\t<option value=\"RS\">Rio Grande do Sul</option>
\t\t\t\t\t\t\t\t\t<option value=\"SC\">Santa Catarina</option>
\t\t\t\t\t\t\t\t\t<option value=\"SE\">Sergipe</option>
\t\t\t\t\t\t\t\t\t<option value=\"SP\">São Paulo</option>
\t\t\t\t\t\t\t\t\t<option value=\"TO\">Tocantins</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Cidade -->
\t\t\t\t\t\t\t<div class=\"col-xs-12 col-md-8 v-spacing\">
\t\t\t\t\t\t\t\t<select size required class=\"form-control\" name=\"candidato[cidade]\" v-model=\"cidade\">
\t\t\t\t\t\t\t\t\t<option :value=\"cidade\" v-if=\"!estado\">Selecione uma cidade...</option>
\t\t\t\t\t\t\t\t\t<option selected :value=\"null\" v-if=\"estado\">Selecione uma cidade...</option>
\t\t\t\t\t\t\t\t\t<option v-for=\"cidade in cidades_estado\" :value=\"cidade.id\">{{ cidade.nome }}</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- CPF -->
\t\t\t\t\t\t\t<div class=\"col-xs-12 col-md-6 col-lg-4 v-spacing\">
\t\t\t\t\t\t\t\t<the-mask readonly class=\"form-control\" name=\"candidato[cpf]\" type=\"text\" placeholder=\"CPF\" required :mask=\"['###.###.###-##']\" :value=\"aluno.cpf\"/>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- E-mail -->
\t\t\t\t\t\t\t<div class=\"col-xs-12 col-md-6 col-lg-8 v-spacing\">
\t\t\t\t\t\t\t\t<input class=\"email1 form-control\" name=\"candidato[email]\" type=\"email\" placeholder=\"E-mail\" required v-model=\"aluno.email\"/>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- RG -->
\t\t\t\t\t\t\t<!--<div class=\"col-xs-12 col-md-6 col-lg-4 v-spacing\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<the-mask class=\"form-control\" name=\"candidato[rg]\" type=\"text\" placeholder=\"RG\" required :mask=\"['##.###.###-X']\" v-model=\"aluno.rg\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>-->

\t\t\t\t\t\t\t<!-- Data Nascimento -->
\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-md-6 col-lg-4 v-spacing\"> 
\t\t\t\t\t\t\t\t<input class=\"form-control nasc\" name=\"candidato[data_nascimento]\" type=\"tel\" placeholder=\"Data de Nascimento\" required onkeypress=\"MascaraData(this);\"/>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- WhatsApp / Celular -->
\t\t\t\t\t\t\t<div class=\"col-xs-12 col-md-2 col-lg-1 v-spacing\">
\t\t\t\t\t\t\t\t<the-mask class=\"form-control\" name=\"candidato[celular_ddd]\" type=\"tel\" placeholder=\"DDD\" required :mask=\"['(##)']\" v-model=\"aluno.celular_ddd\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-xs-12 col-md-4 col-lg-3 v-spacing\">
\t\t\t\t\t\t\t\t<the-mask class=\"form-control\" name=\"candidato[celular_numero]\" type=\"tel\" placeholder=\"WhatsApp / Celular\" required :mask=\"['####-####', '#####-####']\" v-model=\"aluno.celular_numero\"/>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Telefone Residencial -->
\t\t\t\t\t\t\t<div class=\"col-xs-12 col-md-2 col-lg-1 v-spacing\">
\t\t\t\t\t\t\t\t<the-mask class=\"form-control\" name=\"candidato[telefone_ddd]\" type=\"tel\" placeholder=\"DDD\" :mask=\"['(##)']\" v-model=\"aluno.telefone_ddd\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-xs-12 col-md-4 col-lg-3 v-spacing\">
\t\t\t\t\t\t\t\t<the-mask class=\"form-control\" name=\"candidato[telefone_numero]\" type=\"tel\" placeholder=\"Telefone Residencial\" :mask=\"['####-####']\" v-model=\"aluno.telefone_numero\"/>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Sexo -->
\t\t\t\t\t\t\t<div class=\"col-xs-12 col-md-6 col-lg-4 v-spacing\">
\t\t\t\t\t\t\t\t<select size required class=\"form-control\" name=\"candidato[sexo]\">
\t\t\t\t\t\t\t\t\t<option :value=\"null\" selected>Sexo:</option>
\t\t\t\t\t\t\t\t\t<option value=\"Masculino\">Masculino</option>
\t\t\t\t\t\t\t\t\t<option value=\"Feminino\">Feminino</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- PCD -->
\t\t\t\t\t\t\t<div class=\"col-xs-12 col-md-12 col-lg-8 v-spacing\">
\t\t\t\t\t\t\t\t<select onchange=\"tipodeficiencia()\" name=\"dados_adicionais[deficiencia]\" id=\"deficiencia\" size required class=\"form-control\">
\t\t\t\t\t\t\t\t\t<option :value=\"null\">Possui alguma deficiência?</option>
\t\t\t\t\t\t\t\t\t<option value=\"nao\">Não</option>
\t\t\t\t\t\t\t\t\t<option value=\"sim\">Sim</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Necessidades Educacionais Especiais (Distúrbios /Transtornos/Síndromes) -->
\t\t\t\t\t\t\t<div class=\"deficiencia align center text-white\" style=\"text-align:justify;margin-left:10%;width:80%;font-size:18px;\">
\t\t\t\t\t\t\t\t<br><p><i>No edital geral, temos para os portadores de necessidades 
\t\t\t\t\t\t\t\tespeciais um vestibular específico que deverá ser agendado previamente
\t\t\t\t\t\t\t\t para realização presencial. Para fazer seu agendamento entre em contato
\t\t\t\t\t\t\t\t  no telefone (19) 3465.8100</i></p>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Dados do Responsável 
\t\t\t\t\t\t\t<div class=\"col-xs-12 col-md-12 v-spacing\" v-if=\"candidato_idade < 18\">
\t\t\t\t\t\t\t\t<input required class=\"form-control\" name=\"dados_adicionais[responsavel_nome]\" type=\"text\" placeholder=\"Nome do Responsável\" :value=\"lead.dados_adicionais.responsavel_nome\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-xs-12 col-md-12 v-spacing\" v-if=\"candidato_idade < 18\">
\t\t\t\t\t\t\t\t<the-mask required class=\"form-control\" :mask=\"['###.###.###-##']\" name=\"dados_adicionais[responsavel_cpf]\" type=\"text\" placeholder=\"CPF do Responsável\" :value=\"lead.dados_adicionais.responsavel_cpf\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-xs-12 col-md-12 v-spacing\" v-if=\"candidato_idade < 18\">
\t\t\t\t\t\t\t\t<the-mask required class=\"form-control\" :mask=\"['(##) ####-####', '(##) #####-####']\" name=\"dados_adicionais[responsavel_telefone]\" type=\"text\" placeholder=\"Telefone do Responsável\" :value=\"lead.dados_adicionais.responsavel_telefone\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-xs-12 col-md-12 v-spacing\" v-if=\"candidato_idade < 18\">
\t\t\t\t\t\t\t\t<the-mask required class=\"form-control\" :mask=\"['##/##/####']\" name=\"dados_adicionais[responsavel_nascimento]\" type=\"text\" placeholder=\"Data de Nascimento do Responsável\" :value=\"lead.dados_adicionais.responsavel_nascimento\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t-->
\t\t\t\t\t\t\t<!-- Como conheceu a FAM? -->
\t\t\t\t\t\t\t<div class=\"defic col-xs-12 col-md-6 col-lg-6 v-spacing\">
\t\t\t\t\t\t\t\t<select size required class=\"form-control\" name=\"como_conheceu\" v-model=\"lead.midia_id\">
\t\t\t\t\t\t\t\t\t<option :value=\"null\">Como nos conheceu?</option>
\t\t\t\t\t\t\t\t\t<option v-for=\"midia in midias\" :value=\"midia.id\">{{ midia.nome }}</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Tipo de Prova alteração final  -->
\t\t\t\t\t\t\t<div class=\"defic col-xs-12 col-md-6 col-lg-6 v-spacing\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<select onchange=\"tipoprova()\" id=\"prova\" size required class=\"form-control\" name=\"candidato[ingresso]\">
\t\t\t\t\t\t\t\t\t<option value=\"null\" selected>Deseja ingressar através de:</option>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<option class=\"tec\" value=\"tecnico\">Técnico</option>
\t\t\t\t\t\t\t\t\t<option class=\"ves\" value=\"vestibular\">Vestibular</option>
\t\t\t\t\t\t\t\t\t<option class=\"ene\" value=\"enem\">Nota do ENEM</option>
\t\t\t\t\t\t\t\t\t<option class=\"seg\" value=\"segunda_graduacao\">Segunda Graduação</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- ALTERAÇÕES EVERTON 04-06-2020 -->

\t\t\t\t\t\t";
        echo "
\t\t\t\t\t\t<input
\t\t\t\t\t\ttype=\"hidden\" name=\"data_prova\" value=\"2825\">

\t\t\t\t\t\t<!-- Aviso Vestibular/ENEM/Segunda Graduação -->
\t\t\t\t\t\t<div class=\"defic col-md-8 offset-md-2 v-spacing\">
\t\t\t\t\t\t\t<div class=\"vestibular\">
\t\t\t\t\t\t\t\t<p class=\"align center text-white\" style=\"text-align:justify;\">
\t\t\t\t\t\t\t\t\tDurante a pandemia, a FAM - Faculdade de Americana está operacionalizando
\t\t\t\t\t\t\t\t\tas provas do vestibular de forma online. Após a conclusão de sua inscrição
\t\t\t\t\t\t\t\t\tvocê receberá em seu e-mail instruções adicionais sobre como proceder para
\t\t\t\t\t\t\t\t\ta realização da mesma.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"enem row\">
\t\t\t\t\t\t\t<p class=\"align center text-white\">
\t\t\t\t\t\t\t\t\t<strong>Ingresso ENEM:</strong><br><br>
\t\t\t\t\t\t\t\t\tVocê optou por utilizar a sua nota do ENEM como mecanismo de ingresso
\t\t\t\t\t\t\t\t\t\t no Ensino Superior e não será necessário realizar a prova de vestibular.
\t\t\t\t\t\t\t\t\t\t<br><br>Sua nota de Redação deverá ser igual ou superior a 400 pontos.
\t\t\t\t\t\t\t\t\t\t<br>Poderá ser qualquer resultado desde o ano de 2010.
\t\t\t\t\t\t\t\t\t\t<br>** Não serão aceitos resultados de ENEM “treineiros”.
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</p>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 322
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"formado\">
\t\t\t\t\t\t\t\t<p class=\"align center text-white\">
\t\t\t\t\t\t\t\tSe você já realizou uma Graduação não será necessário realizar a prova de vestibular.
\t\t\t\t\t\t\t\tApós a conclusão de sua inscrição você receberá em seu e-mail instruções adicionais sobre como proceder.

\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tecnico\">
\t\t\t\t\t\t\t\t<p class=\"align center text-white\">
\t\t\t\t\t\t\t\tVocê optou por Cursos Técnicos. Confirme seu E-Mail e Clique no botão abaixo para iniciar seu processo de matrícula.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Confirma E-mail -->
\t\t\t\t\t\t\t<div class=\"confirmaemail\">
\t\t\t\t\t\t\t\t<input class=\"email2 form-control\" type=\"email\" onpaste=\"return false\" ondrop=\"return false\" placeholder=\"Confirme seu E-mail\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\ta
\t\t\t\t\t\t<!-- Finalizar Inscrição -->
\t\t\t\t\t\t<div class=\"defic col-xs-12 col-md-12 col-lg-12 v-spacing align center\">
\t\t\t\t\t\t\t<input onclick=\"validar()\" class=\"btn cta large centered btn-concluir\" type=\"button\" value=\"Concluir Inscrição\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>

\t\t\t</main>

\t\t</form>

\t</div>
";
    }

    // line 358
    public function block_scripts($context, array $blocks = array())
    {
        // line 359
        echo "\t<!-- Variáveis (BI -> VueJS) -->
\t<script type=\"text/javascript\">
\t\twindow.history.forward(1);
let midias = ";
        // line 362
        echo twig_jsonencode_filter($this->getAttribute(($context["campanha"] ?? null), "midias", array()));
        echo ";
let aluno = ";
        // line 363
        echo twig_jsonencode_filter(($context["aluno"] ?? null));
        echo ";
let lead = ";
        // line 364
        echo twig_jsonencode_filter(($context["lead"] ?? null));
        echo ";
let curso = ";
        // line 365
        echo twig_escape_filter($this->env, ($context["curso"] ?? null), "html", null, true);
        echo ";

if (Array.isArray(aluno.dados_adicionais)) 
delete aluno.dados_adicionais;



aluno = Object.assign({
dados_adicionais: {
responsavel_cpf: null,
responsavel_nome: null,
responsavel_telefone: null,
responsavel_nascimento: null
}
}, aluno);

if (Array.isArray(lead.dados_adicionais)) 
delete lead.dados_adicionais;



lead = Object.assign({
dados_adicionais: {
deficiencia: null,
deficiencia_qual: null,
usar_enem: null
}
}, lead);

if (typeof aluno.data_nascimento !== \"undefined\") 
aluno.data_nascimento = aluno.datanascimento.split('-').reverse().join('/');


window.onload = function () {

var ingresso = \$(\"#acfam-inscricao-opcoes-curso-1 option:selected\").val();
if(ingresso == 59 || ingresso == 52 || ingresso == 57 || ingresso == 63){
\t\$(\".ene\").css({ \"display\": \"none\" })
\t\$(\".seg\").css({ \"display\": \"none\" })
\t\$(\".ves\").css({ \"display\": \"none\" })
\t\$(\".tec\").css({ \"display\": \"block\" })
}else{
\t\$(\".ene\").css({ \"display\": \"block\" })
\t\$(\".seg\").css({ \"display\": \"block\" })
\t\$(\".ves\").css({ \"display\": \"block\" })
\t\$(\".tec\").css({ \"display\": \"none\" })
}


\$(\".js-form\").on(\"submit\", function () {
\$(\".btn-concluir\").attr(\"disabled\", \"true\");
setTimeout(function () {
\$(\".btn-concluir\").removeAttr(\"disabled\");
}, 5000);
});
}
\t</script>

\t<!-- Script da Página -->
\t<script type=\"text/javascript\" src=\"./assets/js/page-inscricao.js\"></script>

\t";
        // line 426
        if (($context["error"] ?? null)) {
            // line 427
            echo "\t\t<script>
\t\t\talert('";
            // line 428
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "');
\t\t</script>
\t";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/app/ambiente_conversao/vestibularfam2020.1/views//inscricao.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  479 => 428,  476 => 427,  474 => 426,  410 => 365,  406 => 364,  402 => 363,  398 => 362,  393 => 359,  390 => 358,  353 => 322,  47 => 292,  43 => 13,  35 => 7,  32 => 6,  28 => 1,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/ambiente_conversao/vestibularfam2020.1/views//inscricao.twig", "");
    }
}

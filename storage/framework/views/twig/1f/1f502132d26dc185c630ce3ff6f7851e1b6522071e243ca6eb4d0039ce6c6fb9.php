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

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
\t<!-- Principal -->
\t<form method=\"post\" action=\"/inscricao/finaliza\" class=\"js-form\" enctype=\"multipart/form-data\">
\t\t";
        // line 9
        echo csrf_field();
        echo "
\t\t";
        // line 301
        echo "
\t\t\t<main
\t\t\t\tid=\"page-inscricao\">

\t\t\t\t<!-- Cabeçalho -->
\t\t\t\t<header class=\"fit-height\">
\t\t\t\t\t<div class=\"container fit fit-height\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"fit align-items-end\">
\t\t\t\t\t\t\t<!-- Tela: Opções de Curso -->
\t\t\t\t\t\t\t<div id=\"acfam-inscricao-opcoes-curso\" class=\"col-md-12 mb-2\">
\t\t\t\t\t\t\t\t<h2>Opções de Curso</h2>
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"row\">
\t\t\t\t\t\t\t\t\t<!-- Primeira Opção -->
\t\t\t\t\t\t\t\t\t<div class=\"opcao-curso col-xs-12 col-md-4\">
\t\t\t\t\t\t\t\t\t\t<label for=\"acfam-inscricao-opcoes-curso-1\">Primeira Opção *:</label>

\t\t\t\t\t\t\t\t\t\t<!-- Listagem de Cursos -->
\t\t\t\t\t\t\t\t\t\t<select required name=\"opcoes_curso[]\" v-model=\"opcao1\" v-on:change=\"opcao2 = opcao3 = null\" class=\"form-control\" id=\"acfam-inscricao-opcoes-curso-1\">
\t\t\t\t\t\t\t\t\t\t\t<option selected :value=\"null\">Selecione um curso...</option>
\t\t\t\t\t\t\t\t\t\t\t<option v-for=\"curso in cursos_sort\" :value=\"curso.id\">{{ curso.nome }}</option>
\t\t\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t\t\t<!-- Detalhes do Curso -->
\t\t\t\t\t\t\t\t\t\t<transition name=\"fade_resize\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"curso-info\" id=\"acfam-inscricao-opcoes-curso-1-details\" v-if=\"opcao1\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Mensalidade</strong>
\t\t\t\t\t\t\t\t\t\t\t\t<span>R\$
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ cursos[opcao1].valor|currency }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Modalidade</strong>
\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ cursos[opcao1].dados_adicionais
.modalidade }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Duração</strong>
\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ cursos[opcao1].duracao }}
\t\t\t\t\t\t\t\t\t\t\t\t\tsemestres</span>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Modo/Período</strong>
\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ cursos[opcao1].dados_adicionais
.modo }}
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ cursos[opcao1].dados_adicionais
.periodo }}</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</transition>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!-- Segunda Opção -->
\t\t\t\t\t\t\t\t\t<transition name=\"fade\">
\t\t\t\t\t\t\t\t\t\t<div class=\"opcao-curso col-xs-12 col-md-4\" v-if=\"opcao1\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"acfam-inscricao-opcoes-curso-1\">Segunda Opção:</label>

\t\t\t\t\t\t\t\t\t\t\t<!-- Listagem de Cursos -->
\t\t\t\t\t\t\t\t\t\t\t<select name=\"opcoes_curso[]\" v-model=\"opcao2\" v-on:change=\"opcao3 = null\" class=\"form-control\" id=\"acfam-inscricao-opcoes-curso-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<option></option>
\t\t\t\t\t\t\t\t\t\t\t\t<option v-for=\"curso in cursos2\" :value=\"curso.id\">{{ curso.nome }}</option>
\t\t\t\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t\t\t\t<!-- Detalhes do Curso -->
\t\t\t\t\t\t\t\t\t\t\t<transition name=\"fade_resize\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"curso-info\" id=\"acfam-inscricao-opcoes-curso-1-details\" v-if=\"opcao2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Mensalidade</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>R\$
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ cursos[opcao2].valor|currency }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Modalidade</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ cursos[opcao2].dados_adicionais
.modalidade }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Duração</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ cursos[opcao2].duracao }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\tsemestres</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Modo/Período</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ cursos[opcao2].dados_adicionais
.modo }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ cursos[opcao2].dados_adicionais
.periodo }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</transition>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</transition>

\t\t\t\t\t\t\t\t\t<!-- Terceira Opção -->
\t\t\t\t\t\t\t\t\t<transition name=\"fade\">
\t\t\t\t\t\t\t\t\t\t<div class=\"opcao-curso col-xs-12 col-md-4\" v-if=\"opcao2\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"acfam-inscricao-opcoes-curso-1\">Terceira Opção:</label>

\t\t\t\t\t\t\t\t\t\t\t<!-- Listagem de Cursos -->
\t\t\t\t\t\t\t\t\t\t\t<select name=\"opcoes_curso[]\" v-model=\"opcao3\" class=\"form-control\" id=\"acfam-inscricao-opcoes-curso-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<option></option>
\t\t\t\t\t\t\t\t\t\t\t\t<option v-for=\"curso in cursos3\" :value=\"curso.id\">{{ curso.nome }}</option>
\t\t\t\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t\t\t\t<!-- Detalhes do Curso -->
\t\t\t\t\t\t\t\t\t\t\t<transition name=\"fade_resize\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"curso-info\" id=\"acfam-inscricao-opcoes-curso-1-details\" v-if=\"opcao3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Mensalidade</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>R\$
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ cursos[opcao3].valor|currency }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Modalidade</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ cursos[opcao3].dados_adicionais
.modalidade }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Duração</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ cursos[opcao3].duracao }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\tsemestres</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Modo/Período</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ cursos[opcao3].dados_adicionais
.modo }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ cursos[opcao3].dados_adicionais
.periodo }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</transition>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</transition>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</header>

\t\t\t\t<!-- Informações da Campanha -->
\t\t\t\t<!--<section id=\"acfam-inscricao-infos\" class=\"container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"inicio-aulas\">Início das Aulas Agosto 2018</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong class=\"desconto-regressivo\">Desconto Regressivo</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"./assets/images/inscricao-desconto-regressivo.png\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Aproveite os Descontos na Matrícula</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tO desconto regressivo refere-se ao pagamento da matrícula (1ª mensalidade) realizada dentro do mês indicado na figura.<br />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t** Exceto para cursos de Tecnologia e Letras.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</section>-->

\t\t\t\t<!-- Formulário de Inscrição -->
\t\t\t\t\t<section id=\"acfam-inscricao-form\" class=\"container\"> <div
\t\t\t\t\t\tclass=\"row\">
\t\t\t\t\t\t<!-- Nome -->
\t\t\t\t\t\t<div class=\"col-xs-12 col-md-6 v-spacing\">
\t\t\t\t\t\t\t<input class=\"form-control\" name=\"candidato[nome]\" type=\"text\" placeholder=\"Nome\" required v-model=\"aluno.nome\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Sobrenome -->
\t\t\t\t\t\t<div class=\"col-xs-12 col-md-6 v-spacing\">
\t\t\t\t\t\t\t<input class=\"form-control\" name=\"candidato[sobrenome]\" type=\"text\" placeholder=\"Sobrenome\" required v-model=\"aluno.sobrenome\"/>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Estado -->
\t\t\t\t\t\t<div class=\"col-xs-12 col-md-4 v-spacing\">
\t\t\t\t\t\t\t<select size required class=\"form-control\" name=\"candidato[estado]\" v-model=\"estado\">
\t\t\t\t\t\t\t\t<option selected :value=\"null\">Selecione um estado...</option>
\t\t\t\t\t\t\t\t<option value=\"AC\">Acre</option>
\t\t\t\t\t\t\t\t<option value=\"AL\">Alagoas</option>
\t\t\t\t\t\t\t\t<option value=\"AM\">Amazonas</option>
\t\t\t\t\t\t\t\t<option value=\"AP\">Amapá</option>
\t\t\t\t\t\t\t\t<option value=\"BA\">Bahia</option>
\t\t\t\t\t\t\t\t<option value=\"CE\">Ceará</option>
\t\t\t\t\t\t\t\t<option value=\"DF\">Distrito Federal</option>
\t\t\t\t\t\t\t\t<option value=\"ES\">Espírito Santo</option>
\t\t\t\t\t\t\t\t<option value=\"GO\">Goiás</option>
\t\t\t\t\t\t\t\t<option value=\"MA\">Maranhão</option>
\t\t\t\t\t\t\t\t<option value=\"MG\">Minas Gerais</option>
\t\t\t\t\t\t\t\t<option value=\"MS\">Mato Grosso do Sul</option>
\t\t\t\t\t\t\t\t<option value=\"MT\">Mato Grosso</option>
\t\t\t\t\t\t\t\t<option value=\"PA\">Pará</option>
\t\t\t\t\t\t\t\t<option value=\"PB\">Paraíba</option>
\t\t\t\t\t\t\t\t<option value=\"PE\">Pernambuco</option>
\t\t\t\t\t\t\t\t<option value=\"PI\">Piauí</option>
\t\t\t\t\t\t\t\t<option value=\"PR\">Paraná</option>
\t\t\t\t\t\t\t\t<option value=\"RJ\">Rio de Janeiro</option>
\t\t\t\t\t\t\t\t<option value=\"RN\">Rio Grande do Norte</option>
\t\t\t\t\t\t\t\t<option value=\"RO\">Rondônia</option>
\t\t\t\t\t\t\t\t<option value=\"RR\">Roraima</option>
\t\t\t\t\t\t\t\t<option value=\"RS\">Rio Grande do Sul</option>
\t\t\t\t\t\t\t\t<option value=\"SC\">Santa Catarina</option>
\t\t\t\t\t\t\t\t<option value=\"SE\">Sergipe</option>
\t\t\t\t\t\t\t\t<option value=\"SP\">São Paulo</option>
\t\t\t\t\t\t\t\t<option value=\"TO\">Tocantins</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Cidade -->
\t\t\t\t\t\t<div class=\"col-xs-12 col-md-8 v-spacing\">
\t\t\t\t\t\t\t<select size required class=\"form-control\" name=\"candidato[cidade]\" v-model=\"cidade\">
\t\t\t\t\t\t\t\t<option :value=\"cidade\" v-if=\"!estado\">Selecione uma cidade...</option>
\t\t\t\t\t\t\t\t<option selected :value=\"null\" v-if=\"estado\">Selecione uma cidade...</option>
\t\t\t\t\t\t\t\t<option v-for=\"cidade in cidades_estado\" :value=\"cidade.id\">{{ cidade.nome }}</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- CPF -->
\t\t\t\t\t\t<div class=\"col-xs-12 col-md-6 col-lg-4 v-spacing\">
\t\t\t\t\t\t\t<the-mask readonly class=\"form-control\" name=\"candidato[cpf]\" type=\"text\" placeholder=\"CPF\" required :mask=\"['###.###.###-##']\" :value=\"aluno.cpf\"/>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- E-mail -->
\t\t\t\t\t\t<div class=\"col-xs-12 col-md-6 col-lg-8 v-spacing\">
\t\t\t\t\t\t\t<input class=\"email1 form-control\" name=\"candidato[email]\" type=\"email\" placeholder=\"E-mail\" required v-model=\"aluno.email\"/>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- RG -->
\t\t\t\t\t\t<!--<div class=\"col-xs-12 col-md-6 col-lg-4 v-spacing\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<the-mask class=\"form-control\" name=\"candidato[rg]\" type=\"text\" placeholder=\"RG\" required :mask=\"['##.###.###-X']\" v-model=\"aluno.rg\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>-->

\t\t\t\t\t\t<!-- Data Nascimento -->
\t\t\t\t\t\t\t<div class=\"col-xs-12 col-md-6 col-lg-4 v-spacing\"> <the-mask class=\"form-control nasc\" name=\"candidato[data_nascimento]\" type=\"tel\" placeholder=\"Data de Nascimento\" required :mask=\"['##/##/####']\" v-model=\"aluno.data_nascimento\"/>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- WhatsApp / Celular -->
\t\t\t\t\t\t<div class=\"col-xs-12 col-md-2 col-lg-1 v-spacing\">
\t\t\t\t\t\t\t<the-mask class=\"form-control\" name=\"candidato[celular_ddd]\" type=\"tel\" placeholder=\"DDD\" required :mask=\"['(##)']\" v-model=\"aluno.celular_ddd\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-12 col-md-4 col-lg-3 v-spacing\">
\t\t\t\t\t\t\t<the-mask class=\"form-control\" name=\"candidato[celular_numero]\" type=\"tel\" placeholder=\"WhatsApp / Celular\" required :mask=\"['####-####', '#####-####']\" v-model=\"aluno.celular_numero\"/>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Telefone Residencial -->
\t\t\t\t\t\t<div class=\"col-xs-12 col-md-2 col-lg-1 v-spacing\">
\t\t\t\t\t\t\t<the-mask class=\"form-control\" name=\"candidato[telefone_ddd]\" type=\"tel\" placeholder=\"DDD\" :mask=\"['(##)']\" v-model=\"aluno.telefone_ddd\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-12 col-md-4 col-lg-3 v-spacing\">
\t\t\t\t\t\t\t<the-mask class=\"form-control\" name=\"candidato[telefone_numero]\" type=\"tel\" placeholder=\"Telefone Residencial\" :mask=\"['####-####']\" v-model=\"aluno.telefone_numero\"/>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Sexo -->
\t\t\t\t\t\t<div class=\"col-xs-12 col-md-6 col-lg-4 v-spacing\">
\t\t\t\t\t\t\t<select size required class=\"form-control\" name=\"candidato[sexo]\">
\t\t\t\t\t\t\t\t<option :value=\"null\" selected>Sexo:</option>
\t\t\t\t\t\t\t\t<option value=\"Masculino\">Masculino</option>
\t\t\t\t\t\t\t\t<option value=\"Feminino\">Feminino</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- PCD -->
\t\t\t\t\t\t<div class=\"col-xs-12 col-md-12 col-lg-8 v-spacing\">
\t\t\t\t\t\t\t<select onchange=\"tipodeficiencia()\" id=\"deficiencia\" size required class=\"form-control\" name=\"dados_adicionais[deficiencia]\" v-model=\"lead.dados_adicionais.deficiencia\">
\t\t\t\t\t\t\t\t<option :value=\"null\">Possui alguma deficiência?</option>
\t\t\t\t\t\t\t\t<option value=\"nao\">Não</option>
\t\t\t\t\t\t\t\t<option value=\"sim\">Sim</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--<transition name=\"fade\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-md-12 col-lg-12 v-spacing\" v-if=\"lead.dados_adicionais.deficiencia && lead.dados_adicionais.deficiencia == 'sim'\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select size required class=\"form-control\" name=\"dados_adicionais[deficiencia_qual]\" v=\"model=\" lead.dados_adicionais.deficiencia_qual\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option :value=\"null\">Qual deficiência?</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">Sem deficiência</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">Cegueira</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">Baixa Visão</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">Surdez</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">Deficiência Auditiva</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">Deficiência fisica</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">Surdocegueira</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"7\">Deficiência Múltipla</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"8\">Deficiência Mental</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</transition>-->

\t\t\t\t\t\t<!-- Necessidades Educacionais Especiais (Distúrbios /Transtornos/Síndromes) -->
\t\t\t\t\t\t<div class=\"deficiencia col-xs-12 col-md-12 v-spacing\">
\t\t\t\t\t\t\t<input class=\"form-control\" name=\"dados_adicionais[necessidades_especiais]\" type=\"text\" placeholder=\"Descreva: Necessidades Educacionais Especiais (Distúrbios /Transtornos/Síndromes)\" v-model=\"lead.dados_adicionais.necessidades_especiais\" title=\"Descreva aqui suas necessidades educacionais especiais, como alguém para acompanhar a leitura, tempo extra de prova, folha de prova especial e etc.\"/>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Dados do Responsável -->
\t\t\t\t\t\t<div class=\"col-xs-12 col-md-12 v-spacing\" v-if=\"candidato_idade < 18\">
\t\t\t\t\t\t\t<input required class=\"form-control\" name=\"dados_adicionais[responsavel_nome]\" type=\"text\" placeholder=\"Nome do Responsável\" :value=\"lead.dados_adicionais.responsavel_nome\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-12 col-md-12 v-spacing\" v-if=\"candidato_idade < 18\">
\t\t\t\t\t\t\t<the-mask required class=\"form-control\" :mask=\"['###.###.###-##']\" name=\"dados_adicionais[responsavel_cpf]\" type=\"text\" placeholder=\"CPF do Responsável\" :value=\"lead.dados_adicionais.responsavel_cpf\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-12 col-md-12 v-spacing\" v-if=\"candidato_idade < 18\">
\t\t\t\t\t\t\t<the-mask required class=\"form-control\" :mask=\"['(##) ####-####', '(##) #####-####']\" name=\"dados_adicionais[responsavel_telefone]\" type=\"text\" placeholder=\"Telefone do Responsável\" :value=\"lead.dados_adicionais.responsavel_telefone\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-12 col-md-12 v-spacing\" v-if=\"candidato_idade < 18\">
\t\t\t\t\t\t\t<the-mask required class=\"form-control\" :mask=\"['##/##/####']\" name=\"dados_adicionais[responsavel_nascimento]\" type=\"text\" placeholder=\"Data de Nascimento do Responsável\" :value=\"lead.dados_adicionais.responsavel_nascimento\"/>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Como conheceu a FAM? -->
\t\t\t\t\t\t<div class=\"col-xs-12 col-md-6 col-lg-6 v-spacing\">
\t\t\t\t\t\t\t<select size required class=\"form-control\" name=\"como_conheceu\" v-model=\"lead.midia_id\">
\t\t\t\t\t\t\t\t<option :value=\"null\">Como nos conheceu?</option>
\t\t\t\t\t\t\t\t<option v-for=\"midia in midias\" :value=\"midia.id\">{{ midia.nome }}</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Tipo de Prova -->
\t\t\t\t\t\t<div class=\"col-xs-12 col-md-6 col-lg-6 v-spacing\">
\t\t\t\t\t\t\t<select onchange=\"tipoprova()\" id=\"prova\" size required class=\"form-control\" name=\"dados_adicionais[usar_enem]\" v-model=\"lead.dados_adicionais.usar_enem\">
\t\t\t\t\t\t\t\t<option :value=\"null\">Deseja ingressar através de:</option>
\t\t\t\t\t\t\t\t<option value=\"nao\">Vestibular</option>
\t\t\t\t\t\t\t\t<option value=\"sim\">Nota do ENEM</option>
\t\t\t\t\t\t\t\t<option value=\"segunda_graduacao\">Segunda Graduação</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- ALTERÇÕES EVERTON 02-06-2020 -->

\t\t\t\t\t";
        echo "

\t\t\t\t\t<!-- Data da Prova 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-md-12 col-lg-12 v-spacing\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select size required class=\"form-control\" name=\"data_prova\" v-model=\"data_prova\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option :value=\"null\" v-if=\"!lead.dados_adicionais.usar_enem || lead.dados_adicionais.usar_enem == 'nao'\">Escolher data e local da prova:</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option :value=\"null\" v-if=\"lead.dados_adicionais.usar_enem == 'sim'\">Escolher data e local para entrega da documentação:</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 325
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>-->

\t\t\t\t\t<input
\t\t\t\t\ttype=\"hidden\" name=\"data_prova\" value=\"2825\">

\t\t\t\t\t<!-- Aviso Vestibular/ENEM/Segunda Graduação -->
\t\t\t\t\t<div class=\"col-md-8 offset-md-2 v-spacing\">
\t\t\t\t\t\t<div class=\"vestibular\">
\t\t\t\t\t\t\t<p class=\"align center text-white\" style=\"text-align:justify;\">
\t\t\t\t\t\t\t\tDurante a pandemia, a FAM - Faculdade de Americana está operacionalizando
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tas provas do vestibular de forma online. Após a conclusão de sua inscrição
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvocê receberá em seu e-mail instruções adicionais sobre como proceder para
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ta realização da mesma.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"enem row\">
\t\t\t\t\t\t\t<!--
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"position:relative;padding:1em;padding-bottom:56%;width:100%;margin-bottom:1em;border-radius:4px;overflow:hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<iframe style=\"position:absolute;top:0px;left:0px;width:100%;height:100%\" src=\"https://www.youtube.com/embed/rwcOxLOrRz0\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"align center text-white\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tVocê sabia que com a nota da redação do ENEM você fica isento de fazer a prova do vestibular e ainda pode ganhar um desconto de até 100% em todas as mensalidades?
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"align center text-white\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSe você tirou nota acima de 400 pontos na redação basta agendar aqui a data para fazer a sua matrícula e fazer a requisição para análise da bolsa de estudos.<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNão se esqueça de trazer cópias de todos os documentos e o resultado do ENEM impresso. Só não vale ser treineiro, ok?
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>-->
\t\t\t\t\t\t\t<p class=\"align center text-white\">
\t\t\t\t\t\t\t\t<strong>Ingresso ENEM:</strong><br>
\t\t\t\t\t\t\t\t<span style=\"text-align:justify !important;\">
\t\t\t\t\t\t\t\t\tVocê&ensp;optou&ensp;por utilizar&ensp;a sua&ensp;nota do&ensp;ENEM como&ensp;mecanismo de ingresso<br>
\t\t\t\t\t\t\t\t\tno&ensp; Ensino&ensp;Superior&ensp;e &ensp;não&ensp;será&ensp; necessário&ensp; realizar a prova de vestibular.<br>
\t\t\t\t\t\t\t\t\tSeu&ensp;desconto&ensp;&ensp;será calculado&ensp;com&ensp;base&ensp;na&ensp; tabela&ensp;abaixo e será validado<br>
\t\t\t\t\t\t\t\t\tdurante o&ensp;processo&ensp;de&ensp; matrícula,&ensp;conduzida  pela equipe comercial da FAM<br>
\t\t\t\t\t\t\t\t\tde forma online. Você&ensp; receberá&ensp; instruções adicionais através de seu e-mail.<br><br>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\tA sua Nota de Redação deverá ser igual ou superior a 400 pontos.<br>
\t\t\t\t\t\t\t\tPoderá ser qualquer resultado desde o ano de 2010.
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<ul class=\"pontosenem\">
\t\t\t\t\t\t\t\t\t<li>Até 500 pontos = 10%</li>
\t\t\t\t\t\t\t\t\t<li>De 501 a 550 pontos = 15%</li>
\t\t\t\t\t\t\t\t\t<li>De 551 a 600 pontos = 20%</li>
\t\t\t\t\t\t\t\t\t<li>De 601 a 650 pontos = 25%</li>
\t\t\t\t\t\t\t\t\t<li>De 651 a 749 pontos = 50%</li>
\t\t\t\t\t\t\t\t\t<li>De 750 a 849 pontos = 80%</li>
\t\t\t\t\t\t\t\t\t<li>Acima de 850 pontos = Poderá estudar de graça.</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p class=\"align center text-white\">
\t\t\t\t\t\t\t\t* Exceto para cursos Tecnológicos, EAD, Letras, 2ª Graduação e Transferências.<br>
\t\t\t\t\t\t\t\t* Não serão aceitos resultados de ENEM \"Treineiros\"
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t";
        // line 386
        echo "
\t\t\t\t\t\t\t<!--ARQUIVO, máx 3MB ; Obs.: php artisan storage:link 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"arquivo\">\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"3145728\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p><input type=\"file\" name=\"arquivo\"><span>(envie um PDF com suas Notas)</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"formado\">
\t\t\t\t\t\t\t<p class=\"align center text-white\">
\t\t\t\t\t\t\t\tSe você já realizou uma Graduação não será necessário realizar a prova de vestibular.</p>

\t\t\t\t\t\t\t<!--ARQUIVO ; Obs.: php artisan storage:link 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"arquivo\">\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"3145728\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p><input type=\"file\" name=\"arquivo\"><span>(envie um PDF do seu Diploma)</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Confirma E-mail -->
\t\t\t\t\t\t<div class=\"confirmaemail\">
\t\t\t\t\t\t\t<input class=\"email2 form-control\" type=\"email\" placeholder=\"Confirme seu E-mail\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\ta
\t\t\t\t\t<!-- Finalizar Inscrição -->
\t\t\t\t\t<div class=\"col-xs-12 col-md-12 col-lg-12 v-spacing align center\">
\t\t\t\t\t\t<input class=\"btn cta large centered btn-concluir\" type=\"button\" value=\"Concluir Inscrição\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>

\t\t</main>

\t</form>

";
    }

    // line 424
    public function block_scripts($context, array $blocks = array())
    {
        // line 425
        echo "\t<!-- Variáveis (BI -> VueJS) -->
\t<script type=\"text/javascript\">
\t\twindow.history.forward(1);
let midias = ";
        // line 428
        echo twig_jsonencode_filter($this->getAttribute(($context["campanha"] ?? null), "midias", array()));
        echo ";
let aluno = ";
        // line 429
        echo twig_jsonencode_filter(($context["aluno"] ?? null));
        echo ";
let lead = ";
        // line 430
        echo twig_jsonencode_filter(($context["lead"] ?? null));
        echo ";
let curso = ";
        // line 431
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


\$(\".btn-concluir\").click(function () {
if (\$(\"#prova\").val() == \"sim\" || \$(\"#prova\").val() == \"segunda_graduacao\") {
if (\$(\".email1\").val() == \$(\".email2\").val()) {
\$(\".js-form\").submit();
} else {
alert(\"E-Mail não confere !\");
}
} else {
\$(\".js-form\").submit();
}
});


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
        // line 493
        if (($context["error"] ?? null)) {
            // line 494
            echo "\t\t<script>
\t\t\talert('";
            // line 495
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
        return array (  533 => 495,  530 => 494,  528 => 493,  463 => 431,  459 => 430,  455 => 429,  451 => 428,  446 => 425,  443 => 424,  403 => 386,  345 => 325,  44 => 301,  40 => 9,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
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

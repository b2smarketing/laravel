<?php

/* /var/www/app/ambiente_conversao/vestibularfam2019.Janeiro/views//inscricao.twig */
class __TwigTemplate_9ad634facaca887d3c7b4743b83bd206b2d0497c10081d51dcbeb8082a0e35b6 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AmbienteConversao::layout", "/var/www/app/ambiente_conversao/vestibularfam2019.Janeiro/views//inscricao.twig", 1);
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
<!-- Principal -->
<form method=\"post\" action=\"/inscricao/finaliza\">
\t";
        // line 9
        echo csrf_field();
        echo "
\t";
        // line 286
        echo "
\t<main id=\"page-inscricao\">

\t\t<!-- Cabeçalho -->
\t\t<header class=\"fit-height\">
\t\t\t<div class=\"container fit fit-height\">
\t\t\t\t<div class=\"row fit align-items-end\">
\t\t\t\t\t<!-- Tela: Opções de Curso -->
\t\t\t\t\t<div id=\"acfam-inscricao-opcoes-curso\" class=\"col-md-12\">
\t\t\t\t\t\t<h2>Opções de Curso</h2>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<!-- Primeira Opção -->
\t\t\t\t\t\t\t<div class=\"opcao-curso col-xs-12 col-md-4\">
\t\t\t\t\t\t\t\t<label for=\"acfam-inscricao-opcoes-curso-1\">Primeira Opção *:</label>

\t\t\t\t\t\t\t\t<!-- Listagem de Cursos -->
\t\t\t\t\t\t\t\t<select required name=\"opcoes_curso[]\" v-model=\"opcao1\" v-on:change=\"opcao2 = opcao3 = null\" class=\"form-control\" id=\"acfam-inscricao-opcoes-curso-1\">
\t\t\t\t\t\t\t\t\t<option selected :value=\"null\">Selecione um curso...</option>
\t\t\t\t\t\t\t\t\t<option v-for=\"curso in cursos_sort\" :value=\"curso.id\">{{ curso.nome }}</option>
\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t<!-- Detalhes do Curso -->
\t\t\t\t\t\t\t\t<transition name=\"fade_resize\">
\t\t\t\t\t\t\t\t\t<div class=\"curso-info\" id=\"acfam-inscricao-opcoes-curso-1-details\" v-if=\"opcao1\">
\t\t\t\t\t\t\t\t\t\t<strong>Mensalidade</strong>
\t\t\t\t\t\t\t\t\t\t<span>R\$ {{ cursos[opcao1].valor|currency }}</span>
\t\t\t\t\t\t\t\t\t\t<strong>Modalidade</strong>
\t\t\t\t\t\t\t\t\t\t<span>{{ cursos[opcao1].dados_adicionais
.modalidade }}</span>
\t\t\t\t\t\t\t\t\t\t<strong>Duração</strong>
\t\t\t\t\t\t\t\t\t\t<span>{{ cursos[opcao1].duracao }} semestres</span>
\t\t\t\t\t\t\t\t\t\t<strong>Modo/Período</strong>
\t\t\t\t\t\t\t\t\t\t<span>{{ cursos[opcao1].dados_adicionais
.modo }} {{ cursos[opcao1].dados_adicionais
.periodo }}</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</transition>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Segunda Opção -->
\t\t\t\t\t\t\t<transition name=\"fade\">
\t\t\t\t\t\t\t\t<div class=\"opcao-curso col-xs-12 col-md-4\" v-if=\"opcao1\">
\t\t\t\t\t\t\t\t\t<label for=\"acfam-inscricao-opcoes-curso-1\">Segunda Opção:</label>

\t\t\t\t\t\t\t\t\t<!-- Listagem de Cursos -->
\t\t\t\t\t\t\t\t\t<select name=\"opcoes_curso[]\" v-model=\"opcao2\" v-on:change=\"opcao3 = null\" class=\"form-control\" id=\"acfam-inscricao-opcoes-curso-2\">
\t\t\t\t\t\t\t\t\t\t<option></option>
\t\t\t\t\t\t\t\t\t\t<option v-for=\"curso in cursos2\" :value=\"curso.id\">{{ curso.nome }}</option>
\t\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t\t<!-- Detalhes do Curso -->
\t\t\t\t\t\t\t\t\t<transition name=\"fade_resize\">
\t\t\t\t\t\t\t\t\t\t<div class=\"curso-info\" id=\"acfam-inscricao-opcoes-curso-1-details\" v-if=\"opcao2\">
\t\t\t\t\t\t\t\t\t\t\t<strong>Mensalidade</strong>
\t\t\t\t\t\t\t\t\t\t\t<span>R\$ {{ cursos[opcao2].valor|currency }}</span>
\t\t\t\t\t\t\t\t\t\t\t<strong>Modalidade</strong>
\t\t\t\t\t\t\t\t\t\t\t<span>{{ cursos[opcao2].dados_adicionais
.modalidade }}</span>
\t\t\t\t\t\t\t\t\t\t\t<strong>Duração</strong>
\t\t\t\t\t\t\t\t\t\t\t<span>{{ cursos[opcao2].duracao }} semestres</span>
\t\t\t\t\t\t\t\t\t\t\t<strong>Modo/Período</strong>
\t\t\t\t\t\t\t\t\t\t\t<span>{{ cursos[opcao2].dados_adicionais
.modo }} {{ cursos[opcao2].dados_adicionais
.periodo }}</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</transition>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</transition>

\t\t\t\t\t\t\t<!-- Terceira Opção -->
\t\t\t\t\t\t\t<transition name=\"fade\">
\t\t\t\t\t\t\t\t<div class=\"opcao-curso col-xs-12 col-md-4\" v-if=\"opcao2\">
\t\t\t\t\t\t\t\t\t<label for=\"acfam-inscricao-opcoes-curso-1\">Terceira Opção:</label>

\t\t\t\t\t\t\t\t\t<!-- Listagem de Cursos -->
\t\t\t\t\t\t\t\t\t<select name=\"opcoes_curso[]\" v-model=\"opcao3\" class=\"form-control\" id=\"acfam-inscricao-opcoes-curso-3\">
\t\t\t\t\t\t\t\t\t\t<option></option>
\t\t\t\t\t\t\t\t\t\t<option v-for=\"curso in cursos3\" :value=\"curso.id\">{{ curso.nome }}</option>
\t\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t\t<!-- Detalhes do Curso -->
\t\t\t\t\t\t\t\t\t<transition name=\"fade_resize\">
\t\t\t\t\t\t\t\t\t\t<div class=\"curso-info\" id=\"acfam-inscricao-opcoes-curso-1-details\" v-if=\"opcao3\">
\t\t\t\t\t\t\t\t\t\t\t<strong>Mensalidade</strong>
\t\t\t\t\t\t\t\t\t\t\t<span>R\$ {{ cursos[opcao3].valor|currency }}</span>
\t\t\t\t\t\t\t\t\t\t\t<strong>Modalidade</strong>
\t\t\t\t\t\t\t\t\t\t\t<span>{{ cursos[opcao3].dados_adicionais
.modalidade }}</span>
\t\t\t\t\t\t\t\t\t\t\t<strong>Duração</strong>
\t\t\t\t\t\t\t\t\t\t\t<span>{{ cursos[opcao3].duracao }} semestres</span>
\t\t\t\t\t\t\t\t\t\t\t<strong>Modo/Período</strong>
\t\t\t\t\t\t\t\t\t\t\t<span>{{ cursos[opcao3].dados_adicionais
.modo }} {{ cursos[opcao3].dados_adicionais
.periodo }}</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</transition>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</transition>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>

\t\t<!-- Informações da Campanha -->
\t\t<!--<section id=\"acfam-inscricao-infos\" class=\"container\">
\t\t\t<span class=\"inicio-aulas\">Início das Aulas Agosto 2018</span>
\t\t\t<strong class=\"desconto-regressivo\">Desconto Regressivo</strong>
\t\t\t<img src=\"./assets/images/inscricao-desconto-regressivo.png\" />
\t\t\t<strong>Aproveite os Descontos na Matrícula</strong>
\t\t\t<p>
\t\t\t\tO desconto regressivo refere-se ao pagamento da matrícula (1ª mensalidade) realizada dentro do mês indicado na figura.<br />
\t\t\t\t** Exceto para cursos de Tecnologia e Letras.
\t\t\t</p>
\t\t</section>-->

\t\t<!-- Formulário de Inscrição -->
\t\t<section id=\"acfam-inscricao-form\" class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Nome -->
\t\t\t\t<div class=\"col-xs-12 col-md-6 v-spacing\">
\t\t\t\t\t<input class=\"form-control\" name=\"candidato[primeiro_nome]\" type=\"text\" placeholder=\"Nome\" required v-model=\"aluno.primeiro_nome\" />
\t\t\t\t</div>
\t\t\t\t<!-- Sobrenome -->
\t\t\t\t<div class=\"col-xs-12 col-md-6 v-spacing\">
\t\t\t\t\t<input class=\"form-control\" name=\"candidato[sobrenome]\" type=\"text\" placeholder=\"Sobrenome\" required v-model=\"aluno.sobrenome\" />
\t\t\t\t</div>

\t\t\t\t<!-- Estado -->
\t\t\t\t<div class=\"col-xs-12 col-md-4 v-spacing\">
\t\t\t\t\t<select size required class=\"form-control\" name=\"candidato[estado]\" v-model=\"estado\">
\t\t\t\t\t\t<option selected :value=\"null\">Selecione um estado...</option>
\t\t\t\t\t\t<option value=\"AC\">Acre</option>
\t\t\t\t\t\t<option value=\"AL\">Alagoas</option>
\t\t\t\t\t\t<option value=\"AM\">Amazonas</option>
\t\t\t\t\t\t<option value=\"AP\">Amapá</option>
\t\t\t\t\t\t<option value=\"BA\">Bahia</option>
\t\t\t\t\t\t<option value=\"CE\">Ceará</option>
\t\t\t\t\t\t<option value=\"DF\">Distrito Federal</option>
\t\t\t\t\t\t<option value=\"ES\">Espírito Santo</option>
\t\t\t\t\t\t<option value=\"GO\">Goiás</option>
\t\t\t\t\t\t<option value=\"MA\">Maranhão</option>
\t\t\t\t\t\t<option value=\"MG\">Minas Gerais</option>
\t\t\t\t\t\t<option value=\"MS\">Mato Grosso do Sul</option>
\t\t\t\t\t\t<option value=\"MT\">Mato Grosso</option>
\t\t\t\t\t\t<option value=\"PA\">Pará</option>
\t\t\t\t\t\t<option value=\"PB\">Paraíba</option>
\t\t\t\t\t\t<option value=\"PE\">Pernambuco</option>
\t\t\t\t\t\t<option value=\"PI\">Piauí</option>
\t\t\t\t\t\t<option value=\"PR\">Paraná</option>
\t\t\t\t\t\t<option value=\"RJ\">Rio de Janeiro</option>
\t\t\t\t\t\t<option value=\"RN\">Rio Grande do Norte</option>
\t\t\t\t\t\t<option value=\"RO\">Rondônia</option>
\t\t\t\t\t\t<option value=\"RR\">Roraima</option>
\t\t\t\t\t\t<option value=\"RS\">Rio Grande do Sul</option>
\t\t\t\t\t\t<option value=\"SC\">Santa Catarina</option>
\t\t\t\t\t\t<option value=\"SE\">Sergipe</option>
\t\t\t\t\t\t<option value=\"SP\">São Paulo</option>
\t\t\t\t\t\t<option value=\"TO\">Tocantins</option>
\t\t\t\t\t</select>
\t\t\t\t</div>

\t\t\t\t<!-- Cidade -->
\t\t\t\t<div class=\"col-xs-12 col-md-8 v-spacing\">
\t\t\t\t\t<select size required class=\"form-control\" name=\"candidato[cidade]\" v-model=\"cidade\">
\t\t\t\t\t\t<option :value=\"cidade\" v-if=\"!estado\">Selecione uma cidade...</option>
\t\t\t\t\t\t<option selected :value=\"null\" v-if=\"estado\">Selecione uma cidade...</option>
\t\t\t\t\t\t<option v-for=\"cidade in cidades_estado\" :value=\"cidade.id\">{{ cidade.nome }}</option>
\t\t\t\t\t</select>
\t\t\t\t</div>

\t\t\t\t<!-- CPF -->
\t\t\t\t<div class=\"col-xs-12 col-md-6 col-lg-4 v-spacing\">
\t\t\t\t\t<the-mask readonly class=\"form-control\" name=\"candidato[cpf]\" type=\"text\" placeholder=\"CPF\" required :mask=\"['###.###.###-##']\" :value=\"aluno.cpf\" />
\t\t\t\t</div>

\t\t\t\t<!-- E-mail -->
\t\t\t\t<div class=\"col-xs-12 col-md-6 col-lg-8 v-spacing\">
\t\t\t\t\t<input class=\"form-control\" name=\"candidato[email]\" type=\"email\" placeholder=\"E-mail\" required v-model=\"aluno.email\" />
\t\t\t\t</div>

\t\t\t\t<!-- RG -->
\t\t\t\t<!--<div class=\"col-xs-12 col-md-6 col-lg-4 v-spacing\">
\t\t\t\t\t<the-mask class=\"form-control\" name=\"candidato[rg]\" type=\"text\" placeholder=\"RG\" required :mask=\"['##.###.###-X']\" v-model=\"aluno.rg\" />
\t\t\t\t</div>-->

\t\t\t\t<!-- Data Nascimento -->
\t\t\t\t<div class=\"col-xs-12 col-md-6 col-lg-4 v-spacing\">
\t\t\t\t\t<the-mask class=\"form-control\" name=\"candidato[data_nascimento]\" type=\"text\" placeholder=\"Data de Nascimento\" required :mask=\"['##/##/####']\" />
\t\t\t\t</div>

\t\t\t\t<!-- WhatsApp / Celular -->
\t\t\t\t<div class=\"col-xs-12 col-md-2 col-lg-1 v-spacing\">
\t\t\t\t\t<the-mask class=\"form-control\" name=\"candidato[celular_ddd]\" type=\"text\" placeholder=\"DDD\" required :mask=\"['(##)']\" v-model=\"aluno.celular_ddd\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-12 col-md-4 col-lg-3 v-spacing\">
\t\t\t\t\t<the-mask class=\"form-control\" name=\"candidato[celular_numero]\" type=\"text\" placeholder=\"WhatsApp / Celular\" required :mask=\"['####-####', '#####-####']\" v-model=\"aluno.celular_numero\" />
\t\t\t\t</div>

\t\t\t\t<!-- Telefone Residencial -->
\t\t\t\t<div class=\"col-xs-12 col-md-2 col-lg-1 v-spacing\">
\t\t\t\t\t<the-mask class=\"form-control\" name=\"candidato[telefone_ddd]\" type=\"text\" placeholder=\"DDD\" :mask=\"['(##)']\" v-model=\"aluno.telefone_ddd\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-12 col-md-4 col-lg-3 v-spacing\">
\t\t\t\t\t<the-mask class=\"form-control\" name=\"candidato[telefone_numero]\" type=\"text\" placeholder=\"Telefone Residencial\" :mask=\"['####-####']\" v-model=\"aluno.telefone_numero\" />
\t\t\t\t</div>

\t\t\t\t<!-- Sexo -->
\t\t\t\t<div class=\"col-xs-12 col-md-6 col-lg-4 v-spacing\">
\t\t\t\t\t<select size required class=\"form-control\" name=\"candidato[sexo]\" v-model=\"aluno.sexo\">
\t\t\t\t\t\t<option :value=\"null\">Sexo:</option>
\t\t\t\t\t\t<option value=\"Masculino\">Masculino</option>
\t\t\t\t\t\t<option value=\"Feminino\">Feminino</option>
\t\t\t\t\t</select>
\t\t\t\t</div>

\t\t\t\t<!-- PCD -->
\t\t\t\t<div class=\"col-xs-12 col-md-12 col-lg-8 v-spacing\">
\t\t\t\t\t<select size required class=\"form-control\" name=\"dados_adicionais[deficiencia]\" v-model=\"pcd\">
\t\t\t\t\t\t<option :value=\"null\">Possui alguma deficiência?</option>
\t\t\t\t\t\t<option value=\"nao\">Não</option>
\t\t\t\t\t\t<option value=\"sim\">Sim</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<transition name=\"fade\">
\t\t\t\t\t<div class=\"col-xs-12 col-md-12 col-lg-12 v-spacing\" v-if=\"pcd && pcd == 'sim'\">
\t\t\t\t\t\t<select size required class=\"form-control\" name=\"dados_adicionais[deficiencia_qual]\">
\t\t\t\t\t\t\t<option value=\"\">Qual?</option>
\t\t\t\t\t\t\t<!--<option value=\"0\">Sem deficiência</option>-->
\t\t\t\t\t\t\t<option value=\"1\">Cegueira</option>
\t\t\t\t\t\t\t<option value=\"2\">Baixa Visão</option>
\t\t\t\t\t\t\t<option value=\"3\">Surdez</option>
\t\t\t\t\t\t\t<option value=\"4\">Deficiência Auditiva</option>
\t\t\t\t\t\t\t<option value=\"5\">Deficiência fisica</option>
\t\t\t\t\t\t\t<option value=\"6\">Surdocegueira</option>
\t\t\t\t\t\t\t<option value=\"7\">Deficiência Múltipla</option>
\t\t\t\t\t\t\t<option value=\"8\">Deficiência Mental</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</transition>

\t\t\t\t<!-- Tipo de Prova -->
\t\t\t\t<div class=\"col-xs-12 col-md-6 col-lg-6 v-spacing\">
\t\t\t\t\t<select size required class=\"form-control\" name=\"dados_adicionais[usar_enem]\" v-model=\"usar_enem\">
\t\t\t\t\t\t<option :value=\"null\">Deseja ingressar através de:</option>
\t\t\t\t\t\t<option value=\"nao\">Vestibular</option>
\t\t\t\t\t\t<option value=\"sim\">Nota do ENEM</option>
\t\t\t\t\t\t<option value=\"segunda_graduacao\">Segunda Graduação</option>
\t\t\t\t\t</select>
\t\t\t\t</div>

\t\t\t\t<!-- Como conheceu a FAM? -->
\t\t\t\t<div class=\"col-xs-12 col-md-6 col-lg-6 v-spacing\">
\t\t\t\t\t<select size required class=\"form-control\" name=\"como_conheceu\">
\t\t\t\t\t\t<option value=\"\" selected=\"selected\">Como nos conheceu?</option>
\t\t\t\t\t\t<option v-for=\"midia in midias\" :value=\"midia.id\">{{ midia.nome }}</option>
\t\t\t\t\t</select>
\t\t\t\t</div>

\t\t\t\t<!-- Aviso Vestibular/ENEM/Segunda Graduação -->
\t\t\t\t<div class=\"col-md-8 offset-md-2 v-spacing\">
\t\t\t\t\t<transition name=\"fade_resize\">
\t\t\t\t\t\t<p class=\"align center text-white\" v-if=\"usar_enem == 'nao'\">
\t\t\t\t\t\t\tVejo que você escolheu prestar vestibular, certo? Então vamos lá...<br />
\t\t\t\t\t\t\tA prova consiste em uma redação, o tema é sobre atualidades, portanto fique atento a nova ortografia, pontuação e não fuja do tema proposto.
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p class=\"align center text-white\" v-if=\"usar_enem == 'sim'\">
\t\t\t\t\t\t\tVocê sabia que com a nota da redação do ENEM você fica isento de fazer a prova?<br />
\t\t\t\t\t\t\tÉ isso mesmo, se você tirou nota acima de 400 pontos na redação não precisa prestar vestibular, basta agendar aqui a data para fazer a sua matricula e não se esqueça de trazer cópias de todos os documentos e o resultado do ENEM impresso. Só não vale ser treineiro, tá?
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p class=\"align center text-white\" v-if=\"usar_enem == 'segunda_graduacao'\">
\t\t\t\t\t\t\tSe você já é graduado e deseja fazer outro curso superior, você não precisa prestar vestibular, basta agendar aqui a data para fazer sua matricula. Para isso traga todos os documentos impressos e a cópia de um comprovante da sua graduação como diploma e certificado.
\t\t\t\t\t\t</p>
\t\t\t\t\t</transition>
\t\t\t\t</div>

\t\t\t";
        echo "
\t\t\t\t<!-- Data da Prova -->
\t\t\t\t<div class=\"col-xs-12 col-md-12 col-lg-12 v-spacing\">
\t\t\t\t\t<select size required class=\"form-control\" name=\"data_prova\" v-model=\"data_prova\">
\t\t\t\t\t\t<option :value=\"null\" v-if=\"!usar_enem || usar_enem == 'nao'\">Escolher data e local da prova:</option>
\t\t\t\t\t\t<option :value=\"null\" v-if=\"usar_enem == 'sim'\">Escolher data e local para entrega da documentação:</option>
\t\t\t\t\t\t";
        // line 292
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["locais_prova"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["local"]) {
            // line 293
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["local"], "datas_provas_disponiveis", array())) {
                // line 294
                echo "\t\t\t\t\t\t\t<optgroup label=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "local", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
                // line 295
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["local"], "datas_provas_disponiveis", array()), "splice", array(0 => 0, 1 => 10), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                    // line 296
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
                // line 298
                echo "\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t";
            }
            // line 300
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['local'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 301
        echo "\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t";
        // line 313
        echo "

\t\t\t\t<!-- Finalizar Inscrição -->
\t\t\t\t<div class=\"col-xs-12 col-md-12 col-lg-12 v-spacing align center\">
\t\t\t\t\t<input class=\"btn cta large centered\" type=\"submit\" value=\"Concluir Inscrição\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t</main>
\t";
        echo "
</form>

";
    }

    // line 318
    public function block_scripts($context, array $blocks = array())
    {
        // line 319
        echo "\t<!-- Variáveis (BI -> VueJS) -->
\t<script type=\"text/javascript\">
\twindow.history.forward(1);
\tlet midias = ";
        // line 322
        echo twig_jsonencode_filter($this->getAttribute(($context["campanha"] ?? null), "midias", array()));
        echo ";
\tlet aluno = ";
        // line 323
        echo twig_jsonencode_filter(($context["aluno"] ?? null));
        echo ";
\t</script>

\t<!-- Script da Página -->
\t<script type=\"text/javascript\" src=\"./assets/js/page-inscricao.js\"></script>

\t";
        // line 329
        if (($context["error"] ?? null)) {
            // line 330
            echo "\t\t<script>alert('";
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "');</script>
\t";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/app/ambiente_conversao/vestibularfam2019.Janeiro/views//inscricao.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  415 => 330,  413 => 329,  404 => 323,  400 => 322,  395 => 319,  392 => 318,  374 => 313,  370 => 301,  364 => 300,  360 => 298,  345 => 296,  341 => 295,  336 => 294,  333 => 293,  329 => 292,  44 => 286,  40 => 9,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/ambiente_conversao/vestibularfam2019.Janeiro/views//inscricao.twig", "");
    }
}

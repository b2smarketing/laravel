<?php

/* /var/www/app/ambiente_conversao/tecfam2020.1/views//inscricao.twig */
class __TwigTemplate_dad8e0285a559ba931597ea5ca8815f8eafeba0a4c82efb45d257f2eab3b498b extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AmbienteConversao::layout", "/var/www/app/ambiente_conversao/tecfam2020.1/views//inscricao.twig", 1);
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
<form method=\"post\" action=\"/inscricao/finaliza\" class=\"js-form\">
\t";
        // line 9
        echo csrf_field();
        echo "
\t";
        // line 203
        echo "
\t<main id=\"page-inscricao\">

\t\t<!-- Cabeçalho -->
\t\t<header class=\"fit-height\">
\t\t\t<div class=\"container fit fit-height\">
\t\t\t\t<div class=\"fit align-items-end\">
\t\t\t\t\t<!-- Tela: Opções de Curso -->
\t\t\t\t\t<div id=\"acfam-inscricao-opcoes-curso\" class=\"col-md-12 mb-2\">
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
\t\t\t\t\t<the-mask readonly class=\"form-control\" name=\"candidato[cpf]\" type=\"tel\" placeholder=\"CPF\" required :mask=\"['###.###.###-##']\" :value=\"aluno.cpf\" />
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
\t\t\t\t\t<the-mask class=\"form-control\" name=\"candidato[data_nascimento]\" type=\"tel\" placeholder=\"Data de Nascimento\" required :mask=\"['##/##/####']\" v-model=\"aluno.data_nascimento\" />
\t\t\t\t</div>

\t\t\t\t<!-- WhatsApp / Celular -->
\t\t\t\t<div class=\"col-xs-12 col-md-2 col-lg-1 v-spacing\">
\t\t\t\t\t<the-mask class=\"form-control\" name=\"candidato[celular_ddd]\" type=\"tel\" placeholder=\"DDD\" required :mask=\"['(##)']\" v-model=\"aluno.celular_ddd\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-12 col-md-4 col-lg-3 v-spacing\">
\t\t\t\t\t<the-mask class=\"form-control\" name=\"candidato[celular_numero]\" type=\"tel\" placeholder=\"WhatsApp / Celular\" required :mask=\"['####-####', '#####-####']\" v-model=\"aluno.celular_numero\" />
\t\t\t\t</div>

\t\t\t\t<!-- Telefone Residencial -->
\t\t\t\t<div class=\"col-xs-12 col-md-2 col-lg-1 v-spacing\">
\t\t\t\t\t<the-mask class=\"form-control\" name=\"candidato[telefone_ddd]\" type=\"tel\" placeholder=\"DDD\" :mask=\"['(##)']\" v-model=\"aluno.telefone_ddd\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-12 col-md-4 col-lg-3 v-spacing\">
\t\t\t\t\t<the-mask class=\"form-control\" name=\"candidato[telefone_numero]\" type=\"tel\" placeholder=\"Telefone Residencial\" :mask=\"['####-####']\" v-model=\"aluno.telefone_numero\" />
\t\t\t\t</div>

\t\t\t\t<!-- Sexo -->
\t\t\t\t<div class=\"col-xs-12 col-md-6 col-lg-4 v-spacing\">
\t\t\t\t\t<select size required class=\"form-control\" name=\"candidato[sexo]\" v-model=\"aluno.sexo\">
\t\t\t\t\t\t<option :value=\"null\" selected>Sexo:</option>
\t\t\t\t\t\t<option value=\"Masculino\">Masculino</option>
\t\t\t\t\t\t<option value=\"Feminino\">Feminino</option>
\t\t\t\t\t</select>
\t\t\t\t</div>

\t\t\t\t<!-- PCD -->
\t\t\t\t<div class=\"col-xs-12 col-md-12 col-lg-8 v-spacing\">
\t\t\t\t\t<select size required class=\"form-control\" name=\"dados_adicionais[deficiencia]\" v-model=\"lead.dados_adicionais.deficiencia\">
\t\t\t\t\t\t<option :value=\"null\">Possui alguma deficiência?</option>
\t\t\t\t\t\t<option value=\"nao\">Não</option>
\t\t\t\t\t\t<option value=\"sim\">Sim</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<transition name=\"fade\">
\t\t\t\t\t<div class=\"col-xs-12 col-md-12 col-lg-12 v-spacing\" v-if=\"lead.dados_adicionais.deficiencia && lead.dados_adicionais.deficiencia == 'sim'\">
\t\t\t\t\t\t<select size required class=\"form-control\" name=\"dados_adicionais[deficiencia_qual]\" v=model=\"lead.dados_adicionais.deficiencia_qual\">
\t\t\t\t\t\t\t<option :value=\"null\">Qual deficiência?</option>
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
\t\t\t\t<!-- Necessidades Educacionais Especiais (Distúrbios /Transtornos/Síndromes) -->
\t\t\t\t<div class=\"col-xs-12 col-md-12 v-spacing\">
\t\t\t\t\t<input class=\"form-control\" name=\"dados_adicionais[necessidades_especiais]\" type=\"text\" placeholder=\"Necessidades Educacionais Especiais (Distúrbios /Transtornos/Síndromes)\" v-model=\"lead.dados_adicionais.necessidades_especiais\" title=\"Descreva aqui suas necessidades educacionais especiais, como alguém para acompanhar a leitura, tempo extra de prova, folha de prova especial e etc.\" />
\t\t\t\t</div>

\t\t\t\t<!-- Como conheceu a FAM? -->
\t\t\t\t<div class=\"col-xs-12 col-md-12 col-lg-12 v-spacing\">
\t\t\t\t\t<select size required class=\"form-control\" name=\"como_conheceu\" v-model=\"lead.midia_id\">
\t\t\t\t\t\t<option value=\"null\" selected>Como nos conheceu?</option>
\t\t\t\t\t\t<option v-for=\"midia in midias\" :value=\"midia.id\">{{ midia.nome }}</option>
\t\t\t\t\t</select>
\t\t\t\t</div>

\t\t\t";
        echo "
\t\t\t\t<!-- Data da Prova -->
\t\t\t\t<div class=\"col-xs-12 col-md-12 col-lg-12 v-spacing\">
\t\t\t\t\t<select size required class=\"form-control\" name=\"data_prova\" v-model=\"data_prova\">
\t\t\t\t\t\t<option :value=\"null\">Escolher data e local da matrícula:</option>
\t\t\t\t\t\t";
        // line 208
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["locais_prova"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["local"]) {
            // line 209
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["local"], "datas_provas_disponiveis", array())) {
                // line 210
                echo "\t\t\t\t\t\t\t<optgroup label=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "local", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
                // line 211
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["local"], "datas_provas_disponiveis", array()), "splice", array(0 => 0, 1 => 10), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                    // line 212
                    echo "\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "hora", array()), "d/m/Y"), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "hora", array()), "H:i"), "html", null, true);
                    if ($this->getAttribute($context["data"], "hora_final", array())) {
                        echo " às ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "hora_final", array()), "H:i"), "html", null, true);
                    }
                    echo " - ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('App\TwigExtended')->dia_semana(twig_date_format_filter($this->env, $this->getAttribute($context["data"], "hora", array()), "w")), "html", null, true);
                    echo "</option>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 214
                echo "\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t";
            }
            // line 216
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['local'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 217
        echo "\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t";
        // line 229
        echo "

\t\t\t\t<!-- Finalizar Inscrição -->
\t\t\t\t<div class=\"col-xs-12 col-md-12 col-lg-12 v-spacing align center\">
\t\t\t\t\t<input class=\"btn cta large centered btn-concluir\" type=\"submit\" value=\"Concluir Inscrição\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t</main>
\t";
        echo "
</form>

";
    }

    // line 234
    public function block_scripts($context, array $blocks = array())
    {
        // line 235
        echo "\t<!-- Variáveis (BI -> VueJS) -->
\t<script type=\"text/javascript\">
\twindow.history.forward(1);
\tlet midias = ";
        // line 238
        echo twig_jsonencode_filter($this->getAttribute(($context["campanha"] ?? null), "midias", array()));
        echo ";
\tlet aluno = ";
        // line 239
        echo twig_jsonencode_filter(($context["aluno"] ?? null));
        echo ";
\tlet lead = ";
        // line 240
        echo twig_jsonencode_filter(($context["lead"] ?? null));
        echo ";
    let cursoInicial = ";
        // line 241
        echo twig_escape_filter($this->env, ($context["curso"] ?? null), "html", null, true);
        echo ";

    if (!aluno.sexo) aluno.sexo = null;
    if (!lead.midia_id) lead.midia_id = null;
\t
\tif (Array.isArray(lead.dados_adicionais)) delete lead.dados_adicionais;
\tlead = Object.assign({
\t\tdados_adicionais: {
\t\t\tdeficiencia: null,
\t\t\tdeficiencia_qual: null,
\t\t\tusar_enem: null
\t\t}
\t}, lead);
\t
    if (typeof aluno.data_nascimento !== \"undefined\")
        aluno.data_nascimento = aluno.datanascimento.split('-').reverse().join('/');

    window.onload = function() {
        \$(\".js-form\").on(\"submit\", function() {
            \$(\".btn-concluir\").attr(\"disabled\", \"true\");
            setTimeout(function() {
                \$(\".btn-concluir\").removeAttr(\"disabled\");
            }, 5000);
        });
    }
\t</script>

\t<!-- Script da Página -->
\t<script type=\"text/javascript\" src=\"./assets/js/page-inscricao.js\"></script>

\t";
        // line 271
        if (($context["error"] ?? null)) {
            // line 272
            echo "\t\t<script>alert('";
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "');</script>
\t";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/app/ambiente_conversao/tecfam2020.1/views//inscricao.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  367 => 272,  365 => 271,  332 => 241,  328 => 240,  324 => 239,  320 => 238,  315 => 235,  312 => 234,  294 => 229,  290 => 217,  284 => 216,  280 => 214,  261 => 212,  257 => 211,  252 => 210,  249 => 209,  245 => 208,  44 => 203,  40 => 9,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/ambiente_conversao/tecfam2020.1/views//inscricao.twig", "");
    }
}

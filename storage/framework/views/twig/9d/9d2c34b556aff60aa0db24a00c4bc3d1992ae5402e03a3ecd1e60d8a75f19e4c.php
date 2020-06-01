<?php

/* /var/www/app/app/Modules/Admin/views/Financeiro/Dashboard/index.twig */
class __TwigTemplate_d1f0db7b9e1c2130c105a741c3c6634ee5aa63ca7b1cd4f69144a484d75261a1 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::layout", "/var/www/app/app/Modules/Admin/views/Financeiro/Dashboard/index.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Admin::layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["form"] = $this->loadTemplate("Admin::helpers.form_financeiro", "/var/www/app/app/Modules/Admin/views/Financeiro/Dashboard/index.twig", 3);
        // line 4
        $context["tabela"] = $this->loadTemplate("Admin::helpers.tabela_financeiro", "/var/www/app/app/Modules/Admin/views/Financeiro/Dashboard/index.twig", 4);
        // line 6
        $context["title"] = "Notas Fiscais";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "<style type=\"text/css\" media=\"screen\">
    #root {
        opacity: 0;
    }
</style>

<div class=\"right_col\" role=\"main\">
    <div class=\"\">
        ";
        // line 18
        echo "        <div id=\"loader\">
            <p style=\"text-align:center\">Carregando...</p>
            <div class=\"progress progress-striped active\">
                <div class=\"progress-bar progress-bar-success\" role=\"progressbar\"
                    aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%\">
                </div>
            </div>
        </div>
        <div id=\"root\">
        ";
        // line 214
        echo "
            <div class=\"row\" v-if=\"campanhas\">
                <div class=\"col-md-12\" style=\"padding-top: 1em; padding-bottom: 1em\">
                    <button class=\"btn\" onclick=\"window.doPrint();\"><i class=\"fa fa-print\"></i> Imprimir Relatório</button>
                </div>
            </div>
            <div class=\"row\" id=\"resumo_geral\">
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"x_panel\">
                        <div class=\"x_title\">
                            <h2>Dashboard Financeira</h2>
                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"x_content\">
                            <h3 class=\"no-print\">Resumo</h3>

                            <table class=\"table table-striped datatable\">
                                <thead>
                                    <tr>
                                        <th>Cód</th>
                                        <th>Campanha</th>
                                        <th>Budget</th>
                                        <th>Consumido</th>
                                        <th>Candidatos</th>
                                        <th>Inscritos</th>
                                        <th>Matriculados</th>
                                        <th>Tx. Conversão</th>
                                        <th>R\$ / Candidato</th>
                                        <th>R\$ / Matrícula</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for=\"campanha in campanhas\">
                                        <td><span>{{ campanha.id }}</span></td>
                                        <td><span><a href=\"#\" @click=\"campanha_open = window.carregarDetalhamento(campanha);\">{{ campanha.nome }}<a></span></td>
                                        <td>R\$ <span>{{ campanha.budget | money }}</span></td>
                                        <td>R\$ <span>{{ campanha.budget_consumido | money }}</span></td>
                                        <td><span>{{ campanha.qtd_candidatos }}</span></td>
                                        <td><span>{{ campanha.qtd_inscritos }}</span></td>
                                        <td><span>{{ campanha.qtd_matriculados }}</span></td>
                                        <td><span>{{ (100 * campanha.qtd_matriculados / campanha.qtd_inscritos) | money }}%</span></td>
                                        <td>R\$ <span>{{ campanha | calcular_gasto('qtd_candidatos') }}</span></td>
                                        <td>R\$ <span>{{ campanha | calcular_gasto('qtd_matriculados') }}</span></td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

                <div class=\"clearfix\"></div>
            </div>

            <div class=\"row\" v-if=\"campanha_open != null\">
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"x_panel\">
                        <div class=\"x_title\">
                            <h2>Detalhes da Campanha</h2>
                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"x_content\">
                            <h3>{{ campanha_open.nome }}</h3>

                            <div class=\"row\">
                                <div class=\"col-md-4\">
                                    <label>Budget:</label><br>
                                    <span>R\$ {{ campanha_open.budget | money }}</span>
                                </div>
                                <div class=\"col-md-4\">
                                    <label>Budget Consumido:</label><br>
                                    <span>R\$ {{ campanha_open.budget_consumido | money }}</span>
                                </div>
                                <div class=\"col-md-4\">
                                    <label>Porcentagem do Budget:</label><br>
                                    <span>{{ (100 * campanha_open.budget_consumido / campanha_open.budget) | money }}%</span>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-4 col-lg-2\">
                                    <label>Candidatos:</label><br>
                                    <span>{{ campanha_open.qtd_candidatos }}</span>
                                </div>
                                <div class=\"col-md-4 col-lg-2\">
                                    <label>Inscritos:</label><br>
                                    <span>{{ campanha_open.qtd_inscritos }}</span>
                                </div>
                                <div class=\"col-md-4 col-lg-2\">
                                    <label>Matriculados:</label><br>
                                    <span>{{ campanha_open.qtd_matriculados }}</span>
                                </div>
                                <div class=\"col-md-4 col-lg-2\">
                                    <label>R\$ / Candidato:</label><br>
                                    <span>R\$ {{ campanha_open | calcular_gasto('qtd_candidatos') }}</span>
                                </div>
                                <div class=\"col-md-4 col-lg-2\">
                                    <label>R\$ / Inscrito:</label><br>
                                    <span>R\$ {{ campanha_open | calcular_gasto('qtd_inscritos') }}</span>
                                </div>
                                <div class=\"col-md-4 col-lg-2\">
                                    <label>R\$ / Matriculado:</label><br>
                                    <span>R\$ {{ campanha_open | calcular_gasto('qtd_matriculados') }}</span>
                                </div>
                            </div>

                            <!-- Detalhamentos -->
                            <div v-if=\"campanha_open_detalhamento\">
                                <h4>Descritivo de Origem</h4>
                                <table class=\"table table-striped datatable\">
                                    <thead>
                                        <tr>
                                            <th>Origem</th>
                                            <th>Investimento</th>
                                            <th>Candidatos</th>
                                            <th>Inscritos</th>
                                            <th>Matriculados</th>
                                            <th>Tx. Conversão</th>
                                            <th>R\$ / Candidato</th>
                                            <th>R\$ / Matrícula</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for=\"midia in campanha_open_detalhamento.midias\" :class=\"{ success: midia.nivel == 0, info: midia.nivel == 1 }\">
                                            <td><span>{{ midia.nome }}</span></td>
                                            <td>R\$ <span>{{ midia.gastos | money }}</span></td>
                                            <td><span>{{ midia.candidatos }}</span></td>
                                            <td><span>{{ midia.inscritos }}</span></td>
                                            <td><span>{{ midia.matriculados }}</span></td>
                                            <td><span>{{ (100 * midia.matriculados / midia.inscritos) | money }}%</span></td>
                                            <td>R\$ <span>{{ midia | calcular_gasto('candidatos', 'gastos') }}</span></td>
                                            <td>R\$ <span>{{ midia | calcular_gasto('matriculados', 'gastos') }}</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                                <p>Linhas marcadas em verde e azul representam as categorias de mídia.</p>
                                <hr />
                                
                                <h4>Descritivo de Fornecedores</h4>
                                <table class=\"table table-striped datatable\">
                                    <thead>
                                        <tr>
                                            <th>Razão Social</th>
                                            <th>Nome Fantasia</th>
                                            <th>CNPJ</th>
                                            <th>Investimento</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for=\"fornecedor in campanha_open_detalhamento.fornecedores\">
                                            <td><span>{{ fornecedor.razao_social }}</span></td>
                                            <td><span>{{ fornecedor.nome_fantasia }}</span></td>
                                            <td><span>{{ fornecedor.cnpj }}</span></td>
                                            <td>R\$ <span>{{ fornecedor.gastos | money }}</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr />

                                <h4>Detalhamento de Notas Fiscais</h4>
                                <table class=\"table table-striped datatable\">
                                    <thead>
                                        <tr>
                                            <th>Número</th>
                                            <th>Data</th>
                                            <th>Investimento</th>
                                            <th>Fornecedor</th>
                                            <th>Descrição</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for=\"nota_fiscal in campanha_open_detalhamento.notas\" v-if=\"nota_fiscal && nota_fiscal.nota\">
                                            <td><span>{{ nota_fiscal.nota.numero }}</span></td>
                                            <td><span>{{ nota_fiscal.nota.data }}</span></td>
                                            <td>R\$ <span>{{ nota_fiscal.nota.valor | money }}</span></td>
                                            <td><span>{{ nota_fiscal.nota.fornecedor.razao_social }}</span></td>
                                            <td><span>{{ nota_fiscal.nota.descricao }}</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"clearfix\"></div>
            </div>
        ";
        echo "
        </div>
    </div>
</div>

<style type=\"text/css\">
    @media screen {
        .print-only {
            display: none;
        }

        .no-print {
            display: block;
        }
    }

    @media print {
        @page {
            size: A4 portrait;
        }

        body {
            font-size: 8pt;
        }

        .print-only {
            display: block;
        }

        .no-print {
            display: none;
        }

        .left_col {
            display: none !important;
        }

        .right_col {
            margin: 0px !important;
        }

        .nav_menu {
            display: none !important;
        }

        .x_title {
            display: none !important;
        }

        .x_panel {
            width: 100% !important;
            margin: 0px !important;
            display: block !important;
            background: #fff !important;
            border: 0px none !important;
        }

        .table>tbody>tr>td,
        .table>tbody>tr>th,
        .table>tfoot>tr>td,
        .table>tfoot>tr>th,
        .table>thead>tr>td,
        .table>thead>tr>th {
            padding: 2px;
        }

        .accordion .panel {
            page-break-before: always;
            page-break-after: always;
            min-width: 100%;
            min-height: 100%;
        }
    }
</style>
";
    }

    // line 290
    public function block_scripts($context, array $blocks = array())
    {
        // line 291
        echo "<script src=\"https://unpkg.com/vue\"></script>

<script>
    (() => {
        var \$ = jQuery;

        \$(document).ready(() => {
            \$.get('/financeiro/dashboard/api/campanhas').then((campanhas) => {

                window.carregarDetalhamento = function carregarDetalhamento (campanha) {
                    // Zerar detalhamento atual
                    window.app.campanha_open_detalhamento = null;

                    // Consultar servidor pelo detalhamento
                    \$.get(`/financeiro/dashboard/api/detalhamento/\${campanha.id}`, (detalhamento) => {
                        // Atualizar detalhamento
                        window.app.campanha_open_detalhamento = detalhamento;
                    });

                    // Retornar campanha atual do filtro
                    return campanha;
                }

                window.doPrint = function doPrint () {
                    if (window.app.campanha_open) {
                        \$('#resumo_geral').hide();
                        window.print();
                        \$('#resumo_geral').show();
                    } else {
                        window.print();
                    }
                }

                var fn_money = (value) => {
                    if (isNaN(value)) value = 0;
                    return parseFloat(value).toLocaleString('pt-BR', { currency: 'BRL', minimumFractionDigits: 2, maximumFractionDigits: 2 });
                };

                var fn_calcular_gasto = (campanha, campo, campo_gastos) => {
                    var campo_gastos = campo_gastos || 'budget_consumido';
                    var investido = campanha[campo_gastos];
                    var qtd = campanha[campo];
                    var valor = 0;

                    valor = investido / qtd;

                    if (qtd == 0 || investido == 0 || isNaN(valor))
                        valor = 0;

                    return fn_money(valor);
                }

                // Formatar dinheiro
                Vue.filter(\"money\", fn_money);

                // Calcular Gastos
                Vue.filter(\"calcular_gasto\", fn_calcular_gasto);

                var app = window.app = new Vue({
                    el: '#root',
                    data: {
                        'window': window,
                        'campanhas': campanhas,
                        'campanha_open': null,
                        'campanha_open_detalhamento': null
                    }
                });

                \$('#root .datatable').DataTable({
                    responsive: true
                });

                console.log(campanhas);

                \$('#loader').fadeOut(300);
                \$('#root').animate({
                    'opacity': 1
                }, 300);
            });
        });
    })();
</script>
";
    }

    public function getTemplateName()
    {
        return "/var/www/app/app/Modules/Admin/views/Financeiro/Dashboard/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 291,  326 => 290,  60 => 214,  49 => 18,  39 => 9,  36 => 8,  32 => 1,  30 => 6,  28 => 4,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/Financeiro/Dashboard/index.twig", "");
    }
}

<?php

/* /var/www/app/app/Modules/Admin/views/Financeiro/ROI/index.twig */
class __TwigTemplate_9926c46cd0c67cebc50d7748af49b5e880d60850f17b2dbd0bc9e3a01f15c6ee extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::layout", "/var/www/app/app/Modules/Admin/views/Financeiro/ROI/index.twig", 1);
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
        $context["form"] = $this->loadTemplate("Admin::helpers.form_financeiro", "/var/www/app/app/Modules/Admin/views/Financeiro/ROI/index.twig", 3);
        // line 4
        $context["tabela"] = $this->loadTemplate("Admin::helpers.tabela_financeiro", "/var/www/app/app/Modules/Admin/views/Financeiro/ROI/index.twig", 4);
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
#root { opacity: 0; }\t
</style>

<div class=\"right_col\" role=\"main\">
\t<div class=\"\">
          
\t";
        // line 16
        if ( !($context["print"] ?? null)) {
            // line 17
            echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\" style=\"padding-top: 1em; padding-bottom: 1em\">
\t\t\t\t<button class=\"btn\" onclick=\"window.open('/financeiro/roi/print');\"><i class=\"fa fa-print\"></i> Imprimir Relatório</button>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 23
        echo "
\t\t<div class=\"row\">
          <div class=\"col-md-12 col-sm-12 col-xs-12\">
              <div class=\"x_panel\">
                <div class=\"x_title\">
                  <h2>ROI</h2>
                  <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">

\t\t\t\t";
        // line 34
        echo "\t\t\t\t<div id=\"loader\">
\t\t\t\t\t<p style=\"text-align:center\">Carregando relatórios...</p>
\t\t\t\t\t<div class=\"progress progress-striped active\">
\t\t\t\t\t\t<div class=\"progress-bar progress-bar-success\"  role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t";
        // line 43
        echo "\t\t\t\t<div id=\"root\">
\t\t\t\t";
        // line 137
        echo "
\t\t\t\t\t<h3 class=\"no-print\">Resumo</h3>

\t\t\t\t\t<table class=\"table table-striped datatable\">
\t\t\t\t\t\t<thead><tr class=\"print-only\">
\t\t\t\t\t\t\t<th><h3>Resumo</h3></th>
\t\t\t\t\t\t</tr><tr>
\t\t\t\t\t\t\t<th>Campanha</th>
\t\t\t\t\t\t\t<th>Budget</th>
\t\t\t\t\t\t\t<th>Consumido</th>
\t\t\t\t\t\t\t<th>Candidatos</th>
\t\t\t\t\t\t\t<th>Leads</th>
\t\t\t\t\t\t\t<th>Inscritos</th>
\t\t\t\t\t\t\t<th>Matriculados</th>
\t\t\t\t\t\t\t<th>R\$ / Candidato</th>
\t\t\t\t\t\t\t<th>R\$ / Matrícula</th>
\t\t\t\t\t\t</tr></thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr v-for=\"campanha in campanhas\">
\t\t\t\t\t\t\t\t<td><span>{{ campanha.nome }}</span></td>
\t\t\t\t\t\t\t\t<td>R\$ <span>{{ campanha.budget | money }}</span></td>
\t\t\t\t\t\t\t\t<td>R\$ <span>{{ campanha.budget_consumido | money }}</span></td>
\t\t\t\t\t\t\t\t<td><span>{{ campanha.qtd_candidatos }}</span></td>
\t\t\t\t\t\t\t\t<td><span>{{ campanha.qtd_leads }}</span></td>
\t\t\t\t\t\t\t\t<td><span>{{ campanha.qtd_inscritos }}</span></td>
\t\t\t\t\t\t\t\t<td><span>{{ campanha.qtd_matriculados }}</span></td>
\t\t\t\t\t\t\t\t<td>R\$ <span>{{ campanha | calcular_gasto('qtd_candidatos') }}</span></td>
\t\t\t\t\t\t\t\t<td>R\$ <span>{{ campanha | calcular_gasto('qtd_matriculados') }}</span></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>

\t\t\t\t\t<h3 class=\"no-print\">Detalhamento das Campanhas</h3>
                    <!-- start accordion -->
                    <div class=\"accordion\" id=\"accordion1\" role=\"tablist\" aria-multiselectable=\"true\">
                      <div class=\"panel\" v-for=\"campanha in campanhas\">
                        <a class=\"panel-heading collapsed\" role=\"tab\" id=\"headingTwo1\" data-toggle=\"collapse\" data-parent=\"#accordion1\" :href=\"'#collapse_campanha_' + campanha.id + '_1'\" aria-expanded=\"false\" :aria-controls=\"'collapse_campanha_' + campanha.id\">
                          <h4 class=\"panel-title no-print\">{{ campanha.nome }}</h4>
                        </a>
                        <div :id=\"'collapse_campanha_' + campanha.id + '_1'\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">
                          <div class=\"panel-body\">

                            <p class=\"no-print\"><strong>Mídias</strong>
                            </p>
\t\t\t\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t\t\t\t<thead><tr class=\"print-only\">
\t\t\t\t\t\t\t\t\t<th>{{ campanha.nome }}: Mídias</th>
\t\t\t\t\t\t\t\t</tr><tr>
\t\t\t\t\t\t\t\t\t<th>Mídia</th>
\t\t\t\t\t\t\t\t\t<th>Gastos</th>
\t\t\t\t\t\t\t\t\t<th>Candidatos</th>
\t\t\t\t\t\t\t\t\t<th>Leads</th>
\t\t\t\t\t\t\t\t\t<th>Inscritos</th>
\t\t\t\t\t\t\t\t\t<th>Matriculados</th>
\t\t\t\t\t\t\t\t\t<th>R\$ / Candidato</th>
\t\t\t\t\t\t\t\t\t<th>R\$ / Matrícula</th>
\t\t\t\t\t\t\t\t</tr></thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr v-for=\"midia in campanha.midias\">
\t\t\t\t\t\t\t\t\t\t<td><span>{{ midia.nome }}</span></td>
\t\t\t\t\t\t\t\t\t\t<td>R\$ <span>{{ midia.gastos | money }}</span></td>
\t\t\t\t\t\t\t\t\t\t<td><span>{{ midia.candidatos }}</span></td>
\t\t\t\t\t\t\t\t\t\t<td><span>{{ midia.leads }}</span></td>
\t\t\t\t\t\t\t\t\t\t<td><span>{{ midia.inscritos }}</span></td>
\t\t\t\t\t\t\t\t\t\t<td><span>{{ midia.matriculados }}</span></td>
\t\t\t\t\t\t\t\t\t\t<td>R\$ <span>{{ midia | calcular_gasto('candidatos', 'gastos') }}</span></td>
\t\t\t\t\t\t\t\t\t\t<td>R\$ <span>{{ midia | calcular_gasto('matriculados', 'gastos') }}</span></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>

                            <p class=\"no-print\"><strong>Fornecedores</strong>
                            </p>
\t\t\t\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t\t\t\t<thead><tr class=\"print-only\">
\t\t\t\t\t\t\t\t\t<th>{{ campanha.nome }}: Fornecedores</th>
\t\t\t\t\t\t\t\t</tr><tr>
\t\t\t\t\t\t\t\t\t<th>Fornecedor</th>
\t\t\t\t\t\t\t\t\t<th>Gastos</th>
\t\t\t\t\t\t\t\t</tr></thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr v-for=\"fornecedor in campanha.fornecedores\">
\t\t\t\t\t\t\t\t\t\t<td><span>{{ fornecedor.nome_fantasia }}</span></td>
\t\t\t\t\t\t\t\t\t\t<td>R\$ <span>{{ fornecedor.gastos | money }}</span></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>

                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- end of accordion -->
\t\t\t\t";
        echo "
\t\t\t\t</div>

                </div>
              </div>
            </div>

            <div class=\"clearfix\"></div>
        </div>
    </div>
</div>

<style type=\"text/css\">
@media screen {
\t.print-only { display: none; }
\t.no-print { display: block; }
}
@media print {
\t@page {
\t\tsize: A4 portrait;
\t }

\tbody { font-size: 8pt; }

\t.print-only { display: block; }
\t.no-print { display: none; }

\t.left_col { display: none !important; }
\t.right_col { margin: 0px !important; }
\t.nav_menu { display: none !important; }
\t.x_title { display: none !important; }
\t.x_panel {
\t    width: 100% !important;
\t    margin: 0px !important;
\t    display: block !important;
\t    background: #fff !important;
\t    border: 0px none !important;
\t}
\t.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
\t\tpadding: 2px;
\t}
\t.accordion .panel {
\t\tpage-break-before: always;
\t\tpage-break-after: always;
\t\tmin-width: 100%;
\t\tmin-height: 100%;
\t}
}
</style>
";
    }

    // line 188
    public function block_scripts($context, array $blocks = array())
    {
        // line 189
        echo "<script src=\"https://unpkg.com/vue\"></script>

<script>
(() => {
\tvar \$ = jQuery;

\t\$(document).ready(() => {
\t\t\$.get('/financeiro/roi/api/campanhas').then((campanhas) => {

\t\t\tvar fn_money = (value) => {
\t\t\t\treturn parseFloat(value).toFixed(2);
\t\t\t};

\t\t\tvar fn_calcular_gasto = (campanha, campo, campo_gastos) => {
\t\t\t\tvar campo_gastos = campo_gastos || 'budget_consumido';
\t\t\t\tvar investido = campanha[campo_gastos];
\t\t\t\tvar qtd = campanha[campo];
\t\t\t\tvar valor = 0;

\t\t\t\tvalor = investido / qtd;

\t\t\t\tif (qtd == 0 || investido == 0 || isNaN(valor))
\t\t\t\t\tvalor = 0;

\t\t\t\treturn fn_money(valor);
\t\t\t}

\t\t\t// Formatar dinheiro
\t\t\tVue.filter(\"money\", fn_money);

\t\t\t// Calcular Gastos
\t\t\tVue.filter(\"calcular_gasto\", fn_calcular_gasto);

\t\t\tvar app = window.app = new Vue({
\t\t\t\tel: '#root',
\t\t\t\tdata: {
\t\t\t\t\t'campanhas': campanhas
\t\t\t\t}
\t\t\t});

\t\t";
        // line 229
        if (($context["print"] ?? null)) {
            // line 230
            echo "\t\t\t\$('#root').css({'opacity': 1});
\t\t\t\$('#loader').hide();

\t\t\t\$('#root .collapse').collapse('show');

\t\t\tsetTimeout(() => {
\t\t\t\twindow.print();
\t\t\t\twindow.close();
\t\t\t}, 1000);
\t\t";
        } else {
            // line 240
            echo "
\t\t\t\$('#root .datatable').DataTable({
\t\t\t\tresponsive: true
\t\t\t});

\t\t\tconsole.log(campanhas);

\t\t\t\$('#loader').fadeOut(300);
\t\t\t\$('#root').animate({'opacity': 1}, 300);
\t\t";
        }
        // line 250
        echo "\t\t});
\t});
})();
</script>
";
    }

    public function getTemplateName()
    {
        return "/var/www/app/app/Modules/Admin/views/Financeiro/ROI/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 250,  289 => 240,  277 => 230,  275 => 229,  233 => 189,  230 => 188,  83 => 137,  80 => 43,  70 => 34,  58 => 23,  50 => 17,  48 => 16,  39 => 9,  36 => 8,  32 => 1,  30 => 6,  28 => 4,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/Financeiro/ROI/index.twig", "");
    }
}

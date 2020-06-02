<?php

/* /var/www/app/app/Modules/Admin/views/FaculdadeAberta/filter.twig */
class __TwigTemplate_a58e2b32015d93a7021bb64644fa2b4a9e85160f581454409ef0db973536ede3 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::layout", "/var/www/app/app/Modules/Admin/views/FaculdadeAberta/filter.twig", 1);
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
        $context["opcoes"] = array(0 => array("id" => "out_21_manha", "data" => "21/10/2019", "horario" => "8h às 11h", "alunos" =>         // line 5
($context["out_21_manha"] ?? null)), 1 => array("id" => "out_21_noite", "data" => "21/10/2019", "horario" => "19h às 22h", "alunos" =>         // line 6
($context["out_21_noite"] ?? null)), 2 => array("id" => "out_22_manha", "data" => "22/10/2019", "horario" => "8h às 11h", "alunos" =>         // line 7
($context["out_22_manha"] ?? null)), 3 => array("id" => "out_22_noite", "data" => "22/10/2019", "horario" => "19h às 22h", "alunos" =>         // line 8
($context["out_22_noite"] ?? null)), 4 => array("id" => "out_23_manha", "data" => "23/10/2019", "horario" => "8h às 11h", "alunos" =>         // line 9
($context["out_23_manha"] ?? null)), 5 => array("id" => "out_23_noite", "data" => "23/10/2019", "horario" => "19h às 22h", "alunos" =>         // line 10
($context["out_23_noite"] ?? null)), 6 => array("id" => "out_24_manha", "data" => "24/10/2019", "horario" => "8h às 11h", "alunos" =>         // line 11
($context["out_24_manha"] ?? null)), 7 => array("id" => "out_24_noite", "data" => "24/10/2019", "horario" => "19h às 22h", "alunos" =>         // line 12
($context["out_24_noite"] ?? null)), 8 => array("id" => "out_29_manha", "data" => "29/10/2019", "horario" => "8h às 11h", "alunos" =>         // line 14
($context["out_29_manha"] ?? null)), 9 => array("id" => "out_29_noite", "data" => "29/10/2019", "horario" => "19h às 22h", "alunos" =>         // line 15
($context["out_29_noite"] ?? null)), 10 => array("id" => "out_30_manha", "data" => "30/10/2019", "horario" => "8h às 11h", "alunos" =>         // line 16
($context["out_30_manha"] ?? null)), 11 => array("id" => "out_30_noite", "data" => "30/10/2019", "horario" => "19h às 22h", "alunos" =>         // line 17
($context["out_30_noite"] ?? null)), 12 => array("id" => "out_31_manha", "data" => "31/10/2019", "horario" => "8h às 11h", "alunos" =>         // line 18
($context["out_31_manha"] ?? null)), 13 => array("id" => "out_31_noite", "data" => "31/10/2019", "horario" => "19h às 22h", "alunos" =>         // line 19
($context["out_31_noite"] ?? null)), 14 => array("id" => "nov_01_manha", "data" => "01/11/2019", "grupo_liberacao" => "2", "horario" => "8h às 11h", "alunos" =>         // line 20
($context["nov_01_manha"] ?? null)), 15 => array("id" => "nov_01_noite", "data" => "01/11/2019", "grupo_liberacao" => "2", "horario" => "19h às 22h", "alunos" =>         // line 21
($context["nov_01_noite"] ?? null)), 16 => array("id" => "nov_04_manha", "data" => "04/11/2019", "grupo_liberacao" => "2", "horario" => "8h às 11h", "alunos" =>         // line 22
($context["nov_04_manha"] ?? null)), 17 => array("id" => "nov_04_noite", "data" => "04/11/2019", "grupo_liberacao" => "2", "horario" => "19h às 22h", "alunos" =>         // line 23
($context["nov_04_noite"] ?? null)));
        // line 26
        $context["nomePeriodo"] = "Data inválida";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["opcoes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["opcao"]) {
            // line 28
            if (($this->getAttribute($context["opcao"], "id", array()) == ($context["data"] ?? null))) {
                // line 29
                $context["nomePeriodo"] = ((((($this->getAttribute($context["opcao"], "data", array()) . " - ") . $this->getAttribute($context["opcao"], "horario", array())) . " (") . $this->getAttribute($context["opcao"], "id", array())) . ")");
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opcao'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        $context["title"] = (($context["nomePeriodo"] ?? null) . ": Revisaço ENEM");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 35
    public function block_content($context, array $blocks = array())
    {
        // line 36
        echo "
<div class=\"right_col\" role=\"main\">
\t<div class=\"\">
\t\t<div class=\"row\">
          <img src=\"/images/logo-faculdadeaberta.png\" style=\"display: block;width: auto;max-width: 100%;margin: 2em auto;\">
          <div class=\"col-md-12 col-sm-12 col-xs-12\">
              <div class=\"x_panel\">
                <div class=\"x_title\">
                  <h2>Faculdade Aberta: ";
        // line 44
        echo twig_escape_filter($this->env, ($context["nomePeriodo"] ?? null), "html", null, true);
        echo "</h2>
                  <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">

                  <table id=\"tabela_alunos\" class=\"table table-striped\">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th class=\"all\">Escola</th>
                        <th class=\"all\">Coordenador pedagógico</th>
                        <th class=\"all\">Responsável pelo cadastro</th>
                        <th class=\"all\">Endereço da escola</th>
                        <th class=\"all\">Estado</th>
                        <th class=\"all\">Cidade</th>
                        <th class=\"all\">Telefone do resp.</th>
                        <th class=\"all\">E-mail do resp.</th>
                        <th class=\"all\">Qtd. alunos</th>
                        <th class=\"all\">Data e período</th>
                      </tr>
                    </thead>
                    <tbody>
                      ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["inscritos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["inscrito"]) {
            // line 67
            echo "                        <tr>
                            <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["inscrito"], "id", array())), "html", null, true);
            echo "</td>
                            <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscrito"], "data", array()), "nome_escola", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscrito"], "data", array()), "nome_coordenador_pedagogico", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscrito"], "data", array()), "nome_responsavel_cadastro", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscrito"], "data", array()), "endereco_escola", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscrito"], "data", array()), "estado_escola", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscrito"], "data", array()), "cidade_escola", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscrito"], "data", array()), "telefone_responsavel", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscrito"], "data", array()), "email_responsavel", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscrito"], "data", array()), "nro_alunos", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscrito"], "data", array()), "data_e_periodo", array()), "html", null, true);
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscrito'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                    </tbody>
                  </table>
                </div>

                </div>
              </div>
            </div>

            <div class=\"clearfix\"></div>
        </div>
        <a href=\"/faculdadeaberta\" class=\"btn btn-primary\" style=\"padding: .6em 3em; margin-top: 1em;\">Voltar</a>
    </div>
</div>
";
    }

    // line 96
    public function block_scripts($context, array $blocks = array())
    {
        // line 97
        echo "<style type=\"text/css\" media=\"screen\">
    .x_option {
        font-size: 1.1em;
        line-height: 1.5;
        margin-bottom: 1.25em;
    }
    #tabela_alunos tr:hover {}
</style>
<script>
\$(document).ready(function () {
\tvar table = \$('#tabela_alunos').DataTable( {
        scrollY: '50vh',
        scrollCollapse: true,
        scroller: {
            loadingIndicator: true
        },
  \t\tresponsive: true,
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        initComplete: function () {
            console.log('LOADED', table);
            table.buttons().container()
                .appendTo( \$('#tabela_alunos_filter').parent() );
                ";
        // line 122
        echo "        }
    } );
});
</script>
";
    }

    public function getTemplateName()
    {
        return "/var/www/app/app/Modules/Admin/views/FaculdadeAberta/filter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 122,  181 => 97,  178 => 96,  161 => 81,  152 => 78,  148 => 77,  144 => 76,  140 => 75,  136 => 74,  132 => 73,  128 => 72,  124 => 71,  120 => 70,  116 => 69,  112 => 68,  109 => 67,  105 => 66,  80 => 44,  70 => 36,  67 => 35,  63 => 1,  61 => 33,  54 => 29,  52 => 28,  48 => 27,  46 => 26,  44 => 23,  43 => 22,  42 => 21,  41 => 20,  40 => 19,  39 => 18,  38 => 17,  37 => 16,  36 => 15,  35 => 14,  34 => 12,  33 => 11,  32 => 10,  31 => 9,  30 => 8,  29 => 7,  28 => 6,  27 => 5,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/FaculdadeAberta/filter.twig", "");
    }
}

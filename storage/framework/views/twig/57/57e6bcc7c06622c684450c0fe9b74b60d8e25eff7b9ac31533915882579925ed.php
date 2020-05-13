<?php

/* /var/www/app/app/Modules/Admin/views/FaculdadeAberta/index.twig */
class __TwigTemplate_cc56229853d32fb9f66d7133900b151863ea12d376f2d734ab165800b5ab0bce extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::layout", "/var/www/app/app/Modules/Admin/views/FaculdadeAberta/index.twig", 1);
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
        $context["title"] = "Faculdade Aberta 2019";
        // line 4
        $context["opcoes"] = array(0 => array("id" => "out_21_manha", "data" => "21/10/2019", "horario" => "8h às 11h", "alunos" =>         // line 6
($context["out_21_manha"] ?? null)), 1 => array("id" => "out_21_noite", "data" => "21/10/2019", "horario" => "19h às 22h", "alunos" =>         // line 7
($context["out_21_noite"] ?? null)), 2 => array("id" => "out_22_manha", "data" => "22/10/2019", "horario" => "8h às 11h", "alunos" =>         // line 8
($context["out_22_manha"] ?? null)), 3 => array("id" => "out_22_noite", "data" => "22/10/2019", "horario" => "19h às 22h", "alunos" =>         // line 9
($context["out_22_noite"] ?? null)), 4 => array("id" => "out_23_manha", "data" => "23/10/2019", "horario" => "8h às 11h", "alunos" =>         // line 10
($context["out_23_manha"] ?? null)), 5 => array("id" => "out_23_noite", "data" => "23/10/2019", "horario" => "19h às 22h", "alunos" =>         // line 11
($context["out_23_noite"] ?? null)), 6 => array("id" => "out_24_manha", "data" => "24/10/2019", "horario" => "8h às 11h", "alunos" =>         // line 12
($context["out_24_manha"] ?? null)), 7 => array("id" => "out_24_noite", "data" => "24/10/2019", "horario" => "19h às 22h", "alunos" =>         // line 13
($context["out_24_noite"] ?? null)), 8 => array("id" => "out_29_manha", "data" => "29/10/2019", "horario" => "8h às 11h", "alunos" =>         // line 15
($context["out_29_manha"] ?? null)), 9 => array("id" => "out_29_noite", "data" => "29/10/2019", "horario" => "19h às 22h", "alunos" =>         // line 16
($context["out_29_noite"] ?? null)), 10 => array("id" => "out_30_manha", "data" => "30/10/2019", "horario" => "8h às 11h", "alunos" =>         // line 17
($context["out_30_manha"] ?? null)), 11 => array("id" => "out_30_noite", "data" => "30/10/2019", "horario" => "19h às 22h", "alunos" =>         // line 18
($context["out_30_noite"] ?? null)), 12 => array("id" => "out_31_manha", "data" => "31/10/2019", "horario" => "8h às 11h", "alunos" =>         // line 19
($context["out_31_manha"] ?? null)), 13 => array("id" => "out_31_noite", "data" => "31/10/2019", "horario" => "19h às 22h", "alunos" =>         // line 20
($context["out_31_noite"] ?? null)), 14 => array("id" => "nov_01_manha", "data" => "01/11/2019", "grupo_liberacao" => "2", "horario" => "8h às 11h", "alunos" =>         // line 21
($context["nov_01_manha"] ?? null)), 15 => array("id" => "nov_01_noite", "data" => "01/11/2019", "grupo_liberacao" => "2", "horario" => "19h às 22h", "alunos" =>         // line 22
($context["nov_01_noite"] ?? null)), 16 => array("id" => "nov_04_manha", "data" => "04/11/2019", "grupo_liberacao" => "2", "horario" => "8h às 11h", "alunos" =>         // line 24
($context["nov_04_manha"] ?? null)), 17 => array("id" => "nov_04_noite", "data" => "04/11/2019", "grupo_liberacao" => "2", "horario" => "19h às 22h", "alunos" =>         // line 25
($context["nov_04_noite"] ?? null)));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
        // line 30
        echo "<div class=\"right_col\" role=\"main\">
\t<div class=\"\">
\t\t<div class=\"row\">
          <img src=\"/images/logo-faculdadeaberta.png\" style=\"display: block;width: auto;max-width: 100%;margin: 2em auto;\">
          <div class=\"col-md-12 col-sm-12 col-xs-12\">
              <div class=\"x_panel\">
                <div class=\"x_title\">
                  <h2>Faculdade Aberta 2019 - Todos inscritos</h2>
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
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["inscritos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["inscrito"]) {
            // line 60
            echo "                        <tr>
                            <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["inscrito"], "id", array())), "html", null, true);
            echo "</td>
                            <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscrito"], "data", array()), "nome_escola", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscrito"], "data", array()), "nome_coordenador_pedagogico", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscrito"], "data", array()), "nome_responsavel_cadastro", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscrito"], "data", array()), "endereco_escola", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscrito"], "data", array()), "estado_escola", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscrito"], "data", array()), "cidade_escola", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscrito"], "data", array()), "telefone_responsavel", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscrito"], "data", array()), "email_responsavel", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscrito"], "data", array()), "nro_alunos", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscrito"], "data", array()), "data_e_periodo", array()), "html", null, true);
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscrito'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div class=\"clearfix\"></div>

            <div class=\"col-md-12 col-sm-12 col-xs-12 mt-3\">
                <div class=\"x_panel\">
                    <h2 class=\"x_title\">Inscritos por data e período</h2>
                    <div class=\"x_content\">
                        ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["opcoes"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["opcao"]) {
            // line 87
            echo "                            <a href=\"/faculdadeaberta/data-periodo/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["opcao"], "id", array()), "html", null, true);
            echo "\">
                            <p class=\"x_option\"><b>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["opcao"], "data", array()), "html", null, true);
            echo "</b> - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["opcao"], "horario", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["opcao"], "id", array()), "html", null, true);
            echo ")</p>
                            </a>
                            ";
            // line 90
            if ( !$this->getAttribute($context["loop"], "index", array())) {
                // line 91
                echo "                            <hr/>
                            ";
            }
            // line 93
            echo "                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opcao'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    // line 102
    public function block_scripts($context, array $blocks = array())
    {
        // line 103
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
        // serverSide: true,
        // ordering: false,
        // searching: false,
        scrollY: '50vh',
        scrollCollapse: true,
        scroller: {
            loadingIndicator: true
        },
  \t\t  responsive: true,
        buttons: [
          'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        initComplete: function () {
            console.log('LOADED', table);
            table.buttons().container()
                .appendTo( \$('#tabela_alunos_filter').parent() );
                ";
        // line 131
        echo "        }
    } );
});
</script>
";
    }

    public function getTemplateName()
    {
        return "/var/www/app/app/Modules/Admin/views/FaculdadeAberta/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 131,  220 => 103,  217 => 102,  207 => 94,  193 => 93,  189 => 91,  187 => 90,  178 => 88,  173 => 87,  156 => 86,  142 => 74,  133 => 71,  129 => 70,  125 => 69,  121 => 68,  117 => 67,  113 => 66,  109 => 65,  105 => 64,  101 => 63,  97 => 62,  93 => 61,  90 => 60,  86 => 59,  55 => 30,  52 => 29,  48 => 1,  46 => 25,  45 => 24,  44 => 22,  43 => 21,  42 => 20,  41 => 19,  40 => 18,  39 => 17,  38 => 16,  37 => 15,  36 => 13,  35 => 12,  34 => 11,  33 => 10,  32 => 9,  31 => 8,  30 => 7,  29 => 6,  28 => 4,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/FaculdadeAberta/index.twig", "");
    }
}

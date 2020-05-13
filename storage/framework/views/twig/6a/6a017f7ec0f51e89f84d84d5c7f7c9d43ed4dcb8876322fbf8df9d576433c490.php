<?php

/* /var/www/app/app/Modules/Admin/views/Revisaco/index.twig */
class __TwigTemplate_87aa11a72d5eb31ee168c7a4af40fa88fb11267379f09140200f38dde1fcddc9 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::layout", "/var/www/app/app/Modules/Admin/views/Revisaco/index.twig", 1);
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
        $context["title"] = "Revisaço ENEM 2019";
        // line 4
        $context["opcoes"] = array(0 => array("id" => "red_14set_8-12", "data" => "14 de Setembro", "materia" => "Redação", "horario" => "8h às 12h"), 1 => array("id" => "red_14set_13-17", "data" => "14 de Setembro", "materia" => "Redação", "horario" => "13h às 17h"), 2 => array("id" => "por_21set_8-12", "data" => "21 de Setembro", "materia" => "Português (Gramática e Literatura)", "horario" => "8h às 12h"), 3 => array("id" => "mat_21set_13-17", "data" => "21 de Setembro", "materia" => "Matemática", "horario" => "13h às 17h"), 4 => array("id" => "his_28set_8-12", "data" => "28 de Setembro", "materia" => "História", "horario" => "8h às 12h"), 5 => array("id" => "fil_28set_13-17", "data" => "28 de Setembro", "materia" => "Filosofia e Sociologia", "horario" => "13h às 17h"), 6 => array("id" => "geo_05out_8-12", "data" => "05 de Outubro", "materia" => "Geografia", "horario" => "8h às 12h"), 7 => array("id" => "bio_05out_13-17", "data" => "05 de Outubro", "materia" => "Biologia", "horario" => "13h às 17h"), 8 => array("id" => "qui_12out_8-12", "data" => "12 de Outubro", "materia" => "Química", "horario" => "8h às 12h"), 9 => array("id" => "fis_12out_13-17", "data" => "12 de Outubro", "materia" => "Física", "horario" => "13h às 17h"), 10 => array("id" => "atu_19out_8-11", "data" => "19 de Outubro", "materia" => "Atualidades", "horario" => "8h às 11h"), 11 => array("id" => "ing_19out_12-1430", "data" => "19 de Outubro", "materia" => "Inglês", "horario" => "12h às 14h30"), 12 => array("id" => "esp_19out_1530-18", "data" => "19 de Outubro", "materia" => "Espanhol", "horario" => "15h30 às 18h"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "<div class=\"right_col\" role=\"main\">
\t<div class=\"\">
\t\t<div class=\"row\">
          <img src=\"/images/logo-revisaco.png\" style=\"display: block;width: auto;max-width: 100%;margin: 2em auto;\">
          <div class=\"col-md-12 col-sm-12 col-xs-12\">
              <div class=\"x_panel\">
                <div class=\"x_title\">
                  <h2>Revisaço ENEM 2019 - Todos inscritos</h2>
                  <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">

                  <table id=\"tabela_alunos\" class=\"table table-striped\">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th class=\"all\">Nome</th>
                        <th class=\"all\">CPF</th>
                        <th class=\"all\">Celular</th>
                        <th class=\"all\">E-mail</th>
                        <th class=\"all\">Estado</th>
                        <th class=\"all\">Cidade</th>
                        <th class=\"all\">Matérias inscritas</th>
                      </tr>
                    </thead>
                    <tbody>
                      ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["inscritos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["inscrito"]) {
            // line 50
            echo "                        <tr>
                            <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["inscrito"], "id", array())), "html", null, true);
            echo "</td>
                            <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscrito"], "data", array()), "nome", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscrito"], "data", array()), "cpf", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscrito"], "data", array()), "celular", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscrito"], "data", array()), "email", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscrito"], "data", array()), "estado", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscrito"], "data", array()), "cidade", array()), "html", null, true);
            echo "</td>
                            <td>
                              ";
            // line 59
            if ($this->getAttribute($this->getAttribute($context["inscrito"], "data", array(), "any", false, true), "opcoes", array(), "any", true, true)) {
                // line 60
                echo "                                ";
                echo twig_escape_filter($this->env, twig_replace_filter(twig_replace_filter(twig_replace_filter(twig_replace_filter(twig_replace_filter($this->getAttribute($this->getAttribute($context["inscrito"], "data", array()), "opcoes", array()), array("\"" => "")), array("[" => "")), array("]" => "")), array("\"" => "")), array("," => ", ")), "html", null, true);
                echo "
                              ";
            }
            // line 62
            echo "                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscrito'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div class=\"clearfix\"></div>

            <div class=\"col-md-12 col-sm-12 col-xs-12 mt-3\">
                <div class=\"x_panel\">
                    <h2 class=\"x_title\">Inscritos por matéria</h2>
                    <div class=\"x_content\">
                        ";
        // line 77
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
            // line 78
            echo "                            <a href=\"/revisaco/curso/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["opcao"], "id", array()), "html", null, true);
            echo "\">
                            <p class=\"x_option\"><b>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["opcao"], "materia", array()), "html", null, true);
            echo "</b> - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["opcao"], "data", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["opcao"], "horario", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["opcao"], "id", array()), "html", null, true);
            echo ")</p>
                            </a>
                            ";
            // line 81
            if ( !$this->getAttribute($context["loop"], "index", array())) {
                // line 82
                echo "                            <hr/>
                            ";
            }
            // line 84
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
        // line 85
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    // line 93
    public function block_scripts($context, array $blocks = array())
    {
        // line 94
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
        // line 122
        echo "        }
    } );
});
</script>
";
    }

    public function getTemplateName()
    {
        return "/var/www/app/app/Modules/Admin/views/Revisaco/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 122,  197 => 94,  194 => 93,  184 => 85,  170 => 84,  166 => 82,  164 => 81,  153 => 79,  148 => 78,  131 => 77,  117 => 65,  109 => 62,  103 => 60,  101 => 59,  96 => 57,  92 => 56,  88 => 55,  84 => 54,  80 => 53,  76 => 52,  72 => 51,  69 => 50,  65 => 49,  37 => 23,  34 => 22,  30 => 1,  28 => 4,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/Revisaco/index.twig", "");
    }
}

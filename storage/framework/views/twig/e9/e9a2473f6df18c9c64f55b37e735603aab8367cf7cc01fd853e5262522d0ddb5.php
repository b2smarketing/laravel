<?php

/* /var/www/app/app/Modules/Admin/views/Revisaco/filter.twig */
class __TwigTemplate_5f51a5b574611b6b464405422022ecb5b3633ca13ba4469bfea05bc2a3282a2e extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::layout", "/var/www/app/app/Modules/Admin/views/Revisaco/filter.twig", 1);
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
        $context["opcoes"] = array(0 => array("id" => "red_14set_8-12", "data" => "14 de Setembro", "materia" => "Redação", "horario" => "8h às 12h"), 1 => array("id" => "red_14set_13-17", "data" => "14 de Setembro", "materia" => "Redação", "horario" => "13h às 17h"), 2 => array("id" => "por_21set_8-12", "data" => "21 de Setembro", "materia" => "Português (Gramática e Literatura)", "horario" => "8h às 12h"), 3 => array("id" => "mat_21set_13-17", "data" => "21 de Setembro", "materia" => "Matemática", "horario" => "13h às 17h"), 4 => array("id" => "his_28set_8-12", "data" => "28 de Setembro", "materia" => "História", "horario" => "8h às 12h"), 5 => array("id" => "fil_28set_13-17", "data" => "28 de Setembro", "materia" => "Filosofia e Sociologia", "horario" => "13h às 17h"), 6 => array("id" => "geo_05out_8-12", "data" => "05 de Outubro", "materia" => "Geografia", "horario" => "8h às 12h"), 7 => array("id" => "bio_05out_13-17", "data" => "05 de Outubro", "materia" => "Biologia", "horario" => "13h às 17h"), 8 => array("id" => "qui_12out_8-12", "data" => "12 de Outubro", "materia" => "Química", "horario" => "8h às 12h"), 9 => array("id" => "fis_12out_13-17", "data" => "12 de Outubro", "materia" => "Física", "horario" => "13h às 17h"), 10 => array("id" => "atu_19out_8-11", "data" => "19 de Outubro", "materia" => "Atualidades", "horario" => "8h às 11h"), 11 => array("id" => "ing_19out_12-1430", "data" => "19 de Outubro", "materia" => "Inglês", "horario" => "12h às 14h30"), 12 => array("id" => "esp_19out_1530-18", "data" => "19 de Outubro", "materia" => "Espanhol", "horario" => "15h30 às 18h"));
        // line 21
        $context["nomeCurso"] = "Curso inválido";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["opcoes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["opcao"]) {
            // line 23
            if (($this->getAttribute($context["opcao"], "id", array()) == ($context["curso"] ?? null))) {
                // line 24
                $context["nomeCurso"] = ((((((($this->getAttribute($context["opcao"], "materia", array()) . " - ") . $this->getAttribute($context["opcao"], "data", array())) . " - ") . $this->getAttribute($context["opcao"], "horario", array())) . " (") . $this->getAttribute($context["opcao"], "id", array())) . ")");
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opcao'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        $context["title"] = (($context["nomeCurso"] ?? null) . ": Revisaço ENEM");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        // line 31
        echo "
<div class=\"right_col\" role=\"main\">
\t<div class=\"\">
\t\t<div class=\"row\">
          <img src=\"/images/logo-revisaco.png\" style=\"display: block;width: auto;max-width: 100%;margin: 2em auto;\">
          <div class=\"col-md-12 col-sm-12 col-xs-12\">
              <div class=\"x_panel\">
                <div class=\"x_title\">
                  <h2>Revisaço ENEM: ";
        // line 39
        echo twig_escape_filter($this->env, ($context["nomeCurso"] ?? null), "html", null, true);
        echo "</h2>
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
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["inscritos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["inscrito"]) {
            // line 59
            echo "                        <tr>
                            <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["inscrito"], "id", array())), "html", null, true);
            echo "</td>
                            <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscrito"], "data", array()), "nome", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscrito"], "data", array()), "cpf", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscrito"], "data", array()), "celular", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscrito"], "data", array()), "email", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscrito"], "data", array()), "estado", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscrito"], "data", array()), "cidade", array()), "html", null, true);
            echo "</td>
                            <td>
                              ";
            // line 68
            if ($this->getAttribute($this->getAttribute($context["inscrito"], "data", array(), "any", false, true), "opcoes", array(), "any", true, true)) {
                // line 69
                echo "                                ";
                echo twig_escape_filter($this->env, twig_replace_filter(twig_replace_filter(twig_replace_filter(twig_replace_filter(twig_replace_filter($this->getAttribute($this->getAttribute($context["inscrito"], "data", array()), "opcoes", array()), array("\"" => "")), array("[" => "")), array("]" => "")), array("\"" => "")), array("," => ", ")), "html", null, true);
                echo "
                              ";
            }
            // line 71
            echo "                            </td>
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
        </div>
        <a href=\"/revisaco\" class=\"btn btn-primary\" style=\"padding: .6em 3em; margin-top: 1em;\">Voltar</a>
    </div>
</div>
";
    }

    // line 88
    public function block_scripts($context, array $blocks = array())
    {
        // line 89
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
        // line 114
        echo "        }
    } );
});
</script>
";
    }

    public function getTemplateName()
    {
        return "/var/www/app/app/Modules/Admin/views/Revisaco/filter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 114,  155 => 89,  152 => 88,  136 => 74,  128 => 71,  122 => 69,  120 => 68,  115 => 66,  111 => 65,  107 => 64,  103 => 63,  99 => 62,  95 => 61,  91 => 60,  88 => 59,  84 => 58,  62 => 39,  52 => 31,  49 => 30,  45 => 1,  43 => 28,  36 => 24,  34 => 23,  30 => 22,  28 => 21,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/Revisaco/filter.twig", "");
    }
}

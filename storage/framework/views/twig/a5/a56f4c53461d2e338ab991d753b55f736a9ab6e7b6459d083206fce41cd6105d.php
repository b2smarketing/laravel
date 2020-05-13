<?php

/* /var/www/app/landing-pages/revisacoenem/views//inscricao.twig */
class __TwigTemplate_3427d1afe7cf283d55ee4009764291f5ca7609d1e647a99b619df763389f5845 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LP::layout", "/var/www/app/landing-pages/revisacoenem/views//inscricao.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LP::layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["title"] = "Inscrição — Revisaço ENEM";
        // line 4
        $context["meta_desc"] = "";
        // line 5
        $context["meta_keyw"] = "";
        // line 8
        $context["red_14set_8_12"] = 0;
        // line 9
        $context["red_14set_13_17"] = 0;
        // line 10
        $context["por_21set_8_12"] = 0;
        // line 11
        $context["mat_21set_13_17"] = 0;
        // line 12
        $context["his_28set_8_12"] = 0;
        // line 13
        $context["fil_28set_13_17"] = 0;
        // line 14
        $context["geo_05out_8_12"] = 0;
        // line 15
        $context["bio_05out_13_17"] = 0;
        // line 16
        $context["qui_12out_8_12"] = 0;
        // line 17
        $context["fis_12out_13_17"] = 0;
        // line 18
        $context["atu_19out_8_11"] = 0;
        // line 19
        $context["ing_19out_12_1430"] = 0;
        // line 20
        $context["esp_19out_1530_18"] = 0;
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data_requested"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["inscricao"]) {
            // line 25
            if ($this->getAttribute($this->getAttribute($context["inscricao"], "data", array(), "any", false, true), "opcoes", array(), "any", true, true)) {
                // line 27
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["inscricao"], "data", array()), "opcoes", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["opcaoEscolhida"]) {
                    // line 28
                    if (($context["opcaoEscolhida"] == "red_14set_8-12")) {
                        $context["red_14set_8_12"] = (($context["red_14set_8_12"] ?? null) + 1);
                    } elseif ((                    // line 29
$context["opcaoEscolhida"] == "red_14set_13-17")) {
                        $context["red_14set_13_17"] = (($context["red_14set_13_17"] ?? null) + 1);
                    } elseif ((                    // line 30
$context["opcaoEscolhida"] == "por_21set_8-12")) {
                        $context["por_21set_8_12"] = (($context["por_21set_8_12"] ?? null) + 1);
                    } elseif ((                    // line 31
$context["opcaoEscolhida"] == "mat_21set_13-17")) {
                        $context["mat_21set_13_17"] = (($context["mat_21set_13_17"] ?? null) + 1);
                    } elseif ((                    // line 32
$context["opcaoEscolhida"] == "his_28set_8-12")) {
                        $context["his_28set_8_12"] = (($context["his_28set_8_12"] ?? null) + 1);
                    } elseif ((                    // line 33
$context["opcaoEscolhida"] == "fil_28set_13-17")) {
                        $context["fil_28set_13_17"] = (($context["fil_28set_13_17"] ?? null) + 1);
                    } elseif ((                    // line 34
$context["opcaoEscolhida"] == "geo_05out_8-12")) {
                        $context["geo_05out_8_12"] = (($context["geo_05out_8_12"] ?? null) + 1);
                    } elseif ((                    // line 35
$context["opcaoEscolhida"] == "bio_05out_13-17")) {
                        $context["bio_05out_13_17"] = (($context["bio_05out_13_17"] ?? null) + 1);
                    } elseif ((                    // line 36
$context["opcaoEscolhida"] == "qui_12out_8-12")) {
                        $context["qui_12out_8_12"] = (($context["qui_12out_8_12"] ?? null) + 1);
                    } elseif ((                    // line 37
$context["opcaoEscolhida"] == "fis_12out_13-17")) {
                        $context["fis_12out_13_17"] = (($context["fis_12out_13_17"] ?? null) + 1);
                    } elseif ((                    // line 38
$context["opcaoEscolhida"] == "atu_19out_8-11")) {
                        $context["atu_19out_8_11"] = (($context["atu_19out_8_11"] ?? null) + 1);
                    } elseif ((                    // line 39
$context["opcaoEscolhida"] == "ing_19out_12-1430")) {
                        $context["ing_19out_12_1430"] = (($context["ing_19out_12_1430"] ?? null) + 1);
                    } elseif ((                    // line 40
$context["opcaoEscolhida"] == "esp_19out_1530-18")) {
                        $context["esp_19out_1530_18"] = (($context["esp_19out_1530_18"] ?? null) + 1);
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opcaoEscolhida'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscricao'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        $context["opcoes"] = array(0 => array("id" => "red_14set_8-12", "data" => "14 de Setembro", "datacomp" => "2019-09-14", "materia" => "Redação", "horario" => "8h às 12h", "inscritos" =>         // line 49
($context["red_14set_8_12"] ?? null)), 1 => array("id" => "red_14set_13-17", "data" => "14 de Setembro", "datacomp" => "2019-09-14", "materia" => "Redação", "horario" => "13h às 17h", "inscritos" =>         // line 50
($context["red_14set_13_17"] ?? null)), 2 => array("id" => "por_21set_8-12", "data" => "21 de Setembro", "datacomp" => "2019-09-21", "materia" => "Português (Gramática e Literatura)", "horario" => "8h às 12h", "inscritos" =>         // line 51
($context["por_21set_8_12"] ?? null)), 3 => array("id" => "mat_21set_13-17", "data" => "21 de Setembro", "datacomp" => "2019-09-21", "materia" => "Matemática", "horario" => "13h às 17h", "inscritos" =>         // line 52
($context["mat_21set_13_17"] ?? null)), 4 => array("id" => "his_28set_8-12", "data" => "28 de Setembro", "datacomp" => "2019-09-28", "materia" => "História", "horario" => "8h às 12h", "inscritos" =>         // line 53
($context["his_28set_8_12"] ?? null)), 5 => array("id" => "fil_28set_13-17", "data" => "28 de Setembro", "datacomp" => "2019-09-28", "materia" => "Filosofia e Sociologia", "horario" => "13h às 17h", "inscritos" =>         // line 54
($context["fil_28set_13_17"] ?? null)), 6 => array("id" => "geo_05out_8-12", "data" => "05 de Outubro", "datacomp" => "2019-10-05", "materia" => "Geografia", "horario" => "8h às 12h", "inscritos" =>         // line 55
($context["geo_05out_8_12"] ?? null)), 7 => array("id" => "bio_05out_13-17", "data" => "05 de Outubro", "datacomp" => "2019-10-05", "materia" => "Biologia", "horario" => "13h às 17h", "inscritos" =>         // line 56
($context["bio_05out_13_17"] ?? null)), 8 => array("id" => "qui_12out_8-12", "data" => "12 de Outubro", "datacomp" => "2019-10-12", "materia" => "Química", "horario" => "8h às 12h", "inscritos" =>         // line 57
($context["qui_12out_8_12"] ?? null)), 9 => array("id" => "fis_12out_13-17", "data" => "12 de Outubro", "datacomp" => "2019-10-12", "materia" => "Física", "horario" => "13h às 17h", "inscritos" =>         // line 58
($context["fis_12out_13_17"] ?? null)), 10 => array("id" => "atu_19out_8-11", "data" => "19 de Outubro", "datacomp" => "2019-10-19", "materia" => "Atualidades", "horario" => "8h às 11h", "inscritos" =>         // line 59
($context["atu_19out_8_11"] ?? null), "congelar" => true), 11 => array("id" => "ing_19out_12-1430", "data" => "19 de Outubro", "datacomp" => "2019-10-19", "materia" => "Inglês", "horario" => "12h às 14h30", "inscritos" =>         // line 60
($context["ing_19out_12_1430"] ?? null), "congelar" => true), 12 => array("id" => "esp_19out_1530-18", "data" => "19 de Outubro", "datacomp" => "2019-10-19", "materia" => "Espanhol", "horario" => "15h30 às 18h", "inscritos" =>         // line 61
($context["esp_19out_1530_18"] ?? null), "congelar" => true));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 65
    public function block_body($context, array $blocks = array())
    {
        // line 66
        echo "

<div class=\"inscricao\">
    <div class=\"container pb-5\">
        <div class=\"row p-4\">
            <img class=\"logo mt-4 mb-4 ml-auto mr-auto d-block\" alt=\"FAM na Escola\" src=\"/assets/img/home-logo.png\" />
        </div>
        <!-- Form -->
        <form method=\"post\" action=\"/inscricao/revisacoenem\" class=\"js-form\">
            ";
        // line 75
        echo csrf_field();
        echo "
            <div class=\"row pb-5\">
                <div class=\"col-md-6\"><input required class=\"form-control\" type=\"text\" placeholder=\"Nome completo\" name=\"nome\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute(($context["datastore"] ?? null), "nome", array()), "html", null, true);
        echo "\" /></div>
                <div class=\"col-md-6\"><input required class=\"form-control\" type=\"text\" placeholder=\"CPF\" value=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute(($context["datastore"] ?? null), "cpf", array()), "html", null, true);
        echo "\" readonly /></div>
                <div class=\"col-md-6\"><input required class=\"form-control\" type=\"tel\" placeholder=\"Celular\" name=\"celular\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute(($context["datastore"] ?? null), "celular", array()), "html", null, true);
        echo "\" /></div>
                <div class=\"col-md-6\"><input required class=\"form-control\" type=\"email\" placeholder=\"E-mail\" name=\"email\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute(($context["datastore"] ?? null), "email", array()), "html", null, true);
        echo "\" /></div>
                
                <div class=\"col-md-6\">
                    <select size required class=\"form-control\" name=\"estado\">
\t\t\t\t\t\t<option selected disabled value=\"\">Selecione seu estado...</option>
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
                        <option value=\"MS\">Mato Grosso do Sul</option>
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
                        ";
        // line 112
        if ($this->getAttribute(($context["datastore"] ?? null), "estado", array())) {
            // line 113
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["datastore"] ?? null), "estado", array()), "html", null, true);
            echo "\" selected>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["datastore"] ?? null), "estado", array()), "html", null, true);
            echo "</option>
                        ";
        }
        // line 115
        echo "\t\t\t\t\t</select>
                </div>

                <div class=\"col-md-6\"><input required class=\"form-control\" type=\"text\" placeholder=\"Cidade\" name=\"cidade\" value=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute(($context["datastore"] ?? null), "cidade", array()), "html", null, true);
        echo "\" /></div>

                <div class=\"col-md-12\">
                    <p class=\"mt-4\">Selecione as matérias e horários que deseja participar</p>
                    ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["opcoes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["opcao"]) {
            // line 123
            echo "                        <div class=\"form-group form-check ";
            if ((($this->getAttribute($context["opcao"], "inscritos", array()) >= 500) || (twig_date_format_filter($this->env, "now", "Y-m-d") > twig_date_format_filter($this->env, $this->getAttribute($context["opcao"], "datacomp", array()), "Y-m-d")))) {
                echo "full";
            }
            echo "\">
                            ";
            // line 124
            if (((($this->getAttribute($context["opcao"], "inscritos", array()) < 500) && (twig_date_format_filter($this->env, "now", "Y-m-d") <= twig_date_format_filter($this->env, $this->getAttribute($context["opcao"], "datacomp", array()), "Y-m-d"))) &&  !$this->getAttribute($context["opcao"], "congelar", array(), "any", true, true))) {
                // line 125
                echo "                            <input type=\"checkbox\" class=\"form-check-input js-opcao\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["opcao"], "id", array()), "html", null, true);
                echo "\">
                            ";
            } else {
                // line 127
                echo "                            <span id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["opcao"], "id", array()), "html", null, true);
                echo "\"></span>
                            ";
            }
            // line 129
            echo "                            <label class=\"form-check-label\" for=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["opcao"], "id", array()), "html", null, true);
            echo "\"><b>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["opcao"], "materia", array()), "html", null, true);
            echo "</b> - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["opcao"], "data", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["opcao"], "horario", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["opcao"], "inscritos", array()), "html", null, true);
            echo " ";
            if (($this->getAttribute($context["opcao"], "inscritos", array()) >= 500)) {
                echo "<b>lotado</b>";
            }
            if ($this->getAttribute($context["opcao"], "congelar", array(), "any", true, true)) {
                echo " - (inscrições congeladas)";
            }
            echo "</label>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opcao'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "                </div>
                <input name=\"opcoesIniciais\" class=\"js-opcoes-iniciais\" value=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->getAttribute(($context["datastore"] ?? null), "opcoes", array()), "html", null, true);
        echo "\" type=\"hidden\" required>
                <input name=\"opcoes\" class=\"js-opcoes\" type=\"hidden\" required>
                
            </div>
            <input class=\"btn btn-primary enviar\" type=\"submit\" value=\"Inscrever-se\" />
        </form>
    </div>
</div>

";
    }

    // line 154
    public function block_script($context, array $blocks = array())
    {
        // line 155
        echo "<script>
    window.onload = function() {
        
        // Ao selecionar uma opção, deixar em destaque
        \$(\".form-check-input\").on(\"change\", function() {
            \$(this).parent(\".form-check\").toggleClass(\"checked\");
        });

        // Ao enviar o formulário
        \$(\".js-form\").on(\"submit\", function(e) {
            e.preventDefault();
            
            // Pegar as opções que selecionou
            let opcoes = [];
            \$(\".js-opcao\").each(function(i, e) {
                if (\$(e).is(':checked'))
                    opcoes.push(e.getAttribute(\"id\"));
            })
            // colocar em um campo como JSON
            \$(\".js-opcoes\").val(JSON.stringify(opcoes));

            // Agora sim enviar
            this.submit();
        });

        let opcoesIniciais = JSON.parse(\$(\".js-opcoes-iniciais\").val());
        opcoesIniciais.forEach( function(e, i) {
            \$(\"#\" + e + \".js-opcao\").attr(\"checked\", \"true\");
            \$(\"#\" + e).parent(\".form-check\").toggleClass(\"checked\");
            \$(\"#\" + e).parent(\".form-check\").removeClass(\"full\");
            \$(\"#\" + e).toggleClass(\"d-none\");
        })
    }
</script>

";
    }

    public function getTemplateName()
    {
        return "/var/www/app/landing-pages/revisacoenem/views//inscricao.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 155,  291 => 154,  277 => 133,  274 => 132,  249 => 129,  243 => 127,  237 => 125,  235 => 124,  228 => 123,  224 => 122,  217 => 118,  212 => 115,  204 => 113,  202 => 112,  167 => 80,  163 => 79,  159 => 78,  155 => 77,  150 => 75,  139 => 66,  136 => 65,  132 => 1,  130 => 61,  129 => 60,  128 => 59,  127 => 58,  126 => 57,  125 => 56,  124 => 55,  123 => 54,  122 => 53,  121 => 52,  120 => 51,  119 => 50,  118 => 49,  117 => 47,  104 => 40,  101 => 39,  98 => 38,  95 => 37,  92 => 36,  89 => 35,  86 => 34,  83 => 33,  80 => 32,  77 => 31,  74 => 30,  71 => 29,  68 => 28,  64 => 27,  62 => 25,  58 => 23,  56 => 20,  54 => 19,  52 => 18,  50 => 17,  48 => 16,  46 => 15,  44 => 14,  42 => 13,  40 => 12,  38 => 11,  36 => 10,  34 => 9,  32 => 8,  30 => 5,  28 => 4,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/landing-pages/revisacoenem/views//inscricao.twig", "");
    }
}

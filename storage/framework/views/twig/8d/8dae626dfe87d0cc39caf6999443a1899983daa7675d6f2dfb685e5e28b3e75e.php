<?php

/* /var/www/app/landing-pages/revisacoenem/views//obrigado.twig */
class __TwigTemplate_cf7e883fe2c656aa7c60f471033168c196cd49f752c3f2d8ca6d4f16a36e55ec extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LP::layout", "/var/www/app/landing-pages/revisacoenem/views//obrigado.twig", 1);
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
        $context["title"] = "Obrigado! — Revisaço ENEM";
        // line 4
        $context["meta_desc"] = "";
        // line 5
        $context["meta_keyw"] = "";
        // line 6
        $context["opcoes"] = array(0 => array("id" => "red_14set_8-12", "data" => "14 de Setembro", "materia" => "Redação", "horario" => "8h às 12h"), 1 => array("id" => "red_14set_13-17", "data" => "14 de Setembro", "materia" => "Redação", "horario" => "13h às 17h"), 2 => array("id" => "por_21set_8-12", "data" => "21 de Setembro", "materia" => "Português (Gramática e Literatura)", "horario" => "8h às 12h"), 3 => array("id" => "mat_21set_13-17", "data" => "21 de Setembro", "materia" => "Matemática", "horario" => "13h às 17h"), 4 => array("id" => "his_28set_8-12", "data" => "28 de Setembro", "materia" => "História", "horario" => "8h às 12h"), 5 => array("id" => "fil_28set_13-17", "data" => "28 de Setembro", "materia" => "Filosofia e Sociologia", "horario" => "13h às 17h"), 6 => array("id" => "geo_05out_8-12", "data" => "05 de Outubro", "materia" => "Geografia", "horario" => "8h às 12h"), 7 => array("id" => "bio_05out_13-17", "data" => "05 de Outubro", "materia" => "Biologia", "horario" => "13h às 17h"), 8 => array("id" => "qui_12out_8-12", "data" => "12 de Outubro", "materia" => "Química", "horario" => "8h às 12h"), 9 => array("id" => "fis_12out_13-17", "data" => "12 de Outubro", "materia" => "Física", "horario" => "13h às 17h"), 10 => array("id" => "atu_19out_8-11", "data" => "19 de Outubro", "materia" => "Atualidades", "horario" => "8h às 11h"), 11 => array("id" => "ing_19out_12-1430", "data" => "19 de Outubro", "materia" => "Inglês", "horario" => "12h às 14h30"), 12 => array("id" => "esp_19out_1530-18", "data" => "19 de Outubro", "materia" => "Espanhol", "horario" => "15h30 às 18h"));
        // line 23
        $context["materias"] = twig_split_filter($this->env, twig_replace_filter(twig_replace_filter(twig_replace_filter(twig_replace_filter($this->getAttribute(($context["datastore"] ?? null), "opcoes", array()), array("\"" => "")), array("[" => "")), array("]" => "")), array("\"" => "")), ",");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        // line 26
        echo "<div class=\"inscricao\">
    <div class=\"container pt-1\">
        <!-- Logo -->
        <img class=\"logo d-block mt-5 ml-auto mr-auto\" alt=\"Revisaço ENEM\" src=\"/assets/img/insc-logo.png\" />
        
        <!-- Chamada -->
        <div class=\"row chamada\">
            <div class=\"col-md-7 d-flex flex-column align-items-start justify-content-center\">
                <h2 class=\"chamada-title mb-4\">Sua inscrição foi recebida com sucesso!</h2>
                <p>Apresente o print dessa tela no dia da(s) aula(s) escolhida(s).</p>
                <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["datastore"] ?? null), "nome", array()), "html", null, true);
        echo ", estaremos entrando em contato em breve através do e-mail (";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["datastore"] ?? null), "email", array()), "html", null, true);
        if ($this->getAttribute(($context["datastore"] ?? null), "celular", array())) {
            echo ", ou pelo celular cadastrado (";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["datastore"] ?? null), "celular", array()), "html", null, true);
            echo ")";
        }
        echo ".</p>
                <p><b>CPF</b>: ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute(($context["datastore"] ?? null), "cpf", array()), "html", null, true);
        echo ".</p>
                <table class=\"table\" style=\"color: #fff\">
                    <tr>
                        <th>Matéria</th>
                        <th>Data</th>
                        <th>Horário</th>
                    </tr>
                    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["materias"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["materia"]) {
            // line 45
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["opcoes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["opcao"]) {
                // line 46
                echo "                            ";
                if (($context["materia"] == $this->getAttribute($context["opcao"], "id", array()))) {
                    // line 47
                    echo "                            <tr>
                                <td>";
                    // line 48
                    echo twig_escape_filter($this->env, $this->getAttribute($context["opcao"], "materia", array()), "html", null, true);
                    echo "</td>
                                <td>";
                    // line 49
                    echo twig_escape_filter($this->env, $this->getAttribute($context["opcao"], "data", array()), "html", null, true);
                    echo "</td>
                                <td>";
                    // line 50
                    echo twig_escape_filter($this->env, $this->getAttribute($context["opcao"], "horario", array()), "html", null, true);
                    echo "</td>
                            </tr>
                            ";
                }
                // line 53
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opcao'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['materia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                </table>
            </div>
            <div class=\"col-md-5 d-flex flex-column align-items-center justify-content-center\">
                <img class=\"img-fluid mt-0 mt-4\" alt=\"\" src=\"/assets/img/img-pessoa.png\" />
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12 d-flex flex-column align-items-center mt-3 mt-md-5\">
                <h3 class=\"chamada-title-h3 mb-5\">Confirme sua presença e compartilhe o evento no Facebook!</h3>
                <iframe src=\"https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fevents%2F2562631730464670%2Fpermalink%2F2562631763798000%2F&width=552&show_text=true&appId=2359985977568223&height=656&data-width=\" width=\"652\" data-width=\"\" height=\"556\" style=\"border:none;overflow:hidden;margin-left: auto; margin-right: auto\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\" id=\"evento\"></iframe>
            </div>
        </div>
        <div class=\"row\">
            <a href=\"https://fam.br\" class=\"btn enviar d-block w-auto pl-4 pr-4 ml-auto mr-auto mt-5 mb-5\" rel=\"noopener\">Visitar o site da FAM</a>
        </div>
    </div>
</div>
";
    }

    // line 74
    public function block_script($context, array $blocks = array())
    {
        // line 75
        echo "    <script>
        if (window.innerWidth < 680) {
            document.getElementById(\"evento\").src = \"https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fevents%2F2562631730464670%2Fpermalink%2F2562631763798000%2F&width=350&show_text=true&appId=2359985977568223&height=450\";
            document.getElementById(\"evento\").style.width = \"350px\";
            document.getElementById(\"evento\").style.height = \"450px\";
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "/var/www/app/landing-pages/revisacoenem/views//obrigado.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 75,  138 => 74,  117 => 55,  111 => 54,  105 => 53,  99 => 50,  95 => 49,  91 => 48,  88 => 47,  85 => 46,  80 => 45,  76 => 44,  66 => 37,  55 => 36,  43 => 26,  40 => 25,  36 => 1,  34 => 23,  32 => 6,  30 => 5,  28 => 4,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/landing-pages/revisacoenem/views//obrigado.twig", "");
    }
}

<?php

/* /var/www/app/ambiente_conversao/tecfam2020.1/views//acompanhar-inscricao.twig */
class __TwigTemplate_99b87305198f705d313f3d6c98c4ed005f32df9a79dcd1de65cb0e7c84a0e032 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AmbienteConversao::layout.twig", "/var/www/app/ambiente_conversao/tecfam2020.1/views//acompanhar-inscricao.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AmbienteConversao::layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["page_id"] = "page-acompanhar-inscricao";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<main class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"row-header col-md-12\">
\t\t\t<h1>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "nome", array()), "html", null, true);
        echo "</h1>
\t\t</div>
\t\t<div class=\"row-header-cursos col-md-12\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 fit-height\">
\t\t\t\t\t<div class=\"opcao-curso principal fit ";
        // line 14
        if ($this->getAttribute(($context["lead"] ?? null), "isMatriculado", array(0 => $this->getAttribute(($context["opcoes_curso"] ?? null), 0, array(), "array")), "method")) {
            echo "matriculado";
        }
        echo "\">
\t\t\t\t\t\t<h2>Primeira Opção de Curso</h2>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["opcoes_curso"] ?? null), 0, array(), "array"), "nome", array()), "html", null, true);
        echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
                <div class=\"d-none d-md-block offset-md-4 col-md-4 fit-height\">
                    <img src=\"/assets/images/titulo.png\" class=\"mt-4 mb-4 d-block mx-auto\" alt=\"Curso Técnico é FAM.\"/>
                </div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"content\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<h2>Detalhes da Inscrição</h2>
\t\t\t\t\t<p>
\t\t\t\t\t\t<strong>Data da matrícula:</strong><br />
\t\t\t\t\t\t";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('App\TwigExtended')->dia_semana(twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["prova"] ?? null), "data", array()), "hora", array()), "w")), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["prova"] ?? null), "data", array()), "hora", array()), "d/m/Y"), "html", null, true);
        echo "
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\t\t<strong>Horário:</strong><br />
\t\t\t\t\t\tDas 13h às 21h de segunda à sexta ou das 08h30 às 11h aos sábados.
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\t\t<strong>Local da matrícula:</strong><br />
\t\t\t\t\t\t";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["prova"] ?? null), "local", array()), "local", array()), "html", null, true);
        echo "<br />";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["prova"] ?? null), "local", array()), "endereco", array()), "html", null, true);
        echo "
\t\t\t\t\t</p>

\t\t\t\t\t<p>
\t\t\t\t\t\tPara alterações de dados cadastrais, datas ou locais de prova, entre em contato com nossa Central de Atendimento.
\t\t\t\t\t</p>

\t\t\t\t\t";
        // line 48
        echo "\t\t\t\t\t";
        if ($this->getAttribute(($context["prova"] ?? null), "status_id", array())) {
            // line 49
            echo "\t\t\t\t\t\t<h3>Resultados da Prova</h3>

\t\t\t\t\t\t<p>
\t\t\t\t\t\t";
            // line 52
            if (($this->getAttribute(($context["prova"] ?? null), "status_id", array()) == 1)) {
                // line 53
                echo "\t\t\t\t\t\t\t";
                // line 54
                echo "\t\t\t\t\t\t\tNo momento estamos processando os resultados de sua prova!<br />
\t\t\t\t\t\t\tVolte mais tarde para conferir o resultado!
\t\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 56
($context["prova"] ?? null), "status_id", array()) == 2)) {
                // line 57
                echo "\t\t\t\t\t\t\t";
                // line 58
                echo "\t\t\t\t\t\t\tParece que você não compareceu no dia da prova!<br />
\t\t\t\t\t\t\tVocê pode reagendar sua prova abaixo ou entrando em contato via chat, telefone ou WhatsApp!
\t\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 60
($context["prova"] ?? null), "status_id", array()) == 3)) {
                // line 61
                echo "\t\t\t\t\t\t\t";
                // line 62
                echo "\t\t\t\t\t\t\t<strong>Resultado:</strong>
\t\t\t\t\t\t\t";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute(($context["prova"] ?? null), "status", array()), "html", null, true);
                echo "<br />
\t\t\t\t\t\t\tHey, você merece uma segunda chance! A Faculdade de Americana oferece uma nova oportunidade para você alcançar o topo.<br />
\t\t\t\t\t\t\tBasta realizar o reagendamento online ou entrar em contato via chat, telefone ou WhatsApp e agendar uma nova prova!<br />
\t\t\t\t\t\t\tEstamos te esperando!
\t\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 67
($context["prova"] ?? null), "status_id", array()) == 4)) {
                // line 68
                echo "\t\t\t\t\t\t\t";
                // line 69
                echo "\t\t\t\t\t\t\t<strong>Resultado:</strong>
\t\t\t\t\t\t\t";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute(($context["prova"] ?? null), "status", array()), "html", null, true);
                echo "<br />
\t\t\t\t\t\t\t<strong>Nota:</strong>
\t\t\t\t\t\t\t";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute(($context["prova"] ?? null), "nota", array()), "html", null, true);
                echo "<br />
\t\t\t\t\t\t\tParabéns! Seu caminho rumo ao topo já começou!<br />
\t\t\t\t\t\t";
                // line 74
                if ($this->getAttribute(($context["lead"] ?? null), "isMatriculado", array(), "method")) {
                    // line 75
                    echo "\t\t\t\t\t\t";
                    if (($this->getAttribute(($context["lead"] ?? null), "status_id", array()) == "MATR")) {
                        // line 76
                        echo "\t\t\t\t\t\t\t";
                        // line 77
                        echo "\t\t\t\t\t\t\tEstaremos te esperando no início das aulas. Seja bem-vindo!
\t\t\t\t\t\t";
                    } else {
                        // line 79
                        echo "\t\t\t\t\t\t\t";
                        // line 80
                        echo "\t\t\t\t\t\t\tRealize o pagamento da sua matrícula e aguarde o início das aulas. Seja bem-vindo!
\t\t\t\t\t\t";
                    }
                    // line 82
                    echo "\t\t\t\t\t\t";
                } else {
                    // line 83
                    echo "\t\t\t\t\t\t\t";
                    // line 84
                    echo "\t\t\t\t\t\t\tVenha até a FAM e faça agora a sua matrícula!<br />
\t\t\t\t\t\t\tEstamos te esperando!
\t\t\t\t\t\t";
                }
                // line 87
                echo "\t\t\t\t\t\t";
            }
            // line 88
            echo "
\t\t\t\t\t\t";
            // line 90
            echo "\t\t\t\t\t\t";
            if ((($this->getAttribute(($context["prova"] ?? null), "status_id", array()) == 2) || ($this->getAttribute(($context["prova"] ?? null), "status_id", array()) == 3))) {
                // line 91
                echo "\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<form action=\"/inscricao/reagendar\" method=\"post\">
\t\t\t\t\t\t\t\t";
                // line 93
                echo csrf_field();
                echo "
\t\t\t\t\t\t\t\t<strong>REAGENDAMENTO ONLINE</strong><br>
\t\t\t\t\t\t\t\t<p>Para reagendar sua prova ou entrega de documentação, por favor, utilize o campo abaixo.</p>
\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"data\" required>
\t\t\t\t\t\t\t\t\t<option value=\"\">Escolha uma nova data para seu reagendamento:</option>
\t\t\t\t\t\t\t\t";
                // line 98
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["locais_prova"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["local"]) {
                    // line 99
                    echo "\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["local"], "datas_provas_disponiveis", array())) {
                        // line 100
                        echo "\t\t\t\t\t\t\t\t\t<optgroup label=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "local", array()), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t";
                        // line 101
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["local"], "datas_provas_disponiveis", array()), "splice", array(0 => 0, 1 => 10), "method"));
                        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                            // line 102
                            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "hora", array()), "d/m/Y"), "html", null, true);
                            echo " - ";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "hora", array()), "H:i"), "html", null, true);
                            echo " - ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('App\TwigExtended')->dia_semana(twig_date_format_filter($this->env, $this->getAttribute($context["data"], "hora", array()), "w")), "html", null, true);
                            echo "</option>
\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 104
                        echo "\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t";
                    }
                    // line 106
                    echo "\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['local'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn\" value=\"Confirmar Reagendamento\" />
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t";
            }
            // line 112
            echo "\t\t\t\t\t\t</p>
\t\t\t\t\t";
        }
        // line 114
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
    <img src=\"/assets/images/titulo.png\" class=\"d-block d-md-none mt-4 mb-4\" alt=\"Curso Técnico é FAM.\"/>
</main>
";
    }

    // line 122
    public function block_scripts($context, array $blocks = array())
    {
        // line 123
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/app/ambiente_conversao/tecfam2020.1/views//acompanhar-inscricao.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 123,  264 => 122,  254 => 114,  250 => 112,  243 => 107,  237 => 106,  233 => 104,  218 => 102,  214 => 101,  209 => 100,  206 => 99,  202 => 98,  194 => 93,  190 => 91,  187 => 90,  184 => 88,  181 => 87,  176 => 84,  174 => 83,  171 => 82,  167 => 80,  165 => 79,  161 => 77,  159 => 76,  156 => 75,  154 => 74,  149 => 72,  144 => 70,  141 => 69,  139 => 68,  137 => 67,  130 => 63,  127 => 62,  125 => 61,  123 => 60,  119 => 58,  117 => 57,  115 => 56,  111 => 54,  109 => 53,  107 => 52,  102 => 49,  99 => 48,  87 => 40,  74 => 32,  56 => 17,  48 => 14,  40 => 9,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/ambiente_conversao/tecfam2020.1/views//acompanhar-inscricao.twig", "");
    }
}

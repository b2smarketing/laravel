<?php

/* /var/www/app/ambiente_conversao/tecfam2019.2/views//acompanhar-inscricao.twig */
class __TwigTemplate_e2480de8383ffbe26122be4d46367eee7995d58ce19b555552262365876958f2 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AmbienteConversao::layout.twig", "/var/www/app/ambiente_conversao/tecfam2019.2/views//acompanhar-inscricao.twig", 1);
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
\t\t\t</div>
\t\t</div>
\t\t<div class=\"content\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<h2>Detalhes da Inscrição</h2>
\t\t\t\t\t<p>
\t\t\t\t\t\t<strong>Data da matrícula:</strong><br />
\t\t\t\t\t\t";
        // line 29
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
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["prova"] ?? null), "local", array()), "local", array()), "html", null, true);
        echo "<br />";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["prova"] ?? null), "local", array()), "endereco", array()), "html", null, true);
        echo "
\t\t\t\t\t</p>

\t\t\t\t\t<p>
\t\t\t\t\t\tPara alterações de dados cadastrais, datas ou locais de prova, entre em contato com nossa Central de Atendimento.
\t\t\t\t\t</p>

\t\t\t\t\t";
        // line 45
        echo "\t\t\t\t\t";
        if ($this->getAttribute(($context["prova"] ?? null), "status_id", array())) {
            // line 46
            echo "\t\t\t\t\t\t<h3>Resultados da Prova</h3>

\t\t\t\t\t\t<p>
\t\t\t\t\t\t";
            // line 49
            if (($this->getAttribute(($context["prova"] ?? null), "status_id", array()) == 1)) {
                // line 50
                echo "\t\t\t\t\t\t\t";
                // line 51
                echo "\t\t\t\t\t\t\tNo momento estamos processando os resultados de sua prova!<br />
\t\t\t\t\t\t\tVolte mais tarde para conferir o resultado!
\t\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 53
($context["prova"] ?? null), "status_id", array()) == 2)) {
                // line 54
                echo "\t\t\t\t\t\t\t";
                // line 55
                echo "\t\t\t\t\t\t\tParece que você não compareceu no dia da prova!<br />
\t\t\t\t\t\t\tVocê pode reagendar sua prova abaixo ou entrando em contato via chat, telefone ou WhatsApp!
\t\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 57
($context["prova"] ?? null), "status_id", array()) == 3)) {
                // line 58
                echo "\t\t\t\t\t\t\t";
                // line 59
                echo "\t\t\t\t\t\t\t<strong>Resultado:</strong>
\t\t\t\t\t\t\t";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute(($context["prova"] ?? null), "status", array()), "html", null, true);
                echo "<br />
\t\t\t\t\t\t\tHey, você merece uma segunda chance! A Faculdade de Americana oferece uma nova oportunidade para você alcançar o topo.<br />
\t\t\t\t\t\t\tBasta realizar o reagendamento online ou entrar em contato via chat, telefone ou WhatsApp e agendar uma nova prova!<br />
\t\t\t\t\t\t\tEstamos te esperando!
\t\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 64
($context["prova"] ?? null), "status_id", array()) == 4)) {
                // line 65
                echo "\t\t\t\t\t\t\t";
                // line 66
                echo "\t\t\t\t\t\t\t<strong>Resultado:</strong>
\t\t\t\t\t\t\t";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute(($context["prova"] ?? null), "status", array()), "html", null, true);
                echo "<br />
\t\t\t\t\t\t\t<strong>Nota:</strong>
\t\t\t\t\t\t\t";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute(($context["prova"] ?? null), "nota", array()), "html", null, true);
                echo "<br />
\t\t\t\t\t\t\tParabéns! Seu caminho rumo ao topo já começou!<br />
\t\t\t\t\t\t";
                // line 71
                if ($this->getAttribute(($context["lead"] ?? null), "isMatriculado", array(), "method")) {
                    // line 72
                    echo "\t\t\t\t\t\t";
                    if (($this->getAttribute(($context["lead"] ?? null), "status_id", array()) == "MATR")) {
                        // line 73
                        echo "\t\t\t\t\t\t\t";
                        // line 74
                        echo "\t\t\t\t\t\t\tEstaremos te esperando no início das aulas. Seja bem-vindo!
\t\t\t\t\t\t";
                    } else {
                        // line 76
                        echo "\t\t\t\t\t\t\t";
                        // line 77
                        echo "\t\t\t\t\t\t\tRealize o pagamento da sua matrícula e aguarde o início das aulas. Seja bem-vindo!
\t\t\t\t\t\t";
                    }
                    // line 79
                    echo "\t\t\t\t\t\t";
                } else {
                    // line 80
                    echo "\t\t\t\t\t\t\t";
                    // line 81
                    echo "\t\t\t\t\t\t\tVenha até a FAM e faça agora a sua matrícula!<br />
\t\t\t\t\t\t\tEstamos te esperando!
\t\t\t\t\t\t";
                }
                // line 84
                echo "\t\t\t\t\t\t";
            }
            // line 85
            echo "
\t\t\t\t\t\t";
            // line 87
            echo "\t\t\t\t\t\t";
            if ((($this->getAttribute(($context["prova"] ?? null), "status_id", array()) == 2) || ($this->getAttribute(($context["prova"] ?? null), "status_id", array()) == 3))) {
                // line 88
                echo "\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<form action=\"/inscricao/reagendar\" method=\"post\">
\t\t\t\t\t\t\t\t";
                // line 90
                echo csrf_field();
                echo "
\t\t\t\t\t\t\t\t<strong>REAGENDAMENTO ONLINE</strong><br>
\t\t\t\t\t\t\t\t<p>Para reagendar sua prova ou entrega de documentação, por favor, utilize o campo abaixo.</p>
\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"data\">
\t\t\t\t\t\t\t\t\t<option value=\"\">Escolha uma nova data para seu reagendamento:</option>
\t\t\t\t\t\t\t\t";
                // line 95
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["locais_prova"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["local"]) {
                    // line 96
                    echo "\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["local"], "datas_provas_disponiveis", array())) {
                        // line 97
                        echo "\t\t\t\t\t\t\t\t\t<optgroup label=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "local", array()), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t";
                        // line 98
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["local"], "datas_provas_disponiveis", array()), "splice", array(0 => 0, 1 => 10), "method"));
                        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                            // line 99
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
                        // line 101
                        echo "\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t";
                    }
                    // line 103
                    echo "\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['local'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 104
                echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn\" value=\"Confirmar Reagendamento\" />
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t";
            }
            // line 109
            echo "\t\t\t\t\t\t</p>
\t\t\t\t\t";
        }
        // line 111
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</main>
";
    }

    // line 118
    public function block_scripts($context, array $blocks = array())
    {
        // line 119
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/app/ambiente_conversao/tecfam2019.2/views//acompanhar-inscricao.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 119,  260 => 118,  251 => 111,  247 => 109,  240 => 104,  234 => 103,  230 => 101,  215 => 99,  211 => 98,  206 => 97,  203 => 96,  199 => 95,  191 => 90,  187 => 88,  184 => 87,  181 => 85,  178 => 84,  173 => 81,  171 => 80,  168 => 79,  164 => 77,  162 => 76,  158 => 74,  156 => 73,  153 => 72,  151 => 71,  146 => 69,  141 => 67,  138 => 66,  136 => 65,  134 => 64,  127 => 60,  124 => 59,  122 => 58,  120 => 57,  116 => 55,  114 => 54,  112 => 53,  108 => 51,  106 => 50,  104 => 49,  99 => 46,  96 => 45,  84 => 37,  71 => 29,  56 => 17,  48 => 14,  40 => 9,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/ambiente_conversao/tecfam2019.2/views//acompanhar-inscricao.twig", "");
    }
}

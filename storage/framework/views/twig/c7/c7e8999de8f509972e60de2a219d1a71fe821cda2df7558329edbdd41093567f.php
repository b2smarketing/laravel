<?php

/* /var/www/app/ambiente_conversao/vestibularfam2019.2-2.5/views//acompanhar-inscricao.twig */
class __TwigTemplate_5d1a036cef08aa957098d87d76168b3ad103400b84bad849747a712ebf72b196 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AmbienteConversao::layout.twig", "/var/www/app/ambiente_conversao/vestibularfam2019.2-2.5/views//acompanhar-inscricao.twig", 1);
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
\t\t\t\t<div class=\"col-md-4 fit-height\">
\t\t\t\t\t<div class=\"opcao-curso fit ";
        // line 22
        if ($this->getAttribute(($context["lead"] ?? null), "isMatriculado", array(0 => $this->getAttribute(($context["opcoes_curso"] ?? null), 1, array(), "array")), "method")) {
            echo "matriculado";
        }
        echo "\">
\t\t\t\t\t\t<h2>Segunda Opção de Curso</h2>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["opcoes_curso"] ?? null), 1, array(), "array"), "nome", array()), "html", null, true);
        echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 fit-height\">
\t\t\t\t\t<div class=\"opcao-curso fit ";
        // line 30
        if ($this->getAttribute(($context["lead"] ?? null), "isMatriculado", array(0 => $this->getAttribute(($context["opcoes_curso"] ?? null), 2, array(), "array")), "method")) {
            echo "matriculado";
        }
        echo "\">
\t\t\t\t\t\t<h2>Terceira Opção de Curso</h2>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["opcoes_curso"] ?? null), 2, array(), "array"), "nome", array()), "html", null, true);
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
\t\t\t\t";
        // line 43
        if (($this->getAttribute(($context["dados_adicionais"] ?? null), "usar_enem", array()) == "sim")) {
            // line 44
            echo "\t\t\t\t\t<p>
\t\t\t\t\t\t<strong>Data entrega da documenta&ccedil;&atilde;o:</strong><br />
\t\t\t\t\t\t";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["prova"] ?? null), "data", array()), "hora", array()), "d/m/Y"), "html", null, true);
            echo "
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\t\t<strong>Hor&aacute;rio:</strong><br />
\t\t\t\t\t\t";
            // line 50
            if ((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["prova"] ?? null), "data", array()), "hora", array()), "H") < 12)) {
                echo "das 08:30 &agrave;s 11:30";
            } else {
                echo "das 9:00 &agrave;s 21:00";
            }
            // line 51
            echo "\t\t\t\t\t\t</p>
\t\t\t\t\t<p>N&atilde;o se esque&ccedil;a de trazer sua nota do ENEM v&aacute;lida.</p>
\t\t\t\t";
        } else {
            // line 54
            echo "\t\t\t\t\t<p>
\t\t\t\t\t\t<strong>Data da prova:</strong><br />
\t\t\t\t\t\t";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('App\TwigExtended')->dia_semana(twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["prova"] ?? null), "data", array()), "hora", array()), "w")), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["prova"] ?? null), "data", array()), "hora", array()), "d/m/Y"), "html", null, true);
            echo "
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\t\t<strong>Hora da prova:</strong><br />
\t\t\t\t\t\t";
            // line 60
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["prova"] ?? null), "data", array()), "hora", array()), "H:i"), "html", null, true);
            echo "
\t\t\t\t\t</p>
\t\t\t\t";
        }
        // line 63
        echo "\t\t\t\t\t<p>
\t\t\t\t\t\t<strong>Local da prova:</strong><br />
\t\t\t\t\t\t";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["prova"] ?? null), "local", array()), "local", array()), "html", null, true);
        echo "<br />";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["prova"] ?? null), "local", array()), "endereco", array()), "html", null, true);
        echo "
\t\t\t\t\t</p>

\t\t\t\t\t<p>
\t\t\t\t\t\tPara alterações de dados cadastrais, datas ou locais de prova, entre em contato com nossa Central de Atendimento.
\t\t\t\t\t</p>

\t\t\t\t\t";
        // line 73
        echo "\t\t\t\t\t";
        if ($this->getAttribute(($context["prova"] ?? null), "status_id", array())) {
            // line 74
            echo "\t\t\t\t\t\t<h3>Resultados da Prova</h3>

\t\t\t\t\t\t<p>
\t\t\t\t\t\t";
            // line 77
            if (($this->getAttribute(($context["prova"] ?? null), "status_id", array()) == 1)) {
                // line 78
                echo "\t\t\t\t\t\t\t";
                // line 79
                echo "\t\t\t\t\t\t\tNo momento estamos processando os resultados de sua prova!<br />
\t\t\t\t\t\t\tVolte mais tarde para conferir o resultado!
\t\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 81
($context["prova"] ?? null), "status_id", array()) == 2)) {
                // line 82
                echo "\t\t\t\t\t\t\t";
                // line 83
                echo "\t\t\t\t\t\t\tParece que você não compareceu no dia da prova!<br />
\t\t\t\t\t\t\tVocê pode reagendar sua prova entrando em contato via chat, telefone ou WhatsApp!
\t\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 85
($context["prova"] ?? null), "status_id", array()) == 3)) {
                // line 86
                echo "\t\t\t\t\t\t\t";
                // line 87
                echo "\t\t\t\t\t\t\t<strong>Resultado:</strong>
\t\t\t\t\t\t\t";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute(($context["prova"] ?? null), "status", array()), "html", null, true);
                echo "<br />
\t\t\t\t\t\t\tHey, você merece uma segunda chance! A Faculdade de Americana oferece uma nova oportunidade para você alcançar o topo.<br />
\t\t\t\t\t\t\tBasta entrar em contato via chat, telefone ou WhatsApp e agendar uma nova prova!<br />
\t\t\t\t\t\t\tEstamos te esperando!
\t\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 92
($context["prova"] ?? null), "status_id", array()) == 4)) {
                // line 93
                echo "\t\t\t\t\t\t\t";
                // line 94
                echo "\t\t\t\t\t\t\t<strong>Resultado:</strong>
\t\t\t\t\t\t\t";
                // line 95
                echo twig_escape_filter($this->env, $this->getAttribute(($context["prova"] ?? null), "status", array()), "html", null, true);
                echo "<br />
\t\t\t\t\t\t\t<strong>Nota:</strong>
\t\t\t\t\t\t\t";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute(($context["prova"] ?? null), "nota", array()), "html", null, true);
                echo "<br />
\t\t\t\t\t\t\tParabéns! Seu caminho rumo ao topo já começou!<br />
\t\t\t\t\t\t";
                // line 99
                if ($this->getAttribute(($context["lead"] ?? null), "isMatriculado", array(), "method")) {
                    // line 100
                    echo "\t\t\t\t\t\t";
                    if (($this->getAttribute(($context["lead"] ?? null), "status_id", array()) == "MATR")) {
                        // line 101
                        echo "\t\t\t\t\t\t\t";
                        // line 102
                        echo "\t\t\t\t\t\t\tEstaremos te esperando no início das aulas. Seja bem-vindo!
\t\t\t\t\t\t";
                    } else {
                        // line 104
                        echo "\t\t\t\t\t\t\t";
                        // line 105
                        echo "\t\t\t\t\t\t\tRealize o pagamento da sua matrícula e aguarde o início das aulas. Seja bem-vindo!
\t\t\t\t\t\t";
                    }
                    // line 107
                    echo "\t\t\t\t\t\t";
                } else {
                    // line 108
                    echo "\t\t\t\t\t\t\t";
                    // line 109
                    echo "\t\t\t\t\t\t\tVenha até a FAM e faça agora a sua matrícula!<br />
\t\t\t\t\t\t\tEstamos te esperando!
\t\t\t\t\t\t";
                }
                // line 112
                echo "\t\t\t\t\t\t";
            }
            // line 113
            echo "\t\t\t\t\t\t</p>
\t\t\t\t\t";
        }
        // line 115
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
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
        return "/var/www/app/ambiente_conversao/vestibularfam2019.2-2.5/views//acompanhar-inscricao.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 123,  258 => 122,  249 => 115,  245 => 113,  242 => 112,  237 => 109,  235 => 108,  232 => 107,  228 => 105,  226 => 104,  222 => 102,  220 => 101,  217 => 100,  215 => 99,  210 => 97,  205 => 95,  202 => 94,  200 => 93,  198 => 92,  191 => 88,  188 => 87,  186 => 86,  184 => 85,  180 => 83,  178 => 82,  176 => 81,  172 => 79,  170 => 78,  168 => 77,  163 => 74,  160 => 73,  148 => 65,  144 => 63,  138 => 60,  129 => 56,  125 => 54,  120 => 51,  114 => 50,  107 => 46,  103 => 44,  101 => 43,  88 => 33,  80 => 30,  72 => 25,  64 => 22,  56 => 17,  48 => 14,  40 => 9,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/ambiente_conversao/vestibularfam2019.2-2.5/views//acompanhar-inscricao.twig", "");
    }
}

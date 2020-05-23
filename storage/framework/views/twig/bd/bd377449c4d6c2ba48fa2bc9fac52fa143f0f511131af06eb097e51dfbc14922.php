<?php

/* /var/www/app/ambiente_conversao/fam-ead-2020.2/views//finaliza.twig */
class __TwigTemplate_66cc86265f7400f250bf3bd63b98b031c73d621069c90527e05e26cdcd42b076 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AmbienteConversao::layout.twig", "/var/www/app/ambiente_conversao/fam-ead-2020.2/views//finaliza.twig", 1);
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
        $context["page_id"] = "page-finalizar-inscricao";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<main class=\"container finaliza\">
\t<div class=\"row\">
\t\t<div class=\"row-header offset-md-1 col-md-7\">
\t\t\t<h1>Parabéns<br/><span>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "primeiro_nome", array()), "html", null, true);
        echo "!</span></h1>
            <p>seu pedido de inscrição foi realizado com sucesso!</p>
\t\t</div>
\t\t<div class=\"row-header-cursos offset-md-1 col-md-7\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 fit-height\">
\t\t\t\t\t<div class=\"opcao-curso principal fit ";
        // line 15
        if ($this->getAttribute(($context["lead"] ?? null), "isMatriculado", array(0 => $this->getAttribute(($context["opcoes_curso"] ?? null), 0, array(), "array")), "method")) {
            echo "matriculado";
        }
        echo "\">
\t\t\t\t\t\t<h2>Primeira Opção de Curso</h2>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["opcoes_curso"] ?? null), 0, array(), "array"), "nome", array()), "html", null, true);
        echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 fit-height\">
\t\t\t\t\t<div class=\"opcao-curso fit ";
        // line 23
        if ($this->getAttribute(($context["lead"] ?? null), "isMatriculado", array(0 => $this->getAttribute(($context["opcoes_curso"] ?? null), 1, array(), "array")), "method")) {
            echo "matriculado";
        }
        echo "\">
\t\t\t\t\t\t<h2>Segunda Opção de Curso</h2>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["opcoes_curso"] ?? null), 1, array(), "array"), "nome", array()), "html", null, true);
        echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 fit-height\">
\t\t\t\t\t<div class=\"opcao-curso fit ";
        // line 31
        if ($this->getAttribute(($context["lead"] ?? null), "isMatriculado", array(0 => $this->getAttribute(($context["opcoes_curso"] ?? null), 2, array(), "array")), "method")) {
            echo "matriculado";
        }
        echo "\">
\t\t\t\t\t\t<h2>Terceira Opção de Curso</h2>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["opcoes_curso"] ?? null), 2, array(), "array"), "nome", array()), "html", null, true);
        echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"content offset-md-1 col-md-7\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<h2>Detalhes da Inscrição</h2>
\t\t\t\t\t<p><strong>Enviamos um e-mail com mais detalhes sobre sua inscrição.</strong></p>
\t\t\t\t";
        // line 45
        if (($this->getAttribute(($context["dados_adicionais"] ?? null), "usar_enem", array()) == "sim")) {
            // line 46
            echo "\t\t\t\t\t<p>
\t\t\t\t\t\t<strong>Data entrega da documentação:</strong><br />
\t\t\t\t\t\t";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["prova"] ?? null), "data", array()), "hora", array()), "d/m/Y"), "html", null, true);
            echo "
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\t\t<strong>Horário:</strong><br />
\t\t\t\t\t\t";
            // line 52
            if ((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["prova"] ?? null), "data", array()), "hora", array()), "H") < 12)) {
                echo "das 08:30 às 11:30";
            } else {
                echo "das 9:00 às 21:00";
            }
            // line 53
            echo "\t\t\t\t\t\t</p>
\t\t\t\t\t<p>Não se esqueça de trazer sua nota do ENEM válida.</p>
\t\t\t\t";
        } else {
            // line 56
            echo "\t\t\t\t\t<p>
\t\t\t\t\t\t<strong>Data da prova:</strong><br />
\t\t\t\t\t\t";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('App\TwigExtended')->dia_semana(twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["prova"] ?? null), "data", array()), "hora", array()), "w")), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["prova"] ?? null), "data", array()), "hora", array()), "d/m/Y"), "html", null, true);
            echo "
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\t\t<strong>Hora da prova:</strong><br />
\t\t\t\t\t\t";
            // line 62
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["prova"] ?? null), "data", array()), "hora", array()), "H:i"), "html", null, true);
            if ($this->getAttribute($this->getAttribute(($context["prova"] ?? null), "data", array()), "hora_final", array())) {
                echo " às ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["prova"] ?? null), "data", array()), "hora_final", array()), "H:i"), "html", null, true);
            }
            // line 63
            echo "\t\t\t\t\t</p>
\t\t\t\t";
        }
        // line 65
        echo "\t\t\t\t\t<p>
\t\t\t\t\t\t<strong>Local da prova:</strong><br />
\t\t\t\t\t\t";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["prova"] ?? null), "local", array()), "local", array()), "html", null, true);
        echo "<br />";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["prova"] ?? null), "local", array()), "endereco", array()), "html", null, true);
        echo "
\t\t\t\t\t</p>

\t\t\t\t\t<p class=\"accent\"><strong>Esperamos por você!</strong></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
    <img src=\"/assets/images/home-campanha-logo.png\" class=\"d-block d-md-none mt-4 apoio\" alt=\"Faculdade é FAM\"/>
</main>
";
    }

    // line 79
    public function block_scripts($context, array $blocks = array())
    {
        // line 80
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/app/ambiente_conversao/fam-ead-2020.2/views//finaliza.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 80,  171 => 79,  154 => 67,  150 => 65,  146 => 63,  140 => 62,  131 => 58,  127 => 56,  122 => 53,  116 => 52,  109 => 48,  105 => 46,  103 => 45,  89 => 34,  81 => 31,  73 => 26,  65 => 23,  57 => 18,  49 => 15,  40 => 9,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/ambiente_conversao/fam-ead-2020.2/views//finaliza.twig", "");
    }
}

<?php

/* /var/www/app/ambiente_conversao/vestibularfam2020.1/views//finaliza.twig */
class __TwigTemplate_689b0346c75493848e517b9a2a01c9697426814a518ff040fe33153dbd58a046 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AmbienteConversao::layout.twig", "/var/www/app/ambiente_conversao/vestibularfam2020.1/views//finaliza.twig", 1);
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
        echo "<div id=\"pagefinaliza\">
<main class=\"container\">
\t<div class=\"row finalizado\">
\t\t<div class=\"row-header offset-md-1 col-md-7\">
\t\t\t<h1>Parabéns<br/><span>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "primeiro_nome", array()), "html", null, true);
        echo "!</span></h1>
            <p>seu pedido de inscrição foi realizado com sucesso!</p>
\t\t</div>
\t\t<div class=\"row-header-cursos offset-md-1 col-md-7\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 fit-height\">
\t\t\t\t\t<div class=\"opcao-curso principal fit ";
        // line 16
        if ($this->getAttribute(($context["lead"] ?? null), "isMatriculado", array(0 => $this->getAttribute(($context["opcoes_curso"] ?? null), 0, array(), "array")), "method")) {
            echo "matriculado";
        }
        echo "\">
\t\t\t\t\t\t<h2>Primeira Opção de Curso</h2>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["opcoes_curso"] ?? null), 0, array(), "array"), "nome", array()), "html", null, true);
        echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 fit-height\">
\t\t\t\t\t<div class=\"opcao-curso fit ";
        // line 24
        if ($this->getAttribute(($context["lead"] ?? null), "isMatriculado", array(0 => $this->getAttribute(($context["opcoes_curso"] ?? null), 1, array(), "array")), "method")) {
            echo "matriculado";
        }
        echo "\">
\t\t\t\t\t\t<h2>Segunda Opção de Curso</h2>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["opcoes_curso"] ?? null), 1, array(), "array"), "nome", array()), "html", null, true);
        echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 fit-height\">
\t\t\t\t\t<div class=\"opcao-curso fit ";
        // line 32
        if ($this->getAttribute(($context["lead"] ?? null), "isMatriculado", array(0 => $this->getAttribute(($context["opcoes_curso"] ?? null), 2, array(), "array")), "method")) {
            echo "matriculado";
        }
        echo "\">
\t\t\t\t\t\t<h2>Terceira Opção de Curso</h2>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
        // line 35
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
\t\t\t\t\t<p><strong>";
        // line 45
        echo twig_escape_filter($this->env, ($context["msgemail"] ?? null), "html", null, true);
        echo "Enviamos um e-mail com mais detalhes sobre sua inscrição.</strong></p>

\t\t\t\t\t<p style=\"text-align:justify;\">\t\t\t\t\t
\t\t\t\t\tDurante a pandemia, a FAM - Faculdade de Americana está operacionalizando
\t\t\t\t\tas provas do vestibular de forma online. Após a conclusão de sua inscrição
\t\t\t\t\tvocê receberá em seu e-mail instruções adicionais sobre como proceder para
\t\t\t\t\ta realização da mesma.\t\t\t\t\t
\t\t\t\t\t</p>
<!-- ALTERÇÕES EVERTON 02-06-2020 -->
\t\t\t\t\t<!--
\t\t\t#% if dados_adicionais.usar_enem == 'sim' %}
\t\t\t\t\t<p>
\t\t\t\t\t\t<strong>Data entrega da documentação:</strong><br />
\t\t\t\t\t\t";
        // line 78
        echo "\t\t\t\t\t</p>

\t\t\t\t\t-->

\t\t\t\t\t<p class=\"accent\"><strong>Esperamos por você!</strong></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
    <!--<img src=\"/assets/images/home-campanha-logo.png\" class=\"d-block d-md-none mt-4 apoio\" alt=\"Faculdade é FAM\"/>-->
</main>
</div>
";
    }

    // line 92
    public function block_scripts($context, array $blocks = array())
    {
        // line 93
        echo "\t
";
    }

    public function getTemplateName()
    {
        return "/var/www/app/ambiente_conversao/vestibularfam2020.1/views//finaliza.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 93,  135 => 92,  119 => 78,  103 => 45,  90 => 35,  82 => 32,  74 => 27,  66 => 24,  58 => 19,  50 => 16,  41 => 10,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/ambiente_conversao/vestibularfam2020.1/views//finaliza.twig", "");
    }
}

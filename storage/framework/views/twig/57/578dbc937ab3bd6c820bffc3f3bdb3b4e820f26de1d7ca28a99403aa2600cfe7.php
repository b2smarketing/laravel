<?php

/* /var/www/app/ambiente_conversao/tecfam2020.1/views//finaliza.twig */
class __TwigTemplate_82d212afe4fa77b6058db995dc77c43fca404d4a289814bb89e5e2ab03be7433 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AmbienteConversao::layout.twig", "/var/www/app/ambiente_conversao/tecfam2020.1/views//finaliza.twig", 1);
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
        echo "<main class=\"container\">
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
\t\t\t</div>
\t\t</div>
\t\t<div class=\"content offset-md-1 col-md-7\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<h2>Detalhes da Inscrição</h2>
\t\t\t\t\t<p><strong>Enviamos um e-mail com mais detalhes sobre sua inscrição.</strong></p>
\t\t\t\t\t<p>
\t\t\t\t\t\t<strong>Data da matrícula:</strong><br />
\t\t\t\t\t\t";
        // line 31
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
        // line 39
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
    <img src=\"/assets/images/titulo.png\" class=\"d-block d-md-none mt-4 apoio\" alt=\"Curso Técnico é FAM.\"/>
</main>
";
    }

    // line 51
    public function block_scripts($context, array $blocks = array())
    {
        // line 52
        echo "\t
";
    }

    public function getTemplateName()
    {
        return "/var/www/app/ambiente_conversao/tecfam2020.1/views//finaliza.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 52,  103 => 51,  86 => 39,  73 => 31,  57 => 18,  49 => 15,  40 => 9,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/ambiente_conversao/tecfam2020.1/views//finaliza.twig", "");
    }
}

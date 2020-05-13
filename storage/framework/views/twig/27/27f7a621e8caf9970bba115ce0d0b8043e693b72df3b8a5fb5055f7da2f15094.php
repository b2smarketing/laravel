<?php

/* /var/www/app/ambiente_conversao/tecfam2019.1sem/views//finaliza-adicionais.twig */
class __TwigTemplate_1ca1c60e60db8a9969bbd7d69d8dfee373299fdc73650360d9a4f9532492cbe2 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AmbienteConversao::layout", "/var/www/app/ambiente_conversao/tecfam2019.1sem/views//finaliza-adicionais.twig", 1);
        $this->blocks = array(
            'pagina' => array($this, 'block_pagina'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AmbienteConversao::layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_pagina($context, array $blocks = array())
    {
        // line 3
        echo "<header class=\"banner-finalizado\">
\t<div class=\"layout\">
\t\t<h2 id=\"vc-no-topo\">Parab&eacute;ns! <span>";
        // line 5
        echo twig_escape_filter($this->env, ($context["primeiro_nome"] ?? null), "html", null, true);
        echo "</span></h2>
\t\t<h2 id=\"nome-curso\">Dados adicionais cadastrados com sucesso!</h2>
\t</div>
\t<h2 id=\"nome-curso-mobile\">Dados adicionais cadastrados com sucesso!<h2>
</header>
";
    }

    public function getTemplateName()
    {
        return "/var/www/app/ambiente_conversao/tecfam2019.1sem/views//finaliza-adicionais.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/ambiente_conversao/tecfam2019.1sem/views//finaliza-adicionais.twig", "");
    }
}

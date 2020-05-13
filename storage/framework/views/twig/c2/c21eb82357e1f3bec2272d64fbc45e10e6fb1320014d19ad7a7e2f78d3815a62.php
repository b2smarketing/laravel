<?php

/* /var/www/app/landing-pages/revisacoenem/views//index.twig */
class __TwigTemplate_ce16ffea473aa877d45ddd44f5970ff05d979395018379d2211cb6e9efad1daa extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LP::layout", "/var/www/app/landing-pages/revisacoenem/views//index.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LP::layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["title"] = "Revisaço ENEM — Faculdade de Americana";
        // line 4
        $context["meta_desc"] = "";
        // line 5
        $context["meta_keyw"] = "";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_head($context, array $blocks = array())
    {
        // line 8
        echo "    <script src=\"/assets/js/index.min.js\"></script>
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "<div class=\"home\">
    <div class=\"container\">
        <!-- Logo -->
        <img class=\"logo\" alt=\"Revisaço ENEM\" src=\"/assets/img/home-logo.png\" />

        <!-- Form -->
        <form method=\"post\" action=\"\" class=\"js-form\">
            ";
        // line 19
        echo csrf_field();
        echo "
            <input class=\"form-control js-cpf\" type=\"text\" placeholder=\"CPF\" name=\"cpf\" required />
            <input class=\"btn btn-primary enviar js-enviar\" type=\"submit\" value=\"Inscrever-se\" disabled />
        </form>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/app/landing-pages/revisacoenem/views//index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 19,  47 => 12,  44 => 11,  39 => 8,  36 => 7,  32 => 1,  30 => 5,  28 => 4,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/landing-pages/revisacoenem/views//index.twig", "");
    }
}

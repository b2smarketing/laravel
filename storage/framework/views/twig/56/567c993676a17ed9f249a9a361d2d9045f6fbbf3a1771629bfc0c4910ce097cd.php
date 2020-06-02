<?php

/* /var/www/app/landing-pages/fam-na-escola/views//obrigado.twig */
class __TwigTemplate_8baa7daf0ec71e54bab1b5c63e469a6d8281018beb3ecaf8fe2058137eec9073 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LP::layout", "/var/www/app/landing-pages/fam-na-escola/views//obrigado.twig", 1);
        $this->blocks = array(
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
        $context["title"] = "FAM na Escola — Faculdade de Americana";
        // line 4
        $context["meta_desc"] = "";
        // line 5
        $context["meta_keyw"] = "";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"inscricao\">
    <div class=\"container\">
        <!-- Logo -->
        <img class=\"logo\" alt=\"FAM na Escola\" src=\"/assets/img/insc-logo.png\" />
        
        <!-- Chamada -->
        <div class=\"row chamada\">
            <div class=\"col-md-7\">
                <h2>Sua inscrição foi recebida com sucesso!</h2>
                <p>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["datastore"] ?? null), "nome", array()), "html", null, true);
        echo ", estaremos entrando em contato em breve através do e-mail do responsável pela sua escola (";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["datastore"] ?? null), "responsavel", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["datastore"] ?? null), "responsavel_email", array()), "html", null, true);
        echo ")";
        if ($this->getAttribute(($context["datastore"] ?? null), "responsavel_telefone", array())) {
            echo " ou pelo telefone cadastrado (";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["datastore"] ?? null), "responsavel_telefone", array()), "html", null, true);
            echo ")";
        }
        echo ".</p>
                <p>A Faculdade de Americana agradece o seu contato.</p>
            </div>
            <div class=\"col-md-5\">
                <img class=\"skatista d-none d-md-block\" alt=\"\" src=\"/assets/img/insc-skatista.png\" />
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/app/landing-pages/fam-na-escola/views//obrigado.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 17,  38 => 8,  35 => 7,  31 => 1,  29 => 5,  27 => 4,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/landing-pages/fam-na-escola/views//obrigado.twig", "");
    }
}

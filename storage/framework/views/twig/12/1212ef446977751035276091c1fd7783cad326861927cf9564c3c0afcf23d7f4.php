<?php

/* /var/www/app/app/Modules/TOP3/views/pergunta.twig */
class __TwigTemplate_6f7d332109d2bf7d504d6586d45fbd3399b775c7f62908e6ce20d772fca1d8b9 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pt-br\">
<head>
    ";
        // line 4
        $this->loadTemplate("TOP3::includes.head", "/var/www/app/app/Modules/TOP3/views/pergunta.twig", 4)->display($context);
        // line 5
        echo "    <link rel=\"stylesheet\" href=\"css/loading-bar.css\" />
</head>
<body> 
<section class=\"full justify-center\" id=\"bg-perguntas\"> 
    <div id=\"cover\">
        <div class=\"border-container\"></div>
        <img border=\"0\" src=\"img/mulher-esquerda-baixo.png\" alt=\"\" class=\"mulher-esquerda-baixo\">
        <img border=\"0\" src=\"img/mulher-direita-topo.png\" alt=\"\" class=\"mulher-direita-topo\">
        <button id=\"start\" title=\"Começar novamente\">Começar novamente</button>
    </div>
    <div class=\"container flex-center\">
        <div class=\"row w-100\">
            <div class=\"col-lg-12 inicio pergunta\">
                <section class=\"content container-fluid\" id=\"quiz\"></section>
                <div class=\"questions-nav\">
                    <button class=\"btn\" id=\"prev\"></button>             
                    <button class=\"btn\" id=\"next\"></button>             
                </div>
            </div>
            <div class=\"col-lg-6 col-lg-offset-3\">
                <center>          
                    <div class=\"ldBar label-center\" data-preset=\"circle\" data-value=\"0\" id=\"quizProgress\"></div>
                </center>    
            </div>
        </div>    
    </div>
</section>
<form id=\"resultados\" action=\"/resultados\" method=\"post\" style=\"display:none;\">";
        // line 32
        echo csrf_field();
        echo "</form>
<script src=\"js/loading-bar.min.js\"></script>
<script src=\"js/index.js\"></script>  
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "/var/www/app/app/Modules/TOP3/views/pergunta.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 32,  26 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/TOP3/views/pergunta.twig", "");
    }
}

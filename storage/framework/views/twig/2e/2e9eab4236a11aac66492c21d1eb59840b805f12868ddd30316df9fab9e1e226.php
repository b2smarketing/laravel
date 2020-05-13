<?php

/* /var/www/app/app/Modules/TOP/views/pergunta.twig */
class __TwigTemplate_23872d1118d7ec3ae5cc78e1de9c1dafe802bfd10a0a990065e7718fed5916a1 extends TwigBridge\Twig\Template
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
        $this->loadTemplate("TOP::includes.head", "/var/www/app/app/Modules/TOP/views/pergunta.twig", 4)->display($context);
        // line 5
        echo "    <link rel=\"stylesheet\" href=\"css/loading-bar.css\" />
</head>
<body> 
<section class=\"full\" id=\"bg-perguntas\"> 
    <div id=\"cover\">

    </div>
    <div class=\"container\">
        <div class=\"row\">
           ";
        // line 15
        echo "           <div class=\"col-lg-12 inicio\">
            ";
        // line 16
        if (($context["custom_branding"] ?? null)) {
            // line 17
            echo "                <img border=\"0\" src=\"";
            echo twig_escape_filter($this->env, ($context["custom_branding"] ?? null), "html", null, true);
            echo "/img/fam.png\" />
            ";
        } else {
            // line 19
            echo "                <img border=\"0\" src=\"img/fam.png\" />
            ";
        }
        // line 20
        echo "      
                <section class=\"content container-fluid\" id=\"quiz\"></section>
                <center>
                    <button id=\"prev\" style=\"transform: rotateY(180deg);\"></button>             
                    <button id=\"next\"></button>             
                    <button id=\"start\">Começar novamente</button>
                </center>
            </div>
        </div>    
    </div>
    <div class=\"col-lg-6 col-lg-offset-3\">
        <center>          
            <br><br>
            <div class=\"ldBar label-center\" data-preset=\"rainbow\" data-value=\"0\" id=\"quizProgress\"></div>
            <br><br><br><br>
            <p style=\"font-size:.8em;\">Desenvolvido por <a href=\"http://www.b2s.marketing\" target=\"_blank\">B2S Marketing</a></p>
        </center>    
    </div>
    <br style=\"clear:both\" />
</section>
<form id=\"resultados\" action=\"/resultados\" method=\"post\" style=\"display:none;\">";
        // line 40
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
        return "/var/www/app/app/Modules/TOP/views/pergunta.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 40,  52 => 20,  48 => 19,  42 => 17,  40 => 16,  37 => 15,  26 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/TOP/views/pergunta.twig", "");
    }
}

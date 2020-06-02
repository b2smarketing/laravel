<?php

/* /var/www/app/app/Modules/TOP/views/index.twig */
class __TwigTemplate_2f852ad442945ec7bb3bd45a9668e6f6d1ca304eb64233f815eb36dd32c2067d extends TwigBridge\Twig\Template
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
        $this->loadTemplate("TOP::includes.head", "/var/www/app/app/Modules/TOP/views/index.twig", 4)->display($context);
        // line 5
        echo "</head>
<body>    

<section class=\"full\" id=\"bg-home\">   
    <div class=\"container\">
        <div class=\"row\">
             <div class=\"col-lg-6 col-lg-offset-3 inicio\">
            ";
        // line 12
        if (($context["custom_branding"] ?? null)) {
            // line 13
            echo "                <img border=\"0\" src=\"";
            echo twig_escape_filter($this->env, ($context["custom_branding"] ?? null), "html", null, true);
            echo "/img/fam.png\" />
            ";
        } else {
            // line 15
            echo "                <img border=\"0\" src=\"img/fam.png\" />
            ";
        }
        // line 17
        echo "                <p style=\"font-size:1.2em;\">Ainda não se decidiu?</p>
                <p>Calma, escolher seu curso é uma decisão crucial para começar a sua carreira.<br>Sabendo dessa dificuldade criamos um teste da análise do seu perfil, para saber com quais cursos você se identifica.</p>
                <p><b>Vamos Começar?</b></p><br>
                <form action=\"quiz\" method=\"post\" id=\"go_quiz\">
                    ";
        // line 21
        echo csrf_field();
        echo "
                    <input type=\"text\" name=\"nome\" id=\"input-nome\" class=\"campo\" placeholder=\"INSIRA SEU NOME COMPLETO\">
                    <input type=\"email\" name=\"email\" id=\"input-email\" class=\"campo\" placeholder=\"INSIRA SEU E-MAIL\">
                    <p>OU</p>
                    <fb:login-button onclick=\"fb_login_start\" onlogin=\"fb_login\" scope=\"public_profile,email\" max-rows=\"1\" size=\"large\" button-type=\"continue_with\" show-faces=\"false\" auto-logout-link=\"false\" use-continue-as=\"true\"></fb:login-button>
                </form>
                ";
        // line 28
        echo "            </div>
            <div class=\"col-lg-1\">
                <a href=\"#\" onclick=\"\$('#go_quiz').submit();\">
                    <img border=\"0\" src=\"img/seta-right.png\" align=\"right\" class=\"seta\" style=\"margin-top:300px\" />
                </a>
            </div>
\t\t</div>
    </div>  
    <div class=\"col-lg-6 col-lg-offset-3\">
        <center>            
            <br><br>
            <p style=\"font-size:.8em;\">Desenvolvido por <a href=\"http://www.b2s.marketing\" target=\"_blank\">B2S Marketing</a></p>
        </center>    
    </div>
</section> 

<script type=\"text/javascript\">
function fb_login (x) {
    if (x.status == 'connected') {
        \$('#loader').fadeIn(350);

        FB.api('/me?fields=id,name,gender,email', (response) => {
            if (response.name)
                \$('#input-nome').val(response.name);

            if (response.email)
                \$('#input-email').val(response.email);

            \$('#go_quiz').submit();
        });
    }
}
</script>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "/var/www/app/app/Modules/TOP/views/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 28,  53 => 21,  47 => 17,  43 => 15,  37 => 13,  35 => 12,  26 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/TOP/views/index.twig", "");
    }
}

<?php

/* /var/www/app/app/Modules/TOP3/views/index.twig */
class __TwigTemplate_e69e301cf39f22d406dcb6b96a0cffbdcf869dbeaa887615b576cef1c9bfae9a extends TwigBridge\Twig\Template
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
        $this->loadTemplate("TOP3::includes.head", "/var/www/app/app/Modules/TOP3/views/index.twig", 4)->display($context);
        // line 5
        echo "</head>
<body>    

<section class=\"full\" id=\"bg-home\">   
    <div class=\"container flex-center\">
        <div class=\"row w-100\">
            <div class=\"col-lg-7 col-lg-offset-5 inicio\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-lg-offset-0 col-md-8 col-md-offset-2\">
                        ";
        // line 14
        if (($context["custom_branding"] ?? null)) {
            // line 15
            echo "                            <img border=\"0\" src=\"img/logo.png\" alt=\"FAM 20 anos | Teste de Orientação Profissional\" />
                        ";
        } else {
            // line 17
            echo "                            <img border=\"0\" src=\"img/logo.png\" alt=\"FAM 20 anos | Teste de Orientação Profissional\" />
                        ";
        }
        // line 19
        echo "                        <img border=\"0\" src=\"img/chamada.png\" class=\"chamada\" alt=\"Sentindo-se sem rumo profissional? Não se desespere.\" />
                    </div>
                    <div class=\"col-lg-9 col-lg-offset-3 text col-md-8 col-md-offset-2\">
                        <p>Ter dúvidas sobre qual carreira escolher é normal, e, sabendo dessa dificuldade, criamos um teste de Orientação Profissional que vai analisar o seu perfil e indicar as direções para o seu sucesso!</p>
                        <p class=\"extra-bold\"><b>Vamos Começar?</b></p>
                        <form action=\"quiz\" method=\"post\" id=\"go_quiz\">
                            ";
        // line 25
        echo csrf_field();
        echo "
                            <input type=\"text\" name=\"nome\" required id=\"input-nome\" class=\"campo\" placeholder=\"Nome completo\">
                            <input type=\"text\" name=\"cpf\" required id=\"input-cpf\" class=\"campo\" placeholder=\"CPF\">
                            <input type=\"text\" name=\"celular\" required id=\"input-celular\" class=\"campo\" placeholder=\"Celular\">

                            <div class=\"send-container\">
                                <input type=\"email\" name=\"email\" required id=\"input-email\" class=\"campo\" placeholder=\"E-mail\">
                                <button class=\"send-btn\" role=\"submit\" title=\"Enviar\">Enviar</button>
                            </div>
                            ";
        // line 38
        echo "                        </form>
                    </div>
                </div>
            </div>
\t\t</div>
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
        return "/var/www/app/app/Modules/TOP3/views/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 38,  55 => 25,  47 => 19,  43 => 17,  39 => 15,  37 => 14,  26 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/TOP3/views/index.twig", "");
    }
}

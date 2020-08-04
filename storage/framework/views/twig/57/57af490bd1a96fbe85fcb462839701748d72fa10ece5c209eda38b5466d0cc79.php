<?php

/* /var/www/app/ambiente_conversao/vestibularfam2020.1/views//index.twig */
class __TwigTemplate_6e4dbb9217c4e4d93b0aa28f13ab72d4aad648a969e8c01bb7191a8af758194a extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AmbienteConversao::layout", "/var/www/app/ambiente_conversao/vestibularfam2020.1/views//index.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AmbienteConversao::layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["page_id"] = "page-home";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
\t<!-- Principal -->

<!--
\t<div class=\"pop\">
\t\t<div class=\"msg\">
\t\t\t<img src=\"/assets/images/pop-up-aviso.jpg\" onclick=\"apaga()\"></a>
\t\t<a href=\"https://provadebolsas.com.br\" target=\"_blank\">
\t\t\t<button class=\"bolsa\">Clique Aqui e Inscreva-se</button>
\t\t</a>
\t</div>
</div>
-->

<main id=\"page-home\" class=\"container fit-height\">
\t<div
\t\tclass=\"row fit mt-4 mt-md-0\">
\t\t<!--div id=\"acfam-home-artwork\" class=\"col-md-8 full-height d-none d-md-block\">
\t\t\t\t\t";
        // line 25
        echo "\t\t\t\t</div-->
\t\t<img class=\"img-home-person d-none d-md-block\" src=\"/assets/images/index.png\" style=\"transform: scale(0.8); position:absolute;bottom:0;left:2em;\">
\t\t<div
\t\t\tid=\"acfam-home-form\" class=\"col-md-7 pt-md-5 full-height\">
\t\t\t<!-- Centralizar verticamente o formulário -->
\t\t\t<div class=\"row full-height align-items-end\">
\t\t\t\t<div
\t\t\t\t\tclass=\"col\">
\t\t\t\t\t<!-- Aqui é o formulário padrão de cadastro -->
\t\t\t\t\t<form id=\"form\" action=\"/inscricao\" method=\"post\" class=\"form-home\">
\t\t\t\t\t\t";
        // line 35
        echo csrf_field();
        echo "
\t\t\t\t\t\t<the-mask onkeypress=\"Valida();\" required name=\"cpf\" id=\"cpf\" class=\"form-control cpf\" type=\"tel\" placeholder=\"Insira seu CPF\" :mask=\"['###.###.###-##']\" title=\"Por favor insira seu CPF\"></the-mask>
\t\t\t\t\t\t<div class=\"oculto\">
\t\t\t\t\t\t\t<input oninput=\"Submeter();\" required name=\"candidato[nome]\" id=\"nome\" class=\"form-control\" type=\"text\" placeholder=\"Nome\" title=\"Por favor insira seu nome\"/>
\t\t\t\t\t\t\t<input oninput=\"Submeter();\" required name=\"candidato[sobrenome]\" id=\"sobrenome\" class=\"form-control\" type=\"text\" placeholder=\"Sobrenome\" title=\"Por favor insira seu Sobrenome\"/>
\t\t\t\t\t\t\t<input oninput=\"Submeter();\" required name=\"candidato[email]\" id=\"email\" class=\"form-control\" type=\"email\" placeholder=\"E-mail\" title=\"Por favor insira seu e-mail\"/>
\t\t\t\t\t\t\t<the-mask oninput=\"Submeter();\" class=\"form-control\" name=\"candidato[celular]\" id=\"celular\" type=\"tel\" placeholder=\"Celular/WhatsApp\" required :mask=\"['(##) ####-####', '(##) #####-####']\" title=\"Por favor insira seu celular\"></the-mask>
\t\t\t\t\t\t\t<select oninput=\"Submeter();\" required name=\"curso\" id=\"curso\" class=\"form-control curso\">
\t\t\t\t\t\t\t\t<option selected :value=\"null\">Selecione um curso...</option>
\t\t\t\t\t\t\t\t<option v-for=\"curso in cursos_sort\" :value=\"curso.id\" v-html=\"curso.nome\"></option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--<fb:login-button onclick=\"fb_login_start\" onlogin=\"fb_login\" scope=\"public_profile,email\" max-rows=\"1\" size=\"large\" button-type=\"continue_with\" show-faces=\"false\" auto-logout-link=\"false\" use-continue-as=\"true\"></fb:login-button>
\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"btn cta\" type=\"submit\" value=\"Continuar\" />-->

\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</main>


<script language=\"javascript\" type=\"text/javascript\">
\tfunction apaga() {
\$('.pop').css({'display': 'none'});
}
/*
window.open('/assets/pop/pop.html','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=520');
*/
</script>";
    }

    // line 66
    public function block_scripts($context, array $blocks = array())
    {
        // line 67
        echo "<!-- Script da Página -->
<script type=\"text/javascript\" src=\"/assets/js/page-index.js\"></script>
<script type=\"text/javascript\" src=\"/assets/js/update.js\"></script>
<script type=\"text/javascript\" src=\"/assets/js/validador.js\"></script>

<!-- Styles da Página -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/page-index.css\"/>
<link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/update.css\"/>

";
        // line 76
        if (($context["error"] ?? null)) {
            // line 77
            echo "\t<script>
\t\talert('";
            // line 78
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "');
\t</script>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/app/ambiente_conversao/vestibularfam2020.1/views//index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 78,  119 => 77,  117 => 76,  106 => 67,  103 => 66,  67 => 35,  55 => 25,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/ambiente_conversao/vestibularfam2020.1/views//index.twig", "");
    }
}

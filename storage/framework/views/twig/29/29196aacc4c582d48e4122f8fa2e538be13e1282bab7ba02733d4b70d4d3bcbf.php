<?php

/* C:\xampp\htdocs\laravel/ambiente_conversao/vestibularfam2020.1/views//index.twig */
class __TwigTemplate_e9a08f13a178389a4c26422a168dec73653f1a71113c673e816da5a835bfff15 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AmbienteConversao::layout", "C:\\xampp\\htdocs\\laravel/ambiente_conversao/vestibularfam2020.1/views//index.twig", 3);
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
        // line 5
        $context["page_id"] = "page-home";
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "


<!-- Principal -->
<main id=\"page-home\" class=\"container fit-height\">
\t<img class=\"img-home-person d-none d-md-block\" src=\"/assets/images/img-home-person2.png\" style=\"transform: scale(1.1); position:absolute;bottom:0;right:5%;\">
\t<div class=\"row fit mt-4 mt-md-0\">
        <!--div id=\"acfam-home-artwork\" class=\"col-md-8 full-height d-none d-md-block\">
\t\t\t";
        // line 17
        echo "\t\t</div-->
\t\t<div id=\"acfam-home-form\" class=\"col-md-7 pt-md-5 full-height\">
\t\t\t<!-- Centralizar verticamente o formulário -->
\t\t\t<div class=\"row full-height align-items-end\">
\t\t\t\t<div class=\"col\">\t
\t\t\t\t\t\t<div><img class=\"pulse\" src=\"/assets/images/curtirx.png\" style=\"position: absolute; width: 200px; left: 30%; top: 5%;\"><div/>\t\t
\t\t\t\t\t\t<img class=\"img-home\" src=\"/assets/images/img-homex.png\">\t\t\t\t
\t\t\t\t\t<!-- Aqui é o formulário padrão de cadastro -->
\t\t\t\t\t<form action=\"/inscricao\" method=\"post\" class=\"form-home\">
\t\t\t\t\t\t";
        // line 26
        echo csrf_field();
        echo "
\t\t\t\t\t\t<the-mask required name=\"cpf\" class=\"form-control cpf\" type=\"tel\" placeholder=\"Insira seu CPF\" :mask=\"['###.###.###-##']\" title=\"Por favor insira seu CPF\"></the-mask>
\t\t\t\t\t\t<div class=\"inputs-hidden\">
\t\t\t\t\t\t\t<input required name=\"candidato[nome]\" class=\"form-control\" type=\"text\" placeholder=\"Nome\" title=\"Por favor insira seu nome\"/>
\t\t\t\t\t\t\t<input required name=\"candidato[email]\" class=\"form-control\" type=\"email\" placeholder=\"E-mail\" title=\"Por favor insira seu e-mail\" />
                            <the-mask class=\"form-control\" name=\"candidato[celular]\" type=\"tel\" placeholder=\"Celular/WhatsApp\" required :mask=\"['(##) ####-####', '(##) #####-####']\" title=\"Por favor insira seu celular\"></the-mask>
                            <select required name=\"curso\" class=\"form-control curso\">
                                <option selected :value=\"null\">Selecione um curso...</option>
                                <option v-for=\"curso in cursos_sort\" :value=\"curso.id\" v-html=\"curso.nome\"></option>
                            </select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<fb:login-button onclick=\"fb_login_start\" onlogin=\"fb_login\" scope=\"public_profile,email\" max-rows=\"1\" size=\"large\" button-type=\"continue_with\" show-faces=\"false\" auto-logout-link=\"false\" use-continue-as=\"true\"></fb:login-button>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<input class=\"btn cta\" type=\"submit\" value=\"Continuar\" />

\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</main>
";
    }

    // line 49
    public function block_scripts($context, array $blocks = array())
    {
        // line 50
        echo "\t<!-- Script da Página -->
\t<script type=\"text/javascript\" src=\"/assets/js/page-index.js\"></script>

\t<!-- Styles da Página -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/page-index.css\" />

\t";
        // line 56
        if (($context["error"] ?? null)) {
            // line 57
            echo "\t\t<script>alert('";
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "');</script>
\t";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\laravel/ambiente_conversao/vestibularfam2020.1/views//index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 57,  93 => 56,  85 => 50,  82 => 49,  56 => 26,  45 => 17,  35 => 8,  32 => 7,  28 => 3,  26 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

    {% extends 'AmbienteConversao::layout' %}

{% set page_id = 'page-home' %}

{% block body %}



<!-- Principal -->
<main id=\"page-home\" class=\"container fit-height\">
\t<img class=\"img-home-person d-none d-md-block\" src=\"/assets/images/img-home-person2.png\" style=\"transform: scale(1.1); position:absolute;bottom:0;right:5%;\">
\t<div class=\"row fit mt-4 mt-md-0\">
        <!--div id=\"acfam-home-artwork\" class=\"col-md-8 full-height d-none d-md-block\">
\t\t\t{# <img src=\"/assets/images/home-campanha-logo.png\" class=\"art top right overflow allow-larger-width\" /> #}
\t\t</div-->
\t\t<div id=\"acfam-home-form\" class=\"col-md-7 pt-md-5 full-height\">
\t\t\t<!-- Centralizar verticamente o formulário -->
\t\t\t<div class=\"row full-height align-items-end\">
\t\t\t\t<div class=\"col\">\t
\t\t\t\t\t\t<div><img class=\"pulse\" src=\"/assets/images/curtirx.png\" style=\"position: absolute; width: 200px; left: 30%; top: 5%;\"><div/>\t\t
\t\t\t\t\t\t<img class=\"img-home\" src=\"/assets/images/img-homex.png\">\t\t\t\t
\t\t\t\t\t<!-- Aqui é o formulário padrão de cadastro -->
\t\t\t\t\t<form action=\"/inscricao\" method=\"post\" class=\"form-home\">
\t\t\t\t\t\t{{ csrf_field() }}
\t\t\t\t\t\t<the-mask required name=\"cpf\" class=\"form-control cpf\" type=\"tel\" placeholder=\"Insira seu CPF\" :mask=\"['###.###.###-##']\" title=\"Por favor insira seu CPF\"></the-mask>
\t\t\t\t\t\t<div class=\"inputs-hidden\">
\t\t\t\t\t\t\t<input required name=\"candidato[nome]\" class=\"form-control\" type=\"text\" placeholder=\"Nome\" title=\"Por favor insira seu nome\"/>
\t\t\t\t\t\t\t<input required name=\"candidato[email]\" class=\"form-control\" type=\"email\" placeholder=\"E-mail\" title=\"Por favor insira seu e-mail\" />
                            <the-mask class=\"form-control\" name=\"candidato[celular]\" type=\"tel\" placeholder=\"Celular/WhatsApp\" required :mask=\"['(##) ####-####', '(##) #####-####']\" title=\"Por favor insira seu celular\"></the-mask>
                            <select required name=\"curso\" class=\"form-control curso\">
                                <option selected :value=\"null\">Selecione um curso...</option>
                                <option v-for=\"curso in cursos_sort\" :value=\"curso.id\" v-html=\"curso.nome\"></option>
                            </select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<fb:login-button onclick=\"fb_login_start\" onlogin=\"fb_login\" scope=\"public_profile,email\" max-rows=\"1\" size=\"large\" button-type=\"continue_with\" show-faces=\"false\" auto-logout-link=\"false\" use-continue-as=\"true\"></fb:login-button>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<input class=\"btn cta\" type=\"submit\" value=\"Continuar\" />

\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</main>
{% endblock %}

{% block scripts %}
\t<!-- Script da Página -->
\t<script type=\"text/javascript\" src=\"/assets/js/page-index.js\"></script>

\t<!-- Styles da Página -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/page-index.css\" />

\t{% if error %}
\t\t<script>alert('{{ error }}');</script>
\t{% endif %}
{% endblock %}", "C:\\xampp\\htdocs\\laravel/ambiente_conversao/vestibularfam2020.1/views//index.twig", "");
    }
}

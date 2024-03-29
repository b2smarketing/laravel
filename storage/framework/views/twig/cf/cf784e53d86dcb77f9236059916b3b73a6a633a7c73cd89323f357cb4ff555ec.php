<?php

/* /var/www/app/ambiente_conversao/vestibularfam2019.2-4/views//index.twig */
class __TwigTemplate_8cd998ee82c2ae198f6e1690c6bb67365bf885dc879edc200529580dc7e18ddf extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AmbienteConversao::layout", "/var/www/app/ambiente_conversao/vestibularfam2019.2-4/views//index.twig", 1);
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
        echo "<!-- Principal -->
<main id=\"page-home\" class=\"container fit-height\">
\t<div class=\"row fit mt-4 mt-md-0\">
        <!--div id=\"acfam-home-artwork\" class=\"col-md-8 full-height d-none d-md-block\">
\t\t\t";
        // line 11
        echo "\t\t</div-->
\t\t<div id=\"acfam-home-form\" class=\"col-md-7 pt-md-5 full-height\">
\t\t\t<!-- Centralizar verticamente o formulário -->
\t\t\t<div class=\"row full-height align-items-end\">
\t\t\t\t<div class=\"col\">
                    <!--img class=\"img-fluid mb-4 apoio d-none d-md-block\" src=\"/assets/images/home-text.png\" alt=\"O momento é agora!\" /-->
\t\t\t\t\t<!-- Aqui é o formulário padrão de cadastro -->
\t\t\t\t\t<form action=\"/inscricao\" method=\"post\" class=\"form-home\">
\t\t\t\t\t\t";
        // line 19
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

    // line 42
    public function block_scripts($context, array $blocks = array())
    {
        // line 43
        echo "\t<!-- Script da Página -->
\t<script type=\"text/javascript\" src=\"/assets/js/page-index.js\"></script>

\t<!-- Styles da Página -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/page-index.css\" />

\t";
        // line 49
        if (($context["error"] ?? null)) {
            // line 50
            echo "\t\t<script>alert('";
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "');</script>
\t";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/app/ambiente_conversao/vestibularfam2019.2-4/views//index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 50,  88 => 49,  80 => 43,  77 => 42,  51 => 19,  41 => 11,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/ambiente_conversao/vestibularfam2019.2-4/views//index.twig", "");
    }
}

<?php

/* /var/www/app/landing-pages/fam-na-escola/views//inscricao.twig */
class __TwigTemplate_7426c40e1f8f076a70842d67fc96e6b234b590fe3be561bc951011c36c696b0d extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LP::layout", "/var/www/app/landing-pages/fam-na-escola/views//inscricao.twig", 1);
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
        <div class=\"row\">
            <div class=\"col-12 col-lg-6\">
                <!-- Logo -->
                <img alt=\"FAM na Escola\" src=\"/assets/img/home-logo.png\" />
            </div>
            <div class=\"col-12 col-lg-6\">
                <div class=\"title-wrapper\">
                    <h3>Palestras</h3>
                    <img src=\"/assets/img/insc-title-bg.png\">
                </div>
                <p class=\"big mt-4\">
                    Atenção docentes do 3º ano do Ensino Médio.
                </p>
                <p>
                    Este ano, a FAM - Faculdade de Americana - volta a oferecer a sua escola palestras com enfoque socioeducativo. Elas são gratuitas. Desde os anos anteriores já passamos por mais de 250 escolas. 
                </p>
                <p>
                    Os assuntos abordados nas palestras são questões sobre a escolha da profissão e os mecanismos facilitadores para ingressar no Ensino Superior, como o ENEM, SISU e Prouni.
                </p>
                <p>
                    É discutida também a importância do ENEM com dicas de como as provas são estruturadas.
                </p>
                <!-- Form -->
                <form method=\"post\" action=\"/inscricao/fam-na-escola\">
                    ";
        // line 34
        echo csrf_field();
        echo "
                    <div class=\"row\">
                        <div class=\"col-md-6\"><input required class=\"form-control\" type=\"text\" placeholder=\"Nome da Escola:\" name=\"escola\" /></div>
                        <div class=\"col-md-6\"><input required class=\"form-control\" type=\"text\" placeholder=\"Cidade:\" name=\"cidade\" /></div>
                        <div class=\"col-md-6\"><input required class=\"form-control\" type=\"text\" placeholder=\"Responsável:\" name=\"responsavel\" /></div>
                        <div class=\"col-md-6\"><input required class=\"form-control\" type=\"email\" placeholder=\"E-mail do Responsavel:\" name=\"responsavel_email\" /></div>
                        <div class=\"col-md-6\"><input required class=\"form-control\" type=\"tel\" placeholder=\"Telefone do Responsável:\" name=\"responsavel_telefone\" /></div>
                        <div class=\"col-md-6\"><input required class=\"form-control\" type=\"date\" placeholder=\"Data:\" name=\"data\" /></div>
                    </div>
                    <input class=\"btn btn-primary mt-4 mb-5\" type=\"submit\" value=\"Inscrever Escola\" />
                </form>
            </div>
        </div>
    </div>
</div>
        
        <!-- Chamada -->
        ";
        // line 61
        echo "
        ";
        // line 90
        echo "        ";
        // line 121
        echo "        ";
        // line 144
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/app/landing-pages/fam-na-escola/views//inscricao.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 144,  91 => 121,  89 => 90,  86 => 61,  66 => 34,  38 => 8,  35 => 7,  31 => 1,  29 => 5,  27 => 4,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/landing-pages/fam-na-escola/views//inscricao.twig", "");
    }
}

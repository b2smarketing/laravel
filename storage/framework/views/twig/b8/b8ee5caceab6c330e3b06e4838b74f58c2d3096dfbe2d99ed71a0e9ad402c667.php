<?php

/* /var/www/app/app/Modules/Admin/views/Financeiro/Midias/index.twig */
class __TwigTemplate_3f123e7e7a61b75ee1caf253125e2e1fe3fdde9ced89ace0584693cb9975e2a2 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::layout", "/var/www/app/app/Modules/Admin/views/Financeiro/Midias/index.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Admin::layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["form"] = $this->loadTemplate("Admin::helpers.form_financeiro", "/var/www/app/app/Modules/Admin/views/Financeiro/Midias/index.twig", 3);
        // line 4
        $context["tabela"] = $this->loadTemplate("Admin::helpers.tabela_financeiro", "/var/www/app/app/Modules/Admin/views/Financeiro/Midias/index.twig", 4);
        // line 6
        $context["title"] = "Tipos de Mídia";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"right_col\" role=\"main\">
\t<div class=\"\">
\t\t<div class=\"row\">
          <div class=\"col-md-12 col-sm-12 col-xs-12\">
              <div class=\"x_panel\">
                <div class=\"x_title\">
                  <h2>Tipos de Mídia</h2>
                  <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">

                ";
        // line 20
        echo $context["tabela"]->getlistar_midias(($context["midias"] ?? null));
        echo "

                </div>
              </div>
            </div>

            <div class=\"clearfix\"></div>
        </div>

\t    \t";
        // line 29
        echo $context["form"]->geteditar_midia(null, ($context["midias"] ?? null));
        echo "

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/app/app/Modules/Admin/views/Financeiro/Midias/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 29,  51 => 20,  38 => 9,  35 => 8,  31 => 1,  29 => 6,  27 => 4,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/Financeiro/Midias/index.twig", "");
    }
}

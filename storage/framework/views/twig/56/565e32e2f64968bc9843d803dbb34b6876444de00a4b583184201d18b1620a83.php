<?php

/* /var/www/app/app/Modules/Admin/views/Financeiro/Midias/view.twig */
class __TwigTemplate_1c8d2fe858c1f9ab92445258ef0b9f30a67c3eeb10970c322dd43a70d0824410 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::layout", "/var/www/app/app/Modules/Admin/views/Financeiro/Midias/view.twig", 1);
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
        $context["tabela"] = $this->loadTemplate("Admin::helpers.tabela_financeiro", "/var/www/app/app/Modules/Admin/views/Financeiro/Midias/view.twig", 3);
        // line 5
        $context["title"] = "Visualizar Mídia";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"right_col\" role=\"main\">
\t<div class=\"\">
    <div class=\"row\">
      <div class=\"col-md-12 col-sm-12 col-xs-12\">
          <div class=\"x_panel\">
            <div class=\"x_title\">
              <h2>Visualizando Mídia</h2>
              <div class=\"clearfix\"></div>
            </div>
            <div class=\"x_content\">

              <label>Nome:</label>
              <div>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["midia"] ?? null), "nome", array()), "html", null, true);
        echo "</div>
              <br />

              <label>Categoria:</label>
              <div>";
        // line 24
        echo $this->getAttribute(($context["midia"] ?? null), "categoria_arvore", array(), "method");
        echo "</div>
              <br />
              
              <label>Código:</label>
              <div>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["midia"] ?? null), "codigo", array()), "html", null, true);
        echo "</div>

            </div>
          </div>
        </div>

        <div class=\"clearfix\"></div>
    </div>

    <div class=\"row\">
      <div class=\"col-md-12 col-sm-12 col-xs-12\">
          <div class=\"x_panel\">
            <div class=\"x_title\">
              <h2>Subtipos</h2>
              <div class=\"clearfix\"></div>
            </div>
            <div class=\"x_content\">

            ";
        // line 46
        echo $context["tabela"]->getlistar_midias($this->getAttribute(($context["midia"] ?? null), "subtipos_all", array()));
        echo "

            </div>
          </div>
        </div>

        <div class=\"clearfix\"></div>
      </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/app/app/Modules/Admin/views/Financeiro/Midias/view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 46,  64 => 28,  57 => 24,  50 => 20,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/Financeiro/Midias/view.twig", "");
    }
}

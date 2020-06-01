<?php

/* /var/www/app/app/Modules/Admin/views/Campanhas/edit.twig */
class __TwigTemplate_5ab7ed89036f8fd21e233baa2c022df6d4137e9a76556cd19109d826234ccbb5 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::layout", "/var/www/app/app/Modules/Admin/views/Campanhas/edit.twig", 1);
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
        $context["form"] = $this->loadTemplate("Admin::helpers.form_campanha", "/var/www/app/app/Modules/Admin/views/Campanhas/edit.twig", 3);
        // line 5
        $context["title"] = ("Editando: " . $this->getAttribute(($context["campanha"] ?? null), "nome", array()));
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
        <div style=\"padding: 1em 0em\">
          <a href=\"./\"><i class=\"fa fa-eye\"></i> Visualizar</a>
        </div>
      </div>
    </div>

    ";
        // line 19
        echo $context["form"]->geteditar_campanha(($context["campanha"] ?? null), ($context["cursos"] ?? null), ($context["unidades"] ?? null), ($context["campanhas"] ?? null));
        echo "
    
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "/var/www/app/app/Modules/Admin/views/Campanhas/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 19,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/Campanhas/edit.twig", "");
    }
}

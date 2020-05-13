<?php

/* /var/www/app/app/Modules/Admin/views/Escolas/index.twig */
class __TwigTemplate_29582a25f12d7cbda3d77a14261f8996bcd03c6741389ebfb9dad61f17c48718 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::layout", "/var/www/app/app/Modules/Admin/views/Escolas/index.twig", 1);
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
        $context["exibir"] = $this->loadTemplate("Admin::helpers.link_display", "/var/www/app/app/Modules/Admin/views/Escolas/index.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"right_col\" role=\"main\">

<!-- WYSWYG -->
<link rel=\"stylesheet\" href=\"/wysiwyg/bootstrap3-wysihtml5.min.css\" />
<script src=\"/wysiwyg/wysihtml5x-toolbar.min.js\"></script>
<script src=\"/wysiwyg/handlebars.runtime.min.js\"></script>
<script src=\"/wysiwyg/bootstrap3-wysihtml5.min.js\"></script>

<!-- Aplicar WYSWYG -->

<script type=\"text/javascript\">
\$('textarea').wysihtml5({
  locale: 'pt-BR',
  toolbar: {
    'color': false,
    'image': false,
    'blockquote': false,
    'ident-left': false,
    'Outdent': false,
    'small': false
  }
});
</script>
<h2>Escolas</h2><hr>
<table>
";
        // line 32
        echo "<tr><td>";
        echo twig_escape_filter($this->env, ($context["escolas"] ?? null), "html", null, true);
        echo "</td></tr>
";
        // line 34
        echo "</table> 

</div>

";
    }

    public function getTemplateName()
    {
        return "/var/www/app/app/Modules/Admin/views/Escolas/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 34,  61 => 32,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/Escolas/index.twig", "");
    }
}

<?php

/* /var/www/app/app/Modules/Admin/views/Control/text.twig */
class __TwigTemplate_7d34a27a302b0dbaebcb2a50d556238886e331ba49ac25516e7d2bc351a61453 extends TwigBridge\Twig\Template
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
        echo "<label for=\"";
        echo twig_escape_filter($this->env, ($context["name_prefix"] ?? null), "html", null, true);
        echo "[";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "]\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["option"] ?? null), "label", array()), "html", null, true);
        echo "</label>
<input id=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["name_prefix"] ?? null), "html", null, true);
        echo "[";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "]\" name=\"";
        echo twig_escape_filter($this->env, ($context["name_prefix"] ?? null), "html", null, true);
        echo "[";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "]\" class=\"form-control\" value=\"";
        echo twig_escape_filter($this->env, ($context["current"] ?? null), "html", null, true);
        echo "\" />";
    }

    public function getTemplateName()
    {
        return "/var/www/app/app/Modules/Admin/views/Control/text.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/Control/text.twig", "");
    }
}

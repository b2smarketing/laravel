<?php

/* C:\xampp\htdocs\laravel\app\Modules\Admin\views/Control/text.twig */
class __TwigTemplate_70e9f729016a0e21139eeee31324d2f0968667fc4b62040a1ae1e4dde42e3bbb extends TwigBridge\Twig\Template
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
        return "C:\\xampp\\htdocs\\laravel\\app\\Modules\\Admin\\views/Control/text.twig";
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
        return new Twig_Source("<label for=\"{{ name_prefix }}[{{ name }}]\">{{ option.label }}</label>
<input id=\"{{ name_prefix }}[{{ name }}]\" name=\"{{ name_prefix }}[{{ name }}]\" class=\"form-control\" value=\"{{ current }}\" />", "C:\\xampp\\htdocs\\laravel\\app\\Modules\\Admin\\views/Control/text.twig", "");
    }
}

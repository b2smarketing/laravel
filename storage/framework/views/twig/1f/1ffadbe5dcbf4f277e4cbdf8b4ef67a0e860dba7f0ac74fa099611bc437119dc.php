<?php

/* /var/www/app/app/Modules/Admin/views/Control/select.twig */
class __TwigTemplate_604601e27a206b7d6f7f3efca2a5233c32fe7c25d0be27ea1c100adf8bfbbd70 extends TwigBridge\Twig\Template
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
<select id=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["name_prefix"] ?? null), "html", null, true);
        echo "[";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "]\" name=\"";
        echo twig_escape_filter($this->env, ($context["name_prefix"] ?? null), "html", null, true);
        echo "[";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "]\" class=\"form-control\">
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["values"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 4
            echo "\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "value", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute(($context["current"] ?? null), 0, array(), "array"), "value", array()) == $this->getAttribute($context["option"], "value", array()))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "text", array()), "html", null, true);
            echo "</option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</select>";
    }

    public function getTemplateName()
    {
        return "/var/www/app/app/Modules/Admin/views/Control/select.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 6,  42 => 4,  38 => 3,  28 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/Control/select.twig", "");
    }
}

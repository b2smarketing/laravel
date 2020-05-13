<?php

/* /var/www/app/app/Modules/Admin/views/Control/radio.twig */
class __TwigTemplate_bd21217669c414e054515f166cd8fcc119ae169fe874f7296559abcef9c467c7 extends TwigBridge\Twig\Template
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
        echo "<label>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["option"] ?? null), "label", array()), "html", null, true);
        echo "</label><br />
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["option"] ?? null), "values", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
            // line 3
            if ((twig_test_empty(($context["current"] ?? null)) && $this->getAttribute($context["opt"], "default", array()))) {
                $context["current"] = $this->getAttribute($context["opt"], "value", array());
            }
            // line 4
            echo "\t<label for=\"";
            echo twig_escape_filter($this->env, ($context["name_prefix"] ?? null), "html", null, true);
            echo "[";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "]\">
\t\t<input type=\"radio\" id=\"";
            // line 5
            echo twig_escape_filter($this->env, ($context["name_prefix"] ?? null), "html", null, true);
            echo "[";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "]\" name=\"";
            echo twig_escape_filter($this->env, ($context["name_prefix"] ?? null), "html", null, true);
            echo "[";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["opt"], "value", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["opt"], "value", array()) == ($context["current"] ?? null))) {
                echo "checked";
            }
            echo " />
\t\t";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["opt"], "label", array()), "html", null, true);
            echo "
\t</label><br />
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/var/www/app/app/Modules/Admin/views/Control/radio.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 6,  54 => 5,  45 => 4,  41 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/Control/radio.twig", "");
    }
}

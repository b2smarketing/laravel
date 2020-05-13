<?php

/* /var/www/app/app/Modules/TOP3/views/resultados.twig */
class __TwigTemplate_168490df185963e0666c7d65d115bd13e3c80890dc053f15a53511549079c486 extends TwigBridge\Twig\Template
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
        echo "<div id=\"score\">
    <img border=\"0\" src=\"img/logo.png\" class=\"score-img\" alt=\"FAM 20 anos | Teste de Orientação Profissional\" />
\t<h3 class=\"score-title\">Você se identifica mais com:<br/>";
        // line 3
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute(($context["area"] ?? null), "nome", array())), "html", null, true);
        echo "</h3>
\t<p>";
        // line 4
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["area"] ?? null), "descricao", array()), "html", null, true));
        echo "</p>

    <div class=\"cursos\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cursos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
            // line 8
            echo "            <a target=\"_blank\" class=\"link\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "landing_page", array()), "html", null, true);
            echo "\">
                <div class=\"curso\">
                ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "nome", array()), "html", null, true);
            echo "<br />
                </div>
            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/app/app/Modules/TOP3/views/resultados.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 14,  43 => 10,  37 => 8,  33 => 7,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/TOP3/views/resultados.twig", "");
    }
}

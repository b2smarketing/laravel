<?php

/* /var/www/app/app/Modules/TOP/views/resultados.twig */
class __TwigTemplate_ceec16c22a6f448cbabbde8af6d876ec463d4bdf8c8cca49006e6f68f3523a31 extends TwigBridge\Twig\Template
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
\t<h3>Você se identifica mais com: ";
        // line 2
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute(($context["area"] ?? null), "nome", array())), "html", null, true);
        echo "</h3>
\t<p>";
        // line 3
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["area"] ?? null), "descricao", array()), "html", null, true));
        echo "</p>

\t<h4>Cursos da Área</h4>
\t<p>
\t\t<div class=\"cursos\">
\t\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cursos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
            // line 9
            echo "\t\t\t\t<div class=\"curso\">
\t\t\t\t\t<a target=\"_blank\" href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "landing_page", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "nome", array()), "html", null, true);
            echo "</a><br />
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t</div>
\t</p>

</div>

<style type=\"text/css\">
#score p {
\ttext-align: justify;
\ttext-justify: inter-word;
\tdisplay: flex;
\tjustify-items: center;
}
#score p br {
    display: block;
    margin: 1em;
    content: ' ';
}
#score p a {
    display: block;
    color: inherit;
}

.cursos {
    display: grid;
    grid-template-columns: 1fr 1fr;
    justify-items: center;
}

.curso{
    max-width: 265px;
\tmin-width: 265px;
    background: linear-gradient(90deg,#3849a9, #00b8fe);
\tbackground-size: auto 200%;
    background-position: 0 100%;
    transition: background-position 0.5s;
    padding: 1px 2px; 
    margin-bottom: 20px;
    min-height: 62px;
    border-radius: 30px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.curso:hover {
\tbackground-position: 100% 0;
}

.curso a {
\tcolor: #fff;
\tfont-size: 0.65em;
}

.curso a:hover {
\tcolor: lightblue;
}

@media (max-width: 768px) {
\t#score p { text-align: center; }
}
</style>

<script type=\"text/javascript\">setCover('";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute(($context["area"] ?? null), "id", array()), "html", null, true);
        echo ".jpg');</script>";
    }

    public function getTemplateName()
    {
        return "/var/www/app/app/Modules/TOP/views/resultados.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 75,  52 => 13,  41 => 10,  38 => 9,  34 => 8,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/TOP/views/resultados.twig", "");
    }
}

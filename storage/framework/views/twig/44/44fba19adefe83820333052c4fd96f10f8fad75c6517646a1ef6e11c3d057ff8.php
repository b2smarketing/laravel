<?php

/* Admin::helpers/custom_fields.twig */
class __TwigTemplate_155219da1e698c5c472e38f045c3f442d835217e15549aa3e9c6e76b0bdce0b0 extends TwigBridge\Twig\Template
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
    }

    // line 1
    public function getrender_editor($__campo__ = null, $__form__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "campo" => $__campo__,
            "form" => $__form__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            if ( !($context["form"] ?? null)) {
                $context["form"] = "campos_personalizados";
            }
            // line 3
            echo "\t<div class=\"row\">
";
            // line 4
            if (($context["campo"] ?? null)) {
                // line 5
                echo "\t\t<input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, ($context["form"] ?? null), "html", null, true);
                echo "[";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["campo"] ?? null), "nome", array()), "html", null, true);
                echo "][nome]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["campo"] ?? null), "nome", array()), "html", null, true);
                echo "\" />
\t\t<input type=\"hidden\" name=\"";
                // line 6
                echo twig_escape_filter($this->env, ($context["form"] ?? null), "html", null, true);
                echo "[";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["campo"] ?? null), "nome", array()), "html", null, true);
                echo "][tipo]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["campo"] ?? null), "tipo", array()), "html", null, true);
                echo "\" />
\t\t<div class=\"col-md-4\">
\t\t\t<label class=\"form-control\">";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute(($context["campo"] ?? null), "nome", array()), "html", null, true);
                echo "</label>
\t\t</div>
\t\t<div class=\"col-md-4\">
\t\t\t<input class=\"form-control\" type=\"text\" name=\"";
                // line 11
                echo twig_escape_filter($this->env, ($context["form"] ?? null), "html", null, true);
                echo "[";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["campo"] ?? null), "nome", array()), "html", null, true);
                echo "][label]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["campo"] ?? null), "label", array()), "html", null, true);
                echo "\" />
\t\t</div>
\t\t<div class=\"col-md-4\">
\t\t";
                // line 14
                if (($this->getAttribute(($context["campo"] ?? null), "tipo", array()) == "select")) {
                    // line 15
                    echo "\t\t\t<input class=\"form-control\" type=\"button\" value=\"Editar Opções\" />
\t\t\t<input type=\"hidden\" name=\"";
                    // line 16
                    echo twig_escape_filter($this->env, ($context["form"] ?? null), "html", null, true);
                    echo "[";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["campo"] ?? null), "nome", array()), "html", null, true);
                    echo "][valores]\" value=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('App\TwigExtended')->array2json($this->getAttribute(($context["campo"] ?? null), "valores", array())), "html", null, true);
                    echo "\" />
\t\t";
                } elseif (($this->getAttribute(                // line 17
($context["campo"] ?? null), "tipo", array()) == "text")) {
                    // line 18
                    echo "\t\t\t<input class=\"form-control\" name=\"";
                    echo twig_escape_filter($this->env, ($context["form"] ?? null), "html", null, true);
                    echo "[";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["campo"] ?? null), "nome", array()), "html", null, true);
                    echo "][valores]\" readonly value=\"\" />
\t\t";
                } else {
                    // line 20
                    echo "\t\t\t<input class=\"form-control\" name=\"";
                    echo twig_escape_filter($this->env, ($context["form"] ?? null), "html", null, true);
                    echo "[";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["campo"] ?? null), "nome", array()), "html", null, true);
                    echo "][valores]\" readonly value=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('App\TwigExtended')->array2json($this->getAttribute(($context["campo"] ?? null), "valores", array())), "html", null, true);
                    echo "\" />
\t\t";
                }
                // line 22
                echo "\t\t</div>
";
            } else {
                // line 24
                echo "\t\t<div class=\"col-md-4\">
\t\t\t<input class=\"form-control\" type=\"text\" name=\"";
                // line 25
                echo twig_escape_filter($this->env, ($context["form"] ?? null), "html", null, true);
                echo "[__new__][nome]\" placeholder=\"ID do Campo\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["campo"] ?? null), "nome", array()), "html", null, true);
                echo "</label>
\t\t</div>
\t\t<div class=\"col-md-4\">
\t\t\t<input class=\"form-control\" type=\"text\" name=\"";
                // line 28
                echo twig_escape_filter($this->env, ($context["form"] ?? null), "html", null, true);
                echo "[__new__][label]\" placeholder=\"Legenda do Campo\" />
\t\t</div>
\t\t<div class=\"col-md-4\">
\t\t\t<select class=\"form-control\" name=\"";
                // line 31
                echo twig_escape_filter($this->env, ($context["form"] ?? null), "html", null, true);
                echo "[__new__][tipo]\">
\t\t\t\t<option>Selecione um tipo de campo</option>
\t\t\t\t<option value=\"text\">Texto</option>
\t\t\t\t<option value=\"select\">Seleção</option>
\t\t\t</select>
\t\t</div>
";
            }
            // line 38
            echo "\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "Admin::helpers/custom_fields.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 38,  131 => 31,  125 => 28,  117 => 25,  114 => 24,  110 => 22,  100 => 20,  92 => 18,  90 => 17,  82 => 16,  79 => 15,  77 => 14,  67 => 11,  61 => 8,  52 => 6,  43 => 5,  41 => 4,  38 => 3,  34 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Admin::helpers/custom_fields.twig", "");
    }
}

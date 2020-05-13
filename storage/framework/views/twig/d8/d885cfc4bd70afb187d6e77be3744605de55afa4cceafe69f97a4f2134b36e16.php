<?php

/* Admin::helpers.link_display */
class __TwigTemplate_afdf21bcaa68b25022e758b49e3da4e167602b496dc46b30ca43e0af2edc4481 extends TwigBridge\Twig\Template
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
        // line 8
        echo "
";
        // line 11
        echo "
";
        // line 17
        echo "
";
        // line 22
        echo "
";
        // line 26
        echo "
";
        // line 29
        echo "
";
        // line 34
        echo "
";
        // line 37
        echo "
";
        // line 40
        echo "
";
    }

    // line 10
    public function getcampanha_nome($__campanha__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "campanha" => $__campanha__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            echo $this->getAttribute($this, "link_admin", array(0 => $this->getAttribute(($context["campanha"] ?? null), "nome", array()), 1 => "campanhas", 2 => $this->getAttribute(($context["campanha"] ?? null), "id", array())), "method");
            echo "</a>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 13
    public function getnota($__id__ = null, $__texto__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $__id__,
            "texto" => $__texto__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            echo $this->getAttribute($this, "link_admin", array(0 => ($context["texto"] ?? null), 1 => "financeiro/notas", 2 => ($context["id"] ?? null)), "method");
            echo "</a>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 14
    public function getnota_codigo($__nota__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "nota" => $__nota__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            echo $this->getAttribute($this, "nota", array(0 => $this->getAttribute(($context["nota"] ?? null), "id", array()), 1 => ("#" . $this->getAttribute(($context["nota"] ?? null), "numero", array()))), "method");
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 15
    public function getnota_fornecedor($__nota__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "nota" => $__nota__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            echo $this->getAttribute($this, "fornecedor_nome", array(0 => $this->getAttribute(($context["nota"] ?? null), "fornecedor", array())), "method");
            echo "</a>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 16
    public function getnota_descritivo($__nota__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "nota" => $__nota__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            echo $this->getAttribute($this, "nota_codigo", array(0 => ($context["nota"] ?? null)), "method");
            echo " - ";
            echo $this->getAttribute($this, "nota_fornecedor", array(0 => ($context["nota"] ?? null)), "method");
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["nota"] ?? null), "descricao", array()), "html", null, true);
            echo ")</a>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 19
    public function getmidia($__id__ = null, $__texto__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $__id__,
            "texto" => $__texto__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            echo $this->getAttribute($this, "link_admin", array(0 => ($context["texto"] ?? null), 1 => "financeiro/midias", 2 => ($context["id"] ?? null)), "method");
            echo "</a>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 20
    public function getmidia_nome($__midia__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "midia" => $__midia__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            echo $this->getAttribute($this, "midia", array(0 => $this->getAttribute(($context["midia"] ?? null), "id", array()), 1 => $this->getAttribute(($context["midia"] ?? null), "nome", array())), "method");
            echo "</a>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 21
    public function getmidia_fornecedor($__midia__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "midia" => $__midia__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            echo $this->getAttribute($this, "fornecedor_nome", array(0 => $this->getAttribute(($context["midia"] ?? null), "fornecedor", array())), "method");
            echo "</a>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 24
    public function getfornecedor($__id__ = null, $__texto__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $__id__,
            "texto" => $__texto__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            echo $this->getAttribute($this, "link_admin", array(0 => ($context["texto"] ?? null), 1 => "financeiro/fornecedores", 2 => ($context["id"] ?? null)), "method");
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 25
    public function getfornecedor_nome($__fornecedor__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "fornecedor" => $__fornecedor__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            echo $this->getAttribute($this, "fornecedor", array(0 => $this->getAttribute(($context["fornecedor"] ?? null), "id", array()), 1 => $this->getAttribute(($context["fornecedor"] ?? null), "nome", array())), "method");
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 28
    public function getbreadcrumbs($__itens__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "itens" => $__itens__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            if (($context["itens"] ?? null)) {
                echo twig_join_filter(($context["itens"] ?? null), $this->getAttribute($this, "breadcrumbs", array()));
            } else {
                echo " <i class=\"fa fa-angle-right\"></i> ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 31
    public function getdata($__data__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "data" => $__data__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["data"] ?? null), "d/m/Y"), "html", null, true);
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 32
    public function gethora($__data__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "data" => $__data__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["data"] ?? null), "H:i"), "html", null, true);
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 33
    public function getdatahora($__data__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "data" => $__data__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            echo twig_escape_filter($this->env, (($this->getAttribute($this, "data", array(0 => ($context["data"] ?? null)), "method") . " ") . $this->getAttribute($this, "hora", array(0 => ($context["data"] ?? null)), "method")), "html", null, true);
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 36
    public function getreais($__valor__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "valor" => $__valor__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            echo "R\$ ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->env->getExtension('App\TwigExtended')->floor((($context["valor"] ?? null) * 100)) / 100), 2, ",", "."), "html", null, true);
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 39
    public function getporcentagem($__valor__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "valor" => $__valor__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["valor"] ?? null), 2, ",", "."), "html", null, true);
            echo "%";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 42
    public function geturl_admin($__link__ = null, $__id__ = null, $__action__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "link" => $__link__,
            "id" => $__id__,
            "action" => $__action__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            echo "/";
            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            if (($context["id"] ?? null)) {
                echo "/";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            }
            if (($context["action"] ?? null)) {
                echo "/";
                echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 43
    public function getlink_admin($__texto__ = null, $__link__ = null, $__id__ = null, $__action__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "texto" => $__texto__,
            "link" => $__link__,
            "id" => $__id__,
            "action" => $__action__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            echo "<a target=\"_blank\" href=\"";
            echo $this->getAttribute($this, "url_admin", array(0 => ($context["link"] ?? null), 1 => ($context["id"] ?? null), 2 => ($context["action"] ?? null)), "method");
            echo "\">";
            echo twig_escape_filter($this->env, ($context["texto"] ?? null), "html", null, true);
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
        return "Admin::helpers.link_display";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  521 => 43,  484 => 42,  457 => 39,  430 => 36,  404 => 33,  378 => 32,  352 => 31,  322 => 28,  296 => 25,  269 => 24,  242 => 21,  215 => 20,  187 => 19,  156 => 16,  129 => 15,  103 => 14,  75 => 13,  48 => 10,  43 => 40,  40 => 37,  37 => 34,  34 => 29,  31 => 26,  28 => 22,  25 => 17,  22 => 11,  19 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Admin::helpers.link_display", "");
    }
}

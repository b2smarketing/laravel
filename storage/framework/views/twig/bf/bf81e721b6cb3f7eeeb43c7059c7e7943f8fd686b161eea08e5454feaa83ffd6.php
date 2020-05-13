<?php

/* LP::layout */
class __TwigTemplate_726caedb8a0c399c880b98638a424af2a3a46c17adbd5b687c5736576149c226 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pt\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>";
        // line 7
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</title>

    ";
        // line 9
        if (($context["meta_desc"] ?? null)) {
            echo "<meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, ($context["meta_desc"] ?? null), "html", null, true);
            echo "\" />";
        }
        // line 10
        echo "    ";
        if (($context["meta_keyw"] ?? null)) {
            echo "<meta name=\"keywords\" content=\"";
            echo twig_escape_filter($this->env, ($context["meta_keyw"] ?? null), "html", null, true);
            echo "\" />";
        }
        // line 11
        echo "
    <!-- CSS -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" />
    <link rel=\"stylesheet\" href=\"/assets/css/main.css\" />

    ";
        // line 16
        $this->displayBlock('head', $context, $blocks);
        // line 17
        echo "</head>
<body>
    ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "
    <!-- JS -->
    <script defer src=\"https://code.jquery.com/jquery-3.4.0.min.js\"></script>
    <script defer src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>

    ";
        // line 25
        $this->displayBlock('script', $context, $blocks);
        // line 26
        echo "
    <!-- CSS: Defer -->
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:500,700\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Varela+Round\" rel=\"stylesheet\">
</body>
</html>";
    }

    // line 16
    public function block_head($context, array $blocks = array())
    {
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
    }

    // line 25
    public function block_script($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "LP::layout";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 25,  86 => 19,  81 => 16,  72 => 26,  70 => 25,  63 => 20,  61 => 19,  57 => 17,  55 => 16,  48 => 11,  41 => 10,  35 => 9,  30 => 7,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "LP::layout", "");
    }
}

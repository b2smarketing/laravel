<?php

/* LP::layout */
class __TwigTemplate_2ec6e55768da8a56728c1fa02efb1e29302ca1a513f696619486491448ab0347 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
    <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"https://www.fam.br/wp-content/themes/fam-2017/images/favicon-96x96.png\">
\t<link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"https://www.fam.br/wp-content/themes/fam-2017/images/favicon-32x32.png\">
\t<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"https://www.fam.br/wp-content/themes/fam-2017/images/favicon-16x16.png\">

    ";
        // line 12
        if (($context["meta_desc"] ?? null)) {
            echo "<meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, ($context["meta_desc"] ?? null), "html", null, true);
            echo "\" />";
        }
        // line 13
        echo "    ";
        if (($context["meta_keyw"] ?? null)) {
            echo "<meta name=\"keywords\" content=\"";
            echo twig_escape_filter($this->env, ($context["meta_keyw"] ?? null), "html", null, true);
            echo "\" />";
        }
        // line 14
        echo "
    <!-- CSS -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css\" integrity=\"sha256-PHcOkPmOshsMBC+vtJdVr5Mwb7r0LkSVJPlPrp/IMpU=\" crossorigin=\"anonymous\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\" integrity=\"sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=\" crossorigin=\"anonymous\" />
    <link rel=\"stylesheet\" href=\"/assets/css/style.css\" />
</head>
<body class=\"l-body\">
    ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "</body>
</html>";
    }

    // line 21
    public function block_body($context, array $blocks = array())
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
        return array (  65 => 21,  60 => 22,  58 => 21,  49 => 14,  42 => 13,  36 => 12,  28 => 7,  20 => 1,);
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

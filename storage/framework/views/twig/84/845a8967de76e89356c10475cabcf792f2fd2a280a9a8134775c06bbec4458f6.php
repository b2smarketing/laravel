<?php

/* /var/www/app/app/Modules/AmbienteConversao/views/email-diario.twig */
class __TwigTemplate_8631fa6fc3643b9cc6fd7d6e2fbacb47adbfcdcbf91b80ac9a26793d7107bb53 extends TwigBridge\Twig\Template
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
        echo "
<!--
 -
 - E-mail Marketing FAM
 - por Matheus Pratta <pratta@b2smarketing.com>
 -
-->

<!DOCTYPE html>
<html>
<head>
\t<title></title>
</head>
<body style=\"margin:0;padding:0;\">
\t<div style=\"width:800px;font-size:0px;font-family:'Helvetica Neue', Helvetica, Arial, sans-serif;margin: 0px auto;\">
\t\t<!-- Header -->
\t\t<div><img src=\"https://app.vestibularfam.com.br/imagens_email/cabecalho.png\" width=\"100%\" /></div>

\t\t<!-- Hero -->
\t\t<div style=\"padding:2rem 0em;background:#eee;border-bottom:2px solid #aaa;\">
\t\t\t<div style=\"display:inline-block;width:25%;text-align:center;position:relative;\">
\t\t\t\t<!-- Spacer -->
\t\t\t\t<!-- <div style=\"padding-bottom:75%;\"></div> -->
\t\t\t\t
\t\t\t\t<!-- Title -->
\t\t\t\t<strong style=\"display:block;width:100%;padding:1em 0em;bottom:0px;text-transform:uppercase;opacity:0.6;font-size:1.2rem;text-align:center;\">Leads (dia)</strong>

\t\t\t\t<!-- Number -->
\t\t\t\t<div style=\"top:50%;width:100%;text-align:center;font-size:4rem;\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["leads_hoje"] ?? null), "count", array(), "method"), "html", null, true);
        echo "</div>
\t\t\t</div>
\t\t\t<div style=\"display:inline-block;width:25%;text-align:center;position:relative;\">
\t\t\t\t<!-- Spacer -->
\t\t\t\t<!-- <div style=\"padding-bottom:75%;\"></div> -->
\t\t\t\t
\t\t\t\t<!-- Title -->
\t\t\t\t<strong style=\"display:block;width:100%;padding:1em 0em;bottom:0px;text-transform:uppercase;opacity:0.6;font-size:1.2rem;text-align:center;\">Inscritos (dia)</strong>

\t\t\t\t<!-- Number -->
\t\t\t\t<div style=\"top:50%;width:100%;text-align:center;font-size:4rem;\">";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["inscritos_hoje"] ?? null), "count", array(), "method"), "html", null, true);
        echo "</div>
\t\t\t</div>
\t\t\t<div style=\"display:inline-block;width:25%;text-align:center;position:relative;\">
\t\t\t\t<!-- Spacer -->
\t\t\t\t<!-- <div style=\"padding-bottom:75%;\"></div> -->
\t\t\t\t
\t\t\t\t<!-- Title -->
\t\t\t\t<strong style=\"display:block;width:100%;padding:1em 0em;bottom:0px;text-transform:uppercase;opacity:0.6;font-size:1.2rem;text-align:center;\">Inscritos (total)</strong>

\t\t\t\t<!-- Number -->
\t\t\t\t<div style=\"top:50%;width:100%;text-align:center;font-size:4rem;\">";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute(($context["inscritos"] ?? null), "count", array(), "method"), "html", null, true);
        echo "</div>
\t\t\t</div>
\t\t\t<div style=\"display:inline-block;width:25%;text-align:center;position:relative;\">
\t\t\t\t<!-- Spacer -->
\t\t\t\t<!-- <div style=\"padding-bottom:75%;\"></div> -->
\t\t\t\t
\t\t\t\t<!-- Title -->
\t\t\t\t<strong style=\"display:block;width:100%;padding:1em 0em;bottom:0px;text-transform:uppercase;opacity:0.6;font-size:1.2rem;text-align:center;\">Matriculados (total)</strong>

\t\t\t\t<!-- Number -->
\t\t\t\t<div style=\"top:50%;width:100%;text-align:center;font-size:4rem;\">";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute(($context["matriculados"] ?? null), "count", array(), "method"), "html", null, true);
        echo "</div>
\t\t\t</div>
\t\t</div>

\t\t<h2 style=\"text-align:center;font-weight:normal;text-transform:uppercase;font-size:2rem;padding:1em 0em;\">An&aacute;lise de Cursos</h2>

\t\t<!-- Tabela -->
\t\t<table style=\"font-size:1rem;width:100%;\" cellpadding=\"10\" cellspacing=\"0\">
\t\t\t<thead style=\"background:#162f51;color:#fff;\">
\t\t\t\t<tr>
\t\t\t\t\t<th>Curso</th>
\t\t\t\t\t<th>Leads (dia)</th>
\t\t\t\t\t<th>Inscritos (dia)</th>
\t\t\t\t\t<th>Inscritos (total)</th>
\t\t\t\t\t<th>Matriculados (total)</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cursos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
            // line 78
            echo "\t\t\t\t<tr style=\"background-color:#f0f0f0;\">
\t\t\t\t\t<td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["curso"], "curso", array()), "nome", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td style=\"text-align:center;\">";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "leads", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td style=\"text-align:center;\">";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "inscritos", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td style=\"text-align:center;\">";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "inscritos_total", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td style=\"text-align:center;\">";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "matriculados_total", array()), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>
</body>
</html>

";
    }

    public function getTemplateName()
    {
        return "/var/www/app/app/Modules/AmbienteConversao/views/email-diario.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 86,  132 => 83,  128 => 82,  124 => 81,  120 => 80,  116 => 79,  113 => 78,  109 => 77,  88 => 59,  75 => 49,  62 => 39,  49 => 29,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/AmbienteConversao/views/email-diario.twig", "");
    }
}

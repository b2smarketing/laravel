<?php

/* /var/www/app/ambiente_conversao/vestibularfam2019.2-4/views//resultados.twig */
class __TwigTemplate_5f0d36cf772465dcd37ef73fce8c931dcc4e014ae3055aa95bbbb63d66ec9a88 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AmbienteConversao::layout", "/var/www/app/ambiente_conversao/vestibularfam2019.2-4/views//resultados.twig", 3);
        $this->blocks = array(
            'pagina' => array($this, 'block_pagina'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AmbienteConversao::layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["class"] = "resultados";
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_pagina($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"layout\" id=\"resultados-provas-vestibular\">
\t<br />
\t<div class=\"resultados\">
\t\t<div class=\"center\">
\t\t\t<h3>Confira aqui o resultado de suas provas!</h3>
\t\t</div>
\t\t<form action=\"/resultados\" method=\"post\">
\t\t\t";
        // line 12
        echo csrf_field();
        echo "
\t\t\t<div class=\"input full\">
\t\t\t\t<input type=\"text\" name=\"cpf\" data-mask='999.999.999-99' placeholder=\"CPF\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "cpf", array()), "html", null, true);
        echo "\" />
\t\t\t</div>
\t\t\t<div class=\"input full\">
\t\t\t\t<input type=\"submit\" value=\"OK\" />
\t\t\t</div>
\t\t</form>
\t";
        // line 20
        if (($context["provas"] ?? null)) {
            // line 21
            echo "\t\t<table>
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Data</th>
\t\t\t\t\t<th>Curso</th>
\t\t\t\t\t<th>Status</th>
\t\t\t\t\t<th>Nota</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["provas"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["prova"]) {
                // line 32
                echo "\t\t\t\t<tr class=\"";
                if ($this->getAttribute($context["prova"], "aprovado", array())) {
                    echo "prova-aprovado";
                } else {
                    echo "prova-reprovado";
                }
                echo "\">
\t\t\t\t\t<td>";
                // line 33
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["prova"], "data", array()), "hora", array()), "d/m/Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["prova"], "curso", array()), "nome", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["prova"], "status", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 36
                if ($this->getAttribute($context["prova"], "participou", array())) {
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["prova"], "nota", array()), 2), "html", null, true);
                } else {
                    echo "-";
                }
                echo "</td>
\t\t\t\t</tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prova'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "\t\t\t</tbody>
\t\t</table>
\t";
        }
        // line 42
        echo "\t</div>
</div>
<style type=\"text/css\">
\tinput { width: 100%; }
\t.input { margin: 1em auto; }
\tform {
\t\tmax-width: 20em;
\t\tmargin: 1em auto;
\t}
\ttable {
\t\twidth: 100%;
\t\tbackground-color: #004198;
\t\tcolor: #fff;
\t}
\ttd, th {
\t\ttext-align: center;
\t\tpadding: 0.4em 1em !important;
\t}
\t.prova-aprovado {
\t\tbackground-color: #fff;
\t\tcolor: #004198;
\t}
</style>
";
    }

    public function getTemplateName()
    {
        return "/var/www/app/ambiente_conversao/vestibularfam2019.2-4/views//resultados.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 42,  109 => 39,  96 => 36,  92 => 35,  88 => 34,  84 => 33,  75 => 32,  71 => 31,  59 => 21,  57 => 20,  48 => 14,  43 => 12,  34 => 5,  31 => 4,  27 => 3,  25 => 1,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/ambiente_conversao/vestibularfam2019.2-4/views//resultados.twig", "");
    }
}

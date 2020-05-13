<?php

/* /var/www/app/ambiente_conversao/tecfam2019.1sem/views//finaliza.twig */
class __TwigTemplate_98af6f14ce052dbdad9d10933c7f5fc90824132af6b2645970de845bdd018a9f extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AmbienteConversao::layout.twig", "/var/www/app/ambiente_conversao/tecfam2019.1sem/views//finaliza.twig", 3);
        $this->blocks = array(
            'pagina' => array($this, 'block_pagina'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AmbienteConversao::layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["class"] = "finaliza";
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_pagina($context, array $blocks = array())
    {
        // line 5
        echo "<header class=\"banner-finalizado\">
\t<div class=\"layout\">
\t\t<h2 id=\"welcome\">Parab&eacute;ns! <span>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "primeiro_nome", array()), "html", null, true);
        echo "</span></h2>
\t\t<p id=\"nome-curso\">Seu pedido de inscri&ccedil;&atilde;o foi realizado com sucesso.<br />
Esperamos por voc&ecirc; no centro de uma poderosa estrutura de ensino.<br />Enviamos um e-mail com mais detalhes sobre sua inscri&ccedil;&atilde;o.</p>
\t</div>
\t<h2 id=\"nome-curso-mobile\"><p>Seu pedido de inscri&ccedil;&atilde;o foi realizado com sucesso.<br />
Esperamos por voc&ecirc; no centro de uma poderosa estrutura de ensino.<br />Enviamos um e-mail com mais detalhes sobre sua inscri&ccedil;&atilde;o.</p><h2>
</header>
<div class=\"layout\">
\t<main id=\"main-finaliza\">
\t\t<h3>Inscri&ccedil;&atilde;o</h3>
\t\t<p>Curso: ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["curso"] ?? null), "nome", array()), "html", null, true);
        echo "</p>
\t\t";
        // line 19
        echo "\t";
        if (($this->getAttribute(($context["dados_adicionais"] ?? null), "enem", array()) == "sim")) {
            // line 20
            echo "\t\t<p>Data entrega da documenta&ccedil;&atilde;o: ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["prova"] ?? null), "data", array()), "hora", array()), "d/m/Y"), "html", null, true);
            echo "</p>
\t\t<p>Hor&aacute;rio: ";
            // line 21
            if ((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["prova"] ?? null), "data", array()), "hora", array()), "H") < 12)) {
                echo "das 08:30 &agrave;s 11:30";
            } else {
                echo "das 13:00 &agrave;s 21:30";
            }
            echo "</p>
\t\t<p>N&atilde;o se esque&ccedil;a de trazer sua nota do ENEM v&aacute;lida.</p>
\t";
        } else {
            // line 24
            echo "\t\t<p>Data da matrícula: ";
            echo twig_escape_filter($this->env, $this->env->getExtension('App\TwigExtended')->dia_semana(twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["prova"] ?? null), "data", array()), "hora", array()), "w")), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["prova"] ?? null), "data", array()), "hora", array()), "d/m/Y"), "html", null, true);
            echo "</p>
\t\t<p>Hora da matrícula: Segunda a Sexta-feira das 9h00 às 21h00, Sábados das 08h30 às 11h30.</p>
\t";
        }
        // line 27
        echo "\t\t<p>Local da matrícula: ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["prova"] ?? null), "local", array()), "local", array()), "html", null, true);
        echo "<br />";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["prova"] ?? null), "local", array()), "endereco", array()), "html", null, true);
        echo "</p>

\t\t<h3>Documentos Necess&aacute;rios</h3>

\t\t<ul>
\t\t\t<li>Fotoc&oacute;pia certificado de conclus&atilde;o do Ensino M&eacute;dio ou equivalente;</li>
\t\t\t<li>Fotoc&oacute;pia hist&oacute;rico Escolar do Ensino M&eacute;dio (complementa o Certificado de Conclus&atilde;o);</li>
\t\t\t<li>Fotoc&oacute;pia certid&atilde;o de Nascimento ou Casamento;</li>
\t\t\t<li>Fotoc&oacute;pia c&eacute;dula de Identidade;</li>
\t\t\t<li>Fotoc&oacute;pia CPF;</li>
\t\t\t<li>Fotoc&oacute;pia T&iacute;tulo de Eleitor;</li>
\t\t\t<li>Fotoc&oacute;pia certificado de Reservista se maior de 18 anos</li>
\t\t\t<li>Fotoc&oacute;pia comprovante de Endere&ccedil;o.</li>
\t\t\t<li>Para cursos t&eacute;cnicos, em caso de estar cursando o Ensino M&eacute;dio, apresentar Declara&ccedil;&atilde;o de Matr&iacute;cula</li>
\t\t</ul>

\t\t<p>Obs: Para os candidatos menores de 18 anos &eacute; necess&aacute;ria a presen&ccedil;a do respons&aacute;vel legal com fotoc&oacute;pias da Carteira de Identidade e do CPF, para a assinatura do Contrato de Presta&ccedil;&atilde;o de Servi&ccedil;os Educacionais.</p>

\t\t<p>Esperamos por voc&ecirc;!</p>

\t\t<p>Veja como chegar:</p>

\t\t<div class=\"google-map\" data-title=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["prova"] ?? null), "local", array()), "local", array()), "html", null, true);
        echo "\" data-zoom=\"15\" data-marker=\"true\" data-location=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["prova"] ?? null), "local", array()), "coordenadas", array()), "latitude", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["prova"] ?? null), "local", array()), "coordenadas", array()), "longitude", array()), "html", null, true);
        echo "\" data-zoom=\"17\"></div>
\t</main>
</div>
";
    }

    // line 53
    public function block_scripts($context, array $blocks = array())
    {
        // line 54
        echo "<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAoxTqf7g0Vb1N4AjMyjxMAUGbn43Dc2EE&#038;callback=initMap\" async defer></script>
<script type=\"text/javascript\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, ($context["url_root"] ?? null), "html", null, true);
        echo "/js/google-map.js\"></script>

<!-- Google Code for Convers&otilde;es cliques no site Conversion Page -->
<script type=\"text/javascript\">
/* <![CDATA[ */
var google_conversion_id = 858546155;
var google_conversion_language = \"en\";
var google_conversion_format = \"3\";
var google_conversion_color = \"ffffff\";
var google_conversion_label = \"KOkbCKav3W8Q67-xmQM\";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type=\"text/javascript\" src=\"//www.googleadservices.com/pagead/conversion.js\">
</script>
<noscript>
<div style=\"display:inline;\">
<img height=\"1\" width=\"1\" style=\"border-style:none;\" alt=\"\" src=\"//www.googleadservices.com/pagead/conversion/858546155/?label=KOkbCKav3W8Q67-xmQM&amp;guid=ON&amp;script=0\"/>
</div>
</noscript>

<!-- Google Code for Cliques no site V&iacute;deos YouTube Conversion Page -->
<script type=\"text/javascript\">
/* <![CDATA[ */
var google_conversion_id = 858546155;
var google_conversion_language = \"en\";
var google_conversion_format = \"3\";
var google_conversion_color = \"ffffff\";
var google_conversion_label = \"Rpt1CJeh128Q67-xmQM\";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type=\"text/javascript\" src=\"//www.googleadservices.com/pagead/conversion.js\">
</script>
<noscript>
<div style=\"display:inline;\">
<img height=\"1\" width=\"1\" style=\"border-style:none;\" alt=\"\" src=\"//www.googleadservices.com/pagead/conversion/858546155/?label=Rpt1CJeh128Q67-xmQM&amp;guid=ON&amp;script=0\"/>
</div>
</noscript>

";
    }

    public function getTemplateName()
    {
        return "/var/www/app/ambiente_conversao/tecfam2019.1sem/views//finaliza.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 55,  126 => 54,  123 => 53,  111 => 49,  83 => 27,  74 => 24,  64 => 21,  59 => 20,  56 => 19,  52 => 17,  39 => 7,  35 => 5,  32 => 4,  28 => 3,  26 => 1,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/ambiente_conversao/tecfam2019.1sem/views//finaliza.twig", "");
    }
}

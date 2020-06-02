<?php

/* /var/www/app/ambiente_conversao/tecfam2019.1sem/views//bem-vindo.twig */
class __TwigTemplate_536c6e25566243e424239b7dbe5ea193f1809957af8b25d21777a638456eedae extends TwigBridge\Twig\Template
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
        ob_start();
        // line 2
        echo "
";
        // line 3
        $context["utc"] = twig_date_format_filter($this->env, "", "U");
        // line 4
        echo "
<!DOCTYPE html>
<html>
<head>
\t<style type=\"text/css\">
\t@import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,900,900italic');
\thtml, body { margin: 0px; padding: 0px; }
\tbody {
\t\tfont-family: 'Source Sans Pro', sans-serif;
\t\tbackground-color: #c4d3df;
\t\tcolor: #0b2f7f;
\t}
\th1, h2 {
\t\ttext-align: center;
\t}
\th1 {
\t\tfont-weight: 900;
\t\tfont-style: italic;
\t\tfont-size: 3em;
\t}
\th2 {
\t\tfont-weight: 300;
\t\tfont-size: 2em;
\t\ttext-transform: uppercase;
\t}
\tp,
\tul {
\t\twidth: 80%;
\t\tmargin: 1em auto;
\t}
\timg { display: block; max-width: 100%; margin: 0px auto; padding: 0px; }
\t.enem {
\t\ttext-align: center;
\t\tfont-weight: 300;
\t\tfont-size: 1.3em;
\t\tmargin: 1.5em auto;
\t}
\t</style>
</head>
<body style=\"background-color:#f0f0f0;\">
\t<div style=\"color:#0b2f7f !important;max-width:800px;margin:0px auto;background-color: #c4d3df;\">
\t\t<img src=\"http://";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute(($context["modulo"] ?? null), "url", array()), "html", null, true);
        echo "/imagens_email/cabecalho.jpg?utc=";
        echo twig_escape_filter($this->env, ($context["utc"] ?? null), "html", null, true);
        echo "\" />
\t\t<div style=\"padding:1em\">
\t\t\t<h1 style=\"font-size: 3em; text-align: center;\">Seja bem-vind";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "genero_letra", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "primeiro_nome", array()), "html", null, true);
        echo "!!</h1>
\t\t\t<p>Seu pedido de inscri&ccedil;&atilde;o foi realizado com sucesso.<br />Esperamos por voc&ecirc; no centro de uma poderosa estrutura de ensino.</p>
\t\t\t<h3 style=\"text-align: center;\">Inscri&ccedil;&atilde;o</h3>
\t\t\t<p>Curso: ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["curso"] ?? null), "nome", array()), "html", null, true);
        echo "</p>
\t\t\t<p>Periodo: ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["curso"] ?? null), "dados_adicionais", array()), "periodo", array()), "html", null, true);
        echo "</p>
\t\t";
        // line 52
        if ((($context["usarenem"] ?? null) == "sim")) {
            // line 53
            echo "\t\t\t<p>Data entrega da documenta&ccedil;&atilde;o: ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["prova"] ?? null), "data", array()), "hora", array(), "method"), "d/m/Y"), "html", null, true);
            echo "</p>
\t\t\t<p>Hor&aacute;rio: ";
            // line 54
            if (($context["periodo_manha"] ?? null)) {
                echo "das 08:30 &agrave;s 11:30";
            } else {
                echo "das 13:00 &agrave;s 21:30";
            }
            echo "</p>
\t\t\t<p>N&atilde;o se esque&ccedil;a de trazer sua nota do ENEM v&aacute;lida.</p>
\t\t";
        } else {
            // line 57
            echo "\t\t\t<p>Data da matrícula: ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["prova"] ?? null), "data", array()), "hora", array(), "method"), "d/m/Y"), "html", null, true);
            echo "</p>
\t\t\t<p>Hora da matrícula: Segunda a Sexta-feira das 9h00 às 21h00, Sábados das 08h30 às 11h30.</p>
\t\t";
        }
        // line 60
        echo "\t\t\t<p>Local da matrícula: Av. Joaquim Boer, 733 - Jardim Luciene - Americana/SP<br />
\t\t\tRecepção Portaria 4</p>

\t\t\t<h3 style=\"text-align: center;\">Documentos Necess&aacute;rios</h3>

\t\t\t<ul>
\t\t\t\t<li>Fotoc&oacute;pia certificado de conclus&atilde;o do Ensino M&eacute;dio ou equivalente;</li>
\t\t\t\t<li>Fotoc&oacute;pia hist&oacute;rico Escolar do Ensino M&eacute;dio (complementa o Certificado de Conclus&atilde;o);</li>
\t\t\t\t<li>Fotoc&oacute;pia certid&atilde;o de Nascimento ou Casamento;</li>
\t\t\t\t<li>Fotoc&oacute;pia c&eacute;dula de Identidade;</li>
\t\t\t\t<li>Fotoc&oacute;pia CPF;</li>
\t\t\t\t<li>Fotoc&oacute;pia T&iacute;tulo de Eleitor;</li>
\t\t\t\t<li>Fotoc&oacute;pia certificado de Reservista se maior de 18 anos</li>
\t\t\t\t<li>Fotoc&oacute;pia comprovante de Endere&ccedil;o.</li>
\t\t\t\t<li>Para cursos t&eacute;cnicos, em caso de estar cursando o Ensino M&eacute;dio, apresentar Declara&ccedil;&atilde;o de Matr&iacute;cula</li>
\t\t\t</ul>

\t\t\t<p>Obs: Para os candidatos menores de 18 anos &eacute; necess&aacute;ria a presen&ccedil;a do respons&aacute;vel legal com fotoc&oacute;pias da Carteira de Identidade e do CPF, para a assinatura do Contrato de Presta&ccedil;&atilde;o de Servi&ccedil;os Educacionais.</p>

\t\t\t<p style=\"text-align:center;\"><strong>Facilite sua pr&eacute; matr&iacute;cula preenchendo dados adicionais.</strong></p>
\t\t\t<p><a style=\"display: block;padding: 0.25em 0.75em;font-size: 1.5em;border: none;border-radius: 9px;color: #fff;font-weight: bolder;font-style: italic;background-color: #0b2f7f;box-shadow: -3px 3px 0px #082e5a;text-align: center;margin: 2em auto;cursor: pointer;text-decoration: none;\" href=\"http://";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute(($context["modulo"] ?? null), "url", array()), "html", null, true);
        echo "/inscricao/adicionais?cpf=";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "cpf", array()), "html", null, true);
        echo "\">Inserir Dados Adicionais</a></p>

\t\t\t<p>Esperamos por voc&ecirc;!</p>

\t\t\t<p>Veja como chegar:</p>
\t\t\t<p><img src=\"http://";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute(($context["modulo"] ?? null), "url", array()), "html", null, true);
        echo "/imagens_email/mapa-fam.png\" width=\"100%\"></p>
\t\t\t<p><strong>Hor&aacute;rio de Funcionamento:</strong> Segunda a Sexta-feira das 9h00 &agrave;s 21h00, s&aacute;bados das 08h30 &agrave;s 11h30.</p>
\t\t\t<p style=\"text-align:center;\">Email: vestibular@fam.br | Whatsapp (19) 99437.9555 | Tel.: (19) 3465.8100</p>
\t\t</div>
\t\t<img src=\"http://";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute(($context["modulo"] ?? null), "url", array()), "html", null, true);
        echo "/imagens_email/rodape.png?utc=";
        echo twig_escape_filter($this->env, ($context["utc"] ?? null), "html", null, true);
        echo "\" />

\t</p>
</body>
</html>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "/var/www/app/ambiente_conversao/tecfam2019.1sem/views//bem-vindo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 89,  148 => 85,  138 => 80,  116 => 60,  109 => 57,  99 => 54,  94 => 53,  92 => 52,  88 => 51,  84 => 50,  76 => 47,  69 => 45,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/ambiente_conversao/tecfam2019.1sem/views//bem-vindo.twig", "");
    }
}

<?php

/* AmbienteConversao::layout */
class __TwigTemplate_675c6c7d40a9360057b23bdda4c2adec5b6864bfe15f7518206539f47395c49b extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html class=\"no-js\">
<head>
\t<meta charset=\"utf-8\" />
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
\t
\t<title>Prova de Bolsas FAM | Faculdade de Americana</title>

\t<meta name=\"HandheldFriendly\" content=\"True\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\">
\t<meta name=\"theme-color\" content=\"#162f51\">

\t<!-- HTTP Preconnect -->
\t<link rel=\"preconnect\" href=\"https://pageview-notify.rdstation.com.br\" />
\t<link rel=\"preconnect\" href=\"https://w-cdn.pzw.io\" />
\t<link rel=\"preconnect\" href=\"https://widget.huggy.io\" />
\t<link rel=\"preconnect\" href=\"https://w-cdn.huggy.io\" />
\t<link rel=\"preconnect\" href=\"https://rec.smartlook.com\" />
\t<link rel=\"preconnect\" href=\"https://googleads.g.doubleclick.net\" />
\t<link rel=\"preconnect\" href=\"https://staticxx.facebook.com\" />
\t<link rel=\"preconnect\" href=\"https://connect.facebook.net\" />
\t<link rel=\"preconnect\" href=\"https://static.huggy.io\" />
\t<link rel=\"preconnect\" href=\"https://www.googleadservices.com\" />
\t<link rel=\"preconnect\" href=\"https://www.google-analytics.com\" />
\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />

\t<!-- TODO: Integrar código e tags do antigo ACFAM aqui -->

\t<!-- RD Station -->
\t";
        // line 30
        echo $this->getAttribute(($context["settings"] ?? null), "rd_scripts", array());
        echo "

\t<!-- Global site tag (gtag.js) - Google Analytics -->
\t<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-80310575-2\"></script>
\t<script>
\t\twindow.dataLayer = window.dataLayer || [];
\t\tfunction gtag(){dataLayer.push(arguments);}
\t\tgtag('js', new Date());

\t\tgtag('config', 'UA-80310575-2');
\t</script>

\t<!-- Tags Header -->
\t";
        // line 43
        echo $this->getAttribute(($context["tags"] ?? null), "head", array());
        echo "

\t<!-- Detectar Javascript -->
\t<script type=\"text/javascript\">document.getElementsByClassName('no-js')[0].className = '';</script>
</head>
<body id=\"";
        // line 48
        echo twig_escape_filter($this->env, ($context["page_id"] ?? null), "html", null, true);
        echo "\">
\t<div id=\"app\">
\t\t<!-- Menu -->
\t\t<nav id=\"acfam-nav-main\" class=\"navbar navbar-expand-lg\">
\t\t\t<div class=\"container\">
\t\t\t\t<!-- Logo no menu -->
\t\t\t\t<a class=\"navbar-brand\" href=\"/\"><i class=\"icone logo-fam\"></i></a>
\t\t\t\t<span class=\"fam-texto\"></span>

\t\t\t\t<!-- Botão para exibir/ocultar menu no mobile -->
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#acfam-nav-main-inner\" aria-controls=\"acfam-nav-main-inner\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t</button>

\t\t\t\t<!-- Aqui começa o menu, tudo neste elemento será ocultado no mobile -->
\t\t\t\t<div id=\"acfam-nav-main-inner\" class=\"collapse navbar-collapse\">
\t\t\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a target=\"_blank\" class=\"nav-link\" href=\"https://fam.br\">Portal FAM</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a target=\"_blank\" class=\"nav-link\" href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute(($context["opcoes"] ?? null), "url_cursos", array()), "html", null, true);
        echo "\">Guia de Cursos</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a target=\"_blank\" class=\"nav-link\" href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute(($context["opcoes"] ?? null), "url_edital", array()), "html", null, true);
        echo "\">Regulamento</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link js-open-modal-resultado\" href=\"#\">Resultados</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 82
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>

\t\t";
        // line 87
        $this->displayBlock('body', $context, $blocks);
        // line 88
        echo "
\t\t<!-- Modal de Resultado -->
\t\t<div class=\"c-modal-resultado\">
\t\t\t<button class=\"c-modal-resultado__close js-close-modal-resultado\">X</button>
\t\t\t<div class=\"c-modal-resultado__links\">
\t\t\t\t<a class=\"c-modal-resultado__link\" href=\"https://assets.fam.br/arquivos/gabarito-prova-de-bolsas-FAM-2019-1-2a-edicao.pdf\" target=\"_blank\">Gabarito</a>
\t\t\t\t<a class=\"c-modal-resultado__link\" href=\"https://assets.fam.br/arquivos/RESULTADOS_PROVA_BOLSAS_2019.1_20-01-2019.pdf\" target=\"_blank\">Classificação Geral</a>
\t\t\t\t<a class=\"c-modal-resultado__link\" href=\"https://assets.fam.br/arquivos/Contemplados_ProvadeBolsasFAM2019.1[20-01-2019].pdf\" target=\"_blank\">Contemplados com Bolsa</a>
\t\t\t</div>
\t\t</div>

\t\t<!-- Rodapé -->
\t\t<footer>
\t\t\t<div class=\"container\">
\t\t\t\t<p>Atendimento das 9 às 21 horas | <a target=\"_blank\" href=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute(($context["opcoes"] ?? null), "url_edital", array()), "html", null, true);
        echo "\">Regulamento</a> | <a target=\"_blank\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["opcoes"] ?? null), "url_cursos", array()), "html", null, true);
        echo "\">Guia de Cursos</a></p>
\t\t\t\t<div class=\"social\">
\t\t\t\t\t<a target=\"_blank\" href=\"http://instagram.com/famamericana\"><i class=\"fa fa-instagram\"></i></a>
\t\t\t\t\t<a target=\"_blank\" href=\"http://fb.com/famamericana\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t<a target=\"_blank\" href=\"mailto:vestibular@fam.br\"><i class=\"fa fa-envelope-o\"></i></a>
\t\t\t\t\t<a class=\"has-text\" target=\"_blank\" href=\"tel:08007712449\">
\t\t\t\t\t\t<i class=\"fa fa-phone\"></i>
\t\t\t\t\t\t0800 771 2449
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"has-text\" target=\"_blank\" href=\"https://api.whatsapp.com/send?phone=551994379555\">
\t\t\t\t\t\t<i class=\"fa fa-whatsapp\"></i>
\t\t\t\t\t\tWhatsFAM (19) 99437-9555
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t</div>

\t<!-- Styles -->
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" crossorigin=\"anonymous\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">

\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/main.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/modal.css\">

\t<!-- Bootstrap -->
\t<script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" crossorigin=\"anonymous\"></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" crossorigin=\"anonymous\"></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.5/lodash.min.js\" crossorigin=\"anonymous\"></script>

\t<!-- Helper Scripts -->
\t<script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/vue\"></script>
\t<script type=\"text/javascript\" src=\"/assets/js/vue.the-mask.js\"></script>

\t<!-- Facebook Connect -->
\t<script>
\twindow.fbAsyncInit = function() {
\t\tFB.init({
\t\t\tappId      : '1395394967220729',
\t\t\txfbml      : true,
\t\t\tversion    : 'v2.9'
\t\t});
\t\tFB.AppEvents.logPageView();
\t};

\t(function(d, s, id){
\t\tvar js, fjs = d.getElementsByTagName(s)[0];
\t\tif (d.getElementById(id)) {return;}
\t\tjs = d.createElement(s); js.id = id;
\t\tjs.src = \"//connect.facebook.net/pt_BR/sdk.js\";
\t\tfjs.parentNode.insertBefore(js, fjs);
\t}(document, 'script', 'facebook-jssdk'));
\t</script>

\t<!-- Main Script -->
\t<script type=\"text/javascript\" src=\"/assets/js/main.js\"></script>

\t<!-- Page Scripts -->
\t";
        // line 161
        $this->displayBlock('scripts', $context, $blocks);
        // line 162
        echo "
\t<!-- Tags Footer -->
\t";
        // line 164
        echo $this->getAttribute(($context["tags"] ?? null), "foot", array());
        echo "

\t<!-- Google Fonts -->
\t<link href=\"https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i\" rel=\"stylesheet\">

\t<!-- Widget Huggy -->
\t<script>var \$_PowerZAP = { defaultCountry: '+55', widget_id: '2419', company: \"7496\" }; (function(i,s,o,g,r,a,m){ i[r]={context:{id:'494e5b9614f4ba877ae1913c167926aa'}};a=o;o=s.createElement(o); o.async=1;o.src=g;m=s.getElementsByTagName(a)[0];m.parentNode.insertBefore(o,m); })(window,document,'script','https://w-cdn.huggy.io/widget.min.js?v=6.14.2','pwz');</script>

\t<!-- Modal resultado -->
\t<script>
\t\t\$( document ).ready(function() {
\t\t\t\$(\".js-open-modal-resultado\").on(\"click\", function() {
\t\t\t\t\$(\".c-modal-resultado\").fadeIn();
\t\t\t\tconsole.log(\"Click no botão\");
\t\t\t});
\t\t\t\$(\".js-close-modal-resultado\").on(\"click\", function() {
\t\t\t\t\$(\".c-modal-resultado\").fadeOut();
\t\t\t\tconsole.log(\"Click no botão\");
\t\t\t});
\t\t});
\t</script>
</body>
</html>";
    }

    // line 87
    public function block_body($context, array $blocks = array())
    {
    }

    // line 161
    public function block_scripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AmbienteConversao::layout";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 161,  238 => 87,  211 => 164,  207 => 162,  205 => 161,  141 => 102,  125 => 88,  123 => 87,  116 => 82,  106 => 72,  100 => 69,  76 => 48,  68 => 43,  52 => 30,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AmbienteConversao::layout", "");
    }
}

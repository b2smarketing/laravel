<?php

/* AmbienteConversao::layout */
class __TwigTemplate_128035f7fa79d9ad8892da173ef2b9b8df9205c3241f581018b303dd44f23fb2 extends TwigBridge\Twig\Template
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

\t<title>FAM EAD</title>

\t<meta name=\"HandheldFriendly\" content=\"True\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\">
\t<meta name=\"theme-color\" content=\"#004a85\">

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
        // line 31
        echo $this->getAttribute(($context["settings"] ?? null), "rd_scripts", array());
        echo "

\t<!-- Global site tag (gtag.js) - Google Analytics -->
\t<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-80310575-5\"></script>
\t<script>
\t\twindow.dataLayer = window.dataLayer || [];

\t\tfunction gtag() {
\t\t\tdataLayer.push(arguments);
\t\t}
\t\tgtag('js', new Date());

\t\tgtag('config', 'UA-80310575-5');
\t</script>

\t<!-- Tags Header -->
\t";
        // line 47
        echo $this->getAttribute(($context["tags"] ?? null), "head", array());
        echo "

\t<!-- Detectar Javascript -->
\t<script type=\"text/javascript\">
\t\tdocument.getElementsByClassName('no-js')[0].className = '';
\t</script>
</head>

<body id=\"";
        // line 55
        echo twig_escape_filter($this->env, ($context["page_id"] ?? null), "html", null, true);
        echo "\">
\t<div class=\"js-loading\" style=\"display: -ms-flexbox;display: flex;background:rgba(0, 74, 133, 1);position: fixed;top: 0;left: 0;right: 0;bottom: 0;z-index: 99999999;-ms-flex-align: center!important;align-items: center!important;-ms-flex-pack: center!important;justify-content: center!important;\"><img src=\"/assets/images/loading.svg\"/></div>
\t<div id=\"app\">
\t\t<!-- Menu -->
\t\t<div class=\"nav-container-mobile\">
\t\t\t<nav id=\"acfam-nav-main\" class=\"navbar navbar-expand-lg\">
\t\t\t\t<div class=\"container flex-mobile justify-content-around\">
\t\t\t\t\t<!-- Logo no menu -->
\t\t\t\t\t<a class=\"navbar-brand\" href=\"/\"><i class=\"icone logo-fam\"></i></a>
\t\t\t\t\t
\t\t\t\t\t<!-- Botão para exibir/ocultar menu no mobile -->
\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\"
\t\t\t\t\t\tdata-target=\"#acfam-nav-main-inner\" aria-controls=\"acfam-nav-main-inner\" aria-expanded=\"false\"
\t\t\t\t\t\taria-label=\"Toggle navigation\">
\t\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t</button>

\t\t\t\t\t<!-- Aqui começa o menu, tudo neste elemento será ocultado no mobile -->
\t\t\t\t\t<div id=\"acfam-nav-main-inner\" class=\"collapse navbar-collapse\">
\t\t\t\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a target=\"_blank\" class=\"nav-link\" href=\"https://fam.br\">Portal FAM</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        // line 78
        if ($this->getAttribute(($context["opcoes"] ?? null), "url_cursos", array())) {
            // line 79
            echo "\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a target=\"_blank\" class=\"nav-link\" href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute(($context["opcoes"] ?? null), "url_cursos", array()), "html", null, true);
            echo "\">Guia de Cursos</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        // line 83
        echo "\t\t\t\t\t\t\t";
        if ($this->getAttribute(($context["opcoes"] ?? null), "url_edital", array())) {
            // line 84
            echo "\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a target=\"_blank\" class=\"nav-link\" href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute(($context["opcoes"] ?? null), "url_edital", array()), "html", null, true);
            echo "\">Edital</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        // line 88
        echo "\t\t\t\t\t\t\t";
        // line 91
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</div>

\t\t";
        // line 97
        $this->displayBlock('body', $context, $blocks);
        // line 98
        echo "
\t\t<!-- Rodapé -->
\t\t<footer>
\t\t\t<div class=\"container\">
\t\t\t\t<p>Atendimento das 9 às 21 horas";
        // line 102
        if ($this->getAttribute(($context["opcoes"] ?? null), "url_edital", array())) {
            echo " | <a target=\"_blank\"
\t\t\t\t\t\thref=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute(($context["opcoes"] ?? null), "url_edital", array()), "html", null, true);
            echo "\">Edital</a>";
        }
        if ($this->getAttribute(($context["opcoes"] ?? null), "url_cursos", array())) {
            echo " | <a
\t\t\t\t\t\ttarget=\"_blank\" href=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute(($context["opcoes"] ?? null), "url_cursos", array()), "html", null, true);
            echo "\">Guia de Cursos</a>";
        }
        echo "</p>
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
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\"
\t\tcrossorigin=\"anonymous\">
\t<link rel=\"stylesheet\" type=\"text/css\"
\t\thref=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/main.css\">

\t<!-- Bootstrap -->
\t<script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" crossorigin=\"anonymous\"></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"
\t\tintegrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\">
\t</script>
\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" crossorigin=\"anonymous\"></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.5/lodash.min.js\" crossorigin=\"anonymous\">
\t</script>

\t<script>
\t\t\$(document ).ready(function() {
\t\t\tif (\$(\".js-loading\").length > 0) {
\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\$(\".js-loading\").fadeOut();
\t\t\t\t}, 1000);
\t\t\t}
\t\t});
\t</script>
\t<!-- Helper Scripts -->
\t<script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/vue\"></script>
\t<script type=\"text/javascript\" src=\"/assets/js/vue.the-mask.js\"></script>

\t<!-- Facebook Connect -->
\t<script>
\t\twindow.fbAsyncInit = function () {
\t\t\tFB.init({
\t\t\t\tappId: '1395394967220729',
\t\t\t\txfbml: true,
\t\t\t\tversion: 'v2.9'
\t\t\t});
\t\t\tFB.AppEvents.logPageView();
\t\t};

\t\t(function (d, s, id) {
\t\t\tvar js, fjs = d.getElementsByTagName(s)[0];
\t\t\tif (d.getElementById(id)) {
\t\t\t\treturn;
\t\t\t}
\t\t\tjs = d.createElement(s);
\t\t\tjs.id = id;
\t\t\tjs.src = \"//connect.facebook.net/pt_BR/sdk.js\";
\t\t\tfjs.parentNode.insertBefore(js, fjs);
\t\t}(document, 'script', 'facebook-jssdk'));
\t</script>

\t<!-- Main Script -->
\t<script type=\"text/javascript\" src=\"/assets/js/main.js\"></script>

\t<!-- Page Scripts -->
\t";
        // line 178
        $this->displayBlock('scripts', $context, $blocks);
        // line 179
        echo "
\t<!-- Tags Footer -->
\t";
        // line 181
        echo $this->getAttribute(($context["tags"] ?? null), "foot", array());
        echo "

\t<!-- Google Fonts -->
\t<link href=\"https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i\" rel=\"stylesheet\">

\t<!-- Widget Huggy -->
\t<script>
\t\tvar \$_PowerZAP = {
\t\t\tdefaultCountry: '+55',
\t\t\twidget_id: '2419',
\t\t\tcompany: \"7496\"
\t\t};
\t\t(function (i, s, o, g, r, a, m) {
\t\t\ti[r] = {
\t\t\t\tcontext: {
\t\t\t\t\tid: '494e5b9614f4ba877ae1913c167926aa'
\t\t\t\t}
\t\t\t};
\t\t\ta = o;
\t\t\to = s.createElement(o);
\t\t\to.async = 1;
\t\t\to.src = g;
\t\t\tm = s.getElementsByTagName(a)[0];
\t\t\tm.parentNode.insertBefore(o, m);
\t\t})(window, document, 'script', 'https://w-cdn.huggy.io/widget.min.js?v=6.14.2', 'pwz');
\t</script>
</body>

</html>";
    }

    // line 97
    public function block_body($context, array $blocks = array())
    {
    }

    // line 178
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
        return array (  284 => 178,  279 => 97,  246 => 181,  242 => 179,  240 => 178,  161 => 104,  154 => 103,  150 => 102,  144 => 98,  142 => 97,  134 => 91,  132 => 88,  126 => 85,  123 => 84,  120 => 83,  114 => 80,  111 => 79,  109 => 78,  83 => 55,  72 => 47,  53 => 31,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html class=\"no-js\">

<head>
\t<meta charset=\"utf-8\" />
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

\t<title>FAM EAD</title>

\t<meta name=\"HandheldFriendly\" content=\"True\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\">
\t<meta name=\"theme-color\" content=\"#004a85\">

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
\t{{ settings.rd_scripts|raw }}

\t<!-- Global site tag (gtag.js) - Google Analytics -->
\t<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-80310575-5\"></script>
\t<script>
\t\twindow.dataLayer = window.dataLayer || [];

\t\tfunction gtag() {
\t\t\tdataLayer.push(arguments);
\t\t}
\t\tgtag('js', new Date());

\t\tgtag('config', 'UA-80310575-5');
\t</script>

\t<!-- Tags Header -->
\t{{ tags.head|raw }}

\t<!-- Detectar Javascript -->
\t<script type=\"text/javascript\">
\t\tdocument.getElementsByClassName('no-js')[0].className = '';
\t</script>
</head>

<body id=\"{{ page_id }}\">
\t<div class=\"js-loading\" style=\"display: -ms-flexbox;display: flex;background:rgba(0, 74, 133, 1);position: fixed;top: 0;left: 0;right: 0;bottom: 0;z-index: 99999999;-ms-flex-align: center!important;align-items: center!important;-ms-flex-pack: center!important;justify-content: center!important;\"><img src=\"/assets/images/loading.svg\"/></div>
\t<div id=\"app\">
\t\t<!-- Menu -->
\t\t<div class=\"nav-container-mobile\">
\t\t\t<nav id=\"acfam-nav-main\" class=\"navbar navbar-expand-lg\">
\t\t\t\t<div class=\"container flex-mobile justify-content-around\">
\t\t\t\t\t<!-- Logo no menu -->
\t\t\t\t\t<a class=\"navbar-brand\" href=\"/\"><i class=\"icone logo-fam\"></i></a>
\t\t\t\t\t
\t\t\t\t\t<!-- Botão para exibir/ocultar menu no mobile -->
\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\"
\t\t\t\t\t\tdata-target=\"#acfam-nav-main-inner\" aria-controls=\"acfam-nav-main-inner\" aria-expanded=\"false\"
\t\t\t\t\t\taria-label=\"Toggle navigation\">
\t\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t</button>

\t\t\t\t\t<!-- Aqui começa o menu, tudo neste elemento será ocultado no mobile -->
\t\t\t\t\t<div id=\"acfam-nav-main-inner\" class=\"collapse navbar-collapse\">
\t\t\t\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a target=\"_blank\" class=\"nav-link\" href=\"https://fam.br\">Portal FAM</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% if opcoes.url_cursos %}
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a target=\"_blank\" class=\"nav-link\" href=\"{{ opcoes.url_cursos }}\">Guia de Cursos</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if opcoes.url_edital %}
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a target=\"_blank\" class=\"nav-link\" href=\"{{ opcoes.url_edital }}\">Edital</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{# <li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Acompanhar Inscrição</a>
\t\t\t\t\t\t\t</li> #}
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</div>

\t\t{% block body %}{% endblock %}

\t\t<!-- Rodapé -->
\t\t<footer>
\t\t\t<div class=\"container\">
\t\t\t\t<p>Atendimento das 9 às 21 horas{% if opcoes.url_edital %} | <a target=\"_blank\"
\t\t\t\t\t\thref=\"{{ opcoes.url_edital }}\">Edital</a>{% endif %}{% if opcoes.url_cursos %} | <a
\t\t\t\t\t\ttarget=\"_blank\" href=\"{{ opcoes.url_cursos }}\">Guia de Cursos</a>{% endif %}</p>
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
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\"
\t\tcrossorigin=\"anonymous\">
\t<link rel=\"stylesheet\" type=\"text/css\"
\t\thref=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/main.css\">

\t<!-- Bootstrap -->
\t<script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" crossorigin=\"anonymous\"></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"
\t\tintegrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\">
\t</script>
\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" crossorigin=\"anonymous\"></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.5/lodash.min.js\" crossorigin=\"anonymous\">
\t</script>

\t<script>
\t\t\$(document ).ready(function() {
\t\t\tif (\$(\".js-loading\").length > 0) {
\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\$(\".js-loading\").fadeOut();
\t\t\t\t}, 1000);
\t\t\t}
\t\t});
\t</script>
\t<!-- Helper Scripts -->
\t<script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/vue\"></script>
\t<script type=\"text/javascript\" src=\"/assets/js/vue.the-mask.js\"></script>

\t<!-- Facebook Connect -->
\t<script>
\t\twindow.fbAsyncInit = function () {
\t\t\tFB.init({
\t\t\t\tappId: '1395394967220729',
\t\t\t\txfbml: true,
\t\t\t\tversion: 'v2.9'
\t\t\t});
\t\t\tFB.AppEvents.logPageView();
\t\t};

\t\t(function (d, s, id) {
\t\t\tvar js, fjs = d.getElementsByTagName(s)[0];
\t\t\tif (d.getElementById(id)) {
\t\t\t\treturn;
\t\t\t}
\t\t\tjs = d.createElement(s);
\t\t\tjs.id = id;
\t\t\tjs.src = \"//connect.facebook.net/pt_BR/sdk.js\";
\t\t\tfjs.parentNode.insertBefore(js, fjs);
\t\t}(document, 'script', 'facebook-jssdk'));
\t</script>

\t<!-- Main Script -->
\t<script type=\"text/javascript\" src=\"/assets/js/main.js\"></script>

\t<!-- Page Scripts -->
\t{% block scripts %}{% endblock %}

\t<!-- Tags Footer -->
\t{{ tags.foot|raw }}

\t<!-- Google Fonts -->
\t<link href=\"https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i\" rel=\"stylesheet\">

\t<!-- Widget Huggy -->
\t<script>
\t\tvar \$_PowerZAP = {
\t\t\tdefaultCountry: '+55',
\t\t\twidget_id: '2419',
\t\t\tcompany: \"7496\"
\t\t};
\t\t(function (i, s, o, g, r, a, m) {
\t\t\ti[r] = {
\t\t\t\tcontext: {
\t\t\t\t\tid: '494e5b9614f4ba877ae1913c167926aa'
\t\t\t\t}
\t\t\t};
\t\t\ta = o;
\t\t\to = s.createElement(o);
\t\t\to.async = 1;
\t\t\to.src = g;
\t\t\tm = s.getElementsByTagName(a)[0];
\t\t\tm.parentNode.insertBefore(o, m);
\t\t})(window, document, 'script', 'https://w-cdn.huggy.io/widget.min.js?v=6.14.2', 'pwz');
\t</script>
</body>

</html>", "AmbienteConversao::layout", "");
    }
}

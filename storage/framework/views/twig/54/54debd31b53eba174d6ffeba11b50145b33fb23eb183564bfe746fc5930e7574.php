<?php

/* AmbienteConversao::layout */
class __TwigTemplate_9d587b0d27476a0b1d66db3b65812d042792125672607fb1dc2b7e4d9fb55601 extends TwigBridge\Twig\Template
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
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

    <title>TecFAM | Curso Técnico é FAM</title>

    <meta name=\"HandheldFriendly\" content=\"True\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\">
    <meta name=\"theme-color\" content=\"#3b0f68\">

    <!-- HTTP Preconnect -->
    <link rel=\"preconnect\" href=\"https://pageview-notify.rdstation.com.br\" />
    <link rel=\"preconnect\" href=\"https://w-cdn.pzw.io\" />
    <link rel=\"preconnect\" href=\"https://widget.huggy.io\" />
    <link rel=\"preconnect\" href=\"https://w-cdn.huggy.io\" />
    <link rel=\"preconnect\" href=\"https://rec.smartlook.com\" />
    <link rel=\"preconnect\" href=\"https://googleads.g.doubleclick.net\" />
    <link rel=\"preconnect\" href=\"https://staticxx.facebook.com\" />
    <link rel=\"preconnect\" href=\"https://connect.facebook.net\" />
    <link rel=\"preconnect\" href=\"https://static.huggy.io\" />
    <link rel=\"preconnect\" href=\"https://www.googleadservices.com\" />
    <link rel=\"preconnect\" href=\"https://www.google-analytics.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />

    <!-- TODO: Integrar código e tags do antigo ACFAM aqui -->

    <!-- RD Station -->
    ";
        // line 31
        echo $this->getAttribute(($context["settings"] ?? null), "rd_scripts", array());
        echo "

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-80310575-1\"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-80310575-1');
    </script>

    <!-- Tags Header -->
    ";
        // line 47
        echo $this->getAttribute(($context["tags"] ?? null), "head", array());
        echo "

    <!-- Detectar Javascript -->
    <script type=\"text/javascript\">
        document.getElementsByClassName('no-js')[0].className = '';
    </script>
</head>

<body id=\"";
        // line 55
        echo twig_escape_filter($this->env, ($context["page_id"] ?? null), "html", null, true);
        echo "\">
    <div class=\"js-loading\"
            style=\"display: -ms-flexbox;display: flex;background:#3b0f68;position: fixed;top: 0;left: 0;right: 0;bottom: 0;z-index: 99999999;-ms-flex-align: center!important;align-items: center!important;-ms-flex-pack: center!important;justify-content: center!important;\">
            <img src=\"/assets/images/loading.svg\" /></div>
    <div id=\"app\">
        <!-- Menu -->
        <div class=\"nav-container-mobile\">
            <nav id=\"acfam-nav-main\" class=\"navbar navbar-expand-lg\">
                <div class=\"container flex-mobile justify-content-around\">
                    <!-- Logo no menu -->
                    <a class=\"navbar-brand\" href=\"/\"><i class=\"icone logo-fam\"></i></a>
                    <span class=\"fam-texto\"></span>

                    <!-- Botão para exibir/ocultar menu no mobile -->
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#acfam-nav-main-inner\"
                        aria-controls=\"acfam-nav-main-inner\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <i class=\"fa fa-bars\"></i>
                    </button>

                    <!-- Aqui começa o menu, tudo neste elemento será ocultado no mobile -->
                    <div id=\"acfam-nav-main-inner\" class=\"collapse navbar-collapse\">
                        <ul class=\"navbar-nav ml-auto\">
                            <li class=\"nav-item\">
                                <a target=\"_blank\" class=\"nav-link\" href=\"https://fam.br\">Portal FAM</a>
                            </li>
                            ";
        // line 80
        if ($this->getAttribute(($context["opcoes"] ?? null), "url_cursos", array())) {
            // line 81
            echo "                            <li class=\"nav-item\">
                                <a target=\"_blank\" class=\"nav-link\" href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute(($context["opcoes"] ?? null), "url_cursos", array()), "html", null, true);
            echo "\">Guia de Cursos</a>
                            </li>
                            ";
        }
        // line 85
        echo "                            ";
        if ($this->getAttribute(($context["opcoes"] ?? null), "url_edital", array())) {
            // line 86
            echo "                            <li class=\"nav-item\">
                                <a target=\"_blank\" class=\"nav-link\" href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute(($context["opcoes"] ?? null), "url_edital", array()), "html", null, true);
            echo "\">Edital</a>
                            </li>
                            ";
        }
        // line 90
        echo "                            ";
        // line 93
        echo "                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        ";
        // line 99
        $this->displayBlock('body', $context, $blocks);
        // line 100
        echo "
        <!-- Rodapé -->
        <footer>
            <div class=\"container\">
                <p>Atendimento das 9 às 21 horas";
        // line 104
        if ($this->getAttribute(($context["opcoes"] ?? null), "url_edital", array())) {
            echo " | <a target=\"_blank\"
                        href=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute(($context["opcoes"] ?? null), "url_edital", array()), "html", null, true);
            echo "\">Edital</a>";
        }
        if ($this->getAttribute(($context["opcoes"] ?? null), "url_cursos", array())) {
            echo " | <a
                        target=\"_blank\" href=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute(($context["opcoes"] ?? null), "url_cursos", array()), "html", null, true);
            echo "\">Guia de Cursos</a>";
        }
        echo "</p>
                <div class=\"social\">
                    <a target=\"_blank\" href=\"http://instagram.com/famamericana\"><i class=\"fa fa-instagram\"></i></a>
                    <a target=\"_blank\" href=\"http://fb.com/famamericana\"><i class=\"fa fa-facebook\"></i></a>
                    <a target=\"_blank\" href=\"mailto:vestibular@fam.br\"><i class=\"fa fa-envelope-o\"></i></a>
                    <a class=\"has-text\" target=\"_blank\" href=\"tel:08007712449\">
                        <i class=\"fa fa-phone\"></i>
                        0800 771 2449
                    </a>
                    <a class=\"has-text\" target=\"_blank\" href=\"https://api.whatsapp.com/send?phone=551994379555\">
                        <i class=\"fa fa-whatsapp\"></i>
                        WhatsFAM (19) 99437-9555
                    </a>
                </div>
            </div>
        </footer>
    </div>

    <!-- Styles -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\"
        crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" type=\"text/css\"
        href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/main.css\">

    <!-- Bootstrap -->
    <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"
        integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\">
    </script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.5/lodash.min.js\" crossorigin=\"anonymous\">
    </script>

    <script>
        \$(document).ready(function () {
            if (\$(\".js-loading\").length > 0) {
                setTimeout(function () {
                    \$(\".js-loading\").fadeOut();
                }, 1000);
            }
        });
    </script>
    <!-- Helper Scripts -->
    <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/vue\"></script>
    <script type=\"text/javascript\" src=\"/assets/js/vue.the-mask.js\"></script>

    <!-- Facebook Connect -->
    <script>
        window.fbAsyncInit = function () {
            FB.init({
                appId: '1395394967220729',
                xfbml: true,
                version: 'v2.9'
            });
            FB.AppEvents.logPageView();
        };

        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = \"//connect.facebook.net/pt_BR/sdk.js\";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- Main Script -->
    <script type=\"text/javascript\" src=\"/assets/js/main.js\"></script>

    <!-- Page Scripts -->
    ";
        // line 180
        $this->displayBlock('scripts', $context, $blocks);
        // line 181
        echo "
    <!-- Tags Footer -->
    ";
        // line 183
        echo $this->getAttribute(($context["tags"] ?? null), "foot", array());
        echo "

    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i\" rel=\"stylesheet\">

    <!-- Widget Huggy -->
    <script>
        var \$_PowerZAP = {
            defaultCountry: '+55',
            widget_id: '2419',
            company: \"7496\"
        };
        (function (i, s, o, g, r, a, m) {
            i[r] = {
                context: {
                    id: '494e5b9614f4ba877ae1913c167926aa'
                }
            };
            a = o;
            o = s.createElement(o);
            o.async = 1;
            o.src = g;
            m = s.getElementsByTagName(a)[0];
            m.parentNode.insertBefore(o, m);
        })(window, document, 'script', 'https://w-cdn.huggy.io/widget.min.js?v=6.14.2', 'pwz');
    </script>
</body>

</html>";
    }

    // line 99
    public function block_body($context, array $blocks = array())
    {
    }

    // line 180
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
        return array (  286 => 180,  281 => 99,  248 => 183,  244 => 181,  242 => 180,  163 => 106,  156 => 105,  152 => 104,  146 => 100,  144 => 99,  136 => 93,  134 => 90,  128 => 87,  125 => 86,  122 => 85,  116 => 82,  113 => 81,  111 => 80,  83 => 55,  72 => 47,  53 => 31,  21 => 1,);
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

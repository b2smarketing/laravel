<?php

/* TOP::includes.head */
class __TwigTemplate_0447b6d9d72d1f7771f855d1574a37d01c00003a88e429f5e2ddd2636d731b53 extends TwigBridge\Twig\Template
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
        echo "<meta charset=\"utf-8\"/>
<title>FAM - Teste de Orientação Profissional</title>
<meta name=\"keywords\" content=\"fam, teste, faculdade de americana, americana, teste de orientação, orientacao, profissional\">  
<link rel=\"stylesheet\" href=\"css/animate.css\" />
<link rel=\"stylesheet\" href=\"css/style.css\" />
<link rel=\"stylesheet\" href=\"css/grids.css\" />
<link rel=\"stylesheet\" href=\"css/loading-bar.css\" />
<meta name=\"viewport\"  content=\"width=device-width, initial-scale=1.0\">
<link rel=\"shortcut icon\" href=\"img/favicon.png\" type=\"image/png\" />
<meta property=\"og:type\" content=\"website\" />
<meta property=\"og:title\" content=\"FAM - Teste de Orientação Profissional\" />
<meta property=\"og:description\" content=\"\" />
<meta http-equiv=\"Cache-Control\" content=\"public\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"css/updated.css\" />

<!-- Google Code for p&aacute;gina inicial - TOP Conversion Page -->
<script type=\"text/javascript\">
/* <![CDATA[ */
var google_conversion_id = 858546155;
var google_conversion_label = \"j-DUCK6bhIABEOu_sZkD\";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type=\"text/javascript\" src=\"//www.googleadservices.com/pagead/conversion.js\">
</script>
<noscript>
<div style=\"display:inline;\">
<img height=\"1\" width=\"1\" style=\"border-style:none;\" alt=\"\" src=\"//www.googleadservices.com/pagead/conversion/858546155/?label=j-DUCK6bhIABEOu_sZkD&amp;guid=ON&amp;script=0\"/>
</div>
</noscript>

";
        // line 32
        if (($context["custom_branding"] ?? null)) {
            // line 33
            echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, ($context["custom_branding"] ?? null), "html", null, true);
            echo "/style.css\" />
";
        }
        // line 35
        echo "
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script type=\"text/javascript\">
window.fbAsyncInit = function() {
\tFB.init({
\t\tappId      : '1395394967220729',
\t\txfbml      : true,
\t\tversion    : 'v2.9'
\t});
\tFB.AppEvents.logPageView();
};

(function(d, s, id){
\tvar js, fjs = d.getElementsByTagName(s)[0];
\tif (d.getElementById(id)) {return;}
\tjs = d.createElement(s); js.id = id;
\tjs.src = \"//connect.facebook.net/pt_BR/sdk.js\";
\tfjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-80310575-6\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-80310575-6');
</script>";
    }

    public function getTemplateName()
    {
        return "TOP::includes.head";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 35,  54 => 33,  52 => 32,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "TOP::includes.head", "");
    }
}

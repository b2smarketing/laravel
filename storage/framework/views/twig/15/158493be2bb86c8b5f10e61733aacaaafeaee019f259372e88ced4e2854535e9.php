<?php

/* /var/www/app/ambiente_conversao/tecfam2019.1sem-teste/views//index.twig */
class __TwigTemplate_92cc88fc40e01c4aae788caa887086b988de61928b01ca484cf1587951fd33d1 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AmbienteConversao::layout", "/var/www/app/ambiente_conversao/tecfam2019.1sem-teste/views//index.twig", 2);
        $this->blocks = array(
            'pagina' => array($this, 'block_pagina'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AmbienteConversao::layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["class"] = "home open";
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_pagina($context, array $blocks = array())
    {
        // line 4
        echo "<link rel=\"stylesheet\" href=\"/css/home.css\" />
<header class=\"banner-home\">
\t<div class=\"layout\">
\t\t<div id=\"home-form\">
\t\t\t<div class=\"center\">
\t\t\t\t<div class=\"title\">
\t\t\t\t\t<!--<h1>Faculdade de Americana</h1>
\t\t\t\t\t<em>#VOCÊNOTOPO</em>
\t\t\t\t\t<h2>Vestibular de verão 2017</h2>-->
\t\t\t\t</div>
\t\t\t\t<div class=\"form\">
\t\t\t\t";
        // line 15
        if (($context["error"] ?? null)) {
            // line 16
            echo "\t\t\t\t\t<p>
\t\t\t\t\t\t<strong>Erro:</strong>
\t\t\t\t\t\t<span>";
            // line 18
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "</span>
\t\t\t\t\t</p>
\t\t\t\t";
        }
        // line 21
        echo "\t\t\t\t\t<input onclick=\"oneclick_start();\" class=\"input\" type=\"submit\" value=\"Inscreva-se!\" />
\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</header>
<main>
\t<div id=\"loader\"><div class=\"uil-ripple-css\"><div></div><div></div></div></div>
\t<form action=\"/inscricao\" method=\"post\" class=\"middle-container\">
\t\t";
        // line 31
        echo csrf_field();
        echo "
\t\t<div class=\"container\">
\t\t\t<section class=\"step-1\">
\t\t\t\t<div class=\"content center\">
\t\t\t\t\t<img class=\"logo\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["url_root"] ?? null), "html", null, true);
        echo "/img/voce-com-tudo.png\" />
\t\t\t\t\t<input id=\"input-nome\" required type=\"text\" name=\"aluno[nome]\" placeholder=\"Nome Completo\" />
\t\t\t\t\t<div style=\"font-style:italic;margin:2em;\">- ou -</div>
\t\t\t\t\t<fb:login-button onclick=\"fb_login_start\" onlogin=\"fb_login\" scope=\"public_profile,email\" max-rows=\"1\" size=\"large\" button-type=\"continue_with\" show-faces=\"false\" auto-logout-link=\"false\" use-continue-as=\"true\"></fb:login-button>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<section class=\"step-2\">
\t\t\t\t<div class=\"content center\">
\t\t\t\t\t<input id=\"input-email\" required type=\"email\" name=\"aluno[email]\" placeholder=\"E-mail\" />
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<section class=\"step-3\">
\t\t\t\t<div class=\"content center\">
\t\t\t\t\t<input id=\"input-cpf\" required type=\"text\" name=\"aluno[cpf]\" placeholder=\"Insira seu CPF\" data-mask=\"999.999.999-99\" maxlength=\"14\" />
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<section class=\"step-4\">
\t\t\t\t<div class=\"content center\">
\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t<select id=\"home-curso\" name=\"curso\">
\t\t\t\t\t\t\t<option>Escolha seu curso</option>
\t\t\t\t\t\t\t";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cursos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
            // line 57
            echo "\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "codigo", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "nome", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t</div>
\t</form>
</main>
<div id=\"popup-video\">
\t<div class=\"outer\">
\t\t<div class=\"inner\">
\t\t\t<span id=\"popup-close\"><i class=\"fa fa-close\"></i></span>
\t\t\t<iframe></iframe>
\t\t</div>
\t</div>
</div>
";
    }

    // line 75
    public function block_scripts($context, array $blocks = array())
    {
        // line 76
        echo "<script type=\"text/javascript\">
\$(document).ready(function () {
\tvar sliderVideos = new Swiper ('#slider-videos', {
      slidesPerView: 5,
      direction: 'horizontal',
      loop: true,
      spaceBetween: 50,
      autoplay: 10000,
      prevButton: '.swiper-button-prev',
      nextButton: '.swiper-button-next',
      breakpoints: {
      \t1900: {
      \t\tslidesPerView: 4
      \t},
      \t1600: {
      \t\tslidesPerView: 3
      \t},
      \t950: {
      \t\tslidesPerView: 1,
      \t\tautoplay: false
      \t}
      }
    });
});
</script>
<script src=\"/js/home.js\"></script>
";
        // line 102
        if (($context["error"] ?? null)) {
            // line 103
            echo "<script>alert('";
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "');</script>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/app/ambiente_conversao/tecfam2019.1sem-teste/views//index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 103,  168 => 102,  140 => 76,  137 => 75,  118 => 59,  107 => 57,  103 => 56,  79 => 35,  72 => 31,  60 => 21,  54 => 18,  50 => 16,  48 => 15,  35 => 4,  32 => 3,  28 => 2,  26 => 1,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/ambiente_conversao/tecfam2019.1sem-teste/views//index.twig", "");
    }
}

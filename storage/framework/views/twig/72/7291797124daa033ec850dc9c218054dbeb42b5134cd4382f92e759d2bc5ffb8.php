<?php

/* /var/www/app/app/Modules/Admin/views/login.twig */
class __TwigTemplate_9a879cae86a3d3b1f39f8281ba14df44345b39f4cf3827804f87b17b816db32c extends TwigBridge\Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>Login</title>

    <!-- Bootstrap -->
    <link href=\"../vendors/bootstrap/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- Font Awesome -->
    <link href=\"../vendors/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\">
    <!-- NProgress -->
    <link href=\"../vendors/nprogress/nprogress.css\" rel=\"stylesheet\">
    <!-- Animate.css -->
    <link href=\"../vendors/animate.css/animate.min.css\" rel=\"stylesheet\">

    <!-- Custom Theme Style -->
    <link href=\"../build/css/custom.min.css\" rel=\"stylesheet\">

    <!-- Skin -->
    <link href=\"/build/css/skin.css\" rel=\"stylesheet\">
  </head>

  <body class=\"login\">
    <div>
      <div class=\"login_wrapper\">
        <div class=\"animate form login_form\">
          <section class=\"login_content\">

            <div class=\"branding logo\"></div>
              
            <form method=\"post\" action=\"";
        // line 36
        echo $this->env->getExtension('TwigBridge\Extension\Laravel\Url')->url("/login");
        echo "\">
              ";
        // line 37
        echo csrf_field();
        echo "

              <h1>Entrar</h1>
              <div>
                <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"E-mail\" required autofocus />
              </div>
              <div>
                <input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"Senha\" required />
              </div>
              ";
        // line 51
        echo "              <div>
                <input class=\"btn btn-success submit\" type=\"submit\" value=\"Entrar\" />
                <!-- <a class=\"btn btn-default submit\" href=\"index.html\">Entrar</a> -->
                <a class=\"reset_pass\" href=\"#\">Esqueceu a senha?</a>
              </div>

              <div class=\"clearfix\"></div>

              <div class=\"separator\">
                <div class=\"clearfix\"></div>
                <br />

                <div>
                  <p>&copy; ";
        // line 64
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "/var/www/app/app/Modules/Admin/views/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 64,  72 => 51,  60 => 37,  56 => 36,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/login.twig", "");
    }
}

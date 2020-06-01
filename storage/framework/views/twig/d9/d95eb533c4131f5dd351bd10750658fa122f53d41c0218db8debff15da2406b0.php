<?php

/* /var/www/app/app/Modules/Admin/views/Modulos/index.twig */
class __TwigTemplate_4cc58118fabaca2ea712d311b8ff33e4e374dc9279d48fe71eb2624d34ff0f5e extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::layout", "/var/www/app/app/Modules/Admin/views/Modulos/index.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Admin::layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["form"] = $this->loadTemplate("Admin::helpers.form_modulo", "/var/www/app/app/Modules/Admin/views/Modulos/index.twig", 3);
        // line 5
        $context["title"] = "Módulos";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"right_col\" role=\"main\">
\t<div class=\"\">
\t\t<div class=\"row\">
          <div class=\"col-md-12 col-sm-12 col-xs-12\">
              <div class=\"x_panel\">
                <div class=\"x_title\">
                  <h2>Módulos Ativos</h2>
                  <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">

                  <table class=\"table table-striped\">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Domínio</th>
                        <th>Usar WWW?</th>
                        <th>Sempre usar HTTPS/SSL?</th>
                        <th>Diretório</th>
                        <th>Módulo</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                  ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["modulos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 33
            echo "                      <tr>
                        <th scope=\"row\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "id", array()), "html", null, true);
            echo "</th>
                        <td><a href=\"http://";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "domain", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "root", array()), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "domain", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 36
            if ($this->getAttribute($context["module"], "www", array())) {
                echo "Sim";
            } else {
                echo "Não";
            }
            echo "</td>
                        <td>";
            // line 37
            if ($this->getAttribute($context["module"], "force_ssl", array())) {
                echo "Sim";
            } else {
                echo "Não";
            }
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "root", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["modulos_disponivel"] ?? null), $this->getAttribute($context["module"], "namespace", array()), array(), "array"), "name", array()), "html", null, true);
            echo "</td>
                        <td>
                        \t<a href=\"/modulos/";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "id", array()), "html", null, true);
            echo "/\" title=\"Visualizar\"><i class=\"fa fa-eye\"></i></a>
                        \t<a href=\"/modulos/";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "id", array()), "html", null, true);
            echo "/edit\" title=\"Editar\"><i class=\"fa fa-edit\"></i></a>
                        </td>
                      </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                    </tbody>
                  </table>

                </div>
              </div>
            </div>

            <div class=\"clearfix\"></div>
        </div>

    \t";
        // line 56
        echo $context["form"]->geteditar_modulo(null, ($context["modulos_disponivel"] ?? null));
        echo "

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/app/app/Modules/Admin/views/Modulos/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 56,  119 => 46,  109 => 42,  105 => 41,  100 => 39,  96 => 38,  88 => 37,  80 => 36,  73 => 35,  69 => 34,  66 => 33,  62 => 32,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/Modulos/index.twig", "");
    }
}

<?php

/* /var/www/app/app/Modules/Admin/views/Unidades/index.twig */
class __TwigTemplate_eb415240dd9e98c865285faade90397b479f3851831958b28a99e9b936209357 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::layout", "/var/www/app/app/Modules/Admin/views/Unidades/index.twig", 1);
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
        $context["form"] = $this->loadTemplate("Admin::helpers.form_modulo", "/var/www/app/app/Modules/Admin/views/Unidades/index.twig", 3);
        // line 5
        $context["title"] = "Unidades";
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
                  <h2>Unidades</h2>
                  <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">

                  <table class=\"table table-striped\">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Unidade</th>
                        <th>Endereço</th>
                        <th>Telefone</th>
                        <th>E-mail</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                  ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["unidades"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["unidade"]) {
            // line 32
            echo "                      <tr>
                        <th scope=\"row\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["unidade"], "id", array()), "html", null, true);
            echo "</th>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["unidade"], "nome", array()), "html", null, true);
            echo "</td>
                        <td>
                          <a href=\"https://www.google.com.br/maps/@";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unidade"], "coordenadas", array()), "latitude", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unidade"], "coordenadas", array()), "longitude", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unidade"], "coordenadas", array()), "zoom", array()), "html", null, true);
            echo "z?q=loc:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unidade"], "coordenadas", array()), "latitude", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unidade"], "coordenadas", array()), "longitude", array()), "html", null, true);
            echo "&hl=pt-BR\" target=\"_blank\">
                          ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["unidade"], "endereco_completo", array()), "html", null, true);
            echo "
                          </a>
                        </td>
                        <td><a href=\"tel:+55";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["unidade"], "telefone", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["unidade"], "telefone", array()), "html", null, true);
            echo "</a></td>
                        <td><a href=\"mailto:";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["unidade"], "email", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["unidade"], "email", array()), "html", null, true);
            echo "</a></td>
                        <td>
                        \t<a href=\"/modulos/";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute(($context["module"] ?? null), "id", array()), "html", null, true);
            echo "/\" title=\"Visualizar\"><i class=\"fa fa-eye\"></i></a>
                        \t<a href=\"/modulos/";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute(($context["module"] ?? null), "id", array()), "html", null, true);
            echo "/edit\" title=\"Editar\"><i class=\"fa fa-edit\"></i></a>
                        </td>
                      </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unidade'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                    </tbody>
                  </table>

                </div>
              </div>
            </div>

            <div class=\"clearfix\"></div>
        </div>

    \t";
        // line 59
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/app/app/Modules/Admin/views/Unidades/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 59,  122 => 48,  112 => 44,  108 => 43,  101 => 41,  95 => 40,  89 => 37,  77 => 36,  72 => 34,  68 => 33,  65 => 32,  61 => 31,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/Unidades/index.twig", "");
    }
}

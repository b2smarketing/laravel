<?php

/* /var/www/app/app/Modules/Admin/views/Developer/Migrations.twig */
class __TwigTemplate_c392431d25d0934c562a9e2cc09e9d9d958b07a0167b62817e6090db8488179a extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::layout", "/var/www/app/app/Modules/Admin/views/Developer/Migrations.twig", 1);
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
        $context["title"] = "Migrations";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"right_col\" role=\"main\">
  <div class=\"\">
    <div class=\"row\">
          <div class=\"col-md-12 col-sm-12 col-xs-12\">
              <div class=\"x_panel\">
                <div class=\"x_title\">
                  <h2>Servidor</h2>
                  <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
        
                  <div>
                    <p>Funções relacionadas ao servidor. Use com cuidado.</p>
                    <form target=\"_blank\" method=\"post\" action=\"/dev/server/flush-pagespeed-cache\">
                      ";
        // line 20
        echo csrf_field();
        echo "
                      <input type=\"submit\" class=\"btn btn-danger\" value=\"Limpar Cache do Pagespeed\" />
                    </form>
                  </div>

                </div>
              </div>
            </div>

            <div class=\"clearfix\"></div>
        </div>

    </div>

\t<div class=\"\">
    <div class=\"row\">
          <div class=\"col-md-12 col-sm-12 col-xs-12\">
              <div class=\"x_panel\">
                <div class=\"x_title\">
                  <h2>Migrações de Base</h2>
                  <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
        
                  <div>
                    <form method=\"post\" action=\"/dev/migrations/base\">
                      ";
        // line 46
        echo csrf_field();
        echo "
                      <p>As migrações de base são executadas automaticamente pelo sistema, mas podem ser forçadas através deste botão, em alguma eventualidade.</p>
                      <input type=\"submit\" class=\"btn btn-primary\" value=\"Migrar Bases\" />
                    </form>
                  </div>

                </div>
              </div>
            </div>

            <div class=\"clearfix\"></div>
        </div>

    </div>

\t<div class=\"\">
\t\t<div class=\"row\">
          <div class=\"col-md-12 col-sm-12 col-xs-12\">
              <div class=\"x_panel\">
                <div class=\"x_title\">
                  <h2>Migrations</h2>
                  <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">

                  <table class=\"table table-striped\">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Migration</th>
                        <th>Lote/Batch</th>
                      </tr>
                    </thead>
                    <tbody>
                  ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["migrations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["migration"]) {
            // line 81
            echo "                      <tr>
                        <th scope=\"row\">";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["migration"], "id", array()), "html", null, true);
            echo "</th>
                        <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["migration"], "migration", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["migration"], "batch", array()), "html", null, true);
            echo "</td>
                      </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['migration'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                    </tbody>
                  </table>
        
                  <div>
                    <form method=\"post\" action=\"/dev/migrations\">
                      ";
        // line 92
        echo csrf_field();
        echo "
                      <input type=\"submit\" class=\"btn btn-primary\" value=\"Rodar Migrations\" />
                    </form>
                  </div>

                </div>
              </div>
            </div>

            <div class=\"clearfix\"></div>
        </div>

    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "/var/www/app/app/Modules/Admin/views/Developer/Migrations.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 92,  140 => 87,  131 => 84,  127 => 83,  123 => 82,  120 => 81,  116 => 80,  79 => 46,  50 => 20,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/Developer/Migrations.twig", "");
    }
}

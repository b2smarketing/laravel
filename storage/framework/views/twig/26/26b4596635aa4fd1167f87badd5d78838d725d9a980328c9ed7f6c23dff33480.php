<?php

/* /var/www/app/app/Modules/Admin/views/Graficos/GraficoBases.twig */
class __TwigTemplate_dc78d987710288c468e9a62602addc03c6d916f154fc01ec1891a536da8f54dc extends TwigBridge\Twig\Template
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
        echo "<div class=\"row\">
  <div class=\"col-md-12 col-sm-12 col-xs-12\">
    <div class=\"dashboard_graph x_panel\">
      <div class=\"row x_title\">
        <div class=\"col-md-6\">
          <h3>";
        // line 6
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h3>
        </div>
      </div>
      <div class=\"x_content\">
        <div>
          <div id=\"grafico_";
        // line 11
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" style=\"width: 100%;\">
            <table class=\"panorama_cursos table-striped\">
              <thead>
                <tr>
                  <th>Base</th>
                  <th>Código</th>
                  <th>Status</th>
                  <th>Qtd. Leads</th>
                </tr>
              </thead>
              <tbody>
            ";
        // line 22
        $context["last"] = "";
        // line 23
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["id"] => $context["total"]) {
            // line 24
            echo "            ";
            $context["linha"] = $this->getAttribute($this->getAttribute(($context["helpers"] ?? null), "bases", array()), $context["id"], array(), "array");
            // line 25
            echo "                <tr>
                  <td class=\"base\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["linha"] ?? null), "tipo", array()), "base_id", array()), "html", null, true);
            echo "</td>
                  <td class=\"codigo\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["linha"] ?? null), "tipo", array()), "codigo", array()), "html", null, true);
            echo "</td>
                  <td class=\"nome\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["linha"] ?? null), "tipo", array()), "nome", array()), "html", null, true);
            echo "</td>
                  <td class=\"valor\">";
            // line 29
            echo twig_escape_filter($this->env, $context["total"], "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<style type=\"text/css\" media=\"screen\">

/*.panorama_cursos { width: 100%; }
.panorama_cursos td,
.panorama_cursos th {
  padding: 1em;
  text-align: center;
}
.panorama_cursos td.valor {
  position: relative;
  z-index: 1;
}
.panorama_cursos td.valor:before {
  content: ' ';
  display: block;
  position: absolute;
  top: 50%;
  left: 50%;
  width: calc(100% - 1em);
  height: calc(100% - 1em);
  z-index: -1;
  border: 1px solid;
  border-radius: 0.8em;
  transform: translate(-50%, -50%);
}*/
</style>";
    }

    public function getTemplateName()
    {
        return "/var/www/app/app/Modules/Admin/views/Graficos/GraficoBases.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 32,  73 => 29,  69 => 28,  65 => 27,  61 => 26,  58 => 25,  55 => 24,  50 => 23,  48 => 22,  34 => 11,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/Graficos/GraficoBases.twig", "");
    }
}

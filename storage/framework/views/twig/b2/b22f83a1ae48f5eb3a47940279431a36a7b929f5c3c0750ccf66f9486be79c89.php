<?php

/* /var/www/app/app/Modules/Admin/views/Provas/Locais/view.twig */
class __TwigTemplate_1364b44ce1f891fa81e3ecca8a2789454bbaeaba971d637bff5b9491e12eeb9b extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::layout", "/var/www/app/app/Modules/Admin/views/Provas/Locais/view.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Admin::layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["form"] = $this->loadTemplate("Admin::helpers.form_prova", "/var/www/app/app/Modules/Admin/views/Provas/Locais/view.twig", 3);
        // line 5
        $context["title"] = "Local de Prova";
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
                  <h2>Visualizando Local de Prova</h2>
                  <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">

                <div class=\"row\">
        \t\t\t\t\t<div class=\"col-md-6\">
        \t\t\t\t\t\t<label>Local:</label>
        \t\t\t\t\t\t<div>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["local"] ?? null), "local", array()), "html", null, true);
        echo "</div>
        \t\t\t\t\t</div>
        \t\t\t\t\t<div class=\"col-md-6\">
        \t\t\t\t\t\t<label>Unidade:</label>
        \t\t\t\t\t\t<div>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["local"] ?? null), "unidade", array()), "nome", array()), "html", null, true);
        echo "</div>
        \t\t\t\t\t</div>
        \t\t\t\t\t<div class=\"col-md-4\">
        \t\t\t\t\t\t<label>Endereço:</label>
        \t\t\t\t\t\t<div>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["local"] ?? null), "endereco", array()), "html", null, true);
        echo "</div>
        \t\t\t\t\t</div>
                  <div class=\"col-md-4\">
                    <label>Telefone:</label>
                    <div>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["local"] ?? null), "telefone", array()), "html", null, true);
        echo "</div>
                  </div>
                  <div class=\"col-md-4\">
                    <label>E-mail:</label>
                    <div>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["local"] ?? null), "email", array()), "html", null, true);
        echo "</div>
                  </div>
                </div>

                </div>
              </div>
            </div>

            <div class=\"clearfix\"></div>
        </div>

\t\t<div class=\"row\">
          <div class=\"col-md-12 col-sm-12 col-xs-12\">
              <div class=\"x_panel\">
                <div class=\"x_title\">
                  <h2>Datas de Provas</h2>
                  <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">

                  <table class=\"table table-striped\" id=\"tabela_datas\">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Data</th>
                        <th>Status</th>
                        <th>Ocupadas</th>
                        <th>Máximo</th>
                        <th>Restantes</th>
                        <th>Aproveitamento</th>
                      </tr>
                    </thead>
                    <tbody>
\t\t\t\t\t";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["local"] ?? null), "datas_provas", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 72
            echo "\t\t\t\t\t\t<tr class=\"";
            if ($this->getAttribute($context["data"], "lotado", array())) {
                echo "info";
            } else {
                if (($this->getAttribute($context["data"], "vagas_ocupadas", array()) < ($this->getAttribute($context["data"], "maximo", array()) / 10))) {
                    echo "warning";
                } else {
                    echo "success";
                }
            }
            echo "\">
\t\t\t\t\t\t\t<th scope=\"row\">";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "</th>
\t\t\t\t\t\t\t<td><a target=\"_blank\" href=\"/provas/datas/";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "hora", array()), "d/m/Y H:i"), "html", null, true);
            echo "</a></td>
\t\t\t\t\t\t\t<td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "status", array()), "html", null, true);
            echo "
              <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "vagas_ocupadas", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "maximo", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "vagas", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "aproveitamento", array()), "html", null, true);
            echo "%</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                    </tbody>
                  </table>

              </div>
            </div>

            <div class=\"clearfix\"></div>
        </div>

    </div>
</div>
";
    }

    // line 95
    public function block_scripts($context, array $blocks = array())
    {
        // line 96
        echo "
<script>
\$(document).ready(function () {
  \$('#tabela_datas').DataTable( {
    responsive: true
  });
});
</script>

";
    }

    public function getTemplateName()
    {
        return "/var/www/app/app/Modules/Admin/views/Provas/Locais/view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 96,  184 => 95,  169 => 82,  160 => 79,  156 => 78,  152 => 77,  148 => 76,  144 => 75,  138 => 74,  134 => 73,  121 => 72,  117 => 71,  81 => 38,  74 => 34,  67 => 30,  60 => 26,  53 => 22,  37 => 8,  34 => 7,  30 => 1,  28 => 5,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/Provas/Locais/view.twig", "");
    }
}

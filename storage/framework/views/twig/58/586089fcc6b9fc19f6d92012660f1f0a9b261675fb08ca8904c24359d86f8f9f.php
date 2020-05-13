<?php

/* /var/www/app/app/Modules/Admin/views/Provas/Locais/index.twig */
class __TwigTemplate_7073690283fd22f7ff348247e1efc32057dd6a66828213ce03532e3aadcbc550 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::layout", "/var/www/app/app/Modules/Admin/views/Provas/Locais/index.twig", 1);
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
        $context["form"] = $this->loadTemplate("Admin::helpers.form_prova", "/var/www/app/app/Modules/Admin/views/Provas/Locais/index.twig", 3);
        // line 5
        $context["title"] = "Locais de Prova";
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
                  <h2>Locais de Prova</h2>
                  <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">

                  <table class=\"table table-striped\" id=\"tabela_locais\">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Unidade</th>
                        <th>Local</th>
                        <th>Endereço</th>
                        <th>Telefone</th>
                        <th>E-mail</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["unidades"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["unidade"]) {
            // line 33
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["unidade"], "locais_provas", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["local"]) {
                // line 34
                echo "                            <tr>
                              <th scope=\"row\">";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "id", array()), "html", null, true);
                echo "</th>
                              <td><a target=\"_blank\" href=\"/unidades/";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["local"], "unidade", array()), "id", array()), "html", null, true);
                echo "/\"a>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["local"], "unidade", array()), "nome", array()), "html", null, true);
                echo "</a></td>
                              <td>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "local", array()), "html", null, true);
                echo "</td>
                              <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "endereco", array()), "html", null, true);
                echo "</td>
                              <td>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "telefone", array()), "html", null, true);
                echo "</td>
                              <td>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "email", array()), "html", null, true);
                echo "</td>
                              <td>
                              \t<a href=\"/provas/locais/";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "id", array()), "html", null, true);
                echo "/\" title=\"Visualizar\"><i class=\"fa fa-eye\"></i></a>
                              \t<a href=\"/provas/locais/";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "id", array()), "html", null, true);
                echo "/edit\" title=\"Editar\"><i class=\"fa fa-edit\"></i></a>
                              </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['local'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                      ";
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

\t\t<div class=\"row\">
\t    \t";
        // line 59
        echo $context["form"]->geteditar_locais_provas(null, ($context["unidades"] ?? null));
        echo "
\t    </div>

    </div>
</div>
";
    }

    // line 66
    public function block_scripts($context, array $blocks = array())
    {
        // line 67
        echo "<!-- FullCalendar -->
<script>
  \$(window).load(function() {

    \$('#tabela_locais').DataTable( {
      responsive: true
    });
  });
</script>
<!-- /FullCalendar -->
";
    }

    public function getTemplateName()
    {
        return "/var/www/app/app/Modules/Admin/views/Provas/Locais/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 67,  145 => 66,  135 => 59,  122 => 48,  116 => 47,  106 => 43,  102 => 42,  97 => 40,  93 => 39,  89 => 38,  85 => 37,  79 => 36,  75 => 35,  72 => 34,  67 => 33,  63 => 32,  37 => 8,  34 => 7,  30 => 1,  28 => 5,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/Provas/Locais/index.twig", "");
    }
}

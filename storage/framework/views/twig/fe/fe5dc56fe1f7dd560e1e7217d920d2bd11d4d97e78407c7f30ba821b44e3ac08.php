<?php

/* /var/www/app/app/Modules/Admin/views/Financeiro/Fornecedores/index.twig */
class __TwigTemplate_42e91df711a1d70040b03d4342c62e8e68b3bb2fb82256111ed5f66ef494e65f extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::layout", "/var/www/app/app/Modules/Admin/views/Financeiro/Fornecedores/index.twig", 1);
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
        $context["form"] = $this->loadTemplate("Admin::helpers.form_financeiro", "/var/www/app/app/Modules/Admin/views/Financeiro/Fornecedores/index.twig", 3);
        // line 5
        $context["title"] = "Fornecedores";
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
                  <h2>Fornecedores</h2>
                  <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">

                  <table class=\"table table-striped\" id=\"tabela_locais\">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>CNPJ</th>
                        <th>Nome Fantasia</th>
                        <th>Razão Social</th>
                        <th>E-Mail</th>
                        <th>Telefone</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fornecedores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["fornecedor"]) {
            // line 33
            echo "                          <tr>
                            <th scope=\"row\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["fornecedor"], "id", array()), "html", null, true);
            echo "</th>
                            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["fornecedor"], "cnpj", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["fornecedor"], "nome_fantasia", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["fornecedor"], "razao_social", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["fornecedor"], "email", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["fornecedor"], "fone", array()), "html", null, true);
            echo "</td>
                            <td>
                            \t<a href=\"/financeiro/fornecedores/";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["fornecedor"], "id", array()), "html", null, true);
            echo "/\" title=\"Visualizar\"><i class=\"fa fa-eye\"></i></a>
                            \t<a href=\"/financeiro/fornecedores/";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["fornecedor"], "id", array()), "html", null, true);
            echo "/edit\" title=\"Editar\"><i class=\"fa fa-edit\"></i></a>
                            </td>
                          </tr>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fornecedor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                    </tbody>
                  </table>

                </div>
              </div>
            </div>

            <div class=\"clearfix\"></div>
        </div>

\t    \t";
        // line 56
        echo $context["form"]->geteditar_fornecedor(null);
        echo "

    </div>
</div>
";
    }

    // line 62
    public function block_scripts($context, array $blocks = array())
    {
        // line 63
        echo "<!-- FullCalendar -->
<script>
  \$(window).load(function() {

    \$('#tabela_locais').DataTable( {
      responsive: true
    });

    \$('#cnpj').on('blur', () => {
      // Validar CNPJ
      let cnpj = \$('#cnpj').val();
      if (helpers.validarCNPJ(cnpj))
        helpers.error('#cnpj', null);
      else
        helpers.error('#cnpj', 'CNPJ Inválido!', 'remove');
    });
  });
</script>
<!-- /FullCalendar -->
";
    }

    public function getTemplateName()
    {
        return "/var/www/app/app/Modules/Admin/views/Financeiro/Fornecedores/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 63,  130 => 62,  121 => 56,  109 => 46,  99 => 42,  95 => 41,  90 => 39,  86 => 38,  82 => 37,  78 => 36,  74 => 35,  70 => 34,  67 => 33,  63 => 32,  37 => 8,  34 => 7,  30 => 1,  28 => 5,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/Financeiro/Fornecedores/index.twig", "");
    }
}

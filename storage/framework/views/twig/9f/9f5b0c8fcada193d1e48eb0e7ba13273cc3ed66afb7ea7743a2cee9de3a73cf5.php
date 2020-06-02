<?php

/* /var/www/app/app/Modules/Admin/views/Financeiro/Fornecedores/view.twig */
class __TwigTemplate_0f4f417ccb53ba17c44d466ad02eabe238ddba4fd7eb64c6a297c0bd096e58c2 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::layout", "/var/www/app/app/Modules/Admin/views/Financeiro/Fornecedores/view.twig", 1);
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
        $context["exibir"] = $this->loadTemplate("Admin::helpers.link_display", "/var/www/app/app/Modules/Admin/views/Financeiro/Fornecedores/view.twig", 3);
        // line 5
        $context["title"] = "Visualizar Fornecedor";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"right_col\" role=\"main\">
\t<div class=\"\">
    <div class=\"row\">
      <div class=\"col-md-12 col-sm-12 col-xs-12\">
          <div class=\"x_panel\">
            <div class=\"x_title\">
              <h2>Visualizando Fornecedor</h2>
              <div class=\"clearfix\"></div>
            </div>
            <div class=\"x_content\">

              <label>CNPJ:</label>
              <div>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["fornecedor"] ?? null), "cnpj", array()), "html", null, true);
        echo "</div>
              <br />

              <label>Razão Social:</label>
              <div>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["fornecedor"] ?? null), "razao_social", array()), "html", null, true);
        echo "</div>
              <br />
              
              <label>Nome Fantasia:</label>
              <div>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["fornecedor"] ?? null), "nome_fantasia", array()), "html", null, true);
        echo "</div>
              <br />

              <div>
                <a class=\"btn btn-success\" href=\"";
        // line 32
        echo $context["exibir"]->geturl_admin("financeiro/fornecedores", $this->getAttribute(($context["fornecedor"] ?? null), "id", array()), "edit");
        echo "\">Editar</a>
              </div>

            </div>
          </div>
        </div>

        <div class=\"clearfix\"></div>
    </div>

    <div class=\"row\">
      <div class=\"col-md-12 col-sm-12 col-xs-12\">
          <div class=\"x_panel\">
            <div class=\"x_title\">
              <h2>Informações de Contato</h2>
              <div class=\"clearfix\"></div>
            </div>
            <div class=\"x_content\">

            <div class=\"row\">
              <div class=\"col-md-4 col-sm-12 col-xs-12\">
                <label>Nome do Contato:</label>
                <div>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["fornecedor"] ?? null), "c_nome", array()), "html", null, true);
        echo "</div>
              </div>
              <div class=\"col-md-4 col-sm-12 col-xs-12\">
                <label>Cargo do Contato:</label>
                <div>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["fornecedor"] ?? null), "c_cargo", array()), "html", null, true);
        echo "</div>
              </div>
              <div class=\"col-md-4 col-sm-12 col-xs-12\">
                <label>Gerente do Contato:</label>
                <div>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute(($context["fornecedor"] ?? null), "c_gerente", array()), "html", null, true);
        echo "</div>
              </div>
            </div>
            <br />

            <div class=\"row\">
              <div class=\"col-md-6 col-sm-12 col-xs-12\">
                <label>Telefone:</label>
                <div>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute(($context["fornecedor"] ?? null), "fone", array()), "html", null, true);
        echo "</div>
              </div>
              <div class=\"col-md-6 col-sm-12 col-xs-12\">
                <label>Telefone Alternativo:</label>
                <div>";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute(($context["fornecedor"] ?? null), "fone_alt", array()), "html", null, true);
        echo "</div>
              </div>
            </div>
            <br />

            <div class=\"row\">
              <div class=\"col-md-6 col-sm-12 col-xs-12\">
                <label>E-mail:</label>
                <div>";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute(($context["fornecedor"] ?? null), "email", array()), "html", null, true);
        echo "</div>
              </div>
              <div class=\"col-md-6 col-sm-12 col-xs-12\">
                <label>E-mail Alternativo:</label>
                <div>";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute(($context["fornecedor"] ?? null), "email_alt", array()), "html", null, true);
        echo "</div>
              </div>
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
        return "/var/www/app/app/Modules/Admin/views/Financeiro/Fornecedores/view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 86,  139 => 82,  128 => 74,  121 => 70,  110 => 62,  103 => 58,  96 => 54,  71 => 32,  64 => 28,  57 => 24,  50 => 20,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/Financeiro/Fornecedores/view.twig", "");
    }
}

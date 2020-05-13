<?php

/* /var/www/app/app/Modules/Admin/views/Financeiro/Notas/view.twig */
class __TwigTemplate_2446c680f83f064a60d92283a4f0a01a80cecf9547deeea185fe3102ddfa36c3 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::layout", "/var/www/app/app/Modules/Admin/views/Financeiro/Notas/view.twig", 1);
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
        $context["tabela"] = $this->loadTemplate("Admin::helpers.tabela_financeiro", "/var/www/app/app/Modules/Admin/views/Financeiro/Notas/view.twig", 3);
        // line 4
        $context["exibir"] = $this->loadTemplate("Admin::helpers.link_display", "/var/www/app/app/Modules/Admin/views/Financeiro/Notas/view.twig", 4);
        // line 6
        $context["title"] = "Visualizar Nota Fiscal";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"right_col\" role=\"main\">
\t<div class=\"\">
    <div class=\"row\">
      <div class=\"col-md-12 col-sm-12 col-xs-12\">
          <div class=\"x_panel\">
            <div class=\"x_title\">
              <h2>Visualizando Nota Fiscal</h2>
              <div class=\"clearfix\"></div>
            </div>
            <div class=\"x_content\">

      \t\t\t<div class=\"row\">
      \t\t\t\t<div class=\"col-md-2 col-sm-12 col-xs-12\">
\t            \t<label>Número:</label>
\t            \t<div>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["nota"] ?? null), "numero", array()), "html", null, true);
        echo "</div>
\t          \t</div>
      \t\t\t\t<div class=\"col-md-6 col-sm-12 col-xs-12\">
\t            \t<label>Fornecedor:</label>
\t            \t<div>";
        // line 27
        echo $context["exibir"]->getnota_fornecedor(($context["nota"] ?? null));
        echo "</div>
\t          \t</div>
      \t\t\t\t<div class=\"col-md-2 col-sm-6 col-xs-6\">
\t            \t<label>Valor:</label>
\t            \t<div>R\$ ";
        // line 31
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["nota"] ?? null), "valor", array()), 2, ",", "."), "html", null, true);
        echo "</div>
\t          \t</div>
      \t\t\t\t<div class=\"col-md-2 col-sm-6 col-xs-6\">
\t            \t<label>Valor Total:</label>
\t            \t<div>R\$ ";
        // line 35
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["nota"] ?? null), "valor_somado", array()), 2, ",", "."), "html", null, true);
        echo "</div>
\t          \t</div>
          \t</div>
          \t<br />

            <div class=\"row\">
              <div class=\"col-md-10 col-sm-12 col-xs-12\">
                <label>Descrição:</label>
                <div>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute(($context["nota"] ?? null), "descricao", array()), "html", null, true);
        echo "</div>
              </div>
              <div class=\"col-md-2 col-sm-12 col-xs-12\">
                <label>&nbsp;</label>
                <a class=\"form-control btn btn-success\" href=\"";
        // line 47
        echo $context["exibir"]->geturl_admin("financeiro/notas", $this->getAttribute(($context["nota"] ?? null), "id", array()), "edit");
        echo "\">Editar</a>
                <a class=\"form-control btn btn-danger\" href=\"";
        // line 48
        echo $context["exibir"]->geturl_admin("financeiro/notas", $this->getAttribute(($context["nota"] ?? null), "id", array()), "remove");
        echo "\" onclick=\"return confirm('Excluir esta nota fiscal?');\">Excluír</a>
              </div>
            </div>
            <br />

            </div>
          </div>
        </div>

        <div class=\"clearfix\"></div>
    </div>

    <div class=\"row\">
      <div class=\"col-md-12 col-sm-12 col-xs-12\">
          <div class=\"x_panel\">
            <div class=\"x_title\">
              <h2>Notas Relacionadas</h2>
              <div class=\"clearfix\"></div>
            </div>
            <div class=\"x_content\">

            ";
        // line 69
        echo $context["tabela"]->getlistar_notas($this->getAttribute(($context["nota"] ?? null), "notas_relacionadas", array()));
        echo "

            </div>
          </div>
        </div>

        <div class=\"clearfix\"></div>
    </div>

    <div class=\"row\">
      <div class=\"col-md-12 col-sm-12 col-xs-12\">
          <div class=\"x_panel\">
            <div class=\"x_title\">
              <h2>Campanhas</h2>
              <div class=\"clearfix\"></div>
            </div>
            <div class=\"x_content\">

            ";
        // line 87
        echo $context["tabela"]->getlistar_nota_campanhas(($context["nota"] ?? null), false);
        echo "

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
        return "/var/www/app/app/Modules/Admin/views/Financeiro/Notas/view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 87,  121 => 69,  97 => 48,  93 => 47,  86 => 43,  75 => 35,  68 => 31,  61 => 27,  54 => 23,  38 => 9,  35 => 8,  31 => 1,  29 => 6,  27 => 4,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/Financeiro/Notas/view.twig", "");
    }
}

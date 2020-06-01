<?php

/* /var/www/app/app/Modules/Admin/views/Developer/API/RDStation.twig */
class __TwigTemplate_fd75b6bf58b3e5cbc62d4b5f422915ed809083c37f28e2f12bc215fdb6d7e58e extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::layout", "/var/www/app/app/Modules/Admin/views/Developer/API/RDStation.twig", 1);
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
        $context["title"] = "RD Station";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"right_col\" role=\"main\">
\t<div class=\"\">

    <form method=\"post\" action=\"/dev/api/rd-station\">
      ";
        // line 10
        echo csrf_field();
        echo "
          
      <div class=\"row\">
        <div class=\"col-md-12\" style=\"padding-top: 1em; padding-bottom: 1em\">
            <input type=\"submit\" class=\"btn btn-primary\" value=\"Salvar Alterações\" />
            <input type=\"reset\" class=\"btn btn-warning\" value=\"Resetar Alterações\" />
        </div>
      </div>
      
      <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Configurações da API</h2>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">

                    <div class=\"row\">

                      <div class=\"col-md-6 col-xs-12\">
                        <label for=\"rd_token\">Token:</label>
                        <input name=\"rd_token\" id=\"rd_token\" class=\"form-control\" type=\"text\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["rd_token"] ?? null), "html", null, true);
        echo "\" />
                      </div>

                      <div class=\"col-md-6 col-xs-12\">
                        <label for=\"rd_token_privado\">Token Privado:</label>
                        <input name=\"rd_token_privado\" id=\"rd_token_privado\" class=\"form-control\" type=\"text\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["rd_token_privado"] ?? null), "html", null, true);
        echo "\" />
                      </div>

                    </div>
                    <div class=\"row\">

                      <div class=\"col-md-12 col-xs-12\">
                        <br />
                        <label for=\"rd_scripts\">Tags e Scripts:</label>
                        <textarea name=\"rd_scripts\" id=\"rd_scripts\" class=\"form-control\" rows=\"3\">";
        // line 46
        echo twig_escape_filter($this->env, ($context["rd_scripts"] ?? null), "html", null, true);
        echo "</textarea>
                      </div>

                    </div>

                    <br />
                  </div>
                </div>
              </div>

              <div class=\"clearfix\"></div>
          </div>

  <div class=\"\">
      
      <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Tipos de Lead X Base X Conversão</h2>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">

                    <table class=\"table table-striped\">
                      <thead>
                        <tr>
                          <th>Cód.</th>
                          <th>Nome</th>
                          <th>Base (CRM)</th>
                          <th>Id. Conversão (RD Station)</th>
                        </tr>
                      </thead>
                      <tbody>
                    ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lead_status"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 81
            echo "                        <tr>
                          <th scope=\"row\">";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["status"], "codigo", array()), "html", null, true);
            echo "</th>
                          <td><input name=\"status[";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["status"], "codigo", array()), "html", null, true);
            echo "][nome]\" type=\"text\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["status"], "nome", array()), "html", null, true);
            echo "\" /></td>
                          <td><input name=\"status[";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["status"], "codigo", array()), "html", null, true);
            echo "][base_id]\" type=\"text\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["status"], "base_id", array()), "html", null, true);
            echo "\" /></td>
                          <td><input name=\"status[";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["status"], "codigo", array()), "html", null, true);
            echo "][conversao]\" type=\"text\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["status"], "conversao", array()), "html", null, true);
            echo "\" /></td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class=\"clearfix\"></div>
          </div>

      </form>
    </div>
  <div class=\"\">
    <div class=\"row\">
          <div class=\"col-md-12 col-sm-12 col-xs-12\">
              <div class=\"x_panel\">
                <div class=\"x_title\">
                  <h2>Exportar Leads</h2>
                  <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
        
                  <div>
                    <form method=\"post\" action=\"/dev/api/rd-station/export\" onsubmit=\"return confirm('Exportar todos os leads para o RD Station?');\">
                      ";
        // line 111
        echo csrf_field();
        echo "
                      <p>Forçar exportação de todos os leads para o RD Station.<br /><strong>Aviso:</strong> O processo pode levar algum tempo para ser concluído e pode sobrescrever informações no RD!</p>
                      <input type=\"submit\" class=\"btn btn-danger\" value=\"Exportar Bases\" />
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
        return "/var/www/app/app/Modules/Admin/views/Developer/API/RDStation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 111,  156 => 88,  145 => 85,  139 => 84,  133 => 83,  129 => 82,  126 => 81,  122 => 80,  85 => 46,  73 => 37,  65 => 32,  40 => 10,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/Developer/API/RDStation.twig", "");
    }
}

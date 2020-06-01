<?php

/* /var/www/app/app/Modules/Admin/views/Users/roles.twig */
class __TwigTemplate_99620fd0416d1ab8a2bc1522402dca28e4c434ac10f5953f215a2b865bb5a377 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::layout", "/var/www/app/app/Modules/Admin/views/Users/roles.twig", 1);
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
        $context["title"] = "Permissões";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"right_col\" role=\"main\">
\t<div class=\"\">

    <form method=\"post\" action=\"/users/roles\">
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
                    <h2>Funções x Permissões</h2>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">

                    <table class=\"table table-striped\">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Permissão/Funções</th>
                        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["funcoes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["funcao"]) {
            // line 34
            echo "                          <th title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["funcao"], "description", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["funcao"], "display_name", array()), "html", null, true);
            echo "</th>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['funcao'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                        </tr>
                      </thead>
                      <tbody>
                    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["permissoes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["permissao"]) {
            // line 40
            echo "                        <tr>
                          <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["permissao"], "name", array()), "html", null, true);
            echo "</td>
                          <td title=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["permissao"], "description", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["permissao"], "display_name", array()), "html", null, true);
            echo "</td>
                        ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["funcoes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["funcao"]) {
                // line 44
                echo "                          <td>
                            <input name=\"funcao[";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["funcao"], "name", array()), "html", null, true);
                echo "][";
                echo twig_escape_filter($this->env, $this->getAttribute($context["permissao"], "name", array()), "html", null, true);
                echo "]\" type=\"checkbox\" ";
                if (($this->getAttribute($context["funcao"], "name", array()) == "dev")) {
                    echo "checked disabled";
                } elseif (($this->getAttribute($context["permissao"], "name", array()) == "dev")) {
                    echo "disabled";
                } elseif ($this->getAttribute($this->getAttribute($this->getAttribute($context["funcao"], "perms", array()), "keyBy", array(0 => "name"), "method"), $this->getAttribute($context["permissao"], "name", array()), array(), "array")) {
                    echo "checked";
                }
                echo " />
                          </td>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['funcao'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permissao'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class=\"clearfix\"></div>
          </div>
      
      <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Nova Função</h2>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">

                    <div class=\"row\">

                      <div class=\"col-md-4 col-xs-12\">
                        <label for=\"new_fn[name]\">Código:</label>
                        <input name=\"new_fn[name]\" id=\"new_fn[name]\" class=\"form-control\" type=\"text\" />
                      </div>

                      <div class=\"col-md-4 col-xs-12\">
                        <label for=\"new_fn[display_name]\">Nome:</label>
                        <input name=\"new_fn[display_name]\" id=\"new_fn[display_name]\" class=\"form-control\" type=\"text\" />
                      </div>

                      <div class=\"col-md-4 col-xs-12\">
                        <label for=\"new_fn[description]\">Descrição:</label>
                        <input name=\"new_fn[description]\" id=\"new_fn[description]\" class=\"form-control\" type=\"text\" />
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
                    <h2>Nova Permissão</h2>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">

                    <div class=\"row\">

                      <div class=\"col-md-4 col-xs-12\">
                        <label for=\"new_perm[name]\">Código:</label>
                        <input name=\"new_perm[name]\" id=\"new_perm[name]\" class=\"form-control\" type=\"text\" />
                      </div>

                      <div class=\"col-md-4 col-xs-12\">
                        <label for=\"new_perm[display_name]\">Nome:</label>
                        <input name=\"new_perm[display_name]\" id=\"new_perm[display_name]\" class=\"form-control\" type=\"text\" />
                      </div>

                      <div class=\"col-md-4 col-xs-12\">
                        <label for=\"new_perm[description]\">Descrição:</label>
                        <input name=\"new_perm[description]\" id=\"new_perm[description]\" class=\"form-control\" type=\"text\" />
                      </div>

                    </div>

                    <br />
                  </div>
                </div>
              </div>

              <div class=\"clearfix\"></div>
          </div>

      </form>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "/var/www/app/app/Modules/Admin/views/Users/roles.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 50,  129 => 48,  110 => 45,  107 => 44,  103 => 43,  97 => 42,  93 => 41,  90 => 40,  86 => 39,  81 => 36,  70 => 34,  66 => 33,  40 => 10,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/Users/roles.twig", "");
    }
}

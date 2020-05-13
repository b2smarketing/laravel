<?php

/* /var/www/app/app/Modules/Admin/views/Users/index.twig */
class __TwigTemplate_d2a62b1ffa4274e2bbbebc4a069cc1b22802b6b11f5367ec5aad5eae5fdf1f74 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::layout", "/var/www/app/app/Modules/Admin/views/Users/index.twig", 1);
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
        $context["title"] = "Usuários";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"right_col\" role=\"main\">
  <div class=\"\">

    <form method=\"post\" action=\"/users\">
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
                    <h2>Usuários</h2>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">

                    <table class=\"table table-striped\">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Nome</th>
                          <th>E-mail</th>
                          <th>Função</th>
                          <th>Resetar senha</th>
                        </tr>
                      </thead>
                      <tbody>
                      ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 40
            echo "                        <tr>
                          <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</td>
                          <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name", array()), "html", null, true);
            echo "</td>
                          <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                          <td>
                            <select name=\"user[";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "][role]\" class=\"form-control\" ";
            if (($this->getAttribute($context["user"], "hasRole", array(0 => "dev"), "method") &&  !$this->getAttribute(call_user_func_array($this->env->getFunction('auth_user')->getCallable(), array()), "hasRole", array(0 => "dev"), "method"))) {
                echo "disabled";
            }
            echo ">
                            ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["roles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 47
                echo "                              <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "id", array()), "html", null, true);
                echo "\" ";
                if ($this->getAttribute($context["user"], "hasRole", array(0 => $this->getAttribute($context["role"], "name", array())), "method")) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "display_name", array()), "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "                            </select>
                          </td>
                          <td>
                            <input name=\"user[";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "][reset_password]\" class=\"form-control\" ";
            if (($this->getAttribute($context["user"], "hasRole", array(0 => "dev"), "method") &&  !$this->getAttribute(call_user_func_array($this->env->getFunction('auth_user')->getCallable(), array()), "hasRole", array(0 => "dev"), "method"))) {
                echo "disabled";
            }
            echo ">
                            </select>
                          </td>
                        </tr>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
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
                    <h2>Novo Usuário</h2>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">

                    <div class=\"row\">

                      <div class=\"col-md-3 col-xs-12\">
                        <label for=\"new_user[name]\">Nome:</label>
                        <input name=\"new_user[name]\" id=\"new_user[name]\" class=\"form-control\" type=\"text\" />
                      </div>

                      <div class=\"col-md-3 col-xs-12\">
                        <label for=\"new_user[email]\">E-mail:</label>
                        <input name=\"new_user[email]\" id=\"new_user[email]\" class=\"form-control\" type=\"email\" />
                      </div>

                      <div class=\"col-md-3 col-xs-12\">
                        <label for=\"new_user[role]\">Função:</label>
                        <select name=\"new_user[role]\" id=\"new_user[role]\" class=\"form-control\">
                        ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["roles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 91
            echo "                          <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "display_name", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "                        </select>
                      </div>

                      <div class=\"col-md-3 col-xs-12\">
                        <label for=\"new_user[password]\">Senha:</label>
                        <input name=\"new_user[password]\" id=\"new_user[password]\" class=\"form-control\" type=\"text\" />
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
        return "/var/www/app/app/Modules/Admin/views/Users/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 93,  178 => 91,  174 => 90,  139 => 57,  124 => 52,  119 => 49,  104 => 47,  100 => 46,  92 => 45,  87 => 43,  83 => 42,  79 => 41,  76 => 40,  72 => 39,  40 => 10,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/Users/index.twig", "");
    }
}

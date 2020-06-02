<?php

/* Admin::helpers.form_modulo */
class __TwigTemplate_b092ccdf8b51f2a111c099685956fd721b2bf93b17b71a4ecaae9b9a851d851b extends TwigBridge\Twig\Template
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
    }

    // line 1
    public function geteditar_modulo($__modulo__ = null, $__disponiveis__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "modulo" => $__modulo__,
            "disponiveis" => $__disponiveis__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "
<form id=\"demo-form\" method=\"post\" action=\"/modulos/";
            // line 3
            if (($context["modulo"] ?? null)) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["modulo"] ?? null), "id", array()), "html", null, true);
                echo "/edit";
            } else {
                echo "new";
            }
            echo "\" data-parsley-validate>
  ";
            // line 4
            echo csrf_field();
            echo "
  <div class=\"row\">
    
    <!-- Editar Módulo -->
    <div class=\"col-md-12 col-sm-12 col-xs-12\">
      <div class=\"x_panel\">
        <div class=\"x_title\">
          <h2>";
            // line 11
            if (($context["modulo"] ?? null)) {
                echo "Editar";
            } else {
                echo "Inserir";
            }
            echo " Módulo</h2>
          <div class=\"clearfix\"></div>
        </div>
        <div class=\"x_content\">
          ";
            // line 15
            if (($context["modulo"] ?? null)) {
                // line 16
                echo "          <label for=\"id\">ID (não mutável) :</label>
          <input type=\"text\" id=\"id\" class=\"form-control\" name=\"id\" readonly value=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute(($context["modulo"] ?? null), "id", array()), "html", null, true);
                echo "\" />
          ";
            }
            // line 19
            echo "
          <div class=\"row\">
            <div class=\"col-md-4 col-sm-8 com-xs-8\">
              <label for=\"domain\">Domínio * :</label>
              <input type=\"text\" id=\"domain\" class=\"form-control\" name=\"domain\" required value=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute(($context["modulo"] ?? null), "domain", array()), "html", null, true);
            echo "\" />
            </div>
            <div class=\"col-md-1 col-sm-2 com-xs-2\">
              <label for=\"domain\">WWW?</label>
              <div><input type=\"checkbox\" id=\"www\" name=\"www\" value=\"1\" class=\"flat\" ";
            // line 27
            if ($this->getAttribute(($context["modulo"] ?? null), "www", array())) {
                echo "checked";
            }
            echo " /></div>
            </div>
            <div class=\"col-md-1 col-sm-2 com-xs-2\">
              <label for=\"domain\">HTTPS/SSL</label>
              <div><input type=\"checkbox\" id=\"force_ssl\" name=\"force_ssl\" value=\"1\" class=\"flat\" ";
            // line 31
            if ($this->getAttribute(($context["modulo"] ?? null), "force_ssl", array())) {
                echo "checked";
            }
            echo " /></div>
            </div>
            <div class=\"col-md-6 col-sm-12 com-xs-12\">
              <label for=\"root\">Diretório * :</label>
              <input type=\"text\" id=\"root\" class=\"form-control\" name=\"root\" required value=\"";
            // line 35
            if ($this->getAttribute(($context["modulo"] ?? null), "root", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["modulo"] ?? null), "root", array()), "html", null, true);
            } else {
                echo "/";
            }
            echo "\" />
            </div>
          </div>
          <br />

          <label for=\"namespace\">Módulo * :</label>
        ";
            // line 41
            if (($context["modulo"] ?? null)) {
                // line 42
                echo "          <div>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["modulo"] ?? null), "info", array()), "name", array()), "html", null, true);
                echo "</div>
        ";
            } else {
                // line 44
                echo "          <select class=\"select2_single form-control\" id=\"namespace\" name=\"namespace\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["modulo"] ?? null), "namespace", array()), "html", null, true);
                echo "\">
            ";
                // line 45
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["disponiveis"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 46
                    echo "            <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "namespace", array()), "html", null, true);
                    echo "\" ";
                    if (($this->getAttribute($context["module"], "namespace", array()) == $this->getAttribute(($context["modulo"] ?? null), "namespace", array()))) {
                        echo "selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "name", array()), "html", null, true);
                    echo "</option>}
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "          </select>
        ";
            }
            // line 50
            echo "
          <br />
          <input type=\"submit\" class=\"btn btn-primary\" value=\"Salvar\" />
          
          ";
            // line 55
            echo "        </div>
    </div>
  </div>
    
    <!-- Editar Opções -->
    <div class=\"col-md-12 col-sm-12 col-xs-12\">
      <div class=\"x_panel\">
        <div class=\"x_title\">
          <h2>Opções do Módulo</h2>
          <div class=\"clearfix\"></div>
        </div>
        <div class=\"x_content\">
          ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["modulo"] ?? null), "info", array()), "options", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 68
                echo "          ";
                echo $this->env->getExtension('App\TwigExtended')->getOptionsField($context["option"], ($context["modulo"] ?? null), "options");
                echo "
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "        </div>
    </div>
  </div>
</form>

";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "Admin::helpers.form_modulo";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 70,  181 => 68,  177 => 67,  163 => 55,  157 => 50,  153 => 48,  138 => 46,  134 => 45,  129 => 44,  123 => 42,  121 => 41,  108 => 35,  99 => 31,  90 => 27,  83 => 23,  77 => 19,  72 => 17,  69 => 16,  67 => 15,  56 => 11,  46 => 4,  37 => 3,  34 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Admin::helpers.form_modulo", "");
    }
}

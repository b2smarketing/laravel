<?php

/* Admin::helpers.form_prova */
class __TwigTemplate_cd3921a3d1db93260fee66c79c7476afe26696c5c48857d9433158613f51c298 extends TwigBridge\Twig\Template
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
        // line 87
        echo "
";
        // line 152
        echo "
";
    }

    // line 1
    public function getcalendario_provas(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "
      <div class=\"col-md-6\">
        <div class=\"x_panel\">
          <div class=\"x_title\">
            <h2>Datas de Provas <small>Visão Geral</small></h2>
            <div class=\"clearfix\"></div>
          </div>
          <div class=\"x_content\">

            <div id='calendar'></div>

          </div>
        </div>
      </div>
    
\t<div id=\"CalenderModalNew\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">

          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
            <h4 class=\"modal-title\" id=\"myModalLabel\">New Calendar Entry</h4>
          </div>
          <div class=\"modal-body\">
            <div id=\"testmodal\" style=\"padding: 5px 20px;\">
              <form id=\"antoform\" class=\"form-horizontal calender\" role=\"form\">
                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\">Title</label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" class=\"form-control\" id=\"title\" name=\"title\">
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\">Description</label>
                  <div class=\"col-sm-9\">
                    <textarea class=\"form-control\" style=\"height:55px;\" id=\"descr\" name=\"descr\"></textarea>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-default antoclose\" data-dismiss=\"modal\">Close</button>
            <button type=\"button\" class=\"btn btn-primary antosubmit\">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <div id=\"CalenderModalEdit\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">

          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
            <h4 class=\"modal-title\" id=\"myModalLabel2\">Edit Calendar Entry</h4>
          </div>
          <div class=\"modal-body\">

            <div id=\"testmodal2\" style=\"padding: 5px 20px;\">
              <form id=\"antoform2\" class=\"form-horizontal calender\" role=\"form\">
                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\">Title</label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" class=\"form-control\" id=\"title2\" name=\"title2\">
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\">Description</label>
                  <div class=\"col-sm-9\">
                    <textarea class=\"form-control\" style=\"height:55px;\" id=\"descr2\" name=\"descr\"></textarea>
                  </div>
                </div>

              </form>
            </div>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-default antoclose2\" data-dismiss=\"modal\">Close</button>
            <button type=\"button\" class=\"btn btn-primary antosubmit2\">Save changes</button>
          </div>
        </div>
      </div>
    </div>

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

    // line 88
    public function geteditar_datas_provas($__data__ = null, $__unidades__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "data" => $__data__,
            "unidades" => $__unidades__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 89
            echo "
<form id=\"demo-form\" method=\"post\" action=\"/provas/datas/";
            // line 90
            if (($context["data"] ?? null)) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "/edit";
            } else {
                echo "new";
            }
            echo "\" data-parsley-validate>
  ";
            // line 91
            echo csrf_field();
            echo "

      <div class=\"col-md-";
            // line 93
            if (($context["data"] ?? null)) {
                echo "12";
            } else {
                echo "6";
            }
            echo "\">
        <div class=\"x_panel\">
          <div class=\"x_title\">
            <h2>";
            // line 96
            if (($context["data"] ?? null)) {
                echo "Editar";
            } else {
                echo "Nova";
            }
            echo " Data de Prova</h2>
            <div class=\"clearfix\"></div>
          </div>
          <div class=\"x_content\">
\t
\t\t\t<div class=\"row\">
\t            <div class=\"col-md-6\">
\t            \t<label for=\"data\">Data:</label>
            \t\t<input class=\"form-control\" type=\"date\" name=\"data\" value=\"";
            // line 104
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["data"] ?? null), "hora", array()), "Y-m-d"), "html", null, true);
            echo "\" />
\t            </div>
\t            <div class=\"col-md-3\">
\t            \t<label for=\"hora\">Hora:</label>
            \t\t<input class=\"form-control\" type=\"hour\" name=\"hora\" value=\"";
            // line 108
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["data"] ?? null), "hora", array()), "H:i"), "html", null, true);
            echo "\" data-parsley-pattern=\"^([0-9]|0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]\$\" />
\t            </div>
\t            <div class=\"col-md-3\">
\t            \t<label for=\"hora\">Hora final (opcional):</label>
            \t\t<input class=\"form-control\" type=\"hour\" name=\"hora_final\" value=\"";
            // line 112
            if ($this->getAttribute(($context["data"] ?? null), "hora_final", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["data"] ?? null), "hora_final", array()), "H:i"), "html", null, true);
            }
            echo "\" data-parsley-pattern=\"^([0-9]|0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]\$\" />
\t            </div>
\t            <div class=\"col-md-12\">
\t            \t<label for=\"hora\">Local de Prova:</label>
                ";
            // line 116
            if (($context["data"] ?? null)) {
                // line 117
                echo "                <div>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["data"] ?? null), "local", array()), "local", array()), "html", null, true);
                echo "</div>
                ";
            } else {
                // line 119
                echo "            \t\t<select class=\"form-control\" name=\"local\">
            \t\t";
                // line 120
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["unidades"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["unidade"]) {
                    // line 121
                    echo "\t\t\t\t\t\t<optgroup label=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["unidade"], "nome", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t";
                    // line 122
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["unidade"], "locais_provas", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["local"]) {
                        // line 123
                        echo "\t\t\t\t\t\t\t<option value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "local", array()), "html", null, true);
                        echo "</option>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['local'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 125
                    echo "\t\t\t\t\t\t</optgroup>
            \t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unidade'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 127
                echo "            \t\t</select>
              ";
            }
            // line 129
            echo "\t            </div>
\t            <div class=\"col-md-6\">
\t            \t<label for=\"maximo\">Limite:</label>
            \t\t<input class=\"form-control\" type=\"number\" name=\"maximo\" value=\"";
            // line 132
            if ($this->getAttribute(($context["data"] ?? null), "maximo", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "maximo", array()), "html", null, true);
            } else {
                echo "30";
            }
            echo "\" />
\t            </div>
\t            <div class=\"col-md-6\">
\t            \t<label for=\"hora\">Status:</label>
            \t\t<select class=\"form-control\" name=\"ativar\">
\t\t\t\t\t\t<option value=\"1\">Ativa</option>
\t\t\t\t\t\t<option value=\"0\">Inativa</option>
            \t\t</select>
\t            </div>
\t        </div>

          <br />
          <input type=\"submit\" class=\"btn btn-primary\" value=\"Salvar\" />

          </div>
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

    // line 153
    public function geteditar_locais_provas($__local__ = null, $__unidades__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "local" => $__local__,
            "unidades" => $__unidades__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 154
            echo "
<form id=\"demo-form\" method=\"post\" action=\"/provas/locais/";
            // line 155
            if (($context["local"] ?? null)) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["local"] ?? null), "id", array()), "html", null, true);
                echo "/edit";
            } else {
                echo "new";
            }
            echo "\" local-parsley-validate>
  ";
            // line 156
            echo csrf_field();
            echo "

      <div class=\"col-md-12\">
        <div class=\"x_panel\">
          <div class=\"x_title\">
            <h2>";
            // line 161
            if (($context["local"] ?? null)) {
                echo "Editar";
            } else {
                echo "Novo";
            }
            echo " Local de Prova</h2>
            <div class=\"clearfix\"></div>
          </div>
          <div class=\"x_content\">
\t
\t\t\t<div class=\"row\">
\t            <div class=\"col-md-12\">
\t            \t<label for=\"hora\">Unidade:</label>
              ";
            // line 169
            if (($context["local"] ?? null)) {
                // line 170
                echo "                <div><a target=\"_blank\" href=\"/unidades/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["local"] ?? null), "unidade", array()), "id", array()), "html", null, true);
                echo "/\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["local"] ?? null), "unidade", array()), "nome", array()), "html", null, true);
                echo "</a></div>
              ";
            } else {
                // line 172
                echo "            \t\t<select class=\"form-control\" name=\"unidade\">
            \t\t";
                // line 173
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["unidades"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["unidade"]) {
                    // line 174
                    echo "\t\t\t\t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["unidade"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["unidade"], "nome", array()), "html", null, true);
                    echo "</option>
            \t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unidade'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 176
                echo "            \t\t</select>
              ";
            }
            // line 178
            echo "\t            </div>
\t        </div>

\t\t\t<hr />
\t        <h2>Dados Opcionais <small>Estes dados serão preenchidos automaticamente se estiverem em branco.</small></h2>
\t        <div class=\"clearfix\"></div>

\t        <div class=\"row\">
\t            <div class=\"col-md-12\">
\t            \t<label for=\"local\">Local:</label>
            \t\t<input class=\"form-control\" type=\"text\" name=\"local\" value=\"";
            // line 188
            echo twig_escape_filter($this->env, $this->getAttribute(($context["local"] ?? null), "local", array()), "html", null, true);
            echo "\" />
\t            </div>
\t            <div class=\"col-md-12\">
\t            \t<label for=\"local\">Endereço:</label>
            \t\t<input class=\"form-control\" type=\"text\" name=\"endereco\" value=\"";
            // line 192
            echo twig_escape_filter($this->env, $this->getAttribute(($context["local"] ?? null), "endereco", array()), "html", null, true);
            echo "\" />
\t            </div>
\t            <div class=\"col-md-6\">
\t            \t<label for=\"hora\">Telefone:</label>
            \t\t<input class=\"form-control\" type=\"text\" name=\"telefone\" value=\"";
            // line 196
            echo twig_escape_filter($this->env, $this->getAttribute(($context["local"] ?? null), "telefone", array()), "html", null, true);
            echo "\" />
\t            </div>
\t            <div class=\"col-md-6\">
\t            \t<label for=\"email\">E-mail:</label>
            \t\t<input class=\"form-control\" type=\"text\" name=\"email\" value=\"";
            // line 200
            echo twig_escape_filter($this->env, $this->getAttribute(($context["local"] ?? null), "email", array()), "html", null, true);
            echo "\" />
\t            </div>
\t            <div class=\"col-md-12\">
\t            \t<label for=\"hora\">Coordenadas:<br /><small>Obs.: Você pode copiar e colar uma URL do Google Maps aqui.</small></label>
            \t\t<input class=\"form-control\" type=\"text\" name=\"coordenadas\" value=\"";
            // line 204
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["local"] ?? null), "coordenadas", array()), "json", array()), "html", null, true);
            echo "\" />
\t            </div>
\t        </div>

          <br />
          <input type=\"submit\" class=\"btn btn-primary\" value=\"Salvar\" />

          </div>
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
        return "Admin::helpers.form_prova";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  425 => 204,  418 => 200,  411 => 196,  404 => 192,  397 => 188,  385 => 178,  381 => 176,  370 => 174,  366 => 173,  363 => 172,  355 => 170,  353 => 169,  338 => 161,  330 => 156,  321 => 155,  318 => 154,  305 => 153,  266 => 132,  261 => 129,  257 => 127,  250 => 125,  239 => 123,  235 => 122,  230 => 121,  226 => 120,  223 => 119,  217 => 117,  215 => 116,  206 => 112,  199 => 108,  192 => 104,  177 => 96,  167 => 93,  162 => 91,  153 => 90,  150 => 89,  137 => 88,  38 => 2,  27 => 1,  22 => 152,  19 => 87,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Admin::helpers.form_prova", "");
    }
}

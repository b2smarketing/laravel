<?php

/* Admin::helpers.form_campanha */
class __TwigTemplate_727e80fd27368ee50d8b11f0b1af3c4facc3d141f7262c30ac81964fa5625f4a extends TwigBridge\Twig\Template
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
    public function geteditar_campanha($__campanha__ = null, $__cursos__ = null, $__unidades__ = null, $__campanhas__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "campanha" => $__campanha__,
            "cursos" => $__cursos__,
            "unidades" => $__unidades__,
            "campanhas" => $__campanhas__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            $context["custom_fields"] = $this->loadTemplate("Admin::helpers/custom_fields.twig", "Admin::helpers.form_campanha", 2);
            // line 3
            echo "
<form id=\"demo-form\" method=\"post\" action=\"/campanhas/";
            // line 4
            if (($context["campanha"] ?? null)) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["campanha"] ?? null), "id", array()), "html", null, true);
                echo "/edit";
            } else {
                echo "new";
            }
            echo "\" data-parsley-validate>
  ";
            // line 5
            echo csrf_field();
            echo "
  <div class=\"row\">
    
    <!-- Editar Campanha -->
    <div class=\"col-md-12 col-sm-12 col-xs-12\">
      <div class=\"x_panel\">
        <div class=\"x_title\">
          <h2>";
            // line 12
            if (($context["campanha"] ?? null)) {
                echo "Editar";
            } else {
                echo "Nova";
            }
            echo " Campanha</h2>
          <div class=\"clearfix\"></div>
        </div>
        <div class=\"x_content\">
          <div class=\"row\">
          ";
            // line 17
            if (($context["campanha"] ?? null)) {
                // line 18
                echo "          <div class=\"col-md-6 col-sm-12 com-xs-12\">
            <label for=\"id\">ID (não mutável) :</label>
            <input type=\"text\" id=\"id\" class=\"form-control\" name=\"id\" readonly value=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute(($context["campanha"] ?? null), "id", array()), "html", null, true);
                echo "\" />
          </div>
          <div class=\"col-md-6 col-sm-12 com-xs-12\">
            <label for=\"parent\">Campanha Principal :</label>
            <select name=\"parent\" id=\"parent\" class=\"form-control\">
              <option value=\"null\"></option>
            ";
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["campanhas"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["camp"]) {
                    // line 27
                    echo "              <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["camp"], "id", array()), "html", null, true);
                    echo "\" ";
                    if (($this->getAttribute(($context["campanha"] ?? null), "parent_id", array()) == $this->getAttribute($context["camp"], "id", array()))) {
                        echo "selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["camp"], "nome", array()), "html", null, true);
                    echo "</option>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['camp'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "            </select>
          </div>
          ";
            }
            // line 32
            echo "
          <div class=\"col-md-6 col-sm-12 com-xs-12\">
            <label for=\"nome\">Nome * :</label>
            <input type=\"text\" id=\"nome\" class=\"form-control\" name=\"nome\" required value=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute(($context["campanha"] ?? null), "nome", array()), "html", null, true);
            echo "\" />
          </div>

          <div class=\"col-md-6 col-sm-12 com-xs-12\">
            <label for=\"budget\">Budget (R\$) * :</label>
            <input type=\"number\" step=\"0.01\" id=\"budget\" class=\"form-control type-currency\" name=\"budget\" data-parsley-trigger=\"change\" required value=\"";
            // line 40
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["campanha"] ?? null), "budget", array()), 2, ".", ""), "html", null, true);
            echo "\" />
          </div>

            <div class=\"col-md-4 col-sm-12 com-xs-12\">
              <label for=\"data_inicio\">Data de Início * :</label>
              <input id=\"data_inicio\" name=\"data_inicio\" class=\"date-picker form-control col-md-7 col-xs-12\" required=\"required\" type=\"text\" value=\"";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["campanha"] ?? null), "inicio", array()), "d/m/Y"), "html", null, true);
            echo "\" />
            </div>

            <div class=\"col-md-4 col-sm-12 com-xs-12\">
              <label for=\"data_fim\">Data de Término * :</label>
              <input id=\"data_fim\" name=\"data_fim\" class=\"date-picker form-control col-md-7 col-xs-12\" required=\"required\" type=\"text\" value=\"";
            // line 50
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["campanha"] ?? null), "fim", array()), "d/m/Y"), "html", null, true);
            echo "\" />
            </div>

            <div class=\"col-md-2 col-sm-6 com-xs-6\">
              <label>Status:</label>
              <input type=\"text\" class=\"form-control\" readonly value=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute(($context["campanha"] ?? null), "status", array()), "html", null, true);
            echo "\" />
            </div>
            <div class=\"col-md-2 col-sm-6 com-xs-6\">
              <label>Relatórios:</label>
              <select name=\"relatorios\" class=\"form-control\">
                <option value=\"0\">Não</option>
                <option value=\"1\" ";
            // line 61
            if ($this->getAttribute(($context["campanha"] ?? null), "relatorios", array())) {
                echo "selected";
            }
            echo ">Sim</option>
              </select>
            </div>
          </div>

          <br />
          <input type=\"submit\" class=\"btn btn-primary\" value=\"Salvar\" />
          ";
            // line 68
            if (($context["campanha"] ?? null)) {
                echo "<a class=\"btn btn-default\" href=\"/campanhas/";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["campanha"] ?? null), "id", array()), "html", null, true);
                echo "/\">Visualizar</a>";
            }
            // line 69
            echo "        </div>
      </div>
    </div>
  </div>
  <div class=\"row\">

    ";
            // line 75
            if (($context["campanha"] ?? null)) {
                // line 76
                echo "    
    <!-- Editar Cursos -->
    <div class=\"col-md-7 col-sm-7 col-xs-12\">
      <div class=\"x_panel\">
        <div class=\"x_title\">
          <h2>Editar Cursos</h2>
          <div class=\"clearfix\"></div>
        </div>
        <div class=\"x_content\">
          <p style=\"padding: 5px;\">
          ";
                // line 86
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["cursos"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
                    // line 87
                    echo "            <label><input type=\"checkbox\" name=\"cursos[]\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "id", array()), "html", null, true);
                    echo "\" class=\"flat\" ";
                    if ($this->getAttribute(($context["campanha"] ?? null), "tem_curso", array(0 => $this->getAttribute($context["curso"], "id", array())), "method")) {
                        echo "checked";
                    }
                    echo " /> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "nome", array()), "html", null, true);
                    echo "</label>
            <br />
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curso'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                echo "          </p>
        </div>
      </div>
    </div>
    
    <!-- Editar Mídias + Unidades -->
    <div class=\"col-md-5 col-sm-5 col-xs-12\">

      <div class=\"x_panel\">
        <div class=\"x_title\">
          <h2>Como nos Conheceu?</h2>
          <div class=\"clearfix\"></div>
        </div>
        <div class=\"x_content\">
          <p style=\"padding: 5px;\">
            <ol class=\"enable-drag no-list\">
            ";
                // line 106
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["campanha"] ?? null), "midias", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["midia"]) {
                    // line 107
                    echo "              <li><label><input type=\"checkbox\" name=\"midias[]\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["midia"], "id", array()), "html", null, true);
                    echo "\" class=\"flat\" ";
                    if (true) {
                        echo "checked";
                    }
                    echo " /> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["midia"], "nome", array()), "html", null, true);
                    echo "</label></li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['midia'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 109
                echo "            </ol>
          </p>
        </div>
      </div>

      <div class=\"x_panel\">
        <div class=\"x_title\">
          <h2>Unidades</h2>
          <div class=\"clearfix\"></div>
        </div>
        <div class=\"x_content\">
          <p style=\"padding: 5px;\">
            <ol class=\"enable-drag no-list\">
            ";
                // line 122
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["unidades"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["unidade"]) {
                    // line 123
                    echo "              <li><label><input type=\"checkbox\" name=\"unidades[]\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["unidade"], "id", array()), "html", null, true);
                    echo "\" class=\"flat\" ";
                    if ($this->getAttribute(($context["campanha"] ?? null), "tem_unidade", array(0 => $this->getAttribute($context["unidade"], "id", array())), "method")) {
                        echo "checked";
                    }
                    echo " /> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["unidade"], "nome", array()), "html", null, true);
                    echo "</label></li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unidade'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 125
                echo "            </ol>
          </p>
        </div>
      </div>

      <!-- Editar Textos -->
      <div class=\"x_panel\">
        <div class=\"x_title\">
          <h2>Textos</h2>
          <div class=\"clearfix\"></div>
          <p>Aqui você pode configurar os textos que serão usados na Landing Page.</p>
        </div>
        <div class=\"x_content\">
          <div>
            <label for=\"textos-inicio_aulas\">Início das Aulas:</label>
            <input id=\"textos-inicio_aulas\" class=\"form-control\" type=\"text\" name=\"textos[inicio_aulas]\" value=\"";
                // line 140
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["campanha"] ?? null), "textos", array()), "inicio_aulas", array(), "array"), "html", null, true);
                echo "\" />
          </div>
        </div>
      </div>

    </div>

    <!-- Editar Campos -->
    <div class=\"col-md-12 col-sm-12 col-xs-12\">
      <div class=\"x_panel\">
        <div class=\"x_title\">
          <h2>Campos Personalizados</h2>
          <div class=\"clearfix\"></div>
        </div>
        <div class=\"x_content\">
          ";
                // line 155
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["campanha"] ?? null), "campos_personalizados", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["campo"]) {
                    // line 156
                    echo "          ";
                    echo $context["custom_fields"]->getrender_editor($context["campo"], "campos_personalizados");
                    echo "
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['campo'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 158
                echo "          ";
                echo $context["custom_fields"]->getrender_editor(null, "campos_personalizados");
                echo "
          <br />
          <input class=\"btn btn-primary\" type=\"submit\" value=\"Salvar\" >
        </div>
      </div>
    </div>

    <!-- Editar Tags -->
    <div class=\"col-md-12 col-sm-12 col-xs-12\">
      <div class=\"x_panel\">
        <div class=\"x_title\">
          <h2>Tags Personalizadas</h2>
          <div class=\"clearfix\"></div>
        </div>
        <div class=\"x_content\">
        ";
                // line 173
                $context["paginas"] = array("[ Todas ]" => "*", "Home" => "/", "Inscrição" => "/inscricao", "Inscrição Finalizada" => "/inscricao/finaliza", "Inserir Dados Adicionais" => "/inscricao/adicionais");
                // line 180
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["campanha"] ?? null), "tags", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 181
                    echo "          <div class=\"row\">
            <div class=\"col-md-3\">
              <input name=\"tags[";
                    // line 183
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "id", array()), "html", null, true);
                    echo "][desc]\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "desc", array()), "html", null, true);
                    echo "\" class=\"form-control\" type=\"text\" />
            </div>
            <div class=\"col-md-3\">
              <select name=\"tags[";
                    // line 186
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "id", array()), "html", null, true);
                    echo "][pagina]\" class=\"form-control\">
              ";
                    // line 187
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["paginas"] ?? null));
                    foreach ($context['_seq'] as $context["pagina"] => $context["val"]) {
                        // line 188
                        echo "                <option value=\"";
                        echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                        echo "\" ";
                        if (($this->getAttribute($context["tag"], "pagina", array()) == $context["val"])) {
                            echo "selected";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, $context["pagina"], "html", null, true);
                        echo "</option>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['pagina'], $context['val'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 190
                    echo "              </select>
            </div>
            <div class=\"col-md-3\">
              <select name=\"tags[";
                    // line 193
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "id", array()), "html", null, true);
                    echo "][topo]\" class=\"form-control\">
                <option value=\"1\" ";
                    // line 194
                    if ($this->getAttribute($context["tag"], "topo", array())) {
                        echo "selected";
                    }
                    echo ">Cabeçalho</option>
                <option value=\"0\" ";
                    // line 195
                    if ( !$this->getAttribute($context["tag"], "topo", array())) {
                        echo "selected";
                    }
                    echo ">Rodapé</option>
              </select>
            </div>
            <div class=\"col-md-3\">
              <textarea rows=\"1\" name=\"tags[";
                    // line 199
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "id", array()), "html", null, true);
                    echo "][codigo]\" class=\"form-control\" type=\"text\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "codigo", array()), "html", null, true);
                    echo "</textarea>
            </div>
          </div><br />
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 203
                echo "
          <br />
          <h2>Inserir Tag</h2>

          <div class=\"row\">
            <div class=\"col-md-3\">
              <label>Descrição:</label>
              <input name=\"tags[new][desc]\" class=\"form-control\" type=\"text\" />
            </div>
            <div class=\"col-md-3\">
              <label>Página:</label>
              <select name=\"tags[new][pagina]\" class=\"form-control\">
              ";
                // line 215
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["paginas"] ?? null));
                foreach ($context['_seq'] as $context["pagina"] => $context["val"]) {
                    // line 216
                    echo "                <option value=\"";
                    echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["pagina"], "html", null, true);
                    echo "</option>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['pagina'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 218
                echo "              </select>
            </div>
            <div class=\"col-md-3\">
              <label>Local de Inserção:</label>
              <select name=\"tags[new][topo]\" class=\"form-control\">
                <option value=\"1\">Cabeçalho</option>
                <option value=\"0\">Rodapé</option>
              </select>
            </div>
            <div class=\"col-md-3\">
              <label>Código:</label>
              <textarea rows=\"1\" name=\"tags[new][codigo]\" class=\"form-control\" type=\"text\"></textarea>
            </div>
          </div>
          
          <br />
          <input class=\"btn btn-primary\" type=\"submit\" value=\"Salvar\" >
        </div>
      </div>
    </div>

  ";
            }
            // line 240
            echo "
    <div class=\"clearfix\"></div>
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
        return "Admin::helpers.form_campanha";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  486 => 240,  462 => 218,  451 => 216,  447 => 215,  433 => 203,  421 => 199,  412 => 195,  406 => 194,  402 => 193,  397 => 190,  382 => 188,  378 => 187,  374 => 186,  366 => 183,  362 => 181,  357 => 180,  355 => 173,  336 => 158,  327 => 156,  323 => 155,  305 => 140,  288 => 125,  273 => 123,  269 => 122,  254 => 109,  239 => 107,  235 => 106,  217 => 90,  201 => 87,  197 => 86,  185 => 76,  183 => 75,  175 => 69,  169 => 68,  157 => 61,  148 => 55,  140 => 50,  132 => 45,  124 => 40,  116 => 35,  111 => 32,  106 => 29,  91 => 27,  87 => 26,  78 => 20,  74 => 18,  72 => 17,  60 => 12,  50 => 5,  41 => 4,  38 => 3,  36 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro editar_campanha (campanha, cursos, unidades, campanhas) %}
{% import 'Admin::helpers/custom_fields.twig' as custom_fields %}

<form id=\"demo-form\" method=\"post\" action=\"/campanhas/{% if campanha %}{{ campanha.id }}/edit{% else %}new{% endif %}\" data-parsley-validate>
  {{ csrf_field() }}
  <div class=\"row\">
    
    <!-- Editar Campanha -->
    <div class=\"col-md-12 col-sm-12 col-xs-12\">
      <div class=\"x_panel\">
        <div class=\"x_title\">
          <h2>{% if campanha %}Editar{% else %}Nova{% endif %} Campanha</h2>
          <div class=\"clearfix\"></div>
        </div>
        <div class=\"x_content\">
          <div class=\"row\">
          {% if campanha %}
          <div class=\"col-md-6 col-sm-12 com-xs-12\">
            <label for=\"id\">ID (não mutável) :</label>
            <input type=\"text\" id=\"id\" class=\"form-control\" name=\"id\" readonly value=\"{{ campanha.id }}\" />
          </div>
          <div class=\"col-md-6 col-sm-12 com-xs-12\">
            <label for=\"parent\">Campanha Principal :</label>
            <select name=\"parent\" id=\"parent\" class=\"form-control\">
              <option value=\"null\"></option>
            {% for camp in campanhas %}
              <option value=\"{{ camp.id }}\" {% if campanha.parent_id == camp.id %}selected{% endif %}>{{ camp.nome }}</option>
            {% endfor %}
            </select>
          </div>
          {% endif %}

          <div class=\"col-md-6 col-sm-12 com-xs-12\">
            <label for=\"nome\">Nome * :</label>
            <input type=\"text\" id=\"nome\" class=\"form-control\" name=\"nome\" required value=\"{{ campanha.nome }}\" />
          </div>

          <div class=\"col-md-6 col-sm-12 com-xs-12\">
            <label for=\"budget\">Budget (R\$) * :</label>
            <input type=\"number\" step=\"0.01\" id=\"budget\" class=\"form-control type-currency\" name=\"budget\" data-parsley-trigger=\"change\" required value=\"{{ campanha.budget|number_format(2, '.', '') }}\" />
          </div>

            <div class=\"col-md-4 col-sm-12 com-xs-12\">
              <label for=\"data_inicio\">Data de Início * :</label>
              <input id=\"data_inicio\" name=\"data_inicio\" class=\"date-picker form-control col-md-7 col-xs-12\" required=\"required\" type=\"text\" value=\"{{ campanha.inicio|date('d/m/Y') }}\" />
            </div>

            <div class=\"col-md-4 col-sm-12 com-xs-12\">
              <label for=\"data_fim\">Data de Término * :</label>
              <input id=\"data_fim\" name=\"data_fim\" class=\"date-picker form-control col-md-7 col-xs-12\" required=\"required\" type=\"text\" value=\"{{ campanha.fim|date('d/m/Y') }}\" />
            </div>

            <div class=\"col-md-2 col-sm-6 com-xs-6\">
              <label>Status:</label>
              <input type=\"text\" class=\"form-control\" readonly value=\"{{ campanha.status }}\" />
            </div>
            <div class=\"col-md-2 col-sm-6 com-xs-6\">
              <label>Relatórios:</label>
              <select name=\"relatorios\" class=\"form-control\">
                <option value=\"0\">Não</option>
                <option value=\"1\" {% if campanha.relatorios %}selected{% endif %}>Sim</option>
              </select>
            </div>
          </div>

          <br />
          <input type=\"submit\" class=\"btn btn-primary\" value=\"Salvar\" />
          {% if campanha %}<a class=\"btn btn-default\" href=\"/campanhas/{{ campanha.id }}/\">Visualizar</a>{% endif %}
        </div>
      </div>
    </div>
  </div>
  <div class=\"row\">

    {% if campanha %}
    
    <!-- Editar Cursos -->
    <div class=\"col-md-7 col-sm-7 col-xs-12\">
      <div class=\"x_panel\">
        <div class=\"x_title\">
          <h2>Editar Cursos</h2>
          <div class=\"clearfix\"></div>
        </div>
        <div class=\"x_content\">
          <p style=\"padding: 5px;\">
          {% for curso in cursos %}
            <label><input type=\"checkbox\" name=\"cursos[]\" value=\"{{ curso.id }}\" class=\"flat\" {% if campanha.tem_curso(curso.id) %}checked{% endif %} /> {{ curso.nome }}</label>
            <br />
          {% endfor %}
          </p>
        </div>
      </div>
    </div>
    
    <!-- Editar Mídias + Unidades -->
    <div class=\"col-md-5 col-sm-5 col-xs-12\">

      <div class=\"x_panel\">
        <div class=\"x_title\">
          <h2>Como nos Conheceu?</h2>
          <div class=\"clearfix\"></div>
        </div>
        <div class=\"x_content\">
          <p style=\"padding: 5px;\">
            <ol class=\"enable-drag no-list\">
            {% for midia in campanha.midias %}
              <li><label><input type=\"checkbox\" name=\"midias[]\" value=\"{{ midia.id }}\" class=\"flat\" {% if true %}checked{% endif %} /> {{ midia.nome }}</label></li>
            {% endfor %}
            </ol>
          </p>
        </div>
      </div>

      <div class=\"x_panel\">
        <div class=\"x_title\">
          <h2>Unidades</h2>
          <div class=\"clearfix\"></div>
        </div>
        <div class=\"x_content\">
          <p style=\"padding: 5px;\">
            <ol class=\"enable-drag no-list\">
            {% for unidade in unidades %}
              <li><label><input type=\"checkbox\" name=\"unidades[]\" value=\"{{ unidade.id }}\" class=\"flat\" {% if campanha.tem_unidade(unidade.id) %}checked{% endif %} /> {{ unidade.nome }}</label></li>
            {% endfor %}
            </ol>
          </p>
        </div>
      </div>

      <!-- Editar Textos -->
      <div class=\"x_panel\">
        <div class=\"x_title\">
          <h2>Textos</h2>
          <div class=\"clearfix\"></div>
          <p>Aqui você pode configurar os textos que serão usados na Landing Page.</p>
        </div>
        <div class=\"x_content\">
          <div>
            <label for=\"textos-inicio_aulas\">Início das Aulas:</label>
            <input id=\"textos-inicio_aulas\" class=\"form-control\" type=\"text\" name=\"textos[inicio_aulas]\" value=\"{{ campanha.textos['inicio_aulas'] }}\" />
          </div>
        </div>
      </div>

    </div>

    <!-- Editar Campos -->
    <div class=\"col-md-12 col-sm-12 col-xs-12\">
      <div class=\"x_panel\">
        <div class=\"x_title\">
          <h2>Campos Personalizados</h2>
          <div class=\"clearfix\"></div>
        </div>
        <div class=\"x_content\">
          {% for campo in campanha.campos_personalizados %}
          {{ custom_fields.render_editor(campo, 'campos_personalizados') }}
          {% endfor %}
          {{ custom_fields.render_editor(null, 'campos_personalizados') }}
          <br />
          <input class=\"btn btn-primary\" type=\"submit\" value=\"Salvar\" >
        </div>
      </div>
    </div>

    <!-- Editar Tags -->
    <div class=\"col-md-12 col-sm-12 col-xs-12\">
      <div class=\"x_panel\">
        <div class=\"x_title\">
          <h2>Tags Personalizadas</h2>
          <div class=\"clearfix\"></div>
        </div>
        <div class=\"x_content\">
        {% set paginas = {
          '[ Todas ]': '*',
          'Home': '/',
          'Inscrição': '/inscricao',
          'Inscrição Finalizada': '/inscricao/finaliza',
          'Inserir Dados Adicionais': '/inscricao/adicionais'
        } %}
        {% for tag in campanha.tags %}
          <div class=\"row\">
            <div class=\"col-md-3\">
              <input name=\"tags[{{ tag.id }}][desc]\" value=\"{{ tag.desc }}\" class=\"form-control\" type=\"text\" />
            </div>
            <div class=\"col-md-3\">
              <select name=\"tags[{{ tag.id }}][pagina]\" class=\"form-control\">
              {% for pagina, val in paginas %}
                <option value=\"{{ val }}\" {% if tag.pagina == val %}selected{% endif %}>{{ pagina }}</option>
              {% endfor %}
              </select>
            </div>
            <div class=\"col-md-3\">
              <select name=\"tags[{{ tag.id }}][topo]\" class=\"form-control\">
                <option value=\"1\" {% if tag.topo %}selected{% endif %}>Cabeçalho</option>
                <option value=\"0\" {% if not tag.topo %}selected{% endif %}>Rodapé</option>
              </select>
            </div>
            <div class=\"col-md-3\">
              <textarea rows=\"1\" name=\"tags[{{ tag.id }}][codigo]\" class=\"form-control\" type=\"text\">{{ tag.codigo }}</textarea>
            </div>
          </div><br />
        {% endfor %}

          <br />
          <h2>Inserir Tag</h2>

          <div class=\"row\">
            <div class=\"col-md-3\">
              <label>Descrição:</label>
              <input name=\"tags[new][desc]\" class=\"form-control\" type=\"text\" />
            </div>
            <div class=\"col-md-3\">
              <label>Página:</label>
              <select name=\"tags[new][pagina]\" class=\"form-control\">
              {% for pagina, val in paginas %}
                <option value=\"{{ val }}\">{{ pagina }}</option>
              {% endfor %}
              </select>
            </div>
            <div class=\"col-md-3\">
              <label>Local de Inserção:</label>
              <select name=\"tags[new][topo]\" class=\"form-control\">
                <option value=\"1\">Cabeçalho</option>
                <option value=\"0\">Rodapé</option>
              </select>
            </div>
            <div class=\"col-md-3\">
              <label>Código:</label>
              <textarea rows=\"1\" name=\"tags[new][codigo]\" class=\"form-control\" type=\"text\"></textarea>
            </div>
          </div>
          
          <br />
          <input class=\"btn btn-primary\" type=\"submit\" value=\"Salvar\" >
        </div>
      </div>
    </div>

  {% endif %}

    <div class=\"clearfix\"></div>
  </div>
</form>

{% endmacro %}", "Admin::helpers.form_campanha", "");
    }
}

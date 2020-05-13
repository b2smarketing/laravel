<?php

/* Admin::helpers.form_financeiro */
class __TwigTemplate_43010491a5942645750edf93f91546e255deade123f709d9b7f2c55e019e6e7b extends TwigBridge\Twig\Template
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
        // line 114
        echo "
";
        // line 190
        echo "
";
    }

    // line 1
    public function geteditar_fornecedor($__fornecedor__ = null, $__midias__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "fornecedor" => $__fornecedor__,
            "midias" => $__midias__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            $context["tabela"] = $this->loadTemplate("Admin::helpers.tabela_financeiro", "Admin::helpers.form_financeiro", 2);
            // line 3
            echo "
<form id=\"demo-form\" method=\"post\" action=\"/financeiro/fornecedores/";
            // line 4
            if (($context["fornecedor"] ?? null)) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["fornecedor"] ?? null), "id", array()), "html", null, true);
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
    
    <!-- Editar Módulo -->
    <div class=\"col-md-12 col-sm-12 col-xs-12\">
      <div class=\"x_panel\">
        <div class=\"x_title\">
          <h2>";
            // line 12
            if (($context["fornecedor"] ?? null)) {
                echo "Editar";
            } else {
                echo "Inserir";
            }
            echo " Fornecedor</h2>
          <div class=\"clearfix\"></div>
        </div>
        <div class=\"x_content\">
          ";
            // line 16
            if (($context["fornecedor"] ?? null)) {
                // line 17
                echo "          <label for=\"id\">ID (não mutável) :</label>
          <input type=\"text\" id=\"id\" class=\"form-control\" name=\"id\" readonly value=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute(($context["fornecedor"] ?? null), "id", array()), "html", null, true);
                echo "\" />
          <br />
          ";
            }
            // line 21
            echo "
          <div class=\"row\">
            <div class=\"col-md-4 col-sm-12 com-xs-12\">
              <label for=\"cnpj\">CNPJ * :</label>
            ";
            // line 25
            if (($context["fornecedor"] ?? null)) {
                // line 26
                echo "              <div>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["fornecedor"] ?? null), "cnpj", array()), "html", null, true);
                echo "</div>
            ";
            } else {
                // line 28
                echo "              <input type=\"text\" id=\"cnpj\" class=\"form-control\" name=\"cnpj\" required value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["fornecedor"] ?? null), "cnpj", array()), "html", null, true);
                echo "\" data-parsley-pattern=\"^([0-9]{2}[\\.]?[0-9]{3}[\\.]?[0-9]{3}[\\/]?[0-9]{4}[-]?[0-9]{2})|([0-9]{3}[\\.]?[0-9]{3}[\\.]?[0-9]{3}[-]?[0-9]{2})\$\" />
            ";
            }
            // line 30
            echo "            </div>
            <div class=\"col-md-4 col-sm-12 com-xs-12\">
              <label for=\"razao_social\">Razão Social * :</label>
              <input type=\"text\" id=\"razao_social\" class=\"form-control\" name=\"razao_social\" required value=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute(($context["fornecedor"] ?? null), "razao_social", array()), "html", null, true);
            echo "\" />
            </div>
            <div class=\"col-md-4 col-sm-12 com-xs-12\">
              <label for=\"nome_fantasia\">Nome Fantasia * :</label>
              <input type=\"text\" id=\"nome_fantasia\" class=\"form-control\" name=\"nome_fantasia\" required value=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute(($context["fornecedor"] ?? null), "nome_fantasia", array()), "html", null, true);
            echo "\" />
            </div>
          </div>
          <br />

      <hr />
          <h2>Informações de Contato</h2>
          <div class=\"clearfix\"></div>

          <div class=\"row\">
            <div class=\"col-md-4 col-sm-12 com-xs-12\">
              <label for=\"c_nome\">Nome do Contato * :</label>
              <input type=\"text\" id=\"c_nome\" class=\"form-control\" name=\"c_nome\" required value=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute(($context["fornecedor"] ?? null), "c_nome", array()), "html", null, true);
            echo "\" />
            </div>
            <div class=\"col-md-4 col-sm-12 com-xs-12\">
              <label for=\"c_cargo\">Cargo do Contato :</label>
              <input type=\"text\" id=\"c_cargo\" class=\"form-control\" name=\"c_cargo\" value=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute(($context["fornecedor"] ?? null), "c_cargo", array()), "html", null, true);
            echo "\" />
            </div>
            <div class=\"col-md-4 col-sm-12 com-xs-12\">
              <label for=\"c_gerente\">Gerente do Contato :</label>
              <input type=\"text\" id=\"c_gerente\" class=\"form-control\" name=\"c_gerente\" value=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute(($context["fornecedor"] ?? null), "c_gerente", array()), "html", null, true);
            echo "\" />
            </div>
          </div>
          <br />

          <div class=\"row\">
            <div class=\"col-md-6 col-sm-12 com-xs-12\">
              <label for=\"fone\">Telefone * :</label>
              <input type=\"text\" id=\"fone\" class=\"form-control\" name=\"fone\" required value=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute(($context["fornecedor"] ?? null), "fone", array()), "html", null, true);
            echo "\" />
            </div>
            <div class=\"col-md-6 col-sm-12 com-xs-12\">
              <label for=\"fone_alt\">Telefone Alt. :</label>
              <input type=\"text\" id=\"fone_alt\" class=\"form-control\" name=\"fone_alt\" value=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute(($context["fornecedor"] ?? null), "fone_alt", array()), "html", null, true);
            echo "\" />
            </div>
          </div>
          <br />

          <div class=\"row\">
            <div class=\"col-md-6 col-sm-12 com-xs-12\">
              <label for=\"email\">E-mail * :</label>
              <input type=\"text\" id=\"email\" class=\"form-control\" name=\"email\" required value=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute(($context["fornecedor"] ?? null), "email", array()), "html", null, true);
            echo "\" />
            </div>
            <div class=\"col-md-6 col-sm-12 com-xs-12\">
              <label for=\"email_alt\">E-mail Alt. :</label>
              <input type=\"text\" id=\"email_alt\" class=\"form-control\" name=\"email_alt\" value=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute(($context["fornecedor"] ?? null), "email_alt", array()), "html", null, true);
            echo "\" />
            </div>
          </div>
          <br />

          <br />
          <input type=\"submit\" class=\"btn btn-primary\" value=\"Salvar\" />
          
          ";
            // line 90
            echo "        </div>
    </div>
    </div>
  </div>
    
";
            // line 95
            if (($context["midias"] ?? null)) {
                // line 96
                echo "  <div class=\"row\">
    <!-- Editar Mídias -->
     <div class=\"col-md-12 col-sm-12 col-xs-12\">
      <div class=\"x_panel\">
        <div class=\"x_title\">
          <h2>Mídias</h2>
          <div class=\"clearfix\"></div>
        </div>
        <div class=\"x_content\">
          ";
                // line 105
                echo $context["tabela"]->getlistar_midias_select(($context["midias"] ?? null), ($context["fornecedor"] ?? null));
                echo "
        </div>
      </div>
    </div>
  </div>
";
            }
            // line 111
            echo "</form>

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

    // line 115
    public function geteditar_midia($__midia__ = null, $__midias__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "midia" => $__midia__,
            "midias" => $__midias__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 116
            echo "
<form id=\"demo-form\" method=\"post\" action=\"/financeiro/midias/";
            // line 117
            if (($context["midia"] ?? null)) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["midia"] ?? null), "id", array()), "html", null, true);
                echo "/edit";
            } else {
                echo "new";
            }
            echo "\" data-parsley-validate>
  ";
            // line 118
            echo csrf_field();
            echo "
  <div class=\"row\">
    
    <div class=\"col-md-12 col-sm-12 col-xs-12\">
      <div class=\"x_panel\">
        <div class=\"x_title\">
          <h2>";
            // line 124
            if (($context["midia"] ?? null)) {
                echo "Editar";
            } else {
                echo "Inserir";
            }
            echo " Tipo de Mídia</h2>
          <div class=\"clearfix\"></div>
        </div>
        <div class=\"x_content\">
          ";
            // line 128
            if (($context["midia"] ?? null)) {
                // line 129
                echo "          <label for=\"id\">ID (não mutável) :</label>
          <input type=\"text\" id=\"id\" class=\"form-control\" name=\"id\" readonly value=\"";
                // line 130
                echo twig_escape_filter($this->env, $this->getAttribute(($context["midia"] ?? null), "id", array()), "html", null, true);
                echo "\" />
          <br />
          ";
                // line 135
                echo "          ";
            }
            // line 136
            echo "
          <div class=\"row\">
            <div class=\"col-md-6 col-sm-12 com-xs-12\">
              <label for=\"nome\">Nome * :</label>
              <input type=\"text\" id=\"nome\" class=\"form-control\" name=\"nome\" required value=\"";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute(($context["midia"] ?? null), "nome", array()), "html", null, true);
            echo "\" />
            </div>
            <div class=\"col-md-6 col-sm-12 com-xs-12\">
              <label for=\"codigo\">Código * :</label>
              <input type=\"text\" id=\"codigo\" class=\"form-control\" name=\"codigo\" required value=\"";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute(($context["midia"] ?? null), "codigo", array()), "html", null, true);
            echo "\" />
            </div>
          </div>
          <br />

          <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 com-xs-12\">
              <label for=\"categoria\">Categoria * :</label>
              <select class=\"form-control\" name=\"categoria\" id=\"sel_categoria\">
                <option>Nenhuma</option>
              ";
            // line 154
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["midias"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 155
                echo "              ";
                if (($this->getAttribute($context["cat"], "id", array()) != $this->getAttribute(($context["midia"] ?? null), "id", array()))) {
                    // line 156
                    echo "                <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "id", array()), "html", null, true);
                    echo "\" ";
                    if (($this->getAttribute($context["cat"], "id", array()) == $this->getAttribute($this->getAttribute(($context["midia"] ?? null), "categoria", array()), "id", array()))) {
                        echo "selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "categoria_arvore", array(0 => true, 1 => " > "), "method"), "html", null, true);
                    echo "</option>
              ";
                }
                // line 158
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "              </select>
            </div>
          </div>
          <br />

          <br />
          <input type=\"submit\" class=\"btn btn-primary\" value=\"Salvar\" />
        </div>
    </div>
  </div>

  <script>\$(document).ready(function () { sortSelect(\$('#sel_categoria')); });</script>
    
    <!-- Editar Subtipos de Mídia -->
    ";
            // line 185
            echo "  </div>
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

    // line 191
    public function geteditar_nota($__nota__ = null, $__notas__ = null, $__campanhas__ = null, $__midias__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "nota" => $__nota__,
            "notas" => $__notas__,
            "campanhas" => $__campanhas__,
            "midias" => $__midias__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 192
            echo "
";
            // line 194
            if ( !($context["nota"] ?? null)) {
                $context["fornecedores"] = ($context["midias"] ?? null);
            }
            // line 195
            echo "
";
            // line 196
            $context["exibir"] = $this->loadTemplate("Admin::helpers.link_display", "Admin::helpers.form_financeiro", 196);
            // line 197
            $context["tabela"] = $this->loadTemplate("Admin::helpers.tabela_financeiro", "Admin::helpers.form_financeiro", 197);
            // line 198
            echo "<form action=\"";
            if (($context["nota"] ?? null)) {
                echo $context["exibir"]->geturl_admin("financeiro/notas", $this->getAttribute(($context["nota"] ?? null), "id", array()), "edit");
            } else {
                echo $context["exibir"]->geturl_admin("financeiro/notas", null, "new");
            }
            echo "\" method=\"post\">
";
            // line 199
            echo csrf_field();
            echo "
    <div class=\"row\">
      <div class=\"col-md-12 col-sm-12 col-xs-12\">
          <div class=\"x_panel\">
            <div class=\"x_title\">
              <h2>";
            // line 204
            if (($context["nota"] ?? null)) {
                echo "Editando";
            } else {
                echo "Inserir";
            }
            echo " Nota Fiscal</h2>
              <div class=\"clearfix\"></div>
            </div>
            <div class=\"x_content\">

            <div class=\"row\">
              <div class=\"col-md-2 col-sm-12 col-xs-12\">
                <label>Número:</label>
              ";
            // line 212
            if (($context["nota"] ?? null)) {
                // line 213
                echo "                <div>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["nota"] ?? null), "numero", array()), "html", null, true);
                echo "</div>
              ";
            } else {
                // line 215
                echo "                <input type=\"number\" class=\"form-control no-spin\" name=\"numero\" />
              ";
            }
            // line 217
            echo "              </div>
              <div class=\"col-md-4 col-sm-12 col-xs-12\">
                <label>Fornecedor:</label>
              ";
            // line 220
            if (($context["nota"] ?? null)) {
                // line 221
                echo "                <div>";
                echo $context["exibir"]->getnota_fornecedor(($context["nota"] ?? null));
                echo "</div>
              ";
            } else {
                // line 223
                echo "                <select name=\"fornecedor\" class=\"select2 form-control\" data-placeholder=\"Selecione um fornecedor\">
                  <option></option>
                ";
                // line 225
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["fornecedores"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["fornecedor"]) {
                    // line 226
                    echo "                  <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fornecedor"], "id", array()), "html", null, true);
                    echo "\">";
                    echo $context["exibir"]->getfornecedor_nome($context["fornecedor"]);
                    echo "</option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fornecedor'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 228
                echo "                </select>
              ";
            }
            // line 230
            echo "              </div>
              <div class=\"col-md-2 col-sm-6 col-xs-6\">
                <label>Data:</label>
              ";
            // line 233
            if (($context["nota"] ?? null)) {
                // line 234
                echo "                <div>";
                echo $context["exibir"]->getdata($this->getAttribute(($context["nota"] ?? null), "data", array()));
                echo "</div>
              ";
            } else {
                // line 236
                echo "                <div class=\"col-md-12\">
                  <input class=\"form-control\" type=\"date\" name=\"data\" />
                </div>
              ";
            }
            // line 240
            echo "              </div>
              <div class=\"col-md-2 col-sm-6 col-xs-6\">
                <label>Data Vcto.:</label>
              ";
            // line 243
            if (($context["nota"] ?? null)) {
                // line 244
                echo "                <div>";
                echo $context["exibir"]->getdata($this->getAttribute(($context["nota"] ?? null), "vencimento", array()));
                echo "</div>
              ";
            } else {
                // line 246
                echo "                <div class=\"col-md-12\">
                  <input class=\"form-control\" type=\"date\" name=\"vencimento\" />
                </div>
              ";
            }
            // line 250
            echo "              </div>
              <div class=\"col-md-2 col-sm-6 col-xs-6\">
                <label>Valor:</label>
              ";
            // line 253
            if (($context["nota"] ?? null)) {
                // line 254
                echo "                <div>R\$ ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["nota"] ?? null), "valor", array()), 2, ",", "."), "html", null, true);
                echo "</div>
              ";
            } else {
                // line 256
                echo "                <div class=\"col-md-12\">
                  <input class=\"form-control no-spin has-feedback-left\" type=\"number\" step=\"any\" min=\"0\" name=\"valor\" />
                  <span class=\"form-control-feedback left\" aria-hidden=\"true\">R\$</span>
                </div>
              ";
            }
            // line 261
            echo "              </div>
              <div class=\"col-md-2 col-sm-6 col-xs-6\">
              ";
            // line 263
            if (($context["nota"] ?? null)) {
                // line 264
                echo "                <label>Valor Total:</label>
                <div>R\$ ";
                // line 265
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["nota"] ?? null), "valor_somado", array()), 2, ",", "."), "html", null, true);
                echo "</div>
              ";
            } else {
                // line 267
                echo "                <label>&nbsp;</label>
                <input type=\"submit\" class=\"form-control btn btn-success\" value=\"Salvar\" />
              ";
            }
            // line 270
            echo "              </div>
            </div>
            <br />

          ";
            // line 274
            if (($context["nota"] ?? null)) {
                // line 275
                echo "            <div class=\"row\">
              <div class=\"col-md-10 col-sm-12 col-xs-12\">
                <label>Descrição:</label>
                <input class=\"form-control\" type=\"text\" name=\"descricao\" value=\"";
                // line 278
                echo twig_escape_filter($this->env, $this->getAttribute(($context["nota"] ?? null), "descricao", array()), "html", null, true);
                echo "\" />
              </div>
              <div class=\"col-md-2 col-sm-12 col-xs-12\">
                <label>&nbsp;</label>
                <input type=\"submit\" class=\"form-control btn btn-success\" value=\"Salvar\" />
              </div>
            </div>
            <br />
          ";
            }
            // line 287
            echo "
            </div>
          </div>
        </div>

        <div class=\"clearfix\"></div>
    </div>

";
            // line 295
            if (($context["nota"] ?? null)) {
                // line 296
                echo "
    <div class=\"row\">
      <div class=\"col-md-12 col-sm-12 col-xs-12\">
          <div class=\"x_panel\">
            <div class=\"x_title\">
              <h2>Notas Relacionadas <small><input type=\"checkbox\" class=\"flat\" name=\"somar_relacionadas\" id=\"somar_relacionadas\" ";
                // line 301
                if ($this->getAttribute(($context["nota"] ?? null), "somar_relacionadas", array())) {
                    echo "checked";
                }
                echo " /> <label for=\"somar_relacionadas\">Somar Notas Relacionadas</label></small></h2>
              <div class=\"clearfix\"></div>
            </div>
            <div class=\"x_content\">

            ";
                // line 306
                echo $context["tabela"]->getlistar_notas($this->getAttribute(($context["nota"] ?? null), "notas_relacionadas", array()), ($context["notas"] ?? null));
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
                // line 324
                echo $context["tabela"]->getlistar_nota_campanhas(($context["nota"] ?? null), true, ($context["campanhas"] ?? null), ($context["midias"] ?? null));
                echo "

            </div>
          </div>
        </div>

        <div class=\"clearfix\"></div>
    </div>

";
            }
            // line 334
            echo "
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
        return "Admin::helpers.form_financeiro";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  658 => 334,  645 => 324,  624 => 306,  614 => 301,  607 => 296,  605 => 295,  595 => 287,  583 => 278,  578 => 275,  576 => 274,  570 => 270,  565 => 267,  560 => 265,  557 => 264,  555 => 263,  551 => 261,  544 => 256,  538 => 254,  536 => 253,  531 => 250,  525 => 246,  519 => 244,  517 => 243,  512 => 240,  506 => 236,  500 => 234,  498 => 233,  493 => 230,  489 => 228,  478 => 226,  474 => 225,  470 => 223,  464 => 221,  462 => 220,  457 => 217,  453 => 215,  447 => 213,  445 => 212,  430 => 204,  422 => 199,  413 => 198,  411 => 197,  409 => 196,  406 => 195,  402 => 194,  399 => 192,  384 => 191,  365 => 185,  349 => 159,  343 => 158,  331 => 156,  328 => 155,  324 => 154,  311 => 144,  304 => 140,  298 => 136,  295 => 135,  290 => 130,  287 => 129,  285 => 128,  274 => 124,  265 => 118,  256 => 117,  253 => 116,  240 => 115,  223 => 111,  214 => 105,  203 => 96,  201 => 95,  194 => 90,  183 => 81,  176 => 77,  165 => 69,  158 => 65,  147 => 57,  140 => 53,  133 => 49,  118 => 37,  111 => 33,  106 => 30,  100 => 28,  94 => 26,  92 => 25,  86 => 21,  80 => 18,  77 => 17,  75 => 16,  64 => 12,  54 => 5,  45 => 4,  42 => 3,  40 => 2,  27 => 1,  22 => 190,  19 => 114,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Admin::helpers.form_financeiro", "");
    }
}

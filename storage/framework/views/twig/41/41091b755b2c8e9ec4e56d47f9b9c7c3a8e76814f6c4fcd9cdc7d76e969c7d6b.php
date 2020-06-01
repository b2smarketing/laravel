<?php

/* Admin::helpers.tabela_financeiro */
class __TwigTemplate_3802e9693d1e05aa37a535c7f603f6247fafff9b42fd4fcdb071e09d2d7891f9 extends TwigBridge\Twig\Template
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
        // line 1
        echo "<!-- -------------------------- Macro -------------------------- -->
";
        // line 44
        echo "
<!-- -------------------------- Macro -------------------------- -->
";
        // line 83
        echo "
<!-- -------------------------- Macro -------------------------- -->
";
        // line 163
        echo "
<!-- -------------------------- Macro -------------------------- -->
";
        // line 243
        echo "
<!-- -------------------------- Macro -------------------------- -->
";
        // line 323
        echo "
<!-- -------------------------- Macro -------------------------- -->
";
    }

    // line 2
    public function getlistar_midias_select($__midias__ = null, $__fornecedor__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "midias" => $__midias__,
            "fornecedor" => $__fornecedor__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 3
            echo "    <table class=\"table table-striped\" id=\"tabela_locais\">
        <thead>
            <tr>
                <th></th>
                <th>Mídia</th>
                <th>Nome</th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["midias"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["midia"]) {
                // line 13
                echo "                ";
                if ($this->getAttribute($this->getAttribute(($context["fornecedor"] ?? null), "tipos_midias", array()), "contains", array(0 => $context["midia"]), "method")) {
                    // line 14
                    echo "                    ";
                    $context["fornecedor_midia"] = $this->getAttribute(($context["fornecedor"] ?? null), "midia", array(0 => $context["midia"]), "method");
                    // line 15
                    echo "                ";
                } else {
                    // line 16
                    echo "                    ";
                    $context["fornecedor_midia"] = null;
                    // line 17
                    echo "                ";
                }
                // line 18
                echo "                
                <tr class=\"";
                // line 19
                if (($context["fornecedor_midia"] ?? null)) {
                    echo "success";
                }
                echo "\">
                    <th scope=\"row\"><input type=\"checkbox\" name=\"midias[]\" value=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["midia"], "id", array()), "html", null, true);
                echo "\"
                            ";
                // line 21
                if (($context["fornecedor_midia"] ?? null)) {
                    echo "checked";
                }
                echo " /></th>
                    <td>";
                // line 22
                if ($this->getAttribute($context["midia"], "categoria", array())) {
                    echo $this->getAttribute($context["midia"], "categoria_arvore", array(0 => true), "method");
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["midia"], "nome", array()), "html", null, true);
                }
                echo "</td>
                    <td>";
                // line 23
                if (($context["fornecedor_midia"] ?? null)) {
                    echo "<input class=\"form-control\" name=\"midia_nome[";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["fornecedor_midia"] ?? null), "id", array()), "html", null, true);
                    echo "]\"
                            type=\"text\" value=\"";
                    // line 24
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["fornecedor_midia"] ?? null), "nome", array()), "html", null, true);
                    echo "\" />";
                } else {
                    echo "<em>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["midia"], "nome", array()), "html", null, true);
                    echo "</em>";
                }
                // line 25
                echo "                    </td>
                </tr>
                
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['midia'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "        </tbody>
    </table>
    <script>
        \$(window).load(function () {

            \$('#tabela_locais').DataTable({
                responsive: true,
                pageLength: 50,
                order: [
                    [1, 'asc']
                ] // Ordenar por categoria e nome
            });
        });
    </script>
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

    // line 46
    public function getlistar_midias($__midias__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "midias" => $__midias__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 47
            echo "    <table class=\"table table-striped\" id=\"tabela_locais\">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Categoria</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["midias"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["midia"]) {
                // line 58
                echo "            <tr>
                <th scope=\"row\">";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["midia"], "id", array()), "html", null, true);
                echo "</th>
                <td>";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["midia"], "nome", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 61
                if ($this->getAttribute($context["midia"], "categoria", array())) {
                    echo $this->getAttribute($context["midia"], "categoria_arvore", array(), "method");
                }
                echo "</td>
                <td>
                    <a href=\"/financeiro/midias/";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["midia"], "id", array()), "html", null, true);
                echo "/\" title=\"Visualizar\"><i class=\"fa fa-eye\"></i></a>
                    <a href=\"/financeiro/midias/";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["midia"], "id", array()), "html", null, true);
                echo "/edit\" title=\"Editar\"><i class=\"fa fa-edit\"></i></a>
                </td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['midia'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "        </tbody>
    </table>
    <script>
        \$(window).load(function () {

            \$('#tabela_locais').DataTable({
                responsive: true,
                order: [
                    [2, 'asc'],
                    [1, 'asc']
                ] // Ordenar por categoria e nome
            });
        });
    </script>
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

    // line 85
    public function getlistar_notas($__notas__ = null, $__notas_todas__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "notas" => $__notas__,
            "notas_todas" => $__notas_todas__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 86
            echo "    ";
            $context["exibir"] = $this->loadTemplate("Admin::helpers.link_display", "Admin::helpers.tabela_financeiro", 86);
            // line 87
            echo "    <table class=\"table table-striped\" id=\"tabela_notas\">
        <thead>
            <tr>
                <th>Número</th>
                <th>Fornecedor</th>
                <th>Data</th>
                <th>Vencimento</th>
                <th>Descrição</th>
                <th>Valor</th>
                <th>Valor Total</th>
                ";
            // line 97
            if (($context["notas_todas"] ?? null)) {
                echo "<th></th>";
            }
            // line 98
            echo "            </tr>
        </thead>
        <tbody>
            ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["notas"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["nota"]) {
                // line 102
                echo "            <tr>
                <th scope=\"row\">";
                // line 103
                echo $context["exibir"]->getnota_codigo($context["nota"]);
                echo "</td>
                <td>";
                // line 104
                echo $context["exibir"]->getnota_fornecedor($context["nota"]);
                echo "</td>
                <td>";
                // line 105
                echo $context["exibir"]->getdata($this->getAttribute($context["nota"], "data", array()));
                echo "</td>
                <td>";
                // line 106
                echo $context["exibir"]->getdata($this->getAttribute($context["nota"], "vencimento", array()));
                echo "</td>
                <td>";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute($context["nota"], "descricao", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 108
                echo $context["exibir"]->getreais($this->getAttribute($context["nota"], "valor", array()));
                echo "</td>
                <td>";
                // line 109
                echo $context["exibir"]->getreais($this->getAttribute($context["nota"], "valor_somado", array()));
                echo "</td>
                ";
                // line 110
                if (($context["notas_todas"] ?? null)) {
                    echo "<td><input name=\"notas_relacionadas[]\" type=\"checkbox\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["nota"], "id", array()), "html", null, true);
                    echo "\" checked />
                </td>";
                }
                // line 112
                echo "            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nota'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "        </tbody>
    </table>

    ";
            // line 118
            echo "    ";
            if (($context["notas_todas"] ?? null)) {
                // line 119
                echo "    <br />
    <div class=\"row\">
        <div class=\"col-md-10\">
            <label for=\"relacionadas_new\">Inserir Nota Relacionada:</label>
            <select data-placeholder=\"Selecionar nota fiscal\" class=\"select2 form-control\" id=\"tabela_notas_nova\"
                name=\"relacionadas_new\" id=\"relacionadas_new\">
                <option></option>
                ";
                // line 126
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["notas_todas"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["nota"]) {
                    // line 127
                    echo "                <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["nota"], "id", array()), "html", null, true);
                    echo "\">";
                    echo $context["exibir"]->getnota_descritivo($context["nota"]);
                    echo "</option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nota'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 129
                echo "            </select>
        </div>
        <div class=\"col-md-2\">
            <label>&nbsp;</label>
            <input type=\"submit\" class=\"form-control btn btn-success\" value=\"Salvar\" />
        </div>
    </div>
    <br />
    <p><em><strong>Obs.:</strong> Salvando este item irá salvar a Nota Fiscal inteira.</em></p>
    ";
            }
            // line 139
            echo "
    
    <script>
        \$(window).load(function () {
            \$('#tabela_notas').DataTable({
                responsive: true,
                dom: 'lBfrtip',
                buttons: [
                    {
                        extend: \"csv\",
                        className: \"btn-sm\"
                    },
                    {
                        extend: \"excel\",
                        className: \"btn-sm\"
                    }
                ],
                order: [
                    [3, 'desc']
                ] // Ordenar por data de vencimento
            });
        });
    </script>
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

    // line 165
    public function getlistar_notas_mes($__notas__ = null, $__notas_todas__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "notas" => $__notas__,
            "notas_todas" => $__notas_todas__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 166
            echo "    ";
            $context["exibir"] = $this->loadTemplate("Admin::helpers.link_display", "Admin::helpers.tabela_financeiro", 166);
            // line 167
            echo "    <table class=\"table table-striped\" id=\"tabela_notas_mes\">
        <thead>
            <tr>
                <th>Número</th>
                <th>Fornecedor</th>
                <th>Data</th>
                <th>Vencimento</th>
                <th>Descrição</th>
                <th>Valor</th>
                <th>Valor Total</th>
                ";
            // line 177
            if (($context["notas_todas"] ?? null)) {
                echo "<th></th>";
            }
            // line 178
            echo "            </tr>
        </thead>
        <tbody>
            ";
            // line 181
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["notas"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["nota"]) {
                // line 182
                echo "            <tr>
                <th scope=\"row\">";
                // line 183
                echo $context["exibir"]->getnota_codigo($context["nota"]);
                echo "</td>
                <td>";
                // line 184
                echo $context["exibir"]->getnota_fornecedor($context["nota"]);
                echo "</td>
                <td>";
                // line 185
                echo $context["exibir"]->getdata($this->getAttribute($context["nota"], "data", array()));
                echo "</td>
                <td>";
                // line 186
                echo $context["exibir"]->getdata($this->getAttribute($context["nota"], "vencimento", array()));
                echo "</td>
                <td>";
                // line 187
                echo twig_escape_filter($this->env, $this->getAttribute($context["nota"], "descricao", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 188
                echo $context["exibir"]->getreais($this->getAttribute($context["nota"], "valor", array()));
                echo "</td>
                <td>";
                // line 189
                echo $context["exibir"]->getreais($this->getAttribute($context["nota"], "valor_somado", array()));
                echo "</td>
                ";
                // line 190
                if (($context["notas_todas"] ?? null)) {
                    echo "<td><input name=\"notas_relacionadas[]\" type=\"checkbox\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["nota"], "id", array()), "html", null, true);
                    echo "\" checked />
                </td>";
                }
                // line 192
                echo "            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nota'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 194
            echo "        </tbody>
    </table>

    ";
            // line 198
            echo "    ";
            if (($context["notas_todas"] ?? null)) {
                // line 199
                echo "    <br />
    <div class=\"row\">
        <div class=\"col-md-10\">
            <label for=\"relacionadas_new\">Inserir Nota Relacionada:</label>
            <select data-placeholder=\"Selecionar nota fiscal\" class=\"select2 form-control\" id=\"tabela_notas_nova\"
                name=\"relacionadas_new\" id=\"relacionadas_new\">
                <option></option>
                ";
                // line 206
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["notas_todas"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["nota"]) {
                    // line 207
                    echo "                <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["nota"], "id", array()), "html", null, true);
                    echo "\">";
                    echo $context["exibir"]->getnota_descritivo($context["nota"]);
                    echo "</option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nota'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 209
                echo "            </select>
        </div>
        <div class=\"col-md-2\">
            <label>&nbsp;</label>
            <input type=\"submit\" class=\"form-control btn btn-success\" value=\"Salvar\" />
        </div>
    </div>
    <br />
    <p><em><strong>Obs.:</strong> Salvando este item irá salvar a Nota Fiscal inteira.</em></p>
    ";
            }
            // line 219
            echo "
    <script>
        \$(window).load(function () {

            \$('#tabela_notas_mes').DataTable({
                responsive: true,
                dom: 'lBfrtip',
                buttons: [
                    {
                        extend: \"csv\",
                        className: \"btn-sm\"
                    },
                    {
                        extend: \"excel\",
                        className: \"btn-sm\"
                    }
                ],
                order: [
                    [0, 'desc']
                ] // Ordenar por categoria e nome
            });
        });
    </script>
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

    // line 245
    public function getlistar_notas_mes_anterior($__notas__ = null, $__notas_todas__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "notas" => $__notas__,
            "notas_todas" => $__notas_todas__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 246
            echo "    ";
            $context["exibir"] = $this->loadTemplate("Admin::helpers.link_display", "Admin::helpers.tabela_financeiro", 246);
            // line 247
            echo "    <table class=\"table table-striped\" id=\"tabela_notas_mes_anterior\">
        <thead>
            <tr>
                <th>Número</th>
                <th>Fornecedor</th>
                <th>Data</th>
                <th>Vencimento</th>
                <th>Descrição</th>
                <th>Valor</th>
                <th>Valor Total</th>
                ";
            // line 257
            if (($context["notas_todas"] ?? null)) {
                echo "<th></th>";
            }
            // line 258
            echo "            </tr>
        </thead>
        <tbody>
            ";
            // line 261
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["notas"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["nota"]) {
                // line 262
                echo "            <tr>
                <th scope=\"row\">";
                // line 263
                echo $context["exibir"]->getnota_codigo($context["nota"]);
                echo "</td>
                <td>";
                // line 264
                echo $context["exibir"]->getnota_fornecedor($context["nota"]);
                echo "</td>
                <td>";
                // line 265
                echo $context["exibir"]->getdata($this->getAttribute($context["nota"], "data", array()));
                echo "</td>
                <td>";
                // line 266
                echo $context["exibir"]->getdata($this->getAttribute($context["nota"], "vencimento", array()));
                echo "</td>
                <td>";
                // line 267
                echo twig_escape_filter($this->env, $this->getAttribute($context["nota"], "descricao", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 268
                echo $context["exibir"]->getreais($this->getAttribute($context["nota"], "valor", array()));
                echo "</td>
                <td>";
                // line 269
                echo $context["exibir"]->getreais($this->getAttribute($context["nota"], "valor_somado", array()));
                echo "</td>
                ";
                // line 270
                if (($context["notas_todas"] ?? null)) {
                    echo "<td><input name=\"notas_relacionadas[]\" type=\"checkbox\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["nota"], "id", array()), "html", null, true);
                    echo "\" checked />
                </td>";
                }
                // line 272
                echo "            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nota'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 274
            echo "        </tbody>
    </table>

    ";
            // line 278
            echo "    ";
            if (($context["notas_todas"] ?? null)) {
                // line 279
                echo "    <br />
    <div class=\"row\">
        <div class=\"col-md-10\">
            <label for=\"relacionadas_new\">Inserir Nota Relacionada:</label>
            <select data-placeholder=\"Selecionar nota fiscal\" class=\"select2 form-control\" id=\"tabela_notas_nova\"
                name=\"relacionadas_new\" id=\"relacionadas_new\">
                <option></option>
                ";
                // line 286
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["notas_todas"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["nota"]) {
                    // line 287
                    echo "                <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["nota"], "id", array()), "html", null, true);
                    echo "\">";
                    echo $context["exibir"]->getnota_descritivo($context["nota"]);
                    echo "</option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nota'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 289
                echo "            </select>
        </div>
        <div class=\"col-md-2\">
            <label>&nbsp;</label>
            <input type=\"submit\" class=\"form-control btn btn-success\" value=\"Salvar\" />
        </div>
    </div>
    <br />
    <p><em><strong>Obs.:</strong> Salvando este item irá salvar a Nota Fiscal inteira.</em></p>
    ";
            }
            // line 299
            echo "
    <script>
        \$(window).load(function () {

            \$('#tabela_notas_mes_anterior').DataTable({
                responsive: true,
                dom: 'lBfrtip',
                buttons: [
                    {
                        extend: \"csv\",
                        className: \"btn-sm\"
                    },
                    {
                        extend: \"excel\",
                        className: \"btn-sm\"
                    }
                ],
                order: [
                    [0, 'desc']
                ] // Ordenar por categoria e nome
            });
        });
    </script>
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

    // line 325
    public function getlistar_nota_campanhas($__nota__ = null, $__editar__ = null, $__campanhas__ = null, $__midias__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "nota" => $__nota__,
            "editar" => $__editar__,
            "campanhas" => $__campanhas__,
            "midias" => $__midias__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 326
            echo "    ";
            $context["exibir"] = $this->loadTemplate("Admin::helpers.link_display", "Admin::helpers.tabela_financeiro", 326);
            // line 327
            echo "
    <table class=\"table table-striped\" id=\"tabela_campanhas\">
        <thead>
            <tr class=\"\">
                <td><em>Nota Fiscal - Não Distribuídos</em></td>
                <td>-</td>
                <td>";
            // line 333
            echo $context["exibir"]->getnota_fornecedor(($context["nota"] ?? null));
            echo "</td>
                <td>";
            // line 334
            echo $context["exibir"]->getporcentagem($this->getAttribute(($context["nota"] ?? null), "porcentagem_restante", array()));
            echo "</td>
                <td>";
            // line 335
            echo $context["exibir"]->getreais($this->getAttribute(($context["nota"] ?? null), "valor_restante", array()));
            echo "</td>
            </tr>
            <tr>
                <th>Campanha</th>
                <th>Mídia</th>
                <th>Fornecedor</th>
                <th>%</th>
                <th>Valor</th>
                ";
            // line 343
            if (($context["editar"] ?? null)) {
                echo "<th></th>";
            }
            // line 344
            echo "            </tr>
        </thead>
        <tbody>
            ";
            // line 348
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["nota"] ?? null), "todas_campanhas", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["rel"]) {
                // line 349
                echo "            <tr class=\"";
                if ($this->getAttribute($context["rel"], "_nivel", array())) {
                    echo "info";
                }
                echo "\">
                <td>";
                // line 350
                if ($this->getAttribute($context["rel"], "_nivel", array())) {
                    echo ($context["exibir"]->getnota_codigo($this->getAttribute($context["rel"], "_nota", array())) . $context["exibir"]->getbreadcrumbs());
                }
                echo $context["exibir"]->getcampanha_nome($this->getAttribute($context["rel"], "campanha", array()));
                echo "
                </td>
                <td>";
                // line 352
                echo $this->getAttribute($this->getAttribute($context["rel"], "midia", array()), "nome", array());
                echo "</td>
                <td>";
                // line 353
                echo $context["exibir"]->getmidia_fornecedor($this->getAttribute($context["rel"], "midia", array()));
                echo "</td>
                <td>";
                // line 354
                echo $context["exibir"]->getporcentagem($this->getAttribute($context["rel"], "porcentagem_relativa", array(0 => $this->getAttribute(($context["nota"] ?? null), "valor_somado", array())), "method"));
                echo "</td>
                <td>";
                // line 355
                echo $context["exibir"]->getreais($this->getAttribute($context["rel"], "valor", array()));
                echo "</td>
                ";
                // line 356
                if (($context["editar"] ?? null)) {
                    echo "<td><input name=\"campanhas[]\" class=\"flat\" type=\"checkbox\" checked
                        ";
                    // line 357
                    if ($this->getAttribute($context["rel"], "_nivel", array())) {
                        echo "disabled";
                    } else {
                        echo "value=\"";
                        echo $this->getAttribute($context["rel"], "id", array());
                        echo "\" ";
                    }
                    echo " /></td>";
                }
                // line 358
                echo "            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 360
            echo "            ";
            // line 361
            echo "        </tbody>
    </table>

    <p><em><strong>Observação:</strong> Porcentagens marcadas em azul são baseadas no valor total desta nota.</em></p>

    ";
            // line 366
            if (((($context["editar"] ?? null) && ($context["campanhas"] ?? null)) && ($context["midias"] ?? null))) {
                // line 367
                echo "    <div class=\"row\">
        <div class=\"col-md-12\"><label>Inserir campanha:</label></div>
        <div class=\"col-md-4\">
            <select class=\"select2 form-control\" name=\"campanha_new[campanha]\" data-placeholder=\"Selecione uma campanha\">
                <option></option>
                ";
                // line 372
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["campanhas"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["campanha"]) {
                    // line 373
                    echo "                <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["campanha"], "id", array()), "html", null, true);
                    echo "\">";
                    echo $context["exibir"]->getcampanha_nome($context["campanha"]);
                    echo "</option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['campanha'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 375
                echo "            </select>
        </div>
        <div class=\"col-md-4\">
            <select class=\"select2 form-control\" name=\"campanha_new[midia]\" data-placeholder=\"Selecione uma mídia\">
                <option></option>
                ";
                // line 380
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["midias"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["midia"]) {
                    // line 381
                    echo "                <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["midia"], "id", array()), "html", null, true);
                    echo "\">";
                    echo $context["exibir"]->getmidia_nome($context["midia"]);
                    echo "</option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['midia'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 383
                echo "            </select>
        </div>
        <div class=\"col-md-2\">
            <input class=\"form-control no-spin has-feedback-right\" type=\"number\" step=\"any\" min=\"0\"
                max=\"";
                // line 387
                echo twig_escape_filter($this->env, $this->getAttribute(($context["nota"] ?? null), "porcentagem_restante", array()), "html", null, true);
                echo "\" name=\"campanha_new[porcentagem]\"
                placeholder=\"Digite uma porcentagem\" />
            <span class=\"form-control-feedback right\" aria-hidden=\"true\">%</span>
        </div>
        <div class=\"col-md-2\">
            <input type=\"submit\" class=\"form-control btn btn-success\" value=\"Salvar\" />
        </div>
    </div>
    <br />
    <p><em><strong>Obs.:</strong> Salvando este item irá salvar a Nota Fiscal inteira.</em></p>
    ";
            }
            // line 398
            echo "
    <script>
        \$(window).load(function () {

            \$('#tabela_campanhas').DataTable({
                responsive: true,
                dom: 'lBfrtip',
                buttons: [
                    {
                        extend: \"csv\",
                        className: \"btn-sm\"
                    },
                    {
                        extend: \"excel\",
                        className: \"btn-sm\"
                    }
                ]
                // order: [[0, 'desc']] // Ordenar por categoria e nome
            });
        });
    </script>
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
        return "Admin::helpers.tabela_financeiro";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  945 => 398,  931 => 387,  925 => 383,  914 => 381,  910 => 380,  903 => 375,  892 => 373,  888 => 372,  881 => 367,  879 => 366,  872 => 361,  870 => 360,  863 => 358,  853 => 357,  849 => 356,  845 => 355,  841 => 354,  837 => 353,  833 => 352,  825 => 350,  818 => 349,  813 => 348,  808 => 344,  804 => 343,  793 => 335,  789 => 334,  785 => 333,  777 => 327,  774 => 326,  759 => 325,  721 => 299,  709 => 289,  698 => 287,  694 => 286,  685 => 279,  682 => 278,  677 => 274,  670 => 272,  663 => 270,  659 => 269,  655 => 268,  651 => 267,  647 => 266,  643 => 265,  639 => 264,  635 => 263,  632 => 262,  628 => 261,  623 => 258,  619 => 257,  607 => 247,  604 => 246,  591 => 245,  553 => 219,  541 => 209,  530 => 207,  526 => 206,  517 => 199,  514 => 198,  509 => 194,  502 => 192,  495 => 190,  491 => 189,  487 => 188,  483 => 187,  479 => 186,  475 => 185,  471 => 184,  467 => 183,  464 => 182,  460 => 181,  455 => 178,  451 => 177,  439 => 167,  436 => 166,  423 => 165,  385 => 139,  373 => 129,  362 => 127,  358 => 126,  349 => 119,  346 => 118,  341 => 114,  334 => 112,  327 => 110,  323 => 109,  319 => 108,  315 => 107,  311 => 106,  307 => 105,  303 => 104,  299 => 103,  296 => 102,  292 => 101,  287 => 98,  283 => 97,  271 => 87,  268 => 86,  255 => 85,  226 => 68,  216 => 64,  212 => 63,  205 => 61,  201 => 60,  197 => 59,  194 => 58,  190 => 57,  178 => 47,  166 => 46,  137 => 29,  128 => 25,  120 => 24,  114 => 23,  106 => 22,  100 => 21,  96 => 20,  90 => 19,  87 => 18,  84 => 17,  81 => 16,  78 => 15,  75 => 14,  72 => 13,  68 => 12,  57 => 3,  44 => 2,  38 => 323,  34 => 243,  30 => 163,  26 => 83,  22 => 44,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Admin::helpers.tabela_financeiro", "");
    }
}

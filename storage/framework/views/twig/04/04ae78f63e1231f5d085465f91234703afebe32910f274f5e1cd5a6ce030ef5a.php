<?php

/* /var/www/app/app/Modules/Admin/views/Alunos/edit-lead.twig */
class __TwigTemplate_a0bd6bbae64a70d5fcab33cb7e7daa8bf55d6dbcdee7a7de5f0ee6fcb2d3c62d extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::layout", "/var/www/app/app/Modules/Admin/views/Alunos/edit-lead.twig", 1);
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
        $context["title"] = ("Alunos: " . $this->getAttribute(($context["aluno"] ?? null), "nome", array()));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"right_col\" role=\"main\">
\t<div class=\"\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t<div class=\"x_panel\">
\t\t\t\t\t<div class=\"x_title\">
\t\t\t\t\t\t<h2>Editando cadastro #";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["lead"] ?? null), "id", array()), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "nome", array()), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"x_content\">

\t\t\t\t\t\t<form method=\"post\" action=\"/alunos/";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "id", array()), "html", null, true);
        echo "/lead/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["lead"] ?? null), "id", array()), "html", null, true);
        echo "\">

\t\t\t\t\t\t\t";
        // line 19
        echo csrf_field();
        echo "

\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-2 col-sm-2 col-xs-3\">
\t\t\t\t\t\t\t\t\t<label>ID :</label>
\t\t\t\t\t\t\t\t\t<div><input readonly type=\"text\" class=\"form-control\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["lead"] ?? null), "id", array()), "html", null, true);
        echo "\" /></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-3 col-xs-9\">
\t\t\t\t\t\t\t\t\t<label>Campanha :</label>
\t\t\t\t\t\t\t\t\t<div><input readonly type=\"text\" class=\"form-control\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["lead"] ?? null), "campanha", array()), "nome", array()), "html", null, true);
        echo "\" /></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-3 col-xs-12\">
\t\t\t\t\t\t\t\t\t<label>Status :</label>
\t\t\t\t\t\t\t\t\t<div><input readonly type=\"text\" class=\"form-control\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["lead"] ?? null), "status", array()), "nome", array()), "html", null, true);
        echo "\" /></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4 col-xs-12\">
\t\t\t\t\t\t\t\t\t<label>Data da Prova :</label>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"data_prova\">
\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"Data Selecionada (não reagendar):\">
\t\t\t\t\t\t\t\t\t\t\t\t<option selected value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["lead"] ?? null), "prova", array()), "data", array()), "id", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["lead"] ?? null), "prova", array()), "data", array()), "hora", array()), "d/m/Y"), "html", null, true);
        echo " -
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 40
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["lead"] ?? null), "prova", array()), "data", array()), "hora", array()), "H:i"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('App\TwigExtended')->dia_semana(twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["lead"] ?? null), "prova", array()), "data", array()), "hora", array()), "w")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"Datas Disponíveis (reagendar):\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["lead"] ?? null), "campanha", array()), "locais_provas", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["local"]) {
            // line 45
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["local"], "datas_provas_disponiveis", array())) {
                // line 46
                echo "\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "local", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["local"], "datas_provas_disponiveis", array()), "splice", array(0 => 0, 1 => 10), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                    // line 48
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "hora", array()), "d/m/Y"), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "hora", array()), "H:i"), "html", null, true);
                    echo " -
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 49
                    echo twig_escape_filter($this->env, $this->env->getExtension('App\TwigExtended')->dia_semana(twig_date_format_filter($this->env, $this->getAttribute($context["data"], "hora", array()), "w")), "html", null, true);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 53
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['local'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br />

\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-3 col-xs-12\">
\t\t\t\t\t\t\t\t\t<label>Opção de Curso p/ Matrícula :</label>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<select name=\"opcao_curso\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" ";
        // line 66
        if (($this->getAttribute(($context["lead"] ?? null), "opcao_curso_1", array()) == $this->getAttribute(($context["lead"] ?? null), "curso_id", array()))) {
            echo "selected";
        }
        echo ">1ª Opção -
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["lead"] ?? null), "curso_primeira_opcao", array()), "nome", array()), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 68
        if ($this->getAttribute(($context["lead"] ?? null), "opcao_curso_2", array())) {
            // line 69
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\" ";
            if (($this->getAttribute(($context["lead"] ?? null), "opcao_curso_2", array()) == $this->getAttribute(($context["lead"] ?? null), "curso_id", array()))) {
                echo "selected";
            }
            echo ">2ª Opção -
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["lead"] ?? null), "curso_segunda_opcao", array()), "nome", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 71
            if ($this->getAttribute(($context["lead"] ?? null), "opcao_curso_3", array())) {
                // line 72
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\" ";
                if (($this->getAttribute(($context["lead"] ?? null), "opcao_curso_3", array()) == $this->getAttribute(($context["lead"] ?? null), "curso_id", array()))) {
                    echo "selected";
                }
                echo ">3ª Opção -
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["lead"] ?? null), "curso_terceira_opcao", array()), "nome", array()), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 75
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 76
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-3 col-xs-12\">
\t\t\t\t\t\t\t\t\t<label>1ª Opção de Curso :</label>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<select name=\"opcoes_curso[]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["lead"] ?? null), "campanha", array()), "cursos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
            // line 84
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["curso"], "id", array()) == $this->getAttribute(($context["lead"] ?? null), "opcao_curso_1", array()))) {
                echo "selected";
            }
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "nome", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-3 col-xs-12\">
\t\t\t\t\t\t\t\t\t<label>2ª Opção de Curso :</label>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<select name=\"opcoes_curso[]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">- Nenhuma -</option>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["lead"] ?? null), "campanha", array()), "cursos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
            // line 96
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["curso"], "id", array()) == $this->getAttribute(($context["lead"] ?? null), "opcao_curso_2", array()))) {
                echo "selected";
            }
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "nome", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-3 col-xs-12\">
\t\t\t\t\t\t\t\t\t<label>3ª Opção de Curso :</label>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<select name=\"opcoes_curso[]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">- Nenhuma -</option>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["lead"] ?? null), "campanha", array()), "cursos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
            // line 108
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["curso"], "id", array()) == $this->getAttribute(($context["lead"] ?? null), "opcao_curso_3", array()))) {
                echo "selected";
            }
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "nome", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t<hr />

\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-3 col-xs-12\">
\t\t\t\t\t\t\t\t\t<label>Conversão Manual de Lead :</label>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<select name=\"converter_lead\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected>- Não Converter -</option>
\t\t\t\t\t\t\t\t\t\t";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lead_status"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 127
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["status"], "codigo", array()), "html", null, true);
            echo "\">Base ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["status"], "base_id", array()), "html", null, true);
            echo " :: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["status"], "nome", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "\t\t\t\t\t\t\t\t\t\t";
        if ((($this->getAttribute($this->getAttribute(($context["lead"] ?? null), "campanha", array()), "id", array()) == 6) || $this->getAttribute(call_user_func_array($this->env->getFunction('auth_user')->getCallable(), array()), "can", array(0 => "dev*"), "method"))) {
            // line 130
            echo "\t\t\t\t\t\t\t\t\t\t\t<optgroup style=\"background-color:red;color:#fff\" label=\"--- Opções de Desenvolvedor ---\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"LEAD\">Base 0 :: LEAD</option>
\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 134
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-9 col-sm-9 col-xs-12\">
\t\t\t\t\t\t\t\t\t<label>Aviso :</label>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<p>Esta conversão manual é destinada apenas para casos onde o sistema não atualizou o status do lead
\t\t\t\t\t\t\t\t\t\t\tautomaticamente. Seu uso acarretará em migrações de base em outros sistemas e um registro de
\t\t\t\t\t\t\t\t\t\t\talteração sendo feito no histórico do lead.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 148
        if ($this->getAttribute(($context["lead"] ?? null), "prova", array())) {
            // line 149
            echo "\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t<hr />

\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<label>Resultados da Prova</label>
\t\t\t\t\t\t\t\t\t<p>Abaixo você pode visualizar os resultados da prova do candidato no banco de dados.</p>
\t\t\t\t\t\t\t\t\t<p>A edição destes resultados está desativada e os mesmos são alimentados pelos sistemas internos do TI.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-1\">
\t\t\t\t\t\t\t\t\t<label>Disponíveis</label>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" disabled readonly value=\"";
            // line 161
            if ($this->getAttribute($this->getAttribute(($context["lead"] ?? null), "prova", array()), "dados_disponiveis", array())) {
                echo "Sim";
            } else {
                echo "Não";
            }
            echo "\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-1\">
\t\t\t\t\t\t\t\t\t<label>Atualizados</label>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" disabled readonly value=\"";
            // line 167
            if ($this->getAttribute($this->getAttribute(($context["lead"] ?? null), "prova", array()), "dados_foram_atualizados", array())) {
                echo "Sim";
            } else {
                echo "Não";
            }
            echo "\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-1\">
\t\t\t\t\t\t\t\t\t<label>Participou</label>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" disabled readonly value=\"";
            // line 173
            if ($this->getAttribute($this->getAttribute(($context["lead"] ?? null), "prova", array()), "raw", array(0 => "participou"), "method")) {
                echo "Sim";
            } else {
                echo "Não";
            }
            echo "\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-1\">
\t\t\t\t\t\t\t\t\t<label>Aprovado</label>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" disabled readonly value=\"";
            // line 179
            if ($this->getAttribute($this->getAttribute(($context["lead"] ?? null), "prova", array()), "raw", array(0 => "aprovado"), "method")) {
                echo "Sim";
            } else {
                echo "Não";
            }
            echo "\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t\t\t<label>Nota</label>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" disabled readonly value=\"";
            // line 185
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["lead"] ?? null), "prova", array()), "raw", array(0 => "nota"), "method"), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t<label>Status (Prova)</label>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" disabled readonly value=\"";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["lead"] ?? null), "prova", array()), "status", array()), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t<label>Status (Base)</label>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" disabled readonly value=\"";
            // line 197
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["lead"] ?? null), "status", array()), "nome", array()), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 202
        echo "

\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<br />

\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-success\" value=\"Salvar\" />
\t\t\t\t\t\t\t\t\t<input type=\"reset\" class=\"btn btn-warning\" value=\"Reverter\" />
\t\t\t\t\t\t\t\t\t<input type=\"reset\" class=\"btn btn-danger\" value=\"Cancelar\"
\t\t\t\t\t\t\t\t\t\tonclick=\"document.location='/alunos/";
        // line 213
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "id", array()), "html", null, true);
        echo "'\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br />

\t\t\t\t\t\t</form>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"clearfix\"></div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/app/app/Modules/Admin/views/Alunos/edit-lead.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  461 => 213,  448 => 202,  440 => 197,  431 => 191,  422 => 185,  409 => 179,  396 => 173,  383 => 167,  370 => 161,  356 => 149,  354 => 148,  338 => 134,  332 => 130,  329 => 129,  316 => 127,  312 => 126,  295 => 111,  287 => 109,  278 => 108,  274 => 107,  264 => 99,  256 => 97,  247 => 96,  243 => 95,  233 => 87,  225 => 85,  216 => 84,  212 => 83,  203 => 76,  200 => 75,  195 => 73,  188 => 72,  186 => 71,  182 => 70,  175 => 69,  173 => 68,  169 => 67,  163 => 66,  149 => 54,  143 => 53,  139 => 51,  131 => 49,  122 => 48,  118 => 47,  113 => 46,  110 => 45,  106 => 44,  97 => 40,  91 => 39,  81 => 32,  74 => 28,  67 => 24,  59 => 19,  52 => 17,  42 => 12,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/Alunos/edit-lead.twig", "");
    }
}

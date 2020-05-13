<?php

/* /var/www/app/ambiente_conversao/vestibularfam2019.1/views//finaliza.twig */
class __TwigTemplate_4fc875d50b3a2af2a12919f199f4d60987729c3331fcac8c33a93f5950771a03 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AmbienteConversao::layout.twig", "/var/www/app/ambiente_conversao/vestibularfam2019.1/views//finaliza.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AmbienteConversao::layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["page_id"] = "page-finalizar-inscricao";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<main class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"row-header col-md-12\">
\t\t\t<h1>Parabéns ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "primeiro_nome", array()), "html", null, true);
        echo ", seu pedido de inscrição foi realizado com sucesso!</h1>
\t\t</div>
\t\t<div class=\"row-header-cursos col-md-12\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 fit-height\">
\t\t\t\t\t<div class=\"opcao-curso principal fit ";
        // line 14
        if ($this->getAttribute(($context["lead"] ?? null), "isMatriculado", array(0 => $this->getAttribute(($context["opcoes_curso"] ?? null), 0, array(), "array")), "method")) {
            echo "matriculado";
        }
        echo "\">
\t\t\t\t\t\t<h2>Primeira Opção de Curso</h2>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["opcoes_curso"] ?? null), 0, array(), "array"), "nome", array()), "html", null, true);
        echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 fit-height\">
\t\t\t\t\t<div class=\"opcao-curso fit ";
        // line 22
        if ($this->getAttribute(($context["lead"] ?? null), "isMatriculado", array(0 => $this->getAttribute(($context["opcoes_curso"] ?? null), 1, array(), "array")), "method")) {
            echo "matriculado";
        }
        echo "\">
\t\t\t\t\t\t<h2>Segunda Opção de Curso</h2>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["opcoes_curso"] ?? null), 1, array(), "array"), "nome", array()), "html", null, true);
        echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 fit-height\">
\t\t\t\t\t<div class=\"opcao-curso fit ";
        // line 30
        if ($this->getAttribute(($context["lead"] ?? null), "isMatriculado", array(0 => $this->getAttribute(($context["opcoes_curso"] ?? null), 2, array(), "array")), "method")) {
            echo "matriculado";
        }
        echo "\">
\t\t\t\t\t\t<h2>Terceira Opção de Curso</h2>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["opcoes_curso"] ?? null), 2, array(), "array"), "nome", array()), "html", null, true);
        echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"content\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<h2>Detalhes da Inscrição</h2>
\t\t\t\t\t<p><strong>Enviamos um e-mail com mais detalhes sobre sua inscrição.</strong></p>
\t\t\t\t";
        // line 44
        if (($this->getAttribute(($context["dados_adicionais"] ?? null), "usar_enem", array()) == "sim")) {
            // line 45
            echo "\t\t\t\t\t<p>
\t\t\t\t\t\t<strong>Data entrega da documentação:</strong><br />
\t\t\t\t\t\t";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["prova"] ?? null), "data", array()), "hora", array()), "d/m/Y"), "html", null, true);
            echo "
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\t\t<strong>Horário:</strong><br />
\t\t\t\t\t\t";
            // line 51
            if ((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["prova"] ?? null), "data", array()), "hora", array()), "H") < 12)) {
                echo "das 08:30 às 11:30";
            } else {
                echo "das 9:00 às 21:00";
            }
            // line 52
            echo "\t\t\t\t\t\t</p>
\t\t\t\t\t<p>Não se esqueça de trazer sua nota do ENEM válida.</p>
\t\t\t\t";
        } else {
            // line 55
            echo "\t\t\t\t\t<p>
\t\t\t\t\t\t<strong>Data da prova:</strong><br />
\t\t\t\t\t\t";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('App\TwigExtended')->dia_semana(twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["prova"] ?? null), "data", array()), "hora", array()), "w")), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["prova"] ?? null), "data", array()), "hora", array()), "d/m/Y"), "html", null, true);
            echo "
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\t\t<strong>Hora da prova:</strong><br />
\t\t\t\t\t\t";
            // line 61
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["prova"] ?? null), "data", array()), "hora", array()), "H:i"), "html", null, true);
            echo "
\t\t\t\t\t</p>
\t\t\t\t";
        }
        // line 64
        echo "\t\t\t\t\t<p>
\t\t\t\t\t\t<strong>Local da prova:</strong><br />
\t\t\t\t\t\t";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["prova"] ?? null), "local", array()), "local", array()), "html", null, true);
        echo "<br />";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["prova"] ?? null), "local", array()), "endereco", array()), "html", null, true);
        echo "
\t\t\t\t\t</p>

\t\t\t\t\t<p class=\"accent\"><strong>Esperamos por você!</strong></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</main>
";
    }

    // line 77
    public function block_scripts($context, array $blocks = array())
    {
        // line 78
        echo "\t
";
    }

    public function getTemplateName()
    {
        return "/var/www/app/ambiente_conversao/vestibularfam2019.1/views//finaliza.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 78,  165 => 77,  149 => 66,  145 => 64,  139 => 61,  130 => 57,  126 => 55,  121 => 52,  115 => 51,  108 => 47,  104 => 45,  102 => 44,  88 => 33,  80 => 30,  72 => 25,  64 => 22,  56 => 17,  48 => 14,  40 => 9,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/ambiente_conversao/vestibularfam2019.1/views//finaliza.twig", "");
    }
}

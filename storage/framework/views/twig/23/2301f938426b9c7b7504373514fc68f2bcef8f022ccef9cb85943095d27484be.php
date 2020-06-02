<?php

/* /var/www/app/app/Modules/Admin/views/Provas/Datas/view.twig */
class __TwigTemplate_a0465520c42a3ba4e838a7c2700447238029d3a59d430f0cfa4d9648fee7a911 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::layout", "/var/www/app/app/Modules/Admin/views/Provas/Datas/view.twig", 1);
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
        $context["form"] = $this->loadTemplate("Admin::helpers.form_prova", "/var/www/app/app/Modules/Admin/views/Provas/Datas/view.twig", 3);
        // line 5
        $context["title"] = "Datas de Prova";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"right_col\" role=\"main\">
\t<div class=\"\">
\t\t<div class=\"row\">
          <div class=\"col-md-12 col-sm-12 col-xs-12\">
              <div class=\"x_panel\">
                <div class=\"x_title\">
                  <h2>Visualizando Dia de Prova</h2>
                  <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">

                <div class=\"row\">
\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t<label>Data e Hora:</label>
\t\t\t\t\t\t<div>";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["data"] ?? null), "hora", array()), "d/m/Y H:i"), "html", null, true);
        echo "</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t<label>Status:</label>
\t\t\t\t\t\t<div>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "status", array()), "html", null, true);
        echo "</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<label>Local:</label>
\t\t\t\t\t\t<div>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["data"] ?? null), "local", array()), "local", array()), "html", null, true);
        echo "</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<label>Unidade:</label>
\t\t\t\t\t\t<div>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["data"] ?? null), "local", array()), "unidade", array()), "nome", array()), "html", null, true);
        echo "</div>
\t\t\t\t\t</div>
                </div>

                </div>
              </div>
            </div>

            <div class=\"clearfix\"></div>
        </div>

\t\t<div class=\"row\">
          <div class=\"col-md-12 col-sm-12 col-xs-12\">
              <div class=\"x_panel\">
                <div class=\"x_title\">
                  <h2>Provas e Alunos</h2>
                  <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">

                  <table class=\"table table-striped\">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Lead #</th>
                        <th>Aluno</th>
                        <th>Curso</th>
                        <th>Campanha</th>
                        <th>Status</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
\t\t\t\t\t";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? null), "provas", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["prova"]) {
            // line 68
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"row\">";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["prova"], "id", array()), "html", null, true);
            echo "</th>
\t\t\t\t\t\t\t<td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["prova"], "lead", array()), "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td><a target=\"_blank\" href=\"/alunos/";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["prova"], "aluno", array()), "id", array()), "html", null, true);
            echo "/\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["prova"], "aluno", array()), "nome", array()), "html", null, true);
            echo "</a></td>
\t\t\t\t\t\t\t<td><a target=\"_blank\" href=\"/cursos/";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["prova"], "curso", array()), "id", array()), "html", null, true);
            echo "/\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["prova"], "curso", array()), "nome", array()), "html", null, true);
            echo "</a></td>
\t\t\t\t\t\t\t<td><a target=\"_blank\" href=\"/campanhas/";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["prova"], "campanha", array()), "id", array()), "html", null, true);
            echo "/\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["prova"], "campanha", array()), "nome", array()), "html", null, true);
            echo "</a></td>
\t\t\t\t\t\t\t<td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["prova"], "status", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prova'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                    </tbody>
                  </table>

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
        return "/var/www/app/app/Modules/Admin/views/Provas/Datas/view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 77,  142 => 74,  136 => 73,  130 => 72,  124 => 71,  120 => 70,  116 => 69,  113 => 68,  109 => 67,  73 => 34,  66 => 30,  59 => 26,  52 => 22,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/Provas/Datas/view.twig", "");
    }
}

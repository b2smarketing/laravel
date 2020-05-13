<?php

/* /var/www/app/app/Modules/Admin/views/Datastore/view.twig */
class __TwigTemplate_f684475642a5746666ecd04635f52b908362bb3bd5ddc594c2293416fee6d730 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::layout", "/var/www/app/app/Modules/Admin/views/Datastore/view.twig", 1);
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
        $context["title"] = ((((($this->getAttribute(($context["entrada"] ?? null), "nome", array()) . " [") . $this->getAttribute(($context["entrada"] ?? null), "id", array())) . "] : ") . $this->getAttribute(($context["entrada"] ?? null), "identifier", array())) . " : Outros Dados");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"right_col\" role=\"main\">
    <div class=\"\">
        <div class=\"row\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "nome", array()), "html", null, true);
        echo "</h2>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">

                        <div class=\"row\">
                            <div class=\"col-md-3 col-sm-6 col-xs-12\">
                                <label>Identificador, # :</label>
                                <div>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entrada"] ?? null), "identifier", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entrada"] ?? null), "id", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"col-md-3 col-sm-6 col-xs-12\">
                                <label>Nome :</label>
                                <div>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entrada"] ?? null), "nome", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"col-md-3 col-sm-6 col-xs-12\">
                                <label>E-mail :</label>
                                <div>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entrada"] ?? null), "email", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"col-md-3 col-sm-6 col-xs-12\">
                                <label>Registro no BI :</label>
                                <div>
                                    ";
        // line 33
        if ($this->getAttribute(($context["entrada"] ?? null), "aluno", array())) {
            // line 34
            echo "                                        <a target=\"_blank\" href=\"/alunos/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entrada"] ?? null), "aluno", array()), "id", array()), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-link\"></i>
                                            ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entrada"] ?? null), "aluno", array()), "nome", array()), "html", null, true);
            echo "
                                        </a>
                                    ";
        } else {
            // line 39
            echo "                                        - Nenhum -
                                    ";
        }
        // line 41
        echo "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"clearfix\"></div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Detalhes</h2>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <div class=\"dashboard-widget-content\">
                            <ul class=\"list-unstyled timeline widget\">
                                <table class=\"table striped\">
                                    <thead>
                                        <tr>
                                            <th class=\"col-md-4\">Campo</th>
                                            <th class=\"col-md-8\">Valor</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["entrada"] ?? null), "data", array()));
        foreach ($context['_seq'] as $context["campo"] => $context["valor"]) {
            // line 70
            echo "                                        <tr>
                                            <td>";
            // line 71
            echo twig_escape_filter($this->env, $context["campo"], "html", null, true);
            echo "</td>
                                            <td>";
            // line 72
            echo twig_escape_filter($this->env, $context["valor"], "html", null, true);
            echo "</td>
                                        </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['campo'], $context['valor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                                    </tbody>
                                </table>
                            </ul>
                        </div>

                        <div class=\"clearfix\"></div>
                    </div>
                </div>

                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/app/app/Modules/Admin/views/Datastore/view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 75,  136 => 72,  132 => 71,  129 => 70,  125 => 69,  95 => 41,  91 => 39,  85 => 36,  79 => 34,  77 => 33,  69 => 28,  62 => 24,  53 => 20,  42 => 12,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/Datastore/view.twig", "");
    }
}

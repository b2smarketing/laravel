<?php

/* /var/www/app/app/Modules/Admin/views/Developer/EmailDiario.twig */
class __TwigTemplate_8597b6982e34a1508978ecde65820331602ed1b5c4aa755e872e4124e37fe27c extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::layout", "/var/www/app/app/Modules/Admin/views/Developer/EmailDiario.twig", 1);
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
        $context["title"] = "E-mail Diário";
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
          <div class=\"col-md-12 col-sm-12 col-xs-12\">
              <div class=\"x_panel\">
                <div class=\"x_title\">
                  <h2>E-mail Diário</h2>
                  <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">

                  <table class=\"table table-striped\">
                    <thead>
                      <tr>
                        <th>E-mail</th>
                        <th>Ações</th>
                      </tr>
                    </thead>
                    <tbody>
                  ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["emails"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["email"]) {
            // line 26
            echo "                      <tr>
                        <th scope=\"row\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["email"], "value", array()), "html", null, true);
            echo "</th>
                        <td><a href=\"/dev/email-diario?remove=";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["email"], "id", array()), "html", null, true);
            echo "\">Remover</a></td>
                      </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['email'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                    </tbody>
                  </table>
        
                  <div>
                    <form method=\"post\" action=\"/dev/email-diario\">
                      ";
        // line 36
        echo csrf_field();
        echo "
                      <br />
                      <label>Inserir novo destinatário:</label>
                      <input type=\"email\" class=\"form-control\" name=\"email\" />
                      <br />
                      <input type=\"submit\" class=\"btn btn-primary\" value=\"Salvar\" />
                    </form>
                  </div>

                </div>
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
        return "/var/www/app/app/Modules/Admin/views/Developer/EmailDiario.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 36,  75 => 31,  66 => 28,  62 => 27,  59 => 26,  55 => 25,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/Developer/EmailDiario.twig", "");
    }
}

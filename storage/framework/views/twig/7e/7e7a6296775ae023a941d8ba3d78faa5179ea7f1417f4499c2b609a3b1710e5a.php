<?php

/* C:\xampp\htdocs\laravel\app\Modules\Admin\views/Developer/API/Internal.twig */
class __TwigTemplate_fba11d7a481101c0df7b2bd9373cbc6655182d8e90701cfc195be238ca9adb43 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::layout", "C:\\xampp\\htdocs\\laravel\\app\\Modules\\Admin\\views/Developer/API/Internal.twig", 1);
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
        $context["title"] = "API Interna";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"right_col\" role=\"main\">
\t<div class=\"\">

    <form method=\"post\" action=\"/dev/api\">
      ";
        // line 10
        echo csrf_field();
        echo "
          
      <div class=\"row\">
        <div class=\"col-md-12\" style=\"padding-top: 1em; padding-bottom: 1em\">
            <input type=\"submit\" class=\"btn btn-primary\" value=\"Nova Chave API\" />
        </div>
      </div>
      
      <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Chaves de API</h2>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">

                    <table class=\"table table-striped\">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Token</th>
                          <th>Passcode</th>
                        </tr>
                      </thead>
                      <tbody>
                    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["keys"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["api"]) {
            // line 37
            echo "                        <tr>
                          <th scope=\"row\">";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["api"], "id", array()), "html", null, true);
            echo "</th>
                          <td><input readonly type=\"text\" class=\"form-control\" value=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["api"], "key", array()), "html", null, true);
            echo "\" /></td>
                          <td><input readonly type=\"text\" class=\"form-control\" value=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["api"], "private_key", array()), "html", null, true);
            echo "\" /></td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['api'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class=\"clearfix\"></div>
          </div>

      </form>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\laravel\\app\\Modules\\Admin\\views/Developer/API/Internal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 43,  84 => 40,  80 => 39,  76 => 38,  73 => 37,  69 => 36,  40 => 10,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends ('Admin::layout') %}

{% set title = 'API Interna' %}

{% block content %}
<div class=\"right_col\" role=\"main\">
\t<div class=\"\">

    <form method=\"post\" action=\"/dev/api\">
      {{ csrf_field() }}
          
      <div class=\"row\">
        <div class=\"col-md-12\" style=\"padding-top: 1em; padding-bottom: 1em\">
            <input type=\"submit\" class=\"btn btn-primary\" value=\"Nova Chave API\" />
        </div>
      </div>
      
      <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Chaves de API</h2>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">

                    <table class=\"table table-striped\">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Token</th>
                          <th>Passcode</th>
                        </tr>
                      </thead>
                      <tbody>
                    {% for api in keys %}
                        <tr>
                          <th scope=\"row\">{{ api.id }}</th>
                          <td><input readonly type=\"text\" class=\"form-control\" value=\"{{ api.key }}\" /></td>
                          <td><input readonly type=\"text\" class=\"form-control\" value=\"{{ api.private_key }}\" /></td>
                        </tr>
                    {% endfor %}
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class=\"clearfix\"></div>
          </div>

      </form>
    </div>
</div>

{% endblock %}", "C:\\xampp\\htdocs\\laravel\\app\\Modules\\Admin\\views/Developer/API/Internal.twig", "");
    }
}

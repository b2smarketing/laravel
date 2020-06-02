<?php

/* C:\xampp\htdocs\vestibularfam\app\Modules\Admin\views/Developer/Logs/Error.twig */
class __TwigTemplate_d982e28ef2626f3cf04d021755c69416c864a0518d62ca11eb94b7b8298a2022 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::layout", "C:\\xampp\\htdocs\\vestibularfam\\app\\Modules\\Admin\\views/Developer/Logs/Error.twig", 1);
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
        $context["title"] = "Logs de Erro";
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
                  <h2>Logs de Erro</h2>
                  <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">

                  <table class=\"table table-striped\">
                    <thead>
                      <tr>
                        <th>ID</th>
                      </tr>
                    </thead>
                    <tbody>
                  ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["logs"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 25
            echo "                      <tr>
                        <th scope=\"row\"><a target=\"_blank\" href=\"/dev/logs/error/";
            // line 26
            echo twig_escape_filter($this->env, $context["log"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["log"], "html", null, true);
            echo "</a></th>
                      </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                    </tbody>
                  </table>

                </div>
              </div>
            </div>

            <div class=\"clearfix\"></div>
        </div>

    </div>
</div>

<script>
\$(document).ready(() => {
  \$('table').DataTable({
    title: '',
    dom: \"Bfrtip\",
    buttons: [
      {
        extend: \"copy\",
        className: \"btn-sm\"
      },
      {
        extend: \"csv\",
        className: \"btn-sm\"
      },
      {
        extend: \"excel\",
        className: \"btn-sm\"
      },
      {
        extend: \"pdfHtml5\",
        className: \"btn-sm\"
      },
      {
        extend: \"print\",
        className: \"btn-sm\"
      },
    ],
    responsive: true,
    order: [[0, 'desc']]
  });
});

</script>

";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\vestibularfam\\app\\Modules\\Admin\\views/Developer/Logs/Error.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 29,  61 => 26,  58 => 25,  54 => 24,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
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

{% set title = 'Logs de Erro' %}

{% block content %}
<div class=\"right_col\" role=\"main\">
\t<div class=\"\">
\t\t<div class=\"row\">
          <div class=\"col-md-12 col-sm-12 col-xs-12\">
              <div class=\"x_panel\">
                <div class=\"x_title\">
                  <h2>Logs de Erro</h2>
                  <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">

                  <table class=\"table table-striped\">
                    <thead>
                      <tr>
                        <th>ID</th>
                      </tr>
                    </thead>
                    <tbody>
                  {% for log in logs|reverse %}
                      <tr>
                        <th scope=\"row\"><a target=\"_blank\" href=\"/dev/logs/error/{{ log }}\">{{ log }}</a></th>
                      </tr>
                  {% endfor %}
                    </tbody>
                  </table>

                </div>
              </div>
            </div>

            <div class=\"clearfix\"></div>
        </div>

    </div>
</div>

<script>
\$(document).ready(() => {
  \$('table').DataTable({
    title: '',
    dom: \"Bfrtip\",
    buttons: [
      {
        extend: \"copy\",
        className: \"btn-sm\"
      },
      {
        extend: \"csv\",
        className: \"btn-sm\"
      },
      {
        extend: \"excel\",
        className: \"btn-sm\"
      },
      {
        extend: \"pdfHtml5\",
        className: \"btn-sm\"
      },
      {
        extend: \"print\",
        className: \"btn-sm\"
      },
    ],
    responsive: true,
    order: [[0, 'desc']]
  });
});

</script>

{% endblock %}", "C:\\xampp\\htdocs\\vestibularfam\\app\\Modules\\Admin\\views/Developer/Logs/Error.twig", "");
    }
}

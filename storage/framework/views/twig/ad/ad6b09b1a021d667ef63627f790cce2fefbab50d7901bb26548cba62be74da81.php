<?php

/* /var/www/app/app/Modules/Admin/views/Developer/Logs/Process.twig */
class __TwigTemplate_a62f2316f5fa07eb4db5b812baa6700eee75dc8e37c57bc6cbb3babe66cd61e3 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::layout", "/var/www/app/app/Modules/Admin/views/Developer/Logs/Process.twig", 1);
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
        $context["title"] = "Processos";
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
                  <h2>Processos</h2>
                  <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">

                  <table class=\"table table-striped\">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Time</th>
                        <th>Type</th>
                        <th>Message</th>
                        <th>Status</th>
                        <th>Events</th>
                        <th>Errors</th>
                      </tr>
                    </thead>
                    <tbody>
                  ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["procs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["process"]) {
            // line 31
            echo "                    ";
            $context["total"] = $this->getAttribute($this->getAttribute($context["process"], "events", array()), "count", array(), "method");
            // line 32
            echo "                    ";
            $context["errors"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["process"], "events", array(), "method"), "whereNotNull", array(0 => "error"), "method"), "count", array(), "method");
            // line 33
            echo "                      <tr class=\"process ";
            if ($this->getAttribute($context["process"], "finished", array())) {
                echo "success";
            } else {
                echo "warning";
            }
            echo " ";
            if ($this->getAttribute($context["process"], "error", array())) {
                echo "danger";
            }
            echo "\">
                        <th scope=\"row\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["process"], "id", array()), "html", null, true);
            echo "</th>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["process"], "created_at", array()), "html", null, true);
            echo "</th>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["process"], "type", array()), "html", null, true);
            echo "</th>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["process"], "message", array()), "html", null, true);
            echo "</th>
                        <td>";
            // line 38
            if ($this->getAttribute($context["process"], "error", array())) {
                echo "Error";
            } elseif ($this->getAttribute($context["process"], "finished", array())) {
                echo "Finished";
            } else {
                echo "Started";
            }
            echo "</th>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
            echo "</th>
                        <td ";
            // line 40
            if (($context["errors"] ?? null)) {
                echo "class=\"danger\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ($context["errors"] ?? null), "html", null, true);
            echo "</th>
                      </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['process'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
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
    order: [[1, 'desc']]
  });
});

</script>

";
    }

    public function getTemplateName()
    {
        return "/var/www/app/app/Modules/Admin/views/Developer/Logs/Process.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 43,  113 => 40,  109 => 39,  99 => 38,  95 => 37,  91 => 36,  87 => 35,  83 => 34,  70 => 33,  67 => 32,  64 => 31,  60 => 30,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/Developer/Logs/Process.twig", "");
    }
}

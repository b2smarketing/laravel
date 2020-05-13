<?php

/* /var/www/app/app/Modules/Admin/views/BI/performance_index.twig */
class __TwigTemplate_26cbc74ff1b3bc8ab93adadc7a2118be13cd3947e774140f1a466adb9b52f146 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::BI.layout", "/var/www/app/app/Modules/Admin/views/BI/performance_index.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Admin::BI.layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"right_col\" role=\"main\">
  <div class=\"\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <h2>Comparativo de Campanhas</h2>
      </div>
    </div>
    
    <div class=\"row\">
      <div class=\"col-md-12\">
        <p>Selecione duas campanhas para comparar:</p>

        <div class=\"row\">
          <div class=\"col-md-12\">
            <label>Campanha 1:
              <select class=\"form-control select2\" id=\"c1\">
              ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["campanhas"] ?? null), "sortByDesc", array(0 => "inicio"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["campanha"]) {
            // line 22
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["campanha"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["campanha"], "nome", array()), "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['campanha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "              </select>
            </label>
          </div>
          <div class=\"col-md-12\">
            <label>Campanha 2:
              <select class=\"form-control select2\" id=\"c2\">
              ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["campanhas"] ?? null), "sortByDesc", array(0 => "inicio"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["campanha"]) {
            // line 31
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["campanha"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["campanha"], "nome", array()), "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['campanha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "              </select>
            </label>
          </div>
        </div>

        <a id=\"btn-relatorio\" class=\"btn btn-primary\">Comparar</a>
      </div>
    </div>
  </div>
</div>
";
    }

    // line 46
    public function block_script($context, array $blocks = array())
    {
        // line 47
        echo "  <script type=\"text/javascript\">
    \$(document).ready(function() {
      \$('#btn-relatorio').on('click', () => {
        var c1 = \$('#c1').val();
        var c2 = \$('#c2').val();
        if (c1 == c2) {
          alert ('Você não pode comparar a mesma campanha consigo mesma!');
          return;
        }
        document.location.href = '/bi/performance/' + c1 + '/' + c2;
      });
    });
  </script>
";
    }

    public function getTemplateName()
    {
        return "/var/www/app/app/Modules/Admin/views/BI/performance_index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 47,  102 => 46,  88 => 33,  77 => 31,  73 => 30,  65 => 24,  54 => 22,  50 => 21,  32 => 5,  29 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/BI/performance_index.twig", "");
    }
}

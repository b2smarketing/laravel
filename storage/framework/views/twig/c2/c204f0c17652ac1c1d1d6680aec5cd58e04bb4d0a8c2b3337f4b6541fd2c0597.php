<?php

/* Admin::BI.layout */
class __TwigTemplate_72638e76d401c444cad805b39b5fb0d298e6a99105dc52bbabd59d53a448873b extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::layout", "Admin::BI.layout", 1);
        $this->blocks = array(
            'scripts' => array($this, 'block_scripts'),
            'script' => array($this, 'block_script'),
            'content' => array($this, 'block_content'),
            'top_row' => array($this, 'block_top_row'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Admin::layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_scripts($context, array $blocks = array())
    {
        // line 4
        echo "    <!-- jQuery Sparklines -->
    <script>
      \$(document).ready(function() {

      \tvar tipos_spark = {
      \t\tbar: {
\t          type: 'bar',
\t          height: '40',
\t          barWidth: 9,
\t          colorMap: {
\t            '7': '#a1a1a1'
\t          },
\t          barSpacing: 2,
\t          barColor: '#26B99A'
\t        },
\t        line: {
          \t  type: 'line',
\t          width: '200',
\t          height: '40',
\t          lineColor: '#26B99A',
\t          fillColor: 'rgba(223, 223, 223, 0.57)',
\t          lineWidth: 2,
\t          spotColor: '#26B99A',
\t          minSpotColor: '#26B99A'
\t        }
      \t}

      \t\$('.grafico_spark').each(function () {
      \t\tvar dados = \$(this).data('dados');
      \t\tvar tipo = \$(this).data('tipo');
          var color = \$(this).data('color');

          var grf = tipos_spark[tipo];

          if (color) {
            grf.barColor = grf.lineColor = grf.spotColor = grf.minSpotColor = color;
          }

      \t\t\$(this).sparkline(dados, grf);
      \t});
      });
    </script>
    <!-- /jQuery Sparklines -->

    ";
        // line 48
        $this->displayBlock('script', $context, $blocks);
    }

    public function block_script($context, array $blocks = array())
    {
    }

    // line 51
    public function block_content($context, array $blocks = array())
    {
        // line 52
        echo "        <div class=\"right_col\" role=\"main\">
          <div class=\"\">
            ";
        // line 54
        $this->displayBlock('top_row', $context, $blocks);
        // line 55
        echo "            
            <div class=\"row\">
              <div class=\"col-md-12\">
                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["graficos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["grafico"]) {
            // line 59
            echo "                ";
            echo $this->getAttribute($context["grafico"], "render", array());
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grafico'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "              </div>
            </div>
          </div>
        </div>
";
    }

    // line 54
    public function block_top_row($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "Admin::BI.layout";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 54,  115 => 61,  106 => 59,  102 => 58,  97 => 55,  95 => 54,  91 => 52,  88 => 51,  80 => 48,  34 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Admin::BI.layout", "");
    }
}

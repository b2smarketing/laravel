<?php

/* /var/www/app/app/Modules/Admin/views/BI/performance.twig */
class __TwigTemplate_0103dc134b179e144650bed966244db383028dfd9162f04dff5763ff4bc26ccf extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::BI.layout", "/var/www/app/app/Modules/Admin/views/BI/performance.twig", 1);
        $this->blocks = array(
            'top_row' => array($this, 'block_top_row'),
            'top_bar' => array($this, 'block_top_bar'),
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
    public function block_top_row($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"row\">
  <div class=\"col-md-12\">
    <h2>Comparativo de Campanhas</h2>
    <p>Obs.: Os dados informados aqui são em relação ao primeiro dia das campanhas.</p>
    <p>As datas exibidas aqui são referentes à Campanha 1. Os gráficos foram alinhados para começarem no primeiro dia de cada uma das campanhas, que pode ou não cair no mesmo dia do ano (para anos diferentes).</p>
  </div>
</div>
";
    }

    // line 15
    public function block_top_bar($context, array $blocks = array())
    {
        // line 16
        echo "<li role=\"presentation\">
  <div id=\"reportrange\" class=\"pull-right\" style=\"background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc;margin:1em 0em;\">
    <i class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i>
    <span>Carregando...</span> <b class=\"caret\"></b>
  </div>
</li>
";
    }

    // line 25
    public function block_script($context, array $blocks = array())
    {
        // line 26
        echo "  <!-- bootstrap-daterangepicker -->
  <script type=\"text/javascript\">
    \$(document).ready(function() {

      var cb = function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
        \$('#reportrange span').html(start.format('DD/MM/YYYY') + ' - ' + end.format('DD/MM/YYYY'));
      };

      var optionSet1 = {
        startDate: moment().subtract(29, 'days'),
        endDate: moment(),
        minDate: moment('";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dados"] ?? null), "data_min", array()), "html", null, true);
        echo "', 'YYYY-MM-DD'),
        maxDate: moment('";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dados"] ?? null), "data_max", array()), "html", null, true);
        echo "', 'YYYY-MM-DD'),
        dateLimit: {
          days: 60
        },
        showDropdowns: true,
        showWeekNumbers: true,
        timePicker: false,
        timePickerIncrement: 1,
        timePicker12Hour: false,
        ranges: {
          'Campanha': [moment('";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dados"] ?? null), "data_min", array()), "html", null, true);
        echo "', 'YYYY-MM-DD'), moment('";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dados"] ?? null), "data_max", array()), "html", null, true);
        echo "', 'YYYY-MM-DD')],
          'Esta Semana': [moment().startOf('week'), moment().endOf('week')],
          'Ultimos 7 Dias': [moment().subtract(6, 'days'), moment()],
          'Ultimos 30 Dias': [moment().subtract(29, 'days'), moment()],
          'Este Mes': [moment().startOf('month'), moment().endOf('month')],
          'Ultimo Mes': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        opens: 'left',
        buttonClasses: ['btn btn-default'],
        applyClass: 'btn-small btn-primary',
        cancelClass: 'btn-small',
        format: 'DD/MM/YYYY',
        separator: ' to ',
        locale: {
          applyLabel: 'Submit',
          cancelLabel: 'Clear',
          fromLabel: 'From',
          toLabel: 'To',
          customRangeLabel: 'Custom',
          daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
          monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
          firstDay: 1
        }
      };
      \$('#reportrange span').html(moment().subtract(29, 'days').format('DD/MM/YYYY') + ' - ' + moment().format('DD/MM/YYYY'));
      var picker = \$('#reportrange').daterangepicker(optionSet1, cb);
      \$('#reportrange').on('show.daterangepicker', function() {
        console.log(\"show event fired\");
      });
      \$('#reportrange').on('hide.daterangepicker', function() {
        console.log(\"hide event fired\");
      });
      \$('#reportrange').on('apply.daterangepicker', function(ev, picker) {
        console.log(picker.startDate);
        console.log(picker.endDate);

        var update = {
          time: {
            start: picker.startDate,
            end: picker.endDate
          }
        };
        charts_update (update);

        console.log(\"apply event fired, start/end dates are \" + picker.startDate.format('MMMM D, YYYY') + \" to \" + picker.endDate.format('MMMM D, YYYY'));
      });
      \$('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
        console.log(\"cancel event fired\");
      });
      \$('#options1').click(function() {
        \$('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
      });
      \$('#options2').click(function() {
        \$('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
      });
      \$('#destroy').click(function() {
        \$('#reportrange').data('daterangepicker').remove();
      });

      var update = {
        time: {
          start: moment().subtract(29, 'days'),
          end: moment()
        }
      };
      charts_update (update);
    });
  </script>
  <!-- /bootstrap-daterangepicker -->
";
    }

    public function getTemplateName()
    {
        return "/var/www/app/app/Modules/Admin/views/BI/performance.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 49,  78 => 39,  74 => 38,  60 => 26,  57 => 25,  47 => 16,  44 => 15,  33 => 5,  30 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/BI/performance.twig", "");
    }
}

<?php

/* Admin::layout */
class __TwigTemplate_93376e5b961ec814b8995fd09f70ae06a1f857fb19d4b2df03ce1a54ffd20a26 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'top_bar' => array($this, 'block_top_bar'),
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"csrf-token\" content=\"";
        // line 10
        echo call_user_func_array($this->env->getFunction('csrf_token')->getCallable(), array());
        echo "\">

    <title>";
        // line 12
        if (($context["title"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo " | ";
        }
        echo "Plataforma BI FAM</title>

    <!-- Bootstrap -->
    <link href=\"/vendors/bootstrap/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- Font Awesome -->
    ";
        // line 18
        echo "    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
    <!-- NProgress -->
    <link href=\"/vendors/nprogress/nprogress.css\" rel=\"stylesheet\">
    <!-- bootstrap-progressbar -->
    <link href=\"/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css\" rel=\"stylesheet\">

  <!-- FORMS -->
    <!-- iCheck -->
    <link href=\"/vendors/iCheck/skins/flat/green.css\" rel=\"stylesheet\">
    <!-- bootstrap-wysiwyg -->
    <link href=\"/vendors/google-code-prettify/bin/prettify.min.css\" rel=\"stylesheet\">
    <!-- Select2 -->
    <link href=\"/vendors/select2/dist/css/select2.min.css\" rel=\"stylesheet\">
    <!-- Switchery -->
    <link href=\"/vendors/switchery/dist/switchery.min.css\" rel=\"stylesheet\">
    <!-- starrr -->
    <link href=\"/vendors/starrr/dist/starrr.css\" rel=\"stylesheet\">
    <!-- Datatables -->
    <link href=\"/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css\" rel=\"stylesheet\">
    <!-- Leaflet JS -->
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.0.2/dist/leaflet.css\" />
    <!-- FullCalendar -->
    <link href=\"/vendors/fullcalendar/dist/fullcalendar.min.css\" rel=\"stylesheet\">
    <link href=\"/vendors/fullcalendar/dist/fullcalendar.print.css\" rel=\"stylesheet\" media=\"print\">
    
    <!-- Custom Theme Style -->
    <link href=\"/build/css/custom.min.css\" rel=\"stylesheet\">

    <!-- Skin -->
    <link href=\"/build/css/skin.css\" rel=\"stylesheet\">

    <!-- jQuery -->
    <script src=\"/vendors/jquery/dist/jquery.min.js\"></script>


    <style type=\"text/css\">
    .form-error {
      color: red;
    }
    </style>

    <script>
    \$.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': \$('meta[name=\"csrf-token\"]').attr('content')
      }
    });
    </script>

    <style type=\"text/css\" media=\"screen\">
    .flotTip { font-size: 1.2em; }

    @media (max-width: 540px) {
      .dataTables_filter { display: block; width: 100%; }
    }

    /* Remover spinner dos campos numericos */
    input[type='number'].no-spin { -moz-appearance: textfield; }
    input[type='number'].no-spin::-webkit-outer-spin-button,
    input[type='number'].no-spin::-webkit-inner-spin-button { -webkit-appearance: none; margin: 0; }
    </style>

    <script type=\"text/javascript\">
    window.e_on_charts_update = [];
    window.charts_settings = {};
    function charts_update (x) {
      for (var attrname in x) { window.charts_settings[attrname] = x[attrname]; }
      window.e_on_charts_update.forEach(function (e) {
        e.call(e, x);
      });
    }
    function on_charts_update (fn) {
      window.e_on_charts_update.push(fn);
    }
    </script>
  </head>

  <body class=\"nav-md\">
    <div class=\"container body\">
      <div class=\"main_container\">
        <div class=\"col-md-3 left_col\">
          <div class=\"left_col scroll-view\" style=\"width:100%;\">
            ";
        // line 107
        echo "
            <div class=\"clearfix\"></div>

            <a href=\"/\"><div class=\"branding logo\"></div></a>

            <!-- menu profile quick info -->
            <div class=\"profile\">
              <div class=\"profile_pic\">
                <img src=\"//www.gravatar.com/avatar/";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('App\TwigExtended')->md5($this->getAttribute(call_user_func_array($this->env->getFunction('auth_user')->getCallable(), array()), "email", array())), "html", null, true);
        echo ".jpg?s=96\" alt=\"...\" class=\"img-circle profile_img\">
              </div>
              <div class=\"profile_info\">
              ";
        // line 118
        if ($this->getAttribute(call_user_func_array($this->env->getFunction('auth_user')->getCallable(), array()), "display_role", array())) {
            // line 119
            echo "                <h2>";
            echo twig_escape_filter($this->env, $this->getAttribute(call_user_func_array($this->env->getFunction('auth_user')->getCallable(), array()), "name", array()), "html", null, true);
            echo "</h2>
                <span class=\"user_role\">";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute(call_user_func_array($this->env->getFunction('auth_user')->getCallable(), array()), "display_role", array()), "html", null, true);
            echo "</span>
              ";
        } else {
            // line 122
            echo "                <span>Ol&aacute;,</span>
                <h2>";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute(call_user_func_array($this->env->getFunction('auth_user')->getCallable(), array()), "name", array()), "html", null, true);
            echo "</h2>
              ";
        }
        // line 125
        echo "                <br />
                <br />
                <br />
              </div>
            </div>
            <!-- /menu profile quick info -->

            <!-- sidebar menu -->
            <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">

            ";
        // line 136
        echo "            ";
        if ($this->getAttribute(call_user_func_array($this->env->getFunction('auth_user')->getCallable(), array()), "can", array(0 => "gerenciamento*"), "method")) {
            // line 137
            echo "              <div class=\"menu_section\">
                <h3>Gerenciamento</h3>
                <ul class=\"nav side-menu\">
                  ";
            // line 140
            if ($this->getAttribute(call_user_func_array($this->env->getFunction('auth_user')->getCallable(), array()), "can", array(0 => "gerenciamento.dashboard"), "method")) {
                echo "<li><a><i class=\"fa fa-dashboard\"></i> Business Intelligence <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"/dashboard\">Dashboard</a></li>
                      <li><a href=\"/bi/performance\">Performance</a></li>
                      ";
                // line 145
                echo "                    </ul>
                  </li>";
            }
            // line 147
            echo "                  ";
            if ($this->getAttribute(call_user_func_array($this->env->getFunction('auth_user')->getCallable(), array()), "can", array(0 => "gerenciamento.campanhas"), "method")) {
                echo "<li><a href=\"/campanhas\"><i class=\"fa fa-bar-chart-o\"></i> Campanhas </span></a></li>";
            }
            // line 148
            echo "                  ";
            if ($this->getAttribute(call_user_func_array($this->env->getFunction('auth_user')->getCallable(), array()), "can", array(0 => "gerenciamento.cursos"), "method")) {
                echo "<li><a href=\"/cursos\"><i class=\"fa fa-list-alt\"></i> Cursos </span></a></li>";
            }
            // line 149
            echo "                  ";
            if ($this->getAttribute(call_user_func_array($this->env->getFunction('auth_user')->getCallable(), array()), "can", array(0 => "gerenciamento.alunos"), "method")) {
                echo "<li><a href=\"/alunos\"><i class=\"fa fa-user\"></i> Candidatos </span></a></li>";
            }
            // line 150
            echo "                  ";
            if ($this->getAttribute(call_user_func_array($this->env->getFunction('auth_user')->getCallable(), array()), "can", array(0 => "gerenciamento.unidades"), "method")) {
                echo "<li><a href=\"/unidades\"><i class=\"fa fa-building\"></i> Unidades </span></a></li>";
            }
            // line 151
            echo "                  ";
            if ($this->getAttribute(call_user_func_array($this->env->getFunction('auth_user')->getCallable(), array()), "can", array(0 => "gerenciamento.provas"), "method")) {
                echo "<li><a><i class=\"fa fa-file-text\"></i> Provas <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"/provas/locais\">Locais de Provas</a></li>
                      <li><a href=\"/provas/datas\">Datas de Provas</a></li>
                      ";
                // line 156
                echo "                    </ul>
                  </li>";
            }
            // line 158
            echo "                  ";
            if ($this->getAttribute(call_user_func_array($this->env->getFunction('auth_user')->getCallable(), array()), "can", array(0 => "gerenciamento.campanhas"), "method")) {
                echo "<li><a href=\"/top\"><i class=\"fa fa-user\"></i> Resultados TOP </span></a></li>";
            }
            // line 159
            echo "                  ";
            if ($this->getAttribute(call_user_func_array($this->env->getFunction('auth_user')->getCallable(), array()), "can", array(0 => "gerenciamento.campanhas"), "method")) {
                echo "<li><a href=\"/top-pesquisa\"><i class=\"fa fa-user\"></i> TOP com pesquisa </span></a></li>";
            }
            // line 160
            echo "                  ";
            if ($this->getAttribute(call_user_func_array($this->env->getFunction('auth_user')->getCallable(), array()), "can", array(0 => "gerenciamento.campanhas"), "method")) {
                echo "<li><a href=\"/datastore\"><i class=\"fa fa-user\"></i> Outros Dados </span></a></li>";
            }
            // line 161
            echo "                  ";
            if ($this->getAttribute(call_user_func_array($this->env->getFunction('auth_user')->getCallable(), array()), "can", array(0 => "gerenciamento.campanhas"), "method")) {
                echo "<li><a href=\"/revisaco\"><i class=\"fa fa-table\"></i> Revisaço ENEM 2019</span></a></li>";
            }
            // line 162
            echo "                  ";
            if ($this->getAttribute(call_user_func_array($this->env->getFunction('auth_user')->getCallable(), array()), "can", array(0 => "gerenciamento.campanhas"), "method")) {
                echo "<li><a href=\"/faculdadeaberta\"><i class=\"fa fa-building\"></i> Faculdade Aberta 2019</span></a></li>";
            }
            // line 163
            echo "                </ul>
              </div>
            ";
        }
        // line 166
        echo "            
            ";
        // line 168
        echo "            ";
        if ($this->getAttribute(call_user_func_array($this->env->getFunction('auth_user')->getCallable(), array()), "can", array(0 => "crm*"), "method")) {
            // line 169
            echo "              <div class=\"menu_section\">
                <h3>CRM</h3>
                <ul class=\"nav side-menu\">
                  <li><a href=\"/crm/atendimento\"><i class=\"fa fa-vcard\"></i> Atendimento </span></a></li>
                  <li><a><i class=\"fa fa-database\"></i> CRM <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"/crm/atendimento\">Atendimento</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            ";
        }
        // line 181
        echo "            
            ";
        // line 183
        echo "            ";
        if ($this->getAttribute(call_user_func_array($this->env->getFunction('auth_user')->getCallable(), array()), "can", array(0 => "financeiro*"), "method")) {
            // line 184
            echo "              <div class=\"menu_section\">
                <h3>Financeiro</h3>
                <ul class=\"nav side-menu\">
                  <li><a href=\"/financeiro/dashboard\"><i class=\"fa fa-dollar\"></i> Relatórios </a>
                  </li>
                  <li><a href=\"/financeiro/fornecedores\"><i class=\"fa fa-group\"></i> Fornecedores </span></a></li>
                  <li><a href=\"/financeiro/midias\"><i class=\"fa fa-tv\"></i> Mídias </a></li>
                  <li><a href=\"/financeiro/notas\"><i class=\"fa fa-money\"></i> Notas Fiscais </a></li>
                </ul>
              </div>
            ";
        }
        // line 195
        echo "            
            ";
        // line 197
        echo "            ";
        if ($this->getAttribute(call_user_func_array($this->env->getFunction('auth_user')->getCallable(), array()), "can", array(0 => "administrativo*"), "method")) {
            // line 198
            echo "              <div class=\"menu_section\">
                <h3>Administrativo</h3>
                <ul class=\"nav side-menu\">
                  <li><a href=\"/users\"><i class=\"fa fa-users\"></i> Usuários </span></a></li>
                  <li><a href=\"/modulos\"><i class=\"fa fa-toggle-on\"></i> Módulos </span></a></li>
                </ul>
              </div>
            ";
        }
        // line 206
        echo "            
            ";
        // line 208
        echo "            ";
        if ($this->getAttribute(call_user_func_array($this->env->getFunction('auth_user')->getCallable(), array()), "can", array(0 => "dev*"), "method")) {
            // line 209
            echo "              <div class=\"menu_section\">
                <h3>Desenvolvedor</h3>
                <ul class=\"nav side-menu\">
                  <li><a href=\"/users/roles\"><i class=\"fa fa-vcard\"></i> Permissões </span></a></li>
                  <li><a href=\"/dev/email-diario\"><i class=\"fa fa-envelope\"></i> E-mail Diário </span></a></li>
                  <li><a><i class=\"fa fa-gears\"></i> Integrações <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"/dev/api\">API</a></li>
                      <li><a href=\"/dev/api/rd-station\">RD Station</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-server\"></i> Logs <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"/dev/logs/error\">Erros</a></li>
                      <li><a href=\"/dev/logs/event\">Eventos</a></li>
                      <li><a href=\"/dev/logs/process\">Processos</a></li>
                    </ul>
                  </li>
                  <li><a href=\"/dev/migrations\"><i class=\"fa fa-gear\"></i> Manutenção </span></a></li>
                </ul>
              </div>
            ";
        }
        // line 231
        echo "
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            ";
        // line 250
        echo "            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class=\"top_nav\">
          <div class=\"nav_menu\">
            <nav>
              <div class=\"nav toggle\">
                <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
              </div>

              <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"\">
                  <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                    <img src=\"//www.gravatar.com/avatar/";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('App\TwigExtended')->md5($this->getAttribute(call_user_func_array($this->env->getFunction('auth_user')->getCallable(), array()), "email", array())), "html", null, true);
        echo "?s=58\" alt=\"\">";
        echo twig_escape_filter($this->env, $this->getAttribute(call_user_func_array($this->env->getFunction('auth_user')->getCallable(), array()), "name", array()), "html", null, true);
        echo "
                    <span class=\" fa fa-angle-down\"></span>
                  </a>
                  <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                    ";
        // line 277
        echo "                    <li><a href=\"/logout\"><i class=\"fa fa-sign-out pull-right\"></i> Sair</a></li>
                  </ul>
                </li>
                
                ";
        // line 281
        $this->displayBlock('top_bar', $context, $blocks);
        // line 282
        echo "              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        ";
        // line 289
        $this->displayBlock('content', $context, $blocks);
        // line 290
        echo "        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class=\"pull-right\">
            Plataforma BI FAM, desenvolvida por <a href=\"https://b2s.marketing\">B2S Marketing</a>
            ";
        // line 297
        echo "          </div>
          <div class=\"clearfix\"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- Bootstrap -->
    <script src=\"/vendors/bootstrap/dist/js/bootstrap.min.js\"></script>
    <!-- FastClick -->
    <script src=\"/vendors/fastclick/lib/fastclick.js\"></script>
    <!-- NProgress -->
    <script src=\"/vendors/nprogress/nprogress.js\"></script>
    <!-- Chart.js -->
    <script src=\"/vendors/Chart.js/dist/Chart.min.js\"></script>
    <!-- ECharts -->
    <script src=\"/vendors/echarts/dist/echarts.min.js\"></script>
    <script src=\"/vendors/echarts/map/js/world.js\"></script>
    <!-- jQuery Sparklines -->
    <script src=\"/vendors/jquery-sparkline/dist/jquery.sparkline.min.js\"></script>
    <!-- morris.js -->
    <script src=\"/vendors/raphael/raphael.min.js\"></script>
    <script src=\"/vendors/morris.js/morris.min.js\"></script>
    <!-- gauge.js -->
    <script src=\"/vendors/gauge.js/dist/gauge.min.js\"></script>
    <!-- bootstrap-progressbar -->
    <script src=\"/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js\"></script>
    <!-- Skycons -->
    <script src=\"/vendors/skycons/skycons.js\"></script>
    <!-- Flot -->
    <script src=\"/vendors/Flot/jquery.flot.js\"></script>
    <script src=\"/vendors/Flot/jquery.flot.pie.js\"></script>
    <script src=\"/vendors/Flot/jquery.flot.time.js\"></script>
    <script src=\"/vendors/Flot/jquery.flot.stack.js\"></script>
    <script src=\"/vendors/Flot/jquery.flot.resize.js\"></script>
    <script src=\"/vendors/Flot/jquery.flot.tooltip.js\"></script>
    <script src=\"/vendors/Flot/jquery.flot.dashes.js\"></script>
    <!-- Flot plugins -->
    ";
        // line 336
        echo "    ";
        // line 337
        echo "    ";
        // line 338
        echo "    <!-- DateJS -->
    <script src=\"/vendors/DateJS/build/date.js\"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=\"/vendors/moment/min/moment.min.js\"></script>
    <script src=\"/vendors/bootstrap-daterangepicker/daterangepicker.js\"></script>
    <!-- Leaflet JS -->
    <script src=\"https://unpkg.com/leaflet@1.0.2/dist/leaflet.js\"></script>
    <!-- FullCalendar -->
    <script src=\"/vendors/moment/min/moment.min.js\"></script>
    <script src=\"/vendors/fullcalendar/dist/fullcalendar.min.js\"></script
>    <script>
      \$(document).ready(function() {
        \$('.date-picker').daterangepicker({
          singleDatePicker: true,
          calender_style: 'picker_4',
          locale: {
            format: 'DD/MM/YYYY'
          }
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });

        \$('.select2').each(function () {
          \$(this).select2({
            placeholder: (\$(this).data('placeholder') || ''),
            allowClear: (\$(this).data('allow-clear') || true)
          });
        });
      });
    </script>

    <!-- iCheck -->
    <script src=\"/vendors/iCheck/icheck.min.js\"></script>
    <!-- bootstrap-wysiwyg -->
    <script src=\"/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js\"></script>
    <script src=\"/vendors/jquery.hotkeys/jquery.hotkeys.js\"></script>
    <script src=\"/vendors/google-code-prettify/src/prettify.js\"></script>
    <!-- jQuery Tags Input -->
    <script src=\"/vendors/jquery.tagsinput/src/jquery.tagsinput.js\"></script>
    <!-- Switchery -->
    <script src=\"/vendors/switchery/dist/switchery.min.js\"></script>
    <!-- Select2 -->
    <script src=\"/vendors/select2/dist/js/select2.full.min.js\"></script>
    <!-- Parsley -->
    <script src=\"/vendors/parsleyjs/dist/parsley.min.js\"></script>
    <!-- Autosize -->
    <script src=\"/vendors/autosize/dist/autosize.min.js\"></script>
    <!-- jQuery autocomplete -->
    <script src=\"/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js\"></script>
    <!-- starrr -->
    <script src=\"/vendors/starrr/dist/starrr.js\"></script>

    <!-- Custom Theme Scripts -->
    <script src=\"/build/js/custom.min.js\"></script>

    <!-- jQuery Currency -->
    <script>
    (function(\$) {
      \$.fn.currencyInput = function() {
        this.each(function() {
          var wrapper = \$(\"<div class='currency-input' />\");
          var update = function() {
            var min = parseFloat(\$(this).attr(\"min\"));
            var max = parseFloat(\$(this).attr(\"max\"));
            var value = this.valueAsNumber;
            if(value < min)
              value = min;
            else if(value > max)
              value = max;
            \$(this).val(value.toFixed(2)); 
          };
          \$(this).wrap(wrapper);
          \$(this).change(update);
          \$(this).val(\$(this).val());
        });
      };
    })(jQuery);

    \$(document).ready(function () {
      \$('.type-currency').currencyInput();
    });
    </script>

    <!-- eCharts Theme -->
    <script>
    (() => {
      window.echarts_theme = {
          /*color: [
              '#26B99A', '#34495E', '#BDC3C7', '#3498DB',
              '#9B59B6', '#8abb6f', '#759c6a', '#bfd3b7'
          ],*/

          color: [
            \"#9B59B6\",
            \"#E74C3C\",
            \"#26B99A\",
            \"#3498DB\"
          ],

          title: {
              itemGap: 8,
              textStyle: {
                  fontWeight: 'normal',
                  color: '#408829'
              }
          },

          dataRange: {
              color: ['#1f610a', '#97b58d']
          },

          toolbox: {
              color: ['#408829', '#408829', '#408829', '#408829']
          },

          tooltip: {
              backgroundColor: 'rgba(0,0,0,0.5)',
              axisPointer: {
                  type: 'line',
                  lineStyle: {
                      color: '#408829',
                      type: 'dashed'
                  },
                  crossStyle: {
                      color: '#408829'
                  },
                  shadowStyle: {
                      color: 'rgba(200,200,200,0.3)'
                  }
              }
          },

          dataZoom: {
              dataBackgroundColor: '#eee',
              fillerColor: 'rgba(64,136,41,0.2)',
              handleColor: '#408829'
          },
          grid: {
              borderWidth: 0
          },

          categoryAxis: {
              axisLine: {
                  lineStyle: {
                      color: '#408829'
                  }
              },
              splitLine: {
                  lineStyle: {
                      color: ['#eee']
                  }
              }
          },

          valueAxis: {
              axisLine: {
                  lineStyle: {
                      color: '#408829'
                  }
              },
              splitArea: {
                  show: true,
                  areaStyle: {
                      color: ['rgba(250,250,250,0.1)', 'rgba(200,200,200,0.1)']
                  }
              },
              splitLine: {
                  lineStyle: {
                      color: ['#eee']
                  }
              }
          },
          timeline: {
              lineStyle: {
                  color: '#408829'
              },
              controlStyle: {
                  normal: {color: '#408829'},
                  emphasis: {color: '#408829'}
              }
          },

          k: {
              itemStyle: {
                  normal: {
                      color: '#68a54a',
                      color0: '#a9cba2',
                      lineStyle: {
                          width: 1,
                          color: '#408829',
                          color0: '#86b379'
                      }
                  }
              }
          },
          map: {
              itemStyle: {
                  normal: {
                      areaStyle: {
                          color: '#ddd'
                      },
                      label: {
                          textStyle: {
                              color: '#c12e34'
                          }
                      }
                  },
                  emphasis: {
                      areaStyle: {
                          color: '#99d2dd'
                      },
                      label: {
                          textStyle: {
                              color: '#c12e34'
                          }
                      }
                  }
              }
          },
          force: {
              itemStyle: {
                  normal: {
                      linkStyle: {
                          strokeColor: '#408829'
                      }
                  }
              }
          },
          chord: {
              padding: 4,
              itemStyle: {
                  normal: {
                      lineStyle: {
                          width: 1,
                          color: 'rgba(128, 128, 128, 0.5)'
                      },
                      chordStyle: {
                          lineStyle: {
                              width: 1,
                              color: 'rgba(128, 128, 128, 0.5)'
                          }
                      }
                  },
                  emphasis: {
                      lineStyle: {
                          width: 1,
                          color: 'rgba(128, 128, 128, 0.5)'
                      },
                      chordStyle: {
                          lineStyle: {
                              width: 1,
                              color: 'rgba(128, 128, 128, 0.5)'
                          }
                      }
                  }
              }
          },
          gauge: {
              startAngle: 225,
              endAngle: -45,
              axisLine: {
                  show: true,
                  lineStyle: {
                      color: [[0.2, '#86b379'], [0.8, '#68a54a'], [1, '#408829']],
                      width: 8
                  }
              },
              axisTick: {
                  splitNumber: 10,
                  length: 12,
                  lineStyle: {
                      color: 'auto'
                  }
              },
              axisLabel: {
                  textStyle: {
                      color: 'auto'
                  }
              },
              splitLine: {
                  length: 18,
                  lineStyle: {
                      color: 'auto'
                  }
              },
              pointer: {
                  length: '90%',
                  color: 'auto'
              },
              title: {
                  textStyle: {
                      color: '#333'
                  }
              },
              detail: {
                  textStyle: {
                      color: 'auto'
                  }
              }
          },
          textStyle: {
              fontFamily: 'Arial, Verdana, sans-serif'
          }
      };
    })();
    </script>
    
    <!-- Datatables -->
    <script src=\"/vendors/datatables.net/js/jquery.dataTables.min.js\"></script>
    <script src=\"/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js\"></script>
    <script src=\"/vendors/datatables.net-buttons/js/dataTables.buttons.min.js\"></script>
    <script src=\"/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js\"></script>
    <script src=\"/vendors/datatables.net-buttons/js/buttons.flash.min.js\"></script>
    <script src=\"/vendors/datatables.net-buttons/js/buttons.html5.min.js\"></script>
    <script src=\"/vendors/datatables.net-buttons/js/buttons.print.min.js\"></script>
    <script src=\"/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js\"></script>
    <script src=\"/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js\"></script>
    <script src=\"/vendors/datatables.net-responsive/js/dataTables.responsive.min.js\"></script>
    <script src=\"/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js\"></script>
    ";
        // line 658
        echo "    <script src=\"//cdn.datatables.net/plug-ins/1.10.13/sorting/natural.js\"></script>
    <script src=\"/vendors/jszip/dist/jszip.min.js\"></script>
    <script src=\"/vendors/pdfmake/build/pdfmake.min.js\"></script>
    <script src=\"/vendors/pdfmake/build/vfs_fonts.js\"></script>

    <script src=\"//cdn.datatables.net/plug-ins/1.10.12/sorting/datetime-moment.js\" type=\"text/javascript\"></script>
    <script>
        \$(document).ready( function () {
            \$.fn.dataTable.moment('DD/MM/YYYY');
        });
    </script>

    <!-- Drag n Drop -->
    <script src=\"/vendors/jquery.sortable.min.js\"></script>
    <script>
    \$(document).ready(() => {
      \$('.enable-drag').each((i, o) => {
        var group = 'sortable-auto-' + i;
        \$(o).sortable({
          group: group
        });
      });
    });
    </script>
    <style type=\"text/css\" media=\"screen\">
    body.dragging, body.dragging * {
      cursor: move !important;
    }

    .dragged {
      position: absolute;
      opacity: 0.5;
      z-index: 2000;
    }

    ol.drag-enable li.placeholder {
      position: relative;
      /** More li styles **/
    }
    ol.drag-enable li.placeholder:before {
      position: absolute;
      /** Define arrowhead **/
    }  

    .no-list { list-style-type: none; }
    </style>

    <!-- ###################################################################################### -->

    <script>
    function sortSelect (e) {
      \$(e).each(function () {
        var selElem = this;
        var tmpAry = new Array();
        for (var i=0;i<selElem.options.length;i++) {
          tmpAry[i] = new Array();
          tmpAry[i][0] = selElem.options[i].text;
          tmpAry[i][1] = selElem.options[i].value;
        }
        tmpAry.sort();
        while (selElem.options.length > 0) {
          selElem.options[0] = null;
        }
        for (var i=0;i<tmpAry.length;i++) {
          var op = new Option(tmpAry[i][0], tmpAry[i][1]);
          selElem.options[i] = op;
        }
        return;
      });
    }
    </script>

    ";
        // line 731
        echo "    <script src=\"/helpers.js?t=";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "", "U"), "html", null, true);
        echo "\"></script>

    ";
        // line 733
        $this->displayBlock('scripts', $context, $blocks);
        // line 734
        echo "
";
        // line 822
        echo "  </body>
</html>";
    }

    // line 281
    public function block_top_bar($context, array $blocks = array())
    {
    }

    // line 289
    public function block_content($context, array $blocks = array())
    {
    }

    // line 733
    public function block_scripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "Admin::layout";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  876 => 733,  871 => 289,  866 => 281,  861 => 822,  858 => 734,  856 => 733,  850 => 731,  776 => 658,  455 => 338,  453 => 337,  451 => 336,  411 => 297,  403 => 290,  401 => 289,  392 => 282,  390 => 281,  384 => 277,  375 => 265,  358 => 250,  351 => 231,  327 => 209,  324 => 208,  321 => 206,  311 => 198,  308 => 197,  305 => 195,  292 => 184,  289 => 183,  286 => 181,  272 => 169,  269 => 168,  266 => 166,  261 => 163,  256 => 162,  251 => 161,  246 => 160,  241 => 159,  236 => 158,  232 => 156,  224 => 151,  219 => 150,  214 => 149,  209 => 148,  204 => 147,  200 => 145,  193 => 140,  188 => 137,  185 => 136,  173 => 125,  168 => 123,  165 => 122,  160 => 120,  155 => 119,  153 => 118,  147 => 115,  137 => 107,  49 => 18,  38 => 12,  33 => 10,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"csrf-token\" content=\"{{ csrf_token() }}\">

    <title>{% if title %}{{ title }} | {% endif %}Plataforma BI FAM</title>

    <!-- Bootstrap -->
    <link href=\"/vendors/bootstrap/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- Font Awesome -->
    {# <link href=\"/vendors/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\"> #}
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
    <!-- NProgress -->
    <link href=\"/vendors/nprogress/nprogress.css\" rel=\"stylesheet\">
    <!-- bootstrap-progressbar -->
    <link href=\"/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css\" rel=\"stylesheet\">

  <!-- FORMS -->
    <!-- iCheck -->
    <link href=\"/vendors/iCheck/skins/flat/green.css\" rel=\"stylesheet\">
    <!-- bootstrap-wysiwyg -->
    <link href=\"/vendors/google-code-prettify/bin/prettify.min.css\" rel=\"stylesheet\">
    <!-- Select2 -->
    <link href=\"/vendors/select2/dist/css/select2.min.css\" rel=\"stylesheet\">
    <!-- Switchery -->
    <link href=\"/vendors/switchery/dist/switchery.min.css\" rel=\"stylesheet\">
    <!-- starrr -->
    <link href=\"/vendors/starrr/dist/starrr.css\" rel=\"stylesheet\">
    <!-- Datatables -->
    <link href=\"/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css\" rel=\"stylesheet\">
    <!-- Leaflet JS -->
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.0.2/dist/leaflet.css\" />
    <!-- FullCalendar -->
    <link href=\"/vendors/fullcalendar/dist/fullcalendar.min.css\" rel=\"stylesheet\">
    <link href=\"/vendors/fullcalendar/dist/fullcalendar.print.css\" rel=\"stylesheet\" media=\"print\">
    
    <!-- Custom Theme Style -->
    <link href=\"/build/css/custom.min.css\" rel=\"stylesheet\">

    <!-- Skin -->
    <link href=\"/build/css/skin.css\" rel=\"stylesheet\">

    <!-- jQuery -->
    <script src=\"/vendors/jquery/dist/jquery.min.js\"></script>


    <style type=\"text/css\">
    .form-error {
      color: red;
    }
    </style>

    <script>
    \$.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': \$('meta[name=\"csrf-token\"]').attr('content')
      }
    });
    </script>

    <style type=\"text/css\" media=\"screen\">
    .flotTip { font-size: 1.2em; }

    @media (max-width: 540px) {
      .dataTables_filter { display: block; width: 100%; }
    }

    /* Remover spinner dos campos numericos */
    input[type='number'].no-spin { -moz-appearance: textfield; }
    input[type='number'].no-spin::-webkit-outer-spin-button,
    input[type='number'].no-spin::-webkit-inner-spin-button { -webkit-appearance: none; margin: 0; }
    </style>

    <script type=\"text/javascript\">
    window.e_on_charts_update = [];
    window.charts_settings = {};
    function charts_update (x) {
      for (var attrname in x) { window.charts_settings[attrname] = x[attrname]; }
      window.e_on_charts_update.forEach(function (e) {
        e.call(e, x);
      });
    }
    function on_charts_update (fn) {
      window.e_on_charts_update.push(fn);
    }
    </script>
  </head>

  <body class=\"nav-md\">
    <div class=\"container body\">
      <div class=\"main_container\">
        <div class=\"col-md-3 left_col\">
          <div class=\"left_col scroll-view\" style=\"width:100%;\">
            {#<div class=\"navbar nav_title\" style=\"border: 0;\">
              <a href=\"index.html\" class=\"site_title\"><i class=\"fa fa-paw\"></i> <span>Gentellela Alela!</span></a>
            </div>#}

            <div class=\"clearfix\"></div>

            <a href=\"/\"><div class=\"branding logo\"></div></a>

            <!-- menu profile quick info -->
            <div class=\"profile\">
              <div class=\"profile_pic\">
                <img src=\"//www.gravatar.com/avatar/{{ auth_user().email|md5 }}.jpg?s=96\" alt=\"...\" class=\"img-circle profile_img\">
              </div>
              <div class=\"profile_info\">
              {% if auth_user().display_role %}
                <h2>{{ auth_user().name }}</h2>
                <span class=\"user_role\">{{ auth_user().display_role }}</span>
              {% else %}
                <span>Ol&aacute;,</span>
                <h2>{{ auth_user().name }}</h2>
              {% endif %}
                <br />
                <br />
                <br />
              </div>
            </div>
            <!-- /menu profile quick info -->

            <!-- sidebar menu -->
            <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">

            {# Gerenciamento #}
            {% if auth_user().can('gerenciamento*') %}
              <div class=\"menu_section\">
                <h3>Gerenciamento</h3>
                <ul class=\"nav side-menu\">
                  {% if auth_user().can('gerenciamento.dashboard') %}<li><a><i class=\"fa fa-dashboard\"></i> Business Intelligence <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"/dashboard\">Dashboard</a></li>
                      <li><a href=\"/bi/performance\">Performance</a></li>
                      {# <li><a href=\"/provas/resultados/\">Resultados</a></li> #}
                    </ul>
                  </li>{% endif %}
                  {% if auth_user().can('gerenciamento.campanhas') %}<li><a href=\"/campanhas\"><i class=\"fa fa-bar-chart-o\"></i> Campanhas </span></a></li>{% endif %}
                  {% if auth_user().can('gerenciamento.cursos') %}<li><a href=\"/cursos\"><i class=\"fa fa-list-alt\"></i> Cursos </span></a></li>{% endif %}
                  {% if auth_user().can('gerenciamento.alunos') %}<li><a href=\"/alunos\"><i class=\"fa fa-user\"></i> Candidatos </span></a></li>{% endif %}
                  {% if auth_user().can('gerenciamento.unidades') %}<li><a href=\"/unidades\"><i class=\"fa fa-building\"></i> Unidades </span></a></li>{% endif %}
                  {% if auth_user().can('gerenciamento.provas') %}<li><a><i class=\"fa fa-file-text\"></i> Provas <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"/provas/locais\">Locais de Provas</a></li>
                      <li><a href=\"/provas/datas\">Datas de Provas</a></li>
                      {# <li><a href=\"/provas/resultados/\">Resultados</a></li> #}
                    </ul>
                  </li>{% endif %}
                  {% if auth_user().can('gerenciamento.campanhas') %}<li><a href=\"/top\"><i class=\"fa fa-user\"></i> Resultados TOP </span></a></li>{% endif %}
                  {% if auth_user().can('gerenciamento.campanhas') %}<li><a href=\"/top-pesquisa\"><i class=\"fa fa-user\"></i> TOP com pesquisa </span></a></li>{% endif %}
                  {% if auth_user().can('gerenciamento.campanhas') %}<li><a href=\"/datastore\"><i class=\"fa fa-user\"></i> Outros Dados </span></a></li>{% endif %}
                  {% if auth_user().can('gerenciamento.campanhas') %}<li><a href=\"/revisaco\"><i class=\"fa fa-table\"></i> Revisaço ENEM 2019</span></a></li>{% endif %}
                  {% if auth_user().can('gerenciamento.campanhas') %}<li><a href=\"/faculdadeaberta\"><i class=\"fa fa-building\"></i> Faculdade Aberta 2019</span></a></li>{% endif %}
                </ul>
              </div>
            {% endif %}
            
            {# CRM #}
            {% if auth_user().can('crm*') %}
              <div class=\"menu_section\">
                <h3>CRM</h3>
                <ul class=\"nav side-menu\">
                  <li><a href=\"/crm/atendimento\"><i class=\"fa fa-vcard\"></i> Atendimento </span></a></li>
                  <li><a><i class=\"fa fa-database\"></i> CRM <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"/crm/atendimento\">Atendimento</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            {% endif %}
            
            {# Financeiro #}
            {% if auth_user().can('financeiro*') %}
              <div class=\"menu_section\">
                <h3>Financeiro</h3>
                <ul class=\"nav side-menu\">
                  <li><a href=\"/financeiro/dashboard\"><i class=\"fa fa-dollar\"></i> Relatórios </a>
                  </li>
                  <li><a href=\"/financeiro/fornecedores\"><i class=\"fa fa-group\"></i> Fornecedores </span></a></li>
                  <li><a href=\"/financeiro/midias\"><i class=\"fa fa-tv\"></i> Mídias </a></li>
                  <li><a href=\"/financeiro/notas\"><i class=\"fa fa-money\"></i> Notas Fiscais </a></li>
                </ul>
              </div>
            {% endif %}
            
            {# Administrativo #}
            {% if auth_user().can('administrativo*') %}
              <div class=\"menu_section\">
                <h3>Administrativo</h3>
                <ul class=\"nav side-menu\">
                  <li><a href=\"/users\"><i class=\"fa fa-users\"></i> Usuários </span></a></li>
                  <li><a href=\"/modulos\"><i class=\"fa fa-toggle-on\"></i> Módulos </span></a></li>
                </ul>
              </div>
            {% endif %}
            
            {# Desenvolvedor #}
            {% if auth_user().can('dev*') %}
              <div class=\"menu_section\">
                <h3>Desenvolvedor</h3>
                <ul class=\"nav side-menu\">
                  <li><a href=\"/users/roles\"><i class=\"fa fa-vcard\"></i> Permissões </span></a></li>
                  <li><a href=\"/dev/email-diario\"><i class=\"fa fa-envelope\"></i> E-mail Diário </span></a></li>
                  <li><a><i class=\"fa fa-gears\"></i> Integrações <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"/dev/api\">API</a></li>
                      <li><a href=\"/dev/api/rd-station\">RD Station</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-server\"></i> Logs <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"/dev/logs/error\">Erros</a></li>
                      <li><a href=\"/dev/logs/event\">Eventos</a></li>
                      <li><a href=\"/dev/logs/process\">Processos</a></li>
                    </ul>
                  </li>
                  <li><a href=\"/dev/migrations\"><i class=\"fa fa-gear\"></i> Manutenção </span></a></li>
                </ul>
              </div>
            {% endif %}

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            {# <div class=\"sidebar-footer hidden-small\">
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Settings\">
                <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"FullScreen\">
                <span class=\"glyphicon glyphicon-fullscreen\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Lock\">
                <span class=\"glyphicon glyphicon-eye-close\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Logout\">
                <span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>
              </a>
            </div> #}
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class=\"top_nav\">
          <div class=\"nav_menu\">
            <nav>
              <div class=\"nav toggle\">
                <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
              </div>

              <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"\">
                  <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                    <img src=\"//www.gravatar.com/avatar/{{ auth_user().email|md5 }}?s=58\" alt=\"\">{{ auth_user().name }}
                    <span class=\" fa fa-angle-down\"></span>
                  </a>
                  <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                    {# <li><a href=\"javascript:;\"> Profile</a></li>
                    <li>
                      <a href=\"javascript:;\">
                        <span class=\"badge bg-red pull-right\">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href=\"javascript:;\">Help</a></li> #}
                    <li><a href=\"/logout\"><i class=\"fa fa-sign-out pull-right\"></i> Sair</a></li>
                  </ul>
                </li>
                
                {% block top_bar %}{% endblock %}
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        {% block content %}{% endblock %}
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class=\"pull-right\">
            Plataforma BI FAM, desenvolvida por <a href=\"https://b2s.marketing\">B2S Marketing</a>
            {# Gentelella - Bootstrap Admin Template by <a href=\"https://colorlib.com\">Colorlib</a> #}
          </div>
          <div class=\"clearfix\"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- Bootstrap -->
    <script src=\"/vendors/bootstrap/dist/js/bootstrap.min.js\"></script>
    <!-- FastClick -->
    <script src=\"/vendors/fastclick/lib/fastclick.js\"></script>
    <!-- NProgress -->
    <script src=\"/vendors/nprogress/nprogress.js\"></script>
    <!-- Chart.js -->
    <script src=\"/vendors/Chart.js/dist/Chart.min.js\"></script>
    <!-- ECharts -->
    <script src=\"/vendors/echarts/dist/echarts.min.js\"></script>
    <script src=\"/vendors/echarts/map/js/world.js\"></script>
    <!-- jQuery Sparklines -->
    <script src=\"/vendors/jquery-sparkline/dist/jquery.sparkline.min.js\"></script>
    <!-- morris.js -->
    <script src=\"/vendors/raphael/raphael.min.js\"></script>
    <script src=\"/vendors/morris.js/morris.min.js\"></script>
    <!-- gauge.js -->
    <script src=\"/vendors/gauge.js/dist/gauge.min.js\"></script>
    <!-- bootstrap-progressbar -->
    <script src=\"/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js\"></script>
    <!-- Skycons -->
    <script src=\"/vendors/skycons/skycons.js\"></script>
    <!-- Flot -->
    <script src=\"/vendors/Flot/jquery.flot.js\"></script>
    <script src=\"/vendors/Flot/jquery.flot.pie.js\"></script>
    <script src=\"/vendors/Flot/jquery.flot.time.js\"></script>
    <script src=\"/vendors/Flot/jquery.flot.stack.js\"></script>
    <script src=\"/vendors/Flot/jquery.flot.resize.js\"></script>
    <script src=\"/vendors/Flot/jquery.flot.tooltip.js\"></script>
    <script src=\"/vendors/Flot/jquery.flot.dashes.js\"></script>
    <!-- Flot plugins -->
    {#<script src=\"/vendors/flot.orderbars/js/jquery.flot.orderBars.js\"></script>#}
    {#<script src=\"/vendors/flot-spline/js/jquery.flot.spline.min.js\"></script>#}
    {#<script src=\"/vendors/Flot/flot.curvedlines.js\"></script>#}
    <!-- DateJS -->
    <script src=\"/vendors/DateJS/build/date.js\"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=\"/vendors/moment/min/moment.min.js\"></script>
    <script src=\"/vendors/bootstrap-daterangepicker/daterangepicker.js\"></script>
    <!-- Leaflet JS -->
    <script src=\"https://unpkg.com/leaflet@1.0.2/dist/leaflet.js\"></script>
    <!-- FullCalendar -->
    <script src=\"/vendors/moment/min/moment.min.js\"></script>
    <script src=\"/vendors/fullcalendar/dist/fullcalendar.min.js\"></script
>    <script>
      \$(document).ready(function() {
        \$('.date-picker').daterangepicker({
          singleDatePicker: true,
          calender_style: 'picker_4',
          locale: {
            format: 'DD/MM/YYYY'
          }
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });

        \$('.select2').each(function () {
          \$(this).select2({
            placeholder: (\$(this).data('placeholder') || ''),
            allowClear: (\$(this).data('allow-clear') || true)
          });
        });
      });
    </script>

    <!-- iCheck -->
    <script src=\"/vendors/iCheck/icheck.min.js\"></script>
    <!-- bootstrap-wysiwyg -->
    <script src=\"/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js\"></script>
    <script src=\"/vendors/jquery.hotkeys/jquery.hotkeys.js\"></script>
    <script src=\"/vendors/google-code-prettify/src/prettify.js\"></script>
    <!-- jQuery Tags Input -->
    <script src=\"/vendors/jquery.tagsinput/src/jquery.tagsinput.js\"></script>
    <!-- Switchery -->
    <script src=\"/vendors/switchery/dist/switchery.min.js\"></script>
    <!-- Select2 -->
    <script src=\"/vendors/select2/dist/js/select2.full.min.js\"></script>
    <!-- Parsley -->
    <script src=\"/vendors/parsleyjs/dist/parsley.min.js\"></script>
    <!-- Autosize -->
    <script src=\"/vendors/autosize/dist/autosize.min.js\"></script>
    <!-- jQuery autocomplete -->
    <script src=\"/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js\"></script>
    <!-- starrr -->
    <script src=\"/vendors/starrr/dist/starrr.js\"></script>

    <!-- Custom Theme Scripts -->
    <script src=\"/build/js/custom.min.js\"></script>

    <!-- jQuery Currency -->
    <script>
    (function(\$) {
      \$.fn.currencyInput = function() {
        this.each(function() {
          var wrapper = \$(\"<div class='currency-input' />\");
          var update = function() {
            var min = parseFloat(\$(this).attr(\"min\"));
            var max = parseFloat(\$(this).attr(\"max\"));
            var value = this.valueAsNumber;
            if(value < min)
              value = min;
            else if(value > max)
              value = max;
            \$(this).val(value.toFixed(2)); 
          };
          \$(this).wrap(wrapper);
          \$(this).change(update);
          \$(this).val(\$(this).val());
        });
      };
    })(jQuery);

    \$(document).ready(function () {
      \$('.type-currency').currencyInput();
    });
    </script>

    <!-- eCharts Theme -->
    <script>
    (() => {
      window.echarts_theme = {
          /*color: [
              '#26B99A', '#34495E', '#BDC3C7', '#3498DB',
              '#9B59B6', '#8abb6f', '#759c6a', '#bfd3b7'
          ],*/

          color: [
            \"#9B59B6\",
            \"#E74C3C\",
            \"#26B99A\",
            \"#3498DB\"
          ],

          title: {
              itemGap: 8,
              textStyle: {
                  fontWeight: 'normal',
                  color: '#408829'
              }
          },

          dataRange: {
              color: ['#1f610a', '#97b58d']
          },

          toolbox: {
              color: ['#408829', '#408829', '#408829', '#408829']
          },

          tooltip: {
              backgroundColor: 'rgba(0,0,0,0.5)',
              axisPointer: {
                  type: 'line',
                  lineStyle: {
                      color: '#408829',
                      type: 'dashed'
                  },
                  crossStyle: {
                      color: '#408829'
                  },
                  shadowStyle: {
                      color: 'rgba(200,200,200,0.3)'
                  }
              }
          },

          dataZoom: {
              dataBackgroundColor: '#eee',
              fillerColor: 'rgba(64,136,41,0.2)',
              handleColor: '#408829'
          },
          grid: {
              borderWidth: 0
          },

          categoryAxis: {
              axisLine: {
                  lineStyle: {
                      color: '#408829'
                  }
              },
              splitLine: {
                  lineStyle: {
                      color: ['#eee']
                  }
              }
          },

          valueAxis: {
              axisLine: {
                  lineStyle: {
                      color: '#408829'
                  }
              },
              splitArea: {
                  show: true,
                  areaStyle: {
                      color: ['rgba(250,250,250,0.1)', 'rgba(200,200,200,0.1)']
                  }
              },
              splitLine: {
                  lineStyle: {
                      color: ['#eee']
                  }
              }
          },
          timeline: {
              lineStyle: {
                  color: '#408829'
              },
              controlStyle: {
                  normal: {color: '#408829'},
                  emphasis: {color: '#408829'}
              }
          },

          k: {
              itemStyle: {
                  normal: {
                      color: '#68a54a',
                      color0: '#a9cba2',
                      lineStyle: {
                          width: 1,
                          color: '#408829',
                          color0: '#86b379'
                      }
                  }
              }
          },
          map: {
              itemStyle: {
                  normal: {
                      areaStyle: {
                          color: '#ddd'
                      },
                      label: {
                          textStyle: {
                              color: '#c12e34'
                          }
                      }
                  },
                  emphasis: {
                      areaStyle: {
                          color: '#99d2dd'
                      },
                      label: {
                          textStyle: {
                              color: '#c12e34'
                          }
                      }
                  }
              }
          },
          force: {
              itemStyle: {
                  normal: {
                      linkStyle: {
                          strokeColor: '#408829'
                      }
                  }
              }
          },
          chord: {
              padding: 4,
              itemStyle: {
                  normal: {
                      lineStyle: {
                          width: 1,
                          color: 'rgba(128, 128, 128, 0.5)'
                      },
                      chordStyle: {
                          lineStyle: {
                              width: 1,
                              color: 'rgba(128, 128, 128, 0.5)'
                          }
                      }
                  },
                  emphasis: {
                      lineStyle: {
                          width: 1,
                          color: 'rgba(128, 128, 128, 0.5)'
                      },
                      chordStyle: {
                          lineStyle: {
                              width: 1,
                              color: 'rgba(128, 128, 128, 0.5)'
                          }
                      }
                  }
              }
          },
          gauge: {
              startAngle: 225,
              endAngle: -45,
              axisLine: {
                  show: true,
                  lineStyle: {
                      color: [[0.2, '#86b379'], [0.8, '#68a54a'], [1, '#408829']],
                      width: 8
                  }
              },
              axisTick: {
                  splitNumber: 10,
                  length: 12,
                  lineStyle: {
                      color: 'auto'
                  }
              },
              axisLabel: {
                  textStyle: {
                      color: 'auto'
                  }
              },
              splitLine: {
                  length: 18,
                  lineStyle: {
                      color: 'auto'
                  }
              },
              pointer: {
                  length: '90%',
                  color: 'auto'
              },
              title: {
                  textStyle: {
                      color: '#333'
                  }
              },
              detail: {
                  textStyle: {
                      color: 'auto'
                  }
              }
          },
          textStyle: {
              fontFamily: 'Arial, Verdana, sans-serif'
          }
      };
    })();
    </script>
    
    <!-- Datatables -->
    <script src=\"/vendors/datatables.net/js/jquery.dataTables.min.js\"></script>
    <script src=\"/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js\"></script>
    <script src=\"/vendors/datatables.net-buttons/js/dataTables.buttons.min.js\"></script>
    <script src=\"/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js\"></script>
    <script src=\"/vendors/datatables.net-buttons/js/buttons.flash.min.js\"></script>
    <script src=\"/vendors/datatables.net-buttons/js/buttons.html5.min.js\"></script>
    <script src=\"/vendors/datatables.net-buttons/js/buttons.print.min.js\"></script>
    <script src=\"/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js\"></script>
    <script src=\"/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js\"></script>
    <script src=\"/vendors/datatables.net-responsive/js/dataTables.responsive.min.js\"></script>
    <script src=\"/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js\"></script>
    {#<script src=\"/vendors/datatables.net-scroller/js/datatables.scroller.min.js\"></script>#}
    <script src=\"//cdn.datatables.net/plug-ins/1.10.13/sorting/natural.js\"></script>
    <script src=\"/vendors/jszip/dist/jszip.min.js\"></script>
    <script src=\"/vendors/pdfmake/build/pdfmake.min.js\"></script>
    <script src=\"/vendors/pdfmake/build/vfs_fonts.js\"></script>

    <script src=\"//cdn.datatables.net/plug-ins/1.10.12/sorting/datetime-moment.js\" type=\"text/javascript\"></script>
    <script>
        \$(document).ready( function () {
            \$.fn.dataTable.moment('DD/MM/YYYY');
        });
    </script>

    <!-- Drag n Drop -->
    <script src=\"/vendors/jquery.sortable.min.js\"></script>
    <script>
    \$(document).ready(() => {
      \$('.enable-drag').each((i, o) => {
        var group = 'sortable-auto-' + i;
        \$(o).sortable({
          group: group
        });
      });
    });
    </script>
    <style type=\"text/css\" media=\"screen\">
    body.dragging, body.dragging * {
      cursor: move !important;
    }

    .dragged {
      position: absolute;
      opacity: 0.5;
      z-index: 2000;
    }

    ol.drag-enable li.placeholder {
      position: relative;
      /** More li styles **/
    }
    ol.drag-enable li.placeholder:before {
      position: absolute;
      /** Define arrowhead **/
    }  

    .no-list { list-style-type: none; }
    </style>

    <!-- ###################################################################################### -->

    <script>
    function sortSelect (e) {
      \$(e).each(function () {
        var selElem = this;
        var tmpAry = new Array();
        for (var i=0;i<selElem.options.length;i++) {
          tmpAry[i] = new Array();
          tmpAry[i][0] = selElem.options[i].text;
          tmpAry[i][1] = selElem.options[i].value;
        }
        tmpAry.sort();
        while (selElem.options.length > 0) {
          selElem.options[0] = null;
        }
        for (var i=0;i<tmpAry.length;i++) {
          var op = new Option(tmpAry[i][0], tmpAry[i][1]);
          selElem.options[i] = op;
        }
        return;
      });
    }
    </script>

    {# Helpers BI #}
    <script src=\"/helpers.js?t={{ ''|date('U') }}\"></script>

    {% block scripts %}{% endblock %}

{#
    <!-- morris.js -->
    <script>
      \$(document).ready(function() {
        Morris.Bar({
          element: 'graph_bar',
          data: [
            { \"period\": \"Jan\", \"Hours worked\": 80 }, 
            { \"period\": \"Feb\", \"Hours worked\": 125 }, 
            { \"period\": \"Mar\", \"Hours worked\": 176 }, 
            { \"period\": \"Apr\", \"Hours worked\": 224 }, 
            { \"period\": \"May\", \"Hours worked\": 265 }, 
            { \"period\": \"Jun\", \"Hours worked\": 314 }, 
            { \"period\": \"Jul\", \"Hours worked\": 347 }, 
            { \"period\": \"Aug\", \"Hours worked\": 287 }, 
            { \"period\": \"Sep\", \"Hours worked\": 240 }, 
            { \"period\": \"Oct\", \"Hours worked\": 211 }
          ],
          xkey: 'period',
          hideHover: 'auto',
          barColors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB'],
          ykeys: ['Hours worked', 'sorned'],
          labels: ['Hours worked', 'SORN'],
          xLabelAngle: 60,
          resize: true
        });

        \$MENU_TOGGLE.on('click', function() {
          \$(window).resize();
        });
      });
    </script>
    <!-- /morris.js -->

    <!-- Skycons -->
    <script>
      var icons = new Skycons({
          \"color\": \"#73879C\"
        }),
        list = [
          \"clear-day\", \"clear-night\", \"partly-cloudy-day\",
          \"partly-cloudy-night\", \"cloudy\", \"rain\", \"sleet\", \"snow\", \"wind\",
          \"fog\"
        ],
        i;

      for (i = list.length; i--;)
        icons.set(list[i], list[i]);

      icons.play();
    </script>
    <!-- /Skycons -->

    <!-- gauge.js -->
    <script>
      var opts = {
        lines: 12,
        angle: 0,
        lineWidth: 0.4,
        pointer: {
          length: 0.75,
          strokeWidth: 0.042,
          color: '#1D212A'
        },
        limitMax: 'false',
        colorStart: '#1ABC9C',
        colorStop: '#1ABC9C',
        strokeColor: '#F0F3F3',
        generateGradient: true
      };
      var target = document.getElementById('foo'),
          gauge = new Gauge(target).setOptions(opts);

      gauge.maxValue = 100;
      gauge.animationSpeed = 32;
      gauge.set(80);
      gauge.setTextField(document.getElementById(\"gauge-text\"));

      var target = document.getElementById('foo2'),
          gauge = new Gauge(target).setOptions(opts);

      gauge.maxValue = 5000;
      gauge.animationSpeed = 32;
      gauge.set(4200);
      gauge.setTextField(document.getElementById(\"gauge-text2\"));
    </script>
    <!-- /gauge.js -->#}
  </body>
</html>", "Admin::layout", "");
    }
}

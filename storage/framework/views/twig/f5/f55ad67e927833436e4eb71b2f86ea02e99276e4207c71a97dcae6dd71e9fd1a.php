<?php

/* C:\xampp\htdocs\laravel\app\Modules\Admin\views/Graficos/GraficoDataProva.twig */
class __TwigTemplate_9f79ef74b392b7099412bce8f6b321643685e1c8ed228e88a9be6013ee994a6e extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"row\">
  <div class=\"col-md-12 col-sm-12 col-xs-12\">
    <div class=\"dashboard_graph x_panel\">
      <div class=\"row x_title\">
        <div class=\"col-md-6\">
          <h3>";
        // line 6
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h3>
        </div>
      </div>
      <div class=\"x_content\">
        <div>
          <div id=\"grafico_";
        // line 11
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" style=\"width: 100%;\">
            <table class=\"grafico_barra\" data-maximo=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["helpers"] ?? null), "maior_valor", array()), "html", null, true);
        echo "\">
              <thead>
                <tr>
                  <th>Data</th>
                  <th>Hora</th>
                  <th class=\"controles\">
                    Locais
                    <label class=\"toggle_expand\">
                      <input type=\"checkbox\" />
                      Expandir texto
                    </label>
                  </th>
                </tr>
              </thead>
              <tbody>
            ";
        // line 27
        $context["last"] = "";
        // line 28
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["id"] => $context["total"]) {
            // line 29
            echo "            ";
            $context["dia"] = $this->getAttribute($this->getAttribute(($context["helpers"] ?? null), "datas", array()), $context["id"], array(), "array");
            // line 30
            echo "
              ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["dia"] ?? null), "horarios", array()));
            foreach ($context['_seq'] as $context["horario"] => $context["locais"]) {
                // line 32
                echo "                <tr>
                  <td class=\"coluna data\">";
                // line 33
                if (($context["id"] != ($context["last"] ?? null))) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["dia"] ?? null), "data", array()), "hora", array()), "d/m/Y"), "html", null, true);
                }
                echo "</td>
                  <td class=\"coluna hora\">";
                // line 34
                echo twig_escape_filter($this->env, $context["horario"], "html", null, true);
                echo "</td>
                  <td class=\"coluna barras\">
                    ";
                // line 36
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["locais"]);
                foreach ($context['_seq'] as $context["_key"] => $context["local"]) {
                    // line 37
                    echo "                    <div data-local=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["local"], "local", array()), "id", array()), "html", null, true);
                    echo "\" class=\"barra-wrapper ";
                    if (($this->getAttribute($context["local"], "quantidade", array()) == 0)) {
                        echo "vazio";
                    }
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["local"], "local", array()), "local", array()), "html", null, true);
                    echo "\">
                      <div class=\"barra total\" style=\"width:";
                    // line 38
                    echo twig_escape_filter($this->env, ((100 * $this->getAttribute($this->getAttribute($context["local"], "data", array()), "maximo", array())) / $this->getAttribute(($context["helpers"] ?? null), "maior_valor", array())), "html", null, true);
                    echo "%;\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["local"], "data", array()), "maximo", array()), "html", null, true);
                    echo "</div>
                      <div class=\"barra atual\" style=\"width:";
                    // line 39
                    echo twig_escape_filter($this->env, ((100 * $this->getAttribute($context["local"], "quantidade", array())) / $this->getAttribute(($context["helpers"] ?? null), "maior_valor", array())), "html", null, true);
                    echo "%;\">
                        ";
                    // line 40
                    echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "quantidade", array()), "html", null, true);
                    echo "
                        <span> - ";
                    // line 41
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["local"], "local", array()), "local", array()), "html", null, true);
                    echo "</span>
                      </div>
                    </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['local'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "                  </td>
                </tr>
              ";
                // line 47
                $context["last"] = $context["id"];
                // line 48
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['horario'], $context['locais'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "              </tbody>
            </table>
            <h4>Legenda:</h4>
            <div class=\"row grafico_barra_legenda\">
            ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["helpers"] ?? null), "locais", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["local"]) {
            // line 55
            echo "              <div class=\"col-md-4 local\" data-local=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "id", array()), "html", null, true);
            echo "\">
                <span class=\"color\"></span>
                <span>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "local", array()), "html", null, true);
            echo "</span>
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['local'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<style type=\"text/css\" media=\"screen\">

/* LEGENDA */

.grafico_barra_legenda .local span { display: inline-block; vertical-align: middle; }
.grafico_barra_legenda .local span.color {
  height: 1em;
  width: 1.5em;
  border-radius: 0.4em;
  background-color: transparent;
  background-image: linear-gradient(90deg, rgba(255,255,255, 0.35) 0%, transparent 1em);
  box-shadow: inset -1px 0 8px rgba(0,0,0,0.15);
  margin-right: 0.5em;
  transition: background-color 0.5s ease;
}

/* BARRAS */

.grafico_barra {
  width: 100%;
}
.grafico_barra th.controles { position: relative; }
.grafico_barra .toggle_expand {
  display: block;
  float: right;
  opacity: 0.5;
  cursor: pointer;
  margin: 0px;
  transition: opacity 0.5s ease;
}
.grafico_barra .toggle_expand input { display: none; }
.grafico_barra.texto .toggle_expand { opacity: 1; }
.grafico_barra .coluna { padding: 0.5em; }
.grafico_barra .coluna.hora { width: 4em; }
.grafico_barra .coluna.data { width: 6em; }
.grafico_barra .coluna.barras { position: relative; }
.grafico_barra .barra-wrapper {
  font-size: 0.5em;
  margin: 0.5em 0em;
  position: relative;
  z-index: 1;
  height: 2em;
  line-height: 1em;
}
.grafico_barra .barra {
  display: block;
  padding: 0.5em 1em;
  height: 100%;
  line-height: 50%;
  overflow: hidden;
  box-sizing: border-box;
  border-radius: 0.8em;
  color: rgba(31, 31, 31, 0.65);
  max-width: 0%;
  white-space: nowrap;
  background-image: linear-gradient(90deg, rgba(255,255,255, 0.35) 0%, transparent 20em);
  transition: all .5s ease;
}
.grafico_barra .barra.atual {
  font-weight: 500;
  box-shadow: inset -1px 0 8px rgba(0,0,0,0.15);
}
.grafico_barra .barra-wrapper.vazio .barra.atual { display: none; }
.grafico_barra .barra.atual > span {
  line-height: 1em;
  opacity: 0;
  transition: opacity .5s ease;
}
.grafico_barra .barra.total {
  position: absolute;
  top: 0px;
  left: 0px;
  z-index: -1;
  border: 1px dashed;
  text-align: right;
}

.grafico_barra.loaded.texto .barra-wrapper { font-size: 1em; }
.grafico_barra.loaded.texto .barra.atual { color: rgba(31, 31, 31, 0.75); }
.grafico_barra.loaded.texto .barra.atual > span { opacity: 1; }

.grafico_barra.loaded .barra {
  -webkit-animation: grafico_barra_loaded 2s cubic-bezier(.62,0,.21,1) forwards;
  opacity: 1;
}

.grafico_barra .linha_vertical {
  position: absolute;
  top: 0px;
  bottom: 0px;
  border-left: 1px solid;
}

.grafico_barra .linha_vertical_legenda {
  position: absolute;
  top: 0px;
  opacity: 0.8;
  margin-bottom: 1em;
  transform: translateX(-50%);
  font-size: 0.65em;
}

.grafico_barra .linha_vertical,
.grafico_barra .linha_vertical_legenda {
  color: #333;
  opacity: 0.5;
}

@-webkit-keyframes grafico_barra_loaded {
    from { max-width: : 0%; }
    to { max-width: 100%; }
}
</style>
<script>
\$(document).ready(() => {

  // Carregar locais e preencher com template

  var locais = {};
  ";
        // line 186
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["helpers"] ?? null), "locais", array()));
        foreach ($context['_seq'] as $context["id"] => $context["local"]) {
            // line 187
            echo "  locais[";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "] = { color: 'hsl(' + Math.floor(Math.random() * 360) + ', 65%, 65%)' };
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['local'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        echo "
  console.log(locais);

  // Inicializa o gráfico

  var grafico_id = '#grafico_";
        // line 194
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "';
  var grafico = grafico_id + ' .grafico_barra';

  // Setar cores nos gráficos

  \$(grafico + ' .barra-wrapper').each(function () {
    var local = locais[\$(this).data('local')];
    \$(this).children('.total').css('color', local.color);
    \$(this).children('.atual').css('background-color', local.color);
  });

  // Setar cores na legenda

  \$(grafico_id + ' .grafico_barra_legenda .local').each(function () {
    var local = locais[\$(this).data('local')];
    \$(this).children('.color').css('background-color', local.color);
  });

  // Handlers do toggle

  \$(grafico + ' .toggle_expand input')
    .val(\$(grafico).hasClass('texto'))
    .on('change', () => { \$(grafico).toggleClass('texto'); });

  \$(grafico).addClass('loaded');

  // Coloca barras

  var mx = \$(grafico).data('maximo');
  var intervalo = 10;

  for (var i = 0; i < mx; i += intervalo) {

    // Não colocar barra no zero ou no valor total

    if (i == 0 || i >= mx) continue;

    // Espaçamento da linha
    var offset = 100 * i / mx;

    // Inserir legenda

    var controles = \$(grafico + ' th.controles');
    var legenda = \$('<span class=\"linha_vertical_legenda\"></div>').html(i).css('left', offset + '%').appendTo(controles);

    console.log(controles, legenda);

    // Inserir linha

    \$(grafico + ' .coluna.barras').each((i, o) => {
      var linha_vertical = \$('<div class=\"linha_vertical\"></div>').css('left', offset + '%').appendTo(\$(o));
    });
  }
});
</script>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\laravel\\app\\Modules\\Admin\\views/Graficos/GraficoDataProva.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 194,  310 => 189,  301 => 187,  297 => 186,  169 => 60,  160 => 57,  154 => 55,  150 => 54,  144 => 50,  138 => 49,  132 => 48,  130 => 47,  126 => 45,  116 => 41,  112 => 40,  108 => 39,  102 => 38,  91 => 37,  87 => 36,  82 => 34,  76 => 33,  73 => 32,  69 => 31,  66 => 30,  63 => 29,  58 => 28,  56 => 27,  38 => 12,  34 => 11,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
  <div class=\"col-md-12 col-sm-12 col-xs-12\">
    <div class=\"dashboard_graph x_panel\">
      <div class=\"row x_title\">
        <div class=\"col-md-6\">
          <h3>{{ title }}</h3>
        </div>
      </div>
      <div class=\"x_content\">
        <div>
          <div id=\"grafico_{{ id }}\" style=\"width: 100%;\">
            <table class=\"grafico_barra\" data-maximo=\"{{ helpers.maior_valor }}\">
              <thead>
                <tr>
                  <th>Data</th>
                  <th>Hora</th>
                  <th class=\"controles\">
                    Locais
                    <label class=\"toggle_expand\">
                      <input type=\"checkbox\" />
                      Expandir texto
                    </label>
                  </th>
                </tr>
              </thead>
              <tbody>
            {% set last = '' %}
            {% for id, total in data %}
            {% set dia = helpers.datas[id] %}

              {% for horario, locais in dia.horarios %}
                <tr>
                  <td class=\"coluna data\">{% if id != last %}{{ dia.data.hora|date('d/m/Y') }}{% endif %}</td>
                  <td class=\"coluna hora\">{{ horario }}</td>
                  <td class=\"coluna barras\">
                    {% for local in locais %}
                    <div data-local=\"{{ local.local.id }}\" class=\"barra-wrapper {% if local.quantidade == 0 %}vazio{% endif %}\" title=\"{{ local.local.local }}\">
                      <div class=\"barra total\" style=\"width:{{ (100 * local.data.maximo / helpers.maior_valor) }}%;\">{{ local.data.maximo }}</div>
                      <div class=\"barra atual\" style=\"width:{{ (100 * local.quantidade / helpers.maior_valor) }}%;\">
                        {{ local.quantidade }}
                        <span> - {{ local.local.local }}</span>
                      </div>
                    </div>
                    {% endfor %}
                  </td>
                </tr>
              {% set last = id %}
              {% endfor %}
            {% endfor %}
              </tbody>
            </table>
            <h4>Legenda:</h4>
            <div class=\"row grafico_barra_legenda\">
            {% for local in helpers.locais %}
              <div class=\"col-md-4 local\" data-local=\"{{ local.id }}\">
                <span class=\"color\"></span>
                <span>{{ local.local }}</span>
              </div>
            {% endfor %}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<style type=\"text/css\" media=\"screen\">

/* LEGENDA */

.grafico_barra_legenda .local span { display: inline-block; vertical-align: middle; }
.grafico_barra_legenda .local span.color {
  height: 1em;
  width: 1.5em;
  border-radius: 0.4em;
  background-color: transparent;
  background-image: linear-gradient(90deg, rgba(255,255,255, 0.35) 0%, transparent 1em);
  box-shadow: inset -1px 0 8px rgba(0,0,0,0.15);
  margin-right: 0.5em;
  transition: background-color 0.5s ease;
}

/* BARRAS */

.grafico_barra {
  width: 100%;
}
.grafico_barra th.controles { position: relative; }
.grafico_barra .toggle_expand {
  display: block;
  float: right;
  opacity: 0.5;
  cursor: pointer;
  margin: 0px;
  transition: opacity 0.5s ease;
}
.grafico_barra .toggle_expand input { display: none; }
.grafico_barra.texto .toggle_expand { opacity: 1; }
.grafico_barra .coluna { padding: 0.5em; }
.grafico_barra .coluna.hora { width: 4em; }
.grafico_barra .coluna.data { width: 6em; }
.grafico_barra .coluna.barras { position: relative; }
.grafico_barra .barra-wrapper {
  font-size: 0.5em;
  margin: 0.5em 0em;
  position: relative;
  z-index: 1;
  height: 2em;
  line-height: 1em;
}
.grafico_barra .barra {
  display: block;
  padding: 0.5em 1em;
  height: 100%;
  line-height: 50%;
  overflow: hidden;
  box-sizing: border-box;
  border-radius: 0.8em;
  color: rgba(31, 31, 31, 0.65);
  max-width: 0%;
  white-space: nowrap;
  background-image: linear-gradient(90deg, rgba(255,255,255, 0.35) 0%, transparent 20em);
  transition: all .5s ease;
}
.grafico_barra .barra.atual {
  font-weight: 500;
  box-shadow: inset -1px 0 8px rgba(0,0,0,0.15);
}
.grafico_barra .barra-wrapper.vazio .barra.atual { display: none; }
.grafico_barra .barra.atual > span {
  line-height: 1em;
  opacity: 0;
  transition: opacity .5s ease;
}
.grafico_barra .barra.total {
  position: absolute;
  top: 0px;
  left: 0px;
  z-index: -1;
  border: 1px dashed;
  text-align: right;
}

.grafico_barra.loaded.texto .barra-wrapper { font-size: 1em; }
.grafico_barra.loaded.texto .barra.atual { color: rgba(31, 31, 31, 0.75); }
.grafico_barra.loaded.texto .barra.atual > span { opacity: 1; }

.grafico_barra.loaded .barra {
  -webkit-animation: grafico_barra_loaded 2s cubic-bezier(.62,0,.21,1) forwards;
  opacity: 1;
}

.grafico_barra .linha_vertical {
  position: absolute;
  top: 0px;
  bottom: 0px;
  border-left: 1px solid;
}

.grafico_barra .linha_vertical_legenda {
  position: absolute;
  top: 0px;
  opacity: 0.8;
  margin-bottom: 1em;
  transform: translateX(-50%);
  font-size: 0.65em;
}

.grafico_barra .linha_vertical,
.grafico_barra .linha_vertical_legenda {
  color: #333;
  opacity: 0.5;
}

@-webkit-keyframes grafico_barra_loaded {
    from { max-width: : 0%; }
    to { max-width: 100%; }
}
</style>
<script>
\$(document).ready(() => {

  // Carregar locais e preencher com template

  var locais = {};
  {% for id, local in helpers.locais %}
  locais[{{ id }}] = { color: 'hsl(' + Math.floor(Math.random() * 360) + ', 65%, 65%)' };
  {% endfor %}

  console.log(locais);

  // Inicializa o gráfico

  var grafico_id = '#grafico_{{ id }}';
  var grafico = grafico_id + ' .grafico_barra';

  // Setar cores nos gráficos

  \$(grafico + ' .barra-wrapper').each(function () {
    var local = locais[\$(this).data('local')];
    \$(this).children('.total').css('color', local.color);
    \$(this).children('.atual').css('background-color', local.color);
  });

  // Setar cores na legenda

  \$(grafico_id + ' .grafico_barra_legenda .local').each(function () {
    var local = locais[\$(this).data('local')];
    \$(this).children('.color').css('background-color', local.color);
  });

  // Handlers do toggle

  \$(grafico + ' .toggle_expand input')
    .val(\$(grafico).hasClass('texto'))
    .on('change', () => { \$(grafico).toggleClass('texto'); });

  \$(grafico).addClass('loaded');

  // Coloca barras

  var mx = \$(grafico).data('maximo');
  var intervalo = 10;

  for (var i = 0; i < mx; i += intervalo) {

    // Não colocar barra no zero ou no valor total

    if (i == 0 || i >= mx) continue;

    // Espaçamento da linha
    var offset = 100 * i / mx;

    // Inserir legenda

    var controles = \$(grafico + ' th.controles');
    var legenda = \$('<span class=\"linha_vertical_legenda\"></div>').html(i).css('left', offset + '%').appendTo(controles);

    console.log(controles, legenda);

    // Inserir linha

    \$(grafico + ' .coluna.barras').each((i, o) => {
      var linha_vertical = \$('<div class=\"linha_vertical\"></div>').css('left', offset + '%').appendTo(\$(o));
    });
  }
});
</script>", "C:\\xampp\\htdocs\\laravel\\app\\Modules\\Admin\\views/Graficos/GraficoDataProva.twig", "");
    }
}

<?php

/* C:\xampp\htdocs\laravel\app\Modules\Admin\views/Graficos/GraficoMapa.twig */
class __TwigTemplate_8199e582916f9cb2b611825bd0726514a7001ad3a7e379c059dff258c8cf85d0 extends TwigBridge\Twig\Template
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
    <div class=\"x_panel\">
      <div class=\"x_title\">
        <h2>";
        // line 5
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h2>
        <ul class=\"nav navbar-right panel_toolbox\">
          <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
          </li>
          <li class=\"dropdown\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-wrench\"></i></a>
            <ul class=\"dropdown-menu\" role=\"menu\">
              <li><a href=\"#\">Settings 1</a>
              </li>
              <li><a href=\"#\">Settings 2</a>
              </li>
            </ul>
          </li>
          <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
          </li>
        </ul>
        <div class=\"clearfix\"></div>
      </div>
      <div class=\"x_content\" style=\"text-align:center;\">
      <div id=\"grafico_";
        // line 24
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" style=\"width:100%; height:31.25rem;\"></div>
      </div>
    ";
        // line 30
        echo "      <div class=\"x_title\">
        <h2>";
        // line 31
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h2>
        <div class=\"clearfix\"></div>
      </div>
      <div class=\"x_content\" style=\"text-align:center;\">

        <table class=\"table table-striped\" id=\"grafico_";
        // line 36
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "_tabela\" style=\"width:100%; height:31.25rem;\">
          <thead>
            <tr>
              <th>Cidade</th>
              <th>Leads</th>
            </tr>
          </thead>
          <tbody>
            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["midias"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["midia"]) {
            // line 45
            echo "                <tr>
                  <th scope=\"row\">";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["midia"], "id", array()), "html", null, true);
            echo "</th>
                  <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["midia"], "nome", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 48
            if ($this->getAttribute($context["midia"], "categoria", array())) {
                echo $this->getAttribute($context["midia"], "categoria_arvore", array(), "method");
            }
            echo "</td>
                  <td>
                    <a href=\"/financeiro/midias/";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["midia"], "id", array()), "html", null, true);
            echo "/\" title=\"Visualizar\"><i class=\"fa fa-eye\"></i></a>
                    <a href=\"/financeiro/midias/";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["midia"], "id", array()), "html", null, true);
            echo "/edit\" title=\"Editar\"><i class=\"fa fa-edit\"></i></a>
                  </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['midia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "          </tbody>
        </table>

      </div>
    </div>
  </div>
</div>
<script>
\$(document).ready(function () {
  var map = L.map('grafico_";
        // line 64
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "').setView([-22.7590555, -47.273218], 9);
  var dados = ";
        // line 65
        echo $this->env->getExtension('App\TwigExtended')->array2json(($context["data"] ?? null));
        echo ";
  var dados_proc = [];

  var fetch_coords = function (data_list, cb) {
    if (data_list.length == 0) {
      cb([]);
      return;
    }

    var req_list = [];
    for (var i = 0; i < data_list.length; i++) {
      var e = data_list[i];
      req_list.push(e.id);
    }

    \$.ajax({
      url: '/ajax/cidades/' + req_list.join(',') + '/coordenadas_json',
      success: function (dados) {

        // Pegar nomes

        \$.ajax({
          url: '/ajax/cidades/' + req_list.join(',') + '/nome',
          async: false,
          success: function (nomes) {

            // Associar dados

            for (var i = 0; i < data_list.length; i++) {
              var e = data_list[i];
              e.coordenadas = dados[e.id];
              e.nome = nomes[e.id];
              data_list[i] = e;
            }

            // Retornar

            cb(data_list);
          }
        });
      }
    });

    /*var req = data_list.pop();
    \$.ajax({
      url: '/ajax/cidades/' + req.id + '/coordenadas_json',
      success: function (dados) {
        req.coordenadas = dados;
        fetch_coords(data_list, function (result) {
          result.push(req);
          cb(result);
        });
      }
    });*/
  }

  L.tileLayer('https://a.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: 'Map data &copy; <a href=\"http://openstreetmap.org\">OpenStreetMap</a> contributors',
      // maxZoom: 18,
  }).addTo(map);

  var maior = 0;

  for (var cidade_id in dados) {
    var leads = dados[cidade_id];

    var maior = Math.max(maior, leads);

    var req = { id: cidade_id, leads: leads };
    dados_proc.push(req);
  }

  console.log('Maior qtd:' + maior);

  // REF: http://leafletjs.com/examples/quick-start/

  fetch_coords (dados_proc, function (dados_coordenadas) {
    console.log(dados_coordenadas);

    var min = 200;
    var max = 5000;

    for (var i = 0; i < dados_coordenadas.length; i++) {
      var dados = dados_coordenadas[i];
      var pct = dados.leads / maior;
      var raio = min + ((max - min) * pct);

      var circle = L.circle([dados.coordenadas.lat, dados.coordenadas.lon], {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5,
        radius: raio // TODO: PRECISA AJUSTAR O TAMANHO PRA NÃO FICAR NEM PEQUENO NEM GRANDE DEMAIS!
      }).bindPopup('<strong>Leads: </strong>' + dados.leads).addTo(map);

      console.log('>', dados.nome, '>' + dados.leads + '<');

      var row = \$('<tr></tr>')
        .append(\$('<td></td>').append(\$('<a style=\"cursor:pointer;\" title=\"Clique para exibir no mapa.\"></a>').data('location', dados.coordenadas).html(dados.nome).click(function(){ var loc = \$(this).data('location'); map.setView([loc.lat, loc.lon]); })))
        .append(\$('<td></td>').html(parseInt(dados.leads)))
        .appendTo('#grafico_";
        // line 164
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "_tabela tbody')

      // Centralizar mapa na maior cidade fonte de leads
      if (dados.leads >= maior)
        map.setView([dados.coordenadas.lat, dados.coordenadas.lon]);
    }

    \$('#grafico_";
        // line 171
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "_tabela').DataTable( {
      scrollY: '31.25rem',
      scrollCollapse: true,
      scroller: {
          loadingIndicator: true
      },
      columnDefs: [
        { type: 'natural', targets: [0, 1] }
      ],
      responsive: true,
      order: [[1, 'desc'],[0, 'asc']] // Ordenar por leads e nome
    });
  });
});
</script>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\laravel\\app\\Modules\\Admin\\views/Graficos/GraficoMapa.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 171,  227 => 164,  125 => 65,  121 => 64,  110 => 55,  100 => 51,  96 => 50,  89 => 48,  85 => 47,  81 => 46,  78 => 45,  74 => 44,  63 => 36,  55 => 31,  52 => 30,  47 => 24,  25 => 5,  19 => 1,);
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
    <div class=\"x_panel\">
      <div class=\"x_title\">
        <h2>{{ title }}</h2>
        <ul class=\"nav navbar-right panel_toolbox\">
          <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
          </li>
          <li class=\"dropdown\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-wrench\"></i></a>
            <ul class=\"dropdown-menu\" role=\"menu\">
              <li><a href=\"#\">Settings 1</a>
              </li>
              <li><a href=\"#\">Settings 2</a>
              </li>
            </ul>
          </li>
          <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
          </li>
        </ul>
        <div class=\"clearfix\"></div>
      </div>
      <div class=\"x_content\" style=\"text-align:center;\">
      <div id=\"grafico_{{ id }}\" style=\"width:100%; height:31.25rem;\"></div>
      </div>
    {#</div>
  </div>
  <div class=\"col-md-12 col-sm-12 col-xs-12\">
    <div class=\"x_panel\">#}
      <div class=\"x_title\">
        <h2>{{ title }}</h2>
        <div class=\"clearfix\"></div>
      </div>
      <div class=\"x_content\" style=\"text-align:center;\">

        <table class=\"table table-striped\" id=\"grafico_{{ id }}_tabela\" style=\"width:100%; height:31.25rem;\">
          <thead>
            <tr>
              <th>Cidade</th>
              <th>Leads</th>
            </tr>
          </thead>
          <tbody>
            {% for midia in midias %}
                <tr>
                  <th scope=\"row\">{{ midia.id }}</th>
                  <td>{{ midia.nome }}</td>
                  <td>{% if midia.categoria %}{{ midia.categoria_arvore()|raw }}{% endif %}</td>
                  <td>
                    <a href=\"/financeiro/midias/{{ midia.id }}/\" title=\"Visualizar\"><i class=\"fa fa-eye\"></i></a>
                    <a href=\"/financeiro/midias/{{ midia.id }}/edit\" title=\"Editar\"><i class=\"fa fa-edit\"></i></a>
                  </td>
                </tr>
            {% endfor %}
          </tbody>
        </table>

      </div>
    </div>
  </div>
</div>
<script>
\$(document).ready(function () {
  var map = L.map('grafico_{{ id }}').setView([-22.7590555, -47.273218], 9);
  var dados = {{ data|array2json|raw }};
  var dados_proc = [];

  var fetch_coords = function (data_list, cb) {
    if (data_list.length == 0) {
      cb([]);
      return;
    }

    var req_list = [];
    for (var i = 0; i < data_list.length; i++) {
      var e = data_list[i];
      req_list.push(e.id);
    }

    \$.ajax({
      url: '/ajax/cidades/' + req_list.join(',') + '/coordenadas_json',
      success: function (dados) {

        // Pegar nomes

        \$.ajax({
          url: '/ajax/cidades/' + req_list.join(',') + '/nome',
          async: false,
          success: function (nomes) {

            // Associar dados

            for (var i = 0; i < data_list.length; i++) {
              var e = data_list[i];
              e.coordenadas = dados[e.id];
              e.nome = nomes[e.id];
              data_list[i] = e;
            }

            // Retornar

            cb(data_list);
          }
        });
      }
    });

    /*var req = data_list.pop();
    \$.ajax({
      url: '/ajax/cidades/' + req.id + '/coordenadas_json',
      success: function (dados) {
        req.coordenadas = dados;
        fetch_coords(data_list, function (result) {
          result.push(req);
          cb(result);
        });
      }
    });*/
  }

  L.tileLayer('https://a.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: 'Map data &copy; <a href=\"http://openstreetmap.org\">OpenStreetMap</a> contributors',
      // maxZoom: 18,
  }).addTo(map);

  var maior = 0;

  for (var cidade_id in dados) {
    var leads = dados[cidade_id];

    var maior = Math.max(maior, leads);

    var req = { id: cidade_id, leads: leads };
    dados_proc.push(req);
  }

  console.log('Maior qtd:' + maior);

  // REF: http://leafletjs.com/examples/quick-start/

  fetch_coords (dados_proc, function (dados_coordenadas) {
    console.log(dados_coordenadas);

    var min = 200;
    var max = 5000;

    for (var i = 0; i < dados_coordenadas.length; i++) {
      var dados = dados_coordenadas[i];
      var pct = dados.leads / maior;
      var raio = min + ((max - min) * pct);

      var circle = L.circle([dados.coordenadas.lat, dados.coordenadas.lon], {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5,
        radius: raio // TODO: PRECISA AJUSTAR O TAMANHO PRA NÃO FICAR NEM PEQUENO NEM GRANDE DEMAIS!
      }).bindPopup('<strong>Leads: </strong>' + dados.leads).addTo(map);

      console.log('>', dados.nome, '>' + dados.leads + '<');

      var row = \$('<tr></tr>')
        .append(\$('<td></td>').append(\$('<a style=\"cursor:pointer;\" title=\"Clique para exibir no mapa.\"></a>').data('location', dados.coordenadas).html(dados.nome).click(function(){ var loc = \$(this).data('location'); map.setView([loc.lat, loc.lon]); })))
        .append(\$('<td></td>').html(parseInt(dados.leads)))
        .appendTo('#grafico_{{ id }}_tabela tbody')

      // Centralizar mapa na maior cidade fonte de leads
      if (dados.leads >= maior)
        map.setView([dados.coordenadas.lat, dados.coordenadas.lon]);
    }

    \$('#grafico_{{ id }}_tabela').DataTable( {
      scrollY: '31.25rem',
      scrollCollapse: true,
      scroller: {
          loadingIndicator: true
      },
      columnDefs: [
        { type: 'natural', targets: [0, 1] }
      ],
      responsive: true,
      order: [[1, 'desc'],[0, 'asc']] // Ordenar por leads e nome
    });
  });
});
</script>", "C:\\xampp\\htdocs\\laravel\\app\\Modules\\Admin\\views/Graficos/GraficoMapa.twig", "");
    }
}

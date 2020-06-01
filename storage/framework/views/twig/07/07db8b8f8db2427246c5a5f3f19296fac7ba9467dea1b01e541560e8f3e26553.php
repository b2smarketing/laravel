<?php

/* /var/www/app/app/Modules/Admin/views/TOPPesquisa/index.twig */
class __TwigTemplate_2374417c28fa544f37a628195c6b9dddf8fce95807e2e6b5dd4ee9e68cfae83e extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::layout", "/var/www/app/app/Modules/Admin/views/TOPPesquisa/index.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Admin::layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["title"] = "Resultados do TOP - Teste de Orientação Profissional";
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
                  <h2>Resultados do TOP (com pesquisa) - Teste de Orientação Profissional</h2>
                  <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">

                  <table id=\"tabela_alunos\" class=\"table table-striped\">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th class=\"all\">E-mail</th>
                        <th class=\"all\">Candidato</th>
                        <th class=\"all\">Match/Área</th>
                        <th title=\"Exatas\">Exa.</th>
                        <th title=\"Biológicas\">Bio.</th>
                        <th title=\"Humanas\">Hum.</th>
                        <th title=\"Engenharias\">Eng.</th>
                        <th title=\"Saúde\">Sau.</th>
                        <th title=\"Artes\">Art.</th>
                        <th title=\"\">O que você considera importante na hora de escolher a Instituição de Ensino?</th>
                        <th title=\"\">Há quanto tempo você decidiu em qual Instituição cursar?</th>
                        <th title=\"\">Se você ainda não escolheu a Instituição, o que te impede?</th>
                        <th title=\"\">Se você escolheu a opção “não tenho disponibilidade de horário”, você consideraria um curso à distância?</th>
                        <th title=\"\">Você escolheria a FAM para ingressar no Ensino Superior?</th>
                        <th title=\"\">Na internet, quais redes você costuma acessar?</th>
                        <th title=\"\">O que você costuma ouvir?</th>
                        <th title=\"\">Você costuma prestar atenção em outdoor e propagandas na rua?</th>
                        <th title=\"\">Há quanto tempo você decidiu o curso que quer cursar?</th>
                        <th title=\"\">Não encontrou o curso que é a sua cara? Diz pra gente o que você gostaria de cursar</th>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>

                </div>
              </div>
            </div>

            <div class=\"clearfix\"></div>
        </div>
    </div>
</div>
";
    }

    // line 56
    public function block_scripts($context, array $blocks = array())
    {
        // line 57
        echo "<style type=\"text/css\" media=\"screen\">
/*#tabela_alunos { min-height: 100em; }*/
#tabela_alunos tr { cursor: pointer; }
#tabela_alunos tr:hover {}
</style>
<script>
\$(document).ready(function () {
\tvar table = \$('#tabela_alunos').DataTable( {
        // serverSide: true,
        // ordering: false,
        // searching: false,
        ajax: {
\t\t\turl: '/top-pesquisa/ajax/',
\t\t    dataSrc: function ( leads ) {
\t\t    \tvar out = [];
\t\t    \tvar lead = {};
\t\t    \tfor ( var i=0, ien=leads.length ; i<ien ; i++ ) {
\t\t    \t\tlead = leads[i];
\t\t    \t\tout.push([
\t\t    \t\t\tlead.id,
                        lead.email,
                        (lead.aluno) ? ('<a style=\"font-weight:bold;\" target=\"_blank\" href=\"/alunos/' + lead.aluno.id + '\">' + lead.aluno.nome + '</a>') : '',
                        lead.match_area,
                        lead.resultados.exatas || 0,
                        lead.resultados.biologicas || 0,
                        lead.resultados.humanas || 0,
                        lead.resultados.engenharias || 0,
                        lead.resultados.saude || 0,
                        lead.resultados.artes || 0,
                        lead.raw[0].resposta || \"\",
                        lead.raw[1].resposta || \"\",
                        lead.raw[2].resposta || \"\",
                        lead.raw[3].resposta || \"\",
                        lead.raw[4].resposta || \"\",
                        lead.raw[5].resposta || \"\",
                        lead.raw[6].resposta || \"\",
                        lead.raw[7].resposta || \"\",
                        lead.raw[8].resposta || \"\",
                        lead.raw[9].resposta || \"\",
\t\t    \t\t]);
\t\t    \t}
\t\t    \treturn out;
\t\t    }
\t\t},
        scrollY: '50vh',
        scrollCollapse: true,
        scroller: {
            loadingIndicator: true
        },
  \t\tresponsive: true,
        buttons: [
            'copy',
            'csv',
            'excel',
            'pdf',
            'print'
        ],
        initComplete: function () {
            console.log('LOADED', table);
            table.buttons().container()
                .appendTo( \$('#tabela_alunos_filter').parent() );
                ";
        // line 119
        echo "        }
    } );

    \$('#tabela_alunos').on('click', 'tr', function () {
    \tvar id = \$(\$(this).find('td')[0]).html();
      // document.location.href = '/alunos/' + id;
    \t//window.open ('/alunos/' + id);
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "/var/www/app/app/Modules/Admin/views/TOPPesquisa/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 119,  90 => 57,  87 => 56,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/TOPPesquisa/index.twig", "");
    }
}

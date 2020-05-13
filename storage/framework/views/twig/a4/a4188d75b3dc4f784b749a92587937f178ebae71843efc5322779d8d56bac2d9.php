<?php

/* /var/www/app/app/Modules/Admin/views/Datastore/filter.twig */
class __TwigTemplate_61fc6c09369ca25b55d932f7be23f143a770bfe928f28c1ed1282df066d3616c extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::layout", "/var/www/app/app/Modules/Admin/views/Datastore/filter.twig", 1);
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
        $context["title"] = (($context["identifier"] ?? null) . " : Outros Dados");
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
                  <h2>Outros Dados : ";
        // line 12
        echo twig_escape_filter($this->env, ($context["identifier"] ?? null), "html", null, true);
        echo "</h2>
                  <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">

                  <table id=\"tabela_alunos\" class=\"table table-striped\">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th class=\"all\">Nome</th>
                        <th class=\"all\">E-mail</th>
                        <th class=\"all\">Cadastro (BI)</th>
                        <th class=\"all\">Qtd. Campos</th>
                        <th class=\"all\">Ações</th>
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

    // line 42
    public function block_scripts($context, array $blocks = array())
    {
        // line 43
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
\t\t\turl: '/datastore/api/identifier/";
        // line 55
        echo twig_escape_filter($this->env, ($context["identifier"] ?? null), "html", null, true);
        echo "',
\t\t    dataSrc: function ( result ) {
          let entradas = result.entradas;
\t\t    \tvar out = [];
\t\t    \tvar entrada = {};
\t\t    \tfor ( var i=0, ien=entradas.length ; i<ien ; i++ ) {
\t\t    \t\tentrada = entradas[i];
\t\t    \t\tout.push([
\t\t    \t\t\tentrada.id,
                        entrada.nome,
                        entrada.email,
                        (entrada.aluno) ? (`<a style=\"font-weight:bold;\" target=\"_blank\" href=\"/alunos/\${entrada.aluno.id}\">\${entrada.aluno.nome}</a>`) : '',
                        entrada.qtd_campos,
                        `<a style=\"font-weight:bold;\" target=\"_blank\" href=\"/datastore/entrada/\${entrada.id}\">Visualizar</a>`
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
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        initComplete: function () {
            console.log('LOADED', table);
            table.buttons().container()
                .appendTo( \$('#tabela_alunos_filter').parent() );
                ";
        // line 88
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
        return "/var/www/app/app/Modules/Admin/views/Datastore/filter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 88,  93 => 55,  79 => 43,  76 => 42,  43 => 12,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/Datastore/filter.twig", "");
    }
}

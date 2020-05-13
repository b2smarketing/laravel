<?php

/* /var/www/app/app/Modules/Admin/views/Alunos/index.twig */
class __TwigTemplate_46f23fa4b0be55566bab7a9dfd0a8f98787974b545aedf94fc1fbc773ea82a8b extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::layout", "/var/www/app/app/Modules/Admin/views/Alunos/index.twig", 1);
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
        $context["title"] = "Alunos";
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
                  <h2>Alunos</h2>
                  <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">

                  <table id=\"tabela_alunos\" class=\"table table-striped\">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th class=\"all\">Nome</th>
                        <th>CPF</th>
                        <th>CPF (numérico)</th>
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

    // line 40
    public function block_scripts($context, array $blocks = array())
    {
        // line 41
        echo "<style type=\"text/css\" media=\"screen\">
/*#tabela_alunos { min-height: 100em; }*/
#tabela_alunos tr { cursor: pointer; }
#tabela_alunos tr:hover {}
</style>
<script>
\$(document).ready(function () {
\t\$('#tabela_alunos').DataTable( {
        // serverSide: true,
        // ordering: false,
        // searching: false,
        ajax: {
\t\t\turl: '/ajax/alunos',
\t\t    dataSrc: function ( alunos ) {
\t\t    \tvar out = [];
\t\t    \tvar aluno = {};
\t\t    \tfor ( var i=0, ien=alunos.length ; i<ien ; i++ ) {
\t\t    \t\taluno = alunos[i];
\t\t    \t\tout.push([
\t\t    \t\t\taluno.id,
              aluno.nome || '-[ SEM NOME ]-',
\t\t    \t\t\taluno.cpf,
\t\t    \t\t\taluno.cpf.replace(/\\./gi, \"\").replace(/\\-/gi, \"\")
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
      order: [[ 0, 'desc' ]],
      columnDefs: [
        { targets: 3, visible: false, searchable: true }
      ]
    } );

    \$('#tabela_alunos').on('click', 'tr', function () {
    \tvar id = \$(\$(this).find('td')[0]).html();
      // document.location.href = '/alunos/' + id;
    \twindow.open ('/alunos/' + id);
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "/var/www/app/app/Modules/Admin/views/Alunos/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 41,  71 => 40,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/Alunos/index.twig", "");
    }
}

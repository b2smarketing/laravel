<?php

/* /var/www/app/app/Modules/Admin/views/Cursos/view.twig */
class __TwigTemplate_0d3db3dd3241bbac28e95d0f2419aa656c7bbade7559b810b479c6a101dd3275 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin::layout", "/var/www/app/app/Modules/Admin/views/Cursos/view.twig", 1);
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
        $context["exibir"] = $this->loadTemplate("Admin::helpers.link_display", "/var/www/app/app/Modules/Admin/views/Cursos/view.twig", 3);
        // line 5
        if (($context["curso"] ?? null)) {
            // line 6
            $context["title"] = ("Editando: " . $this->getAttribute(($context["curso"] ?? null), "nome", array()));
        } else {
            // line 8
            $context["title"] = "Novo curso";
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "<div class=\"right_col\" role=\"main\">
\t<div class=\"\">

    <form method=\"post\" action=\"/cursos/";
        // line 15
        if (($context["curso"] ?? null)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["curso"] ?? null), "id", array()), "html", null, true);
        } else {
            echo "new";
        }
        echo "\">
      ";
        // line 16
        echo csrf_field();
        echo "
          
      <div class=\"row\">
        <div class=\"col-md-12\" style=\"padding-top: 1em; padding-bottom: 1em\">
            <input type=\"submit\" class=\"btn btn-primary\" value=\"Salvar Curso\" />
        </div>
      </div>
      
      <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>";
        // line 28
        if (($context["curso"] ?? null)) {
            echo "Editar Curso";
        } else {
            echo "Novo Curso";
        }
        echo "</h2>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">

                    <div class=\"row\">
                      <div class=\"col-md-6 col-sm-12 col-xs-12\">
                        <label for=\"nome\">Nome</label>
                        <input id=\"nome\" name=\"nome\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["curso"] ?? null), "nome", array()), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\" />
                      </div>
                      <div class=\"col-md-2 col-sm-6 col-xs-4\">
                        <label for=\"codigo\">Código</label>
                        <input id=\"codigo\" name=\"codigo\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["curso"] ?? null), "codigo", array()), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\" />
                      </div>
                      <div class=\"col-md-4 col-sm-6 col-xs-8\">
                        <label for=\"valor\">Mensalidade</label>
                        <div class=\"form-group col-md-12 col-sm-12 col-xs-12\">
                          <input id=\"valor\" name=\"valor\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["curso"] ?? null), "valor", array()), 2, ".", ""), "html", null, true);
        echo "\" class=\"form-control no-spin has-feedback-left\" type=\"number\" step=\"any\" min=\"0\" />
                          <span class=\"form-control-feedback left\" aria-hidden=\"true\">R\$</span>
                        </div>
                      </div>
                    </div>

                    <div class=\"row\">
                      <div class=\"col-md-6 col-sm-6 col-xs-6\">
                        <label for=\"modo\">Modo</label>
                        <input id=\"modo\" name=\"dados_adicionais[modo]\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["curso"] ?? null), "dados_adicionais", array()), "modo", array()), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\" />
                      </div>
                      <div class=\"col-md-6 col-sm-6 col-xs-6\">
                        <label for=\"periodo\">Período</label>
                        <input id=\"periodo\" name=\"dados_adicionais[periodo]\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["curso"] ?? null), "dados_adicionais", array()), "periodo", array()), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\" />
                      </div>
                      <div class=\"col-md-3 col-sm-3 col-xs-3\">
                        <label for=\"video\">Vídeo do Curso</label>
                        <input id=\"video\" name=\"dados_adicionais[video]\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["curso"] ?? null), "dados_adicionais", array()), "video", array()), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\" />
                      </div>
                      <div class=\"col-md-3 col-sm-3 col-xs-3\">
                        <label for=\"modalidade\">Modalidade</label>
                        <input id=\"modalidade\" name=\"dados_adicionais[modalidade]\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["curso"] ?? null), "dados_adicionais", array()), "modalidade", array()), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\" />
                      </div>
                      <div class=\"col-md-3 col-sm-3 col-xs-3\">
                        <label for=\"duracao\">Semestres</label>
                        <input id=\"duracao\" name=\"duracao\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute(($context["curso"] ?? null), "duracao", array()), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\" />
                      </div>
                      <div class=\"col-md-3 col-sm-3 col-xs-3\">
                        <label for=\"vagas\">Vagas</label>
                        <input id=\"vagas\" name=\"vagas\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute(($context["curso"] ?? null), "vagas", array()), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\" />
                      </div>
                      <div class=\"col-md-12 col-sm-12 col-xs-12\">
                        <label for=\"landing_page\">Landing Page</label>
                        <input id=\"landing_page\" name=\"landing_page\" value=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute(($context["curso"] ?? null), "landing_page", array()), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\" />
                      </div>
                      <div class=\"col-md-12 col-sm-12 col-xs-12\">
                        <label for=\"descricao\">Descrição do Curso</label>
                        <textarea id=\"descricao\" name=\"dados_adicionais[descricao]\" rows=\"10\" class=\"form-control\">";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["curso"] ?? null), "dados_adicionais", array()), "descricao", array()), "html", null, true);
        echo "</textarea>
                      <br /></div>
                      <div class=\"col-md-12 col-sm-12 col-xs-12\">
                        <label for=\"mercado\">Mercado de Trabalho</label>
                        <textarea id=\"mercado\" name=\"dados_adicionais[mercado]\" rows=\"10\" class=\"form-control\">";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["curso"] ?? null), "dados_adicionais", array()), "mercado", array()), "html", null, true);
        echo "</textarea>
                      <br /></div>
                      <div class=\"col-md-12 col-sm-12 col-xs-12\">
                        <label for=\"grade\">Grade do Curso</label>
                        <textarea id=\"grade\" name=\"dados_adicionais[grade]\" rows=\"10\" class=\"form-control\">";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["curso"] ?? null), "dados_adicionais", array()), "grade", array()), "html", null, true);
        echo "</textarea>
                      <br /></div>
                      <div class=\"col-md-12 col-sm-12 col-xs-12\">
                        <label for=\"coordenador\">Coordenador do Curso</label>
                        <textarea id=\"coordenador\" name=\"dados_adicionais[coordenador]\" rows=\"10\" class=\"form-control\">";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["curso"] ?? null), "dados_adicionais", array()), "coordenador", array()), "html", null, true);
        echo "</textarea>
                      <br /></div>
                    </div>

                  </div>
                </div>
              </div>

              <div class=\"clearfix\"></div>
          </div>

      </form>
    </div>
</div>

<style type=\"text/css\" media=\"screen\">
.form-control-feedback.left {
  top: -2px;
  left: 4px;
}
.form-group {
  padding: 0px;
}
textarea { resize: none; }
</style>

<!-- WYSWYG -->
<link rel=\"stylesheet\" href=\"/wysiwyg/bootstrap3-wysihtml5.min.css\" />
<script src=\"/wysiwyg/wysihtml5x-toolbar.min.js\"></script>
<script src=\"/wysiwyg/handlebars.runtime.min.js\"></script>
<script src=\"/wysiwyg/bootstrap3-wysihtml5.min.js\"></script>

<!-- Aplicar WYSWYG -->

<script type=\"text/javascript\">
\$('textarea').wysihtml5({
  locale: 'pt-BR',
  toolbar: {
    'color': false,
    'image': false,
    'blockquote': false,
    'ident-left': false,
    'Outdent': false,
    'small': false
  }
});
</script>

";
    }

    public function getTemplateName()
    {
        return "/var/www/app/app/Modules/Admin/views/Cursos/view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 94,  175 => 90,  168 => 86,  161 => 82,  154 => 78,  147 => 74,  140 => 70,  133 => 66,  126 => 62,  119 => 58,  112 => 54,  100 => 45,  92 => 40,  85 => 36,  70 => 28,  55 => 16,  47 => 15,  42 => 12,  39 => 11,  35 => 1,  32 => 8,  29 => 6,  27 => 5,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/Admin/views/Cursos/view.twig", "");
    }
}

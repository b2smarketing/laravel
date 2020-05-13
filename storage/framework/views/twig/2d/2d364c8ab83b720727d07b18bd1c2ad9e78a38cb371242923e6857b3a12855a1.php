<?php

/* /var/www/app/landing-pages/faculdadeaberta-dev/views//index.twig */
class __TwigTemplate_bbbd591d1977fd6c8a395fffd38b52433eeb09248b84ffae184ecf9f6b4d72f3 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LP::layout", "/var/www/app/landing-pages/faculdadeaberta-dev/views//index.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LP::layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["title"] = "Programa Faculdade Aberta - FAM";
        // line 4
        $context["meta_desc"] = "A FAM estará de portas abertas para te receber. Venha conhecer nossa estrutura e como funciona o nosso universo.";
        // line 5
        $context["meta_keyw"] = "";
        // line 8
        $context["set_30_manha"] = 0;
        // line 9
        $context["set_30_noite"] = 0;
        // line 10
        $context["out_01_manha"] = 0;
        // line 11
        $context["out_01_noite"] = 0;
        // line 12
        $context["out_02_manha"] = 0;
        // line 13
        $context["out_02_noite"] = 0;
        // line 14
        $context["out_03_manha"] = 0;
        // line 15
        $context["out_03_noite"] = 0;
        // line 16
        $context["out_04_manha"] = 0;
        // line 17
        $context["out_04_noite"] = 0;
        // line 18
        $context["out_07_manha"] = 0;
        // line 19
        $context["out_07_noite"] = 0;
        // line 20
        $context["out_08_manha"] = 0;
        // line 21
        $context["out_08_noite"] = 0;
        // line 22
        $context["out_09_manha"] = 0;
        // line 23
        $context["out_09_noite"] = 0;
        // line 24
        $context["out_10_manha"] = 0;
        // line 25
        $context["out_10_noite"] = 0;
        // line 26
        $context["out_11_manha"] = 0;
        // line 27
        $context["out_11_noite"] = 0;
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data_requested"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["escola"]) {
            // line 32
            if ($this->getAttribute($this->getAttribute($context["escola"], "data", array(), "any", false, true), "data_e_periodo", array(), "any", true, true)) {
                // line 33
                $context["periodo"] = $this->getAttribute($this->getAttribute($context["escola"], "data", array()), "data_e_periodo", array());
                // line 34
                if ((($context["periodo"] ?? null) == "set_30_manha")) {
                    $context["set_30_manha"] = (($context["set_30_manha"] ?? null) + $this->getAttribute($this->getAttribute($context["escola"], "data", array()), "nro_alunos", array()));
                } elseif ((                // line 35
($context["periodo"] ?? null) == "set_30_noite")) {
                    $context["set_30_noite"] = (($context["set_30_noite"] ?? null) + $this->getAttribute($this->getAttribute($context["escola"], "data", array()), "nro_alunos", array()));
                } elseif ((                // line 36
($context["periodo"] ?? null) == "out_01_manha")) {
                    $context["out_01_manha"] = (($context["out_01_manha"] ?? null) + $this->getAttribute($this->getAttribute($context["escola"], "data", array()), "nro_alunos", array()));
                } elseif ((                // line 37
($context["periodo"] ?? null) == "out_01_noite")) {
                    $context["out_01_noite"] = (($context["out_01_noite"] ?? null) + $this->getAttribute($this->getAttribute($context["escola"], "data", array()), "nro_alunos", array()));
                } elseif ((                // line 38
($context["periodo"] ?? null) == "out_02_manha")) {
                    $context["out_02_manha"] = (($context["out_02_manha"] ?? null) + $this->getAttribute($this->getAttribute($context["escola"], "data", array()), "nro_alunos", array()));
                } elseif ((                // line 39
($context["periodo"] ?? null) == "out_02_noite")) {
                    $context["out_02_noite"] = (($context["out_02_noite"] ?? null) + $this->getAttribute($this->getAttribute($context["escola"], "data", array()), "nro_alunos", array()));
                } elseif ((                // line 40
($context["periodo"] ?? null) == "out_03_manha")) {
                    $context["out_03_manha"] = (($context["out_03_manha"] ?? null) + $this->getAttribute($this->getAttribute($context["escola"], "data", array()), "nro_alunos", array()));
                } elseif ((                // line 41
($context["periodo"] ?? null) == "out_03_noite")) {
                    $context["out_03_noite"] = (($context["out_03_noite"] ?? null) + $this->getAttribute($this->getAttribute($context["escola"], "data", array()), "nro_alunos", array()));
                } elseif ((                // line 42
($context["periodo"] ?? null) == "out_04_manha")) {
                    $context["out_04_manha"] = (($context["out_04_manha"] ?? null) + $this->getAttribute($this->getAttribute($context["escola"], "data", array()), "nro_alunos", array()));
                } elseif ((                // line 43
($context["periodo"] ?? null) == "out_04_noite")) {
                    $context["out_04_noite"] = (($context["out_04_noite"] ?? null) + $this->getAttribute($this->getAttribute($context["escola"], "data", array()), "nro_alunos", array()));
                } elseif ((                // line 44
($context["periodo"] ?? null) == "out_07_manha")) {
                    $context["out_07_manha"] = (($context["out_07_manha"] ?? null) + $this->getAttribute($this->getAttribute($context["escola"], "data", array()), "nro_alunos", array()));
                } elseif ((                // line 45
($context["periodo"] ?? null) == "out_07_noite")) {
                    $context["out_07_noite"] = (($context["out_07_noite"] ?? null) + $this->getAttribute($this->getAttribute($context["escola"], "data", array()), "nro_alunos", array()));
                } elseif ((                // line 46
($context["periodo"] ?? null) == "out_08_manha")) {
                    $context["out_08_manha"] = (($context["out_08_manha"] ?? null) + $this->getAttribute($this->getAttribute($context["escola"], "data", array()), "nro_alunos", array()));
                } elseif ((                // line 47
($context["periodo"] ?? null) == "out_08_noite")) {
                    $context["out_08_noite"] = (($context["out_08_noite"] ?? null) + $this->getAttribute($this->getAttribute($context["escola"], "data", array()), "nro_alunos", array()));
                } elseif ((                // line 48
($context["periodo"] ?? null) == "out_09_manha")) {
                    $context["out_09_manha"] = (($context["out_09_manha"] ?? null) + $this->getAttribute($this->getAttribute($context["escola"], "data", array()), "nro_alunos", array()));
                } elseif ((                // line 49
($context["periodo"] ?? null) == "out_09_noite")) {
                    $context["out_09_noite"] = (($context["out_09_noite"] ?? null) + $this->getAttribute($this->getAttribute($context["escola"], "data", array()), "nro_alunos", array()));
                } elseif ((                // line 50
($context["periodo"] ?? null) == "out_10_manha")) {
                    $context["out_10_manha"] = (($context["out_10_manha"] ?? null) + $this->getAttribute($this->getAttribute($context["escola"], "data", array()), "nro_alunos", array()));
                } elseif ((                // line 51
($context["periodo"] ?? null) == "out_10_noite")) {
                    $context["out_10_noite"] = (($context["out_10_noite"] ?? null) + $this->getAttribute($this->getAttribute($context["escola"], "data", array()), "nro_alunos", array()));
                } elseif ((                // line 52
($context["periodo"] ?? null) == "out_11_manha")) {
                    $context["out_11_manha"] = (($context["out_11_manha"] ?? null) + $this->getAttribute($this->getAttribute($context["escola"], "data", array()), "nro_alunos", array()));
                } elseif ((                // line 53
($context["periodo"] ?? null) == "out_11_noite")) {
                    $context["out_11_noite"] = (($context["out_11_noite"] ?? null) + $this->getAttribute($this->getAttribute($context["escola"], "data", array()), "nro_alunos", array()));
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['escola'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        $context["opcoes"] = array(0 => array("id" => "set_30_manha", "data" => "30/09/2019", "horario" => "8h às 11h", "alunos" =>         // line 61
($context["set_30_manha"] ?? null)), 1 => array("id" => "set_30_noite", "data" => "30/09/2019", "horario" => "19h às 22h", "alunos" =>         // line 62
($context["set_30_noite"] ?? null)), 2 => array("id" => "out_01_manha", "data" => "01/10/2019", "horario" => "8h às 11h", "alunos" =>         // line 63
($context["out_01_manha"] ?? null)), 3 => array("id" => "out_01_noite", "data" => "01/10/2019", "horario" => "19h às 22h", "alunos" =>         // line 64
($context["out_01_noite"] ?? null)), 4 => array("id" => "out_02_manha", "data" => "02/10/2019", "horario" => "8h às 11h", "alunos" =>         // line 65
($context["out_02_manha"] ?? null)), 5 => array("id" => "out_02_noite", "data" => "02/10/2019", "horario" => "19h às 22h", "alunos" =>         // line 66
($context["out_02_noite"] ?? null)), 6 => array("id" => "out_03_manha", "data" => "03/10/2019", "horario" => "8h às 11h", "alunos" =>         // line 67
($context["out_03_manha"] ?? null)), 7 => array("id" => "out_03_noite", "data" => "03/10/2019", "horario" => "19h às 22h", "alunos" =>         // line 68
($context["out_03_noite"] ?? null)), 8 => array("id" => "out_04_manha", "data" => "04/10/2019", "horario" => "8h às 11h", "alunos" =>         // line 69
($context["out_04_manha"] ?? null)), 9 => array("id" => "out_04_noite", "data" => "04/10/2019", "horario" => "19h às 22h", "alunos" =>         // line 70
($context["out_04_noite"] ?? null)), 10 => array("id" => "out_07_manha", "data" => "07/10/2019", "horario" => "8h às 11h", "alunos" =>         // line 71
($context["out_07_manha"] ?? null)), 11 => array("id" => "out_07_noite", "data" => "07/10/2019", "horario" => "19h às 22h", "alunos" =>         // line 72
($context["out_07_noite"] ?? null)), 12 => array("id" => "out_08_manha", "data" => "08/10/2019", "horario" => "8h às 11h", "alunos" =>         // line 73
($context["out_08_manha"] ?? null)), 13 => array("id" => "out_08_noite", "data" => "08/10/2019", "horario" => "19h às 22h", "alunos" =>         // line 74
($context["out_08_noite"] ?? null)), 14 => array("id" => "out_09_manha", "data" => "09/10/2019", "horario" => "8h às 11h", "alunos" =>         // line 75
($context["out_09_manha"] ?? null)), 15 => array("id" => "out_09_noite", "data" => "09/10/2019", "horario" => "19h às 22h", "alunos" =>         // line 76
($context["out_09_noite"] ?? null)), 16 => array("id" => "out_10_manha", "data" => "10/10/2019", "horario" => "8h às 11h", "alunos" =>         // line 77
($context["out_10_manha"] ?? null)), 17 => array("id" => "out_10_noite", "data" => "10/10/2019", "horario" => "19h às 22h", "alunos" =>         // line 78
($context["out_10_noite"] ?? null)), 18 => array("id" => "out_11_manha", "data" => "11/10/2019", "horario" => "8h às 11h", "alunos" =>         // line 79
($context["out_11_manha"] ?? null)), 19 => array("id" => "out_11_noite", "data" => "11/10/2019", "horario" => "19h às 22h", "alunos" =>         // line 80
($context["out_11_noite"] ?? null)));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 84
    public function block_body($context, array $blocks = array())
    {
        // line 85
        echo "
<nav class=\"l-nav container d-flex flex-column flex-md-row justify-content-md-between align-items-center pt-3\">
    <a href=\"https://fam.br\" target=\"_blank\" rel=\"noopener\"><img src=\"/assets/img/logo-fam.svg\" alt=\"\" class=\"c-logo\"/></a>
    <ul class=\"c-menu d-flex flex-wrap justify-content-center\">
        <li class=\"c-menu__item\"><a href=\"https://issuu.com/famamericana/docs/guia_de_cursos_2019_issu\" class=\"c-menu__link\" target=\"_blank\">Guia de Cursos</a></li>
        <li class=\"c-menu__item\"><a href=\"https://assets.fam.br/editais/Programa%20Desconto%20Especial%20pelo%20ENEM%20-%202019.2.pdf\" class=\"c-menu__link\" target=\"_blank\">Edital</a></li>
    </ul>
</nav>

<section class=\"c-chamada\">
    <div class=\"container c-chamada__content d-flex flex-column align-content-center justify-content-between\">
        <img src=\"/assets/img/logo-chamada.png\" class=\"c-chamada__logo wow zoomIn\"/>
        <span>
            <h2 class=\"c-chamada__title wow fadeInUp\">A FAM estará de portas abertas para te receber</h2>
            <p class=\"c-chamada__text wow fadeInUp\">Venha conhecer nossa estrutura e como funciona o nosso universo.</p>
        </span>
    </div>
</section>

<main class=\"container c-content pt-5 pb-5\">
    <p class=\"c-content__text mt-4 wow fadeInUp\">Favor, realize o cadastro</p>
    <!-- Form -->
    <form method=\"post\" action=\"/inscricao\" class=\"c-form js-form\">
        ";
        // line 108
        echo csrf_field();
        echo "
        <div class=\"row pb-5\">
            <div class=\"col-md-12\"><input required class=\"c-form__input wow fadeInUp\" type=\"text\" placeholder=\"Nome completo da escola\" name=\"nome_escola\" /></div>
            <div class=\"col-md-6\"><input required class=\"c-form__input wow fadeInUp\" type=\"text\" placeholder=\"Nome do coordenador(a) pedagógico\" name=\"nome_coordenador_pedagogico\" /></div>
            <div class=\"col-md-6\"><input required class=\"c-form__input wow fadeInUp\" type=\"text\" placeholder=\"Nome do responsável pelo cadastro\" name=\"nome_responsavel_cadastro\" /></div>

            <div class=\"col-md-4\"><input required class=\"c-form__input wow fadeInUp\" type=\"text\" placeholder=\"Endereço completo da escola\" name=\"endereco_escola\"/></div>
            <div class=\"col-md-4\">
                <select size required class=\"c-form__select wow fadeInUp\" name=\"estado_escola\">
                    <option selected disabled value=\"\">Selecione seu estado...</option>
                    <option value=\"AC\">Acre</option>
                    <option value=\"AL\">Alagoas</option>
                    <option value=\"AM\">Amazonas</option>
                    <option value=\"AP\">Amapá</option>
                    <option value=\"BA\">Bahia</option>
                    <option value=\"CE\">Ceará</option>
                    <option value=\"DF\">Distrito Federal</option>
                    <option value=\"ES\">Espírito Santo</option>
                    <option value=\"GO\">Goiás</option>
                    <option value=\"MA\">Maranhão</option>
                    <option value=\"MG\">Minas Gerais</option>
                    <option value=\"MS\">Mato Grosso do Sul</option>
                    <option value=\"MT\">Mato Grosso</option>
                    <option value=\"PA\">Pará</option>
                    <option value=\"PB\">Paraíba</option>
                    <option value=\"PE\">Pernambuco</option>
                    <option value=\"PI\">Piauí</option>
                    <option value=\"PR\">Paraná</option>
                    <option value=\"RJ\">Rio de Janeiro</option>
                    <option value=\"RN\">Rio Grande do Norte</option>
                    <option value=\"RO\">Rondônia</option>
                    <option value=\"RR\">Roraima</option>
                    <option value=\"RS\">Rio Grande do Sul</option>
                    <option value=\"SC\">Santa Catarina</option>
                    <option value=\"SE\">Sergipe</option>
                    <option value=\"SP\">São Paulo</option>
                    <option value=\"TO\">Tocantins</option>
                </select>
            </div>
            <div class=\"col-md-4\"><input required class=\"c-form__input wow fadeInUp\" type=\"text\" placeholder=\"Cidade\" name=\"cidade_escola\" /></div>

            <div class=\"col-md-6\"><input required class=\"c-form__input wow fadeInUp\" type=\"tel\" placeholder=\"Telefone do responsável\" name=\"telefone_responsavel\" /></div>
            <div class=\"col-md-6\"><input required class=\"c-form__input wow fadeInUp\" type=\"email\" placeholder=\"E-mail do responsável\" name=\"email_responsavel\" /></div>

            <div class=\"col-md-12\"><input required class=\"c-form__input wow fadeInUp js-qtd-alunos\" type=\"number\" placeholder=\"Quantidade de alunos que participarão\" name=\"nro_alunos\" /></div>
            
            <div class=\"col-md-12 js-data-horario d-none\">
                <select class=\"c-form__select animated fadeInUp js-opcao\" name=\"data_e_periodo\" required>
                    <option selected disabled value=\"\" class=\"js-data-default\">Escolha uma data e horário</option>
                    ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["opcoes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["opcao"]) {
            // line 158
            echo "                        ";
            if (($this->getAttribute($context["opcao"], "alunos", array()) < 550)) {
                // line 159
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["opcao"], "id", array()), "html", null, true);
                echo "\" class=\"d-none js-opcao-disponivel\" data-vagas=\"";
                echo twig_escape_filter($this->env, (550 - $this->getAttribute($context["opcao"], "alunos", array())), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["opcao"], "data", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["opcao"], "horario", array()), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, (550 - $this->getAttribute($context["opcao"], "alunos", array())), "html", null, true);
                echo " vagas)</option>
                        ";
            }
            // line 161
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opcao'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "                </select>
            </div>
            
        </div>
        <input class=\"c-form__submit wow fadeInUp\" type=\"submit\" value=\"Concluir Cadastro\" />
    </form>
    <div class=\"c-popup js-popup\">
        <div class=\"c-popup__inner\">
            <h2 class=\"c-popup__title\">Cadastro realizado com sucesso!</h2>
            <p class=\"c-popup__text\">Em caso de dúvidas, entre em contato pelo telefone <a href=\"tel:1934658100\" class=\"c-popup__link\">(19) 3465-8100</a>.</p>
            <button class=\"c-popup__close js-popup-close\">Ok</button>
        </div>
    </div>
</main>

<footer class=\"l-footer mt-0 mt-md-5\">
    <div class=\"container\">
        <p>Atendimento das 9 às 21 horas | <a class=\"l-footer__link\" target=\"_blank\" href=\"https://assets.fam.br/editais/Programa%20Desconto%20Especial%20pelo%20ENEM%20-%202019.2.pdf\">Edital</a> | <a class=\"l-footer__link\" target=\"_blank\" href=\"https://issuu.com/famamericana/docs/guia_de_cursos_2019_issu\">Guia de Cursos</a></p>
        <div class=\"social\">
            <a class=\"l-footer__link\" target=\"_blank\" href=\"http://instagram.com/famamericana\"><i class=\"l-footer__icon fa fa-instagram\"></i></a>
            <a class=\"l-footer__link\" target=\"_blank\" href=\"http://fb.com/famamericana\"><i class=\"l-footer__icon fa fa-facebook\"></i></a>
            <a class=\"l-footer__link\" target=\"_blank\" href=\"mailto:vestibular@fam.br\"><i class=\"l-footer__icon fa fa-envelope-o\"></i></a>
            <a class=\"has-text l-footer__link\" target=\"_blank\" href=\"tel:08007712449\">
                <i class=\"l-footer__icon fa fa-phone\"></i>
                0800 771 2449
            </a>
            <a class=\"has-text l-footer__link\" target=\"_blank\" href=\"https://api.whatsapp.com/send?phone=551994379555\">
                <i class=\"l-footer__icon fa fa-whatsapp\"></i>
                WhatsFAM (19) 99437-9555
            </a>
        </div>
    </div>
</footer>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js\" integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js\" integrity=\"sha256-z6FznuNG1jo9PP3/jBjL6P3tvLMtSwiVAowZPOgo56U=\" crossorigin=\"anonymous\"></script>
<script>
    \$( document ).ready(function() {
        // Iniciar Wow.js
        new WOW().init();

        // Ao selecionar uma opção, deixar em destaque
        \$(\".js-qtd-alunos\").on(\"input\", function() {
            let qtdAlunos = \$(this).val();

            // Para cada opção que o sistema liberar
            \$(\".js-opcao-disponivel\").each(function(i, e) {
                let opcoesLiberadas = 0;
                if (parseInt(\$(e).attr(\"data-vagas\")) >= parseInt(qtdAlunos)) {
                    opcoesLiberadas++;
                    \$(e).removeClass(\"d-none\");
                } else {
                    \$(e).addClass(\"d-none\");
                }

                if (opcoesLiberadas === 0) {
                    \$(\".js-data-default\").text(\"Não há horários disponíveis para esse número de alunos.\");
                } else {
                    \$(\".js-data-default\").text(\"Escolha uma data e horário\");
                }
            });
            
            // Resetar o horário sempre que mudar
            \$(\".js-opcao\").val(\"\");
            // Mostrar o campo de horários
            \$(\".js-data-horario\").removeClass(\"d-none\");
        });
        if (document.URL.match(/success=([0-9]+)/)[1]) {
            \$(\".js-popup\").fadeIn();
        }

        \$(\".js-popup-close\").on(\"click\", function() {
            \$(\".js-popup\").fadeOut();
        });
    });
</script>
<style>
    
</style>

";
    }

    public function getTemplateName()
    {
        return "/var/www/app/landing-pages/faculdadeaberta-dev/views//index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 162,  272 => 161,  258 => 159,  255 => 158,  251 => 157,  199 => 108,  174 => 85,  171 => 84,  167 => 1,  165 => 80,  164 => 79,  163 => 78,  162 => 77,  161 => 76,  160 => 75,  159 => 74,  158 => 73,  157 => 72,  156 => 71,  155 => 70,  154 => 69,  153 => 68,  152 => 67,  151 => 66,  150 => 65,  149 => 64,  148 => 63,  147 => 62,  146 => 61,  145 => 59,  136 => 53,  133 => 52,  130 => 51,  127 => 50,  124 => 49,  121 => 48,  118 => 47,  115 => 46,  112 => 45,  109 => 44,  106 => 43,  103 => 42,  100 => 41,  97 => 40,  94 => 39,  91 => 38,  88 => 37,  85 => 36,  82 => 35,  79 => 34,  77 => 33,  75 => 32,  71 => 30,  69 => 27,  67 => 26,  65 => 25,  63 => 24,  61 => 23,  59 => 22,  57 => 21,  55 => 20,  53 => 19,  51 => 18,  49 => 17,  47 => 16,  45 => 15,  43 => 14,  41 => 13,  39 => 12,  37 => 11,  35 => 10,  33 => 9,  31 => 8,  29 => 5,  27 => 4,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/landing-pages/faculdadeaberta-dev/views//index.twig", "");
    }
}

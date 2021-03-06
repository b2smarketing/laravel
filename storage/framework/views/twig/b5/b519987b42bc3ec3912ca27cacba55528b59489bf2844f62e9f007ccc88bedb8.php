<?php

/* /var/www/app/app/Modules/TOP2/views/index.twig */
class __TwigTemplate_7bc0fd25e04e43f5b391a2acf68baa80676ebe2eb34182ded8a9dbc1949c0027 extends TwigBridge\Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Teste de Orientação Profissional</title>

    <link rel=\"stylesheet\" href=\"assets/css/bootstrap.min.css\" />
    <link rel=\"stylesheet\" href=\"assets/css/main.css\" />

    <script>window.WEB_API_URL = '";
        // line 12
        echo twig_escape_filter($this->env, ($context["api_path"] ?? null), "html", null, true);
        echo "';</script>
</head>
<body>
";
        // line 164
        echo "
    <main id=\"app\">
        <!-- Header -->
        <transition name=\"slide\">
            <header class=\"pt-5\" v-if=\"screen && screen != 'loading'\">
                <div class=\"container\">
                    <img alt=\"FAM - Teste de Orientação Profissional\" src=\"assets/img/logo.png\" />
                </div>
            </header>
        </transition>

        <!-- Tela de carregamento -->
        <transition name=\"slide\">
            <section id=\"screen-loading\" v-if=\"!screen || screen == 'loading'\">
                <div class=\"container\">
                    <div class=\"row\">
                        <p>Carregando...</p>
                    </div>
                </div>
            </section>
        </transition>

        <!-- Tela inicial do teste -->
        <transition name=\"slide\">
            <section id=\"screen-home\" v-if=\"screen == 'home'\">
                <div class=\"container\">
                    <div class=\"row\">
                        <!-- Textos -->
                        <div class=\"col-md-6 main-text\">
                            <h2>Ainda não se decidiu?</h2>
                            <p>Calma, escolher seu curso é uma decisão crucial para começar a sua carreira.</p>
                            <p>Sabendo dessa dificuldade criamos um teste de análise do seu perfil, para saber com quais cursos você se identifica.</p>
                            <p class=\"destaque\">Vamos começar?</p>

                            <!-- Formulário -->
                            <form onsubmit=\"return \$app.startTest()\">
                                <input required class=\"form-control\" type=\"text\" placeholder=\"Seu nome\" v-model=\"user.nome\" />
                                <input required class=\"form-control\" type=\"email\" placeholder=\"Seu e-mail\" v-model=\"user.email\" />
                                <button type=\"submit\">Começar Teste</button>
                            </form>
                        </div>

                        <!-- Celular -->
                        <div class=\"col-md-4 offset-md-2 d-none d-md-block main-artwork\">
                            <img alt=\"\" src=\"assets/img/home-phone.png\" />
                        </div>
                    </div>
                </div>
            </section>
        </transition>

        <!-- Tela das perguntas -->
        <transition name=\"slide\">
            <section id=\"screen-test\" v-if=\"screen == 'test'\">
                <div class=\"container\">
                    <!-- Contador -->
                    <div class=\"row mt-5 mb-5\">
                        <div class=\"col-8 offset-2 text-center\">
                            <p>Questão {{ question_current_index + 1 }} de {{ questions.length }}</p>
                            <div class=\"progress\">
                                <div class=\"progress-bar\" role=\"progressbar\" aria-valuemin=\"0\" :aria-valuenow=\"question_current_index\" :aria-valuemax=\"questions.length\" :style=\"{ width: (100 * question_current_index / questions.length) + '%' }\"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Perguntas -->
                    <div class=\"row\">
                        <div class=\"col-12 main-text\">
                            <h3>{{ question_current.pergunta }}</h3>
                            <label v-for=\"(resposta_valor, resposta) in question_current.respostas\" :class=\"{ selected: resposta_valor == question_current.answer }\">
                                <input type=\"radio\" v-model=\"question_current.answer\" :value=\"resposta_valor\" @change=\"setTimeout(nextQuestion, 20)\" />
                                {{ resposta }}
                            </label>
                        </div>
                    </div>

                    <!-- Botão próximo -->
                    <!--<div class=\"row text-center\">
                        <div class=\"col-12\"><p class=\"error\" v-if=\"error_msg\">{{ error_msg }}</p></div>
                        <div class=\"col-12\">
                            <button @click=\"prevQuestion()\">Voltar</button>
                            <button @click=\"nextQuestion()\">Próxima</button>
                        </div>
                    </div>-->
                </div>
            </section>
        </transition>

        <!-- Tela de processando -->
        <transition name=\"slide\">
            <section id=\"screen-saving\" v-if=\"screen == 'saving'\">
                <div class=\"container\">
                    <div class=\"row\">
                        <p>Processando resultados...</p>
                    </div>
                </div>
            </section>
        </transition>

        <!-- Tela de resultados -->
        <transition name=\"slide\">
            <section id=\"screen-results\" v-if=\"screen == 'results'\">
                <div class=\"container\">
                    <!-- Título -->
                    <div class=\"row mt-5\">
                        <div class=\"col-12\">
                            <h2>Você nasceu para {{ results.winner.name }}!</h2>
                        </div>
                    </div>

                    <!-- Descritivo da Área -->
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <p v-for=\"paragrafo in results.winner.area.paragrafos\">{{ paragrafo }}</p>
                        </div>
                    </div>

                    <!-- Cursos da Área -->
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <h3>Veja alguns cursos que você pode seguir:</h3>
                            <ul class=\"cursos\">
                                <li v-for=\"curso in results.winner.area.cursos\">
                                    <a :href=\"curso.landing_page\" target=\"_blank\">{{ curso.nome }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Descritivo de Áreas -->
                    <!--<div class=\"row\">
                        <div class=\"col-12\">
                            <h3>Veja sua compatibilidade com todas as áreas:</h3>
                            <div class=\"progress areas\">
                                <div v-for=\"pair in results.ordered\" :class=\"{ selected: pair[1] == results.winner.id }\" class=\"progress-bar\" role=\"progressbar\" aria-valuemin=\"0\" :aria-valuenow=\"pair[0]\" :aria-valuemax=\"results.sum\" :style=\"{ width: (100 * pair[0] / results.sum) + '%' }\">{{ areas[pair[1]].nome }}</div>
                            </div>
                        </div>
                    </div>-->
                </div>
            </section>
        </transition>
    </main>
    
    <script src=\"assets/js/jquery.min.js\"></script>
    <script src=\"assets/js/bootstrap.bundle.min.js\"></script>
    <script src=\"assets/js/vue.min.js\"></script>
    <script src=\"assets/js/app.js\"></script>

    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,800,900,900i\" rel=\"stylesheet\">
";
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/app/app/Modules/TOP2/views/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 164,  32 => 12,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/app/Modules/TOP2/views/index.twig", "");
    }
}

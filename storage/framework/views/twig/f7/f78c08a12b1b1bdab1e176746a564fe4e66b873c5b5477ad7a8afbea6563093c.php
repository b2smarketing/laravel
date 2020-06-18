<?php

/* /var/www/app/ambiente_conversao/vestibularfam2020.1/views//bem-vindo.twig */
class __TwigTemplate_4543c2e3c188d5121c5cd01f6c44c06d03dc817c9a2b3fe0f90b5a7ae5b93fb9 extends TwigBridge\Twig\Template
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
        ob_start();
        // line 2
        echo "
";
        // line 3
        $context["utc"] = twig_date_format_filter($this->env, "", "U");
        // line 4
        echo "
<!DOCTYPE html
    PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">

<head>
    <meta charset=\"utf-8\"> <!-- utf-8 works for most cases -->
    <meta name=\"viewport\" content=\"width=device-width\"> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"> <!-- Use the latest (edge) version of IE rendering engine -->
    <title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->

    <!-- Web Font / @font-face : BEGIN -->
    <!-- NOTE: If web fonts are not required, lines 9 - 26 can be safely removed. -->

    <!-- Desktop Outlook chokes on web font references and defaults to Times New Roman, so we force a safe fallback font. -->
    <!--[if mso]>
\t\t<style>
\t\t\t* {
\t\t\t\tfont-family: sans-serif !important;
\t\t\t}
\t\t</style>
\t<![endif]-->

    <!-- All other clients get the webfont reference; some will render the font and others will silently fail to the fallbacks. More on that here: http://stylecampaign.com/blog/2015/02/webfont-support-in-email/ -->
    <!--[if !mso]><!-->
    <!-- insert web font reference, eg: <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'> -->
    <!--<![endif]-->

    <!-- Web Font / @font-face : END -->

    <!-- CSS Reset -->
    <style type=\"text/css\">
        /* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
        }

        /* What it does: Stops email clients resizing small text. */
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        /* What it does: Centers email on Android 4.4 */
        div[style*=\"margin: 16px 0\"] {
            margin: 0 !important;
        }

        /* What it does: Stops Outlook from adding extra spacing to tables. */
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }

        /* What it does: Fixes webkit padding issue. Fix for Yahoo mail table alignment bug. Applies table-layout to the first 2 tables then removes for anything nested deeper. */
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            Margin: 0 auto !important;
        }

        table table table {
            table-layout: auto;
        }

        /* What it does: Uses a better rendering method when resizing images in IE. */
        img {
            -ms-interpolation-mode: bicubic;
        }

        /* What it does: A work-around for iOS meddling in triggered links. */
        .mobile-link--footer a,
        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: underline !important;
        }
    </style>

    <!-- Progressive Enhancements -->
    <style>
        /* What it does: Hover styles for buttons */
        .button-td,
        .button-a {
            transition: all 100ms ease-in;
        }

        .button-td:hover,
        .button-a:hover {
            background: #0b2f7f !important;
            border-color: #0b2f7f !important;
        }

        u+#body a {
            color: inherit;
            text-decoration: none;
            font-size: inherit;
            font-family: inherit;
            font-weight: inherit;
            line-height: inherit;
        }

        /* Media Queries */
        @media screen and (max-width: 480px) {

            /* What it does: Forces elements to resize to the full width of their container. Useful for resizing images beyond their max-width. */
            .fluid,
            .fluid-centered {
                width: 100% !important;
                max-width: 100% !important;
                height: auto !important;
                Margin-left: auto !important;
                Margin-right: auto !important;
            }

            /* And center justify these ones. */
            .fluid-centered {
                Margin-left: auto !important;
                Margin-right: auto !important;
            }

            /* What it does: Forces table cells into full-width rows. */
            .stack-column,
            .stack-column-center {
                display: block !important;
                width: 100% !important;
                max-width: 100% !important;
                direction: ltr !important;
            }

            /* And center justify these ones. */
            .stack-column-center {
                text-align: center !important;
            }

            /* What it does: Generic utility class for centering. Useful for images, buttons, and nested tables. */
            .center-on-narrow {
                text-align: center !important;
                display: block !important;
                Margin-left: auto !important;
                Margin-right: auto !important;
                float: none !important;
            }

            table.center-on-narrow {
                display: inline-block !important;
            }

        }
    </style>

</head>

<body width=\"100%\" bgcolor=\"#0b2f7f\" style=\"Margin: 0;\">
    <center style=\"width: 100%; background: #092668;\">

        <!-- Visually Hidden Preheader Text : BEGIN -->
        <div
            style=\"display:none;font-size:1px;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;mso-hide:all;font-family: sans-serif;\">
            Seja bem-vind";
        // line 169
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "genero_letra", array()), "html", null, true);
        echo " à FAM! Confira os dados da sua inscrição!
        </div>
        <!-- Visually Hidden Preheader Text : END -->

        <!--    
            Set the email width. Defined in two places:
            1. max-width for all clients except Desktop Windows Outlook, allowing the email to squish on narrow but never go wider than 680px.
            2. MSO tags for Desktop Windows Outlook enforce a 680px width.
        -->
        <div style=\"max-width: 680px; margin: auto;\">
            <!--[if (gte mso 9)|(IE)]>
            <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"680\" align=\"center\">
            <tr>
            <td>
            <![endif]-->

            <!-- Email Header : BEGIN -->
            <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" width=\"100%\" style=\"max-width: 680px;\">
                <tr>
                    <td style=\"padding: 20px 0; text-align: center\">
                        <img src=\"https://assets.fam.br/img/logo-fam-light.png\" width=\"181\" height=\"72\"
                            alt=\"FAM - Faculdade de Americana\" border=\"0\">
                    </td>
                </tr>
            </table>
            <!-- Email Header : END -->

            <!-- Email Body : BEGIN -->
            <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" bgcolor=\"#ffffff\" width=\"100%\"
                style=\"max-width: 680px;\">

                <!-- Hero Image, Flush : BEGIN -->
                <!--<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<img src=\"https://vestibularfam.com.br/assets/imagens_email/cabecalho.jpg?utc=";
        // line 203
        echo twig_escape_filter($this->env, ($context["utc"] ?? null), "html", null, true);
        echo "\" width=\"680\" height=\"\" alt=\"Seja bem-vind";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "genero_letra", array()), "html", null, true);
        echo " à FAM!\" border=\"0\" align=\"center\" style=\"width: 100%; max-width: 680px;\">
\t\t\t\t\t</td>
                </tr>-->
                <!-- Hero Image, Flush : END -->

                <!-- 1 Column Text + Button : BEGIN -->
                <tr>
                    <td>
                        <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
                            <tr>
                                <td
                                    style=\"padding: 40px; text-align: center; font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555;\">
                                    <strong style=\"font-size: 1.4em; display:block; color: #111111;\">Seja
                                        bem-vind";
        // line 216
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "genero_letra", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "primeiro_nome", array()), "html", null, true);
        echo "!!</strong>
                                    Seu pedido de inscrição foi realizado com sucesso.<br />
                                    Esperamos por você no centro de uma poderosa estrutura de ensino.
                                    <br><br>
                                    ";
        // line 220
        if (($this->getAttribute(($context["aluno"] ?? null), "ingresso", array()) != "vestibular")) {
            // line 221
            echo "                                    <a href=\"https://vestibularfam.com.br/inscricao/adicionais?cpf=";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "cpf", array()), "html", null, true);
            echo "\" target=\"_blank\"><b>Clique aqui para realizar sua matrícula</b></a>
                                    ";
        }
        // line 223
        echo "                                    <!-- Button : Begin -->
                                    <!-- <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"Margin: auto\">
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td style=\"border-radius: 3px; background: #222222; text-align: center;\" class=\"button-td\">
\t                                            <a href=\"http://www.google.com\" style=\"background: #222222; border: 15px solid #222222; font-family: sans-serif; font-size: 13px; line-height: 1.1; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold;\" class=\"button-a\">
\t\t\t\t                                    &nbsp;&nbsp;&nbsp;&nbsp;<span style=\"color:#ffffff\">A Button</span>&nbsp;&nbsp;&nbsp;&nbsp;
\t\t\t\t                                </a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</table> -->
                                    <!-- Button : END -->
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <!-- 1 Column Text + Button : BEGIN -->

                <!-- Background Image with Text : BEGIN -->
                <tr>
                    <!-- Bulletproof Background Images c/o https://backgrounds.cm -->
                    <!-- <td background=\"http://placehold.it/680x230/0b2f7f/666666\" bgcolor=\"#0b2f7f\" valign=\"middle\" style=\"text-align: center; background-position: center center !important; background-size: cover !important;\"> -->
                    <td bgcolor=\"#0b2f7f\" valign=\"middle\"
                        style=\"text-align: center; background-position: center center !important; background-size: cover !important;\">
                        <!--[if gte mso 9]>
                        <v:rect xmlns:v=\"urn:schemas-microsoft-com:vml\" fill=\"true\" stroke=\"false\" style=\"width:680px;height:175px; background-position: center center !important;\">
                        <v:fill type=\"tile\" src=\"http://placehold.it/680x230/222222/666666\" color=\"#222222\" />
                        <v:textbox inset=\"0,0,0,0\">
                        <![endif]-->
                        <div>
                            <!--[if mso]>
                            <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\" width=\"500\">
                            <tr>
                            <td align=\"center\" valign=\"top\" width=\"500\">
                            <![endif]-->
                            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"100%\"
                                style=\"max-width:500px; Margin: auto;\">
                                <tr>
                                    <td valign=\"middle\"
                                        style=\"text-align: center; padding: 40px 20px; font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #ffffff;\">
                                        <strong style=\"font-size: 1.4em; display:block;\">Inscrição</strong>
                                        <p>
                                            <strong>Opções de Curso:</strong><br />
                                            Primeira opção: ";
        // line 266
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["opcoes_curso"] ?? null), 0, array(), "array"), "nome", array()), "html", null, true);
        echo "
                                            ";
        // line 267
        if ($this->getAttribute(($context["opcoes_curso"] ?? null), 1, array(), "array")) {
            // line 268
            echo "                                            <br />Segunda opção: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["opcoes_curso"] ?? null), 1, array(), "array"), "nome", array()), "html", null, true);
            echo "
                                            ";
            // line 269
            if ($this->getAttribute(($context["opcoes_curso"] ?? null), 2, array(), "array")) {
                // line 270
                echo "                                            <br />Terceira opção: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["opcoes_curso"] ?? null), 2, array(), "array"), "nome", array()), "html", null, true);
                echo "
                                            ";
            }
            // line 272
            echo "                                            ";
        }
        // line 273
        echo "                                        </p>

                                        <!-- ALTERÇÕES EVERTON 03-06-2020 

                                    ";
        // line 277
        if ((($context["usarenem"] ?? null) == "sim")) {
            // line 278
            echo "                                            <p style=\"text-align:justify;\">\t\t\t\t\t
                                            Durante a pandemia, a FAM - Faculdade de Americana está operacionalizando
                                            as provas do vestibular de forma online. Após a conclusão de sua inscrição
                                            você receberá em seu e-mail instruções adicionais sobre como proceder para
                                            a realização da mesma.\t\t\t\t\t
                                            </p>
                                        
                                        <p>
                                            <strong>Data entrega da documentação:</strong><br />
                                            ";
            // line 289
            echo "<br />
                                            <strong>Não se esqueça de trazer sua nota do ENEM válida!</strong>
                                        </p>                                       
                                    ";
        } else {
            // line 293
            echo "                                    -->
                                    <br>
                                    ";
            // line 295
            if (($this->getAttribute(($context["aluno"] ?? null), "ingresso", array()) == "vestibular")) {
                // line 296
                echo "                           \t\t\t\t\t<p style=\"text-align:justify;\">\t\t\t\t\t
                                            Durante a pandemia, a FAM - Faculdade de Americana está operacionalizando
                                             as provas do vestibular de forma online. Após a conclusão de sua inscrição 
                                             você receberá em seu e-mail instruções adicionais sobre como proceder para 
                                             a realização da mesma.\t\t\t\t\t
                                            </p>  
                                    ";
            }
            // line 302
            echo " 
                                             <!--                                     
                                        <p>
                                            <strong>Data da prova:</strong><br />
                                            ";
            // line 309
            echo "                                        </p>
                                        ";
        }
        // line 311
        echo "                                       <p>
                                            <strong>Local da prova:</strong><br />
                                            Av. Joaquim Bôer, 733 - Jardim Luciene - Americana/SP<br />
                                            Recepção Portaria 4
                                        </p>-->
                                    </td>
                                </tr>
                            </table>
                            <!--[if (gte mso 9)|(IE)]>
                            </td>
                            </tr>
                            </table>
                            <![endif]-->
                        </div>
                        <!--[if gte mso 9]>
                        </v:textbox>
                        </v:rect>
                        <![endif]-->
                    </td>
                </tr>
                <!-- Background Image with Text : END -->

                <!-- 1 Column Text + Button : BEGIN -->
                <tr>
                    <td>
                        <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
                            <tr>
                                <td
                                    style=\"background-color:#F5BF3E;padding: 40px; text-align: center; font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555;\">
                                    <strong style=\"font-size: 1.4em; display:block; color: #111111;\">Prezado
                                        candidato,</strong>
                                    <p style=\"color: #000;\"><b>
                                            Por medidas de segurança devido ao COVID-19, caso apresente algum dos
                                            sintomas abaixo, procure atendimento médico.
                                        </b></p>
                                    <ul style=\"color: #000;text-align: left;\">
                                        <li>Tosse;</li>
                                        <li>Coriza;</li>
                                        <li>Febre;</li>
                                        <li>Dor de garganta;</li>
                                        <li>Dificuldade para respirar</li>
                                    </ul>
                                </td>
                            </tr><!--
                            <tr>
                                <td
                                    style=\"padding: 40px; text-align: center; font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555;\">
                                    <strong style=\"font-size: 1.4em; display:block; color: #111111;\">Documentos
                                        Necessários</strong>
                                    <ul style=\"text-align: left;\">
                                        <li>Fotocópia certificado de conclusão do Ensino Médio ou equivalente;</li>
                                        <li>Fotocópia histórico Escolar do Ensino Médio (complementa o Certificado de
                                            Conclusão);</li>
                                        <li>Fotocópia certidão de Nascimento ou Casamento;</li>
                                        <li>Fotocópia cédula de Identidade;</li>
                                        <li>Fotocópia CPF;</li>
                                        <li>Fotocópia Título de Eleitor;</li>
                                        <li>Fotocópia certificado de Reservista (se maior de 18 anos)</li>
                                        <li>Fotocópia comprovante de Endereço.</li>
                                    </ul><br />
                                    <p>
                                        <strong>Obs: </strong>
                                        Para os candidatos menores de 18 anos é necessária a presença do responsável
                                        legal com fotocópias da Carteira de Identidade e do CPF, para a assinatura do
                                        Contrato de Prestação de Serviços Educacionais.
                                    </p><br />
                                    <p><b>
                                            Esperamos por você!
                                        </b></p>-->
                                    <strong>Veja como chegar:</strong>
                                    <a href=\"https://goo.gl/maps/tBKjGzKqmAA2\" target=\"_blank\">
                                        <img src=\"http://";
        // line 382
        echo twig_escape_filter($this->env, $this->getAttribute(($context["modulo"] ?? null), "url", array()), "html", null, true);
        echo "/assets/imagens_email/mapa-fam.png\"
                                            width=\"100%\" border=\"0\" />
                                    </a>
                                    <br><br>
                                    <!-- Button : Begin -->
                                    <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\"
                                        style=\"Margin: auto\">
                                        <tr>
                                            <td style=\"border-radius: 3px; background: #092668; text-align: center;\"
                                                class=\"button-td\">
                                                <a href=\"https://goo.gl/maps/tBKjGzKqmAA2\" target=\"_blank\"
                                                    style=\"background: #092668; border: 15px solid #092668; font-family: sans-serif; font-size: 13px; line-height: 1.1; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold;\"
                                                    class=\"button-a\">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;<span style=\"color:#ffffff\">Visualizar
                                                        Mapa</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- Button : END -->
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <!-- 1 Column Text + Button : BEGIN -->


                <!-- Hero Image, Flush : BEGIN -->
                <!--<tr>
                    <td>
                        <img src=\"http://";
        // line 413
        echo twig_escape_filter($this->env, $this->getAttribute(($context["modulo"] ?? null), "url", array()), "html", null, true);
        echo "/assets/imagens_email/rodape.png?utc=";
        echo twig_escape_filter($this->env, ($context["utc"] ?? null), "html", null, true);
        echo "\" width=\"680\" height=\"\" alt=\"\" border=\"0\" align=\"center\" style=\"width: 100%; max-width: 680px;\">
                    </td>
                </tr>-->
                <!-- Hero Image, Flush : END -->
            </table>
            <!-- Email Body : END -->

            <!-- Email Footer : BEGIN -->
            <!--             <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" width=\"100%\" style=\"max-width: 680px;\">
                <tr>
                    <td style=\"padding: 40px 10px;width: 100%;font-size: 12px; font-family: sans-serif; mso-height-rule: exactly; line-height:18px; text-align: center; color: #888888;\">
                        <webversion style=\"color:#cccccc; text-decoration:underline; font-weight: bold;\">View as a Web Page</webversion>
                        <br><br>
                        Company Name<br><span class=\"mobile-link--footer\">123 Fake Street, SpringField, OR, 97477 US</span><br><span class=\"mobile-link--footer\">(123) 456-7890</span>
                        <br><br>
                        <unsubscribe style=\"color:#888888; text-decoration:underline;\">unsubscribe</unsubscribe>
                    </td>
                </tr>
            </table> -->
            <!-- Email Footer : END -->

            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </div>
    </center>
</body>

</html>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "/var/www/app/ambiente_conversao/vestibularfam2020.1/views//bem-vindo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  489 => 413,  455 => 382,  382 => 311,  378 => 309,  372 => 302,  363 => 296,  361 => 295,  357 => 293,  351 => 289,  340 => 278,  338 => 277,  332 => 273,  329 => 272,  323 => 270,  321 => 269,  316 => 268,  314 => 267,  310 => 266,  265 => 223,  259 => 221,  257 => 220,  248 => 216,  230 => 203,  193 => 169,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/var/www/app/ambiente_conversao/vestibularfam2020.1/views//bem-vindo.twig", "");
    }
}

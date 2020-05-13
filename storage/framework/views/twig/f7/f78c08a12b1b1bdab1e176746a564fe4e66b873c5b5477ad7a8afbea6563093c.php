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
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
\t<meta charset=\"utf-8\"> <!-- utf-8 works for most cases -->
    <meta name=\"viewport\" content=\"width=device-width\"> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"> <!-- Use the latest (edge) version of IE rendering engine -->
\t<title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->

\t<!-- Web Font / @font-face : BEGIN -->
\t<!-- NOTE: If web fonts are not required, lines 9 - 26 can be safely removed. -->
\t
\t<!-- Desktop Outlook chokes on web font references and defaults to Times New Roman, so we force a safe fallback font. -->
\t<!--[if mso]>
\t\t<style>
\t\t\t* {
\t\t\t\tfont-family: sans-serif !important;
\t\t\t}
\t\t</style>
\t<![endif]-->
\t
\t<!-- All other clients get the webfont reference; some will render the font and others will silently fail to the fallbacks. More on that here: http://stylecampaign.com/blog/2015/02/webfont-support-in-email/ -->
\t<!--[if !mso]><!-->
\t\t<!-- insert web font reference, eg: <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'> -->
\t<!--<![endif]-->

\t<!-- Web Font / @font-face : END -->
\t
\t<!-- CSS Reset -->
    <style type=\"text/css\">

\t\t/* What it does: Remove spaces around the email design added by some email clients. */
\t\t/* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,
        body {
\t        margin: 0 auto !important;
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
            margin:0 !important;
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
            -ms-interpolation-mode:bicubic;
        }
        
        /* What it does: A work-around for iOS meddling in triggered links. */
        .mobile-link--footer a,
        a[x-apple-data-detectors] {
            color:inherit !important;
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

        u + #body a {
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
        <div style=\"display:none;font-size:1px;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;mso-hide:all;font-family: sans-serif;\">
            Seja bem-vind";
        // line 164
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
\t            <tr>
\t\t\t\t\t<td style=\"padding: 20px 0; text-align: center\">
\t\t\t\t\t\t<img src=\"https://assets.fam.br/img/logo-fam-light.png\" width=\"181\" height=\"72\" alt=\"FAM - Faculdade de Americana\" border=\"0\">
\t\t\t\t\t</td>
\t            </tr>
            </table>
            <!-- Email Header : END -->
            
            <!-- Email Body : BEGIN -->
            <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" bgcolor=\"#ffffff\" width=\"100%\" style=\"max-width: 680px;\">
                
                <!-- Hero Image, Flush : BEGIN -->
                <!--<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<img src=\"https://vestibularfam.com.br/assets/imagens_email/cabecalho.jpg?utc=";
        // line 196
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
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td style=\"padding: 40px; text-align: center; font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555;\">
                                    <strong style=\"font-size: 1.4em; display:block; color: #111111;\">Seja bem-vind";
        // line 207
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "genero_letra", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aluno"] ?? null), "primeiro_nome", array()), "html", null, true);
        echo "!!</strong>
\t\t\t\t\t\t\t\t\tSeu pedido de inscrição foi realizado com sucesso.<br />
                                    Esperamos por você no centro de uma poderosa estrutura de ensino.
\t\t\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\t\t\t<!-- Button : Begin -->
\t\t\t\t\t\t\t\t\t<!-- <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"Margin: auto\">
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td style=\"border-radius: 3px; background: #222222; text-align: center;\" class=\"button-td\">
\t                                            <a href=\"http://www.google.com\" style=\"background: #222222; border: 15px solid #222222; font-family: sans-serif; font-size: 13px; line-height: 1.1; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold;\" class=\"button-a\">
\t\t\t\t                                    &nbsp;&nbsp;&nbsp;&nbsp;<span style=\"color:#ffffff\">A Button</span>&nbsp;&nbsp;&nbsp;&nbsp;
\t\t\t\t                                </a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</table> -->
\t\t\t\t\t\t\t\t\t<!-- Button : END -->
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
                        </table>
                    </td>
                </tr>
                <!-- 1 Column Text + Button : BEGIN -->

                <!-- Background Image with Text : BEGIN -->
                <tr>
                    <!-- Bulletproof Background Images c/o https://backgrounds.cm -->
                    <!-- <td background=\"http://placehold.it/680x230/0b2f7f/666666\" bgcolor=\"#0b2f7f\" valign=\"middle\" style=\"text-align: center; background-position: center center !important; background-size: cover !important;\"> -->
                    <td bgcolor=\"#0b2f7f\" valign=\"middle\" style=\"text-align: center; background-position: center center !important; background-size: cover !important;\">
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
                            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"100%\" style=\"max-width:500px; Margin: auto;\">
                                <tr>
                                    <td valign=\"middle\" style=\"text-align: center; padding: 40px 20px; font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #ffffff;\">
                                        <strong style=\"font-size: 1.4em; display:block;\">Inscrição</strong>
                                        <p>
                                            <strong>Opções de Curso:</strong><br />
                                            Primeira opção: ";
        // line 251
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["opcoes_curso"] ?? null), 0, array(), "array"), "nome", array()), "html", null, true);
        echo "
                                            ";
        // line 252
        if ($this->getAttribute(($context["opcoes_curso"] ?? null), 1, array(), "array")) {
            // line 253
            echo "                                                <br />Segunda opção: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["opcoes_curso"] ?? null), 1, array(), "array"), "nome", array()), "html", null, true);
            echo "
                                                ";
            // line 254
            if ($this->getAttribute(($context["opcoes_curso"] ?? null), 2, array(), "array")) {
                // line 255
                echo "                                                    <br />Terceira opção: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["opcoes_curso"] ?? null), 2, array(), "array"), "nome", array()), "html", null, true);
                echo "
                                                ";
            }
            // line 257
            echo "                                            ";
        }
        // line 258
        echo "                                        </p>
                                    ";
        // line 259
        if ((($context["usarenem"] ?? null) == "sim")) {
            // line 260
            echo "                                        <p>
                                            <strong>Data entrega da documentação:</strong><br />
                                            ";
            // line 262
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["prova"] ?? null), "data", array()), "hora", array(), "method"), "d/m/Y"), "html", null, true);
            echo "<br />
                                            <strong>Horário</strong><br />
                                            ";
            // line 264
            if (($context["periodo_manha"] ?? null)) {
                echo "das 08:30 às 11:30";
            } else {
                echo "das 9:00 às 21:00";
            }
            echo "<br />
                                            <strong>Não se esqueça de trazer sua nota do ENEM válida!</strong>
                                        </p>
                                    ";
        } else {
            // line 268
            echo "                                        <p>
                                            <strong>Data da prova:</strong><br />
                                            ";
            // line 270
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["prova"] ?? null), "data", array()), "hora", array(), "method"), "d/m/Y"), "html", null, true);
            echo "<br />
                                            <strong>Hora da prova:</strong><br />
                                            ";
            // line 272
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["prova"] ?? null), "data", array()), "hora", array(), "method"), "H:i"), "html", null, true);
            if ($this->getAttribute($this->getAttribute(($context["prova"] ?? null), "data", array()), "hora_final", array(), "method")) {
                echo " às ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["prova"] ?? null), "data", array()), "hora_final", array(), "method"), "H:i"), "html", null, true);
            }
            // line 273
            echo "                                        </p>
                                    ";
        }
        // line 275
        echo "                                        <p>
                                            <strong>Local da prova:</strong><br />
                                            Av. Joaquim Bôer, 733 - Jardim Luciene - Americana/SP<br />
                                            Recepção Portaria 4
                                        </p>
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
                                <td style=\"padding: 40px; text-align: center; font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555;\">
                                    <strong style=\"font-size: 1.4em; display:block; color: #111111;\">Documentos Necessários</strong>
                                    <ul style=\"text-align: left;\">
                                        <li>Fotocópia certificado de conclusão do Ensino Médio ou equivalente;</li>
                                        <li>Fotocópia histórico Escolar do Ensino Médio (complementa o Certificado de Conclusão);</li>
                                        <li>Fotocópia certidão de Nascimento ou Casamento;</li>
                                        <li>Fotocópia cédula de Identidade;</li>
                                        <li>Fotocópia CPF;</li>
                                        <li>Fotocópia Título de Eleitor;</li>
                                        <li>Fotocópia certificado de Reservista (se maior de 18 anos)</li>
                                        <li>Fotocópia comprovante de Endereço.</li>
                                    </ul><br />
                                    <p>
                                        <strong>Obs: </strong>
                                        Para os candidatos menores de 18 anos é necessária a presença do responsável legal com fotocópias da Carteira de Identidade e do CPF, para a assinatura do Contrato de Prestação de Serviços Educacionais.
                                    </p><br />
                                    <p>
                                        Os cursos de Letras, Tecnologia em Logística, Tecnologia em Redes de Computadores, Tecnologia em Marketing, Tecnologia em Recursos Humanos, Tecnologia em Design Gráfico possuem 50% de desconto nas mensalidades durante todo o curso mediante o preenchimento do PSE (Perfil Sócio Econômico) e entrega dos documentos requeridos no Depto. Social.
                                    </p><br />
                                    <p>
                                        Esperamos por você!
                                    </p>
                                    <strong>Veja como chegar:</strong>
                                    <a href=\"https://goo.gl/maps/tBKjGzKqmAA2\" target=\"_blank\">
                                        <img src=\"http://";
        // line 326
        echo twig_escape_filter($this->env, $this->getAttribute(($context["modulo"] ?? null), "url", array()), "html", null, true);
        echo "/assets/imagens_email/mapa-fam.png\" width=\"100%\" border=\"0\" />
                                    </a>
                                    <br><br>
                                    <!-- Button : Begin -->
                                    <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"Margin: auto\">
                                        <tr>
                                            <td style=\"border-radius: 3px; background: #092668; text-align: center;\" class=\"button-td\">
                                                <a href=\"https://goo.gl/maps/tBKjGzKqmAA2\" target=\"_blank\" style=\"background: #092668; border: 15px solid #092668; font-family: sans-serif; font-size: 13px; line-height: 1.1; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold;\" class=\"button-a\">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;<span style=\"color:#ffffff\">Visualizar Mapa</span>&nbsp;&nbsp;&nbsp;&nbsp;
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
        // line 351
        echo twig_escape_filter($this->env, $this->getAttribute(($context["modulo"] ?? null), "url", array()), "html", null, true);
        echo "/assets/imagens_email/rodape.png?utc=";
        echo twig_escape_filter($this->env, ($context["utc"] ?? null), "html", null, true);
        echo "\" width=\"680\" height=\"\" alt=\"\" border=\"0\" align=\"center\" style=\"width: 100%; max-width: 680px;\">
                    </td>
                </tr>-->
                <!-- Hero Image, Flush : END -->
\t\t\t</table>
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
        return array (  435 => 351,  407 => 326,  354 => 275,  350 => 273,  344 => 272,  339 => 270,  335 => 268,  324 => 264,  319 => 262,  315 => 260,  313 => 259,  310 => 258,  307 => 257,  301 => 255,  299 => 254,  294 => 253,  292 => 252,  288 => 251,  239 => 207,  223 => 196,  188 => 164,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
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

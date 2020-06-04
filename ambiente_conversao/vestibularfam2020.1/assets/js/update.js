/* ALTERÇÕES EVERTON 03-06-2020 */

function validar() {
    var f = $(".js-form")[0];
    if (!f.checkValidity()) {
        alert("Erro, Preencha TODOS os campos antes de enviar !!!");
    } else if ($(".email1").val() != $(".email2").val()) {
        alert("Erro, E-Mail não confere !!!");
    } else {
        f.submit();
    }
}

function tipoprova() {
    var prova = $("#prova").val();
    if (prova == "nao") {
        $(".enem").css({ "display": "none" })
        $(".formado").css({ "display": "none" })
        $(".vestibular").slideDown(500);
        $(".confirmaemail").slideDown(500);
    }
    else if (prova == "sim") {
        $(".formado").css({ "display": "none" })
        $(".vestibular").css({ "display": "none" })
        $(".enem").slideDown(500);
        $(".confirmaemail").slideDown(500);
    }
    else if (prova == "segunda_graduacao") {
        $(".vestibular").css({ "display": "none" })
        $(".enem").css({ "display": "none" })
        $(".formado").slideDown(500);
        $(".confirmaemail").slideDown(500);
    }

}

function tipodeficiencia() {
    var deficiencia = $("#deficiencia").val();
    if (deficiencia == "sim") {
        $(".deficiencia").slideDown(500);
    }
    else if (deficiencia == "nao") {
        $(".deficiencia").css({ "display": "none" })
    }
}
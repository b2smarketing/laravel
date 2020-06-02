/* ALTERÇÕES EVERTON 02-06-2020 */


function tipoprova() {
    var prova = $("#prova").val();
    if (prova == "nao") {
        $(".enem").css({"display":"none"})
        $(".formado").css({"display":"none"})
        $(".vestibular").slideDown(500);
    }
    else if (prova == "sim") {
        $(".formado").css({"display":"none"})
        $(".vestibular").css({"display":"none"})
        $(".enem").slideDown(500);
    }
    else if (prova == "segunda_graduacao") {
        $(".vestibular").css({"display":"none"})
        $(".enem").css({"display":"none"})
        $(".formado").slideDown(500);
    }
    
}
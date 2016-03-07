function buscarBD(opcaoEscolhida) {
    valorAEnviar = "opcao: " + opcaoEscolhida.value;
    $.ajax({
        type: "POST",
        url: '../configs/iniciaPastas.php',
        data: valorAEnviar,
        success: function obtemPastas() { //a variavel retorno deve conter uma lista ou similar
            $("#camposDaResposta").children("option").each(function () { //para cada filho do select que deve ser marcado eu comparo com a resposta e marco ele se for vdd
                if ($(this).attr("value") == retorno) {
                    $(this).attr('selected', 'selected');
                }
            }
            )
        }
    });
}
function teste() {
    retorno = "teste2";
    $("#pastas").children("option").each(function () {
        if ($(this).attr("value") == retorno) {
            $(this).attr('selected', 'selected');
        }
    }
    )
}

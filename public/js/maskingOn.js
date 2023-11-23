function maskingOnClient(){
      
    $("#phone").mask("(00)0000-0000")
    $("#phone2").mask("(00)00000-0000")
    $("#cpf").mask("000.000.000-00")
    $("#cep").mask("00000-000", {reverse: true})
    $("#date").mask("00/00/0000")


    $(".phone").mask("(00) 0000-0000")
    $(".cpf").mask("000.000.000-00")
    $(".cep").mask("00000-000", {reverse: true})
}


function maskingOnProduct(){
      
    $("#value").mask("000.000.000,00", {reverse: true})

    $(".value").mask("000.000.000,00")
}

function maskingOnSupplier()
{
    $("#cnpj").mask("99.999.999/9999-99")
}

function maskingOnTransaction()
{
    $("#total").mask("000.000.000,00", {reverse: true})
}
$(document).ready(function () {
    $(".preCadastro-cadastro-pessoa").click(function () {

        $('.preCadastro-cadastro-pessoa A').addClass('btn-lilas');
        $('.cadastro-cadastro-pessoa A').removeClass('btn-lilas');
        $('.buscar-cadastro-pessoa A').removeClass('btn-lilas');


    });

    $(".cadastro-cadastro-pessoa").click(function () {

        $('.cadastro-cadastro-pessoa A').addClass('btn-lilas');
        $('.preCadastro-cadastro-pessoa A').removeClass('btn-lilas');
        $('.buscar-cadastro-pessoa A').removeClass('btn-lilas');


    });

    $(".buscar-cadastro-pessoa").click(function () {

        $('.buscar-cadastro-pessoa A').addClass('btn-lilas');
        $('.preCadastro-cadastro-pessoa A').removeClass('btn-lilas');
        $('.cadastro-cadastro-pessoa A').removeClass('btn-lilas');


    });
});

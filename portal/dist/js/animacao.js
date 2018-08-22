/*animacao - botao que leva ao topo*/
$(document).ready(function () {

    var _containerBtn = $(".jbtnVontar");
    var _btnLink = $(".jbtnVoltarLink");

    $(window).scroll(function () {
        if ($(this).scrollTop() > 70) {
            _containerBtn.fadeIn(0);
        } else {
            _containerBtn.fadeOut(0);
        }

    });

    _btnLink.click(function () {
        $("html,body").animate({
            scrollTop: 0
        }, 1000);

        return false;

    });

});

/*animacao - aparecer a esquerda*/
var $target = $('.anime-1'),
    animationClass = 'anime-start-1',
    offset = $(window).height() * 2 / 4;


function animeScrollDiv1() {

    var documentTop = $(document).scrollTop();

    $target.each(function () {
        console.log("ativa");
        var itemTop = $(this).offset().top;

        if (documentTop > itemTop - offset) {
            $(this).addClass(animationClass);

        }
    })
}

animeScrollDiv1();

$(document).scroll(function () {
    animeScrollDiv1();
});








/*animacao - aparecer a direita*/


var $target2 = $('.anime-2'),
    animationClass2 = 'anime-start-2',
    offset2 = $(window).height() * 2 / 4;


function animeScrollDiv2() {

    var documentTop2 = $(document).scrollTop();

    $target2.each(function () {
        console.log("ativa");
        var itemTop2 = $(this).offset().top;

        if (documentTop2 > itemTop2 - offset2) {
            $(this).addClass(animationClass2);

        }


    })
}

animeScrollDiv2();

$(document).scroll(function () {
    animeScrollDiv2();
});

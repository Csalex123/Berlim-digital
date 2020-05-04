$(document).ready(() => {

    $('.bt-menu').on('click', function () {
        $('#topo nav').slideToggle('slow')
    });

    $('#topo li span').on('click', function () {
        $('#topo nav').slFideUp('slow')
    });

    $(window).resize(function () {
        var larguraWindow = $(window).width();
        if (larguraWindow >= 1280) {
            $('#topo nav').css({
                'display': 'initial'
            });
        } else {
            $('#topo nav').css({
                'display': 'none'
            })
        }
    });

    $('#topo li').on('click', function () {
        $('#topo li').removeClass('ativo');
        $(this).addClass('ativo')
    });

});

$(document).ready(() => {

    var el = document.getElementById("topo"); // elemento alvo
    var numPx = "50"; 
    var menu = document.getElementById("topo");

    window.addEventListener("scroll", function () {
        if (window.scrollY > numPx) {
            $("#topo").css({'height': '70px'});
            $("#topo > .logo").css({'height': '45px'});
        } else {
            $("#topo").css({'height': '90px'});
            $("#topo > .logo").css({'height': '60px'});
        }
    });

});
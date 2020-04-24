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
            })
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
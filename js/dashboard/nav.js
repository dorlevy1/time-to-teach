$('.hamm').on('click', () => {
    $('.otef').toggleClass('otef-492');
    $('.board').toggleClass('minimize');
    $('.top-nav').toggleClass('tactive');
    setTimeout(() => {

        $('.left-nav').toggleClass('lactive');
        $('.left-nav>p').toggleClass('lpsiactive');
        $('.left-nav>p').css('opacity', '0');
        if ($('.board').hasClass('minimize')) {
            setTimeout(() => {
                $('li>.link>a').addClass('llaactive');
            }, 1);
        } else {
            setTimeout(() => {
                $('li>.link>a').removeClass('llaactive');
            }, 600);
        }

    }, 65);

    $('.menu').toggleClass('mactive');
    setTimeout(() => {
        $('.teacher-pic').toggleClass('tpactive');

    }, 700);
    setTimeout(() => {
        $('.my_pic').toggleClass('mpactive');
        $('.left-nav>p').toggleClass('displayblock');

        if ($('.left-nav>p').css('opacity', '0')) {
            $('.left-nav>p').addClass('displaynone');
            $('.left-nav>p').removeClass('displayblock');
        }
        if ($('.left-nav>p').css('opacity', '1')) {
            $('.left-nav>p').removeClass('displaynone');
        }
    }, 500);


    $('.board').toggleClass('bactive');
})
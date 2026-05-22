
$(document).ready(function() {

    // Fix Position After Scroll
    $(window).scroll(function(){
        const scrollLimit = isHome ? 550 : 70;
        const topPx = isCategory ? '75px' : '55px';
        if ($(this).scrollTop() > scrollLimit) {
            $('.fixed-left-banner').css({'position': 'fixed', 'top': '80px'});
            $('.fixed-right-banner').css({'position': 'fixed', 'top': '80px'});
            if (isMobile) {
                $('#back-to-top').css('display', 'grid');
            }
        } else {
            $('.fixed-left-banner').css({'position': 'absolute', 'top': topPx});
            $('.fixed-right-banner').css({'position': 'absolute', 'top': topPx});
            $('#back-to-top').hide();
        }
    
    });
    // END Fix Position After Scroll 

    $('#back-to-top').on('click', function() {
        $('html, body').animate({scrollTop: '0px'}, 300);
    });


    // Search Button
    $('.menu-search').on('click',function() {
        $('.full-search').show();
        $('body').addClass('no-scroll');
    });
    $('.close-search').on('click',function() {
        $('.full-search').hide();
        $('body').removeClass('no-scroll');
    });
    // END Search Button

    // Me Shume Hover Menu
    var timeoutId;
    $('.me-shume').hover( function() {
        if (!timeoutId) {
            timeoutId = window.setTimeout(function() {
                timeoutId = null;
                $('.hovermenu').addClass('show');
            }, 500);
        }
        
    }, function () {
        if (timeoutId) {
            window.clearTimeout(timeoutId);
            timeoutId = null;
        }
    });
    $("body").on('mouseleave', function () {
        $(".hovermenu").removeClass('show');
    });
    $(".hovermenu").on('mouseleave', function () {
        $(".hovermenu").removeClass('show');
    });
    // END Me Shume Hover Menu

    // Mobile Menu
    $('#open-mobile-menu').on('click', function() {
        $('#open-mobile-menu').hide();
        $('#close-mobile-menu').show();
        $('.mobile-menu').show();
        $('body').addClass('no-scroll');
    });
    $('#close-mobile-menu').on('click', function() {
        $('#open-mobile-menu').show();
        $('#close-mobile-menu').hide();
        $('.mobile-menu').hide();
        $('body').removeClass('no-scroll');
    });
    // End Mobile Menu


});

























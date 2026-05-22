/************* JOQ.al APP Banner  *************/

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function getMobileOperatingSystem() {
    var userAgent = navigator.userAgent || navigator.vendor || window.opera;

    // Windows Phone must come first because its UA also contains "Android"
    if (/windows phone/i.test(userAgent)) {
        return "Windows Phone";
    }

    if (/android/i.test(userAgent)) {
        return "Android";
    }

    // iOS detection from: http://stackoverflow.com/a/9039885/177710
    if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
        return "iOS";
    }

    return "unknown";
}

var isSafari = !!navigator.userAgent.match(/Version\/[\d\.]+.*Safari/);
var is_uiwebview = /(iPhone|iPod|iPad).*AppleWebKit(?!.*Safari)/i.test(navigator.userAgent);

$('.remove-app-banner').on('click', function() {
    $('.app-banner-wrapper').fadeOut(500);
    if ($("#joqapp-checkbox").is(':checked')) {
        setCookie('joqapp', 'Joq App', 30);
    }
});

$('.install-joq-app').on('click', function() {
    $('.app-banner-wrapper').fadeOut(500);
    if ($("#joqapp-checkbox").is(':checked')) {
        setCookie('joqapp', 'Joq App', 30);
    }
});

$('#copyrights_year').html((new Date()).getFullYear());

if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {

    if (!window.location.hash) {
        if (getMobileOperatingSystem() == 'iOS') {

            //if (!isSafari) {
            if (getCookie('joqapp') == null || getCookie('joqapp') == '') {
                if (!is_uiwebview) {
                    $('.install-joq-app').html('<a style="color: #fff; display: block" href="itmss://itunes.apple.com/al/app/joq-al/id1224913299?mt=8" target="_blank">Instalo</a>');
                    $('.app-banner-wrapper').fadeIn(700);
                }

            }
            //}

        } else if (getMobileOperatingSystem() == 'Android') {

            if (getCookie('joqapp') == null || getCookie('joqapp') == '') { 
                $('.install-joq-app').html('<a style="color: #fff; display: block" href="https://play.google.com/store/apps/details?id=com.jetaoshqef.al" target="_blank">Instalo</a>');
                $('.app-banner-wrapper').fadeIn(700);
            }

        }
    }

}

/************* END JOQ.al APP Banner  *************/




/******************* JOQ REDIRECT ************************/
/*
var full_url = window.location.href;
if (full_url.toLowerCase().indexOf("qypandej") >= 0) {
    full_url = full_url.replace("qypandej", "joqalbania");
    $(location).attr("href", full_url);
}
if (full_url.toLowerCase().indexOf("pesmaliboro") >= 0) {
    full_url = full_url.replace("pesmaliboro", "joqalbania");
    $(location).attr("href", full_url);
}
*/










// Main Image resizer
$(document).ready(function() {

    var width = $(window).width();
    var height = $('a.nspImageWrapper.tleft.fleft.mainImg').height(0.2725 * width);

    $(window).resize(function () {
        width = $(window).width();
        height = $('a.nspImageWrapper.tleft.fleft.mainImg').height(0.2725 * width);
    });
});
// End main image resizer


//Fix Position After Scroll
$(window).scroll(function(){
    if ($(this).scrollTop() > 570) {
        $('.fixed_left_banner.homeFixBanner').addClass('fixed_left_staticBanner');
        $('.fixed_right_banner.homeFixBanner').addClass('fixed_right_staticBanner');
        $('#back-to-top').show();
    } else {
        $('.fixed_left_banner.homeFixBanner').removeClass('fixed_left_staticBanner');
        $('.fixed_right_banner.homeFixBanner').removeClass('fixed_right_staticBanner');
        $('#back-to-top').hide();
    }
});


//Search Button
$('.menu-search').on('click',function() {
    $('.full-search').css('display', 'block');
});
$('.close-search').on('click',function() {
    $('.full-search').css('display', 'none');
});
//End Search Button



//Load Sub Menu
var loadContent = function ( lc_url, lc_append )
{
    xhr = $.ajax({
        url: lc_url,
        beforeSend: function( xhr ) {
            //create loading icon
            $("."+lc_append).html('<div class="myLoading"><img src="https://joq.al//assets/images/icons/ring.svg"></div>');
        },
        success: function( data )
        {
            var dothat = function()
            {
                $("."+lc_append).html( data );
            };
            //setTimeout(function(){ dothat(); }, 500000);
            dothat();
        }
    });

};
var timeoutId;
var categoryID;
var categoryAjax;
$(".category_li").hover(function () {

        categoryID = this.id;
        categoryAjax = '/myAjax/menu_sub_'+categoryID+'.html';

        if (!timeoutId) {
            timeoutId = window.setTimeout(function() {

                timeoutId = null;
                $(".hovermenu").addClass('display_hm');
                loadContent( categoryAjax,'hovermenu');
            }, 300);
        }
    },
    function () {
        if (timeoutId) {
            window.clearTimeout(timeoutId);
            timeoutId = null;
        }
    });

$(".static_subMenu").hover(function () {

        categoryID = this.id;
        categoryAjax = '/menu_sub_'+categoryID+'.html';

        if (!timeoutId) {
            timeoutId = window.setTimeout(function() {

                timeoutId = null;
                $(".hovermenu").addClass('display_hm');
                loadContent( categoryAjax,'hovermenu');
            }, 300);
        }
    },
    function () {
        if (timeoutId) {
            window.clearTimeout(timeoutId);
            timeoutId = null;
        }
    });

$(".static_subMenu").hover(function () {

        categoryID = this.id;
        categoryAjax = '/faqe/menu_sub_'+categoryID+'.html';

        if (!timeoutId) {
            timeoutId = window.setTimeout(function() {

                timeoutId = null;
                $(".hovermenu").addClass('display_hm');
                loadContent( categoryAjax,'hovermenu');
            }, 300);
        }
    },
    function () {
        if (timeoutId) {
            window.clearTimeout(timeoutId);
            timeoutId = null;
        }
    });
$("body").on('mouseleave', function () {
    $(".hovermenu").removeClass('display_hm');
});
$(".hovermenu").on('mouseleave', function () {
    $(".hovermenu").removeClass('display_hm');
});
$(".category_li1").on('mouseenter', function () {
    $(".hovermenu").removeClass('display_hm');
});
// End Load Sub Menu




//Load footer + last + top


loadContent('/myAjax/top-news-post.html','ajxLastNews');
loadContent('/myAjax/top-news.html','loadTopNews');
loadContent('/myAjax/last-four-news.html','loadLastFour');
//End Load footer + last + top

//Mobile Device Viewport
if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
    var msViewportStyle = document.createElement("style");
    msViewportStyle.appendChild(
        document.createTextNode("@-ms-viewport{width:auto!important}")
    );
    document.getElementsByTagName("head")[0].appendChild(msViewportStyle);
}
//End Mobile Device Viewport




//Back To Top Button
(function($) {
    // Back to top
    $('#back-to-top').on('click', function(){
        $("html, body").animate({scrollTop: 0}, 500);
        return false;
    });
})(jQuery);
//End Back To Top Button



//Social Shares
jQuery(document).ready(function ($) {

    $('.rrssb-buttons').rrssb({
        // required:
        title: document.title,
        url: window.location.href,


        // optional:
        description: '',
        emailBody: window.location.href
    });
});
//End Social Shares


//Mobile Toggle + Tabs
$('.toggle_menu').on('click', function(){
    $('.toggle_menu i').toggleClass('fa-bars');
    $('.toggle_menu i').toggleClass('fa-close');
    $('ul.mobile-toggle-menu').toggle( 'slide');
    $('.mobile_slideMenu').fadeToggle();
});

$('.mobile_slideMenu').on('click', function(){
    $('.toggle_menu i').toggleClass('fa-bars'); 
    $('.toggle_menu i').toggleClass('fa-close');
    $('ul.mobile-toggle-menu').toggle( 'slide');
    $('.mobile_slideMenu').fadeToggle();
});

$('.mobile-tab').on('click', function() {
    $('.mobile-tab').removeClass('tb_active');
    $(this).addClass('tb_active');
});

$('#best-tab').on('click', function() {
    $('.col-lg-3.col-md-3.col-sm-12.col-xs-12.first-column-home').addClass('tb_activated');
    $('.col-lg-6.col-md-6.col-sm-12.col-xs-12.middle-column-home').removeClass('tb_activated');
    $('.col-lg-3.col-md-3.col-sm-12.col-xs-12.third-column-home').removeClass('tb_activated');
});

$('#virals-tab').on('click', function() {
    $('.col-lg-3.col-md-3.col-sm-12.col-xs-12.first-column-home').removeClass('tb_activated');
    $('.col-lg-6.col-md-6.col-sm-12.col-xs-12.middle-column-home').addClass('tb_activated');
    $('.col-lg-3.col-md-3.col-sm-12.col-xs-12.third-column-home').removeClass('tb_activated');
});

$('#last-tab').on('click', function() {
    $('.col-lg-3.col-md-3.col-sm-12.col-xs-12.first-column-home').removeClass('tb_activated');
    $('.col-lg-6.col-md-6.col-sm-12.col-xs-12.middle-column-home').removeClass('tb_activated');
    $('.col-lg-3.col-md-3.col-sm-12.col-xs-12.third-column-home').addClass('tb_activated');
});


//Adult Content
if(typeof adultNews != 'undefined')
{
    if(adultNews == true)
    {
        var pageUrl = document.location.href;
        if(pageUrl.indexOf('fotogaleriStart') <= 0)
        {
          $('.adult_content').html('<div class="adultNews_wrapper">'+
                '<div class="adult_textWrapper">'+
                    '<div class="adultNews_title">'+
                        '<span>A je mbi 18 vjeç?<span>'+
                    '</div>'+
                    '<div class="adultNews_text">'+
                        '<div class="adult_content">Materiali që ju po përpiqeni të shikoni, konsiderohet i pisët nga ne, nga ligji dhe me shumë mundësi edhe nga mamaja jote, ndaj ne duhet të sigurohemi që ju jeni në moshën e duhur për ta parë.</div>'+
                        '<div class="adultNews_prev"><span class="goBack"><a href="http://jetaoshqef.co">JO</a></span></div>'+
                        '<div class="adultNews_next"><span class="goForwoard">PO</span></div>'+
                    '</div>'+
                '</div>'+
            '</div>');

            $('.goBack').on('mouseover', function() {
                $('.goBack').css({'background-color': '#000'});
                $('.goBack a').css({'color': '#fff'});
                $('.goForwoard').css({'background-color': '#fff', 'color': '#000'});
            });

            $('.goForwoard').on('mouseover', function() {
                $('.goForwoard').css({'background-color': '#000', 'color': '#fff'});
                $('.goBack').css({'background-color': '#fff'});
                $('.goBack a').css({'color': '#000'});
            });

            $('.goForwoard').on('click', function() {
                $('.adultNews_wrapper').fadeOut();
            });
        }
    }
}

//Disable Right Click + Copy
$(document).ready(function() {
    var ctrlDown = false,
        ctrlKey = 17,
        cmdKey = 91,
        vKey = 86,
        cKey = 67;

    $(document).keydown(function(e) {
        if (e.keyCode == ctrlKey || e.keyCode == cmdKey) ctrlDown = true;
    }).keyup(function(e) {
        if (e.keyCode == ctrlKey || e.keyCode == cmdKey) ctrlDown = false;
    });

    $("body").keydown(function(e) {
        if (ctrlDown && (e.keyCode == vKey || e.keyCode == cKey)) return false;
    });

    document.oncontextmenu = document.body.oncontextmenu = function() {return false;}

}); 


$(document).ready(function() {
    setTimeout(function(){
        if($('#fixed_728_banner').height() > 20) {
            $('#remove_728_banner').show();
        }
    }, 3000);
});

$('#remove_728_banner').on('click', function() {
    $('#fixed_728_banner').remove();
});























































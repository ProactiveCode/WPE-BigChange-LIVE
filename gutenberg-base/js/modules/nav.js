//// SETTINGS
let s;
function settings(){
    s = {
        navTrigger: $('.site-header__menu-toggle'),
        navBurger: $('.hamburger'),
        nav: $('.site-header__nav')
    }
};
//// EXPORT FUNCTION
export function init(){
    settings();
    bindUIActions();
}
//// ACTIONS
function bindUIActions(){

    $(window).on('scroll', function() {
        var top = $(window).scrollTop();

        if(top > 0) {
            $('.site-header').addClass('sticky');
            $('.is-ajax-search-result').addClass('header-sticky');
        }

        if(top == 0) {
            $('.site-header').removeClass('sticky');
            $('.is-ajax-search-result').removeClass('header-sticky');
        }
    });

    if($(window).width() < 1200) {

        $('.menu-item-sign-in a').attr('onclick', "gtag('event', 'exclude-logins', { event_category: 'ExcludeLogins', event_action: 'Excluded'});");

        $('.nav-menu > li.menu-item-has-children').each(function() {
            $(this).find('a').first().clone().prependTo($(this).find('.sub-menu').first());
            $(this).find('.sub-menu').first().prepend('<div class="menu-back"><a href="javascript:void();">Back</a></div>');
        });

        $('.footer-menu > li.menu-item-has-children').each(function() {
            $(this).find('a').first().clone().prependTo($(this).find('.sub-menu').first());
        });
    }

    $('.menu-back').on('click', function() {
        $('.sub-menu').removeClass('is-open');
    });

    $('li.menu-item-has-children > a').on('click', function(e) {
        if($(window).width() < 1200) {
            e.preventDefault();
            $(this).parent().find('ul').addClass('is-open');

            if($(this).parent().parent().hasClass('footer-menu')) {
                $(this).parent().find('ul').slideToggle();
                $(this).toggleClass('menu-open');
            }
        }
    });

    s.navTrigger.on('click', function() {
        s.navBurger.toggleClass('open');
        s.navTrigger.toggleClass('is-open');
        s.nav.toggleClass('is-open');
        $('body').toggleClass('menu-open');
        $('.sub-menu').removeClass('is-open');
    });

    if($(window).width() < 600) {
        $(".pre-nav__select").prependTo(".footer__lower");
    }

    $('.pre-nav__search-icon').on('click', function() {
        $('.search-wrapper').fadeToggle();
    });

    $('.search-wrapper__close').on('click', function () {
        $('.search-wrapper').fadeToggle();
    });

    var optionsArray = [];

    $(".pre-nav__select option").each(function() {
        optionsArray.push('/' + $(this).val());
    });

    var countryFound = 0;
    
    for (var index = 0; index < optionsArray.length; index++) {
        if(window.location.href.indexOf(optionsArray[index]) !== -1) {
            var complete = optionsArray[index].replace('/','');
            $(".pre-nav__select select").val(complete);
            document.cookie = "forceus=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
            var cookieval = 'true';
            var date = new Date();
            date.setTime(date.getTime() + (30 * 24 * 60 * 60 * 1000));
            var expires = "; expires=" + date.toGMTString();             
        
            document.cookie = "usoverride=" + cookieval + expires + "; path=/";
            countryFound = 1;
        }
    }

    if(countryFound == 0) {
        $(".pre-nav__select select").val('uk');
        document.cookie = "forceus=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        var cookieval = 'true';
        var date = new Date();
        date.setTime(date.getTime() + (30 * 24 * 60 * 60 * 1000));
        var expires = "; expires=" + date.toGMTString();             
    
        document.cookie = "usoverride=" + cookieval + expires + "; path=/";
    }


    $(".pre-nav__select").on('change', function() {
        var value = $(this).find(":selected").val();
        var link = $(this).find(":selected").data('link');
        var cookiegeoval = 'true';
        var geodate = new Date();
        geodate.setTime(geodate.getTime() + (30 * 24 * 60 * 60 * 1000));
        var geoexpires = "; expires=" + geodate.toGMTString();    
        document.cookie = "cancelgeo=" + cookiegeoval + geoexpires + "; path=/";
        window.location.href = link;
    });
}

//// FUNCTIONS
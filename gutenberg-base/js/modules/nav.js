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

    // var optionsArray = [];

    // $(".pre-nav__select option").each(function() {
    //     optionsArray.push('/' + $(this).val());
    // });

    var countryFound = 0;
    
    // for (var index = 0; index < optionsArray.length; index++) {
    //     if(window.location.href.indexOf(optionsArray[index]) !== -1) {
    //         var complete = optionsArray[index].replace('/','');
    //         $(".pre-nav__select select").val(complete);
    //         countryFound = 1;
    //     }
    // }

    if (readCookie('IPgeoRegion')) {
        var region = readCookie('IPgeoRegion');
        $(".pre-nav__select select").val(region);
        countryFound = 1;
    }

    if(countryFound == 0) {
        $(".pre-nav__select select").val('uk');
    }


    $(".pre-nav__select").on('change', function() {
        var value = $(this).find(":selected").val();
        var link = $(this).find(":selected").data('link');
        var ukLink = $(this).find("option[value='uk']").data('link');
        var cookiegeoval = 'true';
        var geodate = new Date();
        console.log(ukLink);
        console.log('value = ' + value);
        geodate.setTime(geodate.getTime() + (30 * 24 * 60 * 60 * 1000));
        var geoexpires = "; expires=" + geodate.toGMTString();    
        document.cookie = "cancelgeo=" + cookiegeoval + geoexpires + "; path=/";
        if (value == 'uk' || value == 'au' || value == 'nz' || value == 'ca') { // add value == 'us' || eventually
            // createCookie('IPgeoRegion', value, 180);
            // if (window.location.href.indexOf("/cy") > -1 || window.location.href.indexOf("/fr") > -1 || window.location.href.indexOf("/us")) { // remove us eventually
            //     window.location.href = link;
            // } else 
            if (value == 'uk'){
                window.location.href = ukLink;
                createCookie('IPgeoRegion', value, 180);
                $("body").addClass('uk');
                console.log('uk');
            } else if (value == 'au') {
                window.location.href = ukLink + '?lang=au';
                createCookie('IPgeoRegion', value, 180);
                $("body").addClass('au');
                console.log('au');
            } else if (value == 'nz') {
                window.location.href = ukLink + '?lang=nz';
                createCookie('IPgeoRegion', value, 180);
                $("body").addClass('nz');
                console.log('nz');
            } else if (value == 'ca') {
                window.location.href = ukLink + '?lang=ca';
                createCookie('IPgeoRegion', value, 180);
                $("body").addClass('ca');
                console.log('ca');
            }
        } else {
            createCookie('IPgeoRegion', value, 180);
            window.location.href = link;
        }
    });
}

//// FUNCTIONS

function createCookie(name, value, days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        var expires = "; expires=" + date.toGMTString();
    }
    else var expires = "";               

    document.cookie = name + "=" + value + expires + "; path=/";
}

function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}
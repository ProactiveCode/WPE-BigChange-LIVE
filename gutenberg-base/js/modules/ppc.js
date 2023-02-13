//// SETTINGS
let s;
function settings(){
    s = {

    }
};

//// EXPORT FUNCTION
export function init(){
    settings();
    bindUIActions();

    if($('.page-template-template-ppc-normal').length > 0 || $('.page-template-template-ppc-capterra').length > 0) {
        var keywords = getUrlVars()["keywords"];
        var keyword = getUrlVars()["keyword"];

        if((keywords || keyword)) {
            if (keywords) {
                $('.hero__title h1').text(decodeURIComponent(keywords));
            } else {
                $('.hero__title h1').text(decodeURIComponent(keyword));
            }
        }

        $(window).on('scroll', function(){
            var scrollPos = $(document).scrollTop();
            var heroHeight = $('.hero').outerHeight();

            // if(scrollPos > heroHeight) {
            //     $('.floating-form').fadeIn();
            // } else {
            //     $('.floating-form').fadeOut();
            // }
        });
    }

    // $('.demo-ppc').on('click', function() {
    //     if($(window).width() < 769) {
    //         $('.demo').click();
    //     } else {
    //         $('.floating-form').fadeIn();
    //         $('.floating-form').removeClass('minimised');
    //         $('.floating-form__close').addClass('open');
    //         $('.floating-form__close').removeClass('closed');
    //         $('.floating-form .wpcf7').show();
    //         $('.floating-form__close img').attr('src', $('.floating-form__close img').data('open'));
    
    //         $('.floating-form form .first-name input').focus();
    //         $('.floating-form form .first-name input').focus();
    //     }
    // });

    var pricingppc = document.querySelector( '.pricing-ppc .wpcf7' );
 
    if(pricingppc) {
        pricingppc.addEventListener( 'wpcf7mailsent', function( event ) {
            setTimeout(() => {
                document.location.href = 'https://www.bigchange.com/pricing-files/';
            }, 1000);
        }, false );
    }

    var ppcTop = document.querySelector( '.hero__ppc-form-form .wpcf7' );
 
    if(ppcTop) {
        ppcTop.addEventListener( 'wpcf7mailsent', function( event ) {
            setTimeout(() => {
                document.location.href = 'https://www.bigchange.com/thank-you/?ref=ppc-hero';
            }, 1000);
        }, false );
    }

    var ppcLower = document.querySelector( '.ppc-inner-form__wrapper .wpcf7' );
 
    if(ppcLower) {
        ppcLower.addEventListener( 'wpcf7mailsent', function( event ) {
            setTimeout(() => {
                document.location.href = 'https://www.bigchange.com/thank-you/?ref=ppc-lower';
            }, 1000);
        }, false );
    }

    var wpcf7Elm = document.querySelector( '.ppc .floating-form .wpcf7' );
 
    if(wpcf7Elm) {
        wpcf7Elm.addEventListener( 'wpcf7mailsent', function( event ) {
            setTimeout(() => {
                document.location.href = 'https://www.bigchange.com/thank-you/';
            }, 1000);
        }, false );
    }

    var wpcf7Elm2 = document.querySelector( '.capterra .floating-form .wpcf7' );
 
    if(wpcf7Elm2) {
        wpcf7Elm2.addEventListener( 'wpcf7mailsent', function( event ) {
            setTimeout(() => {
                document.location.href = 'https://www.bigchange.com/capterra-thank-you/';
            }, 1000);
        }, false );
    }

    var wpcf7Elm10 = document.querySelector( '.ppc .floating-form-modal .wpcf7' );
 
    if(wpcf7Elm10) {
        wpcf7Elm10.addEventListener( 'wpcf7mailsent', function( event ) {
            setTimeout(() => {
                document.location.href = 'https://www.bigchange.com/thank-you/';
            }, 1000);
        }, false );
    }

    var wpcf7Elm11 = document.querySelector( '.capterra .floating-form-modal .wpcf7' );
 
    if(wpcf7Elm11) {
        wpcf7Elm11.addEventListener( 'wpcf7mailsent', function( event ) {
            setTimeout(() => {
                document.location.href = 'https://www.bigchange.com/capterra-thank-you/';
            }, 1000);
        }, false );
    }

    var wpcf7Elm3 = document.querySelector( '.demo-modal .wpcf7' );

    if(wpcf7Elm3) {
        wpcf7Elm3.addEventListener( 'wpcf7mailsent', function( event ) {
            setTimeout(() => {
                var thanksURL = document.location.href + '?success=1';
                document.location.href = thanksURL;
                // document.location.href = 'https://www.bigchange.com/thank-you/';
            }, 1000);
        }, false );
    }

    var wpcf7Elm4 = document.querySelector( '.callback-modal .wpcf7' );

    if(wpcf7Elm4) {
        wpcf7Elm4.addEventListener( 'wpcf7mailsent', function( event ) {
            setTimeout(() => {
                var thanksURL = document.location.href + '?success=1';
                document.location.href = thanksURL;
                // document.location.href = 'https://www.bigchange.com/thank-you/';
            }, 1000);
        }, false );
    }

    var wpcf7Elm5 = document.querySelector( '.contact-form .wpcf7' );

    if(wpcf7Elm5) {
        wpcf7Elm5.addEventListener( 'wpcf7mailsent', function( event ) {
            setTimeout(() => {
                var thanksURL = document.location.href + '?success=1';
                document.location.href = thanksURL;
                // document.location.href = 'https://www.bigchange.com/thank-you/';
            }, 1000);
        }, false );
    }

    var wpcf7Elm6 = document.querySelector( '.network-contact .wpcf7' );

    if(wpcf7Elm6) {
        wpcf7Elm6.addEventListener( 'wpcf7mailsent', function( event ) {
            setTimeout(() => {
                var thanksURL = document.location.href + '?success=1';
                document.location.href = thanksURL;
                // document.location.href = 'https://www.bigchange.com/thank-you/';
            }, 1000);
        }, false );
    }

    var wpcf7Elm8 = document.querySelector( '.em-form-check .wpcf7' );

    if(wpcf7Elm8) {
        wpcf7Elm8.addEventListener( 'wpcf7mailsent', function( event ) {
            setTimeout(() => {
                var thanksURL = 'https://www.bigchange.com/email-marketing-thank-you/';
                document.location.href = thanksURL;
                // document.location.href = 'https://www.bigchange.com/thank-you/';
            }, 1000);
        }, false );
    }
}

//// ACTIONS
function bindUIActions(){
    
    $('.ppc-login-track').on('click', function() {
        _paq.push(['trackEvent', 'PPC Landing Page', 'Login button click', window.location.href]);
        gtag('event', 'exclude-logins', { event_category: 'ExcludeLogins', event_action: 'Excluded'});
    });
}

//// FUNCTIONS
// Read a page's GET URL variables and return them as an associative array.
function getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}
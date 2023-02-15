//// SETTINGS
let s;
function settings(){
    s = {
        maxHeight: 0
    }
};
//// EXPORT FUNCTION
export function init(){
    settings();
    bindUIActions();
}
//// ACTIONS
function bindUIActions(){

    //MODAL IS IN COOKIES.JS

    if($('.landing-page__wrapper').length > 0 ) {
        var firstPost = $('.landing-page__menu').offset().top;
        var heroHeight = $('.hero').outerHeight();
        var menuHeight = $('.landing-page__menu').outerHeight();
        var windowHeight = $(window).height();
    }

    if($('.stop-scrolling').length > 0) {
        var stopPos = $('.stop-scrolling').offset().top;
        var stopHeight = $('.stop-scrolling').outerHeight();
        var endPos = stopPos + stopHeight;
    }
    
    $(window).on('scroll', function() {
        if($('.landing-page__wrapper').length > 0 && (windowHeight - 200) > menuHeight && $(window).width() > 1023 && $('.stop-scrolling').length > 0) {
            var containerHeight = $('.landing-page__wrapper').outerHeight();
            var menuLoc = $('.landing-page__menu').offset().top;
            var scrolled = $(window).scrollTop();

            if(scrolled < (endPos - 150)) {
                if((firstPost - 100) < scrolled) {
                    $('.landing-page__menu').css('top', '100px');
                    $('.landing-page__menu').css('position', 'fixed');
                } else {
                    $('.landing-page__menu').css('top', '0');
                    $('.landing-page__menu').css('position', 'absolute');
                }
            }

            if(scrolled >= (endPos - menuHeight) - 100) {
                $('.landing-page__menu').css('top', (endPos - heroHeight - menuHeight));
                $('.landing-page__menu').css('position', 'absolute');
            }
        }
    });

    var landingPageForm = document.querySelector( '.landing-page__download .wpcf7' );
 
    if(landingPageForm) {
        landingPageForm.addEventListener( 'wpcf7mailsent', function( event ) {
            var file = $('.landing-page__download').data('download');
            $('.landing-page__download').append('<div class="landing-page__download-files"><h4 class="new-blue"><a href="' + file + '">Download your file here</a></h4></div>');
        }, false );
    }
}

//// FUNCTIONS
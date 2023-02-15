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
}
//// ACTIONS
function bindUIActions(){
    $(window).on('scroll', function() {
        var top = $(window).scrollTop();

        if(top > 200) {
            $('.top-button').addClass('is-visible');
        }

        if (top < 200) {
            $('.top-button').removeClass('is-visible');
        }
    });
    var offset = 0;
    if($('.landing-page__wrapper').length > 0) {
        offset = 150;
    }

    // Select all links with hashes
    $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').on('click', function(event) {
        if(!$('body').hasClass('page-template-template-leeds-united')) {
            console.log('lcicked');
            var headerHeight = $('.site-header').outerHeight() + 50;
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
            || location.hostname == this.hostname) {
    
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top - headerHeight
                    }, 1000);
                    return false;
                }
            }
        }
    });
}

//// FUNCTIONS
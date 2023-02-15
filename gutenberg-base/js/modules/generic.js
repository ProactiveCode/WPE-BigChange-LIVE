//// SETTINGS
let s;
function settings(){
    s = {
        timer: 0
    }
};
//// EXPORT FUNCTION
export function init(){
    settings();
    bindUIActions();
}
//// ACTIONS
function bindUIActions(){

    if ($("body").hasClass("home")) {
        if ($(window).width() > 767) {
            $(window).scroll(function(){
                if ($(document).scrollTop() > 150) {
                    $('.button-banner').slideDown();
                }
                if ($(document).scrollTop() < 150) {
                    $('.button-banner').slideUp();
                }
            });
        }
    }

    if ($('.iframe-wrapper iframe').length > 0) {
        $('.iframe-wrapper iframe').each(function() {
            var captivateLink = $(this).attr('src');
            console.log(captivateLink);
            console.log(captivateLink.indexOf('captivate') > 0);
            if (captivateLink.indexOf('captivate') > 0) {
                $(this).css('height','250px');
                $(this).parent().css('padding-bottom','250px');
            }
        });
    }

    $('.industries__select select').on('change', function() {
        var link = $('.industries__select select option:selected').val()
        $('.industries__lower-button a').attr('href', link);
    });

    var catSlider = $('.category-switcher__image-carousel');

    catSlider.owlCarousel({
        margin: 20,
        loop: true,
        nav: false,
        dots: false,
        items: true
    });

    $('.category-switch__next').on('click', function(e) {
        catSlider.trigger('next.owl.carousel');
    });

    $('.category-switch__prev').on('click', function(e) {
        catSlider.trigger('prev.owl.carousel');
    });

    catSlider.on('changed.owl.carousel',function(property){
        var offset = 3;

        if($('.offset--5').length > 0) {
            offset = 5;
        }
        var current = (property.item.index) - offset;
        console.log(current);
        $('.category-switcher__items a').removeClass('is-active');
        $('.category-switcher__items a').eq(current).addClass('is-active');
    });

    $('.category-switcher__items a').on('click', function() {
        var clicked = $(this).index();

        $('.category-switcher__image-carousel').trigger('to.owl.carousel', clicked);
    });

    $('.tabs__title').on('click', function() {
        var clicked = $(this).data('titleid');
        $('.tabs__title').removeClass('is-active');
        $(this).addClass('is-active');
        
        $('.tabs__item').removeClass('is-active').hide();
        $('.tabs__item.tabs__item--' + clicked).addClass('is-active').show();
    });


    $('.accordions__title').on('click', function() {
        $(this).toggleClass('accordions__title--open');
        $(this).parent().parent().find('.accordions__lower').stop().slideToggle();
    });


    if($('.animate-page').length) {
        $('.category-switcher__image-column, .wp-block-columns.mobile-flip .wp-block-column:nth-of-type(2)').each(function() {
            $(this).attr('data-aos', 'fade-left');
        });

        $('.wp-block-columns:not(.mobile-flip) .wp-block-column:nth-of-type(1)').each(function() {
            $(this).attr('data-aos', 'fade-right');
        });

        $('.updated-cards__card, .industry, .reviews-block__review, .stats__stat, .updated-events-block__event, .mission-cards__card').each(function() {
            $(this).attr('data-aos', 'fade-up');
        });

        AOS.init({
            once: true,
            offset: 400
        });
    }

    $('.updated-events-block__category select').on('change', function() {
        var link = $('.updated-events-block__category select option:selected').val();
        $('.updated-events-block__event').each(function() {
            var cat = $(this).data('category');
            if(link == 'all') {
                $(this).fadeIn();
            } else {
                if(cat == link) {
                    $(this).fadeIn();
                } else {
                    $(this).fadeOut();
                }
            }
        });
    });



    function getCookie(cname) {
        let name = cname + "=";
        let ca = document.cookie.split(';');
        for(let i = 0; i < ca.length; i++) {
          let c = ca[i];
          while (c.charAt(0) == ' ') {
            c = c.substring(1);
          }
          if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
          }
        }
        return "";
    }
    
    if( getCookie('ExcludeLogins')){
        console.log('User logged in. No additional tracking.');
    }
    else {
        console.log('User not logged in, ExcludeLogins active');
        $('<script async src="https://www.googletagmanager.com/gtag/js?id=G-Z1BECX6MVS"></script><script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments)}gtag("js",new Date());gtag("config","G-Z1BECX6MVS");</script>').appendTo( "body" );
        $("<script>gtag('event', 'nologin', {'app_name': 'nologin','screen_name': 'nologin'});</script>").appendTo( "body" );
    }
      

    $('.updated-events-block__age select').on('change', function() {
        var link = $('.updated-events-block__age select option:selected').val();
        var catLink = $('.updated-events-block__category select option:selected').val();
        
        if(link == 'old') {
            $('.updated-events-block__event').each(function() {
                $(this).prependTo(this.parentNode);
            });
            $('.updated-events-block__event--full').fadeOut();
        } else {
            $('.updated-events-block__event').each(function() {
                $(this).prependTo(this.parentNode);
            });

            if(catLink == 'all') {
                $('.updated-events-block__event--full').fadeIn();
            }
        }
        
    });

    

}

//// FUNCTIONS
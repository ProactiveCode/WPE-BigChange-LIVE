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

    if($('.hero__banner').length > 1) {
        var heroCarousel = $('.hero__wrapper')
        heroCarousel.owlCarousel({
            margin: 1,
            loop: false,
            rewind: true,
            items: 1,
            autoplay:true,
            mouseDrag: false,
            touchDrag: false,
            autoplayTimeout:7000,
            autoplayHoverPause:true,
            dots: false,
            nav: true,
            navText: ["<div class='owl-nav-right'><div class='owl-nav-right__wrapper'><div class='owl-nav-right__arrow'></div></div></div><span class='offscreen'>Go to next slide</span>","<div class='owl-nav-left'><div class='owl-nav-left__wrapper'><div class='owl-nav-left__arrow'></div></div></div><span class='offscreen'>Go to previous slide</span>"]
        });
    }

    $('.hero__dot').on('click',function(){
        heroCarousel.trigger('stop.owl.autoplay');
        heroCarousel.trigger('to.owl.carousel', [$(this).index(), 300]);
        $('.hero__dot').removeClass('active');
        $(this).addClass('active');
    });

    if($('.hero__banner').length > 1) {
        heroCarousel.on('changed.owl.carousel', function(event) {
            if($(event.target).hasClass('hero__wrapper')) {
                var current = event.item.index;
                $('.hero__dot').removeClass('active');
                $('.hero__dot').eq(current).addClass('active');
            }
        });
    }

    if($(window).width() < 767) {
        $('.hero__banner').each(function() {
            var bannerHeight = $(this).outerHeight();
            var padTop = 100;
            var textHeight = $(this).find('.container').outerHeight();
            var gapBot = 20;
            var logosHeight = $(this).find('.hero__logos-wrapper').outerHeight();
            var margin = 10;
            var ImageHeight =  bannerHeight - (padTop + textHeight + gapBot + logosHeight + margin);

           $(this).find('.hero__foreground-image img').css('height', ImageHeight);
        });
    }

    var heroLogos = $('.hero__logos')

    heroLogos.owlCarousel({
        margin: 0,
        loop: true,
        dots: false,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:3
            },
            600:{
                items:3
            },
            800:{
                items:4
            },
            1024:{
                items:5
            },
            1600:{
                items:6
            }
        }
    });

    var timeout = 300;

    $('.hero__banner--1 .hero__logos .owl-item.active').each(function () {
        setTimeout(() => {
            $(this).find('.hero__logo').addClass('visible');
        }, timeout * ($(this).index() - $('.hero__banner--1 .hero__logos .owl-item.active').length));
    });

    $('.hero__banner').each(function() {
        $('.hero__logos .owl-item:not(.active)').each(function () {
            $(this).find('.hero__logo').addClass('visible');
        });
    })
    
}

//// FUNCTIONS
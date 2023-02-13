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

    var quotesSlider = $('.owl-carousel.quotes-slider__quotes')
    quotesSlider.owlCarousel({
        margin: 20,
        loop: true,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        items: 1,
        nav: true,
        dots: false,
        navText: ["<div class='owl-nav-right'><div class='owl-nav-right__wrapper'><div class='owl-nav-right__arrow'></div></div></div><span class='offscreen'>Go to next slide</span>","<div class='owl-nav-left'><div class='owl-nav-left__wrapper'><div class='owl-nav-left__arrow'></div></div></div><span class='offscreen'>Go to previous slide</span>"],
    });

    $('.quotes-slider .owl-dot, .quotes-slider .owl-nav-right__wrapper, .quotes-slider .owl-nav-left__wrapper').on('click',function(){
        quotesSlider.trigger('stop.owl.autoplay');
    });

}

//// FUNCTIONS
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

    var c1 = $('.logos');
    var c2 = $('.logos-second');

    var max = 5;

    if($('.logos-outer-wrapper').length > 0) {
        max = 5;
    } else if($('body').data('lang') == 'en' && $('.carousel--7').length > 0) {
        max = 7;
    } 

        c1.owlCarousel({
            margin: 20,
            loop: true,
            autoplay:true,
            autoplayTimeout:2000,
            items: 1,
            autoplayHoverPause:true,
            dots: false,
            responsive:{
                600:{
                    items:3
                },
                1023:{
                    items:5
                },
                1350:{
                    items:max,
                    margin: 40
                }
            }
        });
    
        c2.owlCarousel({
            margin: 20,
            items: 1,
            loop: true,
            autoplay:false,
            dots: false,
            responsive:{
                600:{
                    items:3
                },
                1023:{
                    items:5
                },
                1350:{
                    items:max,
                    margin: 40
                }
            }
        });

    c1.on('translate.owl.carousel', function(e) {
        c2.trigger('next.owl.carousel');
    });
}

//// FUNCTIONS
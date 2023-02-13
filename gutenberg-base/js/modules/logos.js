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

    c1.owlCarousel({
        margin: 20,
        loop: true,
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:true,
        dots: false,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:3
            },
            1023:{
                items:5
            }
        }
    });

    c2.owlCarousel({
        margin: 20,
        loop: true,
        autoplay:false,
        dots: false,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:3
            },
            1023:{
                items:5
            }
        }
    });

    c1.on('translate.owl.carousel', function(e) {
        c2.trigger('next.owl.carousel');
    });
}

//// FUNCTIONS
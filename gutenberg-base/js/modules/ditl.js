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

    var ditl = $('.ditl__overall');
    ditl.owlCarousel({
        margin: 20,
        loop: false,
        items: 1,
        nav: false,
        dots: false,
        mouseDrag: false,
        touchDrag: false,
    });
   

    $('.ditl__options a').on('click', function() {
        $('.ditl__options a').removeClass('active');
        $(this).addClass('active');
        ditl.trigger('to.owl.carousel', $(this).index());
        $('.ditl__truck').removeClass('is-visible');

        setTimeout(() => {
            addTruck();
        }, 500);
       
    });

    $(window).on('load', function () {
        if($('.ditl__truck').length > 0) {
            addLine();
            addTruck();
        }
    });

    $(window).on('scroll', function() {
        if($('.ditl__truck').length > 0) {
            var truckPos = $('.ditl__truck').offset().top;
            var windowPos = $(window).scrollTop() + $('.ditl__overall .owl-item.active .ditl__bar-inner').offset().top;
            console.log(windowPos);
            console.log(truckPos);
            console.log(s.maxHeight);
    
            if(truckPos >= s.maxHeight) {
                console.log('at the bottom my man');
                $('.ditl__truck').css('top', s.maxHeight);
                $('.ditl__truck').css('position', 'absolute');
            }
    
            if(windowPos < s.maxHeight) {
                console.log('moving on up');
                console.log('in if windowpos' + windowPos + $('.ditl__overall .owl-item.active .ditl__bar-inner').offset().top);
                console.log('in if maxheight' + s.maxHeight);
                $('.ditl__truck').css('top',$('.ditl__overall .owl-item.active .ditl__bar-inner').offset().top);
                $('.ditl__truck').css('position', 'fixed');
            }
        }
    });
}

//// FUNCTIONS
function addLine() {
    $('.ditl__overall .owl-item').each(function() {
        var firstHeight = $(this).find('.ditl__item').first().outerHeight() / 2;
        var lastHeight = $(this).find('.ditl__item').last().outerHeight() / 2;
        var overallHeight = $(this).find('.ditl__wrapper').outerHeight();
        var barHeight = overallHeight - firstHeight - lastHeight;

        console.log(overallHeight);
        console.log(firstHeight);
        console.log(lastHeight);

        $(this).find('.ditl__bar-inner').css('top',firstHeight);
        $(this).find('.ditl__bar-inner').height(barHeight);
    });
}

function addTruck() {
    $('.ditl__truck').css('top',$('.ditl__overall .owl-item.active .ditl__bar-inner').offset().top);
    $('.ditl__truck').css('left',$('.ditl__overall .owl-item.active .ditl__bar-inner').offset().left);

    s.maxHeight = ($('.ditl__overall .owl-item.active .ditl__bar-inner').offset().top + $('.ditl__overall .owl-item.active .ditl__bar-inner').outerHeight() - 50);

    $('.ditl__truck').addClass('is-visible');

    console.log($('.ditl__overall .owl-item.active .ditl__bar-inner').offset().top,$('.ditl__overall .owl-item.active .ditl__bar-inner').offset().left);
}
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
    if($(window).width() < 767) {
        $('.diamonds').addClass('diamonds--mobile');
        $('.diamonds-5-in-1').addClass('diamonds-5-in-1--mobile');
    }

    $('.diamond-clickable').on('click touchstart', function() {
        var link = $(this).data('link');
        window.location.href = link;
    });

    $(window).on('resize', function() {
        if($(window).width() < 767) {
            $('.diamonds').addClass('diamonds--mobile');
            $('.diamonds-5-in-1').addClass('diamonds-5-in-1--mobile');
        }

        if($(window).width() > 767) {
            $('.diamonds').removeClass('diamonds--mobile');
            $('.diamonds-5-in-1').removeClass('diamonds-5-in-1--mobile');
        }
    });
}

//// FUNCTIONS
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

    $("a").on('click', function(event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function(){
                window.location.hash = hash;
            });
        }
    });
}

//// FUNCTIONS
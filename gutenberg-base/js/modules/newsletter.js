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

    if ($('.newsletter-images').length) {
        var userName = getParameterByName('firstname');
        if (getParameterByName('firstname')) {
            $('.name-replace').text(userName);
        } else {
            $('.name-replace').text('Hello');
        }
        $("#newsletter-video").on("play",function(){
            $(".newsletter-images__video-text").delay(2500).fadeOut();
        });
    }
}

//// FUNCTIONS

function getParameterByName(name, url = window.location.href) {
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
}
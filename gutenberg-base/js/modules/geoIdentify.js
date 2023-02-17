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

    //Test alert
    if (jQuery) {
        console.log("jquery is loaded");
    } else {
        console.log("Not loaded");
    }
    //END Test alert

    $.cookie("IPgeoRegion", "uk");
    $("body").addClass('uk');
    console.log('uk body class appended');
}

//// FUNCTIONS
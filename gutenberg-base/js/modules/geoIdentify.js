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
    alert('This non jQuery alert worked...');
    //END Test alert

    $.cookie("IPgeoRegion", "uk");
    $("body").addClass('uk');
    console.log('uk body class appended');
}

//// FUNCTIONS
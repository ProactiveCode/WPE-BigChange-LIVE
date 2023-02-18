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

    //A different experiment
    if (document.cookie.split(';').some((item) => item.trim().startsWith('IPgeoRegion='))) {
        // the "IPgeoRegion" cookie exists
        const regionValue = document.cookie
          .split('; ')
          .find((row) => row.startsWith('IPgeoRegion='))
          .split('=')[1];
      
        if (regionValue === 'uk') {
            $('body').addClass('uk');
        }
        if (regionValue === 'us') {
            $('body').addClass('us');
        }
        if (regionValue === 'fr') {
            $('body').addClass('fr');
        }
        if (regionValue === 'cy') {
            $('body').addClass('cy');
        }
        if (regionValue === 'nz') {
            $('body').addClass('nz');
        }
        if (regionValue === 'au') {
            $('body').addClass('au');
        }
        if (regionValue === 'ca') {
            $('body').addClass('ca');
        }
    }
}

//// FUNCTIONS
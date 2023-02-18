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
          alert('UK is region');
        }
        if (regionValue === 'us') {
            alert('USA is region');
        }
        if (regionValue === 'fr') {
            alert('France is region');
        }
        if (regionValue === 'cy') {
            alert('Cyprus is region');
        }
        if (regionValue === 'nz') {
            alert('New Zealand is region');
        }
        if (regionValue === 'au') {
            alert('Australia is region');
        }
        if (regionValue === 'ca') {
            alert('Canada is region');
        }
    }
}

//// FUNCTIONS
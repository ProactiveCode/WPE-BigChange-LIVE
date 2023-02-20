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

    //Add class to body dependant on cookie region
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
    //Hide Sage image if region does not support software
    $('.footer__logos .logo:first-of-type').css('display', 'block');
    if($('body').hasClass('ca') || $('body').hasClass('us') || $('body').hasClass('nz') || $('body').hasClass('au')) {
        $('.footer__logos .logo:first-of-type').css('display', 'none');
        console.log('Sage Logo removed.');
    }

    //Manual replacement for Cloudfront forwarding rules
    console.log('Run FR redirection rule...');
    // Check if the cookie "cancelgeo" does not exist
    if (location.pathname === '/') {
    if (!document.cookie.includes('cancelgeo')) {
        console.log('User has not manually selected a region.');
        // Check if the browser language matches 'fr' or 'FR' or 'fr-FR' or 'fr-fr'
        if (navigator.language.match(/^fr($|-)|^FR($|-)|^fr\-FR($|-)|^fr\-fr($|-)/)) {
            console.log('User has a French browser lang');
            // Redirect the user to /fr/
            console.log('Redirecting to france...');
            window.location.href = '/fr/';
        }
    }
    }
}

//// FUNCTIONS
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
    // Check if the cookie "cancelgeo" and "stopGeoRedirect" does not exist
    if(window.location.pathname === '/' && !document.cookie.includes('cancelgeo') && !document.cookie.includes('stopGeoRedirect')) {
        
        //New cookie to stop redirect loops
        // 1 hour
        const cookieExpirationHours = 1;
        // Set the name and value of the cookie
        const cookieName = "stopGeoRedirect";
        const cookieValue = "true";
        // Create the cookie string
        const cookieString = `${cookieName}=${cookieValue};expires=${new Date(new Date().getTime() + cookieExpirationHours * 60 * 60 * 1000).toUTCString()};path=/`;



        // Code to be executed if both conditions are true
        // Check if the browser language matches 'fr' or 'FR' or 'fr-FR' or 'fr-fr'
        if (navigator.language.match(/^fr($|-)|^FR($|-)|^fr\-FR($|-)|^fr\-fr($|-)/)) {
            //console.log('User has a French browser lang');
            // Redirect the user to /fr/
            //Stop redirects
            document.cookie = cookieString;
            //console.log('Redirecting to france...');
            window.location.href = '/fr/';
        }
        if (navigator.language.match(/^en\-US($|-)|^us($|-)|^US($|-)/)) {
            //console.log('User has a French browser lang');
            // Redirect the user to /us/
            //Stop redirects
            document.cookie = cookieString;
            //console.log('Redirecting to france...');
            window.location.href = '/us/';
        }
        if (navigator.language.match(/^el\-CY($|-)|^el\-cy($|-)|^gr($|-)|^GR($|-)|^el($|-)|^EL($|-)/)) {
            //console.log('User has a French browser lang');
            // Redirect the user to /cy/
            //Stop redirects
            document.cookie = cookieString;
            //console.log('Redirecting to france...');
            window.location.href = '/cy/';
        }
    }
    //CA
    // Check if the cookie "cancelgeo" does not exist
    //Disabled due to redirect loop 
    /*if (location.pathname === '/' && !document.cookie.includes('cancelgeo')) {
        // Code to be executed if both conditions are true
        console.log('User has not manually selected a region.');
        // Check if the browser language matches various Canadian regions.
        if (navigator.language.match(/^en\-CA($|-)|^en\-ca($|-)|^ca($|-)|^CA($|-)/)) {
            console.log('User has a French browser lang');
            // Redirect the user to /ca/
            console.log('Redirecting to france...');
            window.location.href = '/?lang=ca';
        }
    }*/
    //AU
    // Check if the cookie "cancelgeo" does not exist
    //Disabled due to redirect loop 
   /*if (location.pathname === '/' && !document.cookie.includes('cancelgeo')) {
        // Code to be executed if both conditions are true
        console.log('User has not manually selected a region.');
        // Check if the browser language matches 'fr' or 'FR' or 'fr-FR' or 'fr-fr'
        if (navigator.language.match(/^en\-AU($|-)|^en\-au($|-)|^au($|-)|^AU($|-)/)) {
            console.log('User has a French browser lang');
            // Redirect the user to /au/
            console.log('Redirecting to france...');
            window.location.href = '/?lang=au';
        }
    }*/
    //NZ
    // Check if the cookie "cancelgeo" does not exist
    //Disabled due to redirect loop 
    /*if (location.pathname === '/' && !document.cookie.includes('cancelgeo')) {
        // Code to be executed if both conditions are true
        console.log('User has not manually selected a region.');
        // Check if the browser language matches 'fr' or 'FR' or 'fr-FR' or 'fr-fr'
        if (navigator.language.match(/^en\-NZ($|-)|^en\-nz($|-)|^nz($|-)|^NZ($|-)/)) {
            console.log('User has a French browser lang');
            // Redirect the user to /nz/
            console.log('Redirecting to france...');
            window.location.href = '?lang=nz';
        }
    }*/
}

//// FUNCTIONS
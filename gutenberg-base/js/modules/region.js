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


    function createCookie(name, value, days) {
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            var expires = "; expires=" + date.toGMTString();
        }
        else var expires = "";               
    
        document.cookie = name + "=" + value + expires + "; path=/";
    }

    let lang = window.navigator.languages ? window.navigator.languages[0] : null;
    lang = lang || window.navigator.language || window.navigator.browserLanguage || window.navigator.userLanguage;
    var home = false;
    var classes = $('body').attr('class');
    var classesSplit = classes.split(' ');
    var count = 0;
    var gotLang = 0;
    var currentLang = '';
    $(classesSplit).each(function() { 
        if (classesSplit[count].indexOf("lang-") >= 0) {
            gotLang = 1;
            currentLang = classesSplit[count]; 
        } 
        count++; 
    });
    var final = currentLang.split('-')[1];

if(gotLang == 1) { lang =  final; }

  console.log('redirecting to - ' + lang);  

    //should be set to live domain when released.
    if (window.location.href == "https://www.bigchange.com/") {
        home = true;
    }

    if(!readCookie('cancelgeo') && home == true) {
        if(lang == 'gb' || lang == 'GB' || lang == 'en-GB' || lang == 'en-gb') {
            createCookie('geoRegion', 'gb', 180);
            $(".pre-nav__select select").val('uk');
            $("body").addClass('uk');
        }
        if(lang == 'fr' || lang == 'FR' || lang == 'fr-FR' || lang == 'fr-fr') {
            createCookie('geoRegion', 'fr', 180);
            $(".pre-nav__select select").val('fr');
            $("body").addClass('fr');
            //Cloudfront redirect no longer available after WP Engine Migration. Manual override:
            //window.location.replace("/fr/"); 
        }
        if(lang == 'el-CY' || lang == 'el-cy' || lang == 'gr' || lang == 'GR'  || lang == 'el' || lang == 'EL') {
            createCookie('geoRegion', 'cy', 180);
            $(".pre-nav__select select").val('cy');
            $("body").addClass('cy');
        }
        if(lang == 'en-NZ' || lang == 'en-nz' || lang == 'nz' || lang == 'NZ') {
            createCookie('geoRegion', 'nz', 180);
            $(".pre-nav__select select").val('nz');
            $("body").addClass('nz');
        }
        if(lang == 'en-US' || lang == 'en-us' || lang == 'us' || lang == 'US') {
            createCookie('geoRegion', 'us', 180);
            $(".pre-nav__select select").val('us');
            $("body").addClass('us');
        }
        if(lang == 'en-CA' || lang == 'en-ca' || lang == 'ca' || lang == 'CA') {
            createCookie('geoRegion', 'ca', 180);
            $(".pre-nav__select select").val('ca');
            $("body").addClass('ca');
        }
    }

}

//// FUNCTIONS 
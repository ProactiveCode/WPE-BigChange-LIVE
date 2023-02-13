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

    if(!readCookie('userloggedin') && readCookie('peCookies')) {
        $('head').append("<script>(function(h,o,t,j,a,r){h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};h._hjSettings={hjid:2340458,hjsv:6};a=o.getElementsByTagName('head')[0];r=o.createElement('script');r.async=1;r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;a.appendChild(r)})(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=')</script>");
        $('head').append('<script>(function(w,d,t,r,u){var f,n,i;w[u]=w[u]||[],f=function(){var o={ti:"17550965"};o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")},n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function(){var s=this.readyState;s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)},i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)})(window,document,"script","//bat.bing.com/bat.js","uetq");</script>');
    }
    if(readCookie('neCookies')) {
        $('body').append("<script>window.intercomSettings = {app_id: 'h00zu34v'};</script><script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==='function'){ic('reattach_activator');ic('update',w.intercomSettings);}else{var d=document;var i=function(){i.c(arguments);};i.q=[];i.c=function(args){i.q.push(args);};w.Intercom=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/h00zu34v';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>");
    }

    $(document).on('click touchstart', '.more-info-cookies', function() {
        $('.cookies-modal').addClass('is-open');
        $('body').addClass('modal-active');
        $('.cookies-modal__toggle').each(function() {
            $(this).find('input').prop('checked', true);
        });
        $('.cookie-bar').addClass('cookie-bar--hidden');
    });

    $(document).on('click touchstart', '.cookies-modal .cookies-modal__buttons .accept-cookies', function() {
        $('.cookies-modal__toggle').each(function() {
            $(this).find('input').prop('checked', true);
        });
        setRemoveCookies();
        createCookie('barClosedReset', true, 180);

        setTimeout(() => {
            $('.cookies-modal').removeClass('is-open');
            $('body').removeClass('modal-active');
            location.reload();
        }, 500);
    });

    $(document).on('click touchstart', '.cookies-modal .save-cookies', function() {
        createCookie('barClosedReset', true, 180);
        setRemoveCookies();
        $('.cookies-modal').removeClass('is-open');
        $('body').removeClass('modal-active');
        location.reload();
    });

    if(!readCookie('barClosedReset')) {
        setTimeout(() => {
            $('.cookie-bar').removeClass('cookie-bar--hidden');
            $('.cookie-bar .accept-cookies').focus();
        }, 500);
    }

    $(document).on('click', '.cookie-bar .accept-cookies', function() {
        $('.cookies-modal__toggle').each(function() {
            $(this).find('input').prop('checked', true);
        });
        setRemoveCookies();
        createCookie('barClosedReset', true, 180);
        $('.cookie-bar').addClass('cookie-bar--hidden');
        // CE2.converted("02ebfaad-7cf4-475e-93b1-24537a76571e"); //staging
        // CE2.converted("439dd9b2-0687-4fcf-b642-f2be1170aa32"); //live
        location.reload();
    });

    $(document).on('click touchstart', '.update-cookies', function() {
        if(readCookie('peCookies')) {
            $('#peCookies').prop('checked', true);
        }

        if(readCookie('neCookies')) {
            $('#neCookies').prop('checked', true);
        }

        $('.cookies-modal').addClass('is-open');
        $('body').addClass('modal-active');

    });
}

//// FUNCTIONS

// Cookies
function createCookie(name, value, days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        var expires = "; expires=" + date.toGMTString();
    }
    else var expires = "";               

    document.cookie = name + "=" + value + expires + "; path=/";
}

function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

function eraseCookie(name) {
    createCookie(name, "", -1);
}

function setRemoveCookies() {
    $('.cookies-modal__toggle').each(function() {
        var cookieAccepted = $(this).find('input').prop('checked');
        var cookieType = $(this).find('input').attr('id');

        if(cookieAccepted == true) {
            if(!readCookie(cookieType)) {
                createCookie(cookieType, true, 180);
            }
        } else {
            eraseCookie(cookieType);
            createCookie('barClosedReset', true, 30);
        }
    });
}
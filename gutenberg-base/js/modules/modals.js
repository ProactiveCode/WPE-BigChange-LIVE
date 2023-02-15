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
    if($('body').hasClass('home') && readCookie('barClosedReset') && $('body').data('lang') != 'fr') {
        // var homeTimer = setInterval(myTimer, 1000);
    }
    
    function myTimer() {
        s.timer++;

        if(s.timer == 3) {
            $('.em-modal').addClass('is-open');
            $('body').addClass('modal-active');
            // myStopFunction();

            var cookieval = 'true';
            var date = new Date();
            date.setTime(date.getTime() + (90 * 24 * 60 * 60 * 1000));
            var expires = "; expires=" + date.toGMTString();             
            document.cookie = "webmodalShown=" + cookieval + expires + "; path=/";
        }
    }

    // function myStopFunction() {
    //     clearInterval(homeTimer);
    // }


    // if(!readCookie('userloggedin')) {
    //     $('head').append('<script type="text/javascript" src="//script.crazyegg.com/pages/scripts/0104/7741.js" async="async"></script>');
    // }

    $('.login, .menu-item-sign-in').on('click touchstart', function() {
        // var iframeCount = $('.login-modal .bc-modal__inner iframe').length;
        // // myStopFunction();

        // if (iframeCount == 0) {
        //     var loginsrc = '<iframe id="loginIFrame" width="420" height="420" scrolling="no" frameborder="0" src="https://client.bigchange.com/loginframe.aspx"></iframe>';
        //     $('.login-modal .bc-modal__inner').append(loginsrc);
        // }

        var cookieval = 'true';
        var date = new Date();
        date.setTime(date.getTime() + (90 * 24 * 60 * 60 * 1000));
        var expires = "; expires=" + date.toGMTString();             
        document.cookie = "userloggedin=" + cookieval + expires + "; path=/";

        $('.login-modal').addClass('is-open');
        $('body').addClass('modal-active');
    });

    $('.login-modal .bc-modal__close, .login-modal .bc-modal__bg').on('click touchstart', function() {
        $('.login-modal').removeClass('is-open');
        $('body').removeClass('modal-active');
    });

    $('.demo, .menu-item-demo').on('click touchstart', function() {
        $('.demo-modal').addClass('is-open');
        $('body').addClass('prevent-menu');
        $('body').addClass('modal-active');
        // myStopFunction();
    });

    $('.demo-modal .bc-modal__close, .demo-modal .bc-modal__bg').on('click touchstart', function(e) {
        $('.demo-modal').removeClass('is-open');
        $('body').removeClass('modal-active');
        setTimeout(() => {
            $('body').removeClass('prevent-menu');
        }, 2000);
    });


    $('.em-modal .bc-modal__close, .em-modal .bc-modal__bg').on('click touchstart', function() {
        $('.em-modal').removeClass('is-open');
        $('body').removeClass('modal-active');
    });


    $('.video').on('click', function() {
        var src = $(this).data('src');
        $('.video-modal iframe').attr('src', src);
        $('.video-modal').addClass('is-open');
        $('body').addClass('modal-active');
        // myStopFunction();
    });

    $('.video-modal .bc-modal__close, .video-modal .bc-modal__bg').on('click touchstart', function() {
        $('.video-modal').removeClass('is-open');
        $('.video-modal iframe').attr('src', '');
        $('body').removeClass('modal-active');
    });

    $('.callback').on('click touchstart', function() {
        $('.callback-modal').addClass('is-open');
        $('body').addClass('modal-active');
        // myStopFunction();
    });

    $('.callback-modal .bc-modal__close, .callback-modal .bc-modal__bg').on('click touchstart', function() {
        $('.callback-modal').removeClass('is-open');
        $('body').removeClass('modal-active');
    });



    $('.pricing-btn').on('click touchstart', function() {
        $('.pricing-modal').addClass('is-open');
        $('body').addClass('modal-active');
    });

    $('.pricing-modal .bc-modal__close, .pricing-modal .bc-modal__bg').on('click touchstart', function() {
        $('.pricing-modal').removeClass('is-open');
        $('body').removeClass('modal-active');
    });


    $('.demo-ppc').on('click touchstart', function() {
        $('.floating-form-modal').addClass('is-open');
        $('body').addClass('modal-active');
        $('.hero__content-wrapper').addClass('pricing-open');
    });

    $('.floating-form-modal .bc-modal__close, .floating-form-modal .bc-modal__bg').on('click touchstart', function() {
        $('.floating-form-modal').removeClass('is-open');
        $('body').removeClass('modal-active');
        $('.hero__content-wrapper').removeClass('pricing-open');
    });

    // $('.floating-form__close a').on('click', function() {
    //     if($('.floating-form__close').hasClass('open')) {
    //         $('.floating-form').addClass('minimised');
    //         $('.floating-form__close').removeClass('open');
    //         $('.floating-form__close').addClass('closed');
    //         $('.floating-form .wpcf7').hide();
    //         $('.floating-form__close img').attr('src', $('.floating-form__close img').data('close'));
    //     } else {
    //         $('.floating-form').removeClass('minimised');
    //         $('.floating-form__close').addClass('open');
    //         $('.floating-form__close').removeClass('closed');
    //         $('.floating-form .wpcf7').show();
    //         $('.floating-form__close img').attr('src', $('.floating-form__close img').data('open'));
    //     }
       
    // });


    $('.single__social--email').on('click', function() {
        var copyText =  window.location.href;
        var el = document.createElement('textarea');
        el.value = copyText;
        el.setAttribute('readonly', '');
        el.style = {
            position: 'absolute',
            left: '-9999px'
        };
        document.body.appendChild(el);
        el.select();
        document.execCommand('copy');
        document.body.removeChild(el);

        $('.single__social--email p').addClass('visible');

        setTimeout(() => {
            $('.single__social--email p').removeClass('visible');
        }, 2000);
    });


    // let innerLang = window.navigator.languages ? window.navigator.languages[0] : null;
    // innerLang = innerLang || window.navigator.language || window.navigator.browserLanguage || window.navigator.userLanguage;


    // var extension = '';

    // if(innerLang == 'us' || innerLang == 'US' || innerLang == 'en-US' || innerLang == 'en-us' || readCookie('forceus')) {
    //     if(!readCookie('usoverride') || readCookie('forceus')) {
    //         extension = '?usd=true';
    //         $('.pricing__select select').val('usd');
    //         if($('.title-td').length > 0) {
    //             $('.title-td .pricing__price p').text('$84.95');
    //             $('.title-td.light-blue .pricing__price p').text('$20.95');
    //             $('.title-td.dark-blue .pricing__price p').text('$139.95');
    //         }

    //         if($('.pricing__mobile').length > 0) {
    //             $('.pricing__mobile .pricing__price p').text('$84.95');
    //             $('.pricing__mobile.light-blue .pricing__price p').text('$20.95');
    //             $('.pricing__mobile.dark-blue .pricing__price p').text('$139.95');
    //         }
    //     }
    // }

    // $('.pricing__select select').on('change', function() {
    //     if($(window).width() < 768) {
    //         var select = $('.pricing__select--mobile select').find(":selected").val();
    //     } else {
    //         var select = $('.pricing__select--desktop select').find(":selected").val();
    //     }
       
    //     if(select == 'usd') {
    //         if($(window).width() < 768) {
    //             if($('.pricing__mobile').length > 0) {
    //                 $('.pricing__mobile .pricing__price p').text('$84.95');
    //                 $('.pricing__mobile.light-blue .pricing__price p').text('$20.95');
    //                 $('.pricing__mobile.dark-blue .pricing__price p').text('$139.95');
    //             }
    //         } else {
    //             if($('.title-td').length > 0) {
    //                 $('.title-td .pricing__price p').text('$84.95');
    //                 $('.title-td.light-blue .pricing__price p').text('$20.95');
    //                 $('.title-td.dark-blue .pricing__price p').text('$139.95');
    //             }
    //         }
    //         extension = '?usd=true';
    //     } else {
    //         if($(window).width() < 768) {
    //             if($('.pricing__mobile').length > 0) {
    //                 $('.pricing__mobile .pricing__price p').text('£59.95');
    //                 $('.pricing__mobile.light-blue .pricing__price p').text('£14.95');
    //                 $('.pricing__mobile.dark-blue .pricing__price p').text('£99.95');
    //             }
    //         } else {
    //             if($('.title-td').length > 0) {
    //                 $('.title-td .pricing__price p').text('£59.95');
    //                 $('.title-td.light-blue .pricing__price p').text('£14.95');
    //                 $('.title-td.dark-blue .pricing__price p').text('£99.95');
    //             }
    //         }
            
    //         extension = '?usd=false';
    //     }
    // });


    //store code - 
    // setTimeout(() => {
    //     let lang = window.navigator.languages ? window.navigator.languages[0] : null;
    //     lang = lang || window.navigator.language || window.navigator.browserLanguage || window.navigator.userLanguage;
    //     var home = false;
    //     var classes = $('body').attr('class');
    //     var classesSplit = classes.split(' ');
    //     var count = 0;
    //     var gotLang = 0;
    //     var currentLang = '';
    //     $(classesSplit).each(function() { 
    //         if (classesSplit[count].indexOf("lang-") >= 0) {
    // gotLang = 10;
    //             currentLang = classesSplit[count]; 
    //         } 
    //         count++; 
    //     });
    //     var final = currentLang.split('-')[1];

    // if(gotLang == 1) { lang =  final; }

    //   console.log('redirecting to - ' + lang);

    // if (window.location.href == "https://www.bigchange.com/") {
    //       home = true;
    // }

    // if(!readCookie('cancelgeo') && home == true) {
    // if(lang == 'fr' || lang == 'FR' || lang == 'fr-FR' || lang == 'fr-fr') {
    // window.location.href = 'https://www.bigchange.com/fr/';
    // }
    // if(lang == 'el-CY' || lang == 'el-cy' || lang == 'gr' || lang == 'GR'  || lang == 'el' || lang == 'EL') {
    // window.location.href = 'https://www.bigchange.com/cy/';
    // }
    // if(lang == 'en-NZ' || lang == 'en-nz' || lang == 'nz' || lang == 'NZ') {
    // window.location.href = 'https://www.bigchange.com/nz/';
    // }
    // if(lang == 'en-US' || lang == 'en-us' || lang == 'us' || lang == 'US') {
    // window.location.href = 'https://www.bigchange.com/us/';
    // }
    // }
    // }, 1000);
    
    var getUrlParameter = function getUrlParameter(sParam) {
        var sPageURL = window.location.search.substring(1),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;
    
        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');
    
            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
            }
        }
    };

    // var usd = getUrlParameter('usd');

    // if(usd == 'true') {
    //     if($('.pricing-product').length > 0) {
    //         $('.pricing-product').attr('href', 'https://www.bigchange.com/wp-content/uploads/2021/04/Price-List_US-March-2021.pdf');
    //     }
    //     if($('.pricing-prices').length > 0) {
    //         $('.pricing-prices').hide();
    //     }
    // } else {
    // }


    var wpcf7Elm = document.querySelector( '#wpcf7-f18639-o2' );

    var dataURL = $('.site').data('site');
 
    if(wpcf7Elm) {
        wpcf7Elm.addEventListener( 'wpcf7mailsent', function( event ) {
            setTimeout(() => {
                document.location.href = dataURL + '/pricing-files/';
            }, 1000);
        }, false );
    }

    // $('.ptt__card').on('click', function() {
    //     var link = $(this).data('link');
    //     var modalText = $(this).data('modal-text');
    //     var modalTitle = $(this).find('.ptt__text p').text();

    //     $('.ptt-modal__title p').text(modalTitle);
    //     $('.ptt-modal__text p').html(modalText).text();
    //     $('.ptt-modal__button a').attr('href', link);

    //     $('.ptt-modal').addClass('is-open');
    //     $('body').addClass('modal-active');
    // });

    // $('.ptt-modal .bc-modal__close, .ptt-modal .bc-modal__bg').on('click', function() {
    //     $('.ptt-modal').removeClass('is-open');
    //     $('body').removeClass('modal-active');
    // });
}

//// FUNCTIONS
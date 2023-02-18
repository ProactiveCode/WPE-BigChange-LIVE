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
    /*if($("body").hasClass('page')) {
        console.log("jquery is loaded");
    }*/
    //END Test alert

    function getCookie(cname) {
        let name = cname + "=";
        let ca = document.cookie.split(';');
        for(let i = 0; i < ca.length; i++) {
          let c = ca[i];
          while (c.charAt(0) == ' ') {
            c = c.substring(1);
          }
          if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
          }
        }
        return "";
    }

    if( getCookie('IPgeoRegion')){
        console.log('IPgeoRegion cookie detected.');
    }

    //A different experiment
    function detectUkGeoRegionCookie() {
        const cookies = document.cookie.split(';');
        for (let i = 0; i < cookies.length; i++) {
          const cookie = cookies[i].trim();
          if (cookie.indexOf('IPgeoRegion=uk') === 0) {
            console.log('IPgeoRegion cookie detected new method.');
          }
        }
        console.log('IPgeoRegion cookie NOT detected new method.');
      }

    /*$.cookie("IPgeoRegion", "uk");
    $("body").addClass('uk');
    console.log('uk body class appended');*/
}

//// FUNCTIONS
//// SETTINGS
let s;
function settings(){
    s = {
        initCat: 0,
        category: 10,
        filter: 'desc',
        search: '',
        paged: 1,
        empty: 0,
        urlPopulate: false,
        featuredID: parseInt($('.case-studies__featured').data('current-featured'))
    }
};

//// EXPORT FUNCTION
export function init(){
    settings();
    bindUIActions();

    //if get query s.cat = val update select too
    if($('.page-template-template-case-studies').length > 0) { 

        if (window.location.href.indexOf("proactivecode") > -1) {
            s.category = 10;
            s.initCat = 10;
        } else {
            s.category = 10;
            s.initCat = 10;
        }
        
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

        var catID = getUrlParameter('catid');

        if(catID !== undefined) {
            $('.case-studies__industry select').val(catID).change();
        } else {
            getPosts(s.category, s.filter, s.search, s.paged, s.featuredID);
        }
    }
}

//// ACTIONS
function bindUIActions(){

    $('.case-studies__country select').on('change', function () {
        s.category = $(this).children("option:selected").val();
        s.empty = 1;
        s.paged = 1;
        getPosts(s.category, s.filter, s.search, s.paged, s.featuredID);
    });

    $('.case-studies__industry select').on('change', function () {
        s.category = $(this).children("option:selected").val();
        s.featuredID = 0;

        if(s.category == s.initCat) {
            s.featuredID = parseInt($('.case-studies__featured').data('current-featured'));
        }

        s.empty = 1;
        s.paged = 1;
        getPosts(s.category, s.filter, s.search, s.paged, s.featuredID);
    });

    $('.case-studies__load-more a').on('click', function() {
        s.paged++;
        s.empty = 0;
        $(this).text('Loading...');
        getPosts(s.category, s.filter, s.search, s.paged, s.featuredID);
    });
}

//// FUNCTIONS

function getPosts(cat, filter, search, paged, featured) {
    var url = window.location.href;
    $.ajax({
        url : "/wp-admin/admin-ajax.php",
        type : 'post',
        data : {
            action: 'get_case_studies',
            cat: cat,
            sort: filter,
            search: search,
            paged: paged,
            featured: featured,
            url: url
        },
        dataType:'html',
        success : function(response) {    
            if(s.empty == 1) {
                $('.case-studies__results').empty();
                $('.case-studies__loader').removeClass('hidden');
            }
            var current = $(document).scrollTop();
            $("html, body").animate({ scrollTop: current }, "slow");
            setTimeout(() => {
                $('.case-studies__results').append(JSON.parse(response)['html']);
                $('.case-studies__loader').addClass('hidden');

                if(JSON.parse(response)['max_pages'] <= s.paged) {
                    $('.case-studies__load-more').addClass('hidden');
                } else {
                    $('.case-studies__load-more').removeClass('hidden');
                    $('.case-studies__load-more a').text('Load more');
                }

                if(s.category == s.initCat) {
                    $('.case-studies__featured').css('display', 'flex');
                } else {
                    $('.case-studies__featured').hide();
                }
            }, 200);            
        },
    });
}

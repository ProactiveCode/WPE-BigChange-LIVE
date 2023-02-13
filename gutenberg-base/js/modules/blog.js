//// SETTINGS
let s;
function settings(){
    s = {
        category: 0,
        filter: 'desc',
        search: '',
        paged: 1,
        empty: 0,
        urlPopulate: false
    }
};

//// EXPORT FUNCTION
export function init(){
    settings();
    bindUIActions();
    //if get query s.cat = val update select too
    if($('.page-template-template-blog').length > 0) {
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
        $('.blog__sub').hide();
        if(catID !== undefined) {
            var links = $('.blog__category option[data-children-ids~="' + catID + '"]');
            s.category = catID;
            s.urlPopulate = true;

            if(links.val() !== undefined) {
                $('.blog__category select').val(links.val()).change();
                $('.blog__sub select').val(catID);
            } else {
                $('.blog__category select').val(catID).change();
            }
        } else {
            getPosts(s.category, s.filter, s.search, s.paged);
        }

    }
    
}

//// ACTIONS
function bindUIActions(){
    $('.blog__category select').on('change', function () {
        if(s.urlPopulate == false) {
            s.category = $(this).children("option:selected").val();
        }
        s.urlPopulate = false;
        s.empty = 1;
        s.paged = 1;

        $('.blog__sub').hide();

        var subcatids = $(this).children("option:selected").data('children-ids');
        var subcatnames = $(this).children("option:selected").data('children-names');

        if(subcatnames !== undefined && subcatids !== undefined && subcatids !== '' && subcatnames !== '') {
            if(subcatids.toString().indexOf(',') > -1 && subcatnames.toString().indexOf(',') > -1) {
                subcatids = $(this).children("option:selected").data('children-ids').split(' , ');
                subcatnames = $(this).children("option:selected").data('children-names').split(' , ');
                populateSubCats(subcatids, subcatnames);
            } else {
                populateSubCats(subcatids.toString().split(), subcatnames.toString().split());
            }
        }
        getPosts(s.category, s.filter, s.search, s.paged);
    });

    $('.blog__sub select').on('change', function () {
        s.category = $(this).children("option:selected").val();
        if(s.category == 0) {
            s.category = $('.blog__category select').children("option:selected").val();
        }
        s.empty = 1;
        s.paged = 1;
        getPosts(s.category, s.filter, s.search, s.paged);
    });

    $('.blog__sort select').on('change', function () {
        s.filter = $(this).children("option:selected").val();
        s.empty = 1;
        s.paged = 1;
        getPosts(s.category, s.filter, s.search, s.paged);
    });

    $('.blog__form').on('submit', function(e) {
        e.preventDefault();
        s.search = $('.search-field').val();
        s.empty = 1;
        s.paged = 1;
        getPosts(s.category, s.filter, s.search, s.paged);
    });

    $('.blog__form .search-field').on('blur keyup', function(e) {
        if(!$(this).val()) {
            s.paged = 1;
            s.empty = 1;
            s.search = '';
            getPosts(s.category, s.filter, s.search, s.paged);
        }
      
    });

    $('.blog__load-more a').on('click', function() {
        s.paged++;
        s.empty = 0;
        $(this).text('Loading...');
        getPosts(s.category, s.filter, s.search, s.paged);
    });

    $(document).on('click', '.card__category p', function(e) {
        e.preventDefault();
        var newUrl = $(this).data('href');
        document.location.href = newUrl;
    });

}

//// FUNCTIONS
function populateSubCats(ids, names) {
    var ids = ids;
    var names = names;
    $('.blog__sub select').empty();
    $('.blog__sub select').append('<option value="0">All</option>');
    for (let index = 0; index < names.length; index++) {
        $('.blog__sub select').append('<option value="' + ids[index] + '">' + names[index] + '</option>');
    }
    if($('.blog__sub option').length > 0) {
        $('.blog__sub').show();
    }
}

function getPosts(cat, filter, search, paged) {
    $.ajax({
        url : "/wp-admin/admin-ajax.php",
        type : 'post',
        data : {
            action: 'get_blog',
            cat: cat,
            sort: filter,
            search: search,
            paged: paged
        },
        dataType:'html',
        success : function(response) {    
            window.history.replaceState(null, null, "?catid="+ cat); 
            if(s.empty == 1) {
                $('.blog__results').empty();
                $('.blog__loader').removeClass('hidden');
            }
            var current = $(document).scrollTop();
            $("html, body").animate({ scrollTop: current }, "slow");
            setTimeout(() => {
                $('.blog__results').append(JSON.parse(response)['html']);
                $('.blog__loader').addClass('hidden');

                if(JSON.parse(response)['max_pages'] <= s.paged) {
                    $('.blog__load-more').addClass('hidden');
                } else {
                    $('.blog__load-more').removeClass('hidden');
                    $('.blog__load-more a').text('Load more');
                }
            }, 200);            
        },
    });
}

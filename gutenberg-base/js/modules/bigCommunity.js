//// SETTINGS
let s;
function settings(){
    s = {
        category: 0,
        filter: 'desc',
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
    // if($('.page-template-template-ceo-blog').length > 0) {
    //     getBigCommunityPosts(s.category, s.filter, s.paged);
    // }

    if($('.page-template-template-big-community').length > 0) {
        getBigCommunityPosts(s.category, s.filter, s.paged);
    }


    
}

//// ACTIONS
function bindUIActions(){
    $('.blog__load-more--bigcommunity a').on('click', function() {
        s.paged++;
        s.empty = 0;
        $(this).text('Loading...');
        getBigCommunityPosts(s.category, s.filter, s.paged);
    });

    $(document).on('click', '.card__category p', function(e) {
        e.preventDefault();
        var newUrl = $(this).data('href');
        document.location.href = newUrl;
    });

}

//// FUNCTIONS
function getBigCommunityPosts(cat, filter, paged) {
    var url = window.location.href;
    $.ajax({
        url : "/wp-admin/admin-ajax.php",
        type : 'post',
        data : {
            action: 'get_big_community',
            cat: cat,
            sort: filter,
            paged: paged,
            url: url
        },
        dataType:'html',
        success : function(response) {    
            if(s.empty == 1) {
                $('.blog__results--bigcommunity').empty();
                $('.blog__loader--bigcommunity').removeClass('hidden');
            }
            var current = $(document).scrollTop();
            $("html, body").animate({ scrollTop: current }, "slow");
            setTimeout(() => {
                $('.blog__results--bigcommunity').append(JSON.parse(response)['html']);
                $('.blog__loader--bigcommunity').addClass('hidden');

                if(JSON.parse(response)['max_pages'] <= s.paged) {
                    $('.blog__load-more--bigcommunity').addClass('hidden');
                } else {
                    $('.blog__load-more--bigcommunity').removeClass('hidden');
                    $('.blog__load-more--bigcommunity a').text('Load more');
                }
            }, 200);            
        },
    });
}

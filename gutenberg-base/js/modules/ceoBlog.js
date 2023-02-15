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
    if($('.page-template-template-ceo-blog').length > 0) {
        getPosts(s.category, s.filter, s.paged);
    }

    // if($('.page-template-template-big-community').length > 0) {
    //     getPosts(s.category, s.filter, s.paged);
    // }


    
}

//// ACTIONS
function bindUIActions(){
    $('.blog__load-more--ceo a').on('click', function() {
        s.paged++;
        s.empty = 0;
        $(this).text('Loading...');
        getPosts(s.category, s.filter, s.paged);
    });

    $(document).on('click', '.card__category p', function(e) {
        e.preventDefault();
        var newUrl = $(this).data('href');
        document.location.href = newUrl;
    });

}

//// FUNCTIONS
function getPosts(cat, filter, paged) {
    var url = window.location.href;
    $.ajax({
        url : "/wp-admin/admin-ajax.php",
        type : 'post',
        data : {
            action: 'get_ceo_blog',
            cat: cat,
            sort: filter,
            paged: paged,
            url: url
        },
        dataType:'html',
        success : function(response) {    
            if(s.empty == 1) {
                $('.blog__results--ceo').empty();
                $('.blog__loader--ceo').removeClass('hidden');
            }
            var current = $(document).scrollTop();
            $("html, body").animate({ scrollTop: current }, "slow");
            setTimeout(() => {
                $('.blog__results--ceo').append(JSON.parse(response)['html']);
                $('.blog__loader--ceo').addClass('hidden');

                if(JSON.parse(response)['max_pages'] <= s.paged) {
                    $('.blog__load-more--ceo').addClass('hidden');
                } else {
                    $('.blog__load-more--ceo').removeClass('hidden');
                    $('.blog__load-more--ceo a').text('Load more');
                }
            }, 200);            
        },
    });
}

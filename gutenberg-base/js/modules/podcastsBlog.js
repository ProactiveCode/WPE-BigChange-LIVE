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
    if($('.page-template-template-podcasts').length > 0) {
        getPosts(s.category, s.filter, s.paged);
    }
    
}

//// ACTIONS
function bindUIActions(){
    $('.blog__load-more--podcast a').on('click', function() {
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
            action: 'get_podcasts',
            cat: cat,
            sort: filter,
            paged: paged,
            url: url
        },
        dataType:'html',
        success : function(response) {    
            if(s.empty == 1) {
                $('.blog__results--podcast').empty();
                $('.blog__loader--podcast').removeClass('hidden');
            }
            var current = $(document).scrollTop();
            $("html, body").animate({ scrollTop: current }, "slow");
            setTimeout(() => {
                $('.blog__results--podcast').append(JSON.parse(response)['html']);
                $('.blog__loader--podcast').addClass('hidden');

                if(JSON.parse(response)['max_pages'] <= s.paged) {
                    $('.blog__load-more--podcast').addClass('hidden');
                } else {
                    $('.blog__load-more--podcast').removeClass('hidden');
                    $('.blog__load-more--podcast a').text('Load more');
                }
            }, 200);            
        },
    });
}

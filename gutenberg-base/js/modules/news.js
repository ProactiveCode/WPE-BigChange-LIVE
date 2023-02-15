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
    if($('.page-template-template-news').length > 0) {
        getPosts(s.category, s.filter, s.paged);
    }
    
}

//// ACTIONS
function bindUIActions(){
    $('.blog__load-more--news a').on('click', function() {
        s.paged++;
        s.empty = 0;
        $(this).text('Loading...');
        getPosts(s.category, s.filter, s.paged);
    });

    $('.blog__sort--news select').on('change', function () {
        s.filter = $(this).children("option:selected").val();
        s.empty = 1;
        s.paged = 1;
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
            action: 'get_news',
            cat: cat,
            sort: filter,
            paged: paged,
            url: url
        },
        dataType:'html',
        success : function(response) {    
            if(s.empty == 1) {
                $('.blog__results--news').empty();
                $('.blog__loader--news').removeClass('hidden');
            }
            var current = $(document).scrollTop();
            $("html, body").animate({ scrollTop: current }, "slow");
            setTimeout(() => {
                $('.blog__results--news').append(JSON.parse(response)['html']);
                $('.blog__loader--news').addClass('hidden');

                if(JSON.parse(response)['max_pages'] <= s.paged) {
                    $('.blog__load-more--news').addClass('hidden');
                } else {
                    $('.blog__load-more--news').removeClass('hidden');
                    $('.blog__load-more--news a').text('Load more');
                }
            }, 200);            
        },
    });
}

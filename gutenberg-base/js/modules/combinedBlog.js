//// SETTINGS
let s;
function settings(){
    s = {
        category: 0,
        filter: 'desc',
        search: '',
        paged: 1,
        empty: 0,
        urlPopulate: false,
        currentSelectVals: [],
        currentSelectNames: [],
        csSelectVals: [],
        csSelectNames: [],
    }
};

//// EXPORT FUNCTION
export function init(){
    settings();
    bindUIActions();
    //if get query s.cat = val update select too
    if($('.page-template-template-combined-blog').length > 0) {
        $('.combined-blog__category select option').each(function() {
            s.currentSelectVals.push($(this).val());
            s.currentSelectNames.push($(this).text());
        });

        var getDataVals = $('.combined-blog__type option[value="10"]').data('children-ids');
        var getDataNames = $('.combined-blog__type option[value="10"]').data('children-names');
        
        s.csSelectVals = getDataVals.split(' , ');
        s.csSelectNames = getDataNames.split(' , ');

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
            var links = $('.combined-blog__category option[data-children-ids~="' + catID + '"]');
            s.category = catID;
            s.urlPopulate = true;

            if(catID == 10 || catID == 8 || catID == 162) {
                $('.combined-blog__type select').val(catID).change();
                if(catID == 8 || catID == 162) {
                    $('.combined-blog__category').hide();
                }
            } else {
                if(s.csSelectVals.indexOf(catID) >= 0) {
                    $('.combined-blog__type select').val(10);
                    swapOptions('cs');
                    $('.combined-blog__category select').val(catID).change(); 
                } else {
                    if(links.val() !== undefined) {
                        $('.combined-blog__category select').val(links.val()).change();
                    } else {
                        $('.combined-blog__category select').val(catID).change();
                    }
                }
            }
        } else {
            getPosts(s.category, s.filter, s.search, s.paged);
        }

    }
    
}

//// ACTIONS
function bindUIActions(){
    $('.combined-blog__category select').on('change', function () {
        if(s.urlPopulate == false) {
            s.category = $(this).children("option:selected").val();
        }
        s.urlPopulate = false;
        s.empty = 1;
        s.paged = 1;

        getPosts(s.category, s.filter, s.search, s.paged);
    });

    $('.combined-blog__type select').on('change', function () {
        if(s.urlPopulate == false) {
            s.category = $(this).children("option:selected").val();
        }
        s.urlPopulate = false;
        s.empty = 1;
        s.paged = 1;
        
        if(s.category == 10) {
            swapOptions('cs');
        } else {
            swapOptions();
        }

        if(s.category == 8 || s.category == 162) {
            $('.combined-blog__category').hide();
        } else {
            $('.combined-blog__category').show();
        }

        getPosts(s.category, s.filter, s.search, s.paged);
    });

    $('.combined-blog__sort select').on('change', function () {
        s.filter = $(this).children("option:selected").val();
        s.empty = 1;
        s.paged = 1;
        getPosts(s.category, s.filter, s.search, s.paged);
    });

    $('.combined-blog__load-more a').on('click', function() {
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


    var timer = 0;
    function runSearch(){ 
        getPosts(s.category, s.filter, s.search, s.paged);
    }

    $('.combined-blog__search input').on('keyup',function() {
        s.search = $('.combined-blog__search input').val().toLowerCase(); //put to lower case to prevent issues
        s.empty = 1;
        s.paged = 1;

        if (timer) {
            clearTimeout(timer);
        }
        timer = setTimeout(runSearch, 400); 
    });


    if($('.combined-blog__carousel').length > 0) {
        var blogCarousel = $('.combined-blog__carousel')
        blogCarousel.owlCarousel({
            margin: 10,
            loop: false,
            rewind: true,
            items: 1,
            autoplay:true,
            autoplayTimeout:7000,
            autoplayHoverPause:true,
            dots: true,
            nav: true,
            navText: ["<div class='owl-nav-right'><div class='owl-nav-right__wrapper'><div class='owl-nav-right__arrow'></div></div></div><span class='offscreen'>Go to next slide</span>","<div class='owl-nav-left'><div class='owl-nav-left__wrapper'><div class='owl-nav-left__arrow'></div></div></div><span class='offscreen'>Go to previous slide</span>"]
        });
    }
}

//// FUNCTIONS
function swapOptions(type) {
    if(type == 'cs') {
        $('.combined-blog__category select option:gt(0)').remove();
        for (let index = 0; index < s.csSelectNames.length; index++) {
            var option = $('<option></option>').attr("value", s.csSelectVals[index]).text(s.csSelectNames[index]);
            $('.combined-blog__category select').append(option);
        }
    } else {
        $('.combined-blog__category select option:gt(0)').remove();
        for (let index = 1; index < s.currentSelectNames.length; index++) {
            var option = $('<option></option>').attr("value", s.currentSelectVals[index]).text(s.currentSelectNames[index]);
            $('.combined-blog__category select').append(option);
        }
    }
}

function getPosts(cat, filter, search, paged) {
    var url = window.location.href;
    var offset = 0;

    if(cat == 0) {
        offset = 3;
        $('.combined-blog__carousel').show();
    } else {
        $('.combined-blog__carousel').fadeOut();
    }

    $.ajax({
        url : "/wp-admin/admin-ajax.php",
        type : 'post',
        data : {
            action: 'get_combined_blog',
            cat: cat,
            sort: filter,
            search: search,
            paged: paged,
            offset: offset,
            url: url
        },
        dataType:'html',
        success : function(response) {  
            // console.log(response);  
            window.history.replaceState(null, null, "?catid="+ cat); 
            if(s.empty == 1) {
                $('.combined-blog__results').empty();
                $('.combined-blog__loader').removeClass('hidden');
            }
            var current = $(document).scrollTop();
            $("html, body").animate({ scrollTop: current }, "slow");
            setTimeout(() => {
                $('.combined-blog__results').append(JSON.parse(response)['html']);
                $('.combined-blog__loader').addClass('hidden');

                if(JSON.parse(response)['max_pages'] <= s.paged) {
                    $('.combined-blog__load-more').addClass('hidden');
                } else {
                    $('.combined-blog__load-more').removeClass('hidden');
                    $('.combined-blog__load-more a').text('Load more');
                }
            }, 200);            
        },
    });
}

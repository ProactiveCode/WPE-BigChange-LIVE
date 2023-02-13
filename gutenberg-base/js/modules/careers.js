//// SETTINGS
let s;
function settings(){
    s = {
        catsSelected: [],
        locsSelected: [],
        type: 'OR',
    }
};
//// EXPORT FUNCTION
export function init(){
    settings();
    bindUIActions();
    $('.careers__buttons .select').click();
}
//// ACTIONS
function bindUIActions(){
    $('.careers__buttons .select').on('click', function() {
        s.catsSelected = [];
        s.locsSelected = [];
        $('.careers__filters input[type=checkbox]').each(function() {
            $(this).prop('checked', true);
            if($(this).hasClass('location')) {
                s.locsSelected.push($(this).data('sector'));
            }
            if($(this).hasClass('category')) {
                s.catsSelected.push($(this).data('sector'));
            }
        });

        s.type = 'OR';
        getPosts(s.catsSelected, s.locsSelected, s.type);
    });

    $('.careers__buttons .deselect').on('click', function() {
        $('.careers__filters input[type=checkbox]').each(function() {
            $(this).prop('checked', false);
        });
        s.catsSelected = [];
        s.locsSelected = [];

        s.type = 'OR';
        getPosts(s.catsSelected, s.locsSelected, s.type);
    });

    $('.careers__filters input.category').on('change', function() {
        s.catsSelected = [];
        $('.careers__filters input.category:checked').each(function() {
            s.catsSelected.push($(this).data('sector'));
        });
        s.type = 'OR';
        getPosts(s.catsSelected, s.locsSelected, s.type);
    });

    $('.careers__filters input.location').on('change', function() {
        s.locsSelected = [];
        $('.careers__filters input.location:checked').each(function() {
            s.locsSelected.push($(this).data('sector'));
        });
        
        s.type = 'OR';
        getPosts(s.catsSelected, s.locsSelected, s.type);
    });

    $('.careers__category-content .apply').on('click', function() {
        var cat = $(this).data('term');
        s.catsSelected = [];

        $('.careers__filters input.category').each(function() {
            var filtercat = $(this).data('sector');
            $(this).prop('checked', false);

            if(filtercat == cat) {
                $(this).prop('checked', true);
                s.catsSelected.push($(this).data('sector'));
            }
        });
        s.type = 'AND';
        getPosts(s.catsSelected, s.locsSelected, s.type);
    });
}

//// FUNCTIONS
function getPosts(cats, locs, type) {
    $.ajax({
        url : "/wp-admin/admin-ajax.php",
        type : 'post',
        data : {
            action: 'get_jobs',
            cats: cats,
            locs: locs,
            type: type,
        },
        dataType:'html',
        success : function(response) {    
            $('.careers__listings').empty();
            $('.careers__loader').removeClass('hidden');
            setTimeout(() => {
                $('.careers__listings').append(JSON.parse(response)['html']);
                $('.careers__loader').addClass('hidden');
            }, 200);            
        },
    });
}
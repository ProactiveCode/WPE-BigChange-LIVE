//// SETTINGS
let s;
function settings(){
    s = {
        
    }
};
//// EXPORT FUNCTION
export function init(){
    settings();
    bindUIActions();
}
//// ACTIONS
function bindUIActions(){
    $('.ptt-tool__item').on('mouseenter', function() {
        $(this).find('.ptt-tool__item-icon img').attr('src', $(this).data('hover-image'));
        var mainImage = $(this).data('image');
        var link = $(this).data('link');
        $('.ptt-tool__image img').attr('src', mainImage);
        // $('.ptt-tool__button a').attr('href', link);
    });

    $('.ptt-tool__item').on('mouseleave', function() {
        $(this).find('.ptt-tool__item-icon img').attr('src', $(this).data('icon'));
        $('.ptt-tool__image img').attr('src', $('.ptt-tool__image').data('original-image'));
        // $('.ptt-tool__button a').attr('href', link);
    });

    $('.ptt-tool__mobile-item').on('click', function() {
        var link = $(this).data('link');
        document.location.href = link;
    });
}

//// FUNCTIONS
// bootstrap プルダウンメニュー動作
$(function(){
    $('.dropdown-menu .dropdown-item').click(function(){
        var visibleItem = $('.dropdown-toggle', $(this).closest('.dropdown'));
        visibleItem.text($(this).attr('value'));
    });
});

// モーダルコンテンツ表示
$('.js-modal-open').on('click',function(){
    $('.js-modal').fadeIn();
    return false;
});
$('.js-modal-close').on('click',function(){
    $('.js-modal').fadeOut();
    return false;
});



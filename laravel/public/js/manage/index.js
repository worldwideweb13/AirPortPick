// bootstrap プルダウンメニュー動作
$(function () {
    $('.dropdown-menu .dropdown-item').click(function () {
        var visibleItem = $('.dropdown-toggle', $(this).closest('.dropdown'));
        visibleItem.text($(this).attr('value'));
    });
});
// モーダルコンテンツ表示
$(function(){
    $('.js-modal-open').each(function(){
        $(this).on('click',function(){
            var target = $(this).data('target');
            var modal = document.getElementById(target);
            if(target == "modal01"){
                var tds = $($(this).parent().parent().get(0)).find('td');
                var oid = tds[0].textContent;
                $("#m_onum").text(oid);
            }
            $(modal).fadeIn();
            return false;
        });
    });
    $('.js-modal-close').on('click',function(){
        $('.js-modal').fadeOut();
        return false;
    }); 
});

// 注文詳細表示
$()
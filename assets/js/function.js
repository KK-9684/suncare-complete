$(function() {
    $(".ham-main-menu-item").on("click", function() {
        if (!$(this).next().hasClass('hide')) {
            $(this).next().toggleClass('hide');
            $(this).find('.ham-main-menu-icon').text('＋')
            return;
        }
        $('.ham-menu').find(".ham-sub-menu-wrapper").addClass('hide');
        $(this).next().toggleClass('hide');
        $('.ham-menu').find(".ham-main-menu-icon").text('＋');
        $(this).find('.ham-main-menu-icon').text('ー')
    });
    $(".header-sp-hamburger").on("click", function() {
        $(".ham-menu").toggleClass('hide');
    });
});
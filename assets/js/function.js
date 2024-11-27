$(function() {
    $('img').removeAttr("title");
    // hamburger button
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
    $(window).resize(function() {
        $(".ham-menu").addClass('hide');
        $(".menu-text-item-menu").addClass('hide');        
    });
    // Control scroll-top button hide/show 
    $(window).scroll(function() {
        $(".ham-menu").addClass('hide');
        $(".menu-text-item-menu").addClass('hide');        
        if ($(this).scrollTop() > 100) {
            $('#scrollToTop').fadeIn();
        } else {
            $('#scrollToTop').fadeOut();
        }
    });
    $('#scrollToTop').click(function() {
        $('html, body').animate({ scrollTop: 0 }, 100);
        return false;
    });

    // menu buttons
    $('.menu-text-item').hover(function() {
       $(this).next().removeClass('hide'); 
    });
    $('.menu-text-item-wrapper').on("mouseleave", function() {
        $(this).find('.menu-text-item-menu').addClass('hide');
    });    
    $('.menu-text-item-menu-item').on("click", function() {        
        $(this).parent().toggleClass('hide');
    });
});

(function ($) {
    "use strict";

/*========================================*/
/*  TOP Menu Stick
/*========================================*/
    var sticky_menu = $('#sticker');
    var pos = sticky_menu.position();
    if (sticky_menu.length) {
        var windowpos = sticky_menu.offset().top;
        $(window).on('scroll', function() {
            var windowpos = $(window).scrollTop();
            if (windowpos > pos.top) {
                sticky_menu.addClass('stick');
            } else {
                sticky_menu.removeClass('stick');
            }
        });
    }

/*========================================*/
/*  jQuery Active Class
/*========================================*/
    $(function() {
        var pgurl = window.location.href.substr(window.location.href
                                                .lastIndexOf("/")+1);
        $(".main-menu ul li a, .mobile-menu ul li a").each(function(){
            if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
                $(this).addClass("active");
        })
    });

/*========================================*/
/*  jQuery MeanMenu
/*========================================*/
    $('.mobile-menu nav').meanmenu({
        meanScreenWidth: "768",
        meanMenuContainer: ".mobile-menu"
    });

/*========================================*/
/*  wow js
/*========================================*/
    new WOW().init();

/*========================================*/
/*  home-carousel-slider
/*========================================*/
    $(".home-carousel").owlCarousel({
        autoPlay: false,
        slideSpeed:2000,
        pagination:true,
        navigation:false,
        items : 1,
        itemsDesktop : [1199,1],
        itemsDesktopSmall : [980,1],
        itemsTablet: [768,1],
        itemsMobile : [479,1],
    });

/*========================================*/
/*  animated-text-slider
/*========================================*/
    $(".animated-text").owlCarousel({
        autoPlay: false,
        slideSpeed:2000,
        pagination:false,
        navigation:true,
        navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        items : 1,
        itemsDesktop : [1199,1],
        itemsDesktopSmall : [980,1],
        itemsTablet: [768,1],
        itemsMobile : [479,1],
    });

/*========================================*/
/*  change-text-slider
/*========================================*/
    $(".change-text").owlCarousel({
        autoPlay: false,
        slideSpeed:2000,
        pagination:false,
        navigation:true,
        navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        items : 1,
        itemsDesktop : [1199,1],
        itemsDesktopSmall : [980,1],
        itemsTablet: [768,1],
        itemsMobile : [479,1],
    });

/*========================================*/
/*  Background Video
/*========================================*/
    jQuery("#video_yt").YTPlayer();

/*========================================*/
/*  testimonial-slider
/*========================================*/
    $(".testimonial-slider").owlCarousel({
        autoPlay: false,
        slideSpeed:2000,
        pagination:false,
        navigation:true,
        items : 1,
        transitionStyle : "backSlide",
        navigationText:["<i class='fa fa-long-arrow-left'></i>","<i class='fa fa-long-arrow-right'></i>"],
        itemsDesktop : [1199,1],
        itemsDesktopSmall : [980,1],
        itemsTablet: [768,1],
        itemsMobile : [479,1],
    });

/*========================================*/
/*  blog-slider
/*========================================*/
    $(".blog-slider").owlCarousel({
        autoPlay: false,
        slideSpeed:2000,
        pagination:false,
        navigation:true,
        items : 3,
        /* transitionStyle : "fade", */    /* [This code for animation ] */
        navigationText:["<i class='fa fa-long-arrow-left'></i>","<i class='fa fa-long-arrow-right'></i>"],
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [980,2],
        itemsTablet: [768,1],
        itemsMobile : [479,1],
    });

/*========================================*/
/*  cart-plus-minus-button
/*========================================*/

    $(".cart-plus-minus").append('<div class="dec qtybutton">-</div><div class="inc qtybutton">+</div>');
    $(".qtybutton").on("click", function() {
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();
        if ($button.text() == "+") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        $button.parent().find("input").val(newVal);
    });

/*========================================*/
/*  scrollUp
/*========================================*/
    $.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });

/*========================================*/
/*  tooltip
/*========================================*/

    $('[data-toggle="tooltip"]').tooltip();

/*========================================*/
/*  textillate
/*========================================*/

    $('.tlt').textillate({
        loop: true
    });

})(jQuery);

(function($) {
    $( document ).ready(function() {
        'use strict';
        const swiper = new Swiper('.js-main-slider', {
            loop: true,
            allowTouchMove: false,
            autoplay: {
                delay: 42000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    });
})(jQuery);

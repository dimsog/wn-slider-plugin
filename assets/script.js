(function () {
    var $elements = document.querySelectorAll('.dimsog-slider');
    $elements.forEach(function ($element) {
        new Swiper($element.dataset.swiperSelector, {
            pagination: {
                el: ".swiper-pagination",
            },
        });
    });
})();

(function () {
    var $elements = document.querySelectorAll('.dimsog-slider');
    $elements.forEach(function ($element) {
        var config = {};
        if ($element.dataset.swiperPagination) {
            config.pagination = {
                el: ".swiper-pagination"
            };
        }
        if ($element.dataset.navigation) {
            config.navigation = {
                nextEl: $element.dataset.swiperSelector + '-swiper-button-next',
                prevEl: $element.dataset.swiperSelector + '-swiper-button-next'
            }
        }
        new Swiper($element.dataset.swiperSelector, config);
    });
})();

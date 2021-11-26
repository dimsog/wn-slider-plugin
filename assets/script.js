(function () {
    var $elements = document.querySelectorAll('.dimsog-slider');
    $elements.forEach(function ($element) {
        var config = {};
        if ($element.dataset.swiperPagination) {
            config.pagination = {
                el: ".swiper-pagination"
            };
        }
        new Swiper($element.dataset.swiperSelector, config);
    });
})();

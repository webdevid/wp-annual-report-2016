jQuery(function ($) {
    var owl = $(".owl-carousel");

    owl.owlCarousel({
        itemsMobile: [479, 1], // itemsMobile disabled - inherit from itemsTablet option
        scrollPerPage: true,
        autoPlay: true,
        addClassActive: true,
        pagination: true
    });

});
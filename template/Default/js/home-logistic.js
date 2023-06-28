//lightSlider


$(document).ready(function() {

    $("#content-slider").lightSlider({
        item: 4,
        keyPress: !0,
        speed: 600,
        pause: 6e3,
        slideMargin: 6,
        auto: !0,
        loop: !0,
        responsive: [{
            breakpoint: 800,
            settings: {
                item: 3,
                slideMove: 1,

            }
        }, {
            breakpoint: 480,
            settings: {
                item: 2,
                slideMove: 1,
            }

        }]


    });

    $('#image-gallery').lightSlider({
        gallery: true,
        item: 4,
        slideMove: 4,
        thumbItem: 9,
        slideMargin: 0,
        speed: 600,
        pause: 4e3,
        auto: true,
        loop: true,

        onSliderLoad: function() {
            $('#image-gallery').removeClass('cS-hidden');
        }
    });


    $('#lightSlider').lightSlider({
        gallery: true,
        item: 1,
        slideMove: 1,
        loop: true,
        speed: 2e3,
        pause: 5e3,
        auto: !0,
        slideMargin: 0,
        pager: !1
    });
});
//lightGallery
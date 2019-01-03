$(document).on('ready', function () {
    $('.homepage_slider').slick({
        infinite: true,
        speed: 800,
        fade: true,
        cssEase: 'linear',
        autoplay: true,
        autoplaySpeed: 6000
    });
    $(".slider").slick({
        lazyLoad: 'ondemand',
        dots: false,
        infinite: true,
        centerMode: false,
        slidesToShow: 6,
        slidesToScroll: 2,
        adaptiveHeight: false,
        autoplay: true,
        autoplaySpeed: 4000,
        responsive: [
            {
                breakpoint: 1150,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 2,
                    infinite: true
                }
            },
            {
                breakpoint: 950,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true
                }
            },
            {
                breakpoint: 750,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
});



$(document).ready(function () {
    $(".slide-list").slick({
        autoplay: true,
        autoplaySpeed: 3500,
        slidesToShow: 6,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 1008,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 800,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
        ],
    });

    $(window).on("load resize orientationchange", function () {
        $(".mission-list").each(function () {
            var $mission = $(this);
            if ($(window).width() > 767) {
                if ($mission.hasClass("slick-initialized")) {
                    $mission.slick("unslick");
                }
            } else {
                if (!$mission.hasClass("slick-initialized")) {
                    $mission.slick({
                        slidesToShow: 1,
                        autoplay: true,
                        autoplaySpeed: 3500,
                        slidesToScroll: 1,
                        mobileFirst: true,
                        arrows: false,
                        dots: true,
                    });
                }
            }
        });
    });

    $(window).on("load resize orientationchange", function () {
        $(".getting-list").each(function () {
            var $getting = $(this);
            if ($(window).width() > 767) {
                if ($getting.hasClass("slick-initialized")) {
                    $getting.slick("unslick");
                }
            } else {
                if (!$getting.hasClass("slick-initialized")) {
                    $getting.slick({
                        autoplay: true,
                        autoplaySpeed: 3500,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        mobileFirst: true,
                        arrows: false,
                        dots: true,
                    });
                }
            }
        });
    });

    $(window).on("load resize orientationchange", function () {
        $(".step-list").each(function () {
            var $step = $(this);
            if ($(window).width() > 1025) {
                if ($step.hasClass("slick-initialized")) {
                    $step.slick("unslick");
                }
            } else if ($(window).width() > 768) {
                if (!$step.hasClass("slick-initialized")) {
                    $step.slick({
                        autoplay: true,
                        autoplaySpeed: 3500,
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        mobileFirst: true,
                        arrows: false,
                        dots: true,
                    });
                }
            } else {
                if (!$step.hasClass("slick-initialized")) {
                    $step.slick({
                        autoplay: true,
                        autoplaySpeed: 3500,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        mobileFirst: true,
                        arrows: false,
                        dots: true,
                    });
                }
            }
        });
    });

    $(window).on("load resize orientationchange", function () {
        $(".products-list").each(function () {
            var $products = $(this);
            if ($(window).width() > 767) {
                if ($products.hasClass("slick-initialized")) {
                    $products.slick("unslick");
                }
            } else {
                if (!$products.hasClass("slick-initialized")) {
                    $products.slick({
                        slidesToShow: 1,
                        autoplay: true,
                        autoplaySpeed: 3500,
                        slidesToScroll: 1,
                        mobileFirst: true,
                        arrows: false,
                        dots: true,
                    });
                }
            }
        });
    });
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 3500,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 3,
            },
        },
    });
});

$(document).ready(function () {
    $(".system-content").slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 4,
                },
            },
            {
                breakpoint: 520,
                settings: {
                    slidesToShow: 3,
                },
            },
        ],
    });
    $(".owl-carousel").owlCarousel({
        margin: 30,
        nav: true,
        navText: [
            "<div class='nav-btn prev-slide'></div>",
            "<div class='nav-btn next-slide'></div>",
        ],
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 4,
            },
        },
    });
});

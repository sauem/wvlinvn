const PREV_BTN = '<button type="button" class="slick-prev"><svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">\n' +
    '<path d="M11.885 18.23L10.115 20L0.115009 10L10.115 0L11.885 1.77L3.65501 10L11.885 18.23Z" fill="#79018C" fill-opacity="0.8"/>\n' +
    '</svg></button>';
const NEXT_BTN = '<button type="button" class="slick-next"><svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">\n' +
    '<path d="M0.11499 18.23L1.88499 20L11.885 10L1.88499 0L0.11499 1.77L8.34499 10L0.11499 18.23Z" fill="#79018C" fill-opacity="0.8"/>\n' +
    '</svg></button>';

const slickDefault = {
    dots: false,
    infinite: true,
    autoplay: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow: PREV_BTN,
    nextArrow: NEXT_BTN,
};

$('.slider-home').slick(slickDefault)

$('.videos-carousel').slick({
    ...slickDefault,
    slidesToShow: 3,
    responsive: [
        {
            breakpoint: 567,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
            }
        },
        {
            breakpoint: 780,
            settings: {
                slidesToShow: 1,
                infinite: true,
            }
        },
    ]
});
$('.members-carousel').slick({
    ...slickDefault,
    slidesToShow: 3,
    responsive: [
        {
            breakpoint: 567,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
            }
        },
        {
            breakpoint: 780,
            settings: {
                slidesToShow: 1,
                infinite: true,
            }
        },
    ]

});
$('.brands-carousel').slick({
    ...slickDefault,
    slidesToShow: 6,
    arrows: true,
    responsive: [
        {
            breakpoint: 567,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,

            }
        },
        {
            breakpoint: 780,
            settings: {
                slidesToShow: 2,
            }
        },
    ]
});

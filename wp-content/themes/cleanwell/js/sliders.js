$(document).ready(function()
{
    var slickElement = $('.video_reviews');
    console.log(slickElement);
    if (slickElement) {
        slickElement.not('.slick-initialized').slick({
            infinite: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            //variableWidth: true,
            //appendArrows: '#arrows',
        });
    }

});


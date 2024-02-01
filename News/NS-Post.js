// tns-slider :: slider-course
var slider = tns({
    container: '.tns-slider-recommend',
    items: 1,
    speed: 2000,
    slideBy: 'page', // TODO test it
    gutter: 0,
    edgePadding: 0,
    nav: false,
    controlsText: ['<span class="fa-solid fa-angle-left text-gray-400 text-hover-white"></span>', '<span class="fa-solid fa-angle-right text-gray-400 text-hover-white"></span>'],
    responsive: {
        640: {
            edgePadding: 20,
            gutter: 20,
            items: 2
        },
        700: {
            gutter: 30
        },
        900: {
            items: 3
        }
    }
});
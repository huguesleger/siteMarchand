/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you require will output into a single css file (app.scss in this case)
require('../css/app.scss');

require('slick-carousel');

require('bootstrap-input-spinner');


// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.
var $ = require('jquery');


$('.main-slider').slick({
    dots: true,
    rtl: false,
    arrows: false,
    adaptiveHeight: false,
    autoplay: true,
    autoplaySpeed: 8000,
    pauseOnHover: false,
    lazyLoad: 'progressive'
});

$("input[type='number']").inputSpinner();

console.log('Hello Webpack Encore! Edit me in assets/js/app.js');

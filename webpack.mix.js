const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles([
        'public/un-minify/css/bootstrap.min.css',
        'public/un-minify/css/main.css',
        'public/un-minify/css/blue.css',
        'public/un-minify/css/owl.carousel.css',
        'public/un-minify/css/owl.transitions.css',
        'public/un-minify/css/animate.min.css',
        'public/un-minify/css/rateit.css',
        'public/un-minify/css/bootstrap-select.min.css',
        'public/un-minify/css/font-awesome.css',
        'public/un-minify/css/quicksand.google.css',
        'public/un-minify/css/open_sand.google.css',
        'public/un-minify/css/mouse_memoirs.google.css',
        'public/un-minify/css/login.css',
    ], 'public/minify/css/frontend.min.css')
    .combine([
        'public/un-minify/js/jquery-1.11.1.min.js',
        'public/un-minify/js/bootstrap.min.js',
        'public/un-minify/js/bootstrap-hover-dropdown.min.js',
        'public/un-minify/js/owl.carousel.min.js',
        'public/un-minify/js/echo.min.js',
        'public/un-minify/js/jquery.easing-1.3.min.js',
        'public/un-minify/js/bootstrap-slider.min.js',
        'public/un-minify/js/jquery.rateit.min.js',
        'public/un-minify/js/lightbox.min.js',
        'public/un-minify/js/bootstrap-select.min.js',
        'public/un-minify/js/wow.min.js',
        'public/un-minify/js/scripts.js',
        'public/un-minify/js/main.js',
        'public/un-minify/js/jquery.lazy.min.js',
    ], 'public/minify/js/frontend.min.js')

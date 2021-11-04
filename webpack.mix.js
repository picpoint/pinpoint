const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css', [
//         //
//     ]);


// mix.js('resources/assets/users/js/map.js', 'public/assets/users/js/map.js');


mix.sass('resources/assets/users/scss/style.scss', 'public/assets/users/css/style.css')
    .browserSync({
        proxy: 'http://pinpoint/'
    });
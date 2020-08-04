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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/staffer.js', 'public/js')
    .js('resources/js/create_form.js', 'public/js')
    .js('resources/js/autosize.js', 'public/js')
    .sass('resources/sass/stafferstyle.scss', 'public/css')
    .sass('resources/sass/lk.scss', 'public/css')
    .sass('resources/sass/employer.scss', 'public/css')
    .sass('resources/sass/registration.scss', 'public/css')
    .sass('resources/sass/create_form.scss', 'public/css')
    .sass('resources/sass/enterTheSystem.scss', 'public/css');

mix.copyDirectory('resources/img', 'public/images');

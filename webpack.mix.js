let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
mix.styles('resources/assets/sass/app.scss', 'public/css/all.css');


mix.copyDirectory('resources/assets/img', 'public/img');
















mix.scripts(['resources/assets/js/jquery-comments.js',
             'node_modules/jquery/dist/jquery.min.js', 'node_modules/bootstrap/dist/js/bootstrap.bundle.min.js'],
    'public/js/all.js');
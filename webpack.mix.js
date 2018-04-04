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
mix.styles(['node_modules/bootstrap/dist/css/bootstrap.min.css',
            'resources/assets/css/pages_rezalps.css', 'resources/assets/css/jquery-comments.css',
            'node_modules/font-awesome.min.css/font-awesome.min.css'], 'public/css/all.css');
mix.copyDirectory('resources/assets/img', 'public/img');
mix.scripts(['resources/assets/js/jquery-comments.js',
             'node_modules/jquery/dist/jquery.min.js'],'public/js/all.js');
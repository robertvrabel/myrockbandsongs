var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function (mix) {
    mix.sass('app.scss');

    // Combine necessary javascript
    mix.scripts([
        './resources/assets/js/app.js'
    ], 'public/js/app.js', './');

    // Copy CDN javascript for local use only
    mix.copy('./bower_components/jquery/dist', 'public/js')
        .copy('./bower_components/modernizr/modernizr.js', 'public/js/modernizr.js')
        .copy('./bower_components/foundation/js/foundation.min.js', 'public/js/foundation.min.js');
});

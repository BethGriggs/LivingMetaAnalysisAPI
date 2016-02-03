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

elixir(function(mix) {
//     var jQueryPath = 'resources/assets/vendor/jquery-2.2.0.min.js';
//     var bootstrapPath = 'node_modules/bootstrap-sass/assets';
//
    mix.sass('app.css');
//       .copy(jQueryPath, 'public/js')
//       .copy(bootstrapPath + '/fonts', 'public/fonts')
//       .copy(bootstrapPath + '/javascripts/bootstrap.min.js', 'public/js');
});

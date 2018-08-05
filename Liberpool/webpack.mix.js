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
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.styles([
	'views/login-reg/css/main.css',
	'views/login-reg/css/util.css',
	'views/login-reg/vendor/bootstrap/css/bootstrap.min.css',
	'views/login-reg/fonts/font-awesome-4.7.0/css/font-awesome.min.css',
	'views/login-reg/vendor/animate/animate.css',
	'views/login-reg/vendor/css-hamburgers/hamburgers.min.css',
	'views/login-reg/vendor/select2/select2.min.css'
	], 'views/login-reg/css/all.css');
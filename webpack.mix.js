const mix = require("laravel-mix");

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

mix.js("resources/js/app.js", "public/js")
    .js("resources/js/ceform.js", "public/js")
    .js("resources/js/f2fform.js", "public/js")
    .js("resources/js/components/MultiStep.js", "public/js")
    .js("resources/js/components/currencyFormat.js", "public/js")
    .vue()
    .sass("resources/sass/app.scss", "public/css")
    .postCss("resources/css/custom.css", "public/css");

//Disable the notification of laravel mix
// mix.disableNotifications();
mix.disableSuccessNotifications();

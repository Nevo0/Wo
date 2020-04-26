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

// 1 gdzie nasz orginalny plik jest src/app.js
// 2 gdzie ma dac plik
mix
  .options({
    processCssUrls: false,
  })
  .js("src/app.js", "assets/")
  .sass("src/app.scss", "assets/");

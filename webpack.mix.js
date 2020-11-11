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

mix.react('resources/assets/js/index.js', 'public/js')
    .sass('resources/assets/sass/index.scss', 'public/css')
    .setResourceRoot('/vendor/ltm/')
    .setPublicPath('public/')
;

/*
// add the following lines to your Laravel project's webpack.mix.js to have LTM React files copied and added to the mix-manifest.json
mix.copy(['vendor/revolta77/ltm/public/js/index.js'], 'public/vendor/ltm/js/index.js')
    .copy(['vendor/revolta77/ltm/public/css/index.css'], 'public/vendor/ltm/css/index.css')
    .copy(['vendor/revolta77/ltm/public/images'], 'public/vendor/ltm/images')
;
*/

if (!mix.inProduction()) {
    mix.webpackConfig({
        devtool: 'source-map'
    })
        .sourceMaps();
} 

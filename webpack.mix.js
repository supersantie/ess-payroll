const mix = require('laravel-mix');
const lodash = require("lodash");
const WebpackRTLPlugin = require('webpack-rtl-plugin');
const folder = {
    src: "resources/", // source files
    dist: "public/", // build files
    dist_assets: "public/assets/" //build assets files
};

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


mix.sass('resources/scss/layouts/layout_1/compile/all.scss', folder.dist_assets + "css").minify(folder.dist_assets + "css/all.css");
mix.sass('resources/scss/layouts/layout_1/compile/bootstrap.scss', folder.dist_assets + "css").minify(folder.dist_assets + "css/bootstrap.css");
// mix.sass('resources/scss/layouts/layout_1/compile/bootstrap_limitless.scss', folder.dist_assets + "css").options({ processCssUrls: false }).minify(folder.dist_assets + "css/ltr/bootstrap_limitless.css");
mix.sass('resources/scss/layouts/layout_1/compile/components.scss', folder.dist_assets + "css").options({ processCssUrls: false }).minify(folder.dist_assets + "css/components.css");
mix.sass('resources/scss/layouts/layout_1/compile/layout.scss', folder.dist_assets + "css").options({ processCssUrls: false }).minify(folder.dist_assets + "css/layout.css");


mix.webpackConfig({
    plugins: [
        new WebpackRTLPlugin()
    ],
    stats: {
        children: true,
    },
});


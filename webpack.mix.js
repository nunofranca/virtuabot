const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ])

    //master
    .styles('resources/views/master/assets/css/material-dashboard.css', 'public/css/master/material-dashboard.css')
    .scripts('resources/views/master/assets/js/core/popper.min.js', 'public/js/master/js/popper.min.js')
    .scripts('resources/views/master/assets/js/core/bootstrap.min.js', 'public/js/master/js/bootstrap.min.js')
    .scripts('resources/views/master/assets/js/plugins/perfect-scrollbar.min.js', 'public/js/master/js/perfect-scrollbar.min.js')
    .scripts('resources/views/master/assets/js/plugins/smooth-scrollbar.min.js', 'public/js/master/js/smooth-scrollbar.min.js')
    .scripts('resources/views/master/assets/js/plugins/chartjs.min.js', 'public/js/master/js/chartjs.min.js')
    .scripts('resources/views/master/assets/js/material-dashboard.js', 'public/js/master/js/material-dashboard.js')

    //dashboard
    .scripts('resources/views/pages/dashboard/assets/js/charts.js', 'public/js/dashboard/js/charts.js')

    //auth
    .copyDirectory('resources/views/auth/assets/images', 'public/images/auth')

    .version()


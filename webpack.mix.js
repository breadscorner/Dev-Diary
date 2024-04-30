const mix = require('laravel-mix');

mix.js('resources/js/canvas-ui/app.js', 'public/vendor/canvas/js/app.js').vue()
    .sass('resources/sass/canvas-ui.scss', 'public/vendor/canvas/css/app.css');
    
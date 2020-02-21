const mix = require('laravel-mix');

mix.js('javascript/app.js', 'dist')
   .sass('scss/app.scss', 'dist')
   .setPublicPath('dist');
const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix.js('src/app.js', 'dist/')
    .sass('src/app.scss', 'dist/')
    .options({
        processCssUrls: false,
        postCss: [ tailwindcss('./tailwind.config.js') ],
    });
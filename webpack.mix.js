const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .options({
        processCssUrls: false,
        postCss: [ tailwindcss('./tailwind.config.js') ],
    });

// module.exports = async () => {
//     // @ts-ignore
//     process.noDeprecation = true;

//     assertSupportedNodeVersion();

//     const mix = require('../src/Mix').primary;
    
//     require(mix.paths.mix());

//     await mix.installDependencies();
//     await mix.init();

//     return mix.build();
// };


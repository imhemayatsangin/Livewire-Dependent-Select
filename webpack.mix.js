const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js') // Compiles app.js from resources/js/ to public/js/
    .sass('resources/sass/app.scss', 'public/css') // Compiles app.scss from resources/sass/ to public/css/
    .sourceMaps() // Enable source maps for better development debugging
    .version(); // Add versioning to assets for cache busting in production

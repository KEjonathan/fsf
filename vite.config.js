import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/custom/css/style.css',
                'resources/custom/js/main.css',
                'resources/js/css.js',
                'resources/sass/custom.scss',
                'resources/css/app.css',
               
            ],
            refresh: true,
        }),
    ],
});

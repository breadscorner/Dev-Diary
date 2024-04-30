import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['public/vendor/canvas/css/app.css', 'public/vendor/canvas/js/app.js'],
            refresh: true,
        }),
    ],
});

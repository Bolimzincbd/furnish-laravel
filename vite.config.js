import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/style.scss', // Changed from theme.scss
                'resources/js/main.js',      // Changed from app.js
                'resources/js/custom.js',    // Include other necessary JS files
                'resources/js/swiper.js'     // Include other necessary JS files
            ],
            refresh: true,
        }),
    ],
    css: {
        preprocessorOptions: {
            scss: {
                additionalData: `@use "sass:math";`
            }
        }
    }
});
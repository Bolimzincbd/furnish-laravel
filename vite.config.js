import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/theme.scss', // Adjust to match your theme's main scss file
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
    css: {
        preprocessorOptions: {
            scss: {
                additionalData: `@use "sass:math";` // Carried over from theme's vite.config.js
            }
        }
    }
});
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [

        laravel({
            input: ['resources/css/app-CKW-exbu.css', 'resources/js/app--CifqVuM1.js'],
            refresh: true,
        }),
    ],
});

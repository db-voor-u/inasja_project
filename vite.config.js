import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    base: '/inasja_project/',
    plugins: [

        laravel({
            input: ['resources/css/app-CKW-exbu.css', 'resources/js/app-CifqVuM1.js'],
            refresh: true,
        }),
    ],
});

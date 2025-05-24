import { defineConfig } from 'vite';

import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(
            {
               content: [
                    './resources/**/*.blade.php',
                    './resources/**/*.js',
               ] ,
               theme: {
                    extend: {
                        "black": "#060606"
                    },
                    fontfamily: {
                        "hanken-grotesk": ["Hanken Grotesk", "sans-serif"],
                    },
                    FontSize: {
                        "2xs": "0.625ren",
                    }
               },
               plugins: [],
            }
        ),
    ],
});

import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    50: '#eef4ff',
                    100: '#dce8ff',
                    200: '#bed2ff',
                    300: '#95afff',
                    400: '#6c83ff',
                    500: '#5361ff',
                    600: '#3d46db',
                    700: '#3036af',
                    800: '#2a338a',
                    900: '#1e245f',
                    950: '#12143c',
                },
            },
        },
    },

    plugins: [forms],
};

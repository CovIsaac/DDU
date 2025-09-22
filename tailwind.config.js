import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.{js,jsx,ts,tsx,vue}',
        './app/View/**/*.php',
        './app/Livewire/**/*.php',
    ],

    theme: {
        extend: {
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
                secondary: {
                    50: '#f3fbff',
                    100: '#e4f4ff',
                    200: '#c1e7ff',
                    300: '#91d4ff',
                    400: '#4eb6ff',
                    500: '#1493f5',
                    600: '#0d74d6',
                    700: '#0f5cae',
                    800: '#124b8c',
                    900: '#133d70',
                    950: '#0b2648',
                },
                accent: {
                    50: '#fef5ff',
                    100: '#fbe8ff',
                    200: '#f3d0ff',
                    300: '#e5a9ff',
                    400: '#d075ff',
                    500: '#b74eff',
                    600: '#9738d7',
                    700: '#7627a8',
                    800: '#571d7d',
                    900: '#3b1353',
                    950: '#1f082d',
                },
                success: {
                    50: '#ecfef6',
                    100: '#d1fae5',
                    200: '#a7f3d0',
                    300: '#6ee7b7',
                    400: '#34d399',
                    500: '#10b981',
                    600: '#059669',
                    700: '#047857',
                    800: '#065f46',
                    900: '#064e3b',
                },
                warning: {
                    50: '#fffbea',
                    100: '#fef3c7',
                    200: '#fde68a',
                    300: '#fcd34d',
                    400: '#fbbf24',
                    500: '#f59e0b',
                    600: '#d97706',
                    700: '#b45309',
                    800: '#92400e',
                    900: '#78350f',
                },
                slate: {
                    950: '#030712',
                },
            },
            fontFamily: {
                sans: ['"Satoshi"', ...defaultTheme.fontFamily.sans],
                display: ['"Clash Display"', '"Satoshi"', ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: {
                'ddu-sunrise': 'linear-gradient(135deg, #5361ff 0%, #1493f5 45%, #b74eff 100%)',
                'ddu-midnight': 'radial-gradient(circle at top, rgba(83, 97, 255, 0.45), rgba(18, 20, 60, 0.05) 60%)',
                'ddu-aurora': 'linear-gradient(120deg, rgba(83, 97, 255, 0.85) 0%, rgba(148, 60, 255, 0.6) 45%, rgba(20, 147, 245, 0.75) 100%)',
            },
            boxShadow: {
                ddu: '0 20px 50px -24px rgba(83, 97, 255, 0.65)',
                'ddu-soft': '0 24px 45px -30px rgba(12, 18, 32, 0.65), inset 0 1px 0 0 rgba(255, 255, 255, 0.04)',
                'ddu-glow': '0 0 0 1px rgba(83, 97, 255, 0.35), 0 30px 80px -40px rgba(83, 97, 255, 0.65)',
            },
            dropShadow: {
                ddu: '0 15px 35px rgba(20, 147, 245, 0.45)',
            },
            borderRadius: {
                '3xl': '1.75rem',
            },
        },
    },

    plugins: [forms],
};

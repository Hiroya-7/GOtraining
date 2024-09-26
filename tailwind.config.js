import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        '/GOトレ/resources/views/welcome.blade.php'
    ],

    theme: {
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            'base': '#f1f1f2',
            'main': '#a1d6e2',
            'main2': '#06b6d4',
            'sub': '#1995ad',
            'sub2': '#0e7490',
            'button': '#164e63',
            'button2': '#083344',
        },
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
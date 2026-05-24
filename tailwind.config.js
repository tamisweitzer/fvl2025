import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
             colors: {
                brand: {
                    // primarydark: '#4f46e5', // indigo-600 #4f46e5
                    // primary: '#6366f1', // indigo-500 #6366f1
                     // primarylight: '#818cf8', // indigo-400 #818cf8
                     primary: '#6366f1', // '#fbbf24', // #fbbf24 amber-400
                    accent1: '#fbbf24', // #fbbf24 amber-400
                    accent2: '#f59e0b', // #f59e0b amber-500
                    accent: '#e879f9',  // pink-500 #ec4899, fuchsia-400 #e879f9
                    dark: '#1f2937',    // gray-800
                    light: '#f3f4f6',   // gray-100
                }
            },

            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [],
};

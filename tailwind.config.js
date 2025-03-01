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
                sans: ["Open Sans", "sans-serif"],
            },
            // animation: {
            //     float: "float 3s ease-in-out infinite",
            //     fadeIn: "fadeIn 1.5s ease-in",
            // },
            // keyframes: {
            //     float: {
            //       "0%, 100%": { transform: "translateY(0)" },
            //       "50%": { transform: "translateY(-5px)" },
            //     },
            //     fadeIn: {
            //       "0%": { opacity: 0 },
            //       "100%": { opacity: 1 },
            //     },
            //   },
        },
    },

    plugins: [forms],
};

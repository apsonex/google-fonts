const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './src/Support/Tailwindcss/**/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
        '!./resources/js/lib/tailwind/engines/**/*.js',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        require('@tailwindcss/forms')
    ],
};

const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    variants: {
        extend: {
            tableLayout: ['hover', 'focus'],
        },
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
        animation: ['responsive', 'hover', 'focus', 'motion-safe', 'motion-reduce'],
        transitionProperty: ['responsive', 'motion-safe', 'motion-reduce'],
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/aspect-ratio'),
    ]
};

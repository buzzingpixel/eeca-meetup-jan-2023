const colors = require('tailwindcss/colors')

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./system/user/templates/**/*.html"],
    theme: {
        extend: {
            colors: {
                rose: colors.rose,
            },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
}

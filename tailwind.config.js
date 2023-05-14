/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.blade.php",
    ],
    theme: {
        extend: {},
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
}

module.exports = {

    plugins: [
        require('flowbite/plugin')
    ]

}

module.exports = {

    content: [
        "./node_modules/flowbite/**/*.js"
    ]

}

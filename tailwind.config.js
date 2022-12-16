const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
            width: {
                112: "30rem",
                144: "32rem",
                160: "33rem",
                176: "34rem",
                192: "35rem",
                208: "36rem",
                224: "37rem",
                240: "38rem",
                304: "42rem",
                336: "44rem",
                352: "45rem",
                400: "48rem",
                1312: "82rem",
            },
            height: {
                112: "30rem",
                144: "32rem",
                160: "33rem",
                176: "34rem",
                192: "35rem",
                208: "36rem",
                224: "37rem",
                240: "38rem",
            },
        },
    },

    plugins: [require("@tailwindcss/forms", "flowbite/plugin")],
};

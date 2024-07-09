/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                customGreen: "#1F6461",
                customBg: "#8EB47B",
            },
        },
    },
    plugins: [require("daisyui")],
};

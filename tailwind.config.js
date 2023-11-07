/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            maxWidth: {
                "1/4": "25%",
                "1/2": "300px",
                "3/4": "75%",
            },
            colors: {
                primary: "#2b488a",
                secondary: "#52ade6 ",
                reddish: "#ec1c23 ",
            },
        },
    },
    plugins: [],
};

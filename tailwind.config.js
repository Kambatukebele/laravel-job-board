/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {
            backgroundImage: {
                hero: "url('/public/images/h8-banner.jpg')",
            },
        },
    },
    plugins: [],
};

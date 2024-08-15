/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        container: {
            center: true,
            padding: "20px",
            screens: {
                sm: "640px",
                md: "768px",
                lg: "1024px",
                xl: "1280px",
            },
        },
        extend: {
            animation: {
                "spin-slow": "spin 6s linear infinite",
            },
            fontFamily: {
                calibri: ["Calibri", "sans-serif"],
            },
            colors: {
                primary: "#F59C16",
                secondary: "#144F9C",
                neutral: "#0E2038",
            },
        },
    },
    plugins: [],
};

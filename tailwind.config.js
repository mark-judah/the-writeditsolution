module.exports = {
    purge: [],
    darkMode: false, // or 'media' or 'class'
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                orange: {
                    light: '#df7f4f',
                    default: '#f3821a',
                    dark: '#df7f4f',
                },
                yellow:{
                    light:'#fDA828f7',
                },
                blue: {
                    services_underline: '#3C95A8',
                    books_outer: '#3C95A8',
                    books_center: '#6AACAF',
                    books_inner: '#216F80',
                }
            },

        },

    },
    variants: {
        extend: {},
    },
    plugins: [],
}

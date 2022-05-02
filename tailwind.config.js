module.exports = {
    darkMode: 'class',
    content: ['./resources/**/*.blade.php'],
    theme: {
        extend: {},
    },
    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};

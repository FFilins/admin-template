const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                50: '#f4e9f9',
                100: '#e3c8f2',
                200: '#d0a1e6',
                300: '#b977d4',
                400: '#a54fc2',
                500: '#8e29ad',
                600: '#7d1f9e',
                700: '#6a1a85',
                800: '#57156b',
                900: '#461254',
              },
              secondary: {
                50: '#ebf6ff',
                100: '#cfe2ff',
                200: '#afcbff',
                300: '#8fb3ff',
                400: '#6c99ff',
                500: '#487fff',
                600: '#3766e6',
                700: '#2d50b4',
                800: '#233c81',
                900: '#1b2d61',
              },
              tertiary: {
                50: '#f5f5f5',
                100: '#e8e8e8',
                200: '#d4d4d4',
                300: '#b3b3b3',
                400: '#808080',
                500: '#4d4d4d',
                600: '#404040',
                700: '#333333',
                800: '#262626',
                900: '#1a1a1a',
              },
              success: {
                50: '#f2faf5',
                100: '#e6f5eb',
                200: '#bff0cc',
                300: '#99eaae',
                400: '#4dd76e',
                500: '#00c22e',
                600: '#00ae2a',
                700: '#008f23',
                800: '#00701c',
                900: '#005a17',
              },
              warning: {
                50: '#fdf5f2',
                100: '#fbeadf',
                200: '#f6d1bf',
                300: '#f1b89f',
                400: '#e38a60',
                500: '#d45c21',
                600: '#c1561d',
                700: '#9e4616',
                800: '#7b3510',
                900: '#652b0d',
              },
              danger: {
                50: '#fdf2f2',
                100: '#f9dcdc',
                200: '#f2a6a6',
                300: '#ec7171',
                400: '#de3333',
                500: '#d50000',
                600: '#c20000',
                700: '#a80000',
                800: '#8f0000',
                900: '#790000',
              },
              white: {
                100:'#fff',
              }
            }   
            
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};

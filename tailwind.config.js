/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './public/**/*.{html,php}',  // Pastikan mencakup ekstensi php
    './**/*.php',                // Untuk semua file PHP di folder apapun
  ],
  darkMode: 'class',
  theme: {
    extend: {},
  },
  plugins: [],
}


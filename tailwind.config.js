/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{php,html,js}"],
  theme: {
    extend: {
      colors: {
        'rosy-brown': '#B59494',
        'new-york-pink': '#D68386',
      }
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
  safelist: [],
}
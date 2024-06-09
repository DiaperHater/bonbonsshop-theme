/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{php,html,js}"],
  theme: {
    extend: {
      colors: {
        'rosy-brown': '#B59494',
        'new-york-pink': '#D68386',
        'linen': '#FBEBEC',
        'bonbons-blue': '#D8E6FF',
      }
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
  safelist: [],
}
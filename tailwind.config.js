/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./**/*.{html,php}'],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/container-queries'),
    require('@tailwindcss/forms'),
  ],
}

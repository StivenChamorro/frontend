/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        // 'NOMBRE PARA LA FUENTE ' : ['FUENTE IMPORTADA']
        'inter': ["Pixelify Sans", 'sans-serif'],
        'press' : ["Press Start 2P", 'system-ui'],
      },
    },
  },
  plugins: [],
}
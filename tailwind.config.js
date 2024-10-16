import laravel from 'laravel-vite-plugin';

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources//*.blade.php",
    "./resources//*.js",
    "./resources//*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        // 'NOMBRE PARA LA FUENTE ' : ['FUENTE IMPORTADA']
        'inter': ["Pixelify Sans", 'sans-serif'],
        'press' : ["Press Start 2P", 'system-ui'],
      },
      screens: {
        'mobile': '480px',
        'tablet': '768px',
        'desktop': '1024px'
      },
      fontFamily: {
        'press-start': ['"Press Start 2P"', 'cursive'],
        'happy-monkey': ['"Happy Monkey"', 'sans-serif'],
      },
      keyframes: {
        slide: {
          '0%': { transform: 'translateX(100%)' },
          '100%': { transform: 'translateX(-100%)' },
        },
      },
      animation: {
        slide: 'slide 10s linear infinite',
      },
    },
  },
  plugins: [
    laravel({
      input: [
        'resources/css/app.css',
        'resources/js/app.js'
        ],
        refresh: true,
    }),
  ],
}
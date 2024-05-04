/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "resources/views/*.blade.php",
    "resources/views/**/*.blade.php",
    "resources/views/**/**/*.blade.php",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#00DE6C',
        secondary: '#1C713E',
        home: '#F7E6D6'
      }
    },
  },
  plugins: [],
}


/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        // Kita sekalian daftarkan warna identitas Rolepath di sini!
        brand: {
          navy: '#0A192F',  // Dark Navy untuk background
          green: '#00F5D4', // Neon Green untuk aksen/tombol
        }
      }
    },
  },
  plugins: [],
}

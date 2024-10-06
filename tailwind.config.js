/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {},
    fontFamily: {
        'dm-sans': 'DM Sans',
        'sora': 'Sora',
    },
    colors: {
        'primary': '#EB7474',
        'secondary': '#3C3C3C',
        'text': '#FFFFFF',
    },
  },
  plugins: [],
}


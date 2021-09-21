module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    screens: {
      'xs': '480px',
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px',
      '2xl': '1536px',
    },
    extend: {
      colors: {
        primarycolor: '#11324d',
        secondarycolor: '#c1cfc0',
      },
    },
      fontFamily: {
        primary: 'Proza Libre',
        secondary: 'Ropa Sans',
        third: 'Roboto',
        fourth: 'Roboto Condensed'
      }
  },
  variants: {
    extend: {},
  },
  plugins: [],
}

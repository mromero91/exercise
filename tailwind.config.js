const colors = require('tailwindcss/colors')

module.exports = {
  purge: {
    enabled: false,
  },
  theme: {
    extend: {
      backgroundColor: ['checked'],
      borderColor: ['checked'],
      colors: {
        brand: 'var(--color-brand)',
        brandSecond: 'var(--color-brand-second)',
        bg: '#DFE2E7RGB',
        dark: '#012E46',
        teal: colors.teal,
        lightDark: '#4A616F',
        softGray: '#F3F3F3',
        lightGray: '#FBFBFB',
        opacityWhite: 'rgba(255,255,255,0.1)',
        opacityBlack: 'rgba(0,0,0,0.5)',
        backgroundColor: ['active']
      }
    }
  },
  variants: {
    tableLayout: ['responsive', 'hover', 'focus'],
  },
  plugins: [],
}
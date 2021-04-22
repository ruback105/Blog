module.exports = {
  purge: ['./resources/views/**/*.blade.php', './resources/css/**/*.css'],
  theme: {
    extend: {
      width: {
        '49': '49%',
        '30': '30%',
        'fit-content': 'fit-content'
      },
      minHeight: {
        '90': '90px',
      },
    },
  },
  variants: {},
  plugins: [require('@tailwindcss/ui')],
}

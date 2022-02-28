module.exports = {
  content: [
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
      backgroundImage: theme => ({
        'flower': "url('resources/sass/img/Flower.jpg')",
        })
    },
  },
  plugins: [],
}

module.exports = {
    future: {
      purgeLayersByDefault: true,
    },
    purge: ["./src/**/*.html"],
    theme: {
      container: {
          screens: {
              'sm': '640px',
              'md': '768px',
              'lg': '1024px',
              'xl': '1280px',
          }
      }
    },
    variants: {},
    plugins: [],
  };
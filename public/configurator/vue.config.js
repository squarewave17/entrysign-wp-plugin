const { defineConfig } = require('@vue/cli-service')
module.exports = defineConfig({
  transpileDependencies: true,
  filenameHashing: false,
  publicPath:
    '/wp-content/plugins/entrysign-configurator/public/configurator/dist/',
  chainWebpack: (config) => {
    config.plugins.delete('html')
    config.plugins.delete('preload')
    config.plugins.delete('prefetch')
  },
  devServer: {
    host: 'entrysign-site.test',
    hot: false,
    devMiddleware: {
      writeToDisk: true,
    },
  },
  css: {
    extract: true,
  },
})

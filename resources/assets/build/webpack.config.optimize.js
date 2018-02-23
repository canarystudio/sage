'use strict'; // eslint-disable-line

const { default: ImageminPlugin } = require('imagemin-webpack-plugin');
const imageminMozjpeg = require('imagemin-mozjpeg');
const glob = require('glob-all');
const config = require('./config');
const PurgecssPlugin = require('purgecss-webpack-plugin');

module.exports = {
  plugins: [
    new ImageminPlugin({
      optipng: { optimizationLevel: 7 },
      gifsicle: { optimizationLevel: 3 },
      pngquant: { quality: '65-90', speed: 4 },
      svgo: { removeUnknownsAndDefaults: false, cleanupIDs: false },
      plugins: [imageminMozjpeg({ quality: 75 })],
      disable: (config.enabled.watcher),
    }),
    new PurgecssPlugin({
      paths: glob.sync([
        '*.php',
        'lib/*.php',
        'views/**/*.php',
        'views/partials/banner.php',
        'resources/assets/scripts/**/*.js',
      ]),
      whitelist: [ // Only if you need it!
        'pr3', 'pv2', 'ph3',
        'mb1',
        'input',
        'tracked-mega',
        'nav-link',
        'banner-primary',
        'footer-primary'
      ],
    }),
  ],
};

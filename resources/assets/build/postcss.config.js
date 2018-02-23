/* eslint-disable */

const cssnanoConfig = {
  preset: ['default', { discardComments: { removeAll: true } }]
};
// const uncssConfig = {
//   ignore: [
//     '.banner-primary',
//     '.footer-primary'
//   ],
//   html: [
//     'http://canary.wp',
//     // Your entire sitemap added manually
//     // or some other way if you’re clever (wget is handy for this).
//   ],
// };

module.exports = ({ file, options }) => {
  return {
    parser: options.enabled.optimize ? 'postcss-safe-parser' : undefined,
    plugins: {
      // 'postcss-uncss': options.enabled.optimize ? uncssConfig : false, // ← Add the plugin
      cssnano: options.enabled.optimize ? cssnanoConfig : false,
      autoprefixer: true,
    },
  };
};

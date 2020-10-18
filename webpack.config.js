const path = require('path');
// const HtmlWebpackPlugin = require('html-webpack-plugin');

module.exports = {
  output: {
    path: path.resolve(__dirname, 'build'),
  },
  module: {
    rules: [
      {
        test: /\.scss$/i,
        use: [
          'style-loader', // 3. Inject styles into DOM
          'css-loader', // 2. Turns css into commonjs
          'sass-loader', // 1. Turns sass into css
        ],
      },
    ],
  },
};

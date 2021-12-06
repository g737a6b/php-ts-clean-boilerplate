const path = require('path');
const ESLintPlugin = require('eslint-webpack-plugin');

module.exports = {
  mode: "production", // "production" | "development" | "none"
  entry: {
    sample: "./assets/js/main.ts"
  },
  output: {
    path: path.resolve(__dirname, 'webroot/js'),
    filename: '[name].js'
  },
  module: {
    rules: [
      {
        test: /\.ts$/,
        exclude: /node_modules/,
        use: 'ts-loader',
      },
    ],
  },
  plugins: [
    new ESLintPlugin({
      extensions: ['.ts', '.js']
    })
  ],
};

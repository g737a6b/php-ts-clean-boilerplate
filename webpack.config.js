const path = require('path');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const ESLintPlugin = require('eslint-webpack-plugin');

module.exports = {
  mode: "production", // "production" | "development" | "none"
  entry: {
    'js/default': path.resolve(__dirname, 'assets/js/default.ts'),
    'css/default': path.resolve(__dirname, 'assets/css/default.scss'),
  },
  output: {
    path: path.resolve(__dirname, 'webroot'),
    filename: '[name].js',
  },
  resolve: {
    extensions: ['.ts'],
  },
  module: {
    rules: [
      {
        test: /\.ts$/,
        exclude: /node_modules/,
        use: 'ts-loader',
      },
      {
        test: /\.scss$/,
        exclude: /node_modules/,
        use: [
          // CSSファイルとJSファイルを別々にする
          MiniCssExtractPlugin.loader,
          // Translates CSS into CommonJS
          "css-loader",
          // Compiles Sass to CSS
          "sass-loader",
        ],
      },
    ],
  },
  plugins: [
    new ESLintPlugin({
      extensions: ['ts', 'js']
    }),
    new MiniCssExtractPlugin(),
  ],
};

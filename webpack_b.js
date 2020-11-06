const path = require('path');
const webpack = require('webpack');
//const TerserPlugin = require('terser-webpack-plugin');

module.exports = {

    entry:
    {
      CatalogList: './js/react/CatalogList.js',
      ProductDetail: './js/react/ProductDetail.js',
      ProductOne: './js/react/ProductOne.js',

      /*AccountUsers: './js/jsclasses/AccountUsers.js',
      CartList: './js/jsclasses/CartList.js',
      CategList: './js/jsclasses/CategList.js',
      CategListSimple: './js/jsclasses/CategListSimple.js',
      CategManagerList: './js/jsclasses/CategManagerList.js',
      ChangePwd: './js/jsclasses/ChangePwd.js',
      CheckOut: './js/jsclasses/CheckOut.js',
      FavorList: './js/jsclasses/FavorList.js',
      ModalYesNo: './js/jsclasses/ModalYesNo.js',
      OrdersManagerList: './js/jsclasses/OrdersManagerList.js',
      OrdersUserList: './js/jsclasses/OrdersUserList.js',
      ProductsManagerList: './js/jsclasses/ProductsManagerList.js',
      RestorePwd: './js/jsclasses/RestorePwd.js',
      UsersManagerList: './js/jsclasses/UsersManagerList.js',
      SearchProduct: './js/jsclasses/SearchProduct.js',
      Test: './js/jsclasses/Test.js',
      Registration: './js/jsclasses/Registration.js',*/


      },
    output: {
      path: path.resolve(__dirname, 'js/jsmin'),
        filename: '[name].js',
    },
    devtool:'source-map',
    plugins: [
      new webpack.DefinePlugin({
        'process.env': {
          'NODE_ENV': JSON.stringify('production')
        }
      })
    ],
    /*optimization: {
      minimize: true,
      minimizer: [
        new TerserPlugin({
          test: /\.js(\?.*)?$/i,
        }),
      ]
    },*/
    module: {
      rules: [
        {
          test: /\.js$/,
          exclude: /node_modules/,
          use: [
            {
              loader: 'babel-loader',
              options: {
                cacheDirectory: true,
                babelrc: false,
              presets: [
                  ["@babel/env", {
                    "targets": {
                      "browsers": "last 2 Chrome versions",
                      "node": "current"
                    }
                  }],
                  "@babel/react"
                ],
                plugins: [
                  "@babel/plugin-proposal-class-properties"
                ]
              }
             
            },
          ],
        },
        {
          test: /\.css$/,
          loader: 'style-loader!css-loader'
      }
      ]
    }
  }
const path = require('path');
const webpack = require('webpack');
//const TerserPlugin = require('terser-webpack-plugin');

module.exports = {

    entry:
    {
      CatalogList: './js/react/CatalogList.js',
      ProductDetail: './js/react/ProductDetail.js',
      ProductOne: './js/react/ProductOne.js',
      ProductsManagerList: './js/react/ProductsManagerList.js',
      CartList: './js/react/CartList.js',
      CheckOut: './js/react/CheckOut.js',
      Registration: './js/react/Registration.js',
      OrdersManagerList: './js/react/OrdersManagerList.js',
      OrdersUserList: './js/react/OrdersUserList.js',
      RestorePwd: './js/react/RestorePwd.js',
      ChangePwd: './js/react/ChangePwd.js',
      AccountUsers: './js/react/AccountUsers.js',
      OrdersUserList: './js/react/OrdersUserList.js',
      UsersManagerList: './js/react/UsersManagerList.js',
      FavorList: './js/react/FavorList.js',
      SearchProduct: './js/react/SearchProduct.js',

      /*

      CategList: './js/react/CategList.js',
      CategListSimple: './js/react/CategListSimple.js',
      CategManagerList: './js/react/CategManagerList.js',
      

      
      ModalYesNo: './js/react/ModalYesNo.js',

      


      
      Test: './js/react/Test.js',
      */


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
const webpack = require('webpack');
const path = require('path');
const env = process.env.WEBPACK_ENV;

const PATHS = {
	source: path.join(__dirname, 'src/'),
	build: path.join(__dirname, 'dist/')
};

module.exports = {
	entry: {
		main: PATHS.source + 'index.js'
	},
	output: {
		path: PATHS.build,
		filename: 'bundle.js'
	},
	module: {
		rules: [
			{
				test: /\.js$/,
				exclude: /node_modules/,
				use: {
          loader: 'babel-loader',
          options: {
            presets: ['babel-preset-env']
          }
        }
			},
			{
				test: /\.less$/,
				use: [
					{
						loader: 'file-loader',
						options: {
							name: 'main.css'
						}
					},
					{
						loader: 'extract-loader'
					},
					{
						loader: 'css-loader',
						options: {
							minimize: env === 'production'
						}
					},
					{
						loader: 'postcss-loader',
						options: {
							plugins: () => {
								return [
									require('precss'),
									require('autoprefixer')
								];
							}
						}
					},
					{
						loader: 'less-loader'
					}
				]
			},
			{
				test: /\.html$/,
				use: [
					{
						loader: 'file-loader',
						options: {
							name: '[name].[ext]'
						}
					},
					{
						loader: 'extract-loader'
					},
					{
						loader: 'html-loader'
					}
				]
			},
			{
				test: /\.(png|jpg|gif|svg|webm|mp4|ogg|ogv)/,
				use: [
					{
						loader: 'file-loader',
						options: {
							name: '[name].[ext]?[hash]',
							outputPath: 'img/'
						}
					}
				]
			},
			{
				test: /\.(eot|woff|woff2|ttf|otf)$/,
				use: [
					{
						loader: 'file-loader',
						options: {
							name: '[name].[ext]?[hash]',
							outputPath: 'fonts/'
						}
					}
				]
			}
		]
	},
	plugins: [
		new webpack.DefinePlugin({
			BUNDLED: true,
			VERSION: '1.0',
			'process.env': {
				NODE_ENV: '"production"'
			}
		})
	]

};

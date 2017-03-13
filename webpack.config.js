var path = require('path');

module.exports = 
{
	entry: 
	{
		'app': ['./es6/app.js']
	},
	ouput: 
	{
		path: path.resolve(__dirname, "web/js"),
		filename:'app.js'
	},
	module: 
	{
		loaders: 
		[
			{ 
				test: /\.js$/, 
				exclude: /node_modules/, 
				loader: "babel-loader",
				options: 
				{
					  "presets": ["es2015"]
				},
			}
		]
	}
}


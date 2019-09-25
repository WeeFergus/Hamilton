module.exports = function (grunt, options) {
	return {
		theme: {
			options: {
				mangle: options.dev ? false : true,
				beautify: false,
				sourceMap: options.dev ? true : false
			},
			files: {
				'<%= paths.dist %>/javascript.min.js':
				[
					'<%= paths.js %>/vendor/**/*.*.js',
					'<%= paths.js %>/vendor/**/*.js',
					'<%= paths.js %>/includes/**/*.*.js',
					'<%= paths.js %>/includes/**/*.js',
					'<%= paths.js %>/main.js'
				]
			}
		}
	}
};
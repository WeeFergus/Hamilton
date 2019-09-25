module.exports = function (grunt, options) {
    return {
    	bsFiles: {
    		src: [
    			'<%= paths.dist %>/theme.min.css',
    			'<%= paths.dist %>/theme.min.js'
			]
    	},
    	options: {
    		proxy: 'chronos.dev'
    	}
    }
};
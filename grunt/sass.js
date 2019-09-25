module.exports = function (grunt, options) {
    return {
        theme: {
            options: {
                outputStyle: 'compressed',
                sourceMap: options.dev ? true : false
            },
            files: {
                '<%= paths.dist %>/styles.min.css':
                '<%= paths.sass %>/main.scss'
            }
        },

        admin: {
            options: {
                outputStyle: 'compressed',
                sourceMap: false
            },
            files: {
                '<%= paths.dist %>/admin.min.css':
                '<%= paths.sass %>/admin/admin.scss'
            }
        }
    }
};
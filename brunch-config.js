exports.config = {
    conventions: {
        ignored: [
            /\.spec\.js$/
        ]
    },
    files: {
        javascripts: {
            joinTo: {
                'js/index.js' : [
                    "app/javascripts/**/*.js",
                    "app/javascripts/**/*.scss",
                ],
                'js/vendor.js': /^node_modules/
            }
        },
        stylesheets: {
            joinTo: {
                'css/modules.css': 'app/javascripts/**/*.scss'
            }
        }
    },
    plugins: {
        babel: {
            plugins: [
                "transform-decorators-legacy",
                "transform-class-properties"
            ],
            presets: ['react', 'es2015', 'stage-0']
        },
        postcss: {
            processors: [
                require('autoprefixer')(['last 8 versions']),
                require('postcss-icss-values')
            ],
            modules: true
        },
        sass: {
            modules: {
                modules: true
            }
        }
    }
};

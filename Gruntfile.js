module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		clean: {
			task: {
				src: ['source'], 
				dest: 'destination'
			},
			options: {
				'force': false,
				'no-write': false
			}
		},
		concat: {
			task: {
				src: ['js/navigation.js', 'js/skip-link-focus-fix.js', 'js/custom_scrollbar.js', 'js/jq_cycle_2.js', 'js/isotope.min.js', 'js/script.js'], 
				dest: 'js/main.js'
			},
			options: {
				'separator': grunt.util.linefeed,
				'banner': '',
				'footer': '',
				'stripBanners': false,
				'process': false,
				'sourceMap': false,
				'sourceMapName': undefined,
				'sourceMapStyle': 'embed'
			}
		},
		cssmin: {
		   dist: {
		      options: {
		      },
		      files: {
		         'style.css': ['css/jquery.mCustomScrollbar.css', 'style.css']
		      }
		  }
		},
		uglify: {
			task: {
				src: ['js/main.js'], 
				dest: 'js/script.min.js'
			},
			options: {
				'mangle': {},
				'compress': {},
				'beautify': false,
				'expression': false,
				'report': 'min',
				'sourceMap': false,
				'sourceMapName': undefined,
				'sourceMapIn': undefined,
				'sourceMapIncludeSources': false,
				'enclose': undefined,
				'wrap': undefined,
				'exportAll': false,
				'preserveComments': undefined,
				'banner': '',
				'footer': ''
			}
		},
		sass: {
			task: {
				src: ['sass/style.scss'], 
				dest: 'style.css'
			},
			options: {
				'sourcemap': 'auto',
				'trace': false,
				'unixNewlines': false,
				'check': false,
				'style': 'nested',
				'precision': 3,
				'quiet': false,
				'compass': false,
				'debugInfo': false,
				'lineNumbers': false,
				'loadPath': [],
				'require': [],
				'cacheLocation': '.sass-cache',
				'noCache': false,
				'bundleExec': false,
				'update': false
			}
		},
		watch: {
            src: {
              options:{
              	livereload:{
			        host: 'localhost',
			        port: 80
			    }
  			  },
              files: ['sass/*.scss'], 
              tasks: ['sass']
            },
        }
	});

	grunt.loadNpmTasks('grunt-contrib-clean');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');

	grunt.registerTask('default', ['clean', 'concat', 'cssmin', 'uglify']);
	grunt.registerTask('cmin', ['cssmin']);
	grunt.registerTask('watch-sass', ['watch']);
};
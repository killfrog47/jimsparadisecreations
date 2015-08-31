module.exports = function(grunt) {

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		// uglify: {
		// 	my_target: {
		// 		files: {
		// 			'assets/js/main.min.js': ['assets/js/main.js']
		// 		}
		// 	}
		// },
		sass: {
			dist: {
				files: {
					'assets/css/master.css' : ['assets/css/master.scss']
				}
			}
		},
		cssmin: {
			options: {
				shorthandCompacting: false,
				roundingPrecision: -1
			},
			target: {
				files: {
					'assets/css/master.min.css': 'assets/css/master.css'
				}
			}
		},
		watch: {
			files: ['assets/sass/*.scss'],
			tasks: ['sass', 'cssmin']
		}
	});

	// grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-sass');

	grunt.registerTask('default', ['uglify', 'sass', 'cssmin']);

};
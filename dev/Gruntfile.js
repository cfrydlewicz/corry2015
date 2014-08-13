module.exports = function(grunt) {

	// Project configuration.
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		concat: {
			css: {
  			src: [
					'css/reset.scss',
					'css/shortcuts.scss',
					'css/mobile.scss',
					'css/tablet.scss',
					'css/wide.scss',
					'css/subthemes.scss'
				],
				dest: 'corryart2015.concat.scss'
			},
			js : {
				src : [
					'js/jquery-2.1.1.min.js',
          'js/custom.js'
				],
				dest : 'corryart2015.concat.js'
			}
		},

    compass: {
      dist: {
        options: {
          sassDir: 'css',
          cssDir: '',
          environment: 'production',
          outputStyle: 'compressed'
        }
      }
    },

		uglify: {
			options: {
				banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
			},
			build: {
				src: ['corryart2015.concat.js'],
				dest: '../scripts.js'
			}
		},
		
		watch: {
			files: [
        'dev/Gruntfile.js',
        'dev/css/*.css',
        'dev/js/*.js'
      ],
      tasks: ['default']
    }

	});

	// TASKS
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-compass');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-watch');

	// Default task(s).
	grunt.registerTask( 'default', [ 'concat', 'uglify', 'compass' ] );

};
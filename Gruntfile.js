module.exports = function(grunt) {

	grunt.initConfig({

		pkg: grunt.file.readJSON('package.json'),
		watch: {
			sass: {
				files: 'public/sass/*',
				tasks: ['compass:dev']
			},
			neuter: {
				files: ['public/js/app/**/*.js'],
                tasks: ['neuter']
			}
		},
		compass: {
			dev: {
				options: {
					sassDir: 'public/sass',
					cssDir: 'public/css',
				}
			},
			dist: {
				options: {
					sassDir: 'public/sass',
					cssDir: 'dist/css',
					outputStyle: 'compressed'
				}
			}
		},
		neuter: {
			dev: {
                options: {
                    filepathTransform: function (filepath) {
                        return 'public/js/app/' + filepath;
                    }
                },
				src: 'public/js/app/app.js',
				dest: 'public/js/global.js'
			}
		},
       	copy: {
            dev: {
                files: [{
                    expand: true,
                    dot: true,
                    cwd: 'public/',
                    dest: 'dist/',
                    src: [
                        'js/global.js'
                    ]
                }]
            }
        },
		useminPrepare: {
			html: 'app/views/templates/**/*.php',
			options: {
                dest: 'dist/'
            }
		},
		usemin: {
			html: ['app/views/templates/**/*.php'],
		},
		shell: {
			test: {
				options: {
					stdout: true
				},
				command: [
					'git push origin <%= branch %>'
				].join('&&')
			}
		},
		branch: grunt.option('branch') || 'master',
	});

	grunt.loadNpmTasks('grunt-contrib-compass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-copy');
	grunt.loadNpmTasks('grunt-neuter');
	grunt.loadNpmTasks('grunt-usemin');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-htmlmin');
	grunt.loadNpmTasks('grunt-shell');

	grunt.registerTask('default', ['compass:dev', 'neuter']);
	grunt.registerTask('dist', ['compass:dist', 'neuter', 'copy', 'useminPrepare', 'concat', 'uglify', 'usemin']);
	grunt.registerTask('deploy', ['shell']);

};
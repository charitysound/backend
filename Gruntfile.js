module.exports = function(grunt) {

	grunt.initConfig({

		pkg: grunt.file.readJSON('package.json'),
		config: grunt.file.readJSON('config.json'),
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
					config: 'config.rb'
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
                files: [
	                {
	                    expand: true,
	                    dot: true,
	                    cwd: 'public/',
	                    dest: 'dist/',
	                    src: [
	                        'js/global.js'
	                    ]
	                },
	                {
	                	expand: true,
	                    dot: true,
	                    cwd: 'app/views/templates/',
	                    dest: 'app/views/dist/templates/',
	                    src: [
	                        'default.blade.php'
	                    ]
	                }
                ]
            }
        },
		useminPrepare: {
			html: 'app/views/templates/**/*.php',
			options: {
                dest: 'dist/'
            }
		},
		usemin: {
			html: ['app/views/dist/templates/**/*.php'],
		},
		shell: {
			dist: {
				options: {
					stdout: true
				},
				command: [
					'git push origin <%= branch %>',
				].join('&&')
			}
		},
		sshexec: {
			dist: {
				command:
					'cd /var/www/site;' + 
					'git checkout <%= branch %>;' + 
					'git pull origin <%= branch %>;' +
					'php artisan migrate',
				options: {
					host: '<%= config.servers.dev.host %>',
					username: '<%= config.servers.dev.username %>',
					password: '<%= config.servers.dev.password %>'
				}
			}
		},
		branch: grunt.option('branch') || 'master'
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
	grunt.loadNpmTasks('grunt-ssh');

	grunt.registerTask('default', ['compass:dev', 'neuter']);
	grunt.registerTask('dist', ['compass:dist', 'neuter', 'copy', 'useminPrepare', 'concat', 'uglify', 'usemin']);
	grunt.registerTask('deploy', ['sshexec']);

};
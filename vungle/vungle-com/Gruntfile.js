module.exports = function(grunt) {
	//project config
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		uglify: {
			my_target: {
		      files: [{
		          expand: true,
		          cwd: 'src/js',
		          src: '**/*.js',
		          dest: 'dist/js'
		      }]
		    }
		},
		cssmin: {
		  target: {
		    files: [{
		      expand: true,
		      cwd: 'SRC/css',
		      src: ['*.css', '*.min.css'], // !*.min.css excludes
		      dest: 'dist/css',
		      //ext: '.min.css'
		    }]
		  }
		},
		concat: {
		    options: {
		    },
		    /*dist: {
		      src: ['dist/js/jquery.navgoco.js', 'dist/js/video-hero.js', 'dist/js/aboutus.js', 'dist/js/wow.js', 'dist/js/main.js'],
		      dest: 'dist/js/<%= pkg.name %>.js',
		    },*/
		    js: {
			    src: ['dist/js/jquery.navgoco.js', 'dist/js/video-hero.js', 'dist/js/aboutus.js', 'dist/js/wow.js', 'dist/js/main.js'],
		        dest: 'dist/js/<%= pkg.name %>.js'
			  },
			css: {
			    src: ['dist/css/*.css', '!dist/css/bootstrap.min.css', '!<%= pkg.name %>.css'],
			    dest: 'dist/css/<%= pkg.name %>.css'
			  }
		},
		svg2png: {
	        all: {
	            files: [
	                { cwd: 'src/img/', src: ['**/*.svg'], dest: 'src/img/png/' }
	            ]
	        }
	    },
	    imagemin: {
		   dist: {
		      options: {
		        optimizationLevel: 5
		      },
		      files: [{
		         expand: true,
		         cwd: 'src/img',
		         src: ['**/*.{svg,png,jpg,gif}'],
		         dest: 'dist/img/'
		      }]
		   }
		},
		htmlmin: {
		   dist: {
		      options: {
		         removeComments: true,
		         collapseWhitespace: true
		      },
		      files: [{
		         expand: true,
		         cwd: 'src',
		         src: ['**/*.php', '!archive/*.*'],
		         dest: 'dist/'
		      }]
		   }
		}
	});
	
	//load plugins
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-svg2png');
	grunt.loadNpmTasks('grunt-contrib-imagemin');
	grunt.loadNpmTasks('grunt-contrib-htmlmin');
	grunt.loadNpmTasks('grunt-contrib-concat');
	//default tasks
	grunt.registerTask('dist', ['uglify', 'cssmin', 'htmlmin', 'imagemin', 'concat']);
	grunt.registerTask('default', ['uglify', 'cssmin', 'htmlmin', 'concat']);
};
/*global module:false*/
module.exports = function (grunt) {

    // Project configuration.
    grunt.initConfig({
        watch: {
            css: {
                files: '**/*.css',
                options: {
                    livereload: true
                }
            },
            js: {
                files: '**/*.js',
                options: {
                    livereload: true
                }
            },
            php: {
                files: ['src/**/*.php'],
                options: {
                    livereload: true
                }
            },
            twig: {
                files: '**/*.twig',
                options: {
                    livereload: true
                }
            },
            yaml: {
                files: '**/*.yml',
                options: {
                    livereload: true
                }
            }

        }
    });

    grunt.loadNpmTasks('grunt-contrib-watch');

    // Default task.
    grunt.registerTask('default', ['watch']);

};

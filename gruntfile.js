module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        sass: {                              // Task
            dist: {                            // Target
                options: {                       // Target options
                    style: 'expanded'
                },
                files: {                         // Dictionary of files
                    'style.css': 'src/scss/main.scss'       // 'destination': 'source'
                }
            }
        },
        watch: {
            files: ['src/scss/**.scss', 'src/scss/**/**.scss'],
            tasks: ['sass']
        }
    });
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default', ['sass', 'watch']);

};

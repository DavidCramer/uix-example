module.exports = function (grunt) {
    // Project configuration.
    grunt.initConfig({
        gitclone: {
            clone: {
                options: {
                    repository: 'https://github.com/Desertsnowman/UIX',
                    branch: 'master',
                    directory: 'uix'
                }
            }
        }
    });

    //load modules
    grunt.loadNpmTasks( 'grunt-git' );
    //register default task
    grunt.registerTask( 'default', [ 'gitclone' ] );

};

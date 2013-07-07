module.exports = function(grunt) {
  grunt.initConfig({
    less: {
      // Development base task.
      development : {
        options : {
          compress: true,
          paths: ['components/bootstrap/less']
        },
        files :{
          // string|Array type of structure.
          'css/style.css' : 'less/montic.less',
        },
      }
    },
    watch : {
      styles : {
        files : ['less/*.less'],
        tasks : ['less'],
      },
      options : {
        livereload : true
      }
    }
  });

  // Load plugins.
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // register default tasks.
  grunt.registerTask('default', ['watch']);
}

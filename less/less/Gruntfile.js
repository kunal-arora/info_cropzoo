module.exports = function(grunt) {
  require('jit-grunt')(grunt);

  grunt.initConfig({
    less: {
      development: {
        options: {
          compress: true,
          yuicompress: true,
          optimization: 2
        },
        files: {
          "../../css/dist/styles.min.css": "main.less" // destination file and source file
        }
      }
    },
    watch: {
      styles: {
        files: ['*.less'], // which files to watch
        tasks: ['less'],
        options: {
          nospawn: true
        }
      }
    }
  });

  grunt.registerTask('default', ['less', 'watch']);
};

/*Note that providing in the watch path will watch files recursively under that directory.*/

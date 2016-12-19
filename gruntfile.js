module.exports = function(grunt){
  //configuração
  grunt.initConfig({
    sass: {
      options: {
        sourceMap: true,
        outputStyle: 'compressed'
      },
      dist: {
        files: {
          'assets/css/bootstrap.min.css': 'components/bootstrap/dist/css/bootstrap.css',
          'assets/css/estilo.min.css': 'globais/css/main.scss',
        }
      }
    },
    // concatenar e minificar js
    uglify: {
      my_target: {
        files: {
          'assets/js/bootstrap.min.js': ['components/bootstrap/dist/js/bootstrap.js'],
          'assets/js/funcoes.min.js' : ['globais/js/funcoes.js']
        }
      }
    },
    // watch - acompanha as modificações nos arquivos deforma altomatica
    watch: {
      options:{
        livereload: true
      },
      sass: {
        files: 'globais/css/*.scss',
        tasks: 'sass'
      },
      js: {
        files:'globais/js/funcoes.js',
        tasks: 'uglify'
      }
    },
  });
  //load plugins
  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  // task register
  grunt.registerTask('assistir',['watch']);
}

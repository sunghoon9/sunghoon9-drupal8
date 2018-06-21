module.exports = function(grunt) {
    // Project configuration.
    grunt.initConfig({
      pkg: grunt.file.readJSON('package.json'),
      //uglify 설정
      uglify: {
        dev: {
          options: {
            mangle:false,
            beautify: {
              braces:true
            },
            banner: '/* <%= grunt.template.today("yyyy-mm-dd") %> */' //파일의 맨처음 붙는 banner 설정
          },
          // build: {
          //     src: 'assets/js/*.js', //uglify할 대상 설정
          //     dest: 'js/scripts.js' //uglify 결과 파일 설정
          // }
          files: {
            'js/scripts.js': [
              'assets/js/*.js'
            ]
          }
        }
      },
      //concat 설정
      // concat:{
      //     basic: {
      //         src: ['public/js/common/util.js', 'public/js/app.js', 'public/js/lib/.js', 'public/js/ctrl/.js'], //concat 타겟 설정(앞에서부터 순서대로 합쳐진다.)
      //         dest: 'public/build/result.js' //concat 결과 파일
      //     }
      // },
      compass:{
        prod: {
          options: {
            config: 'config.rb',
            environment: 'production'
          }
        },
        dev: {
          config: 'config.rb'
        }
      },
      watch: {
        sass: {
          files: [
            'assets/sass/*.scss'
          ],
          tasks: ['compass:dev']
        }, // sass
        javascripts: {
          files: [
            'assets/js/*.js'
          ], // We only need to watch the custom js
          // tasks: ['uglify:js_dev']
          tasks: ['uglify:dev']
        } // javascripts
      }
    });

    // Load the plugin that provides the "uglify", "concat" tasks.
    grunt.loadNpmTasks('grunt-contrib-uglify');
    // grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-compass');

    // Default task(s).
    grunt.registerTask('default', ['uglify', 'watch']); //grunt 명령어로 실행할 작업s
};

var gulp = require('gulp');
var sass = require('gulp-sass');
var minify = require('gulp-clean-css');

var svgSprite = require('gulp-svg-sprite');

var plugins = require("gulp-load-plugins")({
  pattern: ['gulp-*', 'gulp.*'],
  replaceString: /\bgulp[\-.]/
});

var input = './css/**/*.scss';
var output = './css/';

var jsinput = './js/vendor/*.js';
var jsoutput = './js/';

gulp.task('styles', function() {
  gulp.src(input)
    // Error reporting
    .pipe(sass().on('error', sass.logError))
    // Minify
    .pipe(minify())
    // Save
    .pipe(gulp.dest(output))
});

// JS Scripts
gulp.task('scripts', function () {
  return gulp.src(jsinput)
    .pipe(plugins.concat('/application.js'))
    .on("error", plugins.notify.onError(function (error) {
      return error.message;
    }))
    .pipe(plugins.rename({ suffix: '.min' }))
    .pipe(plugins.uglify())
    .on("error", plugins.notify.onError(function (error) {
      return error.message;
    }))
    .pipe(gulp.dest(jsoutput));
});

//Watch task
gulp.task('watch',function() {
  gulp.watch(input,['styles']);
  gulp.watch(jsinput, ['scripts']);
});
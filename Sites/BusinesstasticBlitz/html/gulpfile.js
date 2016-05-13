/**
 * Rename to gulpfile.js, run npm i, edit proxy below, then run gulp
 */


var gulp = require('gulp');

var sass = require('gulp-sass'),
    browserSync = require('browser-sync').create();

gulp.task('sass', function() {
  return gulp.src('assets/sass/styles.scss')
    .pipe(sass({
      errLogToConsole: true,
      sourceComments: true,
    }).on('error', sass.logError))
    .pipe(gulp.dest('assets/css'))
    .pipe(browserSync.stream());
});

gulp.task('watch', function() {

  browserSync.init({
    // CHANGE TO BE YOUR PROXY
    // - the name you type into your browser on local!
    //proxy: "your local host here!!",
    proxy: "localhost:8000",
  });

  gulp.watch('assets/**/*.scss', ['sass']);
  gulp.watch('assets/**/*.js').on('change', browserSync.reload);
});

gulp.task('default', ['sass', 'watch']);

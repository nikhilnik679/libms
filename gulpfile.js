const gulp = require('gulp');
const sass = require('gulp-sass');
const uglifycss = require('gulp-uglifycss');

gulp.task('sass', async () => gulp.src('public/sass/*.scss')
  .pipe(sass()).pipe(gulp.dest('public/sass')));

gulp.task('css', async () => {
  gulp.src('public/sass/*.css')
    .pipe(uglifycss({
      uglyComments: true,
    }))
    .pipe(gulp.dest('public/dist/'));
});

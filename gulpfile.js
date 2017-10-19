var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var minify = require('gulp-minify-css');
var watch = require('gulp-watch');
var batch = require('gulp-batch');

gulp.task('sass', function () {
    return gulp.src('./scss/style.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(concat('style.css'))
        .pipe(minify())
        .pipe(gulp.dest('.'));
});

gulp.task('watch-sass', function () {
    watch('**/*.scss', batch(function (events, done) {
        gulp.start('sass', done);
    }));
});
'use strict';
 
var gulp = require('gulp');
var sass = require('gulp-sass');
var runSequence = require('run-sequence');
var clean = require('gulp-clean');
var babel = require('gulp-babel');

gulp.task('sass', function () {
  return gulp.src('./src/sass/style.scss')
	.pipe(sass().on('error', sass.logError))
	.pipe(gulp.dest('./'));
});

gulp.task('babel', function () {
	return gulp.src('./src/js/**.js')
		.pipe(babel({
			presets: ['env']
		}))
		.pipe(gulp.dest('./build/js/'))
});

gulp.task('watch', gulp.series('sass', function() { 
	gulp.watch('./src/sass/**/*.scss').on('change', gulp.parallel('sass'));
	gulp.watch('./src/js/*.js').on('change', gulp.parallel('babel'));
}));

gulp.task('clean', function () {
	return gulp.src('./build/', {read: false})
		.pipe(clean());
});

gulp.task('copy', function (done) {
  return gulp.src('./src/**', { read: false })
	  .pipe(gulp.dest('./build/'));
});

gulp.task('default', gulp.series('clean', 'copy', 'sass', 'babel', 'watch'));

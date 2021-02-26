const gulp = require('gulp');
const sass = require('gulp-sass');
const sassGlob = require('gulp-sass-glob');
const autoprefixer = require('gulp-autoprefixer');
const gcmq = require('gulp-group-css-media-queries');
const cleanCSS = require('gulp-clean-css');

var plumber  = require('gulp-plumber');
//var uglify   = require('gulp-uglify');
var uglify = require('gulp-uglify-es').default;
var rename   = require('gulp-rename');

const browsersync = require('browser-sync');

// Dev Paths
var js_dev   = "./assets/dev_js/**/*.js";
// Dist Paths
var js_dist  = "./assets/js";

function scripts(){
    return(
    gulp.src(js_dev)
        .pipe(uglify())
        .pipe(rename({suffix: ".min"}))
        .pipe(gulp.dest(js_dist))
    )
}

function compile(){
	return(
    gulp.src('./assets/sass/*.sass')
        .pipe(sassGlob())
		.pipe(sass({outputStyle:'compressed'}))
		.pipe(gcmq())
		.pipe(autoprefixer({
			overrideBrowserslist: ['last 3 versions'],
			cascade: false
		}))
		.pipe(cleanCSS())
		.pipe(gulp.dest('./assets/css/'))
	)
}
exports.compile = compile;

function watchfiles(){
	gulp.watch('./assets/sass/**', compile);
    gulp.watch('./assets/dev_js/**', scripts);
}
const watch = gulp.parallel(watchfiles)
exports.watch = watch;

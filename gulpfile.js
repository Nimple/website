//--- REQUIRES -----------------------------------------------------------------
var gulp     = require('gulp');
var concat   = require('gulp-concat');
var uglify   = require('gulp-uglify');
var imagemin = require('gulp-imagemin');
var sass     = require('gulp-sass')
var minify   = require('gulp-minify-css');
var clean    = require('gulp-clean');
var ftp      = require('gulp-ftp');

//--- PATHS --------------------------------------------------------------------
var paths = {
	js_src: './js/src/main.js',
	js_dest: './js/',

	images_src: ['./img/original/**/*', '!./img/original/**/*.psd'],
	images_dest: './img/',

	css_src: './css/src/*.scss',
	css_dest: './css/',

	publish: [	'!./css/src/*',
				'!./img/original/**/*',
				'!./js/src/*',
				'!./bower_components/**/*',
				'!./node_modules/**/*',
				'!./subl/*',
				'!./.gitignore',
				'!./package.json',
				'!./README.md',
				'!./gulpfile.js',
				'./**/*',
			]
};

//--- TASKS --------------------------------------------------------------------
gulp.task('clean', function () {
	return gulp.src(['./img/**/*', '!./img/original/', '!./img/original/**',
				 './js/*.js',
				 './css/*.css'], {read: false})
		.pipe(clean());
});

gulp.task('css', function () {
	return gulp.src(paths.css_src)
		.pipe(sass())
		.pipe(minify({keepBreaks:false}))
		.pipe(gulp.dest(paths.css_dest));
});

gulp.task('js', function() {
	return gulp.src(paths.js_src)
		.pipe(uglify())
		.pipe(concat('main.min.js'))
		.pipe(gulp.dest(paths.js_dest));
});

gulp.task('img', function() {
	return gulp.src(paths.images_src)
		.pipe(imagemin({
			optimizationLevel: 5,
			progressive: true,
			svgoPlugins: [{removeViewBox: false}]
		}))
		.pipe(gulp.dest(paths.images_dest));
});

gulp.task('publish_beta', function () {
	gulp.src(paths.publish)
		.pipe(ftp({
			host: 'ftp.appstronauten.com',
			remotePath: '/webseiten/appstronauten/_beta/',
			user: '319069-ftp',
			pass: '00414739nimpleftp'
		}));
});

gulp.task('publish_release', function () {
	gulp.src(paths.publish)
		.pipe(ftp({
			host: 'ftp.appstronauten.com',
			remotePath: '/webseiten/appstronauten/',
			user: '319069-ftp',
			pass: '00414739nimpleftp'
		}));
});


gulp.task('watch', function() {
	gulp.watch('css/src/*', ['css'], function(event) {
		console.log(event.type);
	});
	gulp.watch('js/src/*', ['js']);
});

gulp.task('default', ['js', 'css', 'img'], function() {

});

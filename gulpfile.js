var gulp = require('gulp');
var less = require('gulp-less');
var smartgrid = require('smart-grid');
var htmlmin = require('gulp-htmlmin');
var cleanCSS = require('gulp-clean-css');
var browserSync = require('browser-sync').create();

const settings = {
	root: './src',
	dist: './dist',
	srcless: './src/less/style.less',
	srccss: './dist/css',
	srchtml: './dist/*.php'  
};


const smartGrigConf = {
		outputStyle: 'less',
		colums: 12,
		offset: '30px',   // межклоночник
		mobileFirst: false,
		container: {
				maxWidth: '1280px',
				fields: '30px'   // отступ от края экрана
		},
		breakPoints: {
			mgxl: {
				width: '1800px',
				fields: '30px'
			},
			xxl: {
				width: '1400px',
				fields: '30px'
			},
			xl: {
				width: '1140px',
				fields: '30px'
			},
			lg: {
				width: '960px',
				fields: '30px'
			},
			md: {
				width: '720px',
				fields: '20px'
			},
			sm: {
				width: '540px',
				fields: '10px'
			},
			xs: {
				width: '480px',
				fields: '5px'
			}
		}
};

gulp.task('preproc', function () {
	return gulp.src(settings.srcless)
	 .pipe(less())
	 .pipe(gulp.dest(settings.srccss))
   .pipe(cleanCSS())
   .pipe(gulp.dest('./dist/css'))
   .pipe(browserSync.reload({
	 		stream: true
	 }));
});


gulp.task('htmlmin', function () {
 gulp.src('./src/*.php')  
  .pipe(gulp.dest('./dist'))
		.pipe(browserSync.reload({
				stream: true
			}));
});


gulp.task('js', function() {
  gulp.src('./src/js/*.js')
  .pipe(gulp.dest('./dist/js'))
  .pipe(browserSync.reload({
    stream: true
  }));
});



gulp.task('watch', ['preproc', 'htmlmin', 'js', 'browserSync'], function () {
	gulp.watch(settings.srcless, ['preproc']);    
  gulp.watch('./src/*.php', ['htmlmin']);
  gulp.watch('./src/js/*.js', ['js']);
});

gulp.task('grid', function () {
		smartgrid(settings.root + '/less', smartGrigConf);
});




gulp.task('browserSync', function () {
		browserSync.init({
			server: {
          		baseDir: settings.dist
				// proxy: 'http://localhost/learnphp/dist/index.html'
				// http://localhost/www/learnphp/dist/
			}
		});
});
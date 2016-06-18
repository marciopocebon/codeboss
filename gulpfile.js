require('es6-promise').polyfill();
var gulp         = require('gulp');
var concat       = require('gulp-concat');
var sass         = require('gulp-sass');
var cleanCss     = require('gulp-clean-css');
var jshint       = require('gulp-jshint');
var uglify       = require('gulp-uglify');
var ngmin        = require('gulp-ngmin');
var sourcemaps   = require('gulp-sourcemaps');
var notify       = require('gulp-notify');
var wiredep      = require('wiredep').stream;
var autoprefixer = require('gulp-autoprefixer');
var browserSync  = require('browser-sync');

/**
 * Assets paths
 * @type {Object}
 */
var paths = {
  styles: ['./resources/assets/scss/**/*.scss'],
  scripts: ['./resources/assets/js/**/*.js']
};

/**
 * Compile styles
 */
gulp.task('styles', function() {
  gulp.src(['./resources/assets/scss/app.scss'])
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(concat('app.min.css'))
    .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
    .pipe(cleanCss())
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('./public/assets/build'))
    .pipe(notify("CSS generated!"))
    .pipe(browserSync.stream({once: true}));
});

/**
 * Compile scripts
 */
gulp.task('scripts', function() {
  gulp.src(paths.scripts)
    .pipe(sourcemaps.init())
    .pipe(jshint('.jshintrc'))
    .pipe(jshint.reporter('default'))
    .pipe(concat('app.min.js'))
    .pipe(ngmin())
    .pipe(uglify({mangle: false}))
    .pipe(gulp.dest('./public/assets/build'))
    .pipe(notify("JS generated!"))
    .pipe(browserSync.stream({once: true}));
});

/**
 * Compile JADE templates and inject bower dependencies
 */
gulp.task('templates', function() {
  gulp.src(['./resources/views/templates/master.blade.php'])
    .pipe(wiredep())
    .pipe(gulp.dest('./resources/views/templates'))
    .pipe(browserSync.stream({once: true}));
});

/**
 * Watch for changes
 */
gulp.task('watch', function() {
  gulp.watch(paths.styles, ['styles']);
  gulp.watch(paths.scripts, ['scripts']);
});

/**
 * Sync html files
 */
gulp.task('html', function() {
    gulp.watch('./resources/views/**/*.blade.php').on('change', function() {
        browserSync.reload();
    });
});

/**
 * Sync / auto reload
 */
gulp.task('serve', ['watch', 'html'], function() {
    browserSync.init(null, {
        proxy: "http://localhost:8080"
    });
});

/**
 * Build dist folders
 */
gulp.task('build', ['styles', 'scripts']);

/**
 * Watch for changes
 */
gulp.task('default', ['watch']);

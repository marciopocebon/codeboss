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
var browserSync = require('browser-sync');
var nodemon = require('gulp-nodemon');

/**
 * Assets paths
 * @type {Object}
 */
var paths = {
  styles: ['./public/assets/scss/**/*.scss'],
  scripts: ['./public/assets/js/**/*.js']
};

/**
 * Compile styles
 */
gulp.task('styles', function() {
  gulp.src(['./public/assets/scss/app.scss'])
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(concat('app.min.css'))
    .pipe(autoprefixer({
      browsers: ['last 2 versions'],
      cascade: false
    }))
    .pipe(cleanCss())
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('./public/build'))
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
    .pipe(gulp.dest('./public/build'))
    .pipe(notify("JS generated!"))
    .pipe(browserSync.stream({once: true}));
});

/**
 * Compile JADE templates and inject bower dependencies
 */
gulp.task('templates', function() {
  gulp.src(['./public/index.html'])
    .pipe(wiredep())
    .pipe(gulp.dest('./public/'))
    .pipe(browserSync.stream({once: true}));;
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
    gulp.watch('./public/**/*.html').on('change', function() {
        browserSync.reload();
    });
});

/**
 * Start node server
 */
gulp.task('nodemon', function (cb) {
    var called = false;
    return nodemon({script: 'index.js'}).on('start', function () {
        if (!called) {
            called = true;
            cb();
        }
    });
});

/**
 * Sync / auto reload
 */
gulp.task('serve', ['watch', 'html', 'nodemon'], function() {
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
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
var rename       = require('gulp-rename');
var autoprefixer = require('gulp-autoprefixer');

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
    .pipe(notify("CSS generated!"));
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
    .pipe(notify("JS generated!"));
});

/**
 * Compile JADE templates and inject bower dependencies
 */
gulp.task('templates', function() {
  gulp.src(['./public/index.html'])
    .pipe(wiredep())
    .pipe(gulp.dest('./public/'));
});

/**
 * Build dist folders
 */
gulp.task('build', ['styles', 'scripts']);

/**
 * Watch for changes
 */
gulp.task('watch', function() {
  gulp.watch(paths.styles, ['styles']);
  gulp.watch(paths.scripts, ['scripts']);
});

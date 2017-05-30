var gulp = require('gulp')
var autoprefixer = require('gulp-autoprefixer')
var notify = require('gulp-notify')
var sass = require('gulp-sass')
var cssmin = require('gulp-cssmin')
var babel = require('gulp-babel')
var concat = require('gulp-concat')
var rename = require('gulp-rename')
var uglify = require('gulp-uglify')

var paths = {
  scripts: 'js/',
  scss: '_assets/scss/**/*.scss',
  css: '_assets/css',
  js: '_assets/js/**/*.js'
}

gulp.task('watch', ['sass'], function() {
  gulp.watch(paths.scss, ['sass'])
  gulp.watch(paths.js, ['js'])
})

gulp.task('sass', function() {
  gulp.src('_assets/scss/*.scss')
    .pipe(sass())
    .on('error', function(err) {
      console.log(err.message)
      return notify().write(err)
    })
    .pipe(autoprefixer({
      browsers: ['last 2 versions'],
      cascade: false
    }))
    .pipe(cssmin())
    .pipe(gulp.dest('.'))
    .pipe(notify('Sass compiled successfully.'))
})

gulp.task('js', function() {
  gulp.src(paths.js)
    .pipe(babel({
      presets: ['es2015']
    }))
    .pipe(concat('index.js'))
    .pipe(rename({suffix: '.min'}))
    .pipe(uglify())
    .pipe(gulp.dest('./dist/js'))
    .pipe(notify('Minified JS.'))
})


gulp.task('default', ['watch','sass', 'js'])

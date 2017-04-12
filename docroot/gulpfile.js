'use strict';
var gulp = require('gulp'),
  sass = require('gulp-sass'),
  sourcemaps = require('gulp-sourcemaps'),
  autoprefixer = require('gulp-autoprefixer'),
  importer = require('node-sass-globbing'),
  plumber = require('gulp-plumber'),
  browserSync = require('browser-sync').create(),
  cssmin = require('gulp-cssmin'),
  uncss = require('gulp-uncss'),
  stripCssComments = require('gulp-strip-css-comments'),
  livereload = require('gulp-livereload'),
  notify     = require('gulp-notify'),
  notifier   = require('node-notifier'),
  rename     = require('gulp-rename');

//JS
var uglify = require('gulp-uglify'),
  stripDebug = require('gulp-strip-debug');

var sass_config = {
  importer: importer,
  includePaths: [
    'node_modules/breakpoint-sass/stylesheets/',
    'node_modules/singularitygs/stylesheets/',
    'node_modules/modularscale-sass/stylesheets',
    'node_modules/compass-mixins/lib/'
  ]
};

// Gulp plumber error handler
var onError = function(err) {
  console.log(err);
}


gulp.task('default', [
  'sass_themes',
  'sass_themes_mt', 
  'sass_modules',
  'sass_modules_mt',
  'scripts_themes',
  'scripts_themes_mt', 
  'scripts_modules', 
  'scripts_modules_mt', 
  'watch'
]);

gulp.task('scripts_themes', function() {
  return gulp.src('./themes/custom/**/js_dev/*.js')
    .pipe(plumber({
      errorHandler: onError
    }))
//    .pipe(stripDebug())
    .pipe(uglify())
    .pipe(rename(function (path) {
      path.dirname = path.dirname.replace('/js_dev', '/js');
    }))
    .pipe(gulp.dest('./themes/custom/'));
    //.pipe(notify('<%= file.relative %>'));
});

gulp.task('scripts_modules', function() {
  return gulp.src('./modules/custom/**/js_dev/*.js')
    .pipe(plumber({
      errorHandler: onError
    }))
//    .pipe(stripDebug())
    .pipe(uglify())
    .pipe(rename(function (path) {
      path.dirname = path.dirname.replace('/js_dev', '/js');
    }))
    .pipe(gulp.dest('./modules/custom/'));
    //.pipe(notify('<%= file.relative %>'));
});

gulp.task('scripts_themes_mt', function() {
  return gulp.src('./themes/mt/**/js_dev/*.js')
    .pipe(plumber({
      errorHandler: onError
    }))
//    .pipe(stripDebug())
    .pipe(uglify())
    .pipe(rename(function (path) {
      path.dirname = path.dirname.replace('/js_dev', '/js');
    }))
    .pipe(gulp.dest('./themes/mt/'));
    //.pipe(notify('<%= file.relative %>'));
});

gulp.task('scripts_modules_mt', function() {
  return gulp.src('./modules/mt/**/js_dev/*.js')
    .pipe(plumber({
      errorHandler: onError
    }))
//    .pipe(stripDebug())
    .pipe(uglify())
    .pipe(rename(function (path) {
      path.dirname = path.dirname.replace('/js_dev', '/js');
    }))
    .pipe(gulp.dest('./modules/mt/'));
    //.pipe(notify('<%= file.relative %>'));
});

// Combine and minify Sass/Compass stylesheets
gulp.task('sass_themes', function () {
  gulp.src('./themes/custom/**/sass/*.scss')
    .pipe(plumber({
      errorHandler: onError
    }))
    .pipe(sourcemaps.init())
    .pipe(sass(sass_config).on('error', sass.logError))
    .pipe(autoprefixer({
      browsers: ['last 2 version']
    }))
    .pipe(stripCssComments({preserve: false}))
    .pipe(cssmin())
    .pipe(sourcemaps.write('.'))
    .pipe(rename(function (path) {
      path.dirname = path.dirname.replace('/sass', '/css');
    }))
    .pipe(gulp.dest('./themes/custom/'));
    //.pipe(notify('<%= file.relative %>'));
});

gulp.task('sass_modules', function () {
  gulp.src('./modules/custom/**/sass/*.scss')
    .pipe(plumber({
      errorHandler: onError
    }))
    .pipe(sourcemaps.init())
    .pipe(sass(sass_config).on('error', sass.logError))
    .pipe(autoprefixer({
      browsers: ['last 2 version']
    }))
    .pipe(stripCssComments({preserve: false}))
    .pipe(cssmin())
    .pipe(sourcemaps.write('.'))
    .pipe(rename(function (path) {
      path.dirname = path.dirname.replace('/sass', '/css');
    }))
    .pipe(gulp.dest('./modules/custom/'));
    //.pipe(notify('<%= file.relative %>'));
});

gulp.task('sass_modules_mt', function () {
  gulp.src('./modules/mt/**/sass/*.scss')
    .pipe(plumber({
      errorHandler: onError
    }))
    .pipe(sourcemaps.init())
    .pipe(sass(sass_config).on('error', sass.logError))
    .pipe(autoprefixer({
      browsers: ['last 2 version']
    }))
    .pipe(stripCssComments({preserve: false}))
    .pipe(cssmin())
    .pipe(sourcemaps.write('.'))
    .pipe(rename(function (path) {
      path.dirname = path.dirname.replace('/sass', '/css');
    }))
    .pipe(gulp.dest('./modules/mt/'));
    //.pipe(notify('<%= file.relative %>'));
});

gulp.task('sass_themes_mt', function () {
  gulp.src('./themes/mt/**/sass/*.scss')
    .pipe(plumber({
      errorHandler: onError
    }))
    .pipe(sourcemaps.init())
    .pipe(sass(sass_config).on('error', sass.logError))
    .pipe(autoprefixer({
      browsers: ['last 2 version']
    }))
    .pipe(stripCssComments({preserve: false}))
    .pipe(cssmin())
    .pipe(sourcemaps.write('.'))
    .pipe(rename(function (path) {
      path.dirname = path.dirname.replace('/sass', '/css');
    }))
    .pipe(gulp.dest('./themes/mt/'));
    //.pipe(notify('<%= file.relative %>'));
});

// This handles watching and running tasks as well as telling our LiveReload server to refresh things
gulp.task('watch', function() {
  // Check for modifications in particular directories

  // Whenever a stylesheet is changed, recompile
  gulp.watch('./themes/custom/**/sass/**', ['sass_themes']);
  gulp.watch('./themes/mt/**/sass/**', ['sass_themes_mt']);
  gulp.watch('./modules/custom/**/sass/**', ['sass_modules']);
  gulp.watch('./modules/mt/**/sass/**', ['sass_modules_mt']);

  // If user-developed Javascript is modified, re-run our hinter and scripts tasks
  gulp.watch('./themes/custom/**/js_dev/*.js', ['scripts_themes']);
  gulp.watch('./themes/mt/**/js_dev/*.js', ['scripts_themes_mt']);
  gulp.watch('./modules/custom/**/js_dev/*.js', ['scripts_modules']);
  gulp.watch('./modules/mt/**/js_dev/*.js', ['scripts_modules_mt']);

  // Create a LiveReload server
  livereload.listen();

  // Watch any file for a change in the 'src' folder and reload as required
  gulp.watch([
    './themes/custom/**/js/*',
    './themes/mt/**/js/*',
    './modules/custom/**/js/*',
    './modules/mt/**/js/*',
    './themes/custom/**/css/style.css',
    './themes/mt/**/css/style.css',
    './modules/custom/**/css/style.css',
    './modules/mt/**/css/style.css'
  ]).on('change', function(files) {
    livereload.changed(files);
  })
});
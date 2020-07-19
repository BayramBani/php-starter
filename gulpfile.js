const {src, dest, parallel, series} = require('gulp');
const cleanBuild = require('gulp-clean');
const cssMinify = require('gulp-csso');
const fontMinify = require('gulp-fontmin');
const jsMinify = require('gulp-uglify');
const htmlMinify = require('gulp-minify-html');
const imgMinify = require('gulp-webp');
const concat = require('gulp-concat');
const babel = require("gulp-babel");

function clean() {
  return src('build/*', {read: false})
    .pipe(cleanBuild())
}

function css() {
  return src('assets/css/**/*.css')
    .pipe(cssMinify())
    .pipe(concat('bundel.min.css'))
    .pipe(dest('build/assets/'))
}

function js() {
  return src(['assets/js/jquery.js', 'assets/js/font-awesome.all.js', 'assets/js/bootstrap.bundle.js' ,'assets/js/page/*' ], {sourcemaps: true})
    .pipe(babel())
    .pipe(jsMinify())
    .pipe(concat('bundel.min.js'))
    .pipe(dest('build/assets/', {sourcemaps: false}))
}

function font() {
  return src('assets/font/**/*')
    .pipe(fontMinify())
    .pipe(dest('build/assets/font'));
}

function index() {
  return src('index.php', {sourcemaps: true})
    .pipe(htmlMinify())
    .pipe(dest('build/'))
}

function core() {

  return src('core/**/*')
    //.pipe(htmlMinify())
    .pipe(dest('build/core/'))
}

function vendor() {
  return src('vendor/**/*')
    .pipe(dest('build/vendor/'))
}

function htaccess() {
  return src('.htaccess')
    .pipe(dest('build/'))
}

function favicon() {
  return src('favicon.ico')
    .pipe(dest('build/'))
}

function img() {
  return src('assets/img/**/*')
    .pipe(imgMinify())
    .pipe(dest('build/assets/img/'))
}


exports.clean = clean;
exports.js = js;
exports.css = css;
exports.index = index;
exports.core = core;
exports.htaccess = htaccess;
exports.default = series(clean, parallel(css, font, js, index, core, vendor, htaccess, favicon, img));

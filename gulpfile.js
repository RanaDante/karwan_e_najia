var gulp = require('gulp');
// var imagemin = require('gulp-imagemin');
// var images_src = './assets/uploads';
var sass = require('gulp-sass')(require('sass'));
// var concat = require('gulp-concat');
// var minifyCss = require('gulp-minify-css');
var autoprefixer = require('gulp-autoprefixer');

function sass_sub(callback) {
    return gulp.src('sass/**/*.+(scss|sass)')
      .pipe(sass()) // Using gulp-sass
      .pipe(autoprefixer('last 2 version'))
      .pipe(gulp.dest('css/'))
      callback();
}

function sass_main(callback) {
    return gulp.src('sass/*.+(scss|sass)')
      .pipe(sass()) // Using gulp-sass
      .pipe(autoprefixer('last 2 version'))
      .pipe(gulp.dest('css/'))
      callback();
}


// gulp.task('images_optimization', function(cb) {
//     return gulp.src(images_src + '/*')
//     .pipe(imagemin([
//         imagemin.gifsicle({interlaced: true}),
//         imagemin.mozjpeg({quality: 60, progressive: true}),
//         imagemin.optipng({optimizationLevel: 5}),
//         imagemin.svgo({
//             plugins: [
//                 {removeViewBox: true},
//                 {cleanupIDs: false}
//             ]
//         })
//     ]))
//     .pipe(gulp.dest('./assets/uploads_new'))
//     cb();
// });

// gulp.task('images_optimization_sub', function(cb) {
//     return gulp.src(images_src + '/**/**/*')
//     .pipe(imagemin([
//         imagemin.gifsicle({interlaced: true}),
//         imagemin.mozjpeg({quality: 60, progressive: true}),
//         imagemin.optipng({optimizationLevel: 5}),
//         imagemin.svgo({
//             plugins: [
//                 {removeViewBox: true},
//                 {cleanupIDs: false}
//             ]
//         })
//     ]))
//     .pipe(gulp.dest('./assets/uploads_new'))
//     cb();
// });

// function minify_css(callback) {
//     gulp.src('assets/css/**/*.css')
//     .pipe(minifyCss())
//     .pipe(concat('styles.min.css'))
//     .pipe(gulp.dest('assets/css'))
//     callback();
// }

function watch() {
    gulp.watch("sass/**/*.+(scss|sass)", sass_sub);
    gulp.watch("sass/*.+(scss|sass)", sass_main);
}

gulp.task('sass_sub', sass_sub);
gulp.task('sass_main', sass_main);
// gulp.task('minify_css', minify_css);
gulp.task('watch', gulp.parallel(sass_sub, sass_main, watch))
"use scrict";

const gulp = require('gulp');
const sass = require('gulp-sass');
const cleanCSS = require('gulp-clean-css');

const browserify = require('browserify');
const source = require('vinyl-source-stream');
const buffer = require('vinyl-buffer');
const babel = require('gulp-babel');
const uglify = require('gulp-uglify');

const options =
{
    babel: { presets: ['env'], plugins: ['transform-object-rest-spread'] },
};

const config =
{
    js:
    {
        entryPoint: './resources/scripts/src/main.js',
        outputDirectory: './resources/scripts',
        outputFile: 'bundle.js',
    },

    style:
    {
        entryPoints: './resources/style/scss/**/*.scss',
        outputDirectory: './resources/style/css/'
    },
};

const logError = (error) =>
{
    console.log(error);
};

gulp.task('js', () =>
{
    browserify(config.js.entryPoint)
        .bundle()
        .pipe(source(config.js.outputFile))
        .pipe(buffer())
        .pipe(babel(options.babel))
            .on('error', logError)
        .pipe(uglify())
            .on('error', logError)
        .pipe(gulp.dest(config.js.outputDirectory));
});

gulp.task('sass', () =>
{
    gulp.src(config.style.entryPoints)
        .pipe(sass())
            .on('error', logError)
        .pipe(cleanCSS())
            .on('error', logError)
        .pipe(gulp.dest(config.style.outputDirectory));
});

gulp.task('watch', () =>
{
    gulp.watch(config.style.entryPoints, ['sass']);
    gulp.watch(config.js.entryPoint, ['js']);
});

gulp.task('default', ['sass', 'js']);
'use strict';
 
/**
 * Importing specific gulp API functions
 * lets us write them below as series() instead of gulp.series()
 */
const { src, dest, watch, series, parallel } = require('gulp');

// Importing all the Gulp-related packages
// CSS related plugins
const sass = require( 'gulp-sass' );
const autoprefixer = require( 'autoprefixer' );
const postcss = require( 'gulp-postcss' );
const cssnano = require( 'cssnano' );
const cleanCSS = require('gulp-clean-css');

// Utility related plugins
const rename = require( 'gulp-rename' );
const sourcemaps = require( 'gulp-sourcemaps' );
 
sass.compiler = require('node-sass');

// Project related variables
// File paths
const path = {
    css: {
        src: [
            'node_modules/bootstrap/scss/bootstrap.scss',
            './assets/scss/**/*.scss'
        ],
        cssFD: './assets/css'
    },
    mapURL: './'
}

/**
 * Compile scss files to css
 */
function styles() {
    return src( path.css.src )
        .pipe( sourcemaps.init() )
        .pipe( sass({
            errLogToConsole: true,
            outputStyle: 'compressed'
          })
          .on('error', sass.logError) )
        .pipe( postcss( [autoprefixer(), cssnano()] ) )
        .pipe( rename( {suffix: '.min'} ) )
        .pipe(sourcemaps.write( path.mapURL ))
        .pipe(dest( path.css.cssFD ));
}

/**
 * Watch task
 */
function watchTask() {
    watch( path.css.src, {usePolling : true}, series( styles ) );
}

exports.styles = styles;
exports.watchTask = watchTask;

exports.default = series( styles, watchTask );
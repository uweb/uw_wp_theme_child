import gulp from 'gulp';
import autoprefixer from 'autoprefixer';
import browserSync from 'browser-sync';
import concat from 'gulp-concat';
import cssnano from 'gulp-cssnano';
import postcss from 'gulp-postcss';
import print from 'gulp-print';
import sass from 'gulp-sass';

// Initialize Browser Sync
const server = browserSync.create();

function reload(done) {
	server.reload();
	done();
}

function serve(done) {
	server.init({
		proxy: 'https://uw-multisite.local/social/',
		port: '8181'
	});
	done();
}

/*
* You can also declare named functions and export them as tasks
*/
export function publicStyles() {
	return gulp.src('*.scss')
		.pipe(print())
		.pipe(sass({
			outputStyle: 'compresed',
			precision: 3,
			errLogToConsole: true
		}).on('error', sass.logError))
		.pipe(postcss([
			autoprefixer,
			cssnano
		]))
		.pipe(concat('style.css'))
		.pipe(gulp.dest('.'));
}

export function watch() {
	gulp.watch('*.scss', gulp.series(publicStyles, reload));
}

// Run serve on first load, which also watches
const firstRun = gulp.series(publicStyles, serve, watch);

/**
 * Run the whole thing.
 */
export default firstRun;
const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
//.extract(['fuse'])



mix.scripts([
    'node_modules/jquery-slim/dist/jquery.slim.min.js',
    'node_modules/popper.js/umd/popper.min.js',
    'node_modules/lodash/lodash.min.js',
    'public/libs/fuse.js',
    'public/js/drinkModel.js',
    'public/js/drink.js'

], 'public/js/bundle.js');




/*
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.15/lodash.min.js"></script>
<script src="libs/fuse.js"></script>
<script src="js/drinkModel.js"></script>
<script src="js/drink.js"></script>
*/







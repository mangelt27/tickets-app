const mix = requiere('laravel-mix');


mix


.styles([
    'resources/vendor/fontawesome-free-6.5.2-web/css/all.min.css',
    'resources/css/adminlte.css',
],'public/css/app.css')

.js('resources/js/app.js','public/js')

.scripts([
    'resources/vendor/jquery/jquery.min.js',
    'resources/vendor/bootstrap/js/bootstrap.bundle.min.js',

],'public/js/vendor.js')

//.scripts([],'public/js/app.js')

.copy('resources/vendor/fontawesome-free-6.5.2-web/webfonts','public/webfonts')
.copy('resources/img','public/img')

//.sass('resources/sass/app.scss','public/css');
.version()
;

let mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .js('resources/js/script.js', 'public/js')
   // .scripts([
   //    'resourcess/js/app.js',
   // // 'resources/js/jquery-3.6.0.min.js',
   // // 'resources/js/bootstrap.bundle.min.js',
   // // 'resources/js/owl.carousel.min.js',
   // // 'resources/js/script.js',
   // // 'resources/js/addtocart.js'
   // ], 'public/js/all.js')
   .scripts([
      'resources/js/admin/app.js',
      'resources/js/bootstrap.bundle.min.js'
  ],'public/js/admin.js')
   .styles([
      'resources/css/normalize.css',
      'resources/css/bootstrap.min.css',
      'resources/css/boxicons.min.css',
      'resources/css/owl.carousel.min.css',
      'resources/css/owl.theme.default.min.css',
      'resources/css/style.css',
      'resources/css/responsive.css'
   ], 'public/css/all.css')
   .styles([
      'resources/css/bootstrap.min.css',
      'resources/css/admin/index.css',
      'resources/css/admin/items.css',
      'resources/css/admin/login.css',
      'resources/css/admin/user.css',
   ], 'public/css/admin.css')
   .setPublicPath('public');

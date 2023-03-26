<!doctype html>
<html lang="en">
<head>
 <meta charset="utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1" />
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
rel="stylesheet" crossorigin="anonymous" />
<link rel='stylesheet' href='<?php echo e(asset('assets/css/style.css')); ?>' type='text/css' />
    <link rel='stylesheet' href='<?php echo e(asset('assets/css/jquery.mmenu.css')); ?>' type='text/css' />
    <link rel='stylesheet' href='<?php echo e(asset('assets/css/responsive.css')); ?>' type='text/css' />
    <link rel='stylesheet' href='//fonts.googleapis.com/css?family=Lato:400,700' type='text/css' />
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.11.2/css/all.css?wpfas=true' type='text/css' />
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.11.2/css/v4-shims.css?wpfas=true' type='text/css' />
    <?php echo $__env->yieldContent('styles'); ?>
 <title><?php echo $__env->yieldContent('title', 'Club 2G'); ?></title>
</head>
<body>
 <!-- header -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
 <div class="container">
 <a class="navbar-brand" href="<?php echo e(route('home.index')); ?>">Club 2G - MATT</a>
 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bstarget="#navbarNavAltMarkup"
 aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
 <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
 <div class="navbar-nav ms-auto">
 <a class="nav-link active" href="<?php echo e(route('home.index')); ?>">Home</a>
 <a class="nav-link active" href="<?php echo e(route('home.about')); ?>">Sobre nosotros</a>
 <a class="nav-link active" href="<?php echo e(route('treasure.index')); ?>">Búsquedas del tesoro</a> 
 <div class="vr bg-white mx-2 d-none d-lg-block"></div>
 <?php if(auth()->guard()->guest()): ?>
 <a class="nav-link active" href="<?php echo e(route('login')); ?>">Login</a>
 <a class="nav-link active" href="<?php echo e(route('register')); ?>">Registro</a>
 <?php else: ?>
 <form id="logout" action="<?php echo e(route('logout')); ?>" method="POST">
 <a role="button" class="nav-link active"
 onclick="document.getElementById('logout').submit();">Logout</a>
 <?php echo csrf_field(); ?>
 </form>
 <?php endif; ?>
 </div>
 </div>
 </div>
 </nav>
 <header class="masthead bg-primary text-white text-center py-4">
 <div class="container d-flex align-items-center flex-column">
 <h2><?php echo $__env->yieldContent('subtitle', 'Conoce Medellín y gana premios'); ?></h2>
 </div>
 </header>
 <!-- header -->
 <div class="container my-4">
 <?php echo $__env->yieldContent('content'); ?>
 </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
crossorigin="anonymous">
 </script>
 <body class="archive post-type-archive post-type-archive-gd_place geodir_custom_posts geodir-page geodir-archive geodir_advance_search gd-map-auto">
    <div id="ds-container">
        <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->renderWhen(request()->is('/'), 'partials.map', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>

        <?php echo $__env->yieldContent('content'); ?>

        <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <?php echo $__env->yieldContent('scripts'); ?>
</body>
</body>
</html><?php /**PATH C:\Users\mavae\OneDrive\Escritorio\2023-1\P2\NesquikProject\Club2G\resources\views/layouts/app.blade.php ENDPATH**/ ?>
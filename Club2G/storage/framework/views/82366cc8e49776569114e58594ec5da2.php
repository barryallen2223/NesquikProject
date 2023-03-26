<!doctype html>
<html lang="en">
<head>
 <meta charset="utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1" />
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
rel="stylesheet" crossorigin="anonymous" />
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
</body>
</html><?php /**PATH C:\Users\mavae\OneDrive\Escritorio\2023-1\P2\NesquikProject\Club2G\resources\views/layouts/app.blade.php ENDPATH**/ ?>
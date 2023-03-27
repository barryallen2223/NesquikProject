<?php $__env->startSection('title', $viewData["title"]); ?>
<?php $__env->startSection('subtitle', $viewData["subtitle"]); ?>
<?php $__env->startSection('content'); ?>
<div class="card mb-3">
 <div class="row g-0">
 <div class="col-md-4">
 
 </div>
 <div class="col-md-8">
 <div class="card-body">
 <h5 class="card-title">
 <?php echo e($viewData["treasure"]->getName()); ?> (Puntos: <?php echo e($viewData["treasure"]->getPoints()); ?>)
 </h5>
 <p class="card-text"><?php echo e($viewData["treasure"]->getDescription()); ?></p>
 <p class="card-text">Fecha de inicio: <?php echo e($viewData["treasure"]->getStartsAt()); ?></p>
 <p class="card-text">Fecha de finalización: <?php echo e($viewData["treasure"]->getEndsAt()); ?></p>
 <p class="card-text"><small class="text-muted">Aceptar</small></p>
 <p class="card-text"><small class="text-muted">Volver a la lista</small></p>
 </div>
 </div>
 </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mavae\OneDrive\Escritorio\2023-1\P2\NesquikProject\Club2G\resources\views/treasure/show.blade.php ENDPATH**/ ?>
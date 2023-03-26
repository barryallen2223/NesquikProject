
<?php $__env->startSection('title', $viewData["title"]); ?>
<?php $__env->startSection('subtitle', $viewData["subtitle"]); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
 <?php $__currentLoopData = $viewData["treasures"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $treasure): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <div class="col-md-4 col-lg-3 mb-2">
 <div class="card">
 <img src="<?php echo e(asset('/img/'.$treasure["image"])); ?>" class="card-img-top img-card">
 <div class="card-body text-center">
 <a href="<?php echo e(route('treasure.show', ['id'=> $treasure->getId()])); ?>"
 class="btn bg-primary text-white"><?php echo e($treasure->getName()); ?></a>
 </div>
 </div>
 </div>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mavae\OneDrive\Escritorio\2023-1\P2\NesquikProject\Club2G\resources\views/treasure/index.blade.php ENDPATH**/ ?>
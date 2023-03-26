<?php $__env->startSection('title', $viewData["title"]); ?>
<?php $__env->startSection('content'); ?>
<div class="card">
 <div class="card-header">
 Admin Panel - Home Page
 </div>
 <div class="card-body">
 Welcome to the Admin Panel, use the sidebar to navigate between the different options.
 </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mavae\OneDrive\Escritorio\2023-1\P2\NesquikProject\Club2G\resources\views/admin/home/index.blade.php ENDPATH**/ ?>
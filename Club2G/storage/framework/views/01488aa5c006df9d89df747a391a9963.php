<?php $__env->startSection('title', $viewData["title"]); ?>
<?php $__env->startSection('content'); ?>
<div class="card mb-4">
 <div class="card-header">
 Editar búsqueda del tesoro
 </div>
 <div class="card-body">
 <?php if($errors->any()): ?>
 <ul class="alert alert-danger list-unstyled">
 <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <li>- <?php echo e($error); ?></li>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </ul>
 <?php endif; ?>
 <form method="POST" action="<?php echo e(route('admin.treasure.update', ['id'=> $viewData['treasure']->getId()])); ?>"
 enctype="multipart/form-data">
 <?php echo csrf_field(); ?>
 <?php echo method_field('PUT'); ?>
 <div class="row">
 <div class="col">
 <div class="mb-3 row">
 <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Nombre:</label>
 <div class="col-lg-10 col-md-6 col-sm-12">
 <input name="name" value="<?php echo e($viewData['treasure']->getName()); ?>" type="text"
class="form-control">
 </div>
 </div>
 </div>
 <div class="col">
 <div class="mb-3 row">
 <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Puntos:</label>
 <div class="col-lg-10 col-md-6 col-sm-12">
 <input name="points" value="<?php echo e($viewData['treasure']->getPoints()); ?>" type="number"
class="form-control">
 </div>
 </div>
 </div>
 </div>
 <div class="col">
 <div class="mb-3 row">
 <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Fecha de inicio:</label>
 <div class="col-lg-10 col-md-6 col-sm-12">
 <input name="startsAt" value="<?php echo e($viewData['treasure']->getStartsAt()); ?>" type="text" class="form-control">
 </div>
 </div>
 </div>
 <div class="col">
 <div class="mb-3 row">
 <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Fecha de finalización:</label>
 <div class="col-lg-10 col-md-6 col-sm-12">
 <input name="endsAt" value="<?php echo e($viewData['treasure']->getEndsAt()); ?>" type="text" class="form-control">
 </div>
 </div>
 </div>
 <div class="col">
 &nbsp;
 </div>
 </div>
 <div class="mb-3">
 <label class="form-label">Descripción</label>
 <textarea class="form-control" name="description"
 rows="3"><?php echo e($viewData['treasure']->getDescription()); ?></textarea>
 </div>
 <button type="submit" class="btn btn-primary">Editar</button>
 </form>
 </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mavae\OneDrive\Escritorio\2023-1\P2\NesquikProject\Club2G\resources\views/admin/treasure/edit.blade.php ENDPATH**/ ?>
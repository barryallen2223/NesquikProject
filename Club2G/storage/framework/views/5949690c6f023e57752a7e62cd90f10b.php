<?php $__env->startSection('title', $viewData["title"]); ?>
<?php $__env->startSection('content'); ?>
<div class="card mb-4">
 <div class="card-header">
 Crea una Búsqueda del Tesoro
 </div>
 <div class="card-body">
 <?php if($errors->any()): ?>
 <ul class="alert alert-danger list-unstyled">
 <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <li>- <?php echo e($error); ?></li>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </ul>
 <?php endif; ?>

 <form method="POST" action="<?php echo e(route('admin.treasure.store')); ?>">
 <?php echo csrf_field(); ?>
 <div class="row">
 <div class="col">
 <div class="mb-3 row">
 <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Nombre:</label>
 <div class="col-lg-10 col-md-6 col-sm-12">
 <input name="name" value="<?php echo e(old('name')); ?>" type="text" class="form-control">
 </div>
 </div>
 </div>
 <div class="col">
 <div class="mb-3 row">
 <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Puntos:</label>
 <div class="col-lg-10 col-md-6 col-sm-12">
 <input name="points" value="<?php echo e(old('points')); ?>" type="number" class="form-control">
 </div>
 </div>
 </div>
 </div>
 <div class="row">
 <div class="col">
 <div class="mb-3 row">
 <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Fecha de inicio:</label>
 <div class="col-lg-10 col-md-6 col-sm-12">
 <input name="startsAt" value="<?php echo e(old('startsAt')); ?>" type="text" class="form-control">
 </div>
 </div>
 </div>
 <div class="col">
 <div class="mb-3 row">
 <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Fecha de finalización:</label>
 <div class="col-lg-10 col-md-6 col-sm-12">
 <input name="endsAt" value="<?php echo e(old('endsAt')); ?>" type="text" class="form-control">
 </div>
 </div>
 </div>
 </div>
 <div class="mb-3">
 <label class="form-label">Descripción</label>
 <textarea class="form-control" name="description" rows="3"><?php echo e(old('description')); ?></textarea>
 </div>
 <button type="submit" class="btn btn-primary">Submit</button>
 </form>
 </div>
</div> 
<div class="card">
 <div class="card-header">
 Administra las búsquedas del tesoro
 </div>
 <div class="card-body">
 <table class="table table-bordered table-striped">
 <thead>
 <tr>
 <th scope="col">ID</th>
 <th scope="col">Name</th>
 <th scope="col">Edit</th>
 <th scope="col">Delete</th>
 </tr>
 </thead>
 <tbody>
 <?php $__currentLoopData = $viewData["treasures"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $treasure): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <tr>
 <td><?php echo e($treasure->getId()); ?></td>
 <td><?php echo e($treasure->getName()); ?></td>
 <td>
 <a class="btn btn-primary" href="<?php echo e(route('admin.treasure.edit', ['id'=> $treasure->getId()])); ?>">
 <i class="bi-pencil"></i>
 </a>
 </td>
 <td>
 <form action="<?php echo e(route('admin.treasure.delete', $treasure->getId())); ?>" method="POST">
 <?php echo csrf_field(); ?>
 <?php echo method_field('DELETE'); ?>
 <button class="btn btn-danger">
 <i class="bi-trash"></i>
 </button>
 </form>
 </td>
 </tr>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </tbody>
 </table>
 </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mavae\OneDrive\Escritorio\2023-1\P2\NesquikProject\Club2G\resources\views/admin/treasure/index.blade.php ENDPATH**/ ?>
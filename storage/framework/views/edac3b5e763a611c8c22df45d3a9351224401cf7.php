
<?php $__env->startSection('title','AdminHome Page'); ?>

<?php $__env->startSection('details'); ?>

<h1>Welcome to admin</h1>
<div>

</div>
<?php echo e(session('username')); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MCA_PROJECT\book\resources\views/admin/adminhome.blade.php ENDPATH**/ ?>
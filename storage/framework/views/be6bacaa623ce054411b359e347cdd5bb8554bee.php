
<?php $__env->startSection('title','Owner show'); ?>
<style>
    table.table-bordered{
    border:3px solid black;
    margin-top:20px;
  }
</style>
<?php $__env->startSection('header','OWNER SHOW'); ?>
<?php $__env->startSection('details'); ?>
<div class="container py-5 h-300 ">
<table class="table table-bordered" style="background-color: white">
    <thead class="thead-dark" style="background-color:#eb5d1e; color:white;">
        <tr>
        <th scope="col">OWNERID</th>
        <th scope="col">OWNERNAME</th>
        <th scope="col">CITY</th>
        <th scope="col">PINCODE</th>
        <th scope="col">CONTACTNO</th>
        <th scope="col">GENDER</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $owner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $o): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
       <th scope="row"><?php echo e($o['ownerid']); ?></th>
        <td><?php echo e($o['ownername']); ?></td>
        <td><?php echo e($o['city']); ?></td>
        <td><?php echo e($o['pincode']); ?></td>
        <td><?php echo e($o['contactno']); ?></td>
        <td><?php echo e($o['gender']); ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
    </tbody>
    </table>
<spam>
        <?php echo e($owner->links()); ?>

</spam> 
 <style>
        .w-5{
        display:none
        }
</style>
    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MCA_PROJECT\book\resources\views/admin\ownershow.blade.php ENDPATH**/ ?>
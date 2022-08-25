
<?php $__env->startSection('title','Reader show'); ?>
<style>
    table.table-bordered{
    border:3px solid black;
    margin-top:20px;
  }
</style>
<?php $__env->startSection('header','READER SHOW'); ?>
<?php $__env->startSection('details'); ?>
<div class="container py-5 h-300 ">
<table class="table table-bordered" style="background-color: white">
    <thead class="thead-dark" style="background-color:#eb5d1e; color:white;">
        <tr>
        <th scope="col">READERID</th>
        <th scope="col">READER FNAME</th>
        <th scope="col">CITY</th>
        <th scope="col">PINCODE</th>
        <th scope="col">CONTACTNO</th>
        <th scope="col">GENDER</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $reader; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
       <th scope="row"><?php echo e($r['readerid']); ?></th>
        <td><?php echo e($r['fname']); ?></td>
        <td><?php echo e($r['city']); ?></td>
        <td><?php echo e($r['pincode']); ?></td>
        <td><?php echo e($r['contactno']); ?></td>
        <td><?php echo e($r['gender']); ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
    </tbody>
    </table>
    <spam>
        <?php echo e($reader->links()); ?>

</spam> 
 <style>
        .w-5{
        display:none
        }
</style>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MCA_PROJECT\book\resources\views/admin\readershow.blade.php ENDPATH**/ ?>
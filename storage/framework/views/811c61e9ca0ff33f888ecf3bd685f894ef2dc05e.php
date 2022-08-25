
<?php $__env->startSection('title','show booking'); ?>
<style>
    table.table-bordered{
    border:3px solid black;
    margin-top:20px;
  }
</style>
<?php $__env->startSection('header','BOOK RETURN'); ?>
<?php $__env->startSection('details'); ?>
<div class="container py-5 h-300 ">
<table class="table table-bordered" style="background-color: white">
    <thead class="thead-dark" style="background-color:#eb5d1e; color:white;">
    <tr>
      <th scope="col">BOOKING ID </th>
      <th scope="col">BOOK NAME</th>
      <th scope="col">READER NAME</th>
      <th scope="col">OWNER NAME</th>
      <th scope="col">STATUS</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $return; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($b['bookingid']); ?></th>
      <td><?php echo e($b['bookname']); ?></td>
      <td><?php echo e($b['fname']); ?></td>
      <td><?php echo e($b['ownername']); ?></td>
      <td><?php echo e($b['status']); ?></td>
      
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<spam>
        <?php echo e($return->links()); ?>

</spam> 
 <style>
        .w-5{
        display:none
        }
</style>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('owner/ownerlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MCA_PROJECT\book\resources\views/owner\bookretrun.blade.php ENDPATH**/ ?>
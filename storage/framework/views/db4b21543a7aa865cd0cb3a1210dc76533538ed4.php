
<?php $__env->startSection('title','Feedback show'); ?>
<style>
    table.table-bordered{
    border:3px solid black;
    margin-top:20px;
  }
</style>
<?php $__env->startSection('header','REVIEW SHOW'); ?>
<?php $__env->startSection('details'); ?>
<div class="container py-5 h-300 ">
<table class="table table-bordered" style="background-color: white">
    <thead class="thead-dark" style="background-color:#eb5d1e; color:white;">
        <tr>
        <th scope="col">REVIEWID</th>
        <th scope="col">REVIEWDATE</th>
        <th scope="col">BOOKID</th>
        <th scope="col">READERID</th>
        <th scope="col">OWNERID</th>
        <th scope="col">RATTINGS</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $review; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
       <th scope="row"><?php echo e($r['reviewid']); ?></th>
        <td><?php echo e($r['reviewdate']); ?></td>
        <td><?php echo e($r['bookid']); ?></td>
        <td><?php echo e($r['readerid']); ?></td>
        <td><?php echo e($r['ownerid']); ?></td>
        <td><?php echo e($r['rattings']); ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
    </tbody>
    </table>
    <spam>
        <?php echo e($review->links()); ?>

</spam> 
 <style>
        .w-5{
        display:none
        }
</style>
    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MCA_PROJECT\book\resources\views/admin\reviewshow.blade.php ENDPATH**/ ?>
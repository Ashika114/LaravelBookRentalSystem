
<?php $__env->startSection('title','book show'); ?>

<?php $__env->startSection('details'); ?>

<div class="container py-5 h-300 ">
<table class="table table-bordered" style="background-color: white">
    <thead class="thead-dark" style="background-color:#eb5d1e; color:white;">
        <tr>
        <th scope="col">BKCANID</th>
        <th scope="col">BKCANDATE</th>
        <th scope="col">BOOKINGID</th>
        <th scope="col">REASON</th>
        <th scope="col">STATUS</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $bookingcan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
       <th scope="row"><?php echo e($b['bkcanid']); ?></th>
        <td><?php echo e($b['bkcandate']); ?></td>
        <td><?php echo e($b['bookingid']); ?></td>
        <td><?php echo e($b['reason']); ?></td>
        <td><?php echo e($b['status']); ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
    </tbody>
    </table>
    
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('reader/readerlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MCA_PROJECT\book\resources\views/reader\readerbookingcancel.blade.php ENDPATH**/ ?>
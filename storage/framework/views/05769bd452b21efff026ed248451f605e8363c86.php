
<?php $__env->startSection('title','book return show'); ?>

<?php $__env->startSection('details'); ?>

<div class="container py-5 h-300 ">
<table class="table table-bordered" style="background-color: white">
    <thead class="thead-dark" style="background-color:#eb5d1e; color:white;">
        <tr>
        <th scope="col">BOOKINGID</th>
        <th scope="col">BOOKNAME</th>
        <th scope="col">FNAME</th>
        <th scope="col">OWNERNAME</th>
        <th scope="col">STATUS</th>
        <th scope="col">RETURN</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $bookreturn; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
        <th scope="row"><?php echo e($b['bookingid']); ?></th>
            <td><?php echo e($b['bookname']); ?></td>
            <td><?php echo e($b['fname']); ?></td>
            <td><?php echo e($b['ownername']); ?></td>
            <td><?php echo e($b['status']); ?></td>
            <td><a href="/readerreturn/<?php echo e($b['returnid']); ?>">RETURN</td>
            </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
    </tbody>
    </table>
    
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('reader/readerlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MCA_PROJECT\book\resources\views/reader\readerbookreturn.blade.php ENDPATH**/ ?>
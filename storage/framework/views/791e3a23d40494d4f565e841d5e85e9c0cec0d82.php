
<?php $__env->startSection('title','Publication show'); ?>
<style>
    table.table-bordered{
    border:3px solid black;
    margin-top:20px;
  }
</style>
<?php $__env->startSection('header','PUBLICATION SHOW'); ?>
<?php $__env->startSection('details'); ?>
<div class="container py-5 h-300 ">
<table class="table table-bordered" style="background-color: white">
    <thead class="thead-dark" style="background-color:#eb5d1e; color:white;">
       <a href="publicationform"><button class="btn btn-success btn-block" type="submit">NEW</button>
        <tr>
        <th scope="col">PUBID</th>
        <th scope="col">PUBNAME</th>
        <th scope="col">CONTACTNO</th>
        <th scope="col">EMAILID</th>
        <th scope="col">DELETE</th>
        <th scope="col">UPDATE</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $publication; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
       <th scope="row"><?php echo e($p['pubid']); ?></th>
        <td><?php echo e($p['pubname']); ?></td>
        <td><?php echo e($p['contactno']); ?></td>
        <td><?php echo e($p['emailid']); ?></td>
        <td><a href="pubDelete/<?php echo e($p['pubid']); ?>">DELETE</td>
        <td><a href="pubsearch/<?php echo e($p['pubid']); ?>">UPDATE</td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
    </tbody>
    </table>

    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MCA_PROJECT\book\resources\views/admin/publication/publicationshow.blade.php ENDPATH**/ ?>
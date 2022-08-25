
<?php $__env->startSection('title','Contact show'); ?>
<style>
    table.table-bordered{
    border:3px solid black;
    margin-top:20px;
  }
</style>
<?php $__env->startSection('header','CONTACTUS DETAILS'); ?>
<?php $__env->startSection('details'); ?>
<div class="container py-5 h-300 ">
<table class="table table-bordered" style="background-color: white">
    <thead class="thead-dark" style="background-color:#eb5d1e; color:white;">
        <tr>
        <th scope="col">CONTACTID</th>
        <th scope="col">CONTACT NAME</th>
        <th scope="col">DETAILS</th>
        <th scope="col">CONTACTNO</th>
        <th scope="col">EMAILID</th>
        <th scope="col">RESPONSE</th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $contact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
       <th scope="row"><?php echo e($c['contactid']); ?></th>
        <td><?php echo e($c['name']); ?></td>
        <td><?php echo e($c['details']); ?></td>
        <td><?php echo e($c['contactno']); ?></td>
        <td><?php echo e($c['emailid']); ?></td>
        <td><?php echo e($c['response']); ?></td>
        <td><a href="/contactsearch/<?php echo e($c['contactid']); ?>">RESPONSE</td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
    </tbody>
    </table>
    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MCA_PROJECT\book\resources\views/admin/contactshow.blade.php ENDPATH**/ ?>
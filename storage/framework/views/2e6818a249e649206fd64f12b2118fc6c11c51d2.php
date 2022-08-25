
<?php $__env->startSection('title','Author show'); ?>

<style>
    table.table-bordered{
    border:3px solid black;
    margin-top:20px;
  }
 
</style>

<?php $__env->startSection('header','AUTHOR SHOW'); ?>
<?php $__env->startSection('details'); ?>
<div class="container py-5 h-300 ">
<div>
<table class="table table-bordered" style="background-color: white">
    <thead class="thead-dark" style="background-color:#eb5d1e; color:white;">
       <a href="authorform"><button class="btn btn-success btn-block" type="submit">NEW</button>
        <tr>
        <th scope="col">AUTHORID</th>
        <th scope="col">AUTHORNAME</th>
        <th scope="col">CONTACTNO</th>
        <th scope="col">EMAILID</th>
        <th scope="col">IMAGE</th>
        <th scope="col">DELETE</th>
        <th scope="col">UPDATE</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $author; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
       <th scope="row"><?php echo e($a['authorid']); ?></th>
        <td><?php echo e($a['authorname']); ?></td>
        <td><?php echo e($a['contactno']); ?></td>
        <td><?php echo e($a['emailid']); ?></td>
        <td><img src="<?php echo e($a['image']); ?>" alt='Profile picture' width='150px' height='100px'></td>
        <td><a href="authorDelete/<?php echo e($a['authorid']); ?>">DELETE</td>
        <td><a href="/searcha/<?php echo e($a['authorid']); ?>">UPDATE</td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
    </tbody>
    </table>
</div>
<spam>
        <?php echo e($author->links()); ?>

</spam> 
 <style>
        .w-5{
        display:none
        }
</style>
 
    
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MCA_PROJECT\book\resources\views/admin\author\showauthor.blade.php ENDPATH**/ ?>
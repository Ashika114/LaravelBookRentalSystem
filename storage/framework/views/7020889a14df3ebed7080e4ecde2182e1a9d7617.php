
<?php $__env->startSection('title','show book'); ?>
<style>
    table.table-bordered{
    border:3px solid black;
    margin-top:20px;
  }
</style>
<?php $__env->startSection('header','BOOK SHOW'); ?>
<?php $__env->startSection('details'); ?>
<div class="container py-5 h-300 ">
<table class="table table-bordered" style="background-color: white">
    <thead class="thead-dark" style="background-color:#eb5d1e; color:white;">
    <a href=""><button class="btn btn-success btn-block" type="submit">NEW</button>
    <tr>
      <th scope="col">BOOK ID </th>
      <th scope="col">BOOK NAME</th>
      <th scope="col">SHORT NAME</th>
      <th scope="col">DELETE</th>
      <th scope="col">UPDATE</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $book; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($b['bookid']); ?></th>
      <td><?php echo e($b['bookname']); ?></td>
      <td><?php echo e($b['shortname']); ?></td>
      <td><a href="">DELETE</td>
      <td><a href="/booksearch/<?php echo e($b['bookid']); ?>">UPDATE</td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('owner/ownerlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MCA_PROJECT\book\resources\views/owner\bookshow.blade.php ENDPATH**/ ?>
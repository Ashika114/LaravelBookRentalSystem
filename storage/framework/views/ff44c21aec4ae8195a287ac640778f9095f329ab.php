
<?php $__env->startSection('title','owner home'); ?>
<?php $__env->startSection('details'); ?>
    <h1>WELCOME TO OWNER</h1>
    <form action="bookupdate" method="post">
        <?php echo csrf_field(); ?>
        <input type="text" name="txtbookname" value="<?php echo e($book['bookname']); ?>" placeholder="Enter Book Name">
        <input type="text" name="txtshortname" value="<?php echo e($book['shortname']); ?>" placeholder="Enter Short Name">
        <button type="submit">SAVE</button>
    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('owner/ownerlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MCA_PROJECT\book\resources\views/owner\bookupdate.blade.php ENDPATH**/ ?>

<?php $__env->startSection('title','owner home'); ?>
<?php $__env->startSection('details'); ?>
<div style="margin-left:30px;">
    <h1>WELCOME TO OWNER PANEL</h1>
    <h3>Owner can do follwing task:</h3>
        <div>
            <h5>
            <ul>
                <ol>1. Can Add BOOK </ol>
                <ol>2. Can Delete Book </ol>
                <ol>3. View booking </ol>
                <ol>4. Can Communicate with Reader through email </ol>
                <ol>5. View Book Return</ol>
                <ol>6. Manage Profile</ol>
                <ol>7. Can see Book Cancel</ol>
            </ul> 
            </h5>
        </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('owner/ownerlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MCA_PROJECT\book\resources\views/owner\ownerhome.blade.php ENDPATH**/ ?>
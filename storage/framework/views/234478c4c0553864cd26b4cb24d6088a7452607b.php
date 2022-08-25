
<?php $__env->startSection('title','book details'); ?>
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 1px;
}
</style>
<?php $__env->startSection('details'); ?>
 <div class="row" >
    <div class="col-6" style="margin-top:30px;">
    
        <img src="<?php echo e($book['image']); ?>" alt="Book Image" width="530" height="550">
    </div>

    <div class="col-6" style="margin-top:30px;">
    
        <h1>Book details</h1><br>
        <h5><b>Book Name :</b> <?php echo e($book['bookname']); ?></h5>
        <h5><b>Author Name :</b> <?php echo e($book['authorname']); ?></h5>
        <h6><b>Publication Name :</b> <?php echo e($book['pubname']); ?></h6>
        <h6><b>Short Name :</b> <?php echo e($book['shortname']); ?></h6>
        <h5><b>Total Page :</b> <?php echo e($book['totalpage']); ?></h5>
        <hr>
        <h4><b>Price : </b><?php echo e($book['price']); ?></h4>
        <hr>
        <h5 style="margin-left:50px;"><b>Details</b></h5>
        <p><?php echo e($book['details']); ?></p>
        <hr>
        <p><button style="color: white; background-color: #eb5d1e; border: none; outline: 0; padding: 12px;
         text-align: center; cursor: pointer; width: 50%; font-size: 18px;">Booking</button></p>
    </div>
    
</div>

<hr>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('reader/readerlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MCA_PROJECT\book\resources\views/reader\readerbookdetails.blade.php ENDPATH**/ ?>

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
     <div class="col-3"></div>
    <div class="col-6" style="margin-top:30px;">
    
        <h1>Payment for BOOK</h1><br>
        <h5><b>Book Name :</b> <?php echo e($book['bookname']); ?></h5>
        <h5><b>Author Name :</b> <?php echo e($book['authorname']); ?></h5>
        <h6><b>Publication Name :</b> <?php echo e($book['pubname']); ?></h6>
        <h6><b>Short Name :</b> <?php echo e($book['shortname']); ?></h6>
        <h5><b>Total Page :</b> <?php echo e($book['totalpage']); ?></h5>
        <hr>
        <h4><b>Price : </b><?php echo e($book['price']); ?></h4>
        <hr>
        <hr>
        <p><a href="/readerbookingshow"><button style="color: white; background-color: #eb5d1e; border: none; outline: 0;
         padding: 12px; text-align: center; cursor: pointer; width: 50%; font-size: 18px;">
         PAYMENT</button></a></p>
    </div>
    
</div>

<hr>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('reader/readerlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MCA_PROJECT\book\resources\views/reader\readerpayment.blade.php ENDPATH**/ ?>
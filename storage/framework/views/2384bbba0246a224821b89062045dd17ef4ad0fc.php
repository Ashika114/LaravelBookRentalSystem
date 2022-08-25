
<?php $__env->startSection('title','AboutUs Page'); ?>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #008080;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
</style>
<?php $__env->startSection('details'); ?>
<hr>
<h1>WELCOME TO READER PANEL</h1>
<hr>
<center><h4>SOME BOOKS</h4></center>
<hr>

<div class="row" id="row">
  
<?php $__currentLoopData = $book; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="col-4" style="margin-top:10px;">
    
      <h2 style="text-align:center">BOOK </h2>
        <?php echo csrf_field(); ?>
      <div class="card">
        <img src="<?php echo e($b['image']); ?>" alt="book"  width='300px' height='250px'>
        <h3><?php echo e($b['bookid']); ?></h3>
        <h3><?php echo e($b['bookname']); ?></h3>
        <p class="price">Price : <?php echo e($b['price']); ?></p>
       

        <p><a href="/readerbookshowController"><button style="color: white; background-color: #eb5d1e;">Booking</button></a></p>
        <p><a href="/readerbookshowController"> <button>Details</button></a></p>
      
      </div>
    
  </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('reader/readerlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MCA_PROJECT\book\resources\views/reader\readerhome.blade.php ENDPATH**/ ?>
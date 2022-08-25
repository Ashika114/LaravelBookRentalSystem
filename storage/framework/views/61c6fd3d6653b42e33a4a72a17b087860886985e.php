
<?php $__env->startSection('title','home page'); ?>
<?php $__env->startSection('details'); ?>
    <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

<div class="container">
  <div class="row gy-4">
    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
      <h1 data-aos="fade-up">Welcome to book rental system</h1>
      <h2 data-aos="fade-up">WHY BUY A BOOK</h2>
    <h3 data-aos="fade-up">WHEN YOU CAN RENT IT!!</h3>
      <div>
        <a href="about" class="btn-get-started scrollto">Get Started</a>
      </div>
    </div>
    <div class="col-lg-6 order-1 order-lg-2 hero-img">
      <img src="img/book4.jpg" class="img-fluid animated" alt="">
    </div>
  </div>
</div>

</section><!-- End Hero -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MCA_PROJECT\book\resources\views//main/home1.blade.php ENDPATH**/ ?>
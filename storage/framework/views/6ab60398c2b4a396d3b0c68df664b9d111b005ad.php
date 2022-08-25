
<?php $__env->startSection('title','home page'); ?>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>
<?php $__env->startSection('details'); ?>

<div id="demo" class="carousel slide" data-ride="carousel" style="margin:100px; height:500px;">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/letters.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h2 style="font-weight:bold;">WHY TO BUY A BOOK</h2>
        <h3>WHEN YOU CAN RENT IT!!</h3>
        
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/joel.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
      <h2 style="font-weight:bold;">Find Your CHOICE of BOOKS here.</h2>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/classic.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h2 style="font-weight:bold;";>READING GIVES LIFE MORE LIFE</h2>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<!-- ======= About Section ======= -->
<section id="about" class="about" style="background-color:#fef8f5;">
      <div class="container">

        <div class="row justify-content-between">
          <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
            <img src="img/undraw_reading_time_re_phf7.svg" class="img-fluid" alt="" data-aos="zoom-in">
          </div>
          <div class="col-lg-6 pt-5 pt-lg-0">
          <h1 data-aos="fade-up">WHY BUY A BOOK</h1>
            <h3 data-aos="fade-up">WHEN YOU CAN RENT IT!!</h3>
            <p data-aos="fade-up" data-aos-delay="100">
            This system is designed to “provide automation support” for the process of ordering books on rent. They will see the list of books
             which they can take on rent. If user want to give a book on rent,
              then they can upload the book details like Book Title, Author name, Book description, Book type, etc on the portal. 
              If the user want to take a book on rent and in case it is not available then they can see appropriate message.
            </p>

            <p data-aos="fade-up" data-aos-delay="100">
              This system have 3 users Admin,Reader and Owner.Admin has authority to manage master data. Admin can communicate with owner through email or message and 
              admin can accept payment from user and send it to owner. The system will allow admin to see feedbacks and reviews.
            </p>

            <div class="row">
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-reader"></i>
                <h4>Reader</h4>
                <p>System allow Reader to browse, search, select, and add books to a shopping cart. Then, provided they have books in their shopping cart,
                   check out books in shopping cart.</p>
              </div>
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-owner"></i>
                <h4>Owner</h4>
                <p>Owner will able to add book, remove book and update changes. After the conformation of Owner Reader will able to get the book. Owner can also cancel
                   booking.</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MCA_PROJECT\book\resources\views/main/home1.blade.php ENDPATH**/ ?>
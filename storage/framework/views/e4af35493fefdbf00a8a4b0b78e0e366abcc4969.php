
<?php $__env->startSection('title','AboutUs Page'); ?>
<?php $__env->startSection('details'); ?>

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
<?php echo $__env->make('main/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MCA_PROJECT\book\resources\views/main\aboutus.blade.php ENDPATH**/ ?>
@extends('main/layout')
@section('title','Contact Page')
@section('details')
    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact Us</h2>
          <p>Contact us to get started</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A21 Patel Street,Navsari,Gujarat 396469</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>bookinfo@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+918594939534</p>
              </div>

              <iframe src="https://www.google.com/maps/embed/v1/place?q=ssagrawal+navsari&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"  frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <form action="/contactus" method="post" role="form" style="width: 100%;border-top: 3px solid #eb5d1e; border-bottom: 3px solid #eb5d1e; padding: 30px;background: #fff;box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12);">
            @csrf
              <div class="form-group mt-3">
                <label for="name">Your Name</label>
                <input type="text" class="form-control" name="txtname" id="name" placeholder="Your name" required>
              </div>
              <div class="row" style="margin-top:20px;">
                <div class="form-group col-md-6">
                  <label for="cno">Your ContactNo</label>
                  <input type="number" name="txtcno" class="form-control" id="cno" placeholder="Your Contactno" required>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="email">Your Email</label>
                  <input type="email" class="form-control" name="txtemail" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" name="txtsubject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <label for="name">Message</label>
                <textarea class="form-control" name="txtmessage" rows="10" required></textarea>
              </div>
              <div class="text-center" style="margin-top:20px;"><button type="submit" style="background: #eb5d1e; color: #fff; padding: 10px 25px; margin-left: 30px;border-radius: 10px; border:white">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

@endsection
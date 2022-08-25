<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Favicons -->
    <link href="main/assets/img/favicon.png" rel="icon">
    <link href="main/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/main/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/main/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/main/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/main/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/main/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/main/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/main/assets/css/style.css" rel="stylesheet">
</head>
<body>
    <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>BookMyBook</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="main/assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="home">Home</a></li>
          <li><a class="nav-link scrollto" href="about">About Us</a></li>
          <li><a class="nav-link scrollto" href="services">Services</a></li>
          <li><a class="nav-link scrollto" href="contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="signup">SignUp</a></li>
          <li><a class="getstarted scrollto" href="login">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <main id="main">
  <div class="container">
    @yield('details')

</div>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-contact">
            <h3>BookMyBook</h3>
            <p>
            A21 Patel Street<br>
            Navsari,Gujarat 396469<br>
            India.<br><br>
              <strong>Phone:</strong>+918594939534 <br>
              <strong>Email:</strong> bookinfo@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="home">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>


          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Join Us on Different Social networks to get recent updates</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>


  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/main/assets/vendor/aos/aos.js"></script>
  <script src="/main/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/main/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/main/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/main/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/main/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/main/assets/js/main.js"></script>

</body>
</html>
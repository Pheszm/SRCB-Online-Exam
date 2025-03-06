<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SRCB HED Online Exam | Homepage</title>
        <link rel="icon" type="image/png" href="{{ asset('homepage_assets/img/SRCB_Logo.png') }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com" rel="preconnect">
        <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{ asset('homepage_assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('homepage_assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('homepage_assets/vendor/aos/aos.css" rel="stylesheet') }}">
        <link href="{{ asset('homepage_assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('homepage_assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

        <!-- Main CSS File -->
        <link href="{{ asset('homepage_assets/css/main.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('My_CSS/homepage.css') }}">

    </head>


    <body class="index-page">

        <header id="header" class="header d-flex align-items-center sticky-top">
          <div class="container-fluid container-xl position-relative d-flex align-items-center">
      
            <a href="" class="logo d-flex align-items-center me-auto">
              <img src="{{ asset('homepage_assets/img/SRCB_Logo.png') }}" alt=""> 
              <h1 class="sitename">SRCB</h1>
            </a>
      
            <nav id="navmenu" class="navmenu">
              <ul>
                <li><a href="#hero" class="active">Home<br></a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
              <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
      
            <a class="btn-getstarted" href="#">Login</a>
      
          </div>
        </header>
      
        <main class="main">
      
          <!-- Hero Section -->
          <section id="hero" class="hero section">
      
            <div class="container">
              <div class="row gy-4" style="padding-top: 90px">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                  <h1>SRCB Higher Education Online Examination</h1>
                  <p>Your trusted platform for easy and secure online exams</p>
                  <div class="d-flex">
                    <a href="#about" class="btn-get-started">Get Started</a>
                    <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"></a>
                  </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" style="display: flex; justify-content: center;">
                    <img src="{{ asset('homepage_assets/img/Exam-Hero-Img.png')}}" style="width: 500px; filter: drop-shadow(5px 5px 5px rgba(0, 0, 0, 0.5));" class="img-fluid animated" alt="">
                    <!--<img src="{{ asset('homepage_assets/img/mobile-appppp.svg')}}" class="img-fluid animated" alt="">-->
                </div>
              </div>
            </div>
      
          </section><!-- /Hero Section -->
    
      
          <!-- About Section -->
          <section id="about" class="about section h-screen">
      
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
              <h2>About Us</h2>
              <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->
      
            <div class="container">
      
              <div class="row gy-5">
      
                <div class="content col-xl-5 d-flex flex-column" data-aos="fade-up" data-aos-delay="100">
                  <h3>Voluptatem dignissimos provident quasi</h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                  </p>
                  <a href="#" class="about-btn align-self-center align-self-xl-start"><span>Start Now</span> <i class="bi bi-chevron-up"></i></a>
                </div>
      
                <div class="col-xl-7" data-aos="fade-up" data-aos-delay="200">
                  <div class="row gy-4">
      
                    <div class="col-md-6 icon-box position-relative">
                      <i class="bi bi-briefcase"></i>
                      <h4><a href="" class="stretched-link">Corporis voluptates sit</a></h4>
                      <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                    </div><!-- Icon-Box -->
      
                    <div class="col-md-6 icon-box position-relative">
                      <i class="bi bi-gem"></i>
                      <h4><a href="" class="stretched-link">Ullamco laboris nisi</a></h4>
                      <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                    </div><!-- Icon-Box -->
      
                    <div class="col-md-6 icon-box position-relative">
                      <i class="bi bi-broadcast"></i>
                      <h4><a href="" class="stretched-link">Labore consequatur</a></h4>
                      <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                    </div><!-- Icon-Box -->
      
                    <div class="col-md-6 icon-box position-relative">
                      <i class="bi bi-easel"></i>
                      <h4><a href="" class="stretched-link">Beatae veritatis</a></h4>
                      <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                    </div><!-- Icon-Box -->
      
                  </div>
                </div>
      
              </div>
      
            </div>
      
          </section><!-- /About Section -->
    
      
          <!-- Services Section -->
          <section id="services" class="services section">
      
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
              <h2>Services</h2>
              <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->
      
            <div class="container">
      
              <div class="row gy-4">
      
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                  <div class="service-item position-relative">
                    <i class="bi bi-activity"></i>
                    <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
                    <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                  </div>
                </div><!-- End Service Item -->
      
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                  <div class="service-item position-relative">
                    <i class="bi bi-bounding-box-circles"></i>
                    <h4><a href="" class="stretched-link">Sed ut perspici</a></h4>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                  </div>
                </div><!-- End Service Item -->
      
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                  <div class="service-item position-relative">
                    <i class="bi bi-calendar4-week"></i>
                    <h4><a href="" class="stretched-link">Magni Dolores</a></h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                  </div>
                </div><!-- End Service Item -->
      
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                  <div class="service-item position-relative">
                    <i class="bi bi-broadcast"></i>
                    <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                  </div>
                </div><!-- End Service Item -->
      
              </div>
      
            </div>
      
          </section><!-- /Services Section -->
      
      
          <!-- Features Section -->
          <section id="features" class="features section">
      
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
              <h2>Features</h2>
              <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->
      
            <div class="container">
      
              <div class="row gy-4">
      
                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
                  <div class="features-item">
                    <i class="bi bi-eye" style="color: #ffbb2c;"></i>
                    <h3><a href="" class="stretched-link">Lorem Ipsum</a></h3>
                  </div>
                </div><!-- End Feature Item -->
      
                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="200">
                  <div class="features-item">
                    <i class="bi bi-infinity" style="color: #5578ff;"></i>
                    <h3><a href="" class="stretched-link">Dolor Sitema</a></h3>
                  </div>
                </div><!-- End Feature Item -->
      
                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="300">
                  <div class="features-item">
                    <i class="bi bi-mortarboard" style="color: #e80368;"></i>
                    <h3><a href="" class="stretched-link">Sed perspiciatis</a></h3>
                  </div>
                </div><!-- End Feature Item -->
      
                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="400">
                  <div class="features-item">
                    <i class="bi bi-nut" style="color: #e361ff;"></i>
                    <h3><a href="" class="stretched-link">Magni Dolores</a></h3>
                  </div>
                </div><!-- End Feature Item -->
      
                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="500">
                  <div class="features-item">
                    <i class="bi bi-shuffle" style="color: #47aeff;"></i>
                    <h3><a href="" class="stretched-link">Nemo Enim</a></h3>
                  </div>
                </div><!-- End Feature Item -->
      
                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="600">
                  <div class="features-item">
                    <i class="bi bi-star" style="color: #ffa76e;"></i>
                    <h3><a href="" class="stretched-link">Eiusmod Tempor</a></h3>
                  </div>
                </div><!-- End Feature Item -->
      
                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="700">
                  <div class="features-item">
                    <i class="bi bi-x-diamond" style="color: #11dbcf;"></i>
                    <h3><a href="" class="stretched-link">Midela Teren</a></h3>
                  </div>
                </div><!-- End Feature Item -->
      
                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="800">
                  <div class="features-item">
                    <i class="bi bi-camera-video" style="color: #4233ff;"></i>
                    <h3><a href="" class="stretched-link">Pira Neve</a></h3>
                  </div>
                </div><!-- End Feature Item -->
      
                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="900">
                  <div class="features-item">
                    <i class="bi bi-command" style="color: #b2904f;"></i>
                    <h3><a href="" class="stretched-link">Dirada Pack</a></h3>
                  </div>
                </div><!-- End Feature Item -->
      
                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1000">
                  <div class="features-item">
                    <i class="bi bi-dribbble" style="color: #b20969;"></i>
                    <h3><a href="" class="stretched-link">Moton Ideal</a></h3>
                  </div>
                </div><!-- End Feature Item -->
      
                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1100">
                  <div class="features-item">
                    <i class="bi bi-activity" style="color: #ff5828;"></i>
                    <h3><a href="" class="stretched-link">Verdo Park</a></h3>
                  </div>
                </div><!-- End Feature Item -->
      
                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1200">
                  <div class="features-item">
                    <i class="bi bi-brightness-high" style="color: #29cc61;"></i>
                    <h3><a href="" class="stretched-link">Flavor Nivelanda</a></h3>
                  </div>
                </div><!-- End Feature Item -->
      
              </div>
      
            </div>
      
          </section><!-- /Features Section -->
      
      
      
      
         
      
          <!-- Contact Section -->
          <section id="contact" class="contact section">
      
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
              <h2>Contact</h2>
              <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->
      
            <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      
              <div class="row gy-4">
      
                <div class="col-lg-5">
                  <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                    <i class="bi bi-geo-alt flex-shrink-0"></i>
                    <div>
                      <h3>Address</h3>
                      <p>Brgy 3, Balingasag Mis. Or.</p>
                    </div>
                  </div><!-- End Info Item -->
      
                  <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                    <i class="bi bi-telephone flex-shrink-0"></i>
                    <div>
                      <h3>Call Us</h3>
                      <p>+63-2-8123-4567</p>
                    </div>
                  </div><!-- End Info Item -->
      
                  <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                    <i class="bi bi-envelope flex-shrink-0"></i>
                    <div>
                      <h3>Email Us</h3>
                      <p>SRCB@example.com</p>
                    </div>
                  </div><!-- End Info Item -->
      
                </div>
      
                <div class="col-lg-7">
                  <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="500">
                    <div class="row gy-4">
      
                      <div class="col-md-6">
                        <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                      </div>
      
                      <div class="col-md-6 ">
                        <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                      </div>
      
                      <div class="col-md-12">
                        <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                      </div>
      
                      <div class="col-md-12">
                        <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                      </div>
      
                      <div class="col-md-12 text-center">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
      
                        <button type="submit">Send Message</button>
                      </div>
      
                    </div>
                  </form>
                </div><!-- End Contact Form -->
      
              </div>
      
            </div>
      
          </section><!-- /Contact Section -->
      
        </main>
      
        <footer id="footer" class="footer">
      
          <div class="container">
            <div class="copyright text-center ">
              <p>© <span>Copyright</span> <strong class="px-1 sitename">SRCB HED Online Examination</strong> <span>All Rights Reserved</span></p>
            </div>
            <div class="social-links d-flex justify-content-center">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
            </div>
          </div>
      
        </footer>
      
        <!-- Scroll Top -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
      
        <!-- Preloader -->
        <div id="preloader"></div>
      
        <!-- Vendor JS Files -->
        <script src="{{ asset('homepage_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('homepage_assets/vendor/php-email-form/validate.js') }}"></script>
        <script src="{{ asset('homepage_assets/vendor/aos/aos.js') }}"></script>
        <script src="{{ asset('homepage_assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('homepage_assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
        <script src="{{ asset('homepage_assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('homepage_assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('homepage_assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
      
        <!-- Main JS File -->
        <script src="{{ asset('homepage_assets/js/main.js') }}"></script>
      
      </body>
</html>

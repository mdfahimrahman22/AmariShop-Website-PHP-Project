<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="static/images/favicon.ico" type="image/x-icon">
  <!-- Box icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" type="text/css" href="static/fonts/font-awesome-4.7.0/css/font-awesome.min.css" />
<!-- Toastr cdn  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="static/css/styles.css" />
  <link rel="stylesheet" href="static/css/about_us.css" />
  <title>AmariShop</title>
  <style>
    .right{
      margin-top:0 !important;
    }
  </style>
</head>

<body>
  <!-- Header -->
  <header id="home" class="header">
    <?php include 'components/navbar.php'; ?>

    <!-- Hero -->
    <div class="hero-content-aboutus">
      <h2 class="shop-name-heading"><span class="shop-name"> Amari</span> Shop</h2>
      <h1 class="sub-heading1">
        <span>"Make your happiness affordable"</span>
      </h1>
      <a class="btn shopnow-btn" href="#">shop now</a>
    </div>
  </header>

  <!-- Main -->
  <main>
  <div class="container">
        <div class="title">
          <h1>Our Features</h1>
        </div>
    </div>
    <section class="advert section">
      <div class="advert-center container">
      <div class="advert-box product-safety">
          <div class="dotted">
            <div class="content-service">
              <h2>Product Safety</h2>
            </div>
          </div>
          <img src="static/images/protection.png" alt="">
        </div>

        <div class="advert-box fast-delivery">
        <div class="dotted">
            <div class="content-service">
              <h2>Fast Delivery</h2>
            </div>
          </div>
          <img src="static/images/express-delivery.png" alt="">
        </div>

        <div class="advert-box best-price">
          <div class="dotted">
            <div class="content-service">
              <h2>Best Price</h2>
            </div>
          </div>
          <img src="static/images/price-tag.png" alt="">
        </div>
      </div>
    </section>


    <!-- Product Banner -->
    <section class="section">
      <div class="product-banner">
        <div class="left">
          <img src="static/images/test.jpg" alt="" />
        </div>
        <div class="right">
          <div class="hero-content-aboutus">
          <h2 class="shop-name-heading"><span class="shop-name">Our </span>Service</h2>
            <h3 id="heading-3">
              <span>We provide great value by offering competitive prices on all our products
                and aim to please our customers with fast delivery and easy tracking system
              </span>
            </h3>
            <a class="btn shopnow-btn" href="#">shop now</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Team -->
    <div class="our_team_member">
      <div class="container">
        <div class="title">
          <h1>Our Team</h1>
        </div>
        <div class="row">
          <div class="col-xl-3 col-md-6 col-lg-3">
            <div class="single_team">
              <div class="thumb">
                <img src="static/images/profile_fahim.jpg" alt="">
                <div class="social_link">
                  <a href="#"><i class="fa fa-envelope"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
              <div class="master_name text-center">
                <h3>Md. Fahim Rahman</h3>
                <p>CSE Graduate, AUST</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 col-lg-3">
            <div class="single_team">
              <div class="thumb">
                <img src="static/images/profile_amlan.jpg" alt="">
                <div class="social_link">
                  <a href="#"><i class="fa fa-envelope"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
              <div class="master_name text-center">
                <h3>Amlan Chakraborty</h3>
                <p>CSE Graduate, AUST</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Testimonials -->
    <section class="section">
    <div class="container">
        <div class="title">
          <h1>Testimonials</h1>
        </div>
    </div>
      <div class="testimonial-center container">
        <div class="testimonial">
          <span>&ldquo;</span>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis,
            fugiat labore. Veritatis et omnis consequatur.
          </p>
          <div class="rating">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bx-star"></i>
          </div>
          <div class="img-cover">
            <img src="static/images/profile1.jpg" alt="" />
          </div>
          <h4>Will Smith</h4>
        </div>
        <div class="testimonial">
          <span>&ldquo;</span>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis,
            fugiat labore. Veritatis et omnis consequatur.
          </p>
          <div class="rating">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bx-star"></i>
          </div>
          <div class="img-cover">
            <img src="static/images/profile2.jpg" alt="" />
          </div>
          <h4>Will Smith</h4>
        </div>
        <div class="testimonial">
          <span>&ldquo;</span>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis,
            fugiat labore. Veritatis et omnis consequatur.
          </p>
          <div class="rating">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bx-star"></i>
          </div>
          <div class="img-cover">
            <img src="static/images/profile3.jpg" alt="" />
          </div>
          <h4>Will Smith</h4>
        </div>
      </div>
    </section>

    <!-- Brands -->
    <section class="section">
      <div class="brands-center container">
        <div class="brand">
          <img src="static/images/brand1.png" alt="" />
        </div>
        <div class="brand">
          <img src="static/images/brand2.png" alt="" />
        </div>
        <div class="brand">
          <img src="static/images/brand1.png" alt="" />
        </div>
        <div class="brand">
          <img src="static/images/brand2.png" alt="" />
        </div>
        <div class="brand">
          <img src="static/images/brand1.png" alt="" />
        </div>
        <div class="brand">
          <img src="static/images/brand2.png" alt="" />
        </div>
      </div>
    </section>
  </main>
  <?php include 'components/footer.php'; ?>

  <!-- GSAP -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
  <script>
    gsap.from(".hero-img", {
      opacity: 0,
      duration: 1,
      delay: 1.5,
      x: -200
    });
    gsap.from(".hero-content h2", {
      opacity: 0,
      duration: 1,
      delay: 2,
      y: -50
    });
    gsap.from(".hero-content h1", {
      opacity: 0,
      duration: 1,
      delay: 2.5,
      y: -45
    });
    gsap.from(".hero-content a", {
      opacity: 0,
      duration: 1,
      delay: 3.5,
      y: 50
    });
  </script>


  <!-- Bootstrap, jquery  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="static/vendor/jquery/jquery-3.2.1.min.js"></script>
  
  <!-- Custom Script -->
  <script src="static/js/index.js"></script>

</body>

</html>
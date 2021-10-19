<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="static/images/online-shopping.png" type="image/x-icon">
  <!-- Box icons -->
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="static/fonts/font-awesome-4.7.0/css/font-awesome.min.css" />
  <script src="static/vendor/jquery/jquery-3.2.1.min.js"></script>
  <!-- Toastr cdn  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="static/css/styles.css" />
  <title>AmariShop</title>
  
</head>

<body>
  <!-- Header -->
  <header id="home" class="header">
    <?php include 'components/navbar.php';
    include_once "controller.php";
    ?>

    <!-- Hero -->
    <?php
    $offer = get_offer();
    echo '
    <img src="' . $offer["banner_img"] . '" alt="" class="hero-img" />
    <div class="hero-content">
      <h2><span class="discount">' . $offer["sale_off"] . ' </span> SALE OFF</h2>
      <h1 class="banner-title">' . $offer["title"] . '</h1>
      <a class="btn shopnow-btn" href="products">shop now</a>
    </div>
    ';

    ?>

  </header>

  <!-- Main -->
  <main>
    <section class="advert section">
      <div class="advert-center container">

        <?php
        $advertisements = get_advertisements();
        foreach ($advertisements as $advertisement) {
          echo '
        <div class="advert-box" style="background-color: ' . $advertisement["bg_color"] . ';">
        <div class="dotted">
          <div class="content">
            <h2>' . $advertisement["title"] . '<br>Clothing</h2>
            <h4>' . $advertisement["subtitle"] . '</h4>
          </div>
        </div>
        <img src="' . $advertisement["img"] . '" alt="">
      </div>
        ';
        }
        ?>
      </div>
    </section>

    <!-- Featured -->
    <section class="section featured">
      <div class="title">
        <h1>Featured Products</h1>
      </div>

      <div class="product-center container">

        <?php
        $products = get_featured_products();
        show_products($products);
        ?>
      </div>
    </section>

    <!--Latest -->
    <section class="section featured">
      <div class="title">
        <h1>Latest Products</h1>
      </div>

      <div class="product-center container">
        <?php
        $products = get_latest_products();
        show_products($products);
        ?>

      </div>
    </section>

    <!-- Product Banner -->
    <section class="section">
      <div class="product-banner">
        <div class="left">
          <img src="static/images/family-shopping2.jpg" alt="" />
        </div>
        <div class="right">
          <div class="content">
            <h2><span class="discount">70% </span> SALE OFF</h2>
            <h1>
              <span>Collect Your</span>
              <span>Kids Collection</span>
            </h1>
            <a class="btn shopnow-btn" href="products">shop now</a>
          </div>
        </div>
      </div>
    </section>

    <?php include 'components/testimonials.php'; ?>


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
  <!-- Bootstrap  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Custom Script -->
  <script src="static/js/index.js"></script>
</body>

</html>
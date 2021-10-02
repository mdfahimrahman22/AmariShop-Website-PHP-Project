<?php
session_start();
$basename = basename($_SERVER['PHP_SELF']);
$domain = str_replace($basename, "", $_SERVER['PHP_SELF']) . "../";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo $domain; ?>static/images/online-shopping.png" type="image/x-icon">

    <!-- Box icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

    <!-- Glidejs -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="<?php echo $domain; ?>static/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!-- Toastr cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="<?php echo $domain; ?>static/css/styles.css" />
    <base href="<?php echo $domain; ?>">
    <title>Boy’s T-Shirt - Codevo</title>
</head>

<body>
    <?php include 'components/navbar.php';
    include_once "controller.php";
    $product_details = get_product_details($_GET['product_id']);
    
    ?>

    <!-- Product Details -->
    <section class="section product-detail">
        <div class="details container-md">
            <div class="left">
                <div class="main">
                    <img src="<?php echo $product_details["img_url"]?>" alt="">
                </div>
            </div>
            <div class="right">
                <span>Category:<?php echo $product_details["category_name"]?></span>
                <h1><?php echo $product_details["name"]?></h1>
                <div class="price"><?php echo $product_details["price"]?>৳</div>
                <form>
                    <div>
                        <select>
                            <option value="Select Size" selected disabled>Select Size</option>
                            <option value="1">32</option>
                            <option value="2">42</option>
                            <option value="3">52</option>
                            <option value="4">62</option>
                        </select>
                        <span><i class='bx bx-chevron-down'></i></span>
                    </div>
                </form>

                <form class="form">
                    <input type="text" placeholder="1">
                    <a href="cart.html" class="addCart">Add To Cart</a>
                </form>
                <h3>Product Details</h3>
                <div class="details">
                <p><?php echo nl2br($product_details["description"])?></p>
                </div>
                
            </div>
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

        foreach ($products as $product) {
          echo '
          <div class="product">
          <div class="product-header">
            <img src="' . $product["img_url"] . '" alt="">
            <ul class="icons">
              <span><i class="bx bx-heart"></i></span>
              <span><i class="bx bx-shopping-bag"></i></span>
              <span><i class="bx bx-search"></i></span>
            </ul>
          </div>
          <div class="product-footer">
            <a href="product-details/' . $product["product_id"] . '">
              <h3>' . $product["name"] . '</h3>
            </a>
            <div class="rating">';
          for ($x = 1; $x <= 5; $x++) {
            if ($x <= $product["rating"]) {
              echo '<i class="bx bxs-star"></i>';
            } else {
              echo '<i class="bx bx-star"></i>';
            }
          }
          echo '</div>
            <h4 class="price">' . $product["price"] . '৳</h4>
          </div>
        </div>
          ';
        }
        ?>

      </div>
    </section>

    <!-- Footer -->
    <?php include 'components/footer.php'; ?>
    <!-- End Footer -->

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <!-- Bootstrap  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom Script -->
    <script src="<?php echo $domain; ?>static/js/index.js"></script>
</body>

</html>
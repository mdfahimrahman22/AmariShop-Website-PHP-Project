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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="static/fonts/font-awesome-4.7.0/css/font-awesome.min.css" />
    <script src="static/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!-- Toastr cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="static/css/styles.css" />
    <title>AmariShop Products</title>
</head>

<body>
    <?php include 'components/navbar.php';
    include_once "controller.php";
    ?>

    <!-- All Products -->
    <section class="section all-products" id="products">
        <div class="top container">
            <h1>All Products</h1>
            <form>
                <select>
                    <option value="1">Defualt Sorting</option>
                    <option value="2">Sort By Price</option>
                    <option value="5">Sort By Rating</option>
                </select>
                <span><i class='bx bx-chevron-down'></i></span>
            </form>
        </div>

        <div class="product-center container">
            <?php
            $products = get_products();

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



    <?php include 'components/footer.php'; ?>

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <!-- Bootstrap  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom Script -->
    <script src="static/js/index.js"></script>
</body>

</html>
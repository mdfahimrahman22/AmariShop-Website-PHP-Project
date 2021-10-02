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
    <title>Your Cart</title>
</head>

<body>
    <?php include 'components/navbar.php';
    include_once "controller.php";
    ?>

    <!-- Cart Items -->
    <div class="container-md cart">
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="static/images/boys_fashion1.png" alt="">
                        <div>
                            <p>Boy’s T-Shirt</p>
                            <span>Price: 100৳</span>
                            <br />
                            <a href="#">remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1" min="1"></td>
                <td>100৳</td>
            </tr>
           
        </table>

        <div class="total-price">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>$200</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$50</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>$250</td>
                </tr>
            </table>
            <a href="#" class="checkout btn">Proceed To Checkout</a>

        </div>

    </div>


    <?php include 'components/footer.php'; ?>


    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <!-- Bootstrap  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom Script -->
    <script src="static/js/index.js"></script>
</body>

</html>
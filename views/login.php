<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="static/images/favicon.ico" type="image/x-icon" />

  <title>AmariShop Login</title>
  <!-- Box icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
  <link rel="stylesheet" type="text/css" href="static/fonts/font-awesome-4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />

  <script src="static/vendor/jquery/jquery-3.2.1.min.js"></script>
  <script src="static/vendor/tilt/tilt.jquery.min.js"></script>
  <!-- Toastr cdn  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="static/css/styles.css" />
  <link rel="stylesheet" type="text/css" href="static/css/login_form_style.css" />
  <link rel="stylesheet" href="static/css/util.css" />

  <style>
    .body {
      background-color: #d1e2e9 !important;
    }

    .login-page-header {
      min-height: 0 !important;
    }
  </style>
</head>

<body>
  <!-- Header -->
  <header id="home" class="header login-page-header">
    <!-- Navigation -->
    <?php include 'components/navbar.php'; ?>

  </header>

  <div class="container-login100">
    <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
      <form class="login100-form validate-form" method="POST">
        <span class="login100-form-title p-b-37">
          Login
        </span>

        <div class="wrap-input100 validate-input m-b-20 email_div">
          <input class="input100 email form-control" required type="email" aria-describedby="email_feedback" name="email" placeholder="Email">
          <div id="email_feedback" class="invalid-feedback">
            Invalid email address
          </div>
        </div>

        <div class="wrap-input100 validate-input m-b-25 pass_div">
          <input class="input100 pass form-control" required type="password" name="pass" placeholder="password">
        </div>

        <div class="container-login100-form-btn">
          <button class="login100-form-btn login_btn" name="login_btn" type="submit">
            Login
          </button>
        </div>

      </form>
      <div class="text-center p-t-57 p-b-20">
        <span class="txt1">
          Or login with
        </span>
      </div>
      <div class="flex-c p-b-23">
        <form method='POST'>
          <button type="submit" name="google_login_btn">
            <a href="#" class="login100-social-item">
              <i class="fa fa-facebook-f"></i>
            </a>
          </button>
        </form>
        <form method='POST'>
          <button type="submit" name="google_login_btn">
            <a href="#" class="login100-social-item">
              <img src="static/images/icons/icon-google.png" alt="GOOGLE">
            </a>
          </button>
        </form>
      </div>
      <div class="text-center">
        <div class="text-center p-t-0 p-b-0">
          <span class="txt1">
            Don't have an account?
          </span>
          <a href="signup" class="txt2 hov1 signup-btn">
            &nbspSign Up
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer  -->
  <?php include 'components/footer.php'; ?>
  <!-- GSAP -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
  <!-- Bootstrap, jquery  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Custom Script -->
  <script src="static/js/index.js"></script>
  <script src="static/js/login.js"></script>
  <?php
  include_once "controller.php";
  ?>
</body>

</html>
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

  <title>AmariShop Signup</title>
  <!-- Box icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
  <link rel="stylesheet" type="text/css" href="static/fonts/font-awesome-4.7.0/css/font-awesome.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="static/vendor/jquery/jquery-3.2.1.min.js"></script>
  <!-- Toastr cdn  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"/>
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
          Sign Up
        </span>
        <div class="wrap-input100 validate-input m-b-20 email_div">
          <input class="input100 email form-control" required type="email" aria-describedby="email_feedback" name="email" placeholder="Email">
          <div id="email_feedback" class="invalid-feedback">
            Invalid email address
          </div>
        </div>

        <div class="wrap-input100 validate-input m-b-25 pass_div">
          <input class="input100 pass form-control" required type="password" aria-describedby="pass_feedback" name="pass" placeholder="password">
          <div id="pass_feedback" class="invalid-feedback">
            Password is week.
          </div>
        </div>

        <div for="confirm_pass" class="wrap-input100 form-label m-b-25 confirm_pass_div">
          <input class="input100 confirm_pass form-control" required aria-describedby="confirm_pass_feedback" id="confirm_pass" type="password" name="confirm_pass" placeholder="confirm password">
          <div id="confirm_pass_feedback" class="invalid-feedback">
            Confirm password not matching.
          </div>
        </div>


        <div class="container-login100-form-btn">
          <button class="login100-form-btn signup_btn" type="submit" name="signup_btn">
            Sign Up
          </button>
        </div>

        <div class="text-center p-t-20 p-b-8">
          <span class="txt1">
            Or Signup with
          </span>
        </div>

        <div class="flex-c p-b-23">
          <a href="#" class="login100-social-item">
            <i class="fa fa-facebook-f"></i>
          </a>

          <a href="#" class="login100-social-item">
            <img src="static/images/icons/icon-google.png" alt="GOOGLE">
          </a>
        </div>

        <div class="text-center">
          <div class="text-center p-t-0 p-b-0">
            <span class="txt1">
              Already have an account?
            </span>
            <a href="login" class="txt2 hov1">
              &nbspLogin
            </a>
          </div>
        </div>
      </form>
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
  <script src="static/js/signup.js"></script>

  <?php
  include_once "controller.php";
  ?>
</body>

</html>
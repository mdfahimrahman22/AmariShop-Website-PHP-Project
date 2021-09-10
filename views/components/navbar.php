<?php
include_once "controller.php";
?>
<!-- Navigation -->
<nav class="nav">
  <div class="navigation container">
    <!-- <a href="home"> -->
    <div class="logo">
      <h1>Amari<span>Shop</span></h1>
    </div>
    <!-- </a> -->
    <div class="menu">
      <div class="top-nav">
        <div class="logo">
          <h1>AmariShop</h1>
        </div>
        <div class="close">
          <i class="bx bx-x"></i>
        </div>
      </div>

      <ul class="nav-list">
        <li class="nav-item">
          <a href="home" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a href="product.html" class="nav-link">Products</a>
        </li>
        <li class="nav-item">
          <a href="about_us" class="nav-link">About</a>
        </li>
        <li class="nav-item">
          <a href="contact.html" class="nav-link">Contact</a>
        </li>

        <?php
        $res = $database->validate_user();

        if ($res === 1) {
          echo ' 
          <li class="nav-item">
          <a href="#" class="nav-link icon"><i class="bx bx-user-circle"></i></a>
        </li> 
            <li class="nav-item">
              <a href="#" class="nav-link icon"><i class="bx bx-shopping-bag"></i></a>
            </li> 
            <form method="post">
            <li class="nav-item" >
              <button type="submit" name="logout_btn" class="nav-link icon logout-btn"><i class="bx bx-log-out-circle"></i></a>
            </li>
            </form>
            ';
        } else {
          echo '<li class="nav-item">
          <a href="login" class="nav-link">Log In</a>
        </li>
        <li class="nav-item">
          <a href="signup" class="nav-link">Sign Up</a>
        </li>';
        }
        ?>

      </ul>
    </div>

    <div class="hamburger">
      <i class="bx bx-menu"></i>
    </div>
  </div>
</nav>
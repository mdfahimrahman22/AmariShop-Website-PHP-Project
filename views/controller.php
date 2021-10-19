<?php
include_once __DIR__ . "/../model/Database.php";

// Common Controllers
init();

function init()
{
  $msg = &$_SESSION['message'];
  $type = &$_SESSION['type'];
  if ($msg && $type) {
    showMsg($msg, $type);
    $_SESSION['message'] = $_SESSION['type'] = "";
  }
}
function showMsg($msg, $type)
{
  echo "<script>toastr.options.timeOut = 1500;toastr." . $type . "(\"$msg\")</script>";
}
function navigateTo($route, $msg, $msgType)
{
  $_SESSION['message'] = $msg;
  $_SESSION['type'] = $msgType;
  echo "<script> window.location.href= '$route'; </script>"; //Route to Login Page
}

//User Validation Controller 
function validateUser()
{
  global $database;
  return $database->validate_user();
}

// Log In Controller
if (isset($_POST['login_btn'])) {
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  if ($email == null || $pass == null) {
    echo showMsg("Invalid credentials.", "error");
  } else {
    $response = $database->login($email, $pass);
    // print_r($response);
    if ($response == 1) {
      navigateTo("home", "Login Successful", "success");
      exit();
    } else if ($response == 2) {
      navigateTo("signup", "No account with this email", "warning");
      exit();
    } else if ($response == -1) {
      navigateTo("login", "Wrong Password", "error");
    } else {
      navigateTo("login", "Invalid User", "error");
    }
  }
}
if (isset($_POST['google_login_btn'])) {
  $database->login_with_google();
}

//   Sign Up Controller 
if (isset($_POST['signup_btn'])) {
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $confirmPass = $_POST['confirm_pass'];
  if ($email == null || $pass == null || $confirmPass == null) {
    echo showMsg("Invalid credentials.", "error");
  } else if ($pass != $confirmPass) {
    echo showMsg("Confirm Password is not matching.", "warning");
  } else {
    $res = $database->create_user($email, $pass);
    if ($res) {
      navigateTo("login", "Sign Up Successful", "success");
    } else {
      echo showMsg("Something went wrong. Please try again.", "error");
    }
  }
}

//Logout controller
if (isset($_POST['logout_btn'])) {
  $database->logout();
  navigateTo('home', "Logout Successful", 'Success');
}

//User Profile Controller
if (isset($_POST['save_profile'])) {
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $address = htmlentities($_POST['address']);
  if ($name == "" || $phone == "" || $address == "") {
    echo showMsg("Invalid Input. Please fill up all required fields.", "error");
  } else {
    $res = $database->update_profile($name, $phone, $address);
    if ($res) {
      navigateTo("profile/" . get_user_id(), "Profile Update Successful", "success");
    } else {
      showMsg("Something went wrong", "error");
    }
  }
}


function get_user_id()
{
  $user_id = &$_SESSION['user_id'];
  return $user_id;
}

function get_user_profile()
{
  global $database;
  return $database->get_user_data();
}


//Contact Page Controller
if (isset($_POST['contact_form_btn'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = htmlentities($_POST['message']);
  $res = $database->post_contact_message($name, $email, $subject, $message);
  if ($res) {
    showMsg("Thank you for your feedback.", "success");
  }
}
//Show Products Controller
function get_products()
{
  global $database;
  return $database->get_products();
}
function get_featured_products()
{
  global $database;
  return $database->get_featured_products();
}
function get_latest_products()
{
  global $database;
  return $database->get_latest_products();
}
function get_team_members()
{
  global $database;
  return $database->team_members();
}

function get_testimonials()
{
  global $database;
  return $database->get_testimonials();
}

function get_advertisements()
{
  global $database;
  return $database->get_advertisements();
}

function get_offer()
{
  global $database;
  return $database->get_offer();
}

function get_product_details($id)
{
  global $database;
  return $database->get_product_details($id);
}

if (isset($_GET["action"])) {
  if ($_GET["action"] == "delete") {
    $cookie_data = stripslashes($_COOKIE['shopping_cart']);
    $cart_data = json_decode($cookie_data, true);
    foreach ($cart_data as $keys => $values) {
      if ($cart_data[$keys]['item_id'] == $_GET["id"]) {
        unset($cart_data[$keys]);
        $item_data = json_encode($cart_data);
        setcookie("shopping_cart", $item_data, time() + (86400 * 30));
        header("location:cart");
      }
    }
  }
}

if (isset($_POST["add_to_cart_pd"])) {
  if (isset($_COOKIE["shopping_cart"])) {
    $cookie_data = stripslashes($_COOKIE['shopping_cart']);

    $cart_data = json_decode($cookie_data, true);
  } else {
    $cart_data = array();
  }
  $item_id_list = array_column($cart_data, 'item_id');

  if (in_array($_POST["hidden_id"], $item_id_list)) {
    foreach ($cart_data as $keys => $values) {
      if ($cart_data[$keys]["item_id"] == $_POST["hidden_id"]) {
        $cart_data[$keys]["item_quantity"] = $cart_data[$keys]["item_quantity"] + $_POST["quantity"];
      }
    }
  } else {
    $item_array = array(
      'item_id'   => $_POST["hidden_id"],
      'item_name'   => $_POST["hidden_name"],
      'item_img'   => $_POST["hidden_img"],
      'item_price'  => $_POST["hidden_price"],
      'item_quantity'  => $_POST["quantity"]
    );
    $cart_data[] = $item_array;
  }
  $item_data = json_encode($cart_data);
  setcookie('shopping_cart', $item_data, time() + (86400 * 30), '/');
  navigateTo("cart", "Successfully added to cart", "info");
}

if (isset($_POST["add_to_cart"])) {
  if (isset($_COOKIE["shopping_cart"])) {
    $cookie_data = stripslashes($_COOKIE['shopping_cart']);

    $cart_data = json_decode($cookie_data, true);
  } else {
    $cart_data = array();
  }
  $item_id_list = array_column($cart_data, 'item_id');

  if (in_array($_POST["hidden_id"], $item_id_list)) {
    foreach ($cart_data as $keys => $values) {
      if ($cart_data[$keys]["item_id"] == $_POST["hidden_id"]) {
        $cart_data[$keys]["item_quantity"] = $cart_data[$keys]["item_quantity"] + $_POST["quantity"];
      }
    }
  } else {
    $item_array = array(
      'item_id'   => $_POST["hidden_id"],
      'item_name'   => $_POST["hidden_name"],
      'item_img'   => $_POST["hidden_img"],
      'item_price'  => $_POST["hidden_price"],
      'item_quantity'  => $_POST["quantity"]
    );
    $cart_data[] = $item_array;
  }
  $item_data = json_encode($cart_data);
  setcookie('shopping_cart', $item_data, time() + (86400 * 30), '/');
  navigateTo("cart", "Successfully added to cart", "info");
}

function show_products($products)
{

  foreach ($products as $product) {
    echo '
    
    <div class="product">
    <div class="product-header">
      <img src="' . $product["img_url"] . '" alt="">
      <ul class="icons">
       <form method="post">
       
        <input type="hidden" name="hidden_name" value="' . $product["name"] . '" />
        <input type="hidden" name="hidden_img" value="' . $product["img_url"] . '" />
        <input type="hidden" name="hidden_price" value="' . $product["price"] . '" />
        <input type="hidden" name="hidden_id" value="' . $product["product_id"] . '" />
        <input type="hidden" name="quantity" value="1"/>
        <button type="submit" name="add_to_cart" class="shopping-cart-btn" value="Submit">
        <span><i class="bx bx-shopping-bag"></i></span>
        </button>
        
      </form>
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
}

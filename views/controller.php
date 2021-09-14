<?php
include_once __DIR__ . "/../model/Database.php";
include_once __DIR__ . "/../lib/vendor/autoload.php";

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
      exit();
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
if(isset($_POST['contact_form_btn'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = htmlentities($_POST['message']);
  $res=$database->post_contact_message($name,$email,$subject,$message);
  if($res){
    showMsg("Thank you for your feedback.","success");
  }
}



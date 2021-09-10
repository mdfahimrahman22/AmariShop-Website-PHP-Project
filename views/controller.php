<?php
include_once "../model/Database.php";
// Common Controllers

init();

function init(){
    $msg=&$_SESSION['message'];
    $type=&$_SESSION['type'];
    if ($msg && $type) {
      showMsg($msg, $type);
      $_SESSION['message'] = $_SESSION['type'] = "";
    }
}
function showMsg($msg, $type)
{
  echo "<script>toastr." . $type . "(\"$msg\")</script>";
}
function navigateTo($route, $msg, $msgType)
{
  $_SESSION['message'] = $msg;
  $_SESSION['type'] = $msgType;
  echo "<script> window.location.href= '$route'; </script>"; //Route to Login Page
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
      }else{
        navigateTo("login", "Invalid User", "error");
      }
    }
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
        navigateTo('home',"Logout Successful",'Success');
  }
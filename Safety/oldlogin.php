<?php
session_start();

include 'dbh.php';
$errors = array();
$username = $_POST['username'];
$password = $_POST['password'];
$_SESSION['success'] = "";
// trying to login to website

$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);



if (mysqli_num_rows($result) == 1) { // user found
  // check if user is admin or user
  $logged_in_user = mysqli_fetch_assoc($result);
  if ($logged_in_user['rolename'] == 'Admin') {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['user'] = $logged_in_user;
    $_SESSION['success']  = "You are now logged in";
    header('location: kaart/index.html?jaarplan=2020');


  }

  else if ($logged_in_user['rolename'] == 'LLV') {

    $_SESSION['user'] = $logged_in_user;
    $_SESSION['success']  = "You are now logged in";
    header('location: llv.php');
  }
  else{
    $_SESSION['user'] = $logged_in_user;
    $_SESSION['success']  = "You are now logged in";

    header('location: signed.php');
  }
}else {
  array_push($errors, "Wrong username/password combination");
}
function isLoggedIn()
{
  if (isset($_SESSION['user'])) {
    return true;
  }else{
    return false;
  }
}

function isAdmin()
{
  if (isset($_SESSION['user']) && $_SESSION['user']['rolename'] == 'Admin' ) {
    return true;
  }else{
    return false;
  }
}

function isLLV()
{
  if (isset($_SESSION['user']) && $_SESSION['user']['rolename'] == 'LLV' ) {
    return true;
  }else{
    return false;
  }
}


// escape string
function e($val){
  global $db;
  return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
  global $errors;

  if (count($errors) > 0){
    echo '<div class="error">';
      foreach ($errors as $error){
        echo $error .'<br>';
      }
    echo '</div>';
  }
}
// if (empty($username)) {
//   array_push($errors, "Username is required");
//   header("Refresh:2; url=auth.php");
// }
// if (empty($password)) {
//
//   array_push($errors, "Password is required");
//   header("Refresh:2; url=auth.php");
// }


// if (!$row = $result->fetch_assoc()) {
//     echo '<p>Your username or password is incorrect! Please try again.</p>';
//     header("Refresh:0; url=auth.php");
// } else {
// 	session_start();
//   $_SESSION['username'] = $username;
//   $_SESSION['success'] = "You are now logged in";
// 	header("Location: admin.php");
// }
?>

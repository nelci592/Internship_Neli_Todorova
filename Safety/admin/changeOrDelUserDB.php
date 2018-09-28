<?php
include('../dbh.php');
session_start();

if (isset($_POST['change'])) {


  }

if (isset($_POST['delete'])) {

      if($conn === false){
          die("ERROR: Could not connect. " . mysqli_connect_error());
      }

      $sql = "DELETE FROM user WHERE username = 'Jack'";
      if(mysqli_query($conn, $sql)){
          header('location: home.php');
      } else{
          echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
      }
}

 ?>

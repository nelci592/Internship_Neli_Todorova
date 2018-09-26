<?php
include '../dbh.php';
session_start();
if (isset($_POST['rolename'])) {
  $username = $_POST['username'];
//  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $rolename = $_POST['rolename'];
//  $rolename2 = $_POST['rolename2'];
  $password = $_POST['password'];
$sql = "INSERT INTO user (username, email, rolename, password)
        VALUES ('$username', '$email', '$rolename', '$password')";
$result = $conn->query($sql);
header('location: home.php');
};

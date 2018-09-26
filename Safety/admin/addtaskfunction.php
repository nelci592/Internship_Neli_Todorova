<?php
include '../dbh.php';
$taskname = $_POST['username'];
$email = $_POST['email'];
$rolename = $_POST['rolename'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];
$sql = "INSERT INTO user (username, email, rolename, password)
VALUES ('$username', '$email', '$rolename', '$password')";
$result = $conn->query($sql);
header("Location: home.php");

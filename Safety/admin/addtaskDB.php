<?php
include '../dbh.php';
session_start();
$task_descr = $_POST['task_descr'];
$rolename = $_POST['rolename'];
$username = $_POST['username'];


if (isset($_POST['addtask'])) {
$sql = "INSERT INTO task_user (task_descr, rolename, username)
VALUES ($task_descr', '$rolename', '$username')";
echo "$sql";
$result = $conn->query($sql);
header("Location: home.php");
}

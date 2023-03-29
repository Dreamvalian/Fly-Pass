<?php
include('../server/connection.php');

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$fullname = $_POST['fullname'];

$q = "INSERT INTO user values ('','$username','$password','$fullname','$email','employee')";
mysqli_query($conn, $q);

header("location:../pages/register.php");

die();

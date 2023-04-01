<?php
include('../server/connection.php');

$username = $_POST['user_name'];
$email = $_POST['user_email'];
$password = $_POST['user_password'];
$fullname = $_POST['full_name'];

$q = "INSERT INTO user values ('','$username','$password','$fullname','$email','employee')";
mysqli_query($conn, $q);

header("location:../pages/login.html");

die();

<?php
include "../server/connection.php";
$id = $_GET['id'];

$query = "DELETE FROM user WHERE id_user = '$id'";
mysqli_query($conn, $query);

header("location:../admin.php");
die();

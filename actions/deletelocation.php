<?php
include "../server/connection.php";
$id = $_GET['id'];

$query = "DELETE FROM locations WHERE id = '$id'";
mysqli_query($conn, $query);

header("location:../pages/inventory.php");

die();

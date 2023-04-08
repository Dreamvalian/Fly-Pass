<?php
include('../server/connection.php');

// wine-input //

$winename = $_POST['winename'];
$typewine = $_POST['typewine'];
$quantitywine = $_POST['quantitywine'];
$pricewine = $_POST['pricewine'];
$description = $_POST['description'];
$timestamp = time();
$date_time = date("Y-m-d H:i:s", $timestamp);

$query = "INSERT INTO wines VALUES ('','$winename','$typewine','$description','$quantitywine','$pricewine','$date_time','$date_time')";

mysqli_query($conn, $query);

header("location:../pages/inventory.php");

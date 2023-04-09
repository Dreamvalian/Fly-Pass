<?php
include('../server/connection.php');

// location input //

$rackname = $_POST['rackname'];
$description = $_POST['description'];

$query = "INSERT into locations values ('','$rackname','$description')";

mysqli_query($conn, $query);

header("location:../pages/inventory.php");

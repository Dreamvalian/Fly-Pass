<?php
include("../server/connection.php");

session_start();

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $type = $_POST['type'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $timestamp = time();
    $date_time = date("Y-m-d H:i:s", $timestamp);


    $q = "UPDATE wines SET name ='$name' , type ='$type', description = '$description' , quantity= '$quantity', price = '$price',  created_at = '', updated_at = '$date_time' where id ='$id'";
    mysqli_query($conn, $q);


    header('location:inventory.php');
}

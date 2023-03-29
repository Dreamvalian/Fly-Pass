<?php
session_start();
include('../server/connection.php');

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = mysqli_query($conn, "SELECT * FROM user where email = '$email' && password = '$password' LIMIT 1");
    $cek = mysqli_num_rows($sql);

    if ($cek == 1) {


        $data = mysqli_fetch_assoc($sql);
        if ($data['role'] == "admin") {
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            $_SESSION['logged_in'] = true;

            header("location:../admin.php");
            
        } else if ($data['role'] == "employee") {
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            header("location:../employee.php");
        } else {
            header("location:../pages/login.php?=failed");
        }
    } else {
        header("location:../pages/login.php?=failed");
    }
}

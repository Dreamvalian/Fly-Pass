<?php
session_start();
include('../server/connection.php');

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email' && password = '$password'");
    $cek = mysqli_num_rows($sql);

    if ($cek > 0) {
        $data = mysqli_fetch_assoc($sql);
        if ($data['role'] == "admin") {
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            header("location:../admin.php");
        } else if ($data['role'] == 'user') {
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            header("location:../user.php");
        } else {
            header("location:pages/login.php?pesan=gagal");
        }
    } else {
        header("location:pages/login.php?pesan=gagal");
    }
}

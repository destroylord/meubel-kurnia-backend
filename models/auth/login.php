<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/core/config.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $execute = mysqli_query($conn, $sql);

    $fetch = mysqli_fetch_assoc($execute);

    $hash = $fetch['password'];

    if ($fetch['role'] == 1) {
        if (password_verify($password, $fetch['password'])) {

            $_SESSION['username']   = $username;
            $_SESSION['handphone']  = $fetch['handphone'];
            $_SESSION['photo']      = $fetch['photo_profile'];

            header("location:".url()."resources/dashboard/index.php");
        }else {
            header("location:".url()."index.php");
            flash_message("Gagal", "Password Invalid");
        }
    } else {
        // echo flash_message("Gagal", "Akun Tidak ditemukan atau tidak cocok");
        echo "<script>alert('Akun Tidak ditemukan atau tidak cocok')</script>";
    }
?>
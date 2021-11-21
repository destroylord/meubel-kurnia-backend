<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/core/config.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $execute = mysqli_query($conn, $sql);

    $fetch = mysqli_fetch_assoc($execute);

    $hash = $fetch['password'];

    if (password_verify($password, $fetch['password'])) {

        $_SESSION['username'] = $username;

        header("location:".url()."resources/dashboard/index.php");
    }else {
        echo "Password invalid";
    };

?>
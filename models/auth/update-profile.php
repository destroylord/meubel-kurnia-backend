<?php
    include_once $_SERVER['DOCUMENT_ROOT'].'/core/config.php';

    $id = $_POST['id'];

    $username   = $_POST['username'];
    $handphone  = $_POST['handphone'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT, ['cost' => 10]);

    if ($_POST['password'] == '') {
        $_SESSION['error'] = 'Password Harus diisi';
        header("location:".url()."resources/auth/profile.php");
        return;
    } else {
        $sql = "UPDATE users SET username = '$username', handphone= '$handphone', password = '$password' WHERE id ='$id'";

        $ex = mysqli_query($conn, $sql);
        
        $_SESSION['success'] =  'Success updated profile';
        header("location:".url()."resources/auth/profile.php");
        return;
    }
<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/core/config.php';


if (isset($_POST['username']) && isset($_POST['handphone']) && isset($_POST['password']) ) {
    

    $username       = $_POST['username'];
    $no_handphone   = $_POST['handphone'];
    $password       = password_hash($_POST['password'], PASSWORD_DEFAULT, ['cost' => 10]);
    // $time           = date("now");

    $sql = "INSERT INTO users(username, password, handphone, photo_profile, token, created_at) VALUES('$username', '$password', '$no_handphone', NULL, NULL, '2021-11-22 10:22:35')";
    $ex  = mysqli_query($conn, $sql);


    if ($ex) {
        $response = [
            'status' => 200,
            'msg'    => 'Registered Success'
        ];
    } else {
        $response = [
            'status' => 201,
            'msg'    => 'Registered Failed'
        ];
    }

    header('Content-Type: application/json');
    echo json_encode($response);

}
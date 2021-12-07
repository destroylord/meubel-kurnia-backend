<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/core/config.php';

    $username       = $_POST['username'];
    $no_handphone   = $_POST['handphone'];
    $password       = password_hash($_POST['password'], PASSWORD_DEFAULT, ['cost' => 10]);
    $token          = bin2hex(random_bytes(16));
    $time           = date("Y-m-d H:i:s");

    if (empty($username) || empty($password)) {
        $response = [
            'status' => 422,
            'msg'    => 'Required is field username & password'
        ];
    }
    elseif (empty($username)) {
        $response = [
            'status' => 422,
            'msg'    => 'Required is field username'
        ];
    } 
    elseif(empty($password)) {
        $response = [
            'status' => 422,
            'msg'    => 'Required is field password'
        ];
    } else {

        $sql = "INSERT INTO users(username, password, handphone, photo_profile, token, role, created_at) VALUES('$username', '$password', '$no_handphone', NULL, '$token', 2, '$time')";
        $ex  = mysqli_query($conn, $sql);

        if ($ex) {
            $response = [
                'status' => 201,
                'msg'    => 'Created account has been successful'
            ];
        } else {
            $response = [
                'status' => 400,
                'msg'    => 'Bad Request & Account failed registered'
            ];
        }
    }
     
    header('Content-Type: application/json', false);
    echo json_encode($response, false);
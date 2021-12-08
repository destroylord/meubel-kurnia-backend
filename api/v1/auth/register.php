<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/core/config.php';

    $username       = $_POST['username'];
    $no_handphone   = $_POST['handphone'];
    $password       = $_POST['password'];
    $token          = bin2hex(random_bytes(16));
    $time           = date("Y-m-d H:i:s");

    if (empty($username)) {
        $code = 422;
         $response = [
            'message'    => 'The given data was invalid.',
            'error'      => [
                'username' => 'Username is required',
            ]
        ];
    } 

    if(empty($password)) {
        $code = 422;
         $response = [
            'message'    => 'The given data was invalid.',
            'error'      => [
                'password' => 'Password is required',
            ]
        ];
    } 

    if(empty($no_handphone)) {
        $code = 422;
         $response = [
            'message'    => 'The given data was invalid.',
            'error'      => [
                'password' => 'Password is required',
            ]
        ];
    } 


    if(!empty($username) && (!empty($password)) && (!empty($no_handphone))){

        $password_hash = password_hash($password, PASSWORD_DEFAULT, ['cost' => 10]);

        $sql = "INSERT INTO users(username, password, handphone, photo_profile, token, role, created_at) VALUES('$username', '$password_hash', '$no_handphone', NULL, '$token', 2, '$time')";

        $ex  = mysqli_query($conn, $sql);

        if ($ex) {
            $code = 201;
            $response = [
                'message'    => 'Created account has been successful',
            ];
        } else {
            $code = 500;
            $response = [
                'message'    => 'Bad Request'
            ];
        }

    }
    header('Content-Type: application/json', false, $code);
    echo json_encode($response, false);
    return;
<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/core/config.php';

$username  = $_POST['username'];
$password = $_POST['password'];

$sql    = "SELECT * FROM users WHERE username = '$username'";
$ex     = mysqli_query($conn, $sql);

$fetch = mysqli_fetch_assoc($ex);

// jika role 2 
if ($fetch['role'] == 2) {


    // jika password sama denegan didatabase
    if (password_verify($password, $fetch['password']) ) {

        // jika token sama dengan dengan didatabase
        if ($fetch['token'] != "") {
            

            $code = 200;
            $response = [
                'message'    => "Successfuly login!!",
                'data'   => [
                    'id' => (int)$fetch['id'],
                    'username' => $username
                ]
            ];

        }else {
            $code = 500;
            $response = [
                'message'    => "Bad Request not Access"
            ];
        }
    }else {
        $code = 422;
        $response = [
            'message'    => "The given data was invalid",
            "error"      => [
                'password' => "Password invalid"
            ]
        ];
    }

} else {
    $code = 500;
    $response = [
        'message'    => "Bad Request"
    ];
}

header('Content-Type: application/json', false, $code);
echo json_encode($response);

<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/core/config.php';

$username  = $_POST['username'];
$password = $_POST['password'];

$sql    = "SELECT * FROM users WHERE username = '$username' ";
$ex     = mysqli_query($conn, $sql);

$fetch = mysqli_fetch_assoc($ex);

// jika role 2 
if ($fetch['role'] == 2) {

    // jika password sama denegan didatabase
    if (password_verify($password, $fetch['password']) ) {

        // jika token sama dengan dengan didatabase
        if ($fetch['token'] != "") {
            
            $response = [
                'status' => 200,
                'msg'    => "Successfuly login!!",
                'data'   => $username
            ];

        }else {
            $response = [
                'status' => 201,
                'msg'    => "Maaf anda tidak memiliki akses"
            ];
        }
    }else {
        $response = [
            'status' => 201,
            'msg'    => "Password yang dimasukkan salah"
        ];
    }

} else {
    $response = [
        'status' => 201,
        'msg'    => "Akun tidak cocok"
    ];
}

echo json_encode($response);

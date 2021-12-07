<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/core/config.php';

$user       = $_POST['id_user'];
$furniture  = $_POST['id_furniture'];
$qty        = $_POST['quantity'];
$time       = date("Y-m-d H:i:s");


$sql = "INSERT INTO checkouts(id_user, id_furniture, quantity, created_at)VALUES('5', '2', '$qty','$time')";

$ex = mysqli_query($conn, $sql);

if ($ex) {
    $response = [
        'status' => 200,
        'msg'    => 'Successfuly checkout'
    ];
} else {
    $response = [
        'status' => 404,
        'msg'    => 'Not Found'
    ];
}

echo json_encode($response);

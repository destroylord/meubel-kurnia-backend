<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/core/config.php';

$kode           = $_POST['kode'];
$id_checkout    = $_POST['id_checkout'];
$price          = $_POST['price'];
$location       = $_POST['location'];
$time           = date("Y-m-d H:i:s");

$sql = "INSERT INTO orders(kode, id_checkout, price, location, created_at) VALUES('$kode', '$id_checkout', '$price', '$location', '$time')";

$ex = mysqli_query($conn, $sql);

if ($ex) {
    $response = [
        'status' => 200,
        'msg'    => 'Successfuly orders'
    ];
} else {
    $response = [
        'status' => 422,
        'msg'    => 'Bad Request'
    ];
}

header('Content-Type: application/json', false);
echo json_encode($response);
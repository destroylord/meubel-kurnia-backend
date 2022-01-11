<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/core/config.php';

$kode           = $_POST['kode'];
$id_checkout    = $_POST['id_checkout'];
$d_user         = $_POST['id_user'];
$id_furniture   = $_POST['id_furniture'];
$quantity       = $_POST['quantity'];
$price          = $_POST['price'];
$location       = $_POST['location'];
$time           = date("Y-m-d H:i:s");

$sql = "INSERT INTO orders(kode, id_checkout, price, location, created_at) VALUES('$kode', '$id_checkout', '$price', '$location', '$time')";

$ex = mysqli_query($conn, $sql);

if ($ex) {
    $code = 200;
    $response = [
        'message'    => 'Successfuly orders'
    ];
} else {
    $code = 500;
    $response = [
        'message'    => 'Bad Request'
    ];
}

header('Content-Type: application/json', false, $code);
echo json_encode($response);
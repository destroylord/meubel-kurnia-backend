<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/core/config.php';

$kode       = $_POST['kode'];
$user       = $_POST['id_user'];
$furniture  = $_POST['id_furniture'];
$price      = $_POST['price'];
$location   = $_POST['location'];
$time       = date("now");



$sql = "INSERT INTO checkouts(kode, id_user, id_furniture, count_furniture, price, location, created_at)VALUES('$kode', '5', '7', '$price', '$location', '2021-11-22 10:22:35')";

$ex = mysqli_query($conn, $sql);

if ($ex) {
    $response = [
        'status' => 200,
        'msg'    => 'Successfuly created data'
    ];
} else {
    $response = [
        'status' => 201,
        'msg'    => 'Failed created data'
    ];
}

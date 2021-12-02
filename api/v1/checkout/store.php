<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/core/config.php';

$user       = $_POST['id_user'];
$furniture  = $_POST['id_furniture'];
$qty        = $_POST['quantity'];
$time       = date("now");


$sql = "INSERT INTO checkouts(id_user, id_furniture, quantity, created_at)VALUES('5', '2', '$qty','2021-11-22 10:22:35')";

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

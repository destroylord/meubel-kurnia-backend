<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/core/config.php';

$user       = $_POST['id_user'];
$furniture  = $_POST['id_furniture'];
$qty        = $_POST['quantity'];
$time       = date("Y-m-d H:i:s");


$sql = "INSERT INTO checkouts(id_user, id_furniture, quantity, created_at)VALUES('$user', '$furniture', '$qty','$time')";

$ex = mysqli_query($conn, $sql);

if ($ex) {
    $code = 200;
    $response = [
        'message'    => 'Successfuly checkout'
    ];
} else {
    $code = 500;
    $response = [
        'message'    => 'Bad Request'
    ];
}

header('Content-Type: application/json', false, $code);
echo json_encode($response);

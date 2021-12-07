<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/core/config.php';

$id = $_GET['id'];

$sql = "SELECT * FROM furnitures WHERE id = '$id' ";
$ex = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_object($ex)) {
    $data[] = $row;
}

if ($data) {
    $response = [
        'status' => 200,
        'msg'    => 'Success',
        'data'   => $data
    ];
}else {
    $response = [
        'status' => 404,
        'msg'    => 'Not Found',
    ];
}

header('Content-Type: application/json');
echo json_encode($response);
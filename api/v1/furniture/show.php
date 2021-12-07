<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/core/config.php';

$sql = "SELECT * FROM furnitures ORDER BY created_at DESC";
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
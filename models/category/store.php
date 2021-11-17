<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/core/config.php';

$name = $_POST['nama'];
$time = date("Y-m-d H:i:s");

$sql = "INSERT INTO categories_furniture (nama, created_at) VALUES('$name', '$time')";

if ($conn->query($sql) === true) {
    echo json_encode([
        'status' => 200,
        'msg' => 'successfully created',
    ]);
} else {
    echo "gagal";

    $conn->error;
}

?>
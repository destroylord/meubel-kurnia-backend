<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/core/config.php';

$name = $_POST['nama'];
$time = date("now");

$sql = "INSERT INTO categories_furniture (nama, created_at) VALUES('$name', '$time')";

if ($conn->query($sql) === true) {
    echo "berhasil";
} else {
    echo "gagal";

    $conn->error;
}
// echo json_encode([
//     'status' => 200,
//     'msg' => 'successfully created',
//     'data' => $sql
// ]);

?>
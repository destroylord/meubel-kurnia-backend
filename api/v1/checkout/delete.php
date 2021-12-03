<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/core/config.php';


$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'DELETE') {
        
    $id     = $_POST['id_checkout'];

    $sql    = "DELETE FROM checkouts WHERE id_checkout = '$id'";

    $ex = mysqli_query($conn, $sql);

    if ($ex) {
        $response = [
            'status' => 200,
            'msg'   => "Successfully Deleted"
        ];
    } else {
        $response = [
            'status' => 201,
            'msg'   => "Failed Delete"
        ];
    }

    // header("Content-Type:application/json");
    // echo json_encode($response);

}

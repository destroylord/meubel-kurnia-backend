<?php
    include_once $_SERVER['DOCUMENT_ROOT'].'/core/config.php';

    // who edit
    if (isset($_GET['id'])) {

        $id = $_GET['id'];

        edit_data($conn, $id);
    }


    function edit_data($conn, $id) {
        $sql = "SELECT * FROM categories_furniture WHERE id = '$id'";
        $execute = mysqli_query($conn, $sql);

        $row = mysqli_fetch_assoc($execute);

        echo json_encode($row);
    }

    // proccess update
    if (isset($_POST['id'])) {

        $id = $_POST['id'];
        update_data($conn, $id);
    }
    
    function update_data($conn, $id){

        $nama = $_POST['nama'];
        $time = date("Y-m-d H:i:s");

        $sql = "UPDATE categories_furniture SET nama = '$nama', created_at = '$time'
                WHERE id = '$id'";

        $ex = mysqli_query($conn, $sql);

        if ($ex) {
            echo json_encode([
                'status' => 200,
                'title' => 'Berhasil',
                'msg' => 'successfully updated',
            ]);
        } else {
            echo "gagal update data";
        }
        
        
    }


?>
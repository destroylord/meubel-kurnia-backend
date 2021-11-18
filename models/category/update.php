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

        $sql = "UPDATE categories_furniture SET nama = '$nama'
                WHERE id = '$id'";

            if ($conn->query($sql) === true) {
                echo json_encode([
                    'status' => 200,
                    'msg' => 'successfully updated',
                ]);
            } else {
                echo "gagal";

                $conn->error;
            }
        
    }


?>
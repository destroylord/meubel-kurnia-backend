<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/core/config.php';

if (isset($_POST['delete_images_furniture'])) {

    $id = $_POST['delete_id'];
    $furniture_img = $_POST['delete_images'];

    $sql = mysqli_query($conn , "DELETE FROM furnitures WHERE id = '$id'");

    if ($sql) {
        unlink($_SERVER['DOCUMENT_ROOT']."/public/uploads/".$furniture_img);
        header("location:".url()."resources/furniture");exit;
    } else {
        echo "Gagal";
    }
    
}

?>
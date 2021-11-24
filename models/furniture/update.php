<?php
    include_once $_SERVER['DOCUMENT_ROOT'].'/core/config.php';

    $id             = $_POST['id'];

    $name           = $_POST['name'];
    $category       = $_POST['id_category_furniture'];
    $desc           = $_POST['descriptions'];
    $price          = $_POST['price'];
    $time           = date("Y-m-d H:i:s");

    $img            = $_FILES['images']['name'];

    $sql = "UPDATE furnitures SET name = '$name' , images = '$img',  price = '$price' , descriptions = '$desc', id_category_furniture = '$category', updated_at = '$time' WHERE id = '$id'";

    if ( $sql ) {
        echo "<script>alert('Data insert successfuly!')</script>";
    }else {
        echo "<script>alert('Data inserted Failed!')</script>";
    }

?>
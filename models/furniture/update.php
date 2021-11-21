<?php
    include_once $_SERVER['DOCUMENT_ROOT'].'/core/config.php';

    $id             = $_POST['id'];

    $name           = $_POST['name'];
    $category       = $_POST['id_category_furniture'];
    $desc           = $_POST['descriptions'];
    $price          = $_POST['price'];
    $time           = date("Y-m-d H:i:s");

    if (isset($_FILES['images']['name']) && ($_FILES['images']['name'] != '')) {
        $temp   = $_FILES['images']['tmp_name'];
        $img    = $_FILES['images']['name'];

        // delete old image from folder
        unlink($_SERVER['DOCUMENT_ROOT']."/public/uploads/$old_images");

        // new image upload
        move_uploaded_file($temp, $_SERVER["DOCUMENT_ROOT"]."/public/uploads/".$img);
    } else {
        $img = $old_images;
    }

    $sql = "UPDATE furnitures SET name = '$name' , images = '$img',  price = '$price' , descriptions = '$desc', id_category_furniture = '$category', updated_at = '$time' WHERE id = '$id'";

    if ( $sql ) {
        echo "<script>alert('Data insert successfuly!')</script>";
    }else {
        echo "<script>alert('Data inserted Failed!')</script>";
    }

?>
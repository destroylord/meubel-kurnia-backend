<?php
    include_once $_SERVER['DOCUMENT_ROOT'].'/core/config.php';

    $name           = $_POST['name'];
    $price          = $_POST['price'];
    $id_category    = $_POST['id_category_furniture'];
    $desc           = $_POST['descriptions'];
    $time           = date("Y-m-d H:i:s");


    // images
    $rand = rand();
    $ektensi = ['png', 'jpg', 'jpeg'];
    $filename = $_FILES['images']['name'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if (!in_array($ext, $ektensi)) {
        header("location:".url()."resources/furniture/create.php");        
    } else {
        $xx =  $rand.'_'.$filename;
        move_uploaded_file($_FILES['images']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/public/uploads/'.$xx);
        $sql = mysqli_query($conn, "INSERT INTO furnitures(name, images, price, descriptions, id_category_furniture,created_at) VALUES('$name', '$xx', '$price','$desc','$id_category','$time')");

        $retVal = ($sql) ? "Berhasil" : "error" ;
        echo $retVal;exit;
    }

?>
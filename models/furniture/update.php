<?php
    include_once $_SERVER['DOCUMENT_ROOT'].'/core/config.php';


    if (isset($_POST['updated'])) {

        $root = $_SERVER['DOCUMENT_ROOT'];
        // $root = url();
       

        $id             = $_POST['id'];

        $name           = $_POST['name'];
        $category       = $_POST['id_category_furniture'];
        $desc           = $_POST['descriptions'];
        $price          = $_POST['price'];
        $time           = date("Y-m-d H:i:s");

        $new_img        = $_FILES['images']['name'];
        $tmp_img        = $_FILES['images']['tmp_name'];
        $old_img        = $_POST['old-images'];

        if ($new_img != '') {
            $update_filename = $new_img;

            move_uploaded_file($tmp_img, $root."/public/uploads/".$update_filename);
            unlink($root."/public/uploads/".$old_img);
            
            echo "<script>alert('images updated')</script>";

        } else {
            $update_filename = $old_img;
            echo "<script>alert('images updated old images')</script>";
        }
            
        // Execute
        $sql = "UPDATE furnitures SET name = '$name' , images = '$update_filename',  price = '$price' , descriptions = '$desc', id_category_furniture = '$category', updated_at = '$time' WHERE id = '$id'";

        $ex = mysqli_query($conn, $sql);
        if ($sql) {
            echo "success updated";
        } else {
            echo "failed updated";
        }
        
        
    }

?>
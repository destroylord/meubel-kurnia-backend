<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/core/config.php';

$id = $_GET['id'];
        
    $sql = mysqli_query($conn , "DELETE FROM furnitures WHERE id = '$id'");

    header("location:".url()."resources/furniture");
?>
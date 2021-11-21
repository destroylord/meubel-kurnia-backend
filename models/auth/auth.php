<?php
    include_once '../../core/config.php';

    if (!isset($_SESSION["username"])) header("location:".url()."index.php");
?>
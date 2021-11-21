<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/core/config.php';

session_start();
session_destroy();
header("Location:".url()."index.php");
?>
<?php

// Connection
$conn = mysqli_connect("localhost", "root", '', "mebel_kurnia");

// url
function url()
{
    return sprintf(
        "%s://%s:8080/",
        isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
        $_SERVER['SERVER_NAME'],
    );
}



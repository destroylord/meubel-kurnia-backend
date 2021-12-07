<?php

// open session
session_start();

// Connection
$conn = mysqli_connect("localhost", "u8895984_mebel_kurnia_root", "iOo(uv?{yooa", "u8895984_mebel_kurnia");

// url
function url()
{
    return sprintf(
        "%s://%s:8080/",
        isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
        $_SERVER['SERVER_NAME'],
    );
}

function flash_message($name, $text = ''){
    if (isset($_SESSION[$name])) {
        $msg = $_SESSION[$name];
        unset($_SESSION[$name]);
        return $msg;
    }else {
        $_SESSION[$name] = $text;
    }

    return '';
}



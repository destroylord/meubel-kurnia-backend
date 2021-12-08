<?php

// open session
session_start();

define("HOST", "localhost");
define("USERNAME", "u8895984_mebel_kurnia_root");
define("PASSWORD", "iOo(uv?{yooa");
define("DB", "u8895984_mebel_kurnia");


// Connection
$conn = mysqli_connect("HOST", "USERNAME", "PASSWORD", "DB");

// url
function url()
{
    return sprintf(
        "%s://%s/",
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



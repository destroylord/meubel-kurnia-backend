<?php

if (php_sapi_name() == 'cli-server') {
    return false;
}

header('index.php');
// if (preg_match('/\.(?:png|jpg|jpeg|gif)$/', $_SERVER["REQUEST_URI"])) {
//     return false;
// } else {
//     echo "<p>Welcome</p>";
// }
<?php

if (php_sapi_name() == 'cli-server') {
    return false;
}

header('index.php');

<?php

namespace helper;

class Response {

    function Response($code, $message, $data = null) {
        echo json_encode([
            'code'      => $code,
            'message'   => $message,
            'data'      => $data
        ]);
    }
}
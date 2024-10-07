<?php

function generateRandomString ($length) {
    if(!empty($length) && ($length > 1) && is_numeric($length) &&($length <= 16)){
    return base64_encode(random_bytes($length));
    } else {
        return false;
    }

};
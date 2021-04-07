<?php

include 'src/encode_rle.php';
include 'src/decode_rle.php';

use function encode_rle as encode;
use function decode_rle as decode;

if ($argc > 3) {
    return 0;
} elseif ($argv[1] === "encode") {  
    if ($argv[2] == True) {
        echo encode($argv[2]);
    } else {
        return 0;
    }
} elseif ($argv[1] === "decode") {
    if ($argv[2] == True) {
        echo decode($argv[2]);
    } else {
        return 0;
    }
} else {
    return 0;
}
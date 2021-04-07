<?php

include 'src/encode_advanced_rle.php';
include 'src/decode_advanced_rle.php';

use function encode_advanced_rle as encode;
use function decode_advanced_rle as decode;

if ($argc > 4) {
    return 0;
} elseif ($argv[1] === "encode") {  
    if ($argv[2] == True and $argv[3] == True) {
        echo encode($argv[2], $argv[3]);
    } else {
        return 0;
    }
} elseif ($argv[1] === "decode") {
    if ($argv[2] == True and $argv[3] == True) {
        echo decode($argv[2], $argv[3]);
    } else {
        return 0;
    }
} else {
    return 0;
}
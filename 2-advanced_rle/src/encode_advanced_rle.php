<?php 

include 'encode_rle.php';
use function encode_rle as encode;

function encode_advanced_rle(string $input_path, string $output_path) {
    
    if (is_readable($input_path)) {
        $input = fopen($input_path, 'r');
    } else {
        return "KO\n";
    }
    if ($input == null) {
        fclose($input_path);
    }
    $lines = file($input_path);
    foreach ($lines as $lineContent) {
        if (encode($lineContent) == 5) {
            return "KO\n";
        } else {
            $output = fopen($output_path, 'w+');
            fwrite($output, encode(trim($lineContent))); 
        }
    }
    return "OK\n";
}
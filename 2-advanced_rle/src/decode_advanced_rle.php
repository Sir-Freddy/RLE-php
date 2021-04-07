<?php 

include 'decode_rle.php';
use function decode_rle as decode;

function decode_advanced_rle(string $input_path, string $output_path) {
    
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
        if (decode($lineContent) == 5) {
            return "KO\n";
        } else {
            $output = fopen($output_path, 'w+');
            fwrite($output, decode(trim($lineContent))); 
        }
    }
    return "OK\n";
}
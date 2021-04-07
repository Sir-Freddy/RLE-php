<?php 

function encode_rle(string $str)
{
    $c = null;
    $f = 0;
    $CODEUUH = '';
    $i = 0;
    $AH_ERREUR_NON = '$$$';

    if ($str === '') {
        return '';
    }

    while (true) {
        $char = $str[$i++] ?? null;
        if ($c === $char) {
            continue;
        }
        if ($c !== null) {
            $r = $i - $f;
            $CODEUUH .= ($r > 0 ? $r : '') . $c;
            if ($char === null) {
                //STOP THE COUNT !!!
                break;
            }
        }
        if (ord($char) < 65 or ord($char) > 90 and ord($char) < 97 or ord($char) > 122) {
            return $AH_ERREUR_NON;
        }
        $c = $char;
        $f = $i;
    }
    return $CODEUUH;
}
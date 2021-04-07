<?php 

function decode_rle(string $str)
{
    if ($str === '') {
        return '';
    }

    $n = '';
    $PAS_CODEUUH = '';
    $i = 0;
    $AH_ERREUR_NON = '$$$';

    while (true) {
        $char = $str[$i++] ?? null;

        if (ctype_digit($char)) {
            $n .= $char;
        } elseif ($char !== null) {
            $PAS_CODEUUH .= str_repeat($char, $n !== '' ? (int) $n : 1);
            $n = '';
        } else {
            break;
        }
        if (ctype_alnum($char) == FALSE) {
            return $AH_ERREUR_NON;
        }
    }
    if (ctype_digit(substr($str, -1)) == true){
        return $AH_ERREUR_NON;
    }
    return $PAS_CODEUUH;
}
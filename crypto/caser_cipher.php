<?php


function encrypt(string $plaintext, int $key ):string {
    $charset = str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZ');
    $numchars = count($charset);
    $ciphertext = "";
    $new = null;

    $plaintext = trim($plaintext);
    $plaintext = strtoupper($plaintext);
    $plainArray = str_split($plaintext);

    for ($i=0; $i<=count($plainArray)-1; $i++){
        if (in_array($plainArray[$i],$charset)){
           $location = array_search($plainArray[$i],$charset);
           $shift_location = $location + $key;
            $shift_location %= $numchars;
            $new = $charset[$shift_location];
        }else{
            $new = $plainArray[$i];
        }
        $ciphertext .= $new;
    }

    return $ciphertext;
}

function decrypt(string $ciphertext, int $key ):string {
    $charset = str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZ');
    $numchars = count($charset);
    $plaintext = "";
    $cipherArray = str_split($ciphertext);
    for ($i=0; $i<=count($cipherArray)-1; $i++){
        if (in_array($cipherArray[$i],$charset)){
            $location = array_search($cipherArray[$i],$charset);
            $shift_location = $location - $key;
            $shift_location %= $numchars;
            $new = $charset[$shift_location];
        }else{
            $new = $cipherArray[$i];
        }
        $plaintext .= $new;
    }
    return $plaintext;

}


echo encrypt("hello",2)."<br>";
echo decrypt("JGNNQ",2)."<br>";

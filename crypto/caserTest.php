<?php

function encrypt($plainText , $key){
    $charset = str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZ');
    $numchars = count($charset);
    $plainText = str_split(strtoupper($plainText));
    $new = null;
    for ($i=0; $i <= count($plainText)-1; $i++){
        if (in_array($plainText[$i],$charset)){
            $location = array_search($plainText[$i],$charset);
            $shiftLocation = $location + $key;
            echo $shiftLocation;
            $shiftLocation %= $numchars;
            $new .= $charset[$shiftLocation];
            echo $plainText[$i]."=>".$charset[$shiftLocation]."<br>";
            echo $shiftLocation."=>".$numchars."<br>";
        }
    }
return $new;

}
echo encrypt("Hello",14);
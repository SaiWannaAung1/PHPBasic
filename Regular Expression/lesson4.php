<?php

$str = "This is Regular Expressionnnn lesso 4 ";
$pattern = "/(n{2,3})/";
echo preg_match_all($pattern, $str);



?>
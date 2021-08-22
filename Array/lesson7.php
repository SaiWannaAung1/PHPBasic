<?php
$colors = array("red", "blue", "black");
array_push($colors, "bluesky");
array_push($colors, "white");
unset($colors[1]);
$colors[0] = "blue";
print_r($colors);


?>
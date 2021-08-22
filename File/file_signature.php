<?php
$filename = "images/tom and jerry.jpg";
$myfile = fopen($filename, "r") or die("Unable to open $filename file");
$data =  fread($myfile,4);

echo bin2hex($data);
fclose($myfile);
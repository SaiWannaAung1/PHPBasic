<?php
$allowedType = array('89504E47', '47494638', 'FFD8FFE0', 'FFD8FFE1');
$filename = "images/tom and jerry.jpg";
$myfile = fopen($filename, "r") or die("Unable to open $filename file");
$data =  fread($myfile,4);

$fileSing =  strtoupper(bin2hex($data));

echo in_array($fileSing,$allowedType);
fclose($myfile);
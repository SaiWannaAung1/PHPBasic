<?php

$myfile = fopen("test.txt", "r") or die("This file is not able of open");
echo fread($myfile , filesize("test.txt"));
//fseek($myfile,0);
//echo fread($myfile , filesize("test.txt"));
fclose($myfile);

?>
<?php
$myfile = fopen("test.txt", "w") or die("Unable to open file");
$text = "This is test data\n";
$text2 = "This is test data2";
fwrite($myfile, $text);
fwrite($myfile, $text2);
fclose($myfile);

?>
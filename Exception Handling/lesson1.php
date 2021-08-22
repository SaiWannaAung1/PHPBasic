<?php
try{
	if (file_exists("tests.txt")) {
		echo "File Exist";

$myfile = fopen("test.txt", "r") or die("This file is not able of open");
echo fread($myfile , filesize("test.txt"));
fclose($myfile);

	}else{
		throw new Exception("File not found");
		
	}

}catch(Exception $e){
	echo $e->getMessage();
}

?>
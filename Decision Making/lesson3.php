<?php
//this is register username and password
$runame = "jhon";
$rpassword = "jhon1234";

//this is login username and password
$luname = "jhon3";
$lpassword = "jhon1234";

// false or true
if($runame == $luname and $rpassword == $lpassword){
	echo "Login success";
}else{
	echo "Login fail";
}

$bool = false;

if(!$bool){
	echo "Hello";
}

?>
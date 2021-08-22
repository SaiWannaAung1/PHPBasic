<?php


function checkEmailFormat($email){

$pattern = "/\w+[@]\w+[.]\w+/";

if (preg_match($pattern, $email) == 1) {
	return 1;
}else {
	return 0;
}

}

echo checkEmailFormat("s9@gmail.com");


?>


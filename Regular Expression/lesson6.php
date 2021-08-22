<?php
function isStrongPassword($password){
$isupper = false;
$islower = false;
$isdigit = false;
$isspecial = false;
$countValid = false;


if (preg_match('/[A-Z]/', $password)) {
	$isupper = true;
}


if (preg_match('/[a-z]/', $password)) {
	$islower = true;
}

if (preg_match('/[0-9]/', $password)) {
	$isdigit = true;
}

if (preg_match('/[!@#$%*]/', $password)) {
	$isspecial = true;
}

if (strlen($password) >= 8) {
	$countValid = true;
}

if ($isupper and $islower and $isdigit and $isspecial and $countValid) {
	return 1;
}else{
	return 0;
}



}




echo isStrongPassword("Ss9!Ss9!");



?>
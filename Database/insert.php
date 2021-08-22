<?php
include "connection.php";
$name = "kyawkyaw2";
$email = "kyawkyaw2@gmail.com";
$password = "12345";
$en_pass = md5($password);
$insert_query = "INSERT INTO user (name, email, password) VALUE ('$name','$email','$en_pass')";
$db -> exec($insert_query);

?>
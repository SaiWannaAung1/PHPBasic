<?php
include "connection.php";
$id = 7;
$name = "Maw Maw";
$email = "mawmaw@gmail.com";
$update_query = "UPDATE user SET name = '$name', email = '$email' WHERE id = '$id'";
$db -> exec($update_query);


?>
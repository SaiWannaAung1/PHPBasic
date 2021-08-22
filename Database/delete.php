<?php
include "connection.php";

$id = 7;

$delete_query = "DELETE FROM user WHERE id = '$id' ";
$db -> exec($delete_query);



?>
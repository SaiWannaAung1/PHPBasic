<?php
session_start();

$_SESSION["favcolor"] = "green";

$_SESSION["favcolor2"] = "green2";

unset($_SESSION["favcolor2"] );

?>
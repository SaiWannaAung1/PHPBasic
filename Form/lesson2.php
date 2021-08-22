
<?php
if (isset($_POST['btn_register'])) {
  $name = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];


  echo "Name is ".$name."<br>";
  echo "Email is ".$email."<br>";
  echo "Password is ".$password."<br>";
}

?>
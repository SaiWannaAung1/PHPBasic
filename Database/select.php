<?php
include "connection.php";

$select_query = "SELECt * FROM user";

$data = $db -> query($select_query);
echo "<pre>";
print_r($data->fetchAll());
echo "</pre>";
?>



<!DOCTYPE html>
<html>
<head>
	<title>SELECT QUERY</title>
</head>
<body>
<table border="1">
  <tr>
    <th>id</th>
    <th>name</th>
    <th>email</th>
    <th>password</th>
  </tr>


<?php

foreach ($data as $array) {
	echo "<tr>";
	echo "<td>". $array['id']. "</td>";
	echo "<td>". $array['name']. "</td>";
	echo "<td>". $array['email']. "</td>";
	echo "<td>". $array['password']. "</td>";
	echo "</tr>";
}

?>


</table>





</body>
</html>






<?php
$cars = array( 
array("BMW",12, 19),
array("Toyata",13, 15),
array("Honda",11, 14)

);

for($row = 0; $row <= count($cars)-1; $row++){
	
	for ($col = 0; $col <= count($cars[$row])-1; $col++){
		echo $cars[$row][$col];
		echo "<br>";
	}

}


?>
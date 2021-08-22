<?php

function loop($endNum){
	for ($x = 1; $x <= $endNum; $x++) {
	echo "Hello World".$x;
	echo "<br>";
}
}

loop(7);

loop(5);

?>
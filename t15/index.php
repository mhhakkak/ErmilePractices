<?php

// In the name of Allah
// Traning 15

$num = ['green', 'yellow', 'red'];

foreach ($num as $key => $value) {
	echo "<b style='color:$value'>$key <b/><br/>" ;
}


$temp = 1;
$num  = 1;
for ($i=0; $i < 10; $i++)	#Fibunatchi
{ 
	$num += $temp;
	$temp = $num - $temp;
	echo "<b style='color:blue'>$num <b/>";
}
?>
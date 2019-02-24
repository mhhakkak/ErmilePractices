<?php

// In the name of Allah
// Traning 14
$x1 = 4;
$x2 = 6;
$x3 = 8;
$x4 = 10;

function avrg($x1,$x2,$x3,$x4)
{
	$x1 = ($x1 + $x2 + $x3 + $x4)/4;
	return $x1;
}

while (avrg($x1,$x2,$x3,$x4) > 3) 
{
	avrg($x1,$x2,$x3,$x4);
	echo avrg($x1,$x2,$x3,$x4) . print "<br/>";
	$x1--;
}


?>
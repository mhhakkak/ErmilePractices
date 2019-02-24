<?php

// In the name of Allah
// Traning 16

for ($i=1; $i < 11; $i++)
{ 
	for ($j=1; $j < 20; $j++)
	{ 
		if ($j <= (20-(2*$i-1))/2 || $j > (20-(2*$i-1))/2+2*$i-1)
		{
			echo ". ";
		}
		else
			echo "*";
	}
	echo "<br/>";
}
?>
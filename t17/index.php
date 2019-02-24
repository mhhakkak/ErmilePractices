<?php

// In the name of Allah
// Traning 17

function rec_line($l_b = 5,$l_e = 10, $h_b = 5, $h_e = 10)
{
	echo "<pre>";
	for ($i=1; $i <= $h_e; $i++)
	{ 
		for ($j=1; $j <= $l_e; $j++)
		{ 
			if ($i == $h_b && $j >= $l_b || $i == $h_e && $j >= $l_b || $j == $l_b && $i >= $h_b || $j == $l_e && $i >= $h_b)
			{
				print "*";
			}
			else
			{
				print " ";
			}
		}
		print "<br/>";
	}
	echo "<br/></pre>";
}

function lozy_line($l, $h, $x=1, $y=1)
{
	echo "<pre>";
	for ($i=1; $i <= $x+$l; $i++)
	{ 
		for ($j=1; $j <= $y+$h; $j++)
		{ 
			$j1 = -1*$h/$l * ($i - ($x + $l/2)) + $y;
			$j2 = 1 * $h/$l * ($i - ($x + $l/2)) + $y;
			$j3 = -1* $h/$l * ($i - ($x + $l/2)) + $y + $h;
			$j4 = 1 * $h/$l * ($i - ($x + $l/2)) + $y + $h;

			if ($j == $j1 && $i >= $x && $j >= $y || $j == $j2 && $i >= $x && $j >= $y || $j == $j3 && $i >= $x && $j >= $y || $j == $j4 && $i >= $x && $j >= $y)
			{
				print "*";
			}
			else
			{
				print " ";
			}
		}
		print "<br/>";
	}
	echo "<br/></pre>";
}

rec_line();
// rec_line( , , );   error!
rec_line(3);
rec_line(3,8);
rec_line(3,20,2,5);
rec_line(20,3,5,2);

lozy_line(30,60,5,60);
?>
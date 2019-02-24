<?php

// In the name of Allah
// Traning 12

//echo pow(25,1/2);

$x = 1;

if ($x >20 xor $x <0)
{
	echo "<h1 style='color:red'>Wrong!<h1/>";
}
elseif ($x > 17)
{
	echo "<b>High score,<b/> <h1 style='color:green'>exelent!<h1/>";
}
elseif ($x > 14)
{
	echo "<b>Mmmm...,<b/> <h1 style='color:yellow'>Not Bad!<h1/>";
}
elseif ($x > 9)
{
	echo "<b>Pass Shodi!,<b/> <h1 style='color:blue'>Barrik!<h1/>";
}
elseif ($x >= 0)
{
	echo "<b>Oftadi Refigh,<b/> <h1 style='color:red'>Hazf Mishi!<h1/>";
}


if ($x >13 && $x <20)
{
	echo "Your score is as <b> Normal <b/> student's score";
}
elseif ($x<2 || $x >18)
{
	echo "You are a <b>Nokhbe!<b/>";
}
?>
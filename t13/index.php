<?php

// In the name of Allah
// Traning 13

$x = 19;

switch ($x)
{
	case 17:
	case 18:
	case 19:
		echo "<b>High score,<b/> <h1 style='color:green'>exelent!<h1/>";
		break;

	case 15:
	case 16:
		echo "<b>Mmmm...,<b/> <h1 style='color:yellow'>Not Bad!<h1/>";
		break;

	case 0:
	case 1:
	case 2:
		echo "<b>Oftadi Refigh,<b/> <h1 style='color:red'>Hazf Mishi!<h1/>";
		break;

	default:
		echo "<h2 style='color:pink'>Hello ...<h2/>";
}


?>
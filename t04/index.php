<?php

// In the name of Allah
// Traning 4

$var1 = 'Paradise';

function f_echo()
{
	$var2 = 'Rezvaan';
	echo "<h1> Var1 inside F is : $var1 </h1><br />";
	echo "<h2> Var2 inside F is : $var2 </h2><br />";
}

f_echo();

echo "<h1> Var1 outside F is : $var1 </h1><br />";
echo "<h2> Var2 outside F is : $var2 </h2><br />";

$var3 = 'Rezvan2';
function f_cmbn()
{
	global $var1, $var3;
	$var3 = $var1 . $var3;
	echo $var3 . "<br />";
}

f_cmbn();

echo "<p style='color:blue'>$var3</p>";




?>
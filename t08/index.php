<?php

// In the name of Allah
// Traning 8

$var1 = 1;
$var2 = 1.1;
$var3 = "Salam";
$var4 = 'salam';
$var5 = [$var1, "12", $var3, $var2];
$var6 = "";
$var7 = null;

function _test($x)
{
	var_dump($x);
	echo "<br>";
}

_test($var1);
_test($var2);
_test($var3);
_test($var4);
_test($var5);
_test($var6);
_test($var7);
_test($var5[1]);

?>